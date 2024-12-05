<section id="contacto" class="contact-section">
    <div class="contact-container">
        <h2  class="contact-heading">Contáctanos</h2>
        <p>Comuníquese con nosotros y nos comunicaremos con usted a la velocidad de la luz.</p>
        <form class="contact-form">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Aquiles Aurora" required />
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="hola@gmail.com" pattern="[^ @]*@[^ @]*" required="" />
        </div>
        <div class="form-group">
            <label for="reason">Motivo</label>
            <input type="text" id="reason" name="reason" placeholder="Por ejemplo, información, reclamo, asesoría" required />
        </div>
        <div class="form-group">
            <label for="message">Descripción</label>
            <textarea id="message" name="message" placeholder="Ingresa tu mensaje aqui" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>
</section>