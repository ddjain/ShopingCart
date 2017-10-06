<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MyKart</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Add Category </a></li>
      <li><a href="#">Add Product</a></li>
      <li><a href="#">Update Product</a></li>
      <li><a href="#">Delete Product</a></li>
    </ul>
  </div>
</nav>
  
<div id="addProduct" class="container">

<div class="container">
  <h2>Add New Product</h2>
  <form action="/action_page.php">
   
    <div class="form-group">
      <label for="text">Product Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Name" name="email">
    </div>
   
   <div class="form-group">
      <label for="text">Price</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Name" name="email">
    </div> 
    
    <div class="form-group">
      <label for="text">Available</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Name" name="email">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</div>

</body>
</html>
