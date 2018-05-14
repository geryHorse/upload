<?php


$dir = './files';

$files1 = scandir($dir);
$files2 = scandir($dir, 1);

echo '<ul>';

foreach ($files1 as $file) {
    echo "<li> $file </li>";
}

echo '</ul>';

echo '<br>-----------------------------<br>';

echo '<ul>';

foreach($files2 as $file) {
    echo "<li> $file </li>";
}

echo '</ul>';
