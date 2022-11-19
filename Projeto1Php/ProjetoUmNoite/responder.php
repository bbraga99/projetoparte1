<?php
$titulo = "Responder";
include "./conexao.php";
include "./cabecalho.php";
$query = "select * from questoes order by rand() limit 15";
$resultado = mysqli_query($conexao, $query);

?>

    <form action="./responder.php" method=""></form>

<?php

while ($linha = mysqli_fetch_array($resultado)) {
?>  
        <div class="card w-75">
        <div class="card-body">
        <h2 class="card-title"><?php echo $linha["pergunta"]; ?></h2>
        <p class="card-text">
            <input type="radio" name="a" id="a"> <?php echo $linha["a"]; ?><br>
            <input type="radio" name="b" id="b"> <?php echo $linha["b"]; ?><br>
            <input type="radio" name="c" id="c"> <?php echo $linha["c"]; ?><br>
            <input type="radio" name="d" id="d"> <?php echo $linha["d"]; ?><br>
            <input type="radio" name="e" id="e"> <?php echo $linha["e"]; ?><br>
        </p>
        <a href="#" class="btn btn-primary">Enviar resposta</a>
    </div>
    </div>
   
<?php
}
?>



<?php
include "./rodape.php";
?>