<?php

namespace Drupal\d_p;

use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides interface for paragraph setting plugins.
 *
 * @package Drupal\d_p
 */
interface ParagraphSettingInterface {

  const ALL_ALLOWED_BUNDLES = 'all';

  /**
   * Plugin settings.
   *
   * @return array
   *   List of settings.
   */
  public function getSettings(): array;

  /**
   * Paragraph setting form element.
   *
   * This is a main setting component used, to build the form
   * containg all of the settings.
   *
   * @return array
   *   Form element.
   */
  public function formElement(): array;

  /**
   * Getter for plugin id.
   *
   * @return string
   *   The plugin id.
   */
  public function id(): string;

  /**
   * Getter for plugin label.
   *
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup|null
   *   The plugin label.
   */
  public function label(): ?TranslatableMarkup;

  /**
   * Getter for form element #default_value.
   *
   * @return mixed
   *   Value to be used as a default
   */
  public function getDefaultValue();

  /**
   * Getter for parent plugin id.
   *
   * @return string|null
   *   The plugin id or null if this is a root element.
   */
  public function getParentPluginId(): ?string;

  /**
   * Check if the plugin has parent.
   *
   * @return bool
   *   True if has parent, false if this is a root element.
   */
  public function hasParentPlugin(): bool;

  /**
   * This is an alias of hasParentPlugin.
   *
   * @return bool
   *   True if has parent, false if this is a root element.
   */
  public function isSubtype(): bool;

  /**
   * Getter for plugin weight, used as #weight in form element.
   *
   * @return int
   *   Plugin weight.
   */
  public function getWeight();

  /**
   * List of paragraph bundles supported by that plugin.
   *
   * @return array
   *   Paragraph bundle ids.
   */
  public function getAllowedBundles(): array;

  /**
   * Check if the given bundle is allowed.
   *
   * @param string $bundle_name
   *   Bundle name to be checked.
   *
   * @return bool
   *   True if is allowed, false otherwise.
   */
  public function isBundleAllowed(string $bundle_name): bool;

  /**
   * Check if all bundles are allowed.
   *
   * @return bool
   *   True if all bundles allowed, false otherwise.
   */
  public function isAllBundlesAllowed(): bool;

  /**
   * Getter for validation rules definition.
   *
   * @return array
   *   Validation rules.
   */
  public function getValidationRulesDefinition(): array;

}
