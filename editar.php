<?php
//Header
include_once 'includes/header.php';
//conexão
include_once 'php_action/db_connect.php';

//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM estoque WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados =    mysqli_fetch_array($resultado);
    endif
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row center">
            <div class="col s12">
                <h3 class="header center">Editar Carro</h3>
                    <form action="php_action/update.php" method="POST">
                       
                    <input type="hidden" name="id" value = "<?php echo $dados['id']; ?>" >
                       
                        <div class="input-field col s6">
                            <input type="text" name="marca" id="marca" value = "<?php echo $dados['marca']; ?>">
                            <label for="marca">Marca</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" name="modelo" id="modelo" value = "<?php echo $dados['modelo']; ?>">
                            <label for="modelo">Modelo</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="descricao" id="descricao" value = "<?php echo $dados['descricao']; ?>">
                            <label for="descricao">Descrição</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="mod_fab" id="mod_fab">
                            <label for="mod_fab">Ano do modelo / Ano de Fabricação</label value = "<?php echo $dados['mod_fab']; ?>">
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="placa" id="placa" value = "<?php echo $dados['placa']; ?>">
                            <label for="placa">Placa</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="valor" id="valor" value = "<?php echo $dados['valor']; ?>">
                            <label for="valor">Valor</label>
                        </div>
                    
                                <button class="btn-large waves-effect waves-light" type="submit" name="btn-alterar">Editar
                                <i class="material-icons right">add</i>
                                 </button>
                         
                      
                    </form>
            </div>
        </div>
            



    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>