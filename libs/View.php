<?php

class View {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false)
	{
		$subname = explode("/",$name);
		
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			//echo $subname[0];
			
			require 'views/header.php';
			
			/*if(Session::get('userType') == "dealer"){
				require 'views/dealerheader.php';
			}
					else{
						
						if(Session::get('userType') == "user" && Session::get('parent_userType') == "dealer"){
							require 'views/dealerheader.php';
						}
						else{
						require 'views/customerheader.php';
						}
					}*/
			require 'views/' . $name . '.php';
			require 'views/footer.php';
			}
			
		
	}

}
