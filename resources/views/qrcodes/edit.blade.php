@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Q R C O D E
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($Qrcode, ['route' => ['Qrcodes.update', $Qrcode->id], 'method' => 'patch']) !!}

                        @include('qrcodes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection