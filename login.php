<?php
// login.php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'pokechallenge.auth0.com',
  'client_id' => 'b12gBedeU0OOBAjpHRmXBJJ3rgPl2C14',
  'client_secret' => 'hJbW25HH-BZ_VxxY804OISD8YkU_3nntfWZy8Dku4xNMah0ljfaBGll-iVrgDiNP',
  'redirect_uri' => 'http://www.cafetochallenge.atomic-hub.com',
  'scope' => 'openid profile email',
]);

$auth0->login();
