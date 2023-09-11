<div class="content-portafolio ">
    <style>
        /* Estilos CSS para el formulario */
        body {
            font-family: Arial, sans-serif;
        }
        .containersss {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .success-message {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }
        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

    <div class="containersss">
        <h2>Contacto</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" style="color: white;">Enviar</button>
        </form>
        <p class="success-message" id="success-message" style="display:none;">¡Gracias por tu mensaje! Te responderemos pronto.</p>
        <p class="error-message" id="error-message" style="display:none;">Ha habido un error. Por favor, inténtalo de nuevo más tarde.</p>
    </div>

    <script>
        // JavaScript para manejar el envío del formulario
        const contactForm = document.getElementById("contact-form");
        const successMessage = document.getElementById("success-message");
        const errorMessage = document.getElementById("error-message");

        contactForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Validación de campos (puedes agregar más validaciones según tus necesidades)
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;

            if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
                errorMessage.style.display = "block";
                successMessage.style.display = "none";
                return;
            }

            // Envía los datos a través de AJAX o a un servidor (simulado aquí)
            // En una implementación real, debes configurar el servidor para manejar los datos del formulario.

            // Simulación de éxito después de 2 segundos (reemplaza esto con la lógica real)
            setTimeout(() => {
                successMessage.style.display = "block";
                errorMessage.style.display = "none";

                // Limpia el formulario después del envío exitoso (opcional)
                contactForm.reset();
            }, 2000);
        });
    </script>
</div>
