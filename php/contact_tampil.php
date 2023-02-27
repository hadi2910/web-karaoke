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

<link rel="stylesheet" type="text/css" href="style.css">
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
        <hr>
        <h1 class="text-center">Data Contact</h1>
        <hr>
        <br>
    <table class="table">
            <thead class="table-dark" >
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
            include 'connect.php';
            $sql = "SELECT * FROM contact";
            $query = mysqli_query($connect, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $i ?></td>
                        <td><?= $data['Full_name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['message'] ?></td>
                        <td><a href="hapus.php?id=<?= $data['Full_name'] ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            <?php $i += 1;
            } ?>
        </table>
    </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>