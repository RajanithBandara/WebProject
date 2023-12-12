<?php

$imagedir = 'Institutions/';

$institution3 = 'Institution3';

$institution3path = $imagedir . $institution3 . DIRECTORY_SEPARATOR . scandir($imagedir . $institution3)[2];

if (file_exists($institution3path)) {
    echo "<img src='$institution3path' width=290 height=290 alt='$institution3' style='border-radius:50%; box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.285);'>";
} else {
    echo "Image not found for $institution3";
}
?>