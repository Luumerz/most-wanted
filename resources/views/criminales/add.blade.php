<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/criminales') }}" method="post" enctype="multipart/form-data" class="form-container">
    @csrf
    @include('criminales.form')
    <a href="{{ url('/criminales') }}" class="volver">Volver a criminales</a>
    </form>
</body>
</html>