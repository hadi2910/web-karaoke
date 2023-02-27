<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location: login.php?message=belum_login");
}
?>
<!DOCTYPE html><html class="menu">
<html>

<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>MENU ADMIN</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="tambah.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


  
 



</head>
<body>



</div><nav class="main-menu">


  
 <div>
    <a class="logo" href="http://startific.com">
    </a> 
  </div> 
<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="index.php">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>   
   
<li>                                 
<a href="">
<i class="fa fa-user fa-lg"></i>
<span class="nav-text">Profil</span>
</a>
</li>   
  

  
</li>
<li >
<a href="tampil.php">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">Booking</span>
</a>
</li>
  
<li class="darkerli">
<a href="">
<i class="fa fa-desktop fa-lg"></i>
<span class="nav-text">Technology</span>
</a>
</li>
  
  
<li class="darkerli">
<a href="">
<i class="fa fa-microphone fa-lg"></i>
<span class="nav-text">Film & Music</span>
</a>
</li>

<li>                                 
<a href="">
<i class="fa fa-envelope-o fa-lg"></i>
<span class="nav-text">Contact</span>
</a>
</li>   
  
<ul class="logout">
<li>
                   <a href="logout.php">
                         <i class="fa fa-plane fa-lg"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                        
                    </a>
</li>  
</ul>
        </nav>

    <main>
    <div class="login-box">
  <h2>EDIT DATA</h2>
  <h4>Do you want to edit miyako karaoke?</h4>
  <br>
  <form action="edit_proses.php" method="POST">
    <div class="user-box">
        <?php
                        include 'connect.php';
                        $Nama = $_GET['id'];

                        $sql    = "SELECT Nama FROM booking where Nama = '$Nama'";
                        $query    = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <input type="text" class="form-control" id="staticEmail" value="<?= $data['Nama'] ?>" disabled>
                            <input type="hidden" value="<?= $data['Nama'] ?>" name="Nama">
                        <?php } ?>
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
<textarea type="text-info" name="adiitional_information" cols="50" rows="5"></textarea>
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
</main>