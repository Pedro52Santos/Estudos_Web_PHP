<?php 
//conexão
include_once 'db_connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Vai Vem Carros Usados</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js">
        defer
    </script>
    <script src="../js/materialize.js">
        defer 
    </script>
    <script src="../js/init.js">
        defer 
    </script>
</head>
<body>
<div class="btn-large green right">
        <a href="#!" onclick="window.print()">
             <font color="White"> Imprimir </font>
        </a>
    </div> 
<div class="section no-pad-bot " id="index-banner">
<div class="container">
  <br><br>

  <div class="row center">
    <img src="../assets/imagens/logo-vertical.png" width="200px" />
      <div class="col s12">
        <h1 class="header center" 
          style="color: #02CA63; 
                        text-align: center;
                        position: static;
                        font-size: 55px">
          Relatório de Veículos
        </h1>
        <?php
            if(isset($_POST['btn-relatorio'])):
                $marcaselecionada = $_POST['marcaselecionada'];
            endif;
        ?>
        <h3 class="light"><?php echo $marcaselecionada; ?> </h3>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descrição</th>
                    <th>Mod/Fab</th>
                    <th>Cor</th>
                    <th>Placa</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>

                <?php
                        if(isset($_POST['btn-relatorio'])):
                            if($marcaselecionada =="Todas as marcas"):
                                $sql = "SELECT * FROM estoque ORDER BY marca,modelo,mod_fab;";
                            else :
                                $sql = "SELECT * FROM estoque WHERE marca = '$marcaselecionada' ORDER BY marca,modelo,mod_fab;";
                        endif;
        
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)) :
                ?>

                <tr>
                    <td><?php echo $dados['marca']; ?></td>
                    <td><?php echo $dados['modelo']; ?></td>
                    <td><?php echo $dados['descricao']; ?></td>
                    <td><?php echo $dados['mod_fab']; ?></td>
                    <td><?php echo $dados['cor']; ?></td>
                    <td><?php echo $dados['placa']; ?></td>
                    <td><?php echo $dados['valor']; ?></td>
                </tr>

                <?php endwhile;
                endif;
                ?>
            </tbody>
        </table>
        
      </div>
            
  </div>
  
  <br><br>

</div>
</div>

</body>
</html>