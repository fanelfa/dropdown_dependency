<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Laravel Dependent Dropdown  Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    </head>
    <body>
        <div class="container">
            <h2>Laravel Dependent Dropdown  Tutorial With Example</h2>
            <div class="form-group">
                <label for="provinsi">Pilih Provinsi:</label>
                <select name="provinsi" class="form-control" style="width:250px">
                    <option value="">--- Pilih Provinsi ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kota">Pilih Kota/Kabupaten:</label>
                <select name="kota" class="form-control"style="width:250px">
                <option>--Kota/Kabupaten--</option>
                </select>
            </div>
        </div>

        
        <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="provinsi"]').on('change',function(){
                var ID_Provinsi = jQuery(this).val();
                if(ID_Provinsi)
                {
                    jQuery.ajax({
                        url : 'dropdownlist/getstates/' +ID_Provinsi,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="kota"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="kota"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="kota"]').empty();
                }
            });
        });
        </script>
    </body>
</html>