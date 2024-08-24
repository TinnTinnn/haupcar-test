<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Car Management')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('styles')
</head>
<body>
<h1 class="text-center my-4">@yield('title')</h1>
<div class="container-md">
    <div x-data="{ flash: true }">
        @if(session()->has('success'))
            <div x-show="flash"
                 class="position-relative mb-4 rounded border border-success bg-success bg-opacity-25 px-3 py-2 fs-6 text-success"
                 role="alert">
                <strong class="fw-bold">Success!</strong>
                <div>
                    {{ session('success')  }}
                </div>
                <span class="position-absolute top-0 end-0 px-2 py-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" @click="flash = false"
               stroke="currentColor" class="h-4 w-4 cursor-pointer" height="16" width="16">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </span>
            </div>
        @endif

        @yield('content')
    </div>
</div>

</body>
</html>
