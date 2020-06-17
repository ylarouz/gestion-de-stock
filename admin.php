<?php 
include('header.php');
$sql = " SELECT * FROM produit ";
$result = mysqli_query($con,$sql);
// print_r($_SESSION);


?>
<div class="container">
<div class="row">
<?php while($row = mysqli_fetch_array($result)):

?>

<div class="card col-lg-3" style="width: 18rem;margin:45px">
  <img src="img/<?php echo $row['IMAGE'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['NOM'] ?></h5>
    <p class="card-text"><h5 class="card-title"><?php echo $row['PRICE'] ?>dh</h5></p>
    <p class="card-text"><h5 class="card-title">qte:<?php echo $row['QTE'] ?></h5></p>
    <a href="edit.php?id_product=<?php echo $row['ID_PRD'] ?>" class="btn btn-warning">edit</a>
  </div>
</div>
<?php endwhile; ?>
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