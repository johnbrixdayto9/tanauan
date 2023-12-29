<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Web Template</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="wrapper__contact">
   <nav>
          
          <ul>
              <li><a href="home.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="blog.php">BLOG</a></li>
              
          </ul>
       </nav>

       
     
       <div class="section">
       <h1> Contact us
       <hr color ="maroon" width="100%">
       </h1>
            <p> <br><br> <br>
                <br><br> <br>Tanauan Institute, Inc. 
J. Gonzales Street, Barangay 4, Tanauan City, 4232 Batangas, Philippines

Website: www.tanauaninstitute.edu.ph 
Email: tanauan.institute@yahoo.com
Telephone numbers 
Admin Office (043) 778-1742 
College Department (043)784-3828 
Registrar Office (043) 784-1611
                <br> 
            </p>
          
    
</body>
</html>
            </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

   
</section>


<script>
    // JavaScript to handle button click and redirect
    document.getElementById('learnMoreButton').addEventListener('click', function () {
        window.location.href = 'more_info.php';
    });
</script>

    
    

  

    </div>
</body>