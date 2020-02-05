@extends('adminlte::page')

@section('content')
    <style>
        .div_info{
            font-family: Century Gothic;
            color: black;
        }
    </style>

    <div class="box box-solid box-primary">
        <div class="box-header">
            <h3 class="box-title">Importar usuarios</h3>
            <span class="label label-primary pull-right"><i class="fas fa-upload"></i></span>
        </div>
        <div class="box-body">
            <p>Acá podrá importar las credenciales de los estudiantes que hacen parte de Uniremington Manizales y cuenten con credenciales de Uniremington Medellín</p>
            <p>Extensiones admitidas: .XLS - .XLSX - .CSV</p>
            <form action="{{ route ('importar.usuarios.excel')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}    

                <!--Botón de importar usuarios-->
                <label for="file-upload" class="btn btn-primary">
                    <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                </label>
                <input name="file" id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>
                    <div class="div_info" id="info"></div>
                    <input type="hidden" name="nombre_archivo" id="nombre_archivo">                    
                    <br>
                <input class="btn btn-danger" type="submit" value="Importar usuarios">

                <!--Mensaje cuando los datos fueron importados de forma correcta-->
                @if(Session::has('mensaje'))
                    <p>{{Session::get('message')}}</p>
                @endif
            </form>
        </div>
    </div>
    
    <script>
        function cambiar(){
        var pdrs = document.getElementById('file-upload').files[0].name;
        document.getElementById('info').innerHTML = pdrs;
        $("#nombre_archivo").val(pdrs);
    }
    </script>

@stop