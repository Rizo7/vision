<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link href="{{ asset('css/bootstrap5.css') }}" rel="stylesheet" >
</head>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    form {
        display: block;
        margin-top: 0em;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: auto;
        width: 100%;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    main {
        display: block;
    }
</style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

<body>
<!-- <header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header> -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">


        <div class="col-md-3 text-end">
            <a type="button" href="{{route('login')}}" class="btn btn-primary me-2">Login</a>
            <a type="button" href="{{route('register')}}" class="btn btn-outline-primary">Register</a>
        </div>
    </header>
</div>
<main class="form-signin">
    <form action="{{route('checkUser')}}" method="post">
        @csrf
        <img class="mb-4" src="{{'Images/images.jpg'}}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Login Page</h1>


        @if(session()->has('fail'))
            <div class="alert alert-danger">
                {{ session()->get('fail') }}
            </div>

        @endif

        <div class="form-floating">
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="floatingInput" placeholder="Firstname">
            <label for="floatingInput">Firstname</label>
            <Span class="text-danger">
                @error('name')
                {{  $errors  }}
                @enderror
            </Span>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            <Span class="text-danger">
                @error('password')
                {{  $errors  }}
                @enderror
            </Span>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">VISION MED</p>
    </form>
</main>

</body>

</html>
