<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>



    <link rel="stylesheet" type="text/css" href="apotre.css">
<div class="form-container">
        <h1 class="form-title">Connexion</h1>
        <form method="POST"  class="form">
        <label for="mail">mail</label>
            <input type="mail" placeholder="Email" id="mail" name="mail" />
            
              <input type="password" placeholder="Entre votre mot de passe" id="mdp" name="password" />
         
     <button type="submit">Login</button>
 
        </form>

        
        <div class="signin-message"><br>
            
          <br>
             <?php
           if (isset($erreur)) {
         echo '<font color="red">' . $erreur . "</font>";
      }
      ?>
    
           
        </div>
    </div>

</body>
</html>
