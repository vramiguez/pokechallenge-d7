<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);


$auth0 = new Auth0([
  'domain' => 'pokechallenge.auth0.com',
  'client_id' => 'b12gBedeU0OOBAjpHRmXBJJ3rgPl2C14',
  'client_secret' => 'hJbW25HH-BZ_VxxY804OISD8YkU_3nntfWZy8Dku4xNMah0ljfaBGll-iVrgDiNP',
  'redirect_uri' => 'http://www.cafetochallenge.atomic-hub.com',
  'scope' => 'openid profile email',
]);

$userInfo = $auth0->getUser();
menu_execute_active_handler();

if (!user_is_logged_in()) {
  ?>
  Welcome to the Pokemon Challenge. You need to be logged-in in order to see the information. Please login or register to continue.
  <a href="login.php">Log In</a>
  <?php
} else {
    // User is authenticated
    $userInfo = $auth0->getUser();
}
