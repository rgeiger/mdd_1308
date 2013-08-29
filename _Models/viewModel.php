<?php
class viewModel {
    
	
	public function getView($pagename="", $data=array()){
            
		include $pagename;
	}
	public function showHeader($pageTitle= ''){
		include "_Views/header.php";
	}
	public function showFooter(){
		include "_Views/footer.php";
	}
	public function showDetails(){
		include "_Views/details.php";
	}
        public function showUserDetails(){
		include "_Views/userDetails.php";
	}
	public function showUsers(){
		include "_Views/users.php";
	}
    public function showAddPage(){
		include "_Views/addPage.htm";
	}
	public function showMain(){
		include "_Views/main.php";	
	}
	public function showInfo(){
		include "_Views/infoSection.php";	
	}
	public function showUserNav(){
		include "_Views/userNav.php";	
	}
	public function showNav(){
		include "_Views/nav.php";	
	}
	public function showSignUpForm(){
		include "_Views/signUpForm.php";	
	}
        public function showBlog(){
		include "_Views/blogPost.php";	
	}
        public function showViewCreate(){
		include "_Views/create.view.php";	
	}
}
?>