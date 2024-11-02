<?php

// set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../../array_any_array_all');

// Support per-project `php.ini` directive overrides

$iniPath = getcwd() . '/php.ini';
  
if (is_file($iniPath)) {
    foreach (parse_ini_file($iniPath) as $key => $val) {
        ini_set($key, $val);
    }
}
