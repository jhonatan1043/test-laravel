<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/DataTables/css/dataTables.bootstrap4.min.css">
    <title>Test</title>
</head>
<body>
    <div class="container">
        <div class="card mt-2">

            <div class="card-header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/">Test Laravel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ">
                        <li class="nav-item @if($current == 0) active @endif">
                          <a class="nav-link" href="/">Inicio 
                            @if($current == 0)
                            <span class="sr-only">(current)</span>
                            @endif
                          </a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" 
                             href="#mProducts" id="navbarDropdown" 
                             role="button" 
                             data-toggle="dropdown" 
                             aria-haspopup="true" 
                             aria-expanded="false">
                            Modulo Producto
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="mProducts">
                            <a class="dropdown-item" href="/products">Productos</a>
                            <a class="dropdown-item" href="/categories">Categorias</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" 
                              href="#mLocation" id="navbarDropdown" 
                              role="button" 
                              data-toggle="dropdown" 
                              aria-haspopup="true" 
                              aria-expanded="false">
                            Modulo ventas
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="mLocation">
                            <a class="dropdown-item" href="/locations">Ubicaciones</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
<div id="app">