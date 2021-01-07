<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
  </head>
  <body>


<div class="container">
    <div class="row">
        <div class="col md-12">
            <div class="jumbotron p-3">

                <div class="row">
                  <div class="col">

                    <h1>Insert Category</h1>
                    <hr>

                    <form action="addCategory" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Category Name</label><br><br>
                        <input type="text" class="form-control" id="CategoryName" name="CategoryName" placeholder="Enter a category name">
                        <span style="color: red">@error('Category Name'){{ $message }} @enderror</span>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary">Add New Category</button>
                    </form>

                    <br>
                    <hr>


        <table class="table table-hover table-striped">
            <tr>
                <th>Category Name</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
            <?php foreach ($categories as $cat):?>
              <tr>
                  <td><?php echo $cat->CategoryName; ?></td>
                  <td><?php echo $cat->CreatedBy; ?></td>
                  <td>
                      <a href="/updateCategory/{{$cat->id}}" data-toggle="modal" data-target="#updateCategory{{$cat->id}}">Update</a>
                      <a href="/deleteCategory/{{$cat->id}}" style="color:red" data-toggle="modal" data-target="#deleteCategory{{$cat->id}}">Delete</a>
                  </td>
              </tr>




      <div id="updateCategory{{$cat->id}}" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header"><h4 class="modal-title">Update Category</h4></div>
      <div class="modal-body">
        <form action="updateCategory" method="POST">
          @csrf
        <div class="form-group">
        <label>Category Name</label>
          <input type="hidden"  name="id" value="<?php echo $cat->id; ?>">
          <input type="text" class="form-control" name="CategoryName" value="<?php echo $cat->CategoryName; ?>">
        </div>
        <div class="form-group"> <br>
        <button class="btn btn-primary" type="submit">Update</button>
        </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
      </div>
      </div>



        <div id="deleteCategory{{$cat->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-body">
          <form action="deleteCategory" method="POST">
            @csrf
          <div class="form-group">
          <lable class="modal-title">Are You Sure You Want to Delete the Category?</lable>
            <input type="hidden"  name="id" value="<?php echo $cat->id; ?>">
          </div>
          <div class="form-group"> <br>
          <button class="btn btn-primary" type="submit" >Yes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>

        </div>
            </div>
<?php endforeach; ?>
      </table>
      </div>
 </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
