@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('home.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('home.language') }}
                </div>
                <div class="card-footer">
                    <h6 class="float-right text-info">{{__('home.copy')}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
