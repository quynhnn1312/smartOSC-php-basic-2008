<?php
$products = [
    [
        "id" => 1,
        "sku" => "MK123",
        "title" => "san pham 1",
        "price" => "san pham 1",
        "description" => "abcxyz",
        "image" => "https://images.unsplash.com/photo-1494972308805-463bc619d34e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80",
        "size" => "M",
        "color" => "red"
    ]
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-white" href="#">SMART-OSC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section class="mt-5">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sku</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Color</th>
                <th scope="col">
                    <a class="btn btn-outline-success" href="./addProduct.php">Add</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?
                    if(isset($products)): foreach ($products as $key => $product):
                ?>
                    <tr>
                        <td><? echo $key+1 ?></td>
                        <td><? echo $product['sku'] ?></td>
                        <td><? echo $product['title'] ?></td>
                        <td>
                            <img class="img-thumbnail" src="<? echo $product['image'] ?>" width="150px" alt="">
                        </td>
                        <td><? echo $product['description'] ?></td>
                        <td><? echo $product['price'] ?></td>
                        <td><? echo $product['size'] ?></td>
                        <td><? echo $product['color'] ?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-eye"></i> Detail</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?
                    endforeach; endif;
                ?>
            </tbody>
        </table>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>