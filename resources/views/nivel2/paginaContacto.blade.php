<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - CUT Tonalá</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .navigation {
            display: flex;
            justify-content: center;
            background-color: #2980b9;
            padding: 10px;
        }
        .nav-button {
            background-color: #fff;
            color: #3498db;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .nav-button:hover {
            background-color: #3498db;
            color: white;
        }
        .content {
            display: flex;
            padding: 40px;
            gap: 30px;
        }
        .contact-info {
            flex: 1;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .contact-form {
            flex: 2;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 120px;
        }
        .submit-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #2980b9;
        }
        .social-media {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .social-media a {
            color: #3498db;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .social-media a:hover {
            background-color: #3498db;
            color: white;
        }
        .contact-card {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .map-container {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            height: 200px;
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Contacto</h1>
        </header>

        <div class="navigation">
            <a href="/config" class="nav-button">Inicio</a>
            <a href="/vista2" class="nav-button">Galería</a>
            <a href="/pag" class="nav-button">Quienes Somos</a>
            <a href="/contacto" class="nav-button">Contacto</a>
        </div>

        <div class="content">
            <div class="contact-info">
                <h2>Información de Contacto</h2>
                
                <div class="contact-card">
                    <h3>Dirección</h3>
                    <p>Av. Nuevo Periférico No. 555</p>
                    <p>Ejido San José Tateposco</p>
                    <p>Tonalá, Jalisco, México</p>
                </div>

                <div class="contact-card">
                    <h3>Teléfonos</h3>
                    <p>Tel: (33) 3540-3020</p>
                    <p>Ext: 64015</p>
                </div>

                <div class="contact-card">
                    <h3>Correo Electrónico</h3>
                    <p>contacto@cutonala.udg.mx</p>
                </div>

                <div class="social-media">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>

                <div class="map-container">
                    <!-- Aquí iría el mapa -->
                    <img src="/api/placeholder/400/200" alt="Mapa de ubicación" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

            <div class="contact-form">
                <h2>Envíanos un Mensaje</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>