<?php

namespace Drupal\villa_agency\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Main Banner style plugin.
 *
 * @ViewsStyle(
 *   id = "villaagency_main_banner",
 *   title = @Translation("Main Banner"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_villaagency_main_banner",
 *   display_types = {"normal"},
 * )
 */
final class MainBanner extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
