<?php include('head.php')?>

<?php

    $pass = "";
    $email = "";

    $errAdd = $errPass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
       if (!empty($_REQUEST['email']))
        {
           $email = htmlspecialchars($_REQUEST['email']);
        }
        else
        {
            echo $errAdd = "Erreur Email.<br>";
        }
        if (!empty($_REQUEST['pass']))
        {
           $pass = htmlspecialchars($_REQUEST['pass']);
        }
        else
        {
            echo $errAdd = "Erreur MDP.";
            header("location:indextp.php");
        }
    }
    
    echo "Votre adresse mail :".$email, "<br> Votre MDP :".$pass;
    

?>


<body>
    <div class="logall">
        <div class="boxlog">
            <div class="piclog">
                <img src="images/logo.PNG" alt="">
            </div>
            <div class="log">
                <h1>LOGIN</h1>
                    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
                         <label for="addresse" class="label1">Enter your address :</label><br>
                         <input type="email" name="email"><br>
                         <label for="" class="label2">Password :</label><br><br><br>
                         <input type="password" name="pass">
                         <input class="button" type="submit" value="Log In">
                         <p>Don't have an account ? <a href="#">Sign Up</a></p>
                    </form>
            </div>
        </div>
    </div>
  
</body>
</html>