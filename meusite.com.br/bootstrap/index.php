<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Trabalho para Code.Ecducation</title>

    <!-- JQUERY -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

    <!-- TWITTER BOOTSTRAP CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- TWITTER BOOTSTRAP JS -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<?php
date_default_timezone_set('America/Sao_Paulo');
    //date.timezone = "Europe/Whatever"   Los_Angeles
?>

<div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Home</a></li>
        <li><a href="#tab2" data-toggle="tab">Empresa</a></li>
        <li><a href="#tab3" data-toggle="tab">Produtos</a></li>
        <li><a href="#tab4" data-toggle="tab">Serviços</a></li>
        <li><a href="#tab5" data-toggle="tab">Contato</a></li>
    </ul>
    <div class="tab-content" id="principal">
        <div class="tab-pane active" id="tab1">
            <!--<p>Home</p>-->
            <?php require_once('home.php'); ?>
        </div>
        <div class="tab-pane" id="tab2">
            <!--<p>Empressa</p>-->
            <?php require_once('empresa.php'); ?>
        </div>
        <div class="tab-pane" id="tab3">
            <!--<p>Produtos</p>-->
            <?php require_once('produtos.php'); ?>
        </div>
        <div class="tab-pane" id="tab4">
            <!--<p>Serviços</p>-->
            <?php require_once('servicos.php'); ?>
        </div>
        <div class="tab-pane" id="tab5">
            <!--<p>Contatos</p>-->
            <?php require_once('contato.php'); ?>
        </div>
    </div>

    <!-- <div class="modal"
       <p>Este texto vai no meio do corpo.</p>
    </div> -->

    <div class="modal-footer" id="rodape"

    <p>Todos os Direitos reservados. <?php echo date('Y');?></p>

    </div>
</div>
</body>
</html>