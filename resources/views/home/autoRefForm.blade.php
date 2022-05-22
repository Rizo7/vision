<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link href="{{ asset('css/bootstrap5.css') }}" rel="stylesheet" >
</head>

<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-capitalize" href="#">{{ Auth()->user()->name }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="{{ route('logout') }}">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid" style="margin-top: 30px;">
    <div class="row">




        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2" style="text-shadow: 4px; text-decoration-color: blue;">VISION MED</h1>
            </div>




            <div class="col-md-7 col-lg-8">



                <form action=" {{route('addPlace')}}" method="post">
                    @csrf


                    <Span class="results">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>

                        @endif
                        </Span>
                    <div class="col-sm-12">
                        <label for="city" class="form-label"><h2>Manzil qo'shish</h2></label>
                        <input type="text" class="form-control" name='name' id="city" placeholder="Manzil kiriting" >
                    </div>
                    <Span class="text-danger">
                            @error('name')
                                <div class="alert alert-danger">
                        {{ $errors }}
                         </div>
                        @enderror
                        </Span>



                    <div class="col-md-4">
                        <button class="btn btn-primary" style="margin: 14px;">Add city</button>
                    </div>
                </form>

            </div>

            {{}}


        </main>
    </div>
</div>


<!-- footer -->

<div class="container-fluid" style="background: rgb(184, 175, 175);">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-primary">Home</a></li>
        </ul>
        <p class="text-center text-white bg-black">Safarov Fayruzbek</p>
    </footer>
</div>


<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>


</body>

</html>
