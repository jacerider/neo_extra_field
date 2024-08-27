<?php

namespace Drupal\neo_extra_field\Plugin;

/**
 * Provides the Extra field plugin manager.
 */
interface NeoExtraFieldManagerBaseInterface {

  /**
   * The component id prefix for every neo_extra_field.
   */
  const NEO_EXTRA_FIELD_PREFIX = 'neo_extra_field_';

  /**
   * Clear the service's local cache.
   */
  public function clearCache();

  /**
   * Exposes the NeoExtraField plugins to hook_entity_neo_extra_field_info().
   *
   * @return array
   *   The array structure is identical to that of the return value of
   *   \Drupal\Core\Entity\EntityFieldManagerInterface::getNeoExtraFields().
   *
   * @see hook_entity_neo_extra_field_info()
   */
  public function fieldInfo();

}
