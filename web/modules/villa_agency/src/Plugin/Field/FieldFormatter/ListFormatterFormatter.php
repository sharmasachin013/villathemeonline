<?php

declare(strict_types=1);

namespace Drupal\villa_agency\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'List Formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "villa_agency_list_formatter",
 *   label = @Translation("List Formatter"),
 *   field_types = {
 *     "list_string"
 *   }
 * )
 */
final class ListFormatterFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode): array {
    $element = [];
    foreach ($items as $delta => $item) {
      $element[$delta] = [
        '#markup' => $item->value,
      ];
    }
    return $element;
  }

}
