<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/template.css">
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
                        <li class="nav-item @if($current == 1) active @endif">
                          <a class="nav-link" href="/categories">Categorias
                            @if($current == 1)
                            <span class="sr-only">(current)</span>
                            @endif
                          </a>
                        </li>
                        <li class="nav-item @if($current == 2) active @endif">
                          <a class="nav-link" href="/products">Productos
                            @if($current == 2)
                            <span class="sr-only">(current)</span>
                            @endif
                          </a>
                        </li>
                        <li class="nav-item @if($current == 3) active @endif">
                            <a class="nav-link" href="/locations">Ubicaciones
                              @if($current == 3)
                              <span class="sr-only">(current)</span>
                              @endif
                            </a>
                          </li>
                      </ul>
                    </div>
                  </nav>
            </div>
<div id="app">