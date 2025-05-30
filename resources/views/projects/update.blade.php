<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
    <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    </div>
  <div class="row">
    <div class="col-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        </ul>
    </div>
    <div class="col-9">
      <p class="fs-1">Listado de Solicitudes</p>
        <form action="{{ route('project.update', $solicitudes->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                <input type="text" name="id" id="id" class="form-control" value="{{$solicitudes->id}}"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Tema</span>
                <input type="text" name="tema" id="tema" value="{{$solicitudes->tema}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group">
                <span class="input group-text">Descripcion</span>
                <textarea name="descripcion" id="descripcion" class="form-control" aria-label="With textarea">{{$solicitudes->descripcion}}</textarea>
            </div>
            <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Area</span>
                    <select class="form-select" id="area" name="area" value="{{$solicitudes->area}}" aria-label="Default select example">
                        <option selected>Selecciona un area</option>
                        <option value="1">TI</option>
                        <option value="2">Contabilidad</option>
                        <option value="3">Administración</option>
                        <option value="4">Operaciones</option>
                    </select>
                </div>  
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Estado</span>
                <select name="estado" id="estado" class="form-select" aria-label="Default select example">
                    <option value="Solicitado" {{ $solicitudes->estado == 'Solicitado' ? 'selected' : '' }}>Solicitado</option>
                    <option value="Aprobado" {{ $solicitudes->estado == 'Aprobado' ? 'selected' : '' }}>Aprobado</option>
                    <option value="Rechazado" {{ $solicitudes->estado == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Observación</span>
                <input type="text" name="observacion" id="observacion" value="{{$solicitudes->observacion}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="mb-3">
            <label for="usuarioExt" class="form-label">¿Usuario Externo?</label>
            <select class="form-select" id="usuarioExt" name="usuarioExt" aria-label="Default select example">
                <option value="1" {{ $solicitudes->usuarioExt == '1' ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ $solicitudes->usuarioExt == '0' ? 'selected' : '' }}>No</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
</form>
    </div>
  </div>
  <div class="row">
    <div class="col d-flex justify-content-center">
      <ul class="nav nav-underline">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Precios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">©Paula Benalcázar 2025. Todos los derechos reservados</a>
        </li>
        </ul>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
