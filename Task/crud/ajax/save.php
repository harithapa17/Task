<?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['e_name'];
		$salary=$_POST['e_salary'];
		$address=$_POST['e_address'];
		$sql = "INSERT INTO `ajax_emp`( `e_name`, `e_salary`,`e_address`) 
		VALUES ('$name','$salary','$address')";
		if (mysqli_query($link, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['e_name'];
		$salary=$_POST['e_salary'];
		$address=$_POST['e_address'];
		$sql = "UPDATE `ajax_emp` SET `e_name`='$name',`e_salary`='$salary',`e_address`='$address' WHERE id=$id";
		if (mysqli_query($link, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `ajax_emp` WHERE id=$id ";
		if (mysqli_query($link, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM ajax_emp WHERE id in ($id)";
		if (mysqli_query($link, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}

?>