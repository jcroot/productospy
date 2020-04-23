@extends('template.template')


@section('content_page')

    @include('partials.city-filter')

    <div class="row mb-2">
        <div class="col-8">
            <div id="map" class="mt-2">
                <div id='map-container' style="height:430px;border: 1px solid #AAA;"></div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <strong>Ultimos registros</strong>
                </div>
                <div class="list-group list-group-flush" id="last-request">
                    <div class="list-group-item text-center">
                        <i class="fa fa-spinner fa-spin fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6 text-left">
                            <a href="#" id="previous" style="display: none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" id="next" style="display: none">Siguiente <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--</br>
    <div class="container">
        <div class="title-section">Lista de todos los vendedores</div>
        <div class="table-responsive">
            <table id="table_vendors_without_geo" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Comentario</th>
                        <th>Productos</th>
                        <th>Contacto</th>
                        <th>Vendedor</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </br>--}}

    <script>
        let checkbox = $('#changeShip'),
          chShipBlock = $('#changeShipInputs');

        chShipBlock.hide();

        checkbox.on('click', function()
        {
            if($(this).is(':checked'))
            {
                chShipBlock.show();
                chShipBlock.find('input').attr('required', true);
            }
            else
            {
                chShipBlock.hide();
                chShipBlock.find('input').attr('required', false);
            }
        });

        $("#selectAll").click(function()
        {
            // Check selected only products.
            $('input[name="products[]"]').prop('checked', $(this).is(":checked"));
        });

    </script>


@endsection
