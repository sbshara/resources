@extends('adminlte.app')


@section('otherMETA')
@endsection

@section('otherCSS')
@endsection

@section('otherJS')
@endsection

@section('contentTitle')
@endsection

@section('contentTitleDesc')
@endsection

@section('version')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in to {{ config('app.name') }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
