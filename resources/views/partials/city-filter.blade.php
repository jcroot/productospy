<select class="selectpicker show-tick" data-style="btn btn-outline-dark" data-live-search="true" id="city" name="city">
    <option value="" selected="selected">Selecciona ciudad</option>
    <option data-divider="true"></option>
    @foreach($cities as $city)
        <option value='{{ $city->city_id }}'>{{ $city->city_name }}</option>
    @endforeach
</select>

<script type="text/javascript">
    $(document).ready(function(){
        $('#city').on('change', function(evt){
            $('#last-request').empty().append('<div class="list-group-item text-center"><i class="fa fa-spinner fa-spin fa-2x" aria-hidden="true"></i></div>');
            products_filter(false);
        });
    });
</script>
