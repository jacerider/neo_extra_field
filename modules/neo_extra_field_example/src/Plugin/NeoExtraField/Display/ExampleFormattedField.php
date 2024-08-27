<?php

namespace Drupal\neo_extra_field_example\Plugin\NeoExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\neo_extra_field\Plugin\NeoExtraFieldDisplayFormattedBase;

/**
 * Example Extra field with formatted output.
 *
 * @NeoExtraFieldDisplay(
 *   id = "formatted_field",
 *   label = @Translation("Data formatted as field with label"),
 *   description = @Translation("An extra field to display multiple text items."),
 *   bundles = {
 *     "node.article",
 *   }
 * )
 */
class ExampleFormattedField extends NeoExtraFieldDisplayFormattedBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->t('Three items');
  }

  /**
   * {@inheritdoc}
   */
  public function getLabelDisplay() {
    return 'above';
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(ContentEntityInterface $entity) {
    return [
      ['#markup' => 'One'],
      ['#markup' => 'Two'],
      ['#markup' => 'Three'],
    ];
  }

}
