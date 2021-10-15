<?php 
session_start()
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento Online</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Agendamento Online</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Prefeitura da Serra</a></h3>
                   

                    <?php                    
                    if(isset($_SESSION['igualdade'])):
                     $mensagem = $_SESSION['mensagem_confirma_senha']
                     ?>


                    <div class="notification is-danger">
                       
                      <p><?php echo $mensagem; ?></p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['igualdade']);
                    ?>

                    <div class="box">
                        <form action=".\php\cadastro.php" method="POST">

                            <div class="field">
                                <div class="control">
                                	            <input name="usuario" class="input is-large" placeholder="Usuário" autofocus="">
                                    	</div>
                                            <br>
                                                <input name="senha" class="input is-large" type="password" placeholder="Senha" autofocus="">
                                        <div>
                                            <br>
                                                <input name="repete_senha" class="input is-large" type="password" placeholder="Repita a Senha" autofocus="">
                                        </div>
                                            <br>
                                        </div>
                                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                         
                         <div><br>                            
                                
                                <a href="index.php"><button class="button is-block is-link is-large is-fullwidth">Voltar</button><a>
                         </div>  
                         
                </div>
            </div>
        </div>
    </section>
</body>

</html>