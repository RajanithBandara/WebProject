<!DOCTYPE html>
<html>
    <head>
        <title>FindYourTeacher</title>
        <link rel="stylesheet" href="index.css" id="light-theme">
        <link rel="stylesheet" href="index-dark.css" id="dark-theme">
        <link rel="stylesheet" href="style.css" id="page-light">
        <link rel="stylesheet" href="style-dark.css" id="page-dark">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="index.js"></script>
        <link rel="stylesheet" href="smalldisplay.css">
        <script src="hover.js"></script>
        <link rel="stylesheet" href="index-smalldisp.css">
        <script src="themeswitchhome.js"></script>
    </head>
<body style="transition: all 0.5s ease-in;">
    <script>
        document.body.style.opacity = 0;
        function displaybody(){
            document.body.style.opacity = 1;
        }
        setInterval(displaybody,300);
    </script>
    <?php include 'header.php';?>
    <div class="welcome-area">
        <div class="welcome-message-div">
            <div id="message-01">
                <span>
                    Hello!!,<br>
                    We are here to help you to find your Teacher.
                </span>   
            </div> 
            <div id="message-02">
                <span>
                    Let's Find Your Teacher!!!
                </span>
            </div>
            <div id="image-div-of-firstdiv">
                <img src="learnimage02.png" alt="image" width="auto" height="auto">
            </div>
            <script>
                var first_content = document.getElementById('message-01');
                var second_content = document.getElementById('message-02');
                var image_content = document.getElementById('image-div-of-firstdiv');
                setTimeout(function(){
                    first_content.style.opacity = 0;
                    second_content.style.opacity = 1;
                    second_content.style.transform = 'translateY(0%)';
                    image_content.style.opacity = 1;
                    image_content.style.transform = 'translateY(0%)';
                }, 4000);
            </script>
        </div>
    </div>
    <div class="login-buttons">
        <div class="buttons">
            <div class="button-01">
                <a href="Forms/LoginForm/loginform.php">
                <button class="login-button">
                    Login
                </button></a>
            </div><br>
            <div class="button-02">
                <button class="register-button" id="registerbtn">
                    Register
                </button>
                <script>
                    var docbtn = document.getElementById("registerbtn");
                    setTimeout(function(){
                        docbtn.style.opacity = 1;
                    }, 1000);
                </script>
            </div>
        </div>
    </div><br>
    <center>
     <div class="hidden-regitersect" id="hidden-registersect">
        <a href="Forms/StudentForm/Studentform.php" target="_blank" style="text-decoration: none;">
            <button class="student-register-button" id="student-register-button">
                Student
            </button>
        </a><br>
        <a href="Forms/TeacherForm/Teacherform.php" target="_blank" style="text-decoration: none;">
            <button class="teacher-register-button" id="teacher-register-button">
                Teacher
            </button>
        </a><br>
        <a href="Forms/InstitutionForm/Institutionform.php" target="_blank" style="text-decoration: none;">
            <button class="institution-register-button" id="institution-register-button">
                Institution
            </button>
        </a><br>
    </div>   
    <script>
        var x=0;
        
           document.getElementById('registerbtn').addEventListener('click',function(){
            if (x===0){    
                document.getElementById('student-register-button').style.opacity = 1;
                document.getElementById('teacher-register-button').style.opacity = 1;
                document.getElementById('institution-register-button').style.opacity = 1;
                document.getElementById('student-register-button').style.display = 'block';
                document.getElementById('teacher-register-button').style.display = 'block';
                document.getElementById('institution-register-button').style.display = 'block';
                x=1;
            }
            else if (x===1){
                document.getElementById('student-register-button').style.opacity = 0;
                document.getElementById('teacher-register-button').style.opacity = 0;
                document.getElementById('institution-register-button').style.opacity = 0;
                document.getElementById('student-register-button').style.display = 'none';
                document.getElementById('teacher-register-button').style.display = 'none';
                document.getElementById('institution-register-button').style.display = 'none';
                x=0;
            }
        });
    </script>
    </center>
    
    <div class="counting-details-div">
        <div class="card1" id="card1">
            <div class="card1-details" id="card1-details">
              0
            </div>
            
        </div>
        <div class="card2" id="card2">
            <div class="card2-details" id="card2-details">
               0
            <br>Institutions 
            </div>    
        </div>
        <div class="card3" id="card3">
            <div class="card3-details" id="card3-details">
               0
            <br>Students 
            </div>
            
        </div>
        <script>
            var card1 = document.getElementById('card1');
            var card2 = document.getElementById('card2');
            var card3 = document.getElementById('card3');

            setTimeout(function(){
                card1.style.transform = 'translateY(0%)';
                card2.style.transform = 'translateY(0%)';
                card3.style.transform = 'translateY(0%)';
                card1.style.opacity = 1;
                card2.style.opacity = 1;
                card3.style.opacity = 1;
            },1000)
        </script>
    </div>
        </div>
    </div>
    <div class="institution-section-ad">
        <div class="row1-of-inst-ads">
            <div class="instad-box">
                <div class="instimage-sec">
                    <?php include 'loadimages.php';?>
                </div>
                <div class="inst-det-sec">
                    <?php include 'loadcontent1.php';?>
                </div>
            </div>
            <div class="instad-box">
                <div class="instimage-sec">
                    <?php include 'loadimages2.php';?>
                </div>
                <div class="inst-det-sec">
                    <?php include 'loadcontent2.php';?>
                </div>
            </div>
            <div class="instad-box">
                <div class="instimage-sec">
                    <?php include 'loadimages3.php';?>
                </div>
                <div class="inst-det-sec">
                    <?php include 'loadcontent3.php';?>
                </div>
            </div>
        </div>
        <script>
            const adsectteacher = document.querySelectorAll('.instad-box');
            let currentAd = 0;

            function displayad(){
                adsectteacher.forEach((ad, index) => {
                    if (index === currentAd){
                        ad.style.opacity = 1;
                    } else {
                        ad.style.opacity = 0;
                    }
                });
                currentAd = (currentAd + 1) % adsectteacher.length;
            }
            displayad();
            setInterval(displayad, 5000);
        </script>
    </div>
    <div class="teachers-ads" id="teacher-ads">
        
            <div class="row-of-teacher-ad-2">
                <div class="teacher" id="teacher1">
                    <div class="teacher1img">
                        <img src="teacherimages/teacherimg.png" height="100" width="100" alt="image">
                    </div>
                    <div class="techer1-details">
                        <div class="teacher1-name">
                            <span>Teacher Name</span>
                        </div>
                        <div class="teacher1-specs">
                            <span>Teacher Specs</span>
                        </div>
                    </div>
                </div>
                <div class="teacher" id="teacher2">
                    <div class="teacher2img">
                        <img src="teacherimages/teacherimg.png" height="100" width="100" alt="image">
                    </div>
                    <div class="techer2-details">
                        <div class="teacher2-name">
                            <span>Teacher Name</span>
                        </div>
                        <div class="teacher2-specs">
                            <span>Teacher Specs</span>
                        </div>
                    </div>
                </div>
                <div class="teacher" id="teacher3">
                    <div class="teacher3img">
                        <img src="teacherimages/teacherimg.png" height="100" width="100" alt="image">
                    </div>
                    <div class="techer3-details">
                        <div class="teacher3-name">
                            <span>Teacher Name</span>
                        </div>
                        <div class="teacher3-specs">
                            <span>Teacher Specs</span>
                        </div>
                    </div>
                </div>
                <div class="teacher" id="teacher4">
                    <div class="teacher4img">
                        <img src="teacherimages/teacherimg.png" height="100" width="100" alt="image">
                    </div>
                    <div class="techer4-details">
                        <div class="teacher4-name">
                            <span>Teacher Name</span>
                        </div>
                        <div class="teacher4-specs">
                            <span>Teacher Specs</span>
                        </div>
                    </div>           
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
        var teacher1 = document.getElementById('teacher1');
        var teacher2 = document.getElementById('teacher2');
        var teacher3 = document.getElementById('teacher3');
        var teacher4 = document.getElementById('teacher4');

        
    </script>
        <div class="quotation-and-picture-content">
            <div class="quote-area">
                <div class="quotation-section">
                    <div class="quote">
                        <span >"A good Teacher is like a candle-it consumes itself to light the way for others."</span><br>
                        <span id="auther1">- Mustafa Kemal Atatork</span>
                    </div>
                    <div class="quote">
                        <Span >"Teaching is more than imparting knowledge. It is inspiring change. Learning is more than absorbing facts. It is 
                        acquiring understanding"</Span><br>
                        <span id="auther2">- William Arthur Ward</span>
                    </div>
                    <div class="quote">
                        <span>"Intelligence plus character, that is the goal of education"</span><br>
                        <span id="auther3" >- Martin Luther King</span>
                    </div>
                    <script>
                        const quotations = document.querySelectorAll('.quote');
                        let currentQuotation = 0;
        
                        function displayQuote(){
                            quotations.forEach((quote, index) => {
                                if (index === currentQuotation){
                                    quote.style.opacity = 1;
                                } else {
                                    quote.style.opacity = 0;
                                }
                            });
                            currentQuotation = (currentQuotation + 1) % quotations.length;
                        }
                        displayQuote();
                        setInterval(displayQuote, 8000);
                    </script>
                </div>
            </div>
            <div class="picture-area2">
                <div class="image-container2">
                    <div class="image">
                        <img src="image1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    <div class="about-us-content-ofhome">
        <div class="about-us-image">
            <div class="bluring-sect">
                <div class="abt2-content">
               <div class="abtus-topic">
                Everything is a Team work
                </div>
                <div class="abt-us-btn">
                    <a href="AboutUs/about.php" target="_blank">
                    <button class="abt1-us-btn">
                    About Us
                        </button>                    
                </a>

            </div> 
        </div>
    </div>
            
        </div>
    </div>
 <?php include 'footer.php';?>
</div> 
</body>
</html>