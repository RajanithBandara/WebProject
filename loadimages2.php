<?php

$imagedir = 'Institutions/';

$institution2 = 'Institution2';

$institution2path = $imagedir . $institution2 . DIRECTORY_SEPARATOR . scandir($imagedir . $institution2)[2];

if (file_exists($institution2path)) {
    echo "<img src='$institution2path' width=290 height=290 alt='$institution2' style='border-radius:50%; box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.285);'>";
} else {
    echo "Image not found for $institution2";
}
?>