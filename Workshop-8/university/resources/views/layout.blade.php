<!DOCTYPE html>
<html>
<head>
    <title>Careers CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header">
        <nav class="navbar navbar-light bg-light p-3">
            <h1 class="navbar-brand"> Workshop 8 </h1>
            <a class="nav-link" href="{{ route('student.index') }}">CRUD de Estudiantes</a>
            <a class="nav-link" href="{{ route('career.index') }}">CRUD de Carreras</a>
        </nav>
    </header>
<div class="container">
    @yield('content')
</div>

</body>
</html>