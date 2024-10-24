<?php

[
    'basename' => $file,
    'dirname' => $directory,
] = pathinfo('/users/test/file.png');

var_dump($file);
var_dump($directory);

// $file =  "file.png"
// $directory = "/users/test"

[
    'path' => $path, 
    'query' => $query,
] = parse_url('https://stitcher.io/blog');

var_dump($path);
var_dump($query);

// PHP Warning:  Undefined array key "query"
// $path =  "/blog"
// $query = null