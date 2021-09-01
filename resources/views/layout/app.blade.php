<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/apptwo.css') }}" >
    <title>Todo List</title>
</head>
<body>
    @include('includeMe.navbar')
    <div class="container">
        <h1 class="bg-info text-center">@yield('bold_text')</h1>
        @yield('content')
    </div>

</body>
<footer id="footer123" class="text-center">
    <p> Copyright 2021 &copy;  </p>
</footer>
</html>