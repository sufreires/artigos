<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artigos</title>

        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/custom.css') }}" rel="stylesheet">
        <script src="{{ url('/js/jquery-3.6.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('/js/global.js') }}" type="text/javascript"></script>
    </head>
    <body>
            <nav class="navbar navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Artigos</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>                    
                </div>
            </nav>

            <div class="container text-center">
                <div class="row d-flex justify-content-center mt-5 mb-5">
                    <h1>Listagem de Artigos</h1>
                </div>

                

                <div class="row d-flex justify-content-center">

                    <div class="spinner-border text-info mt-5" role="status">
                        <span class="sr-only">Carregando Artigos...</span>
                    </div>

                    <ul class="list-group" id="artigos">                    
                    </ul>

                </div>
            </div>

    </body>
</html>
