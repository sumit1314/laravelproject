<html>
    <head>
        <title>resto app</title>
        <!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

    </head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">resto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list">list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add">add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">register</a>
            </li>
           @if(sesssion->get('user'))
           <a class="nav-link" href="3">welcome anil</a>
           @else
           <a class="nav-link" href="#">login</a>
         
                <a class="nav-link" href="#">register</a>
           @endif
        </ul>
    </div>
</nav>


    </header>
    <div class="container">
@yield('content')

    </div>

    <!-- <footer>
        copy right by resto app 
    </footer> -->
</body>
</html>


