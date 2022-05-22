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




{{--            {{$patient->id}}--}}
{{--            {{$patient->getAutoRE[1]->id}}--}}
{{--            {{dd($patient)}}--}}
{{--1--}}


            <div class="container" style="background-color: #0a53be">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-black text-capitalize">

                            {{  $patient->lastname }}  {{$patient->name}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="text-decoration text-capitalize"><button class="btn btn-outline-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>  {{$patient->birth_year}} </button></h4>
                            </div>
                            <div class="col-4">

                                <h4 class="text-decoration text-capitalize"> <button class="btn btn-outline-primary">{{$years_old}}</button> </h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h4 class="text-decoration text-capitalize"><button class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                        </svg> {{$patient->getPlace->name}}</button></h4>
                            </div>
                            <div class="col-4">

                                <h4 class="text-decoration text-capitalize"> <button class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> {{$patient->phpne_number}}</button> </h4>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
{{--            end of personal imformation--}}

            <hr>

            <div class="container" style='border-color: #0a53be'>
                <h3 class="text-center">Shikoyatlar</h3>
                <div class="table-bordered border-primary" style="margin-top: 30px;">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">date</th>
                            <th scope="col">problem</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($patient->problemPatient as $auto)
                            <tr>
                                <td>{{$auto->created_at->toDateString()}}</td>
                                <td>{{$auto->problem}}</td>
                            </tr>
                        @endforeach




                        <!--  -->
                        </tbody>
                    </table>
                    <form action="{{route('patient_problem')}}" method="post">
                        @csrf
                        <input type="hidden" name="patient_id" value="{{$patient->id}}">
                        <select class="form-select"  name="problem_id" required="">
                            <option value="">Choosee...</option>
                            @foreach($problems as $problem)
                                <option value="{{$problem->id}}">{{$problem->problem}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-secondary" type="submit">Create Problem</button>

                    </form>

                </div>


            </div>

{{--{{dd($patient)}}--}}

{{--{{dd($problems[0]->problem)}}}--}}

{{--            <div class="container" style="margin-top: 24px;">--}}








                <hr>


{{--                start of ker session--}}

                <h3 class="text-center">Keratometr session</h3>

                <div class="container mt-5 mb-3">
                    <div class="row">

                        @foreach($patient->kerPatient as $auto)



                            <div class="col-md-4" style="border: 1px solid royalblue">
                                <div class="card p-3 mb-2">
                                    <div class="card-header">{{$auto->created_at}}</div>
                                    <h5 class="text-center">Right</h5>
                                    <div class="row">

                                        <div class="col-3">
                                            R1<br>
                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            {{$auto->Right_R1_MM}}
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            {{$auto->Right_R1_D}}
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            {{$auto->Right_R1_AX}}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">

                                        <div class="col-3">
                                            R2<br>
                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            {{$auto->Right_R2_MM}}
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            {{$auto->Right_R2_D}}
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            {{$auto->Right_R2_AX}}
                                        </div>
                                    </div>

                                    <hr>

                                    <h5 class="text-center">Left</h5>
                                    <div class="row">

                                        <div class="col-3">
                                            R1<br>
                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            {{$auto->Left_R1_MM}}
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            {{$auto->Left_R1_D}}
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            {{$auto->Left_R1_AX}}
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">

                                        <div class="col-3">
                                            R2<br>
                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            {{$auto->Left_R2_MM}}
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            {{$auto->Left_R2_D}}
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            {{$auto->Left_R2_AX}}
                                        </div>
                                    </div>


                                </div>
                            </div>

                        @endforeach



                    </div>
                </div>






                <form action="{{route('kerStore')}}" method="post">
                    @csrf
                    <div class="container mt-5 mb-3">
                        <div class="row">



                            <div class="col-md-4" style="background-color: #e2e8f0">
                                <div class="card p-3 mb-2">
                                    <div class="card-header">New Ker form</div>
                                    <div class="row">
                                        <h5 class="text-center">Right</h5>
                                        <div class="col-3">
                                            <br>R1

                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            <input name="Right_R1_MM" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            <input name="Right_R1_D" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            <input name="Right_R1_AX" style="width: 60px" type="number" required=""   >
                                        </div>


                                        <div class="col-3">
                                            <br>R2

                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            <input name="Right_R2_MM" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            <input name="Right_R2_D" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            <input name="Right_R2_AX" style="width: 60px" type="number" required=""   >
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <h5 class="text-center">Left</h5>
                                        <div class="col-3">
                                            <br>R1

                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            <input name="Left_R1_MM" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            <input name="Left_R1_D" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            <input name="Left_R1_AX" style="width: 60px" type="number" required=""   >
                                        </div>


                                        <div class="col-3">
                                            <br>R2

                                        </div>
                                        <div class="col-3">
                                            mm<br>
                                            <input name="Left_R2_MM" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            D<br>
                                            <input name="Left_R2_D" style="width: 60px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col-3">
                                            AX<br>
                                            <input name="Left_R2_AX" style="width: 60px" type="number" required=""   >
                                        </div>
                                    </div>
                                    <input  type="hidden" name="patient_id" value='{{$patient->id}}'>

                                    <button style="margin-top: 10px " type="submit" class="btn btn-secondary" > save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                </form>






                {{--                 end of ker session--}}
                <hr>
                <h3 class="text-center">Autoref session</h3>

                <div class="container mt-5 mb-3">
                    <div class="row">

                     @foreach($patient->getAutoRE as $auto)



                        <div class="col-md-4" style="border: 1px solid royalblue">
                            <div class="card p-3 mb-2">
                                <div class="card-header">{{$auto->created_at}}</div>
                                <h5 class="text-center">Right</h5>
                                <div class="row">

                                    <div class="col">
                                        SPH<br>
                                        {{$auto->right_sph}}
                                    </div>
                                    <div class="col">
                                        CYL<br>
                                        {{$auto->right_cyl}}
                                    </div>
                                    <div class="col">
                                        AX<br>
                                        {{$auto->right_ax}}
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg><br>
                                        {{$auto->clear}}
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
                                        </svg><br>
                                        {{$auto->clear_with_glasses}}
                                    </div>
                                </div>

                                <hr>

                                <h5 class="text-center">Left</h5>
                                <div class="row">

                                    <div class="col">
                                        SPH<br>
                                        {{$auto->left_sph}}
                                    </div>
                                    <div class="col">
                                        CYL<br>
                                        {{$auto->left_cyl}}
                                    </div>
                                    <div class="col">
                                        AX<br>
                                        {{$auto->left_ax}}
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg><br>
                                        {{$auto->clear_left}}
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
                                        </svg><br>
                                        {{$auto->clear_left_with_glasses}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach



                    </div>
                </div>


{{--                finish auto ref card--}}

                <form action="{{route('addAutoRef')}}" method="post">
                    @csrf
                    <div class="container mt-5 mb-3">
                        <div class="row">



                            <div class="col-md-6" style="background-color: #e2e8f0">
                                <div class="card p-3 mb-2">
                                    <div class="card-header">New Auto Ref form</div>
                                    <div class="row">
                                        <h5 class="text-center">Right</h5>
                                        <div class="col">
                                            SPH<br>
                                            <input name="r_sph" style="width: 70px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col">
                                            CYL<br>
                                            <input name="r_cyl" style="width: 70px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col">
                                            AX<br>
                                            <input name="r_ax" style="width: 70px" type="number" required=""   step="any">
                                        </div>

                                        <div class="col">
                                            CLR_<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg><br>
                                            <input name="clear" style="width: 70px" type="number" required=""   step="any">
                                        </div>
                                        <div class="col">
                                            CLR_<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                                <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
                                            </svg><br>
                                            <input name="clear_with_glasses" style="width: 70px" type="number" required=""   step="any">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <h5 class="text-center">Left</h5>
                                        <div class="col">
                                            SPH<br>
                                            <input name="l_sph" style="width: 70px" type="number" required   step="any">
                                        </div>
                                        <div class="col">
                                            CYL<br>
                                            <input name="l_cyl" style="width: 70px" type="number" required=""    step="any">
                                        </div>
                                        <div class="col">
                                            AX<br>
                                            <input name="l_ax" style="width: 70px" type="number" required=""    step="any">
                                        </div>
                                        <div class="col">
                                            CLR_<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg><br>
                                            <input name="clear_left" style="width: 70px" type="number" required=""    step="any">
                                        </div>
                                        <div class="col">
                                            CLR_<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                                <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
                                            </svg><br>
                                            <input name="clear_left_with_glasses" style="width: 63px" type="number" required=""    step="any">
                                        </div>
                                        <input  type="hidden" name="patient_id" value='{{$patient->id}}'>
                                    </div>
                                    <button style="margin-top: 10px " type="submit" class="btn btn-secondary" > save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                </form>



{{--                  end of auto ref form      --}}



{{--                 start of tonometr session                  --}}

                <hr>

                <h3 class="text-center">Tonometr session</h3>
                <div class="container mt-5 mb-3">
                    <div class="row">

                        @foreach($patient->tonoPatient as $auto)



                            <div class="col-md-3" style="border: 1px solid blue">
                                <div class="card p-3 mb-2">
                                    <div class="card-header">{{$auto->created_at}}</div>

                                    <div class="row">
                                        <hr>
                                        <div class="col-6 text-center">
                                            Right<br>
                                            {{$auto->right}}
                                        </div>
                                        <div class="col-6">
                                            Left<br>
                                            {{$auto->left}}
                                        </div>

                                    </div>

                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>




                <form action="{{ route('tonometr') }}" method="post">
                    @csrf
                <div class="col-md-4" style="background-color: #e2e8f0">
                    <div class="card p-3 mb-2">
                        <div class="card-header">New Tonometr form</div>
                        <div class="row">
                            <div class="col-6 text-center">
                                Right<br>
                                <input name="right" style="width: 90px" type="number" required=""    step="any">
                            </div>
                            <div class="col-6 text-center">
                                Left<br>
                                <input name="left" style="width: 90px" type="number" required=""    step="any">
                            </div>
                            <input  type="hidden" name="patient_id" value='{{$patient->id}}'>
                            <button style="margin-top: 10px " type="submit" class="btn btn-secondary" > save</button>
                        </div>
                    </div>
                </div>
                </form>

{{--                end of tonometr session--}}

            {{--                beginning of Utt session--}}
            <hr class="text-color: red">
            <h3 class="text-center">UTT session</h3>

            <div class="row">

                @foreach($patient->getImages as $auto)
                    <div class="col-4">
                        <div class="card text-dark bg-light mb-3" style="max-width: 100%; ">

                            <div class="card-header">{{$auto->created_at}}</div>
                            <div class="span3 food1">
                                <img src="{{asset('Images/'. $auto->name)}}" class="mw-100" style="height: 400px; width: 350px;" alt="...">
                                <h5 class="card-title text-center">{{$auto->path}}</h5>
                            </div>


                        </div>
                    </div>
                @endforeach

            </div>




            <div class="row">
                <div class="col-4" style="border-color: #1a202c">
                    <form action="{{route('imageStore')}}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <input class="form-control" type='file' name="image" placeholder="Rasm yuklang">
                        <input  type="hidden" name="patient_id" value='{{$patient->id}}'>
                        <button style="margin-top: 10px " type="submit" class="btn btn-secondary" > save</button>

                    </form>
                </div>
            </div>

            <hr>


            <div class="table-bordered border-primary" style="margin-top: 30px;">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">UTT Tashhis</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patient->Utt as $auto)
                        <tr>
                            <td>{{ $auto->created_at }}</td>
                            <td>{{ $auto->problem }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <form action="{{ route('UttStore') }}" method="post">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{$patient->id}}">
                    <div class="form-floating">
                        <textarea class="form-control" name='problem'  style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Tashhis kiriting!!!</label>
                    </div>
                    <button class="btn btn-secondary" type="submit">Write problem</button>

                </form>

            </div>






            {{--                finish Utt form--}}








            {{-- solution session --}}


            <div class="container">
{{--{{dd($patient->solutionPatient)}}--}}
                    <h3 class="text-center"> Tashhis session </h3>
                    <div class="table-bordered border-primary" style="margin-top: 30px;">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">date</th>
                                <th scope="col">Tashxis</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($patient->solutionPatient as $auto)
                                <tr>
                                    <td>{{$auto->created_at->toDateString()}}</td>
                                    <td>
                                        {{$auto->solution}}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>


                <hr>





                <form action="{{route('patient_solution')}}" method="post">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{$patient->id}}">
                    <select class="form-select"  name="solution_id" required="">
                        <option value="">Choosee. Solution</option>
                        @foreach($solutions as $solution)
                            <option value="{{$solution->id}}">{{$solution->solution}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-secondary" type="submit">Create solution</button>

                </form>

            <div>




        </main>



<!-- footer -->

<div class="container-fluid" style="background-color: #e2e8f0;">
    <footer class="py-3 my-4">

        <p class="text-center text-white bg-black">VISION MED</p>
    </footer>
</div>


<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>


</body>

</html>
