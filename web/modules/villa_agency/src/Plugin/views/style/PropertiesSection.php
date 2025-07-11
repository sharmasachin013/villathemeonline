<?php declare(strict_types = 1);

namespace Drupal\villa_agency\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Properties section style plugin.
 *
 * @ViewsStyle(
 *   id = "villa_agency_properties_section",
 *   title = @Translation("Properties section"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_villa_agency_properties_section",
 *   display_types = {"normal"},
 * )
 */
final class PropertiesSection extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
