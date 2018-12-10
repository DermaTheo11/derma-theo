<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="theme" type="text/css" herf="bootstrap-3.3.7-dist/css/boo">

	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div class= "body"
    <img src="Halaman/img/IMG_9476.jpg" alt="" />
</div>
   

<div class="content">
	<header>
		<h1 class="judul">SUBUR DAN AMAN</h1>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=toko">TOKO</a></li>
		</ul>
	</div>

	<div class="badan">
 
 
 <?php 
 if(isset($_GET['page'])){
     $page = $_GET['page'];

     switch ($page) {
         case 'home':
             include "Halaman/home.php";
             break;
         case 'tentang':
             include "Halaman/tentang.php";
             break;
         case 'toko':
             include "Halaman/toko.php";
             break;			
         default:
             echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
             break;
     }
 }else{
     include "Halaman/home.php";
 }

  ?>


    <?php 
 


	 ?>
</body>
</html>