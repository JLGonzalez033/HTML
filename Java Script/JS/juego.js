//me aseguro de que sea cargado toda la pagina

$(document).ready(function(){

    $("#login").animate({
        'top':"10%"
    },300);
    $("#txtNombre").on('keyup',function(){
        $("txtNombre").css('border','1px solid white');
        $(".alerta").fadeout(400);
    })
    $("#btnIniciar").click(function(){
        if ($("#txtNombre").val() == ""){
            $("#txtNombre").css('border','1px solid red');
            $("#.alerta").fadeIn(400);
        }else{
            $("#login").animate({
            'left':"-500px"
        },300,function(){
            $("#login").fadeout(1000);
        }); 
        }
      
    });
});