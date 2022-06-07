<?php
require_once __DIR__.'/Classes/Product.php';
require_once __DIR__ ."/Classes/Premium.php";

$user1 = new User('5593 5738 2918 3838', 2024);
$user2 = new User('3847 4838 4829 3838', 2020);
$user3 = new User('4626 4819 3898 3839', 2029);
$premium_user1 = new Premium('2749 3441 4521 5241', 2025, 'Elisa', 'Chiriaco', 'elisa@gmail.com', '20%');
$premium_user2 = new Premium('2746 2847 4821 4828', 2027, 'Giulia','Rossi','g.rossi@yahoo.it','20%');
$premium_user3 = new Premium('2748 3739 1839 3818',2024,'Marco','Bianchi','m.bianchi@gmail.it','20%');


$product1 = new Product('alimenti umidi', '0.80', 'alimento umido per gatti, con fonti proteiche in qualità alimentare e carne primo componente.');
$product2 = new Product('alimenti secchi', '23,99', 'Crocchette gustose e digeribili da 4kg con Pesce Azzurro Fresco per gatti di tutte le razze ed età, ad elevato contenuto di pesce, di cui 26% pesce fresco.');
$product3 = new Product('lettiere', '7,99', "Lettiera in silicio per gatti Tigerino Crystals Flower-Power 5 L (ca. 2,1 kg), assorbe all'istante i liquidi e neutralizza i cattivi odori rilasciando una fresca fragranza floreale.");
$product4 = new Product('cucce', '9.99', 'Morbido lettino imbottito in peluche bianco, effetto finto pellicciotto di agnello, a forma di testa di gattino.');
$product5 = new Product('giochi', '1,49', 'Topolino in peluche con catnip di Trixie, con coda lunga, per offrire al tuo gatto tante ore di divertimento. In peluche di poliestere.');
$product6 = new Product('ciotole', '2,99', 'Ciotola in ceramica Trixie Mimi per gatti per alimento secco e umido e acqua, con pregiata lavorazione, lavabile in lavastoviglie!');

$user1 -> setCompra($product1);
$user2 -> setCompra($product2);
$user3 -> setCompra($product3);
$premium_user1 -> setCompra($product4);
$premium_user2 -> setCompra($product5);
$premium_user3 -> setCompra($product6);


try {
    $user2 -> setScadenza(2020);
} catch(Exception $e) {
    echo 'Eccezione :' . $e->getMessage() . '<br>'; 
}

try {
    $premium_user2 -> setMail('g.rossi@yahoo.it');
} catch(Exception $e) {
    echo 'Eccezione :' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    ul{
        list-style-type: none;
    }
    body{
        text-align: center;
    }
    img{
        width: 50%;
        border-radius: 50px;
    }
</style>

<body>
    <div class="prodotti">
        <ul>
            <img src="Images/Immagine di iOS (1).jpg" alt="cat">
            <?php foreach($user1 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>'?></i><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
        <ul>
            <img src="Images/Immagine di iOS (2).jpg" alt="cat">
            <?php foreach($user2 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>'?><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
        <ul>
            <img src="Images/Immagine di iOS (3).jpg" alt="cat">
            <?php foreach($user3 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>' ?><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
        <ul>
            <img src="Images/Immagine di iOS (4).jpg" alt="cat">
            <?php foreach($premium_user1 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>' ?><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
        <ul>
            <img src="Images/Immagine di iOS (6).jpg" alt="cat">
            <?php foreach($premium_user2 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>' ?><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
        <ul>
            <img src="Images/Immagine di iOS.jpg" alt="cat">
            <?php foreach($premium_user3 -> getCompra() as $prodotti) {?>
            <li><?php echo '<h2>Prodotto:'.' '. $prodotti -> getNome() . '</h2>'?><?php echo '<h3>Descrizione</h3>'. $prodotti -> getDescrizione() ?><span><?php echo '<h3>Prezzo</h3>' . $prodotti -> getPrezzo().' €' ?></span></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>