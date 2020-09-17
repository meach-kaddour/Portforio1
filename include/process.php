
<?php 
include_once("session.php");
 
    $name = $subject = $email = $message = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['name']))
            {
                $name = test_input($_POST["name"]);
                // check if name containe just letters and space
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
                {
                $nameErr = "Only letters and white space allowed";
                }
            }
            if (!empty($_POST["email"])) 
            {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                        }
            }
            if (!empty($_POST["subject"]))            
            {
                $subject = test_input($_POST["subject"]);
            }
            if (!empty($_POST["body"]))  
            {
            $message = test_input($_POST["body"]);
            }

                                    
            $email_from = $email;
            $email_subject = "contact page Portforio";
            $email_body = "User Name: $name.\n".
                            "User Email: $email.\n".
                                "User subject: $subject.\n".
                                    "User Message: $message.\n";
            $to = "meachkaddour1@gmail.com";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: $email \r\n";
            $Execute=mail($to,$email_subject,$email_body,$headers);
            if($Execute){
                $_SESSION["successMessage"]= "Votre Message a été Bien Envoyées";
                Redirect_to("../index.php#contact");

            }else{
                $_SESSION["ErrorMessage"]= "Error en l'envoi du Message ";
                Redirect_to("../index.php");
            }

        }
        function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);          
            $data = htmlspecialchars($data);
            return $data;                        
        }
                    ?>