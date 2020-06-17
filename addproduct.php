<?php 
include('header.php');
if(isset($_POST['submit'])):
    
    $cat=htmlentities($_POST['catid']);
    $title=htmlentities($_POST['title']);
    $qte=htmlentities($_POST['qte']);
    $price=htmlentities($_POST['price']);
    $image=htmlentities($_POST['image']);
    $sql= " INSERT INTO produit(`ID_CAT`, `NOM`, `QTE`, `PRICE`, `IMAGE`) VALUES ('$cat','$title','$qte','$price','$image')";
    if(mysqli_query($con,$sql)){
        echo '<div class="alert alert-success">produit ajoute</div>';
    }else{
        echo 'bad'.$sql .mysqli_error($con);
    }
endif;
?>

<div class="container">
<form action="addproduct.php" method="post">
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">cat id</label>
    <input type="text" name="catid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" >
 
  </div>
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">QTE</label>
    <input type="number" name="qte" class="form-control"  >
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">price</label>
    <input type="number" name="price" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image" class="form-control"  >

  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<!-- strat footer -->
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