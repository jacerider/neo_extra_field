<?php

declare(strict_types = 1);

namespace Drupal\neo_extra_field\Drush\Generators;

use DrupalCodeGenerator\Asset\AssetCollection;
use DrupalCodeGenerator\Attribute\Generator;
use DrupalCodeGenerator\Command\BaseGenerator;
use DrupalCodeGenerator\GeneratorType;

/**
 * Generator class for neo_extra_field display plugin.
 */
#[Generator(
  name: 'plugin:neo:extra-field-display',
  description: 'Generates an extra field display plugin.',
  templatePath: __DIR__,
  type: GeneratorType::MODULE_COMPONENT,
)]
final class NeoExtraFieldDisplayGenerator extends BaseGenerator {

  /**
   * {@inheritdoc}
   */
  protected function generate(array &$vars, AssetCollection $assets): void {
    $ir = $this->createInterviewer($vars);
    $vars['machine_name'] = $ir->askMachineName();
    $vars['plugin_label'] = $ir->askPluginLabel();
    $vars['plugin_id'] = $ir->askPluginId();
    $vars['class'] = $ir->askPluginClass(suffix: 'ExtraField');
    $vars['services'] = $ir->askServices(FALSE);
    $assets->addFile('src/Plugin/NeoExtraField/Display/{class}.php', 'neo-extra-field-display.twig');
  }

}
