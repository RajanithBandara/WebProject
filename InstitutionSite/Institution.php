<?php
$cssFile = "Institution.css";
$jsFile = "Institution.js";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Institution site</title>
  
  <script src="https://kit.fontawesome.com/b3136b502f.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
  <script src="<?php echo $jsFile; ?>"></script>
  <link rel="stylesheet" href="<?php echo $cssFile; ?>">

  <style>
    
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    
</style>
  </style>
</head>
<body>

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
      
      <div class="Institutions">
          <img src="Images/vidula logo.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>ABCD Institute</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(325)</span>
              <p><strong>Location:</strong> Horana| Western Province</p>
              <p><strong>Rankings:</strong> #100 in Best Institution in the Srilanka, #5000 in Best Global institution-info</p>
        
              

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
            
          </div>
          
          
        </div>
        
        <div class="Institutions">
          <img src="Images/sipwin.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>Sipwin - Kurunegala</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(802)</span>
              <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile2.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/The First.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>The First - Kandy</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <span>(1060)</span>
              <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile1.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/nozero.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>No.Zero - Kandy</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <span>(1505)</span>
              <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile8.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/nozero.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>No.Zero - Kandy</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <i class="fas fa-star"></i>
              <span>(505)</span>
              <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/nozero.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>No.Zero - Kandy</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(1205)</span>
              <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>

            </div>
            <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
          </div>
          <div class="Institutions">
            <img src="Images/sipwin.png" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin - Kurunegala</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <span>(1505)</span>
                <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div>
          <div class="Institutions">
            <img src="Images/sipwin.png" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin - Kurunegala</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(503)</span>
                <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div>
          <div class="Institutions">
            <img src="Images/sipwin.png" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin - Kurunegala</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(507)</span>
                <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>
                
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div> 


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
