<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Document</title>
</head>

<body>
    <header class="header container">

        <h1 class="header__title">Most <span class="header__title--colored">Wanted</span></h1>

        <nav class="header__navbar">
            <ul class="header__list">
                <li class="header__item"><a href="{{ route('criminales.create') }}" class="header__link">Añadir criminal</a></li>
            </ul>
        </nav>

    </header>

    <main class="main container">
        <div class="main__grid">
            @foreach ($criminales as $criminal)
                <div class="main__card">
                <div class="main__img--container">
                    <img src="{{ asset('storage').'/'.$criminal->Foto }}" alt="fotoCriminal" class="main__img">
                </div>
                <div class="main__content">
                    <h3 class="main__name">{{ $criminal->Apellidos }}, {{ $criminal->Nombre }}</h2>
                    <div class="main__data">
                        <p>DNI: {{ $criminal->DNI }}</p>
                        <p>Altura: {{ $criminal->Altura }}m</p>
                        <p>Peso: {{ $criminal->Peso }}kg</p>
                        <p>Edad: {{ $criminal->Edad }} años</p>
                        <p>Crimen: {{ $criminal->Crimen }}</p>
                        <p>Estado: {{ $criminal->Estado }}</p>
                        <p>Recompensa: 
                            @if ($criminal->Recompensa == 0)
                                Sin recompensa
                            @else
                                {{ $criminal->Recompensa }}$
                            @endif
                        </p>
                        <form action="{{ url('/criminales/'.$criminal->id) }}">
                            @csrf
                            <button class="main__data--link">Ver detalles</button>
                        </form>
                        <form action="{{ url('/criminales/'.$criminal->id.'/edit') }}">
                            <button class="main__data--link action">Editar</button>
                        </form>
                        <form action="{{ url('/criminales/'.$criminal->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('¿Esta seguro que desea eliminal el criminal?')" class="main__data--link action">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="footer container">
        <p>Politzia local de Utrera | NO OFICIAL</p>
    </footer>
</body>

</html>