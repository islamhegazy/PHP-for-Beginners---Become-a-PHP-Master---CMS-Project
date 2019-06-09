
<?php

function addRow(){
     global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        if ($username && $password) {
            $query = "INSERT INTO users(username,password)";
            $query .= "VALUES ('$username', '$password')";
            
            $result = mysqli_query($connection, $query);
            
            if ($result) {
                header("Location:index.php");
                exit;
            }else{
                die('Query FAILED' . mysqli_error());
            }
        } else {
            echo "please fill all fileds";
        }
        
        
    }
    
}

function getID()
{
    global $connection;
    $query  = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row[id];
         $username = $row['username'];
        echo "<option value='$id'>$id - $username </option>";
    }
    
}
function showAllData()
{
    global $connection;
    //Read
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id       = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $hidden_password = preg_replace("|.|","*",$password);
        echo "<tr>
                <td>$id</td>
                <td>$username</td>
                <td>$hidden_password</td>
                <td><button class='btn btn-danger' name='Delete'>Delete </button></td>
             </tr>";
    }
    
}
function updataRow()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
}
function delteRow()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
}


?>