@extends('adminlte::layouts.app')


@section('contentheader_title')
  All Properties
@endsection



@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($properties as $property)

                <?php var_dump($property->post_code); ?>

            @endforeach
        </div>
    </div>
@endsection
