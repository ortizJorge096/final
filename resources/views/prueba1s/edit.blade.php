@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prueba1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prueba1, ['route' => ['prueba1s.update', $prueba1->id], 'method' => 'patch']) !!}

                        @include('prueba1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection