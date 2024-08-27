<?php

/**
 * @file
 * Extra Field API documentation.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Defines Extra Field Display types.
 *
 * Extra Field API Displays and Forms allow developers to add display-only
 * fields and form elements to entities. The entities and entity bundle(s) for
 * which the plugin is available is determined with the the 'bundles' key.
 * Site builders can use extra fields as normal field on an entity form or
 * display view mode.
 *
 * NeoExtraFieldDisplay are plugins managed by the
 * \Drupal\neo_extra_field\Plugin\NeoExtraFieldDisplayManager class.
 * An NeoExtraFieldDisplay is a plugin annotated with class
 * \Drupal\neo_extra_field\Annotation\NeoExtraFieldDisplay and implements
 * \Drupal\neo_extra_field\Plugin\NeoExtraFieldDisplayInterface (in most cases, by
 * extending one of the base classes). NeoExtraFieldDisplay plugins need to
 * be in the namespace \Drupal\{your_module}\Plugin\NeoExtraField\Display.
 *
 * NeoExtraFieldForm are plugins managed by the
 * \Drupal\neo_extra_field\Plugin\NeoExtraFieldFormManager class.
 * An NeoExtraFieldForm is a plugin annotated with class
 * \Drupal\neo_extra_field\Annotation\NeoExtraFieldForm and implements
 * \Drupal\neo_extra_field\Plugin\NeoExtraFieldFormInterface (in most cases, by
 * extending NeoExtraFieldFormBase). NeoExtraFieldForm plugins need to
 * be in the namespace \Drupal\{your_module}\Plugin\NeoExtraField\Form.
 *
 * @see plugin_api
 */

/**
 * Performs alteration on Extra Field Display plugins.
 *
 * @param array $info
 *   An array of information of existing Extra Field Displays, as collected by
 *   the annotation discovery mechanism.
 */
function hook_neo_extra_field_display_info_alter(array &$info) {

  // Let the all_nodes plugin also be used on all taxonomy terms.
  if (isset($info['all_nodes'])) {
    $info['all_nodes']['bundles'][] = 'taxonomy_term.*';
  }
}

/**
 * Performs alteration on Extra Field Form plugins.
 *
 * @param array $info
 *   An array of information of existing Extra Field Form, as collected by the
 *   annotation discovery mechanism.
 */
function hook_neo_extra_field_form_info_alter(array &$info) {

  // Let the all_nodes plugin also be used on all taxonomy terms.
  if (isset($info['all_nodes'])) {
    $info['all_nodes']['bundles'][] = 'taxonomy_term.*';
  }
}

/**
 * @} End of "addtogroup hooks".
 */
