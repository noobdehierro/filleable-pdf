<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página no encontrada</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background: url('{{ asset('img/fondo.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
        }

        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 8px;
        }

        h1 {
            font-size: 4rem;
            margin: 0 0 1rem;
        }

        p {
            font-size: 1.2rem;
            margin: 0 0 2rem;
        }

        a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            background-color: #3490dc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2779bd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Error 404</h1>
        <p>Lo sentimos, la página que buscas no existe.</p>
    </div>
</body>

</html>
