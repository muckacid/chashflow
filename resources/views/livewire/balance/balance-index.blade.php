<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($balances as $balance)
                        <tr>
                            <td>{{ $balance->id }}</td>
                            <td>{{ $balance->value }}</td>
                            <td>{{ $balance->type }}</td>
                            <td>
                                <a class="btn btn-primary mr-auto" href="">Editar</a>
                                <a class="btn btn-primary mr-auto" href="">Eliminar</a>
                            </td>
                        </tr>

                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
