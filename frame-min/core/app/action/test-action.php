<?php 

if (!empty($_POST)) {
	if(isset($_POST["name"]) && isset($_POST["lastname"])){

		$n = new CustomerData();
		$n->name = $_POST["name"];
		$n->lastname = $_POST["lastname"];
		$n->add();

		header("Location: ./?view=Customer/customers");
	}
}
?>
