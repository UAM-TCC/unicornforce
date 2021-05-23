<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unicorn Force</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<style>
    .ck-content {
        color: black;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/imagotipo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('indexdocs') }}">Documentação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('supportpage') }}">Apoie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Sobre-nos</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('listphones') }}">Administração</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div class="main-section row m-0 mt-4">
        <div class="col-4 col-md-2 side-bar mt-5 p-0 m-0">
            <div class="w-100 p-1" id="side-section-1">
                <div style="font-size: 19px; padding-top: 19px;" id="items-side-1" class="mr-5 side-links">Smartphones</div>
                <ul class="mt-1 d-none">
                    <li class="mt-2">
                        <a class="text-white" href="{{ route('listphones') }}">Listar</a>
                    </li>

                    <li class="mt-2">
                        <a class="text-white" href="{{ route('createsmartphone') }}">Adicionar</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-8 col-md-8 content text-center">
            @yield('content')
        </div>
    </div>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
</body>

</html>

<script>
    $(function() {
        const sideBarSection = $('#side-section');
        const itemsSide = $('#items-side');

    });

    $("#items-side-1").on('click', function() {
        let sectionToOpen = $(this).next();

        if (sectionToOpen.hasClass('d-none')) {
            sectionToOpen.removeClass('d-none');
        } else {
            sectionToOpen.addClass('d-none')
        }
    })

    $("#items-side-2").on('click', function() {
        let sectionToOpen = $(this).next();

        if (sectionToOpen.hasClass('d-none')) {
            sectionToOpen.removeClass('d-none');
        } else {
            sectionToOpen.addClass('d-none')
        }
    })

    $("#items-side-3").on('click', function() {
        let sectionToOpen = $(this).next();

        if (sectionToOpen.hasClass('d-none')) {
            sectionToOpen.removeClass('d-none');
        } else {
            sectionToOpen.addClass('d-none')
        }
    })

    function showSection(obj) {
        /*let sectionToOpen = $('#' + obj.id).find('ul');
        console.log('aq')

        if (sectionToOpen.hasClass('d-none')) {
        	sectionToOpen.removeClass('d-none');
        } else {
        	sectionToOpen.addClass('d-none')
        }*/
    }
</script>