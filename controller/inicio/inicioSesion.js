
            function validar(usuario, contra){
                if (usuario == "" || contra == "") {
                    return true;
                }else{
                    return false;
                }

            }


            $(".siguiente").live("click", function(){

                    var usuario=$("#usuario").val();
                    var contra=$("#contra").val();


                    if(validar(usuario, contra))
                    {
                        $('#error').fadeIn(500).html('<div class="center-aligner red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(6000);
                    }
                else{
                    var dataString = 'usuario='+usuario+'&contra='+contra;
                    $.ajax({
                        type: "POST",
                        url: "model/inicio/inicioSesion.php",
                        data: dataString,
                        success: function(data) {
                            switch (data) {

                                case "1":
                                    document.location.href="http://localhost/procesoadmin/dashboard";
                                    break;

                                default :
                                    $('#error').fadeIn(100).html('<div class="center-aligner red lighten-1 white-text btn">Verifique sus datos</div>').fadeOut(6000);;
                                    $("#usuario").val("");
                                    $("#contra").val("");
                                    break;


                            }
                         }
                    });
                }
            });

     
