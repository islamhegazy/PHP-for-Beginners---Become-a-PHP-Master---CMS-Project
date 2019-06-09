<?php 
   include('./connection/connection.php');
   include('functions.php');
   ?>
<?php
   addRow();
   if(isset($_POST['Delete'])){
       delteRow();
   }
    if(isset($_POST['Update'])){
       updataRow();
   }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container">
        <form method="post" action="index.php">
            <h1>Users Table: </h1>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Add New Or Edit User</button>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New User</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>select to Update</label>
                                <select name="id">
                                    <?php 
                              getID();
                              ?>
                                </select>
                            </div>
                            <input type="submit" name="submit" value="Add" class="btn btn-success">
                            <input type="submit" name="Update" value="Update" class="btn btn-primary">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     showAllData()
                     ?>
                </tbody>
            </table>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html
