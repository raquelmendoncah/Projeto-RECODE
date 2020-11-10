<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Lojas</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>
<body>
    <?php
        include('menu.php');    
    ?>
    <main class="container">
        <div class="d-flex align-items-end flex-column"> 
        <div class="container p-2 ">
        <div class="row my-5 flex-column flex-sm-row">
        <section class="col text-center my-4">
           <h3>Rio de Janeiro</h3>
           <p>Avenida Presidente Vargas, 5.000</p>
           <p>10º andar</p>
           <p>Centro</p>
           <p>Tel: (21)3333-3333</p>
       </section>
       <section class="col text-center my-4">
            <h3>São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3º andar</p>
            <p>Jardins</p>
            <p>Tel: (11)4444-4444</p>
        </section>
        <section class="col text-center my-4">
            <h3>Santa Catarina</h3>
            <p>Rua Major Avila, 370</p>
            <p>Vila Mariana</p>
            <p>Tel: (47)5555-5555</p>
       </section> 
        </div>        
        </div>
        </div>
       
    </main>
    <?php
        include('rodape.php');    
    ?>
       
</body>
</html>