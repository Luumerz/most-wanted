<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header class="header container">

        <h1 class="header__title">Most <span class="header__title--colored">Wanted</span></h1>

        <nav class="header__navbar">
            <ul class="header__list">
                <li class="header__item">Iniciar sesión</li>
            </ul>
        </nav>

    </header>

    <main class="main container">
        <div class="main__grid">
            @foreach ($criminales as $criminal)
                <div class="main__card">
                <div class="main__img--container">
                    <img src="../storage/app/public/{{$criminal->Foto}}" alt="fotoCriminal" class="main__img">
                </div>
                <div class="main__content">
                    <h4 class="main__name">{{ $criminal->Apellidos }}, {{ $criminal->Nombre }}</h4>
                    <div class="main_data">
                        <p>DNI: {{ $criminal->DNI }}</p>
                        <p>Altura: {{ $criminal->Altura }}m</p>
                        <p>Peso: {{ $criminal->Peso }}kg</p>
                        <p>Edad: {{ $criminal->Edad }} años</p>
                        <p>Crimen: {{ $criminal->Crimen }}</p>
                        <p>Estado: {{ $criminal->Estado }}</p>
                        <p>Recompensa: {{ $criminal->Recompensa }}$</p>
                        <a href="" class="main__data--link">Ver detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="footer container">

    </footer>
</body>

</html>