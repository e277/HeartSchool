<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>University</title>
   <link rel="shortcut icon" href="images/favicon.png" type="image/png">
   <script src="https://kit.fontawesome.com/8a869585b6.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
   <!-- Hero -->
   <section class="sub-header">
      <nav>
         <a href=""><img src="images/logo.png"></a>
         <div class="nav-links" id="nav-links">
            <i class="fas fa-times" onclick="hideMenu()"></i>
            <ul>
               <li><a href="">HOME</a></li>
               <li><a href="about">ABOUT</a></li>
               <li><a href="course">COURSE</a></li>
               <li><a href="blog">BLOG</a></li>
               <li><a href="contact">CONTACT</a></li>
               <a href="login"><button>Apply Here</button></a>
            </ul>
         </div>
         <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>About Us</h1>
   </section>

   <!-- About Us Content -->
   <section class="about-us">
      <div class="row">
         <div class="about-col">
            <h1>Ranked amongst top 12 Non-Profits with a Transformational Mission by Nearshore America</h1>
            <p><q>The Amber Heart/NSTA Trust Coding Academy is a groundbreaking first step towards achieving our vision of positioning Jamaica as a technology and innovation hub.</q> - <b>The Most Honorable Andrew Holness</b></p>
            <a href="" class="hero-btn red-btn">EXPLORE</a>
         </div>
         <div class="about-col">
            <img src="images/about.jpg">
         </div>
      </div>
   </section>

   {{-- Footer --}}
   <footer>
      <div class="container">
         <div class="sec aboutus">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non nemo nihil accusantium dolores, aliquam expedita, rerum quod odio quis mollitia rem, quisquam ea aperiam ad modi. Inventore eligendi dolorem ex.</p>
            <ul class="sci">
               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#"><i class="fab fa-youtube"></i></a></li>

            </ul>
         </div>
         <div class="sec quickLinks">
            <h2>Quick Links</h2>
            <ul>
               <li><a href="#">About</a></li>
               <li><a href="#">FAQ</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <li><a href="#">Help</a></li>
               <li><a href="#">Terms & Conditions</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
         </div>
         <div class="sec quickLinks">
            <h2>Course</h2>
            <ul>
               <li><a href="#">CSS</a></li>
               <li><a href="#">Javascript</a></li>
               <li><a href="#">Food Preparation</a></li>
               <li><a href="#">Construction</a></li>
               <li><a href="#">Clothing & Textiles</a></li>
               <li><a href="#">Customer Service</a></li>
            </ul>
         </div>
         <div class="sec">
            <h2>Contact Us</h2>
            <ul class="info">
               <li>
                  <span><i class="fas fa-map-marker-alt"></i></span>
                  <span>Stony Hill Rd, Kingston<br>Stony Hill Heart Academy<br>St. Andrew</span>
               </li>
               <li>
                  <span><i class="fas fa-phone-alt"></i></span>
                  <p><a href="tel:+18769422557">(876) 942-2557</a><br>
                     <a href="tel:+18769293410">(876) 929-3410</a>
                  </p>
               </li>
               <li>
                  <span><i class="fas fa-envelope"></i></span>
                  <p><a href="mailto:cantfindit@gmail.com">cantfindIt@gmail.com</a></p>
               </li>
            </ul>
         </div>
      </div>
   </footer>
   <div class="copyrightText">
      <p>Copyright &copy; Ezra Muir, All Rights Reserved</p>
   </div>

   <!-- Toggle Menu -->
   <script>
      var navLinks = document.getElementById("nav-links");

      function showMenu() {
         navLinks.style.right = "0";
      }

      function hideMenu() {
         navLinks.style.right = "-200px";
      }
   </script>
