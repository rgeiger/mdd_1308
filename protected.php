<?php require_once ("_Models/viewModel.php"); ?>
<?php include ("_Models/queryModel.php"); ?>

<?php $pagename = "index"; ?>

<?php $view = new viewModel();
	$view->showHeader();
        echo '<center><h3 class="btn-warning"><a href="_Views/logout.php" style=color:white;>LOGOUT</a></h3></center>';
?>

<section class="hero-unit">
	<h1>View User Information Here</h1>
    <?php 
		$timestamp = time();
		echo strftime("The date today is %m/%d/%y", $timestamp);	
	?>

	<div class="row-fluid">
    	<div class="span3">
		<li class="nav-header">User Names</li>
<?php
	
	$query = new queryModel();
		$result = $query->getAll();
		$view->getView("_Views/links.php", $result);
?>
                
    	</div><!--closes user name list cont -->
    
    <div class="span9">
    	<h3>Displayed information</h3>
        
        
       	<?php
	$query = new queryModel();
	
	if(!empty($_GET["action"])){
	
	if($_GET["action"]=="home") {
		
		echo "please choose a username";
	}
	if($_GET["action"]=="details") {
		
		$result = $query->getOne($_GET["id"]);
		$view->getView("_Views/details.php", $result);
                
                
	}
        if($_GET["action"]=="update") {
            $result = $query->getOne($_GET["id"]);
            $view->getView("_Views/updateForm.php", $result);                        
        }else if($_GET["action"]=="updateaction") {
                $query->update($_GET['id'],$_POST['email'],$_POST['phone'],$_POST['address']);
                //$view->getView("protected.php", $result);            
        }
        if($_GET["action"]=="addUser") {
            $view->getView("_Views/addPage.htm");
        }
        if($_GET["action"]=="addaction") {
            $query->add($_POST["first"],$_POST["last"],$_POST["un"],$_POST["pass"],
                    $_POST["email"],$_POST["phone"],$_POST["address"],$_POST["age"]);
            $result = $query->getAll();
            //$view->getView("protected.php", $result);
        }
        if($_GET["action"]=="delete") {
            $query->delete($_GET["id"]);
            $results = $query->getAll();
        }
}else{
	echo "Please Select A Users Details, update user, or delete user from the menu.";
        echo "<br>";
        echo '<h3 class="btn btn-success"><a href=?action=addUser style=color:white;>Click here to add a user.</a></h3>';
}
?>
        	
    </div>
</div>
        
</section>

<?php $view = new viewModel();
	$view->showFooter();
?>
 
