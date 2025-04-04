<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for Bootstrap Business theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function bootstrap_business_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
    '#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
    '#default_value' => theme_get_setting('color_scheme'),
    '#options' => array(
    'blue' => t('Blue'),
    'gray' => t('Gray'),
    'green' => t('Green'),
    'orange' => t('Orange'),
    'pink' => t('Pink'),
    'purple' => t('Purple'),
    'red' => t('Red'),
    'turquoise' => t('Turquoise'),
    'yellow' => t('Yellow'),
    'local' => t('Local'),
    ),
  );

}
