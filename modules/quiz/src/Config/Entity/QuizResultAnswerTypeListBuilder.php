<?php

namespace Drupal\quiz\Config\Entity;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Defines the list builder for quiz result answer types.
 */
class QuizResultAnswerTypeListBuilder extends ConfigEntityListBuilder {

  public function render() {
    $build = parent::render();
    $build['table']['#caption'] = $this->t('Answer types.');
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['type'] = $this->t('Answer type');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['type'] = $entity->toLink(NULL, 'edit-form');
    return $row + parent::buildRow($entity);
  }

}
