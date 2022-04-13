@extends('layouts.layout.common.base')

{{--ページタイトル--}}
@section('title', 'ホーム')

{{--固有css--}}
@push('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

{{--固有js--}}
@push('js')
@endpush

{{--ホームページ--}}
@section('page')
<main class="home-wrap container">
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
    <div style="background-color:red; width:100px; height: 200px; margin: 10px;"></div>
</main>
@endsection