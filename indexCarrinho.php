<!DOCTYPE  html>
<html>
    <head>
        <tittle> carrinhos
<?php
$itens = array(
   ['imagem'=>'/modelo_walltech/modelo_1.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_2.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_3.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_4.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_5.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_6.jpeg','preço'=>'100.00'],
   ['imagem'=>'/modelo_walltech/modelo_7.jpeg','preço'=>'100.00'],

);

foreach($itens as $key => $value){

?>

<div class="produtos">
    <img src="<?php echo $value['imagem']?>"/>
    <a href="?adicionar=<?php echo $key ?>">add ao carrinho</a>
    <p><?php echo $value ['nome']?></p>
    <p2><?php echo $value['preço']?></p2>
</div>

<?php
}
?>

<?php 
//adicionar carrinho
if(isset($_get['adicionar']))
{
$idProduto = (int) $_get['adicionar'];
if(isset($itens[$idProduto]))
{
    if(isset($SESSION['carrinho'][$idProduto]))
    {
       $_SESSION['carrinho'][$idProduto]['quantidade']++;

    }
    else {
        $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$itens[$idProduto]['nome'],'preço'=>$itens[$idProduto]['preço']);

    }
    echo'<script>alert("o item foi adicionado ao carrinho.";</script>';


}
}
?>
<div class= "carrinho">
    <div class="ti-carrinho">
        <h2> nova comptra</h2>
        <p> 
        <?php
        $qt_itens = 0;
            foreach ($_SESSION['carrinho'] as $key => $value) {
                $qt_itens += $value['quantidade'];
            }
            echo $qt_itens;
            ?>
            
            itens no <p>
            
        </div>
        <div class="produtos">
            <?php
             foreach ($_SESSION['carrinho'] as $key => $value) {
                 ?>
                 <div class="itens">
                    <a href=""><img src=""/></a>
                    <div class"nome


