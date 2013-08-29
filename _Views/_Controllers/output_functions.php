<?php
include '_Models/viewModel.php';

function viewHeader() { 
// print an HTML header
	$view = new viewModel(); 
	$view->showHeader();
}
// print the main nav
function viewNav() {
	$view = new viewModel();
	$view->showNav();	
}
function viewUserNav() {
	$view = new viewModel();
	$view->showUserNav();	
}
// print the main section area
function viewMain() {
	$view = new viewModel();
	$view->showMain();	
}
// print the information area
function viewInfo() {
	$view = new viewModel();
	$view->showInfo();	
}
// print the footer information
function viewFooter() {
	$view = new viewModel();
	$view->showFooter();	
}
// print the sign up form
function viewSignUpForm() {
	$view = new viewModel();
	$view->showSignUpForm();	
}
?>
