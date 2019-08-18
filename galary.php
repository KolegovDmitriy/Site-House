<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Галерея</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
<!--========================== Header=========================== -->
 
<?php 
include 'header.php';
 ?>	         	       
<!--===================== Конец блока Header =================== --> 
<div class="conteiner"> 
<!--===================== Начало блока main  =================== -->
 <div class="main">

<h1>
	Галерея
<div class="wrapper">
  

  
  <div class="gallery">

    <?php 
include 'functions.php';
$dir = 'img/1/small/';
$bdir = 'img/1/big/';
$images = get_images($dir);
?>
  
  <?php if($images): ?>
  <?php foreach($images as $image): ?>
    <div class="item">
      <div>
        <a data-lightbox="lightbox" href="<?=$bdir . $image?>">
          <img class="front" src="<?=$dir . $image?>" alt="">
        </a>
      </div>
    </div>



  <?php endforeach; ?>
  <?php else: ?>
    <p>В данной галерее нет картинок</p>
  <?php endif; ?>







  </div>

</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/lightbox-2.6.min.js"></script>



  
</h1>


  </div>
<!--====================== Конец блока main ==================== -->
<!--===================== Начало блока footer ================== -->
  <?php 
     include 'footer.php';
   ?>
<!--===================== Конец блока footer =================== -->
</div>  <!--  контейнер сласс  -->

</body>
</html>