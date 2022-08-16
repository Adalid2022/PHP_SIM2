<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contexto de Variables</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>
        Contexto de Variables
    </h1>
    <p class="titulo">
        En PHP, las variables pueden ser declaradas en cualquier parte del código. <br>
        El contexto de las variables es la parte del código donde la variable puede ser referenciada o usada. <br>
        PHP tiene tres diferentes contextos de variables. <br>
        <ul>
            <li>Local</li>
            <li>Global</li>
            <li>Estática</li>
        </ul>
    </p>
    <h3 class="titulo">Contexto GLOBAL y LOCAL</h3>
    <p>
        Una variable declarada fuera de una función tiene un contexto GLOBAL, y solo puede ser utilizada fuera de la función.
    </p>
    <p>
        <code>
            &lt;?php <br>
                &nbsp;&nbsp;$x = 5;
             <br>
            &nbsp;&nbsp;function prueba(){ <br>
                &nbsp;&nbsp;&nbsp;echo "En este contexto la variable x, generará un error"; <br>
            &nbsp;&nbsp;} <br>            
            ?&gt;
        </code>
        <br>
    </p>
    <h3 class="titulo">Contexto LOCAL</h3>
    <p>
        Cuando una variable se declara dentro de una función tiene un CONTEXTO LOCAL, y solo puede ser utilizada dentro de esa función.
    </p>
    <p>
        <code>
            &lt;?php <br>
            &nbsp;&nbsp;function prueba(){ <br>
                &nbsp;&nbsp;&nbsp;$x = 5; <br>
                &nbsp;&nbsp;&nbsp;echo "En este contexto la variable x, generará el valor 5"; <br>
            &nbsp;&nbsp;} <br>            
            ?&gt;
        </code>
        <br>
    </p>

    <h3 class="titulo">Palabra clave GLOBAL</h3>
    <p>
        La palabra clave <strong>global</strong> es utilizada para acceder de forma global a una variable dentro de una función. <br>
        Para hacer esto, debe usar <strong>global</strong> antes de la variable (dentro de la función) <br>
    </p>
    <p>
        <code>
            &lt;?php <br>
            &nbsp;&nbsp;$x=5; <br>
            &nbsp;&nbsp;$y=10; <br>
            &nbsp;&nbsp;function prueba(){ <br>
                &nbsp;&nbsp;&nbsp;global $x,$y; <br>
                &nbsp;&nbsp;&nbsp;$y=$x+$y; <br>
            } <br>
            prueba();<br>
            echo $y; //salida:15 <br>
            ?&gt;
        </code>
        <br>
    </p>

    <h3 class="titulo">Palabra clave $GLOBALS</h3>
    <p>
        PHP también almacena todas las palabras globales en un arreglo llamado $GLOBALS[index]. El index representa el nombre de la variable. Este arreglo es acesible desde el interior de las funciones y puede ser usado para aactualizar las variables globales directamente.
        <br>El ejemplo previo, puede ser reescrito de la siguiente manera:
        <br>
        <code>
            &lt;?php <br>
            &nbsp;&nbsp;$x=5; <br>
            &nbsp;&nbsp;$y=10; <br>
            &nbsp;&nbsp;function prueba(){ <br>
                &nbsp;&nbsp;&nbsp;$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y']; <br>
            } <br>
            prueba();<br>
            echo $y; //salida:15 <br>
            ?&gt;
        </code>
        <br>
    </p>

    <h3 class="titulo">Palabra clave static</h3>
    <p>
        Normalmente, cuando una función es completada/ejecutada, todas las variables son borradas. A veces, necesitaremos que una variable NO sea borrada, para poder utilizada posteriormente.
        <br>Para hacerlo, se puede utilizar la palabra <strong>static</strong>:
        <br>
        <code>
            &lt;?php <br>
            &nbsp;&nbsp;function prueba(){ <br>
                &nbsp;&nbsp;&nbsp;static $x=0; <br>
                &nbsp;&nbsp;&nbsp;echo $x; <br>
                &nbsp;&nbsp;&nbsp;$x++; <br>
            } <br>
            prueba();<br>
            prueba();<br>
            prueba();<br>
            ?&gt;
        </code>
        <br>
        En este caso, cada que la función sea llamada, mantendra el valor de la variable.
    </p>
</body>
</html>