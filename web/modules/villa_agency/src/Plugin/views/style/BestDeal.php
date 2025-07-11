<?php declare(strict_types = 1);

namespace Drupal\villa_agency\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Best Deal style plugin.
 *
 * @ViewsStyle(
 *   id = "villa_agency_best_deal",
 *   title = @Translation("Best Deal"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_villa_agency_best_deal",
 *   display_types = {"normal"},
 * )
 */
final class BestDeal extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
