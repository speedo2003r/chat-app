@extends('layouts.app')
@section('content')

    <div class="container">

        <paginate :user="{{$data}}"></paginate>

    </div>

@endsection