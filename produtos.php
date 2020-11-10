<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    die("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Produtos</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script defer src="./JS/script.js"></script>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <main class="container">
        <div class="dropdown-show d-flex justify-content-center my-4">
            <a class="btn dropdown-toggle d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="my-auto">Categorias</p>
            </a>

            <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuLink">
                <button class="dropdown-item" type="button" onclick="mostrarTodos()">Todos(10)</button>
                <button class="dropdown-item" type="button" onclick="filtrar('geladeira')">Geladeiras(3)</button>
                <button class="dropdown-item" type="button" onclick="filtrar('microondas')">Microondas(2)</button>
                <button class="dropdown-item" type="button" onclick="filtrar('maquina_de_lavar')">Máquina de lavar(3)</button>
                <button class="dropdown-item" type="button" onclick="filtrar('lava_loucas')">Lava Louças(2)</button>
            </div>
        </div>

        <section class="row d-flex justify-content-center py-4">
            <?php
            $sql = "select * from fseletro.produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>
                    <div class="card col-lg-3 col-md-4 col-sm-6 text-center" id="<?php echo $rows["categoria"]; ?>">
                        <img class="mx-auto" width="250px" onmouseout="aumentarImagem(this)" onmouseover="aumentarImagem(this)" src="<?php echo $rows["imagem"]; ?>" alt="Geladeira 1">
                        <p class="border-bottom mb-0 mt-4"> <?php echo $rows["descricao"]; ?> </p>
                        <p class="mb-0"> <s><?php echo $rows["preco"]; ?></s></p>
                        <p class="mb-0" style="font-size: 1.4rem; color: red;"><?php echo $rows["preco_final"]; ?></p>
                    </div>
            <?php
                }
            } else {
                echo "Nenhum produto cadastrado!";
            }
            ?>

        </section>
    </main>
    <?php
    include('rodape.php');
    ?>

</body>

</html>