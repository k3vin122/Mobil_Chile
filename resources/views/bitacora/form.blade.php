<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Iacc</title>

    <!-- Icons font CSS-->
    <link href="/estilo/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/estilo/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/estilo/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/estilo/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/estilo/css/main.css" rel="stylesheet" media="all">
</head>



<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row m-b-55">
            <div class="name">Folio</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('folio', $bitacora->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            <label class="label--desc">N° Folio</label>
                        </div>
                        <br>

                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('nombre', $bitacora->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            <label class="label--desc">Nombre Empleado</label>
                        </div>
                    </div>
                    <br>

                </div>
                <br>
                <div class="col-2">
                    <div class="input-group-desc">
                        {{ Form::text('dependecia', $bitacora->dependecia, ['class' => 'form-control' . ($errors->has('dependecia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        <label class="label--desc">Dependencia</label>
                    </div>
                    <br>

                </div>

            </div>
        </div>
    </div>



    <div style="background-color:#BBB3B2" class="card-header">
        <span class="card-title">Datos del sistema de Información a desarrollar</span>
    </div>
    <br>
    <div class="box-body">
        <div class="form-row m-b-55">
            <div class="name">Sistema</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('nombre_sistema', $bitacora->nombre_sistema, ['class' => 'form-control' . ($errors->has('nombre_sistema') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc">Nombre Sistema</label>
                        </div>
                        <br>

                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('descripcion', $bitacora->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            <label class="label--desc">Descripción</label>
                        </div>
                    </div>
                    <br>

                </div>
                <br>
                <div class="col-2">
                    <div class="input-group-desc">
                        {{ Form::text('cobertura', $bitacora->cobertura, ['class' => 'form-control' . ($errors->has('cobertura') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        <label class="label--desc">Cobertura</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-body">
        <div class="form-row m-b-55">
            <div class="name">Arquitectura</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                        {{ Form::text('ambiente_servidor', $bitacora->ambiente_servidor, ['class' => 'form-control' . ($errors->has('ambiente_servidor') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc">Servidor</label>
                        </div>
                        <br>

                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">
                        {{ Form::text('ambiente_web', $bitacora->ambiente_web, ['class' => 'form-control' . ($errors->has('ambiente_web') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc">Web</label>
                        </div>
                    </div>
                    <br>

                </div>
               
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-row m-b-55">
            <div class="name">Compatibilidad</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('compatibilidad_servidor', $bitacora->compatibilidad_servidor, ['class' => 'form-control' . ($errors->has('compatibilidad_servidor') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc"> Compatibilidad servidor</label>
                        </div>
                        <br>

                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('compatibilidad_web', $bitacora->compatibilidad_web, ['class' => 'form-control' . ($errors->has('compatibilidad_web') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc">Compatibilidad web</label>
                        </div>
                    </div>
                    <br>

                </div>
                <br>
                <div class="col-2">
                    <div class="input-group-desc">
                        {{ Form::text('desarrollado', $bitacora->desarrollado, ['class' => 'form-control' . ($errors->has('desarrollado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        <label class="label--desc">Desarrollado</label>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div style="background-color:#BBB3B2" class="card-header">
        <span class="card-title">Datos deresponsable Tecnologico designado para el desarrollodel sistema de infromación</span>
    </div>
    <br>


    <div class="box-body">

        <div class="form-row m-b-55">
            <div class="name">Responsable</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('id_responsable', $bitacora->id_responsable, ['class' => 'form-control' . ($errors->has('id_responsable') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                            <label class="label--desc">Rut </label>
                        </div>
                        <br>

                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">
                            {{ Form::text('nombre_em_responsable', $bitacora->nombre_em_responsable, ['class' => 'form-control' . ($errors->has('nombre_em_responsable') ? ' is-invalid' : ''), 'placeholder' => '  ']) }}
                            <label class="label--desc">Nombre </label>
                        </div>
                    </div>
                    <br>

                </div>
                <br>
                <div class="col-2">
                    <div class="input-group-desc">
                        {{ Form::text('categoria', $bitacora->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        <label class="label--desc">Categoria</label>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-2">
                    <div class="input-group-desc">
                        {{ Form::text('perfil', $bitacora->perfil, ['class' => 'form-control' . ($errors->has('perfil') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        <label class="label--desc">Perfil</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</div>

</div>