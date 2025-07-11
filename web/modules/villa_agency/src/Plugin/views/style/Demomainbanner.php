<?php declare(strict_types = 1);

namespace Drupal\villa_agency\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * DemoMainBanner style plugin.
 *
 * @ViewsStyle(
 *   id = "villa_agency_demomainbanner",
 *   title = @Translation("DemoMainBanner"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_villa_agency_demomainbanner",
 *   display_types = {"normal"},
 * )
 */
final class Demomainbanner extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
