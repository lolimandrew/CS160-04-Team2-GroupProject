CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

Views Flag Refresh allows site administrators to configure which views are
refreshed automatically via AJAX when certain flags are selected. This is useful
when you have a view that filters by flagged content and you want the view to be
refreshed automatically when content is flagged or unflagged elsewhere on the
page.

The Views Flag Refresh module also allows administrators to select widgets that
alter the display of the view while it is being refreshed. Some examples are
displaying a throbber image or textual message alerting the user a refresh
action is being taken. By implementing the API, developers can add additional
widgets with ease. Refer to the documentation for more information:
http://drupal.org/node/900924


INSTALLATION
------------

 * Install Views Flag Refresh as you would normally install a contributed Drupal
   module. Visit https://www.drupal.org/node/1897420 for further information.


REQUIREMENTS
------------

This module requires the Flag module.


CONFIGURATION
-------------

 * Create a view
 * Add your fields including the Flag link field
 * In the OTHER section set "Use AJAX" option to Yes
 * Also in the OTHER section click the link next to "Flag refresh"
 * Select the current view
 * Click Apply
 * Clear cache
 * Now your view should refresh when you click on a flag link



MAINTAINERS
-----------

 * 1.0.x Maintainer: Martin Anderson-Clutz (mandclu) - https://www.drupal.org/u/mandclu
