<?php

['basename' => $file, 'dirname' => $directory] = pathinfo('/users/test/file.png');

['path' => $path, 'query' => $query] = parse_url('https://stitcher.io/blog?yolo=1');
