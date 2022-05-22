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
                        <a class="nav-link active btn btn-primary text-uppercase text-warning" aria-current="page" href="{{route('placeIndex')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> Add place</a>
                        <a class="nav-link" href="{{route('indexProblem')}}">New problem</a>
                        <a class="nav-link" href="{{route('indexSolution')}}">New solution</a>
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
                <h1 class="h2" >VISION MED</h1>

            </div>


            <div class="col-md-7 col-lg-8">



                <form action="{{ route('countPlace') }}" method="post">
                    @csrf


                    <Span class="results">
                            @if(session()->has('count'))
                            <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>

                        @endif
                        </Span>
                    <div class="col-sm-12">
                        <label for="city" class="form-label"><h2>Manzil taqsimoti bo'yicha bemorlar - {{$count}} </h2></label>
                    </div>


                    <select class="form-select" name="place_id">
                        <option value="{{ old('name') }}">.....</option>
                        @foreach($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </select>

                    <div class="col-md-4">
                        <button class="btn btn-primary" style="margin: 14px;">Count Patients</button>
                    </div>

                </form>



{{--  total all seessions   --}}
            </div>
            <br>

            <div class="col-md-7 col-lg-8">

                <hr>
                <br>

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


            <div class="table-bordered border-primary" style="margin-top: 30px;">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mahalla/Qishloq</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($places as $place)
                        <tr>
                            <td scope="col">{{$place->id}}</td>
                            <td scope="col">{{$place->name}}</td>
                            <td>

{{--                                <form action="{{ url('deletePlace',$place->id) }}" method="POST">--}}

{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}

                            </td>

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
