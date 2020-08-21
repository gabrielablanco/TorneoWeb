<?php
include 'cn.php';
?>
<html>
    <head>
        <link rel="icon" type="image/ico" href="https://cdn.icon-icons.com/icons2/18/PNG/128/olympics_sport_football_ball_2277.png" />
        <link rel= "stylesheet" type= "text/css" href= "style.css"> 
    </head>
    
    <body>   
        <form class="form-principal"> 
            <h2 class="titulo">Resultados del partido</h2> 
            <h2 style="text-align: center">Grupo A</h2> 
            
            <div class="contenedor1"> 
                <select name="selectA" class="input-65">
                    <option value="0">Seleccione</option>
                    <?php
                    $query = $conexión -> query("Select * from equipo");
                    while($valores = mysqli_fetch_array($query)){ 
                        echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
                    }
                    ?>
                </select>
                <input type="text" name="resultadoA" placeholder="Resultado equipo A" class="input-35">
            </div>
            <div class="contenedor1">
                <select name="selectB" class="input-65">
                    <option value="value1">1</option>
                    <?php
                    $query = $conexión -> query("Select * from equipo");
                    while($valores = mysqli_fetch_array($query)){ 
                        echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
                    }
                    ?>
                </select> 
                <input type="text" name="resultadoA2" placeholder="Resultado equipo B" class="input-35">
            
            </div>
            
            <h2 style="text-align: center">Grupo B</h2> 
            <div class="contenedor1"> 
                <select name="selectA" class="input-65">
                    <option value="value1">2</option>
                </select>
                <?php
                    $query = $conexión -> query("Select * from equipo");
                    while($valores = mysqli_fetch_array($query)){ 
                        echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
                    }
                ?>
                <input type="text" name="resultadoA21" placeholder="Resultado equipo A" class="input-35">
                
            </div>
            <div class="contenedor1">
                <select name="selectB" class="input-65">
                    <option value="value1">3</option>
                    <?php
                    $query = $conexión -> query("Select * from equipo");
                    while($valores = mysqli_fetch_array($query)){ 
                        echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
                    }
                ?>
                </select> 
                <input type="text" name="resultadoA22" placeholder="Resultado equipo B" class="input-35">
            </div>
            <div class="contenedor-btn">
                <input type="button" value="Registrar" class="btn-enviar"/>
                <input type="button" value="Mostrar" class="btn-enviar" onclick="window.location.href='mostrar_resul.html'"/>
            </div>            
        </form>
        
    </body>

</html>