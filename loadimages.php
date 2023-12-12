<?php

$imagedir = 'Institutions/';

$institution1 = 'Institution1';

$institution1path = $imagedir . $institution1 . DIRECTORY_SEPARATOR . scandir($imagedir . $institution1)[2];

if (file_exists($institution1path)) {
    echo "<img src='$institution1path' width=290 height=290 alt='$institution1' style='border-radius:50%; box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.285);'>";
} else {
    echo "Image not found for $institution1";
}
?>