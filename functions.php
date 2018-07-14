<?php

if (!defined('BONES_DIR')) {
    define('BONES_DIR', trailingslashit(__DIR__));
}

require BONES_DIR . 'classes/class-bones-theme.php';

global $bones_class;

$bones_class = new bones_theme();