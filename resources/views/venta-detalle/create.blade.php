@extends('layouts.app')

@section('template_title')
    Create Venta Detalle
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">agregar productos</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('venta-detalles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta-detalle.form')

                        </form>
                       
                    </div>
                </div>
               
            </div>
             @include('venta-detalle.list')
        </div>
    </section>
@endsection
