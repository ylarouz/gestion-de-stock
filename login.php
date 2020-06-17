<?php 
include('header.php');
if(isset($_POST['submit'])):

    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $sql= " SELECT * FROM client WHERE EMAIL='$email' AND PASSWORD='$password'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        
            
             //  die($password);
             $_SESSION['log']=true;
             $_SESSION['nom']=$row['NOM'];
             $_SESSION['id']=$row['ID'];
             redirect('user.php');
             // echo '<div class="alert alert-success">mot de passe ou email est incorect</div>';
            }else{
             echo '<div class="alert alert-danger">mot de passe ou email est incorect</div>';
           }
        
    
endif;

?>
<div class="container">
<form action="login.php" method="post">
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<footer>
    <div id="footer1">
        <div id="par1">
            <p>Oui à la newsletter !</p>
        </div>
        <div id="par2">
            <p>Recevez les meilleures offres des magasins Auchan et d'Auchan.fr</p>
        </div>
        <div id="inputs">
            <input type="text" name="" id="TextBox">
            <input type="button" id="footerbtn" value="OK">
        </div>
    </div>
    <div id="footer2">
        <div>
            <p>A PROPOS</p>
        </div>
        <div>
            <p>INFOS LEGALES</p>
        </div>
        <div>
            <p>MOYENS DE PAIEMENT</p>
        </div>
        <div>
            <p> MA CARTE FIDELITE </p>
        </div>
        <div id="imgs">
            <img src="img/fb.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/twitter.png" alt="">
        </div>
    </div>
    <div id="coorp">
        <p> XXX 2020 © Tous droits réservés </p>
    </div>
</footer>
</body>

</html>