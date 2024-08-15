@include('layouts.home')
<body>
        
        <div class="container card-deck m-3 mb-3">
            <h2 class="display-1">Products Listing</h2>
            @foreach($products as $product)
            <div class="container card p-5 m-4 w-50">
                <div class="container-img-fluid">
                    <img class="img-thumbnail" src="storage/{{$product->image_url}}">
                </div>
                <div class="container mb-3">
                    <h2>{{$product->title}}</h2>
                    <p><strong>Kshs</strong> {{$product->price}}</p>
                </div>    
            </div>
            @endforeach
            {{ $products->links('pagination::bootstrap-5') }}
            
        </div>
        <div class="container-fluid mb-3">
            <div class="container d-flex">
                <a href="/create-product" class="href">
                    <button class="btn btn-primary">List a product</button>
                </a>    
            </div>
        </div>
</body>