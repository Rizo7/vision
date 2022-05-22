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
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

                <!-- top side bar  -->

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                        <a class="nav-link active " aria-current="page" href="{{route('placeIndex')}}">Add place</a>
                        <a class="nav-link " href="{{route('indexProblem')}}">   New problem</a>
                        <a class="nav-link btn btn-primary text-uppercase text-warning " href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                            </svg> New solution</a>
                    </li>

                </ul>


            </div>
        </nav>



        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                </div>

                <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                </div>

            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2" style="text-shadow: 4px; text-decoration-color: blue;">VISION MED</h1>
            </div>



            <div class="col-md-7 col-lg-8">



                <form action=" {{route('addSolution')}}" method="post">
                    @csrf
                    <Span class="results">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>

                        @endif
                        </Span>
                    <Span class="results">
                            @if(session()->has('fail'))
                            <div class="alert alert-success">
                                    {{ session()->get('fail') }}
                                </div>

                        @endif
                        </Span>
                    <div class="col-sm-12">
                        <label for="solution" class="form-label"><h2>Add solution</h2></label>
{{--                        <input type="text" class="form-control" name='solution' id="city" placeholder="Tashhis kiriting" required="" >--}}
                        <div class="form-floating">
                            <textarea class="form-control" name='solution'  style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Solution</label>
                        </div>
                    </div>
                    <Span class="text-danger">
                            @error('problem')
                                <div class="alert alert-danger">
                        {{ $errors }}
                         </div>
                        @enderror
                        </Span>



                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary" style="margin: 14px;">Add solution</button>
                    </div>
                </form>




            </div>


            <div class="table-bordered border-primary" style="margin-top: 30px;">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tashhislar</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($solutions as $place)
                        <tr>
                            <td scope="col">{{$loop->iteration}}</td>
                            <td scope="col">{{$place->solution}}</td>
                            <td>

                        </tr>

                    @endforeach
                    <!--  -->
                    </tbody>
                </table>
            </div>
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
