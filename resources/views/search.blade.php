@extends('layouts.home')

@section('main')
    <search-products searching="{{$search}}" :colors="{{json_encode($colors)}}"
                    :categories="{{json_encode($categories)}}"></search-products>
@endsection