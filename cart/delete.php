<?php 

	require_once '../common/common.php';
	require_once '../common/function.php';


	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		header('location:../cart');
		die;
	}	

	$mang = [];
	$mang = $_SESSION['cart'];

	$index = -1;
	for ($i=0; $i < count($mang); $i++) { 
		if ($mang[$i]['id'] == $id) {
			$index = $i;
			break;
		}
	}

	if($index >= 0){
		array_splice($mang, $index, 1);
	}

	$_SESSION['cart'] = $mang;

	header('Location:../cart');
 ?>