<!doctype html>
<html lang="nl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://use.fontawesome.com/d3680e1f88.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>pvb</title>
</head>
<body>

    <div class="container">

        <nav class="navbar border-bottom navbar-light bg-white">
            <a class="navbar-brand" href="{{ route('home') }}">PvB's van @yield('title', 'team ICO')</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Examinator of lokaal">
                <button class="btn btn-primary mr-sm-2" type="submit">Zoeken</button>
                <button class="btn btn-success" href="{{ route('import.show') }}">Import</button>
            </form>
        </nav>

        <div class="main">
            @yield('main')
        </div>

        <footer>
            <p>This is an open-source project, created by Team ICO at Radius College.</p>
            <p>Please report any bugs or issues you find in our <a href="https://github.com/Radiuscollege/pvb">GitHub repository</a>.</p>
        </footer>

    </div>


</body>
</html>
