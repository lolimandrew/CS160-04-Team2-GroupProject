/*!
 * jQuery Once v2.2.3 - http://github.com/robloach/jquery-once
 * @license MIT, GPL-2.0
 *   http://opensource.org/licenses/MIT
 *   http://opensource.org/licenses/GPL-2.0
 */
(function(e){"use strict";if(typeof exports==="object"&&typeof exports.nodeName!=="string"){e(require("jquery"))}else if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(t){"use strict";var r=function(e){e=e||"once";if(typeof e!=="string"){throw new TypeError("The jQuery Once id parameter must be a string")}return e};t.fn.once=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)!==true}).data(n,true)};t.fn.removeOnce=function(e){return this.findOnce(e).removeData("jquery-once-"+r(e))};t.fn.findOnce=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)===true})}});

/**
 * @file
 *
 * Fivestar JavaScript behaviors integration.
 */

/**
 * Create a degradeable star rating interface out of a simple form structure.
 *
 * Originally based on the Star Rating jQuery plugin by Wil Stuckey:
 * http://sandbox.wilstuckey.com/jquery-ratings/
 */
(function($) {
  Drupal.behaviors.fivestar = {
    attach: function(context) {
      $('.vote').on('change', function() {
        if (!$(this).prop('disabled')) {
          $(this).closest('form').find('.form-submit').trigger('click');
        }
      });

      $(context).find('div.fivestar-form-item').once('fivestar').each(function() {
        var $cancel, $container, $options, $select, $this, index;
        $this = $(this);
        $container = $('<div class="fivestar-widget clearfix"></div>');
        $select = $('select', $this);
        $cancel = $('option[value="0"]', $this);
        if ($cancel.length) {
          $('<div class="cancel"><a href="#0" title="' + $cancel.text() + '">' + $cancel.text() + '</a></div>').appendTo($container);
        }
        $options = $('option', $this).not('[value="-"], [value="0"]');
        index = -1;
        $options.each(function(i, element) {
          var classes;
          classes = 'star-' + (i + 1);
          classes += (i + 1) % 2 === 0 ? ' even' : ' odd';
          classes += i === 0 ? ' star-first' : '';
          classes += (i + 1) === $options.length ? ' star-last' : '';
          $('<div class="star"><a href="#' + element.value + '" title="' + element.text + '">' + element.text + '</a></div>').addClass(classes).appendTo($container);
          if (element.value === $select.val()) {
            index = i + 1;
          }
        });
        if (index !== -1) {
          $container.find('.star').slice(0, index).addClass('on');
        }
        $container.addClass('fivestar-widget-' + $options.length);
        $container.find('a').bind('click', $this, Drupal.behaviors.fivestar.rate).bind('mouseover', $this, Drupal.behaviors.fivestar.hover);
        $container.bind('mouseover mouseout', $this, Drupal.behaviors.fivestar.hover);
        $select.after($container).css('display', 'none');
      });
    },
    rate: function(event) {
      var $this, $this_star, $widget, value;
      $this = $(this);
      $widget = event.data;
      value = parseInt(this.hash.replace('#', ''));
      $('select', $widget).val(value).change();
      if (value === 0) {
        $this_star = $this.parent().parent().find('.star');
      } else {
        $this_star = $this.closest('.star');
      }
      $this_star.prevAll('.star').addBack().addClass('on');
      $this_star.nextAll('.star').removeClass('on');
      if (value === 0) {
        $this_star.removeClass('on');
      }
      event.preventDefault();
    },
    hover: function(event) {
      var $stars, $target, $this, $widget, index;
      $this = $(this);
      $widget = event.data;
      $target = $(event.target);
      $stars = $('.star', $this);
      if (event.type === 'mouseover') {
        index = $stars.index($target.parent());
        $stars.each(function(i, element) {
          if (i <= index) {
            $(element).addClass('hover');
          } else {
            $(element).removeClass('hover');
          }
        });
      } else {
        $stars.removeClass('hover');
      }
    }
  };
})(jQuery);


/**
 * @file
 *
 * Fivestar AJAX for updating fivestar widgets.
 */

/**
 * Create a degradeable star rating interface out of a simple form structure.
 */
(function($) {
  Drupal.AjaxCommands.prototype.fivestarUpdate = function(ajax, response, status) {
    response.selector = $('.fivestar-form-item', ajax.element.form);
    ajax.commands.insert(ajax, response, status);
  };
})(jQuery);
;
