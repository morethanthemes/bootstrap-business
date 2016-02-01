(function ($, Drupal, drupalSettings) {

  "use strict";

  Drupal.color = {
    logoChanged: false,
    callback: function(context, settings, form, farb, height, width) {
        
      if (!this.logoChanged) {
        $('#preview #preview-logo img').attr('src', drupalSettings.color.logo);
        this.logoChanged = true;
      }
      // Remove the logo if the setting is toggled off.
      if (drupalSettings.color.logo === null) {
        $('div').remove('#preview-logo');
      }

    // Main-bg
    $('#preview', form).css('background-color', $('.js-color-palette input[name="palette[bg]"]', form).val());
      
    $('#preview-main #preview-node-footer', form).css('border-top-color', $('.js-color-palette input[name="palette[bg]"]', form).val());

    // Text preview
    $('#preview a, #preview a:hover, #preview a:focus', form).css('color', $('.js-color-palette input[name="palette[link]"]', form).val());
    $('#preview h2 a', form).css('color', '#444');
    $('#preview ul.preview-menu li a', form).css('color', '#999999');  
    $('.preview-call-to-action .preview-btn', form).css('color', '#ffffff');
    $('#preview ul.preview-menu li a.preview-active', form).css('color', $('.js-color-palette input[name="palette[link]"]', form).val());

    // Pre Header
    $('.preview-toggle-control span', form).css('background-color', $('.js-color-palette input[name="palette[highlight]"]', form).val());
    $('.preview-toggle-control', form).css('border-top-color', $('.js-color-palette input[name="palette[highlight]"]', form).val());

    // Call-to-action
    $('#preview-page-bottom', form).css('background-color', $('.js-color-palette input[name="palette[highlight]"]', form).val());
    $('.preview-call-to-action .preview-btn', form).css('background-color', $('.js-color-palette input[name="palette[link]"]', form).val());

    }
  };
})(jQuery, Drupal, drupalSettings);
