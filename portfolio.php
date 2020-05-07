<html>
    <head>
    </head>
    <body>
        
        <!--No agregar la etiqueta de header por que modifica como se visualiza.
        Porque el contenido de este archivo es lo que se visualiza en el index.php-->
        

        <?php
        
            $proyectos = array("Ruedas NG"=>"ruedasng",
            "Mapa Interactivo"=>"mapainteractivo",
            "Landing BADA"=>"landingbada", "Animacion paleta de colores"=>"animacionpaletadecolores");
        
            //aca tendria que probar con otra variable ("nombre"=>"alt") para los alt
            
                foreach ($proyectos as $proyecto => $ruta){
                    echo '<div class="card">'.'<img src="img/'.$ruta.'.jpg">'.'<a href="'.$ruta.'.php" class="button">' . $proyecto . '</a>'.'</div>';
                }
                
            
        ?>
     
        
     
     </body>
</html>


