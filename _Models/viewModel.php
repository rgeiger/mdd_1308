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
	public function showDetails($details){
		include "_Views/details.php";
	}
	public function showLinks(){
		include "_Views/links.php";
	}
        public function showAddPage(){
		include "_Views/addPage.htm";
	}
	public function showMain(){
		include "_Views/main.htm";	
	}
}
?>