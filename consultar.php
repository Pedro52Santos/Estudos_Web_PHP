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
          Estoque de carros
        </h1>
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
                $sql = "SELECT * FROM estoque";
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

                    <td><a href="editar.php?id=<?php echo $dados['id'];?>" 
                        class="btn-floating orange">
                        <i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger">
                        <i class="material-icons">delete</i>
                        </a>
                    </td>

                                        <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id'];?>" 
                    class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>Deseja realmente excluir?</h4>
                            <p>

                            <?php echo $dados['marca']; ?> - <?php echo $dados['modelo']; ?> -
                            <?php echo $dados['descricao']; ?> - <?php echo $dados['mod_fab']; ?> - 
                            <?php echo $dados['cor']; ?>> - <?php echo $dados['placa']; ?> -
                            <?php echo $dados['valor']; ?> 

                            </p>
                        </div>
                        <div class="modal-footer">
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name=id value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn green"><font color="#FFFFFF">Sim</font></button>
                        </form> 
                        <a href="consultar.php" class="red red modal-close waves-effect btn-flat"><font color="#FFFFFF">Não</font></a>
                        </div>
                    </div>    
                </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
  
      </div>
            
  </div>
  <br><br>

</div>
</div>


<?php 
    include_once 'includes/footer.php'
?>