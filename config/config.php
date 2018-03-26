<?php
//Константы для обращения с контроллерами
define('PathPrefix','/controllers/');
define('PathPostfix','Controller.php');

//> используемый шаблон 
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");

