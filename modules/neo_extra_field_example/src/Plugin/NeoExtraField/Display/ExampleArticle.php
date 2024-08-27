<?php

namespace Drupal\neo_extra_field_example\Plugin\NeoExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\neo_extra_field\Plugin\NeoExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @NeoExtraFieldDisplay(
 *   id = "article_only",
 *   label = @Translation("Only for articles"),
 *   description = @Translation("An extra field to display static text."),
 *   bundles = {
 *     "node.article",
 *   }
 * )
 */
class ExampleArticle extends NeoExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    return ['#markup' => 'This is output from ExampleArticle'];
  }

}
