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

if (isset($_POST['nome']) && isset($_POST['msg'])) {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>

<body>
    <?php
    include('menu.php');
    ?>

    <main class="container">
        <section class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="text-center">
                        <img width="30px" src="./Imagens/Email.jpeg" alt="E-mail">
                        <p>contato@fullstackeletro.com.br</p>
                    </div>
                </div>
            
                <div class="col-6">
                    <div class="text-center">
                        <img width="30px" src="./Imagens/Whatsapp.jpeg" alt="Whatsapp">
                        <p>(11)12345-6789</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-3 p-3">
            <form action="" method="post">
                <div class="form-group">
                    <p>Nome</p>
                    <input class="form-control mb-4" type="text" name="nome">
                    <p>Mensagem</p>
                    <textarea class="form-control" name="msg" id="" cols="30" rows="10"></textarea>
                    <button type="submit" name=submit class="btn btn-primary mt-4"> Enviar</button>
                </div>
            </form>

            <div class="container my-3 p-3 bg-light rounded shadow-lg">
                <h6 class="border-bottom border-gray pb-2 mb-0">Mensagens</h6>

                <?php
                $sql = "select * from comentarios order by data desc";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                ?>

                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>

                            </svg>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark"><?php echo $rows["nome"]; ?></strong>
                                    <p><?php echo $rows["data"]; ?></p>
                                </div>
                                <p class="d-block"><?php echo $rows["msg"]; ?></p>
                            </div>
                        </div>
                      
                <?php
                    }
                } else {
                    echo "Nenhum comentário ainda!";
                }
                ?>
            </div>

        </section>
    </main>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <?php
    include('rodape.php');
    ?>

</body>

</html>