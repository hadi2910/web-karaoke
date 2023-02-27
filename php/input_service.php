
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Karaoke 019_066</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="in.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
      
    </div>

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="login-box">
  <h2>BOOKING</h2>
  <h4>Do you want to order miyako karaoke?</h4>
  <br>
  <form action="input_proses.php" method="POST">
    <div class="user-box">
      <input type="text" name="Nama" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="mobile_number" required="">
      <label>Mobile Number</label>
    </div>
    <p>Event Date</p>
    <div class="user-box">
      <input type="date" name="event_date" required="">
      <label></label>
    </div>
    <p>Starting Event</p>
    <div class="user-box">
      <input type="time" name="starting_time" required="">
      <label></label>
    </div>
    <p>Finish Event</p>
    <div class="user-box">
      <input type="time" name="finish_time" required="true">
      <label></label>
    </div>
    <div class="user-box">
    <select name="type_of_event" type="text" required="true" id="select">
      <option selected>Type Of Event</option>
      <option value="Anniversary">Anniversary</option>
      <option value="Social">Social</option>
      <option value="Wedding">Wedding</option>
      <option value="Birthday">Birthday</option>
      <option value="Party">Party</option>
</select>
</div>
<br>
<p>Additional Information</p>
<div class="user-box">
<textarea type="text-info" name="adiitional_information" cols="50" rows="10"></textarea>
<label></label>
</div>
    <button href="#" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
  </form>
</div>
</div>
</body>
</html>
