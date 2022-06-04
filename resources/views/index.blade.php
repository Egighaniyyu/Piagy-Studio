<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- my css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    {{-- Navbar --}}
    <section id="Navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo1.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto">
                        <a class="nav-link" href="#">Challenge </a>
                        <a class="nav-link" href="#">Mentoring</a>
                        <a class="nav-link btn btn-primary" href="#">Get Unlimited Download</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link btn btn-outline-primary" href="#">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    {{-- Product --}}
    <section id="product">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm">Rp. 400.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Discount Today --}}
    <section id="discount-today">
        <div class="container">
            <h2 class="text-title">Discount For Today<span><img src="img/emot_api.png" alt="emot api"></span></h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/products/product1.png" alt="product" class="img-product">
                        </div>
                        <div class="profile-designer m-auto">
                            <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                            <p class="text-designer-sm">Hello Designer</p>
                        </div>
                        <div class="card-desc">
                            <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                            <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <section id="footer">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="footer-logo">
                            <img src="img/logo2.png" alt="logo" class="img-logo">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-title-footer">Links
                        </p>
                        <div class="footer-links">
                            <a href="#" class="text-footer">Challenge</a>
                            <a href="#" class="text-footer">Mentoring</a>
                            <a href="#" class="text-footer">Get Unlimited Download</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-title-footer">Company
                        </p>
                        <div class="footer-links">
                            <a href="#" class="text-footer">Support</a>
                            <a href="#" class="text-footer">Lisence & Terms</a>
                            <a href="#" class="text-footer">About</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>