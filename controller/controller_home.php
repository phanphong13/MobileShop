<?php
	class controller_home extends controller {

		function __construct()
		{
			parent::__construct();
			// get product
			$products = $this->model->getArray('products');
			if ($products === false) die('Failed product 0');
						
            include "./view/home.php";
		}
	}

    new controller_home();

?>