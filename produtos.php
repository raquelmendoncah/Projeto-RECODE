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
    <title>Produtos</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script defer src="./JS/script.js"></script>
</head>
<body>
    <?php
        include('menu.php');    
    ?>
    <main class="mainProdutos">
       <section class="sectionCategorias">
           <h3>Categorias</h3>
           <a onclick="mostrarTodos()">Todos(8)</a>
           <a onclick="filtrar('geladeira')">Geladeiras(2)</a>
           <a onclick="filtrar('microondas')">Microondas(2)</a>
           <a onclick="filtrar('lava_loucas')">Lava louças(2)</a>
           <a onclick="filtrar('maquina_de_lavar')">Máquina de lavar(2)</a>
       </section> 

       <section class="sectionProdutos">
        <?php 
            $sql = "select * from fseletro.produto";
            $result = $conn->query($sql);
                
            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()){
        ?>
            <div class="card" id="<?php echo $rows["categoria"]; ?>">
                <img width="250px"  onmouseout="aumentarImagem(this)" onmouseover="aumentarImagem(this)" src="<?php echo $rows["imagem"]; ?>" alt="Geladeira 1">
                <p> <?php echo $rows["descricao"]; ?> </p>
                <p><?php echo $rows["preco"]; ?></p>
                <p><?php echo $rows["preco_final"]; ?></p>
            </div>
        <?php  
            }
            }else {
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