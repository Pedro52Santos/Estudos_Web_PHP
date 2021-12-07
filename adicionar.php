<?php
//Header
include_once 'includes/header.php';
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row center">
            <div class="col s12">
                <h3 class="header center">Adicionar Carro</h3>
                    <form action="php_action/create.php" method="POST">
                        <div class="input-field col s6">
                            <input type="text" name="marca" id="marca">
                            <label for="marca">Marca</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" name="modelo" id="modelo">
                            <label for="modelo">Modelo</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="descricao" id="descricao">
                            <label for="descricao">Descrição</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="mod_fab" id="mod_fab">
                            <label for="mod_fab">Ano do modelo / Ano de Fabricação</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="placa" id="placa">
                            <label for="placa">Placa</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" name="valor" id="valor">
                            <label for="valor">Valor</label>
                        </div>
                    
                                <button class="btn-large waves-effect waves-light" type="submit" name="btn-adicionar">Adicionar
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