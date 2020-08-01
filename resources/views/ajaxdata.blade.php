<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'chat';

$db = new mysqli($host,$username,$pass,$db);

if ($db->connect_error) {
	 die("Connection Failed". $db->connect_error);
}



if (isset($_POST['state_id'])) {
	$query = "SELECT * FROM city where c_id=".$_POST['state_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select city</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option id="ps_name" value='.$row['id'].'>'.$row['city_name'].'</option>';
		 }
	}else{

		echo '<option>No City Found!</option>';
	}

}elseif (isset($_POST['city_id'])) {
	 

	$query = "SELECT * FROM ps where s_id=".$_POST['city_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select Police Station</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['ps_name'].'</option>';
		 }
	}else{

		echo '<option>No Police Station Found!</option>';
	}

}


?>