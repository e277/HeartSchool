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
   <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
      <h1>Contact Us</h1>
   </section>

   <!-- Contact Content -->
   <section class="location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22479.368913271675!2d-76.76243519382349!3d18.00770695210249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjm!4v1631018865951!5m2!1sen!2sjm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </section>

   <section class="contact">
      <div class="content">
         <h2>Contact Us</h2>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa explicabo quia obcaecati dignissimos est laborum soluta odit dolorum. Aperiam possimus ratione nulla nam a architecto delectus eum maxime sunt dolore!</p>
      </div>
      <div class="container">
         <div class="contactInfo">
            <div class="box">
               <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
               </div>
               <div class="text">
                  <h3>Address</h3>
                  <p>Stony Hill Rd, Kingston <br> Stony Hill Heart Academy</p>
               </div>
            </div>
            <div class="box">
               <div class="icon">
                  <i class="fas fa-phone"></i>
               </div>
               <div class="text">
                  <h3>Phone</h3>
                  <p>(876) 942-2557</p>
               </div>
            </div>
            <div class="box">
               <div class="icon">
                  <i class="fas fa-envelope"></i>
               </div>
               <div class="text">
                  <h3>Email</h3>
                  <p>cantfindIt@gmail.com</p>
               </div>
            </div>
         </div>
         <div class="contactForm">
            <form action="#" method="post">
               <h2>Send Message</h2>
               <div class="inputBox">
                  <input type="text" name="name" required>
                  <span>Full Name</span>
               </div>
               <div class="inputBox">
                  <input type="text" name="email" required>
                  <span>Email</span>
               </div>
               <div class="inputBox">
                  <textarea name="message" id="" required></textarea>
                  <span>Type your Message...</span>
               </div>
               <div class="inputBox">
                  <input type="submit" name="submitMsg" value="Send">
               </div>
            </form>
         </div>
      </div>
   </section>

   <!-- Footer -->
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

</body>

</html>