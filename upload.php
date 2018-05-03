<?php



if ($_FILES['userfile']['error'] > 0)
{
    echo 'Problem:';
    switch ($_FILES['userfile']['error'])
    {
        case 1: echo 'File exceeded upload_max_filesize';
            break;
        case 2: echo 'File exceeded max_file_size';
            break;
        case 3: echo 'File only partially uploaded';
            break;
        case 4: echo 'No file uploaded';
            break;
        case 6: echo 'Cannot upload file';
            break;
        case 7: echo 'Upload failed: cannot write to dist';
            break;
    }
    exit();
}



$upfile = 'files/' . $_FILES['userfile']['name'];

if (is_uploaded_file($_FILES['userfile']['tmp_name']))
{
    if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
    {
        echo 'Problem: Could not move file to destination directory';
        exit();
    }
    else
    {
        echo 'File uploaded success';
    }
}







