<?php
	class controller_product extends controller {

		function __construct()
		{
			parent::__construct();
			
						
            include "./view/product.php";
		}
	}

    new controller_product();

?>