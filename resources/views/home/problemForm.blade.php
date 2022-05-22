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
                        <a class="nav-link btn btn-primary text-uppercase text-warning" href="{{route('indexProblem')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                            </svg> New problem</a>
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
                <h1 class="h2" style="text-shadow: 4px; text-decoration-color: blue;">VISION MED</h1>
                {{--                <div class="btn-toolbar mb-2 mb-md-0">--}}
                {{--                    <div class="btn-group me-2">--}}
                {{--                        <a  class="btn btn-sm btn-primary" href=''>New patient</a>--}}
                {{--                        <button type="button" class="btn btn-sm btn-warning btn-outline-light">Yesterday</button>--}}
                {{--                    </div>--}}
                {{--                    <button type="button" class="btn btn-sm btn-danger dropdown-toggle">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>--}}
                {{--                        This week--}}
                {{--                    </button>--}}
                {{--                </div>--}}
            </div>



            <div class="col-md-7 col-lg-8">



                <form action=" {{route('addProblem')}}" method="post">
                    @csrf

                    {{--                    <Span class="results">--}}
                    {{--                            @if(session()->has('fail'))--}}
                    {{--                            <div class="alert alert-danger">--}}
                    {{--                                    {{ session()->get('fail') }}--}}
                    {{--                                </div>--}}

                    {{--                        @endif--}}
                    {{--                        </Span>--}}

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
                        <label for="problem" class="form-label"><h2>Add problem</h2></label>
{{--                        <input type="text" style="width: 100%" class="form-control" name='problem' id="city" placeholder="Shikoyatni kiriting" required="" >--}}
                        <div class="form-floating">
                            <textarea class="form-control" name='problem'  style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Problem</label>
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
                        <button type="submit" class="btn btn-primary" style="margin: 14px;">Add problem</button>
                    </div>
                </form>




            </div>


            <div class="table-bordered border-primary" style="margin-top: 30px;">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Shikoyatlar</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($problems as $place)
                        <tr>
                            <td scope="col">{{$loop->iteration}}</td>
                            <td scope="col">{{$place->problem}}</td>
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
