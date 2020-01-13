<?php

function poketheme_preprocess_page(&$variables) {
  if (drupal_is_front_page()) {

    unset($variables['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
    drupal_set_title(''); //removes welcome message (page title)
  }
}
