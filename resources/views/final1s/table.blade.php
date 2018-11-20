<table class="table table-responsive" id="final1s-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Solicitud</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($final1s as $final1)
        <tr>
            <td>{!! $final1->Nombre !!}</td>
            <td>{!! $final1->Documento !!}</td>
            <td>{!! $final1->Correo !!}</td>
            <td>{!! $final1->Direccion !!}</td>
            <td>{!! $final1->Telefono !!}</td>
            <td>{!! $final1->Solicitud !!}</td>
            <td>
                {!! Form::open(['route' => ['final1s.destroy', $final1->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('final1s.show', [$final1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('final1s.edit', [$final1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>