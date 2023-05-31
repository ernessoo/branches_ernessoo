<?php
    echo "<link rel='icon' href='T.jpg' type='imagen/icon'>";
    
    $artista=(isset($_POST["artista"])&& $_POST["artista"] !="")? $_POST['artista']:"Falta Variable";
    $boletos=(isset($_POST["boletos"])&& $_POST["boletos"] !="")? $_POST['boletos']:"Falta Variable";
    $lugar=(isset($_POST["lugar"])&& $_POST["lugar"] !="")? $_POST['lugar']:"Falta Variable";
    $nombre=(isset($_POST["nombre"])&& $_POST["nombre"] !="")? $_POST['nombre']:"Falta Variable";
    $apellido=(isset($_POST["apellido"])&& $_POST["apellido"] !="")? $_POST['apellido']:"Falta Variable";
    $extras=(isset($_POST["checkbox2"])&& $_POST["checkbox2"] !="")? $_POST['checkbox2']:"Falta Variable";
    $zona=(isset($_POST["checkbox"])&& $_POST["checkbox"] !="")? $_POST['checkbox']:"Falta Variable";
    $fecha=(isset($_POST["fechayhora"])&& $_POST["fechayhora"] !="")? $_POST['fechayhora']:"Falta Variable";
    for($i=1;$i<=$boletos;$i++)
        if($artista=="Ariana Grande")
        {
            echo"<h1 align='center'>IMPORTANTE: Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='ari.png' width='300' height='300'></center>";
                        echo"<center><h2>yuh</h2></center>";
                
                    echo </td>
                <td>
                    <center><h2>$lugar</h2></center>
                    <center><h3>$zona</h3></center>";
                    switch ($zona)
                    {
                        case 'VIP':
                            echo "<img src='zona.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'General A':
                            echo "<img src='zona.png' alt='General A' width ='200' height= '150'>";
                            break;
                        case 'General B';
                            echo "<img src='zona.png' alt='General B' width='200' height='150'>";
                            break;
                        case 'Gradas V';
                            echo "<img src='zona.png' alt='Gradas V' width='200' height='150'>";
                            break;
                        case 'Gradas N';
                            echo "<img src='zona.png' alt='Gradas N' width='200' height='150'>";
                            break;
                    }
                    switch ($lugar)
                    {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.png' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio de los deportes.png' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro Sol':
                        echo "<img src='foro sol.png' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena Ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                    }       
                 echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
           echo "</tbody>";
           echo "</table>";
        }
        if($artista=="Lana Del Rey")
        {
            echo"<h1 align='center'>IMPORTANTE: Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='lana.png' width='300' height='300'></center>";
                        echo"<center><h2>this is the experience of being an american whore</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$lugar</h2></center>
                    <center><h3>$zona</h3></center>";
                    switch ($zona)
                    {
                        case 'VIP':
                            echo "<img src='zona.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'General A':
                            echo "<img src='zona.png' alt='General A' width ='200' height= '150'>";
                            break;
                        case 'General B';
                            echo "<img src='zona.png' alt='General B' width='200' height='150'>";
                            break;
                        case 'Gradas V';
                            echo "<img src='zona.png' alt='Gradas V' width='200' height='150'>";
                            break;
                        case 'Gradas N';
                            echo "<img src='zona.png' alt='Gradas N' width='200' height='150'>";
                            break;
                    }
                    switch ($lugar)
                {
                    case 'Estadio Azteca':
                        echo "<img src='estadio azteca.png' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio de los deportes.png' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro Sol':
                        echo "<img src='foro sol.png' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena Ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
           echo "</tbody>";
           echo "</table>";
        }
        if($artista=="Taylor Swift")
        {
            echo"<h1 align='center'>IMPORTANTE: Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='tay.png' width='300' height='300'></center>";
                        echo"<center><h2> karma is my boyfriend, karma is a god </h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$lugar</h2></center>
                    <center><h3>$zona</h3></center>";
                    switch ($zona)
                    {
                        case 'VIP':
                            echo "<img src='zona.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'General A':
                            echo "<img src='zona.png' alt='General A' width ='200' height= '150'>";
                            break;
                        case 'General B';
                            echo "<img src='zona.png' alt='General B' width='200' height='150'>";
                            break;
                        case 'Gradas V';
                            echo "<img src='zona.png' alt='Gradas V' width='200' height='150'>";
                            break;
                        case 'Gradas N';
                            echo "<img src='zona.png' alt='Gradas N' width='200' height='150'>";
                            break;
                    }
                    switch ($lugar)
                {
                    case 'Estadio Azteca':
                        echo "<img src='estadio azteca.png' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio de los deportes.png' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro Sol':
                        echo "<img src='foro sol.png' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena Ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre $apellido</h5></span>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
           echo "</tbody>";
           echo "</table>";
        }
        if($artista=="BLACKPINK")
        {
            echo"<h1 align='center'>IMPORTANTE: Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='bp.png' width='300' height='300'></center>";
                        echo"<center><h2>BLACKPINK IN YOUR AREA</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$lugar</h2></center>
                    <center><h3>$zona</h3></center>";
                    switch ($zona)
                    {
                        case 'VIP':
                            echo "<img src='zona.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'General A':
                            echo "<img src='zona.png' alt='General A' width ='200' height= '150'>";
                            break;
                        case 'General B';
                            echo "<img src='zona.png' alt='General B' width='200' height='150'>";
                            break;
                        case 'Gradas V';
                            echo "<img src='zona.png' alt='Gradas V' width='200' height='150'>";
                            break;
                        case 'Gradas N';
                            echo "<img src='zona.png' alt='Gradas N' width='200' height='150'>";
                            break;
                    }
                    switch ($lugar)
                {
                    case 'Estadio Azteca':
                        echo "<img src='estadio azteca.png' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio de los deportes.png' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro Sol':
                        echo "<img src='foro sol.png' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena Ciudad de México':
                        echo "<img src='arena.png' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
          echo "</tbody>";
          echo "</table>";
        }
    }

?>