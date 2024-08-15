@include('layouts.home')
    <div class="container">
        <form action="/store-product" method="post" enctype="multipart/form-data">

            @csrf
            <div class="container">
                <h2 class="display-4">Create a new product listing</h2>
                <p>Enter the product details here</p>            
                    <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="price"> 
                        </div>
                        <div class="mb-3">
                            <label for="product-image" class="form-label"></label>
                            <input type="file" name="image_url" id="product-image">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">
                                Create Product
                            </button>
                        </div>
                    </div>
            </div>
            </div>
        </form>
    </div>