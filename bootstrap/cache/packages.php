<?php return array (
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'maddhatter/laravel-fullcalendar' => 
  array (
    'providers' => 
    array (
      0 => 'MaddHatter\\LaravelFullcalendar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Calendar' => 'MaddHatter\\LaravelFullcalendar\\Facades\\Calendar',
    ),
  ),
);