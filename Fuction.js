function seleccionar(){
    $("#TB-sol-chk1").on('change', function (ev){
        ev.preventDefault();


        $("#TB-sol-chk1").prop("checked", true)
        $("#TB-sol-chk2").prop("checked", false)

        $("#Error").html("Solo puede seleccionar un Checkbox.");
        setTimeout(function(){
            $('#Error').html("");

        }, 2000);
    });
}