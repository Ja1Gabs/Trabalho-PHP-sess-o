<?php
    session_start();
    if(isset($_SESSION['exemplo'])){
        print '<p>Exemplo salvo em sessão: ' . $_SESSION['exemplo'] . '</p>';
    }else{?>
        <p>Não existe exemplo na sessão</p>
<?php
    }
    if(isset($_REQUEST['exemplo']))
        $exemplo = $_REQUEST['exemplo'];
    else
        $exemplo = 'manuel';
    $_SESSION['exemplo'] = $exemplo;
?>
    <p>Novo exemplo recebido pela requisição: <?php echo $exemplo?></p>
    



    <?php
    
    if(isset($_SESSION['exemplo2'])){
        print '<p>Exemplo2 salvo em sessão: ' . $_SESSION['exemplo2'] . '</p>';
    }else{?>
        <p>Não existe exemplo2 na sessão</p>
<?php
    }
    if(isset($_REQUEST['exemplo2']))
        $exemplo2 = $_REQUEST['exemplo2'];
    else
        $exemplo2 = '34';
    $_SESSION['exemplo2'] = $exemplo2;
?>
    <p>Novo exemplo2 recebido pela requisição: <?php echo $exemplo2?></p>
