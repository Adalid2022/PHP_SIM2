<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables en PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>
        Variables en PHP
    </h1>
    <p class="titulo">
        Las Variables, son contenedores que almacenan información. <br>
    </p>
    <h3 class="titulo">Creando VARIABLES</h3>
    <p>
        En PHP, una variable inicia con el simbolo $, seguidos por el nombre de la variable.
    </p>
    <p>
        <code>
            &lt;?php <br>
                &nbsp;&nbsp;$txt = "Hola mundo";
             <br>
                &nbsp;&nbsp;$txt = 5;
             <br>
                &nbsp;&nbsp;$txt = 10.5;
            <br>
            ?&gt;
        </code>
        <br>
    </p>
    <h3 class="titulo">Reglas para crear VARIABLES</h3>
        <ul>
            <li>Las variables inician con el simbolo $</li>
            <li>Una variable debe iniciar con una letra o con el símbolo _</li>
            <li>Una variable no puede iniciar con un número</li>
            <li>El nombre de una variable solo puede contener caracteres alfa-numéricos y _</li>
            <li>Los nombres de las variables son CASE-SENSITIVE, es decir, que ($edad y $EDAD), son dos variables diferentes.</li>
        </ul>
</body>
</html>