<html>
    <head>
        
        <title>Lucas Ulibarri</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/favicon.svg">
        
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <meta name="copyright" content="Lucas Ulibarri">
        <meta name="title" content="Lucas Ulibarri">
 
    </head>
    <body>
        
        <header>
            <?php
                include "header.php"
            ?>
        </header>
        
        
        
        <!--Aca empieza el body-->
        
        <div class="body">
            
            <!--Banner-->
            
            <section class="banner" id="home">
            
                <img src="https://user-images.githubusercontent.com/194400/49531010-48dad180-f8b1-11e8-8d89-1e61320e1d82.png" alt="">
            
            </section> 
            
<!---------------------------------------------------------About me--------------------------------------------------------->
            <section id="about-me">
            
                <h2>About me</h2>
                
                <div class="about-me">
                    
                    <div class="img">
                        <img src="img/banner.png" alt="">
                    </div>
                    
                    <div class="experience">
                    
                        <p>
                            <?php $fecha_nacimiento = new DateTime("1997-12-26");
                            $hoy = new DateTime();
                            $edad = $hoy->diff($fecha_nacimiento);?>
                            My name is <strong>Lucas Ulibarri</strong>, I am <?php echo $edad->y." years old";?>. Realicé mis estudios la Universidad Argentina de la Empresa, donde estudie la Licenciatura en Diseño Multimedia y de Interacción desde el año 2017 hasta el 2019.
                        </p>
                        <br>
                        <br>
                        
                        <h3>Experience</h3>
                        <p>
                            En el 2017 ingrese a trabajar en el equipo de Experiencia de Usuario del Gobierno de la Ciudad de Buenos Aires, como Diseñador UI, con el pasar del tiempo fui interesándome e interiorizandome en el diseño UX, gracias a la confianza de mi jefe y de mis compañeros de equipo pude aprender y colaborar en varios proyectos.
                            <br>
                            En Agosto de 2019 tuve la oportunidad de cambiar de trabajo, e ingrese a SimpliCar
                            <br>
                            En Enero de 2020 Australia
                        </p>
                    
                    </div>
                    
                    <div class="skills">
                        
                        <h3>Skils</h3>
                        
                        <p>
                            Como diseñador tengo conocimientos avanzados en el uso de Photoshop, Illustrator, InDesign y Lightroom, y XD. También gracias a las materias de la universidad cuento con conocimientos básicos de After effects, Premiere, Adobe Audition y 3DS Max.
                            <br>
                            En cuanto a diseño web y desarrollo web, tengo conocimientos en HTML5 y CSS3.
                        </p>
                    
                    </div>
                    
                </div>
                
                <div class="below-button">
                    <a class="button" href="Resume.pdf" target="_blank">Resume</a>
                </div>
                    
            </section>
            
            
<!---------------------------------------------------------Portfolio--------------------------------------------------------->            
            
            <section id="portfolio">
                
                <h2>Portfolio</h2>
                    
                    <div class="portfolio">
                        
                        <?php
                            include "portfolio.php"
                        ?>
                        
                    </div>
                
            </section>
            
            
<!---------------------------------------------------------Contact--------------------------------------------------------->            
            
            <section id="contact">
                
                <h2>Contact</h2>
                    
                    <div class="contact">
                
                
                    <div class="contact-information">
                    
                        <p>
                            <?php $fecha_nacimiento = new DateTime("1997-12-26");
                            $hoy = new DateTime();
                            $edad = $hoy->diff($fecha_nacimiento);?>
                            My name is <strong>Lucas Ulibarri</strong>, I am <?php echo $edad->y." years old";?>. Realicé mis estudios la Universidad Argentina de la Empresa, donde estudie la Licenciatura en Diseño Multimedia y de Interacción desde el año 2017 hasta el 2019.
                        </p>
                        
                        

                    
                    </div>
                        
                    <div class="form">
                    
                        <?php
                            include "form.php"
                        ?>

                    </div>   
                        
                </div> 
                   
            </section>

            
            
<!---------------------------------------------------------Footer--------------------------------------------------------->            
            <footer>
            
                <?php
                include "footer.php"
                ?>
            
            </footer>
            
            
        </div>    
        
     
     </body>
</html>