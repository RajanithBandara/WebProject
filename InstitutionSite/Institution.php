<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institution site</title>
    <script src="https://kit.fontawesome.com/b3136b502f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php

$institutions = [
    [
        'image' => 'Images/vidula logo.png',
        'lastUpdated' => '15/10/2023',
        'name' => 'ABCD Institute',
        'stars' => 4, 
        'userCount' => 325, 
        'location' => 'Horana | Western Province',
        'rankings' => '#100 in Best Institution in Sri Lanka, #5000 in Best Global institution-info',
        'profileLink' => 'file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html',
    ],
    [
        'image' => 'Images/sipwin.png',
        'updated' => '15/10/2023',
        'name' => 'Sipwin - Kurunegala',
        'stars' => 5,
        'userCount' => 802, 
        'location' => 'No.Zero, Kandy | Central Province',
        'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
    [
      'image' => 'Images/The First.png',
      'updated' => '15/10/2023',
      'name' => 'The First - Kandy',
      'stars' => 5,
      'userCount' => 1060, 
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
    [
      'image' => 'Images/nozero.png',
      'updated' => '15/10/2023',
      'name' => 'No.Zero - Kandy',
      'stars' => 4,
      'userCount' => 1505,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
    [
      'image' => 'Images/nozero.png',
      'updated' => '15/10/2023',
      'name' => 'No.Zero - Kandy',
      'stars' => 4,
      'userCount' => 1505,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
   
    [
      'image' => 'Images/nozero.png',
      'updated' => '15/10/2023',
      'name' => 'No.Zero - Kandy',
      'stars' => 4,
      'userCount' => 1505,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
   
    [
      'image' => 'Images/sipwin.png',
      'updated' => '15/10/2023',
      'name' => 'Sipwin - Kurunegala',
      'stars' => 1,
      'userCount' => 1505,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
    [
      'image' => 'Images/sipwin.png',
      'updated' => '15/10/2023',
      'name' => 'Sipwin - Kurunegala',
      'stars' => 5,
      'userCount' => 503,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
    [
      'image' => 'Images/sipwin.png',
      'updated' => '15/10/2023',
      'name' => 'Sipwin - Kurunegala',
      'stars' => 4,
      'userCount' => 507,
      'location' => 'No.Zero, Kandy | Central Province',
      'rankings' => '#1 in Best Institution in the Srilanka, #5 in Best Global institution-info'
    ],
  
];


function displayInstitutions($institutions)
{
    foreach ($institutions as $institution) {
        echo '<div class="Institutions">';
        echo '<img src="' . $institution['image'] . '" alt="">';
        echo '<div class="details">';
        echo '<span>Updated ' . $institution['lastUpdated'] . '</span>';
        echo '<h6>' . $institution['name'] . '</h6>';
        echo '<div class="star">';
        for ($i = 0; $i < $institution['stars']; $i++) {
            echo '<i class="fas fa-star"></i>';
        }
        echo '<span>(' . $institution['userCount'] . ')</span>';
        echo '</div>';
        echo '<p><strong>Location:</strong> ' . $institution['location'] . '</p>';
        echo '<p><strong>Rankings:</strong> ' . $institution['rankings'] . '</p>';
        echo '<a href="' . $institution['profileLink'] . '" class="info-link" onclick="openModal(\'modal2\'); return false;">';
        echo '<button class="info-button">More Info</button>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
    }
}

?>

<section id="institution-filter">

    <div id="filter-container">
        <label for="Stream">Stream:</label>
        <select id="Stream" class="select2">
            <option value="all">All Stream</option>
            <option value="Stream1">Stream 1</option>
            <option value="Stream2">Stream 2</option>
            <option value="Stream3">Stream 3</option>
            <option value="Stream4">Stream 4</option>
            <option value="Stream5">Stream 5</option>
        </select>

        <label for="location-filter">Location:</label>
        <select id="location-filter" class="select2">
            <option value="all">All Locations</option>
            <option value="location1">Location 1</option>
            <option value="location2">Location 2</option>
            <option value="location2">Location 3</option>
            <option value="location2">Location 4</option>
            <option value="location2">Location 5</option>
        </select>

        <button id="apply-filter" onclick="applyFilter()">Apply Filter</button>
    </div>
</section>

<section id="Institution">

    <h1>Popular Institutions</h1>
    <p>Experience cutting-edge facilities, personalized learning, and a dynamic faculty dedicated to your success. Prepare for the future at <b>FindYourTeacher.lk.</b></p>
    <div class="Institution-box">

        <?php
        
        displayInstitutions($institutions);
        ?>

    </div>

    <div id="pagination">
        <a href="#" class="pagination-link">1</a>
        <a href="#" class="pagination-link">2</a>
        <a href="#" class="pagination-link">3</a>
        <a href="#" class="pagination-link">4</a>
        <a href="#" class="pagination-link">5</a>
        <a href="#" class="pagination-link">........</a>
        <a href="#" class="pagination-link">10</a>
    </div>

</section>

</body>

</html>
