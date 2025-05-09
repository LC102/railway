<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio-Info-Talleres CUT Tonalá</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }
        .navigation {
            display: flex;
            justify-content: center;
            background-color: #2980b9;
            padding: 15px;
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
            font-weight: bold;
        }
        .nav-button:hover {
            background-color: #3498db;
            color: white;
        }
        .content {
            padding: 40px 20px;
            text-align: center;
            line-height: 1.6;
            flex: 1;
        }
        .intro-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 20px;
            background-color: #f9f9f9;
        }
        .intro-text {
            flex: 1;
            padding-right: 40px;
            text-align: left;
        }
        .intro-image {
            flex: 1;
            text-align: center;
        }
        .intro-image img {
            max-width: 100%;
            border-radius: 10px;
        }
        .workshops-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .workshops-list li {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            list-style-type: none;
            flex: 1 1 200px;
            text-align: center;
        }
        footer {
            background-color: #1d618f;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <header>
            <h1>Bienvenidos a los Talleres del CUT de Tonalá</h1>
        </header>
        
        <div class="navigation">
            <a href="/config" class="nav-button">Inicio</a>
            <a href="/vista2" class="nav-button">Galería</a>
            <a href="/pag" class="nav-button">Quienes Somos</a>
            <a href="/contacto" class="nav-button">Contacto</a>
        </div>
        
        <div class="intro-section">
            <div class="intro-text">
                <h2>Centro Universitario de Tonalá</h2>
                <p>Somos un centro educativo comprometido con la formación integral de estudiantes, ofreciendo una amplia variedad de talleres que complementan la educación académica.</p>
                <p>Nuestros talleres están diseñados para desarrollar habilidades prácticas, creatividad y potencial personal de nuestros estudiantes.</p>
            </div>
            <div class="intro-image">
                <img src="/image/cut.jpg" alt="Fachada del CUT de Tonalá" />
            </div>
        </div>

        <div class="content">
            <h2>Nuestros Talleres</h2>
            <p>Explora nuestra diversa oferta de talleres que incluyen:</p>
            <ul class="workshops-list">
                <li>Artes</li>
                <li>Deportes</li>
                <li>Desarrollo Personal</li>
                <li>Tecnología</li>
                <li>Cultura</li>
            </ul>
        </div>
        
        

        <footer>
            <p>&copy; 2023 Centro Universitario de Tonalá. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>