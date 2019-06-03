<section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contactanos</h2>
          <h3 class="section-subheading text-muted">alguna pregunta o sugerencia por favor haznolo saber.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm"  name="sentMessage" novalidate="novalidate" action="?controlador=usuario&accion=frmContactar" method="post" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="nombre" type="text" placeholder="tu nombre *" required="required" data-validation-required-message="por favor digite su nombre.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" name="correo" placeholder="tu correo *" required="required" data-validation-required-message="Por favor escriba bien su correo.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" name="telefono" placeholder="tu numero *" required="required" data-validation-required-message="Por favor digite su numero de telefono.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="mensaje" placeholder="tu mensaje *" required="required" data-validation-required-message="Por favor digite un mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" name="enviar" class="btn btn-primary btn-xl text-uppercase" type="submit">enviar mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>