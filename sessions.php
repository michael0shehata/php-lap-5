<?php

session_start();

 if (isset($_SESSION['page_count'])) { 
    $_SESSION['page_count']+=1;
 } else {
 $_SESSION['page_count'] = 1;
  }

 $_SESSION['country']='Egypt';

 $msg = "You have viewed my awesome page <span style='color:red'>". $_SESSION['page_count']; 
 $msg.= "</span> in this session";

 if ($_SESSION['page_count'] > 10){
 echo "Thank you for visiting our website <span style='color:green'> 10 </span>times";
 }

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//session_destroy();
 ?>
 <html>
<head>
    <title>sessions</title>
</head>
<body>
<?php echo ($msg);?>    

</body>

 </html>


  