@extends('base')

@section('content')


			<div class="contact container content">
				<header class="section-header">
					<h1>Contacto</h1>
					<p>Informanos sobre lo que más te ha gustado del portal web, también recomendaciones y errores dentro de la página, tus opiniones y comentarios siempre serán escuchados.</p>
				</header>
						<div class="row">
							<div class="col-xs-12 col-sm-9 col-md-9 contact-info cta-message wow fadeInLeft">

							     <form role="form" method="post">
			                        <div class="row">
			                            <div class="form-group col-lg-3">
			                                <label class="control-label">Nombre</label>
			                                <input name="nombre" id="c_name" type="text" class="form-control">
			                            </div>
			                            <div class="form-group col-lg-6">
			                                <label class="control-label" for="contact-mail">Email</label>
			                                <input name="email"  id="c_mail" type="email" class="form-control">
			                            </div>
			                            <div class="clearfix"></div>
			                            <div class="form-group col-lg-9">
			                                <label class="control-label" for="contact-message">Mensaje</label>
			                                <textarea name="mensaje"  id="c_msg" class="form-control " rows="6"></textarea>
			                            </div>
			                            <div class="form-group col-lg-9">
			                                <input type="hidden" name="save" value="contact">
			                               <input name="send" onclick="cargaSendMail()" type="button" value="Enviar" class="btn btn-store btn-block"></input>
			                            </div>
			                        </div>
			                    </form>

							</div>		
							<div class="col-xs-12 col-sm-3 col-md-3 contact-info cta-message wow fadeInRight">
								<h3>Dirección</h3>
								<address>
									<br><strong>Medellín - Colombia</strong><br>
									Calle 33C #88a 115<br>
									(+57) 305-249-1754<br>
									justhinkgreen.info@gmail.com
								</address>
							</div>	
						</div>	
					</div>

			
		</div>		
	<!--******************************  SCRIPT CONTACTO *************************************-->
      <script type="text/javascript">
          function cargaSendMail(){
            $("#c_enviar").attr("disabled", true);
            $(".c_error").remove();
            var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
            var s_email = $('#c_mail').val();
            var s_name = $('#c_name').val();    
            var s_msg = $('#c_msg').val();
         
            if (filter.test(s_email)){
            sendMail = "true";
            } else{
            $('#c_mail').after("<span class='c_error' id='c_error_mail'>Ingrese e-mail valido.</span>");
             //aplicamos color de borde si el se encontro algun error en el envio
            $('#contactform').css("border-color","#e74c3c");   
            sendMail = "false";
            }
            if (s_name.length == 0 ){
            $('#c_name').after( "<span class='c_error' id='c_error_name'>Ingrese su nombre.</span>" );
            var sendMail = "false";
            }
            if (s_msg.length == 0 ){
            $('#c_msg').after( "<span class='c_error' id='c_error_msg'>Ingrese mensaje.</span>" );
            var sendMail = "false";
            }
            if(sendMail == "true"){
             var datos = {
                     "nombre" : $('#c_name').val(),
                     "email" : $('#c_mail').val(),
                     "mensaje" : $('#c_msg').val()
             };
         
             $.ajax({
                     data:  datos,
                     // hacemos referencia al archivo contacto.php
                     url:   'contacto.php',
                     type:  'post',
                     beforeSend: function () {
                     //aplicamos color de borde si el envio es exitoso
                            $('#contactform').css("border-color","#25A25A");
                            $("#c_enviar").val("Enviando...");
                     },
                     success:  function (response) {
                            $('form')[0].reset(); 
                            $("#c_enviar").val("Enviar");
                            $("#c_information p").html(response);
                            $("#c_information").fadeIn('slow');
                            $("#c_enviar").removeAttr("disabled");
                     }
             });
            } else{
                $("#c_enviar").removeAttr("disabled");
            }
        }

    </script>
	</body>
</html>


@stop