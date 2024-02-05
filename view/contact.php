<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contacto</h2>
                    <ul>
                        <li><a href="<?php echo URL?>">Inicio</a></li>
                        <li>Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Section -->
<div class="contact-section contact-page-1-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contáctame</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- Start Contact Box Area -->
                <div class="contact-box">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-contact-box text-center">
                                <img src="<?php echo URL?>assets/img/contact/contact-bg.avif"
                                    alt="Contáctate con Alexander Minaya">
                                <p>¿Tienes preguntas o estás listo para comenzar? No dudes en ponerte en contacto
                                    conmigo. Estoy aquí para escuchar tus necesidades, responder a tus consultas y
                                    colaborar contigo en cada paso del camino.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Box Area -->
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-form px-3">
                    <form class="row g-3 needs-validation" id="formulario" name="formulario" method="POST" novalidate>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" placeholder="Escribe tus nombres y apellidos"
                                        class="form-control" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                                    <div class="invalid-feedback">
                                        Redacte sus Nombres y Apellidos ...
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" id="email" name="email"
                                        placeholder="Escribe tu correo electrónico" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Redacte su correo ...
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" cols="30" rows="11"
                                        placeholder="Escribe tu mensaje" required></textarea>
                                    <div class="invalid-feedback">
                                        Redacte su Mensaje ...
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn submit-btn">Enviar
                                    mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section -->
<script>
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>