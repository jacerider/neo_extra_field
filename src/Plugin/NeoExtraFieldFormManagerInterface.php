<?php

namespace Drupal\neo_extra_field\Plugin;

use Drupal\Core\Form\FormStateInterface;

/**
 * Provides the Extra field form plugin manager.
 */
interface NeoExtraFieldFormManagerInterface {

  /**
   * Exposes the plugins to hook_entity_neo_extra_field_info.
   *
   * @return array
   *   The array structure is identical to that of the return value of
   *   \Drupal\Core\Entity\EntityFieldManagerInterface::getNeoExtraFields().
   *
   * @see hook_entity_neo_extra_field_info()
   */
  public function fieldInfo();

  /**
   * Appends the renderable data from plugins to hook_form_alter.
   *
   * @param array $form
   *   The entity form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state object.
   */
  public function entityFormAlter(array &$form, FormStateInterface $form_state);

}
