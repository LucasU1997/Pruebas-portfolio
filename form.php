<html>
    <head>
    </head>
    <body>
        
        <form action="" method="post">
                            
            <div class="input-form">
                <label for="name">Name<sup>*</sup></label>
                <input type="text" name="name" id="name" required>
            </div>

            

            <div class="input-form">
                <label for="mail">E-mail<sup>*</sup></label>
                <input type="email" name="mail" id="mail" required>
            </div>

               

            <div class="input-form">
                <label for="message">Message<sup>*</sup></label>
                <textarea name="message" id="message" required minlength="10" title="Minimum size: 10 characters."></textarea>
            </div>

            
            <div class="input-form">
                <p>Aca tengo que poner el captcha</p>
            </div>
            
            
            <div class="input-form">
                <button class="button" name="submit" type="submit">Send</button>
            </div>

        </form>
        
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
     
     </body>
</html>






<?php
    
    $name = $_POST["name"];
    $mailFrom = $_POST["mail"];
    $message = $_POST["message"];
    $to = "lucasulibarri26@gmail.com";
    
    
    

    if(isset($_POST["name"])){
        
    
        $subject = "Design service request";
    
        $header = "From: ". $mailFrom;
    
        $txt = "You have received an email from ". $name. " <".$mailFrom.">.\n\n".$message;
        
        
        if(mail($to, $subject, $txt, $header)){
            echo "<div class='form-confirmation'><h4>Hola ". $name ."</h4> el mensaje con su email: ". $mailFrom . " fue enviado</div>";
            
    }
        else {
            echo "<div class='form-confirmation'><h4>Sorry " . $name . "</h4>
            Hubo un error al enviar el mail, intente nuevamente mas tarde o envielo a <a class='email' href=' mailto: lucasulibarri26@gmail.com'><strong>lucasulibarri26@gmail.com</strong></a></div>";
            }
    }

?>