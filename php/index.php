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

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


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
<a href="contact_tampil.php">
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
        <section class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
            <img src="pic2.jpg" alt="UPNVY" title="UPNVY" style="width: 200px; height: 200px;">
             <h1>
             <?php
                        include 'connect.php';
                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM admin WHERE username = '$username'";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                                    <div class="col-auto ">
                                        <p align="Center">HALLO, <?= $data['username'] ?></p>
                                        <p>WELCOME TO MIYAKO KARAOKE</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </h1>
        </section>
    </main>
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script
  
</body>
</html>