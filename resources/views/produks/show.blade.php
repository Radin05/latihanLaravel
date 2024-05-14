<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <!-- NAVBAR -->

    @include('layouts.navbar')

    <!-- /NAVBAR -->

    <!-- main or content -->
    <div class="section">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <center>
                    <h1>Show Artikel</h1>
                </center>
            </div>
            <div class="row">
                <div class="col-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.ufoelektronika.com/image/cache/catalog/product/iphone_14_pro_deep_purple_1-1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                            <p class="card-text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero id corrupti sed. Debitis, dolor fugit.</p>
                            <p class="card-text"> {{ $produk->tanggal_produksi }}</p>
                            <p class="card-text text-danger"><i>UNLIMITED</i></p>
                            <a href="#" class="btn btn-primary">buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main or /content -->

    <!-- footer -->
    
    @include('layouts.footer')

    <!-- /footer -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
