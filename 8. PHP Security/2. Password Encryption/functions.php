<?php
function addRow() {
    global $connection;
    if (isset($_POST['submit'])) {
        // escape variables for security
        //escapestring	Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        //2. Password Encryption
        $options = [
            'cost' => 12,
        ];
        $encript_password = password_hash( $password, PASSWORD_DEFAULT,$options );
        
       /*
        if (password_verify($password, $encript_password)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
       
       */
        
        if ($username && $password) {
            $query = "INSERT INTO users(username,password)";
            $query.= "VALUES ('$username', '$encript_password')";
            $result = mysqli_query($connection, $query);
            if ($result) {
                header("Location:index.php");
                exit;
            } else {
                die('Query FAILED' . mysqli_error());
            }
        } else {
            echo "please fill all fileds";
        }
    }
}
function getID() {
    global $connection;
    $query = "SELECT * FROM users";
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
function showAllData() {
    global $connection;
    //Read
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $hidden_password = preg_replace("|.|", "*", $password);
        echo "<tr>
                <td>$id</td>
                <td>$username</td>
                <td>$hidden_password</td>
                <td><button class='btn btn-danger' name='Delete'>Delete </button></td>
             </tr>";
    }
}
function updataRow() {
    global $connection;
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $id = $_POST['id'];
    $query = "UPDATE users SET ";
    $query.= "username = '$username', ";
    $query.= "password = '$password' ";
    $query.= "WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
}
function delteRow() {
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users ";
    $query.= "WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
}
?>
