<?php 
$query = "SELECT * FROM categories";
$show_all_categories = @mysqli_query($connection,$query) or die('show_all_categories false');

while($row = mysqli_fetch_assoc($show_all_categories)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    ?>
<tr>
<td><?php echo $cat_id; ?></td>
<td><?php echo $cat_title; ?></td>
<td><a href="categories.php?delete=<?php echo $cat_id; ?>">delete</a></td>
<td><a href="categories.php?edit=<?php echo $cat_id; ?>"  >edit</a>
</tr>
<?php }   ?>
