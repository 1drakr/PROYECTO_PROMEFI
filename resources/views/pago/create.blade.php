@extends('tablar::page')

@section('title', 'Crear Pago')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Crear</div>
                <h2 class="page-title">{{ __('Pago') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @if(config('tablar','display_alert'))
            @include('tablar::common.alert')
        @endif
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pago.store') }}" id="ajaxForm" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('pago.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
