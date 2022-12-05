<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style type="text/css">.w-6 {width: 30px;}.h-6 {height: 24px;}</style>
</head>
<body>
    <div class="row">
        <div class="col px-4 border-light border-3 border-end" style="max-width: 20rem;">
            <div>
                {{-- LOGO --}}
                <nav class="navbar">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="60" height="48" class="d-inline-block">
                    </a>
                  </div>
                </nav>
            </div>
            <div>
                {{-- PROFILE CARD --}}
                <div class="">
                    <div class="card rounded-xl bg-light">
                      <div class="card-body">
                        <div class="row">
                            <div class="col" style="max-width: 60px;">
                                <x-icons.profile />
                            </div>
                            <div class="col">
                                <p class="my-0">Hi, <strong>UnLucas</strong></p>
                                <p class="text-muted my-0" style="font-size: 0.75rem;">
                                    {{ substr(\Carbon\Carbon::now(), 0, 10) }}
                                </p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div>
                <ul class="nav flex-column">
                  <li class="nav-item mt-2">
                    <p class="nav-link text-black" href="#">General</p>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Disabled</a>
                  </li>
                </ul>
            </div>
        </div>
        <div class="col px-0">
            <div class="pt-2">
                <nav class="navbar">
                  <div class="container-fluid d-flex justify-content-end">
                    <div class="d-flex justify-content-between gap-4">
                        <div>
                            <button type="button" class="shadow btn btn-primary btn-sm">Send | Receive</button>
                        </div>
                        <div>
                            <a class="navbar-brand" href="#">
                              <img src="https://static.vecteezy.com/system/resources/previews/000/532/212/original/vector-united-states-of-america-flag-usa-flag-america-flag-background.jpg" alt="flag" width="30" height="24" class="d-inline-block">
                            </a>
                        </div>
                        <div>
                            <x-icons.bell />
                        </div>
                        <div>
                            <x-icons.world />
                        </div>
                    </div>
                  </div>
                </nav>
            </div>
        </div>
    </div>

    <main class="">
        {{-- 
        @yield('main')
         --}}
    </main>
</body>
</html>