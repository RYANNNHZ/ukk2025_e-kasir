<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $header }} | page</title>
    <base href="{{ url('/') }}/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css">
</head>

<body>
    <x-navbar :header="$header"></x-navbar>
    @yield('konten')
    <script src="{{ url('js') . '/popper.min.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
</body>

</html>
