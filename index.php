<?php
ob_start();
session_start();
?>

<?php require_once ("_Models/viewModel.php"); ?>
<?php include ("_Models/queryModel.php"); ?>

<?php function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
} ?>

<?php $pagename = "index"; ?>

<?php $view = new viewModel();
        $view->showHeader();
?>

<section class="jumbotron">
	
    
    <?php		
	$query = new queryModel();
	
	if(!empty($_GET["action"])){
            
        if($_GET["action"]=="home") {
		
		echo "please choose a username";
	}
           
        if($_GET["action"]=="login") {
		
		$view->getView("_Views/loginForm.php");
		
		$_POST["un"] = "";
		$_POST["pass"] = "";
        }
        if($_GET["action"]=="checklogin") {
		
		
		$result = $query->checklogin($_POST["un"],$_POST["pass"]);	
			
		if(count($result)>0){                    
                    redirect_to("protected.php");
		}else{
                    echo '<h3 class="alert-danger">Login Error</h3>';
                    $view->getView("_views/loginform.php");
		}		
	}
	if($_GET["action"]=="details") {
		
		$result = $query->getOne($_GET["id"]);
		$view->getView("_Views/details.php", $result);		
	}	
        if($_GET["action"]=="logout") {
				
	}
        
        
}else{
	
	$view->getView("_Views/main.php");
}
			
		?>




	

<?php $view = new viewModel();
	$view->showFooter();
        ob_flush()
?>
 
