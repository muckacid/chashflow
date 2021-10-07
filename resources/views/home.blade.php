@extends('layouts.template')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row m-5">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Cashflow</h1>
                    <p class="lead">Este software es una herramienta que permite llavar un control de cashflow, esta herramienta un control de permitira
                        <br />llevar un control de tus activos y pasivos para un mayor control del dinero o cualquier activo con el cual trabajes.
                    </p>
                </div>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="card m-10" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">desarrollar el login</li>
                        <li class="list-group-item">login de usuarios por rol</li>
                        <li class="list-group-item">desarrollo del balance de usuarios</li>
                        <li class="list-group-item">control de usuarios por medio de administrador</li>
                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
