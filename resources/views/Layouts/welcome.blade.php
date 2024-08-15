@include('layouts.home');
<div class="container m-4">
    <div class="row">
        <div class="col-6">
            <h1 class="display-1">
                Products.com...
            </h1>
            <p class="display-4">Where all of the products are listed</p>
        </div>
        <div class="col-6">
            <div class="container w-75">
                <img class="img-fluid" src="img/pexels-athena-2081199.jpg">
            </div>
        </div>
    </div>
    <form action="/products" class="mt-3">
        <button class="btn btn-primary">View Listings</button>
    </form>
    
</div>