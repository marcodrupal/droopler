<?php

namespace Drupal\d_p\Plugin\ParagraphSetting;

use Drupal\d_p\ParagraphSettingPluginBase;
use Drupal\d_p\ParagraphSettingSelectInterface;

/**
 * Plugin implementation of the 'embed_layout' setting.
 *
 * @ParagraphSetting(
 *   id = "embed_layout",
 *   label = @Translation("Embed side"),
 * )
 */
class EmbedLayout extends ParagraphSettingPluginBase implements ParagraphSettingSelectInterface {

  /**
   * {@inheritdoc}
   */
  public function formElement(): array {
    $element = parent::formElement();

    return [
      '#type' => 'select',
      '#options' => $this->getOptions(),
    ] + $element;
  }

  /**
   * {@inheritdoc}
   */
  public function getOptions(): array {
    return [
      'left' => $this->t('Left'),
      'right' => $this->t('Right'),
      'full' => $this->t('Full width'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultValue() {
    return 'left';
  }

  /**
   * {@inheritdoc}
   */
  public function getAllowedBundles(): array {
    return [
      'd_p_side_embed',
    ];
  }

}