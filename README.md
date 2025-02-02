# Extra Field module

The Extra Field module provides two plugin types. One for extra fields in entity
forms and one for extra fields in entity views.

## Developer usage

This module allows developers to add custom form elements to fieldable entities
by providing a plugin. Two plugin types are provided: NeoExtraFieldForm and
NeoExtraFieldDisplay. NeoExtraFieldForm elements typically provide form alters and can
be positioned in an entity form (mode) just like field widgets.
NeoExtraFieldDisplay elements typically combine existing entity data and format it
for display. They can be positioned in an entity view mode just like field
widgets. Unlike normal entity fields, the extra fields do not 'own' data and do
not store. But they use entity data of the entity they are applied to.

### Examples

The Extra Field Example module (modules/neo_extra_field_example) contains ready to
use plugins of both Display and Form plugins. You can copy an example over to
your (custom) module and modify it to suit your needs.

## Site builder usage

Once created, the extra fields can be used in form and view modes like other
fields. Extra fields are created for specific entity/entity type combinations.
That is why you find extra field plugins only in specific form or view modes,
not in all.

In the Manage form display tab of the entity for which the plugin is created,
enable and position an NeoExtraFieldForm element relative to other fields. In the
Manage display tab of an entity you can enable and position an NeoExtraFieldDisplay
element relative to other fields.

(Optionally) print the output of an NeoExtraFieldDisplay element in a twig
template. As any other field, the extra field is rendered in the entity's view
mode. The render array of the element is provided as neo_extra_field_[plugin_name].
For example in a node template: {{ content.neo_extra_field_[plugin_name] }}.

## API

Extra fields uses hook_entity_neo_extra_field_info() to declare fields per entity
type and bundle. Plugins can be configured (with annotation) per entity type and
per bundle.

In NeoExtraFieldForm plugins, the form and form state provided as parameter to
the NeoExtraFieldFormInterface::formElement. The method must return a renderable
form array.

In NeoExtraFieldDisplay plugins, the object of the entity being viewed is provided
as parameter to NeoExtraFieldDisplayInterface::view. The method must return a
renderable array.

As usual with plugins, an alter hook is available. See neo_extra_field.api.php for
documentation of hook_neo_extra_field_form_info_alter() and
hook_neo_extra_field_display_info_alter().

## Form Plugins

Plugins of type "NeoExtraFieldForm" are used to provide Extra field forms.
Plugin examples can be found in the included neo_extra_field_example module.

Form plugins must be placed in: [module name]/src/Plugin/NeoExtraField/Form.
After creating a plugin, clear the cache to make Drupal recognise it.

Form plugins must at least extend the NeoExtraFieldFormInterface.

NeoExtraFieldForm annotation should at least contain:

```
 * @NeoExtraFieldForm(
 *   id = "plugin_id",
 *   label = @Translation("Field name"),
 *   bundles = {
 *     "entity_type.bundle_name"
 *   }
 * )
```

To define a plugin for all bundles of a given entity type, use the '*' wildcard:

```
 *   bundles = {
 *     "entity_type.*"
 *   }
```

To define a plugin for all entity types and all their bundles, use:

```
 *   bundles = {
 *     "*.*"
 *   }
```

Other annotation options:

```
 *   weight = 10,
 *   visible = true
```

## Display Plugins

Plugins of type "NeoExtraFieldDisplay" can be used to provide Extra field displays.
Plugin examples can be found in the included neo_extra_field_example module.

Display plugins must be placed in: [module name]/src/Plugin/NeoExtraField/Display.
After creating a plugin, clear the cache to make Drupal recognize it.

Display plugins must at least extend the NeoExtraFieldDisplayInterface.

NeoExtraFieldDisplay annotation should at least contain:

```
 * @NeoExtraFieldDisplay(
 *   id = "plugin_id",
 *   label = @Translation("Field name"),
 *   bundles = {
 *     "entity_type.bundle_name"
 *   }
 * )
```

See Form Plugins for more annotation options.

## Plugin base classes

Different bases classes are provided each containing different tools.

### NeoExtraFieldFormBase (form plugin)

  Provides form plugins with some helpers to get additional form rendering
	context data.

### NeoExtraFieldDisplayBase (display plugin)

  When using this base class, all output formatting has to take place in the
  plugin. No HTML wrappers are provided around the plugin output.

### NeoExtraFieldDisplayFormattedBase (display plugin)

  When using this base class, the field output will be wrapped with field html
  wrappers. The field template can be used to override the html output as usual.
