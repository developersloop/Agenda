<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>
<body>
    <div id="app">
        <App></App>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const csrf =  document.getElementsByName('csrf-token')[0].content;
        localStorage.setItem('csrf',csrf);
    </script>
</body>
</html>
