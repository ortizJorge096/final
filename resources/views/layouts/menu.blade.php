<li class="{{ Request::is('prueba1s*') ? 'active' : '' }}">
    <a href="{!! route('prueba1s.index') !!}"><i class="fa fa-edit"></i><span>Prueba1S</span></a>
</li>
<li class="{{ Request::is('final1s*') ? 'active' : '' }}">
    <a href="{!! route('final1s.index') !!}"><i class="fa fa-edit"></i><span>Final1S</span></a>
</li>

