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
            <p>Acá podrá importar las credenciales de los estudiantes que hacen parte de Uniremington Manizales y cuenten con credenciales de Uniremington Medellín.</p>
            <p>Extensiones admitidas: XLSX - XLS - CSV</p>
            <br>            
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ asset('docs/plantilla.xlsx')}}" class="btn btn-block btn-success" download="plantila.xlsx"><i class="fas fa-file-excel"></i>  Descargar plantilla</a>
                </div>

                <div class="col-md-2">
                    <form action="{{ route ('importar.usuarios.excel')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}    

                    <!--Botón de importar usuarios-->
                    <label for="file-upload" class="btn btn-primary">
                        <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                    </label>
                    <input name="file" id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>
                        <div class="div_info" id="info"></div>
                    </div>
                <div class="col-md-2">
                    <input class="btn btn-block btn-info" type="submit" value="Importar">
                    </form>
                </div>
                <div class="col-md-2">
                <!-- Si se presentan errrores, se mostrará un mensaje en pantalla -->
                @if(session('errors'))
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif

                <!--Mensaje cuando los datos fueron importados de forma correcta-->
                @if(session('succes'))
                    {{session('succes')}}
                @endif
                </div>
            </div>            
        </div>
    </div>

    <script>
        function cambiar(){
        var pdrs = document.getElementById('file-upload').files[0].name;
        document.getElementById('info').innerHTML = pdrs;        
    }
    </script>
@stop