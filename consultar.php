<?php 
    include_once 'includes/header.php'
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
                <tr>
                    <td>Ford</td>
                    <td>Ka</td>
                    <td>1.0 MPI 8V Flex 2P MANUAL</td>
                    <td>2013/2013</td>
                    <td>Branco</td>
                    <td>GHF9845</td>
                    <td>18.000,00</td>
                    <td><a href="#" class="btn-floating orange">
                        <i class="material-icons">edit</i></a></td>

                    <td><a href="#" class="btn-floating red modal-trigger">
                        <i class="material-icons">delete</i></a></td>
                </tr>
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