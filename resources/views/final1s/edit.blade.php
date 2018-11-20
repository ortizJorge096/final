@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Final1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($final1, ['route' => ['final1s.update', $final1->id], 'method' => 'patch']) !!}

                        @include('final1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection