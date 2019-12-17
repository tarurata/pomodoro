@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('inc.timer')
        </div>
        <div class="col-md-6">
            @include('inc.todo')
        </div>
    </div>
@endsection







