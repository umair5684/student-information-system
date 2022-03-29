<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="px-3 py-2 bg-dark">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#grid"></use>
                                    </svg>
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#people-circle"></use>
                                    </svg>
                                    Customers
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        <div class="section">
            {{ $slot }}
        </div>
        <div class="  mt-5 px-3 py-2 footer bg-dark">
            <p class="text-center text-white">Copyright {{ date('Y') }}</p>
        </div>
    </div>


</body>

</html>
