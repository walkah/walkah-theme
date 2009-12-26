<?php

function walkah_search_theme_form($form) {
  $form['search_theme_form']['#title'] = '';
  $form['search_theme_form']['#id'] = 'search-box';
  $form['search_theme_form']['#attributes'] = array('class' => 'blur');
  $form['search_theme_form']['#default_value'] = t('Search this site');
  $form['submit']['#type'] = 'hidden';
  return drupal_render($form);
}

function walkah_filter_tips_more_info() { }
function walkah_filter_tips($tips, $long = FALSE, $extra = '') {
  return '';
}
