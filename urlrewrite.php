<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2&$3',
    'ID' => 'bitrix:catalog.element',
    'PATH' => '/catalog/element.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/lastcourse/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/lastcourse/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/training/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/training/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/release/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/release/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
