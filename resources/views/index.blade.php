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

   <!-- Hero -->
   <section class="header">
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
               <a href="{{ route('login') }}"><button style="cursor: pointer">Apply Here</button></a>
            </ul>
         </div>
         <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class="text-box">
         <h1>Top Ranked Training Institution</h1>
         <p>Making website is now one of the easiest thing in the world. you just need to learn HTML, CSS, <br> Javascript and you are good to go.</p>
         <a href="" class="hero-btn">Visit us to learn more</a>
      </div>
   </section>

   <!-- Course -->
   <section class="course">
      <h1>Courses We Offer</h1>
      <p>Lorem ipsum, dolor sitm,nde sumenda? Corporis exercitationem! Sint?</p>
      <div class="row">
         <div class="course-col">
            <h3>HTML Markup</h3>
            <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web
               browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.</p>
         </div>
         <div class="course-col">
            <h3>CSS Designing</h3>
            <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup
               language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
         </div>
         <div class="course-col">
            <h3>PHP Software Development</h3>
            <p>PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian
               programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.</p>
         </div>
      </div>
   </section>

   <!-- Campus -->
   <section class="campus">
      <h1>Our Global Campus</h1>
      <p>Lorem ipsum dolor sit amet nisi vero sit amet consectetur adipisicing.</p>
      <div class="row">
         <div class="campus-col">
            <img src="images/london.png">
            <div class="layer">
               <h3>LONDON</h3>
            </div>
         </div>
         <div class="campus-col">
            <img src="images/newyork.png">
            <div class="layer">
               <h3>NEW YORK</h3>
            </div>
         </div>
         <div class="campus-col">
            <img src="images/washington.png">
            <div class="layer">
               <h3>WASHINGTON</h3>
            </div>
         </div>
      </div>
   </section>

   <!-- Facilities -->
   <section class="facilities">
      <h1>Our Facilities</h1>
      <p>Lorem ipsum dolor sit amet nisi vero sit amet consectetur adipisicing.</p>
      <div class="row">
         <div class="facilities-col">
            <img src="images/library.png">
            <h3>World Class Library</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore omnis maiores dolorem mollitia non iste! Quaerat facere illo nesciunt nostrum, nobis quasi quisquam exercitationem dignissimos et consequatur, maiores dolorem voluptate?</p>
         </div>
         <div class="facilities-col">
            <img src="images/basketball.png">
            <h3>Largest Play Court</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore omnis maiores dolorem mollitia non iste! Quaerat facere illo nesciunt nostrum, nobis quasi quisquam exercitationem dignissimos et consequatur, maiores dolorem voluptate?</p>
         </div>
         <div class="facilities-col">
            <img src="images/cafeteria.png">
            <h3>Tasty and Healthy Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore omnis maiores dolorem mollitia non iste! Quaerat facere illo nesciunt nostrum, nobis quasi quisquam exercitationem dignissimos et consequatur, maiores dolorem voluptate?</p>
         </div>
      </div>
   </section>

   <!-- Testimonials -->
   <section class="testimonials">
      <h1>What Our Students Says</h1>
      <p>Lorem ipsum dolor sit amet nisi vero sit amet consectetur adipisicing.</p>
      <div class="row">
         <div class="testimonial-col">
            <img src="images/user1.jpg">
            <div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi recusandae saepe omnis, nisi unde ullam quos perspiciatis in, sapiente illum, voluptatem dicta repellendus dolorum. Deleniti laboriosam ipsa nam unde accusamus!</p>
               <h3>Christine Bartley</h3>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
            </div>
         </div>
         <div class="testimonial-col">
            <img src="images/user2.jpg">
            <div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi recusandae saepe omnis, nisi unde ullam quos perspiciatis in, sapiente illum, voluptatem dicta repellendus dolorum. Deleniti laboriosam ipsa nam unde accusamus!</p>
               <h3>David Byer</h3>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>
      </div>
   </section>

   <!-- Call To Action -->
   <section class="ctn">
      <h1>Enroll For Our Various Online Courses Anywhere From The World</h1>
      <a href="contact.php" class="hero-btn">CONTACT US</a>
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

</body>

</html>