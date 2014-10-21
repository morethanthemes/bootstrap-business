<?php 

/**
 * Page alter.
 */
function bootstrap_business_page_alter($page) {
	$mobileoptimized = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'MobileOptimized',
		'content' =>  'width'
		)
	);
	$handheldfriendly = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'HandheldFriendly',
		'content' =>  'true'
		)
	);
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1'
		)
	);
	drupal_add_html_head($mobileoptimized, 'MobileOptimized');
	drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
	drupal_add_html_head($viewport, 'viewport');
}

/**
 * Preprocess variables for html.tpl.php
 */
function bootstrap_business_preprocess_html(&$variables) {
	/**
	 * Add IE8 Support
	 */
	drupal_add_css(path_to_theme() . '/css/ie8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lt IE 9)', '!IE' => FALSE), 'preprocess' => FALSE));
    
	/**
	* Bootstrap CDN
	*/
    
    if (theme_get_setting('bootstrap_css_cdn', 'bootstrap_business')) {
        $cdn = '//maxcdn.bootstrapcdn.com/bootstrap/' . theme_get_setting('bootstrap_css_cdn', 'bootstrap_business')  . '/css/bootstrap.min.css';
        drupal_add_css($cdn, array('type' => 'external'));
    }
    
    if (theme_get_setting('bootstrap_js_cdn', 'bootstrap_business')) {
        $cdn = '//maxcdn.bootstrapcdn.com/bootstrap/' . theme_get_setting('bootstrap_js_cdn', 'bootstrap_business')  . '/js/bootstrap.min.js';
        drupal_add_js($cdn, array('type' => 'external'));
    }
	
	/**
	* Add Javascript for enable/disable scrollTop action
	*/
	if (theme_get_setting('scrolltop_display', 'bootstrap_business')) {

		drupal_add_js('jQuery(document).ready(function($) { 
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$("#toTop").fadeIn();	
			} else {
				$("#toTop").fadeOut();
			}
		});
		
		$("#toTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});	
		
		});',
		array('type' => 'inline', 'scope' => 'header'));
	}
	//EOF:Javascript
}

/**
 * Override or insert variables into the html template.
 */
function bootstrap_business_process_html(&$vars) {
	// Hook into color.module
	if (module_exists('color')) {
	_color_html_alter($vars);
	}
}

/**
 * Preprocess variables for page template.
 */
function bootstrap_business_preprocess_page(&$vars) {

	/**
	 * insert variables into page template.
	 */
	if($vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) { 
		$vars['sidebar_grid_class'] = 'col-md-3';
		$vars['main_grid_class'] = 'col-md-6';
	} elseif ($vars['page']['sidebar_first'] || $vars['page']['sidebar_second']) {
		$vars['sidebar_grid_class'] = 'col-md-4';
		$vars['main_grid_class'] = 'col-md-8';		
	} else {
		$vars['main_grid_class'] = 'col-md-12';			
	}

	if($vars['page']['header_top_left'] && $vars['page']['header_top_right']) { 
		$vars['header_top_left_grid_class'] = 'col-md-8';
		$vars['header_top_right_grid_class'] = 'col-md-4';
	} elseif ($vars['page']['header_top_right'] || $vars['page']['header_top_left']) {
		$vars['header_top_left_grid_class'] = 'col-md-12';
		$vars['header_top_right_grid_class'] = 'col-md-12';		
	}

	/**
	 * Add Javascript
	 */
	if($vars['page']['pre_header_first'] || $vars['page']['pre_header_second'] || $vars['page']['pre_header_third']) { 
	drupal_add_js('
	function hidePreHeader(){
	jQuery(".toggle-control").html("<a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a>");
	jQuery("#pre-header-inside").slideUp("fast");
	}

	function showPreHeader() {
	jQuery(".toggle-control").html("<a href=\"javascript:hidePreHeader()\"><span class=\"glyphicon glyphicon-minus\"></span></a>");
	jQuery("#pre-header-inside").slideDown("fast");
	}
	',
	array('type' => 'inline', 'scope' => 'footer', 'weight' => 3));
	}
	//EOF:Javascript
}

/**
 * Override or insert variables into the page template.
 */
function bootstrap_business_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
}

/**
 * Preprocess variables for block.tpl.php
 */
function bootstrap_business_preprocess_block(&$variables) {
	$variables['classes_array'][]='clearfix';
}

/**
 * Override theme_breadrumb().
 *
 * Print breadcrumbs as a list, with separators.
 */
function bootstrap_business_breadcrumb($variables) {
	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb)) {
		$breadcrumb[] = drupal_get_title();
		$breadcrumbs = '<ol class="breadcrumb">';

		$count = count($breadcrumb) - 1;
		foreach ($breadcrumb as $key => $value) {
		$breadcrumbs .= '<li>' . $value . '</li>';
		}
		$breadcrumbs .= '</ol>';

		return $breadcrumbs;
	}
}

/**
 * Search block form alter.
 */
function bootstrap_business_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
	    unset($form['search_block_form']['#title']);
	    $form['search_block_form']['#title_display'] = 'invisible';
		$form_default = t('Search this website...');
	    $form['search_block_form']['#default_value'] = $form_default;

		$form['actions']['submit']['#attributes']['value'][] = '';

	 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
	}
}
