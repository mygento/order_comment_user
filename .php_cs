<?php
$header = <<<EOF
@author Mygento Team
@copyright 2015-2020 Mygento (https://www.mygento.ru)
@package Mygento_OrderCommentUser
EOF;

$finder = PhpCsFixer\Finder::create()->in('.')->name('*.phtml');
$config = new \Mygento\CS\Config\Module($header);
$config->setFinder($finder);
return $config;
