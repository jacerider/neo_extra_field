<?php

namespace Drupal\neo_extra_field_example\Plugin\NeoExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\neo_extra_field\Plugin\NeoExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @NeoExtraFieldDisplay(
 *   id = "all_nodes",
 *   label = @Translation("For all nodes"),
 *   description = @Translation("An extra field to display static text."),
 *   bundles = {
 *     "node.*"
 *   },
 *   weight = -30,
 *   visible = true
 * )
 */
class ExampleAllNodes extends NeoExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    return ['#markup' => 'This is output from ExampleAllNodes'];
  }

}
