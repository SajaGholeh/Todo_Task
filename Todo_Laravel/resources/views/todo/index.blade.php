<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Categories and Todo List</title>


    <style>
    span {
      content: "\002B";
      font-size: 100%
    }

    .master_detail .detail_list {
      background-color: #ccc;
      height: 100%;
      widows: 100%;
    }

  
    </style>
  </head>
  <body>

    <div class="container"> <br>
        <h3>Your Categories and Todo List</h3><br><br>
        <div class="master_detail">
          <div class="row">
              <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="master_list">
                  <div class="list-group">
                    <button type="button" class="list-group-item" style="background: #87CEFA"><b>Categories</b></button>


                      <?php foreach ($categories as $cat):?>

                      <input type="hidden"  name="category_id" value="<?php echo $cat->id;?>">
                      <button type="button" class="list-group-item" style="background: #C5C5C5"><?php echo $cat->CategoryName;?></button>
                      <?php endforeach; ?>

                      <a href="{{ url('/createCategory/') }}" class="btn btn-xs btn-info pull-right" style="background: #C5C5C5"><b>  Add/Edit </b></a>

                  </div>
                </div>
              </div>


              <div class="col-md-10 col-sm-12 col-xs-12">

                <div class="detail_list">

                    <h3 style="background: #87CEFA">Todo List</h3>


                </div>
                <a href="{{ url('/createTodo/') }}" class="btn btn-xs btn-info pull-right" style="background: #C5C5C5"><b>  Add/Edit Todo List</b></a>
              </div>
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
