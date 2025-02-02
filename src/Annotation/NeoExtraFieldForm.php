<?php

namespace Drupal\neo_extra_field\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a NeoExtraFieldForm item annotation object.
 *
 * @see \Drupal\neo_extra_field\Plugin\NeoExtraFieldFormManager
 *
 * @Annotation
 */
class NeoExtraFieldForm extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * The description of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description = '';

  /**
   * The entity + bundle combination(s) the plugin supports.
   *
   * Format: [entity].[bundle] for specific entity-bundle combinations or
   * [entity].* for all bundles of the entity.
   *
   * @var string[]
   */
  public $bundles = [];

  /**
   * The default weight of the field.
   *
   * @var int
   */
  public $weight = 0;

  /**
   * Whether the field is visible by default.
   *
   * @var bool
   */
  public $visible = FALSE;

}
