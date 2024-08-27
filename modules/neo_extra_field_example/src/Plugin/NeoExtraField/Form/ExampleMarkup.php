<?php

namespace Drupal\neo_extra_field_example\Plugin\NeoExtraField\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\neo_extra_field\Plugin\NeoExtraFieldFormBase;

/**
 * Example Extra field form display.
 *
 * @NeoExtraFieldForm(
 *   id = "example_markup",
 *   label = @Translation("Example markup"),
 *   description = @Translation("Some examples of elements with markup on a form."),
 *   bundles = {
 *     "node.*"
 *   },
 *   visible = true
 * )
 */
class ExampleMarkup extends NeoExtraFieldFormBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(array &$complete_form, FormStateInterface $form_state) {
    $element = [];
    $element['markup'] = ['#markup' => '<p>Hello world 1</p>'];
    $element['container'] = [
      '#type' => 'container',
      '#markup' => '<p>Hello world 2</p>',
    ];
    $element['item'] = [
      '#type' => 'item',
      '#title' => 'Greeting',
      '#markup' => '<p>Hello world 3</p>',
      '#description' => "A common line of example output.",
    ];

    return $element;
  }

}
