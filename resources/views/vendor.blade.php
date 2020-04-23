@php
    $data_load_map  = "marker";
@endphp

@extends('template.template')

@section('content_page')
    <div>
        <h3 class="font-weight-bold">Registrarse como vendedor</h3>
        <p>
            Completa tus datos como vendedor con los productos y/o servicios para aparecer en productospy.
            <br/>
            Cualquier consulta a <strong>productospy.org@gmail.com</strong>
        </p>
    </div>

    <script>


        {{-- Guarda el formulario de un nuevo vendedor --}}
        $(function () {
            const lockModal = $("#lock-modal");
            const loadingCircle = $("#loading-circle");
            const form = $("form");

            $('#form').on('submit', function (e) {
                e.preventDefault();

                // Lock down the form.
                lockModal.css("display", "block");
                loadingCircle.css("display", "block");

                setTimeout(function () {
                    // Re-enable the form.
                    lockModal.css("display", "none");
                    loadingCircle.css("display", "none");
                }, 3000);

                //alert('test');

                $.ajax(
                    {
                        url: HOSTNAME_API + "vendor",
                        type: 'POST',
                        data: $('#form').serialize(),
                        success: function (data, text) {
                            window.location = '/?guardado=ok';
                        },
                        error: function (request, status, error) {
                            showAlert(false, '<strong>Aviso:</strong> ' + request.responseJSON.message)
                        }
                    });
            });
        });

        function send_marker() {
            marker_point_map(event, ((gps_active) ? DEFAULT_ZOOM_MARKER : DEFAULT_ZOOM_MAP))
        }

        function showAlert(isSuccess, message) {
            $('.alert')
                .removeClass('alert-success')
                .removeClass('alert-danger');
            if (isSuccess) {
                $('.alert').addClass('alert-success');
            } else {
                $('.alert').addClass('alert-warning');
            }

            $('#alert-message').empty().append(message);
            $('.alert').css('display', '');
        }
    </script>

    <div class="container">
        <form id="form" role="form" method='post'>
            <div class="form-group row">
                <label class="col-form-label col-4 text-md-right text-left">
                    <span class="label label-default">Correo electronico</span>
                    <span>(opcional)</span>
                </label>
                <div class="col-8">
                    <input class="form-control" type="text" placeholder="Ingrese aqu&iacute; el email del vendedor"
                           value="" name="user_email"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4 text-md-right text-left">
                    <span class="label label-default">Mi contacto</span>
                    <span>(opcional)</span>
                </label>
                <div class="col-8">
                    <input class="form-control" type="text"
                           placeholder="Ingrese aqu&iacute; el nombre y apellido del vendedor o nombre de tu emprendimiento"
                           name="user_full_name" value=""/>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4 text-md-right text-left">
                    <span class="label label-default">Telefono / Celular</span> <span
                        class="font-weight-bold text-primary">(*)</span>
                </label>
                <div class="col-12 col-md-4">
                    <input class="form-control" type="text"
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="6" maxlength="10"
                           placeholder="Ingrese aqu&iacute; el n&uacute;mero de contacto del vendedor" name="user_phone"
                           value="" required autofocus/>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <span class="label label-default">Productos y/o servicios</span>
                    <span class="text-primary font-weight-bold">(*)</span>
                </label>

                <div class="mt-2 mb-2">

                    <div class="row">
                        @foreach($products as $key => $product)

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <label>
                                    <input type="checkbox" name="products[]"
                                           value="{{ $product->product_type }}" {{ $checked ?? '' }}>
                                    {{ $product->product_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <span class="label label-default">Descripci&oacute;n de los productos o servicios ofrecidos</span>
                    <span>(opcional)</span>
                </label>
                </br>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Aviso!</h4>
                    <p>
                        En esta secci&oacute;n pod&eacute;s escribir detalladamente tus productos y/o servicios que
                        ofreces.
                        <br/>
                        <i>Ejemplo:</i>
                        Hacemos servicio de mantenimiento de autom&oacute;viles incluyendo chaper&iacute;a y pintura.
                    </p>
                </div>
                <div class="col-sm-16">
                    <textarea class="form-control" maxlength="4000" name="user_comment"
                              placeholder="Descripción de tus productos y/o servicios" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <span class="label label-default" style="font-size:22px;">Ubicaci&oacute;n del vendedor</span>
                    <span>(*)</span>
                </label>
                </br>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Aviso!</h4>
                    <p>
                        Seleccion&aacute; tu ubicaci&oacute;n para que las personas puedan localizarte. Solo debes de
                        hacer click en el bot&oacute;n de
                        abajo para que aparezca en el mapa un marcador y puedas moverlo para indicar tu ubicaci&oacute;n.
                    </p>
                </div>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Observaci&oacute;n!</h4>
                    <p>
                        Si no moves el marcador no va a poder registrarte como vendedor. Tu ubicaci&oacute;n es
                        obligatoria!
                    </p>
                </div>
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="send_marker()">Marcar ubicaci&oacute;n</button>
                </br>
                <div id="map">
                    <div id='map-container' style="width: 100%; height: 300px; border: 1px solid #AAA;"></div>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" name="user_lat" id="user_lat" value=""
                       placeholder="click en el mapa"/>
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" name="user_lng" id="user_lng" value=""
                       placeholder="click en el mapa"/>
            </div>
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Registrar vendedor"/>
            <div id="lock-modal"></div>
            <div id="loading-circle"></div>
        </form>
        <div class="alert alert-danger" style="display: none">
            <div id="alert-message"></div>
        </div>
    </div>
    </br>


@endsection
