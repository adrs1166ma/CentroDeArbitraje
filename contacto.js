document.addEventListener("DOMContentLoaded", () => {
    const contactHTML = `
    <section class="contact-us" id="contact">
        <div class="container pb-5">
          <div class="row">
            <div class="col-lg-9 align-self-center">
              <div class="row">
                <div class="col-lg-12">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2>Consultanos</h2>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Nombre...*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo electrónico..." required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                          <input name="subject" type="text" id="subject" placeholder="Motivo...*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="Descripción..." required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="button">Enviar Mensaje</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="right-info">
                <ul>
                  <li>
                    <h6>Número Telefónico</h6>
                    <span>+51 953287061</span>
                  </li>
                  <li>
                    <h6>Correo Electrónico</h6>
                    <span>direccionejecutiva
                    @camaranacional
                    .org.pe</span>
                  </li>
                  <li>
                    <h6>Ubicados</h6>
                    <span>San Isidro, Lima. Perú.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    `;

    // Insertar el contenido en el div correspondiente
    document.getElementById('contact-section').innerHTML = contactHTML;
});
