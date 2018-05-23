<?php

$dir = './files';

echo basename($dir) . '<br>';

echo dirname($dir);

echo '<br>---------------<br>';


$files1 = scandir($dir);

echo '<ul>';

foreach ($files1 as $file) {
    echo "<li> $file </li>";
}

echo '</ul>';


// $s = mkdir('./files/bbc/bs');
// echo $s;


// $s = rmdir('./files/bbc');
// echo $s;

// $r = unlink('./files/bbc/aaa.jpg');
// echo $r;

// $r = copy('./files/bbc/a/a.jpg', './files/bbc/bs/a.jpg');
// echo $r;



// $r = rename('./files/bbc/a/a.jpg', './files/bbc/a/a_rename.jpg');
// echo $r;

phpinfo();





