<?php

namespace Drupal\d_p\Plugin\ParagraphSetting;

use Drupal\d_p\ParagraphSettingPluginBase;

/**
 * Plugin implementation of the 'header-into-columns' modifier setting.
 *
 * @ParagraphSetting(
 *   id = "header-into-columns",
 *   label = @Translation("Paragraph header in two columns"),
 *   settings = {
 *      "parent" = "custom_class",
 *      "weight" = 70,
 *   }
 * )
 */
class HeaderIntoColumns extends ParagraphSettingPluginBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(): array {
    $element = parent::formElement();

    return [
      '#type' => 'checkbox',
      '#description' => $this->t('Enable column mode: header on the left and description on the right.'),
    ] + $element;
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultValue() {
    return 0;
  }

  /**
   * {@inheritdoc}
   */
  public function getAllowedBundles(): array {
    return [
      'd_p_group_of_text_blocks',
    ];
  }

}
