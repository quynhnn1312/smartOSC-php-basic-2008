<?php
    $idProduct = isset($_GET['id']) ? $_GET['id'] : 0;

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $sku = $_POST['sku'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $description = $_POST['description'];

        $error = [];

        if($sku == NULL){
            $error['sku'] = "* Please enter the product sku !";
        }
        if($title == NULL){
            $error['title'] = "* Please enter the product sku !";
        }
        if($price == NULL){
            $error['price'] = "* Please enter the product price !";
        }
        if($size == NULL){
            $error['size'] = "* Please enter the product size !";
        }
        if($color == NULL){
            $error['color'] = "* Please enter the product color !";
        }
        if($description == NULL){
            $error['description'] = "* Please enter the product description !";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-white border border-white px-2" href="#">SMART-OSC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="./index.php">Home</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section class="mt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><? echo $idProduct ? "Edit" : "Add" ?> Product</h3>
            </div>
            <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="row">
                       <div class="col-sm-6 col-md-6 col-6">
                           <div class="form-group">
                               <label for="Sku">Sku <span class="text-danger">*</span></label>
                               <input type="text" name="sku" class="form-control" placeholder="Enter sku ...">
                               <span class="text-danger"><? echo isset($error['sku']) ? $error['sku'] : "" ?></span>
                           </div>
                           <div class="form-group">
                               <label for="Title">Title <span class="text-danger">*</span></label>
                               <input type="text" name="title" class="form-control" placeholder="Enter title ...">
                               <span class="text-danger"><? echo isset($error['title']) ? $error['title'] : "" ?></span>
                           </div>
                           <div class="form-group">
                               <label for="Price">Price <span class="text-danger">*</span></label>
                               <input type="number" name="price" class="form-control" placeholder="Enter price ...">
                               <span class="text-danger"><? echo isset($error['price']) ? $error['price'] : "" ?></span>
                           </div>
                           <div class="form-group">
                               <label for="Size">Size <span class="text-danger">*</span></label>
                               <input type="text" name="size" class="form-control" placeholder="Enter size ...">
                               <span class="text-danger"><? echo isset($error['size']) ? $error['size'] : "" ?></span>
                           </div>
                           <div class="form-group">
                               <label for="Color">Color <span class="text-danger">*</span></label>
                               <input type="text" name="color" class="form-control" placeholder="Enter color ...">
                               <span class="text-danger"><? echo isset($error['color']) ? $error['color'] : "" ?></span>
                           </div>
                       </div>
                       <div class="col-sm-6 col-md-6 col-6">
                           <div class="form-group text-center">
                               <img width="300px" id="output" src="./public/image/default-image.jpg" alt="..." class="img-thumbnail">
                           </div>
                           <div class="form-group">
                               <label for="Color">Image <span class="text-danger">*</span></label>
                               <input type="file" name="image" id="input" class="form-control" placeholder="Choose file">
                               <span class="text-danger"></span>
                           </div>
                           <div class="form-group">
                               <label>description <span class="text-danger">*</span></label>
                               <textarea class="form-control" name="description" rows="3" placeholder="Enter description..."></textarea>
                               <span class="text-danger"><? echo isset($error['description']) ? $error['description'] : "" ?></span>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit-form" class="btn btn-primary">Submit</button> &nbsp;
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    document.querySelector("#input").onchange = (event) => {
        let output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>