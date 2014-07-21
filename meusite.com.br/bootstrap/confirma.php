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

   <ul>
       <h2>CONFIRMAÇÃO</h2>

         <address>
           <legend></legend><br>
           <strong>ProDermic</strong><br>
           Seus dados foram enviado com sucesso<br>
           <br>
           Abaixo seguem os dados que você enviou:
         </address>

       <div class="row">
           <div class="col-xs-12">
               <dl class="dl-horizontal">
                   <dt>Nome: </dt>
                   <dd><?php echo $_POST['nome']?></dd>
                   <dt>E-mail: </dt>
                   <dd><?php echo $_POST['e-mail']?></dd>
                   <dt>Assunto: </dt>
                   <dd><?php echo $_POST['assunto']?></dd>
                   <dt>Mensagem: </dt>
                   <dd><?php echo nl2br($_POST['mensagem'])?></dd>
               </dl>
           </div>
       </div>


       <address>
           Agradeçemos sua colaboração<br>
       </address>
   </ul>
</body>
</html>