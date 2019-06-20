<?php include "./Query/Q_update_category.php"?>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      <form  method="post" >
      <div class="form-group">
         <label for="cat-title">Update Category</label>
         <input type="text" class="form-control" name="cat_title_edit" value="<?php if(isset($cat_title)){echo $cat_title ;} ?>">
      </div>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" name="submit_edit" value="Update Category">
      </div>
   </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="model_close">Close</button>
      </div>
    </div>

  </div>
</div>