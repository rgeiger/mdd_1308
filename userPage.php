<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php 



	require_once ("_Controllers/functions.php");  
	include ("_Models/queryModel.php"); 
	$query = new queryModel();
        viewHeader();
	viewUserNav();
        
	
        $query = new queryModel();
        
		
		
        
	echo '<div class="container"><h3 class="txt-success">Welcome User</h3></div>';

        echo '<div class="container"><ul class="nav nav-tabs">';
        echo '<li><a href ="?action=">User Home</a></li>';
        echo '<li><a href ="?action=users">View Members</a></li>';
        echo '<li><a href ="?action=blog">View Blog Posts</a></li>';
        echo '</ul></div>';
        
        if(!empty($_GET["action"])){
            
            if($_GET["action"]=="users") {
            ?> <div class="container">
                 <?php viewUsers();	?>
            </div>
            <?php }  

            if($_GET["action"]=="blog") {
            ?> <div class="container">
                <h3>this is the user blog</h3>
                <button><a href="?action=createPost">Post</a></button>
                 <?php viewBlog(); ?>
            </div>
            <?php }
            
            if($_GET["action"]=="details") {
            ?> <div class="container">
                <h3>User details</h3>
                 <?php viewUserDetails() ?>
                </div>
            <?php }
            
            if($_GET["action"]=="createPost") {
            ?> <div class="container">
                 <?php viewCreate() ?>
                </div>
            <?php }
        }
        
        
	viewInfo();
	viewFooter();
        
?>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
<script src="_Libraries/_js/respond.min.js"></script>
</body>
</html>