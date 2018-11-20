<table class="table table-responsive" id="prueba1s-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Cédula</th>
            <th colspan="3">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prueba1s as $prueba1)
        <tr>
            <td>{!! $prueba1->Nombre !!}</td>
            <td>{!! $prueba1->Cedula !!}</td>
            <td>
                {!! Form::open(['route' => ['prueba1s.destroy', $prueba1->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prueba1s.show', [$prueba1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prueba1s.edit', [$prueba1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>