<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao Banco de Dados falhou: " .mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>

<body>
    <?php
        include('menu.php');    
    ?>

    <main class="mainFaleconosco">
        <section class="sectionContatos">
            <div>
                <img src="./Imagens/Email.jpeg" alt="E-mail">
                <p>contato@fullstackeletro.com.br</p>
            </div>
            <div>
                <img src="./Imagens/Whatsapp.jpeg" alt="Whatsapp">
                <p>(11)12345-6789</p>
            </div>
        </section>

        <section class="sectionMensagem">
            <form action="" method="post"> 
            <p>Nome</p>
            <input type="text" name="nome">
            <p>Mensagem</p>
            <textarea name="msg" id="" cols="30" rows="10"></textarea>
            <button type="submit" name=submit> Enviar</button>   
            </form>            
        

            <?php 
                $sql = "select * from comentarios";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
            ?>

            <div class="msgm">
                <p>Data: <?php echo $rows["data"]; ?></p>  
                <p>Nome: <?php echo $rows["nome"]; ?></p>   
                <p>Mensagem: <?php echo $rows["msg"]; ?></p>    
                <hr>
            </div>
  
            <?php  
                    }
                }else {
                    echo "Nenhum comentário ainda!";
                }
            ?>
         </section>
    </main>

    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>

    <?php
        include('rodape.php');    
    ?>

</body>

</html>