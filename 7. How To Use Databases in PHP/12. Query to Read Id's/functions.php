
<?php 
	
	function showAllData(){
		global $connection;
	//Read
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
      	$id = $row[id];
      				echo "<option value='$id'>$id</option>";
     }
	}


 ?>