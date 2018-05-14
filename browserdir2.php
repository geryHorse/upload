<?php


$dir = dir('./files');

echo $dir->handle . '<br>';
echo $dir->path . '<br>';

echo '<ul>';

while (($file = $dir->read()) !== false) {
    if ($file !== '.' && $file !== '..') {
        echo "<li> $file </li>";
    }
}

echo '</ul>';

$dir->close();


