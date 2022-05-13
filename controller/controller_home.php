<?php
	class controller_home extends controller {

		function __construct()
		{
			parent::__construct();
						
            include "./view/home.php";
		}
	}

    new controller_home();

?>