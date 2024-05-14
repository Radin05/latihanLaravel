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
                    <h3>List Artikel</h3>
                </center>
            </div>
            <div class="row mt-5">
                @foreach ($merek as $data)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://apple-store.ifuture.co.in/wp-content/uploads/2023/10/Evolution-of-Apple-MacBook-2006-to-2023-1024x576.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_merek }}</h5>
                            <a href="/template_merek/{{$data->id}}" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
