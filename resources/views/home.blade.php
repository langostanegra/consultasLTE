@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="info-box">
    <!-- Apply any bg-* class to to the icon to color it -->
    <span class="info-box-icon bg-red"><i class="far fa-envelope"></i></span>
    <div class="info-box-content">
        <span class="info-box-text">Cantidad credenciales entregadas</span>
        <span class="info-box-number">145</span>
    </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
@stop