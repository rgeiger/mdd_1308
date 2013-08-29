<?php
ob_start();
session_start();

require_once('_Controllers/functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php viewHeader(); ?>

<?php include ("_Models/queryModel.php"); ?>

<body>
    <?php
		viewNav();
			
	$query = new queryModel();
	
	if(!empty($_GET["action"])){
		
        if($_GET["action"]=="login") {
      
		viewLoginForm();
		$_POST["un"] = "";
		$_POST["pass"] = "";
        }
		
		if($_GET["action"]=="signUp") {
			viewSignUpForm();
        }
		if($_GET["action"]=="addaction") {
            $query->add($_POST["first"],$_POST["last"],$_POST["un"],$_POST["pass"],
                    $_POST["email"]);
            $result = $query->getAll();
			
            echo '<h2>Please login to view your page</h2>';
        }
		
        if($_GET["action"]=="checklogin") {
		$result = $query->checklogin($_POST["un"],$_POST["pass"]);	
		if(count($result)>0){                    
                    redirect_to("userPage.php");
		}else{
                    echo '<h3 class="alert-danger">Login Error</h3>';
		}		
	}
	if($_GET["action"]=="details") {
		
		$result = $query->getOne($_GET["id"]);
		$view->getView("_Views/details.php", $result);		
	}	
        
}else{
	viewMain();
}
?>

<?php
	viewInfo();
	viewFooter();
    ob_flush()
?>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
<script src="_Libraries/_js/respond.min.js"></script>
</body>
</html>
 
