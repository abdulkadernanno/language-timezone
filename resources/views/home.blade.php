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
                <div class="alert-dark">
                    <h2>git commit chack</h2>
                    <hr>
                    <h6>git commit 1</h6>
                    <h6>git commit 2</h6>
                    <h6>git commit 3</h6>
                    <h6>git commit 4</h6>
                    <h6>git commit 5</h6>
                    <h6>git commit 6</h6>
                    <h6>git commit 7</h6>
                    <h6>git commit 8</h6>
                    <h6>git commit 9</h6>
                </div>
                <div class="row">
                    <h6>anather user 1</h6>
                    <h6>hello i'm abdou kader test my git hub 1</h6>
                </div>
                <div class="row">
                    <h4>auther pop sani</h4>
                    <h6>hello i'm pop sani test my git branch 1</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
