<?php

/**
 * @file
 * Contains \Drupal\drupal8layout\Plugin\Layout\Drupal8LayoutExample.
 */

namespace Drupal\drupal8layout\Plugin\Layout;
use Drupal\layout_plugin\Plugin\Layout\LayoutBase;

/**
 * The plugin that handles the default layout template.
 *
 * @ingroup layout_template_plugins
 *
 * @Layout(
 *   id = "drupal8_sample_layout",
 *   label = @Translation("Drupal 8 Sample Layout"),
 *   description = @Translation("Drupal 8 Sample Layout description"),
 *   type = "page",
 *   help = @Translation("Layout"),
 *   theme = "naked",
 *   regions = {
 *     "main" = {
 *       "label" = @Translation("Main Content"),
 *       "plugin_id" = "default"
 *     },
 *   }
 * )
 */
class Drupal8LayoutExample extends LayoutBase {
}
