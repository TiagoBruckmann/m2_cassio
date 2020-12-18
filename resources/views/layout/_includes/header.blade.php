<!DOCTYPE html>
<html lang="br">
<head>
    <title>controle de projetos</title>
    <meta charset="UTF-8">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Compiled and minified CSS materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper navbar-dark bg-dark">
                <a href="/" class="brand-logo">M2 Cássio</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('admin.projetos')}}">Projetos</a></li>
                    <li><a href="{{route('admin.clientes')}}">Clientes</a></li>
                </ul>    
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('admin.projetos')}}">Projetos</a></li>
            <li><a href="{{route('admin.clientes')}}">Clientes</a></li>
        </ul>
    </header>

<style>

    header ul li{
        padding: 0px 30px;
    }

    .brand-logo {
        margin-left: 50px;
    }

    header li a {
        font-size: 22px;
    }

    header li a:hover {
        background-color: #44b874;
        color: #000;
    }

</style>