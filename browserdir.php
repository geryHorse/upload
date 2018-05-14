<?php




$current_dir = './files';
$dir = opendir($current_dir);

echo '<ul>';

while (($file = readdir($dir)) !== false) {
    if ($file !== '.' && $file !== '..') {
        echo "<li>$file</li>";
    }
}


echo '</ul>';

closedir($dir)


