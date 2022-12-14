<?php

namespace Drupal\metatag_google_plus\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaItempropBase;

/**
 * The GooglePlus 'image' meta tag.
 *
 * @MetatagTag(
 *   id = "google_plus_image",
 *   label = @Translation("Image"),
 *   description = @Translation("The URL of an image which should represent the content. For best results use an image that is at least 1200 x 630 pixels in size, but at least 600 x 316 pixels is a recommended minimum. Supports PNG, JPEG and GIF formats."),
 *   name = "image",
 *   group = "google_plus",
 *   weight = 3,
 *   type = "image",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 *
 * @deprecated in metatag:8.x-1.22 and is removed from metatag:2.0.0. No replacement is provided.
 *
 * @see https://www.drupal.org/project/metatag/issues/3065441
 */
class Image extends MetaItempropBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
