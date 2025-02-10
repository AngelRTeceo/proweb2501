    <style>
        li {
            border: 2px solid blue;
        }
        body {
            background-color: gray;
        }
    </style>
    <script>
        function verMensaje(){
            alert("Bienvenido a JavaScript.");
        }
    </script>
    
    <div>
        <h1>Programacion Web</h1>
    </div>

    <div>
     
        <ul>
            <li>Opcion 1</li>
            <li>Opcion 2</li>
            <li>Opcion 3</li>
        </ul>
    </div>

    <div>
        <button onclick="verMensaje()">
            Ver mensaje
        </button>
        
        <h3>
            <?php

                echo "Es un mensaje de PHP"

            ?>
        </h3>
    </div>
