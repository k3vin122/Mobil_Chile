<div class="box box-info padding-1">

    <!doctype html>
    <html lang="es">
    <!--
        Formulario de contacto con PHP
        https://parzibyte.me/blog
    -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Contacto">
        <meta name="author" content="Parzibyte">
        <title>Formulario de contacto</title>
        <!-- Cargar el CSS de Boostrap-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <!-- Termina la definición del menú -->
        <main role="main" class="container">
            <div class="row">
                <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
                <div class="col-12">
                    <h1>Mesa de Ayuda</h1>
                    <a target="_blank">Contacto 652 8725</a>
                    <br>
                    <a target="_blank">Correo: mesadeayuda@estaesuna prueba.cl</a>


                </div>
                <br>

                <div class="col-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        {{ Form::text('titulo', $ayuda->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        <label for="correo">Fono</label>
                        {{ Form::text('Fono', $ayuda->Fono, ['class' => 'form-control' . ($errors->has('Fono') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        {{ Form::textarea ('asunto', $ayuda->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
                    </div>
                    <br>

                    <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">Enviar sugerencia</button>
                    <a type="button" href="{{ route('ayudas.index') }}" class="btn btn-info">Lista de requerimientos</a>

                    </div>
                    <br>

                <a href="/Manual_de_sistema.pdf" download="Manual de sistema.pdf">Manual de Sistema</a>
        </main>

    </body>
</div>



    <script>
        if (!Modernizr.adownload) {
            var $link = $('a');
            $link.each(function() {
                var $download = $(this).attr('download');
                if (typeof $download !== typeof undefined && $download !== false) {
                    var $el = $('<div>').addClass('download-instruction').text('Right-click and select "Download Linked File"');
                    $el.insertAfter($(this));
                }
            });
        }
    </script>
