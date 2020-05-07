<html>
    <head>
    </head>
    <body>
        
        <form action="" method="post">
                            
            <div class="input-form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <br>

            <div class="input-form">
                <label for="mail">E-mail</label>
                <input type="email" name="mail" id="mail" required>
            </div>

            <br>    

            <div class="input-form">
                <label for="message">Message</label>
                <textarea name="message" id="message" required minlength="10" title="Minimum size: 10 characters."></textarea>
            </div>

            <br>

            <p>Aca tengo que poner el captcha</p>


            <input class="button" name="submit" type="submit" value="send">

        </form>
        
     
        
     
     </body>
</html>






<?php
    
    $name = $_POST["name"];
    $mailFrom = $_POST["mail"];
    $message = $_POST["message"];
    $to = "lucasulibarri26@gmail.com";


    
    


    if(isset($_POST["name"])){
        
    
        $subject = "Design service request";
    
        $headers = "From: ". $mailFrom;
    
        $txt = "You have received an email from ". $name.".\n\n".$message;
        
        
        mail($to,$subject,$txt,$headers);
       echo "Hola ". $name ." mensaje con su email: ". $mailFrom . " fue enviado";
    }

    else {
        echo "Sorry " . $name . " your message no se puedo enviar, intente nuevamente mas tarde o envielo a lucasulibarri26@gmail.com";
    }

?>