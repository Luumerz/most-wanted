<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Detalles del Criminal</title>
</head>

<body>
    <header class="header container">
        <h1 class="header__title">Most <span class="header__title--colored">Wanted</span></h1>
        <nav class="header__navbar">
            <ul class="header__list">
                <li class="header__item"><a href="{{ route('criminales.index') }}" class="header__link">Volver</a></li>
            </ul>
        </nav>
    </header>

    <main class="main container">
        <div class="main__card" style="max-width: 600px; margin: auto;">
            <div class="main__img--container">
                <img src="{{ asset('storage/' . $criminal->Foto) }}" alt="fotoCriminal" class="main__img">
            </div>
            <div class="main__content">
                <h2 class="main__name">{{ $criminal->Apellidos }}, {{ $criminal->Nombre }}</h2>
                <div class="main__data">
                    <p><strong>Descripción:</strong></p>
                    <p>{{ $criminal->Descripcion }}</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer container">
        <p>Politzia local de Utrera | NO OFICIAL</p>
    </footer>
</body>

</html>
