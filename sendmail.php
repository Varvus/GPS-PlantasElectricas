<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sistema@gpsplantaselectricas.com";
    //$to = "marketing@gpsplantaselectricas.com"; 
    $to = "varvus@hotmail.com";
    $subject = "Contacto desde la Página Web";
    
    $message = "
                <html>
                <head>
                <title>HTML email</title>
                </head>

                <body>

                    <table width='100%' cellspacing=1 cellpading=2 border=1>
                        <tr bgcolor='black'>
                            <th><center><font color='white'>Nombre</th>
                            <th><center><font color='white'>Correo</center></th>
                            <th><center><font color='white'>Teléfono</th>
                            <th><center><font color='white'>Empresa</th>
                            <th><center><font color='white'>Asunto</th>
                        </tr>
                        <tr bgcolor='#eee'>
                            <td>" . $_POST["wk_nombre"] . "</td>
                            <td>" . $_POST["wk_correo"] . "</td>
                            <td>" . $_POST["wk_telefono"] . "</td>
                            <td>" . $_POST["wk_empresa"] . "</td>
                            <td>" . $_POST["wk_asunto"] . "</td>
                        </tr>
                        <tr bgcolor='black'>
                            <th colspan=4><font color='white'>Comentarios</th>
                        </tr>
                        <tr>
                            <td colspan=4>" . $_POST["wk_comentarios"] . "</td>
                        </tr>
                    </table>

                </body>

                </html>";

    if ($_POST["wk_nombre"] <> "" && 
        $_POST["wk_correo"] <> "" && 
        $_POST["wk_telefono"] <> "" && 
        $_POST["wk_asunto"] <> "" && 
        $_POST["wk_mensaje"]){
        
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $from;
            mail($to,$subject,$message, $headers);
            echo "El correo fue enviado. ";
    }
?> 

<script language="javascript">
    alert("Hemos recibido tu mensaje, en breve recibirás una respuesta por parte de nuestro equipo.");
    window.open("index.html", "_self");
</script>
