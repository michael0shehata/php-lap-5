<?php
 setcookie("name", "Michael shehata", time()+60);
 setcookie("course", "PHP", time()+60);
 setcookie("category", "ITI", time()+60);

 echo '<pre>';
 var_dump($_COOKIE);
 echo '</pre>';

 ?>

   <html>
  <head>
  <title>Setting Cookies with PHP</title>
  </head>

 <body>

 <h1>Hello!</h1>
 <?php echo "Set Cookies"; 
 if(isset($_COOKIE ["name"]))
 echo "Welcome " . $_COOKIE["name"] . "<br />";
 else
 echo "Sorry... Not recognized". "<br />";


 //setcookie("name", "Ibrahem");

//setcookie("name", "Mohamed", time()-1); 
?>

 </body>

 </html>