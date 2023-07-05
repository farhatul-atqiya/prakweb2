@extends('layouts.app')
@section('content')
<h3 style="text-align: center">
Hello {{ Auth::user()->name }}
</h3>
<h2>Selamat Datang di dashboard frontend</h2>
@endsection