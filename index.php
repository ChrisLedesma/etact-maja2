<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
include 'class.users.php';

$user = new Users();
if(!$user->get_session()){
	header("location: login.php");
}
?>
<html> 
    <head>
      <title>Endterm Activity #1</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Fira+Sans|Mukta&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="header">
        <img src="images/logo.png" style="width:300px;height:200px;">
      </div>

      <div class="navbar">
        <a href="index.php?navigation=product">Products</a>
        <a href="index.php?navigation=categories">Category</a>
        <a href="index.php?navigation=create">Create</a>
      </div>

      <div>         
      <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
		  case 'update':
            require_once 'form_update.php';
            break;
        }
    ?>
      </div>

      <div class="footer">
        <h1>Maja | API</h2>
      </div>
    </body>
</html>




