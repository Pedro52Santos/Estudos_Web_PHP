<?php 
//conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
?>

<div class="section no-pad-bot">
<div class="container">
  <br><br>

  <div class="row center">

      <div class="col s12">
        <h1 class="header center" 
          style="color: #02CA63; 
                        text-align: center;
                        position: static;
                        font-size: 55px">
          Relatórios
        </h1>
        
            <form action="php_action/report.php" target="_blank" method="POST">
                <div class="col s6">
                    <label for="marca">Selecione a marca:</label>
                    <select name="marcaselecionada">
                        <option>Todas as marcas</option>
                        <?php
                        $sql = "SELECT DISTINCT marca FROM estoque";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)) :
                            ?>
                        <option><?php echo $dados['marca']; ?></option>
                        <?php endwhile; ?>
                        </select>
                </div>
                <div class="col s6">
                    <input type="submit" name="btn-relatorio" class="btn green btn-large"
                    value="Selecionar" />
                </div>
            </form>

      </div>
            
  </div>
  <br><br>

</div>
</div>


<?php 
    include_once 'includes/footer.php'
?>