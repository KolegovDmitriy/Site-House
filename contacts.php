<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Контакты</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style-contact.css">
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

  <div class="contacts">
       <table>
             <tr>
        <td style="width: 60px;float: left;margin: 0px 0px;"><b>Адрес:</b></td>
        <td>188691, Россия, Ленинградская обл., <br> г. Кудрово ул. Пражская, 
            д. 15 м. Дыбенко. <br> 
        </td>
      </tr>  

      <tr>
        <td> <b>e-mail:</b></td>
        <td>moscentrstroi@yandex.ru</td>
      </tr>

      <tr>
        <td><b>WhatsApp:</b> </td>
        <td>8(921)777-77-77</td>
      </tr>
      
      <tr>
        <td><b>Тел.:</b> </td>
        <td>8(921)777-77-77</td>
      </tr> 

       <tr>
        <td> </td>
        <td>Сергеев Денис Анатольевич</td>
      </tr>     

       </table>


    </div>

    
         <!-- <h1 id="write">Напишите нам</h1>    -->
      <form class="send">

      <fieldset>        

          <h3>Имя:</h3>
      <input class="input_name" type="text" size="20" placeholder="Ваше имя" name="">
      <br>

          <h3>e-mail:</h3> 
      <input type="e-mail" size="20" placeholder="Ваш e-mail" name=""> <br>

          <h4 align="center">Тема сообщения</h4>
      <input class="input_theme" type="text" size="20" placeholder="Введите тему сообщения" name=""><br>

      <textarea name="text-field" id="text-field" cols="50" rows="10"></textarea> 

      <input type="submit" name="" value="Сохранить">
      <input type="reset" name="" value="Очистить">


  </fieldset>

</form> 
    
               






  <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acbab65e0e91d8fae28c833cfecaab080daa13eb9bd8475faa22a4ea95b4c31fe&amp;source=constructor" width="800" height="557" frameborder="0">                  
  </iframe>  

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