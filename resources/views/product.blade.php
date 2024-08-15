<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <h2>This is the product page. Here are some of the products</h2>
        <div class="container">
            @foreach($products as $product)
            <div class="col-md-8">
                <h2>{{$product->title}}/h2>
                <p>Product price</p>
                <div class="container mb-3">Product Image</div>
            </div>
            @endforeach
        </div>
    </body>
</html>