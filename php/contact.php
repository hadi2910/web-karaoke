<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Karaoke 019_066</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
    <link rel="stylesheet" href="contact.css">

</head>
<body>
   
   <div class="wrapper">
<!--NAVIGATION-->
         <nav>
            <h2 class="logo">Mi<span>yako</span></h2>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About </a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <a href="login.php" class="btn">Admin</a>
       </nav>
<!--END OF NAVIGATION-->
      
      <div class="section">
          <h1>COME TO MIYAKO KARAOKE <br> AND HAVE FUN</h1>
          <p>Singing karaoke has been proven to relieve stress, boost confidence and strengthen social connections.<br> All proven ways to live a longer, happier life!</p>
          
          <a href="#"><button class="btn-1">GET STARTED</button></a>
<!--FEATURES-->
         <div class="features">
             <button>Miyako</button>
             <button>Karaoke</button>
             <button>The Best</button>
             <button>In World</button>
         </div>
<!--END OF FEATURES-->
      </div>
<!--END OF SECTION-->
   </div>
 <br><br><br>

   <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Or drop a message we wiil reply you soon</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>4671 Babarsari,<br/> Sleman, Yogyakarta, <br/>55060</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>571-457-2321</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
             <p>gataukaraoke077@gmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="contact_proses.php" method="POST">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required="true" name="Full_name">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="email">
              <span>Email</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name="message"></textarea>
              <span>Type your Message...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--END OF SHOWCASE-->
  <!------footer start--------->
  <footer>
    <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>type</h4>
          <ul>
            <li><a href="#">sing</a></li>
            <li><a href="#">party</a></li>
            <li><a href="#">dj</a></li>
            <li><a href="#">vip</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>
</body>
</html>