<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Products.com</title>
</head>
<body style="background-color: beige;">
    <nav class="navbar nav-light bg-light navbar-expand-lg" style="font-size: 20px;">
        <div class="container mb-3">
            <a href="/" class="navbar-brand">Products.com</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/products" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <script src="/bootstrap-5.0.2-dist//js/bootstrap.js"></script>
    <footer class="container">
    </footer>
</body>
</html>