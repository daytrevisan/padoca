<?
// include("seguranca.php");
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!--LINK CSS-->
        <link rel="stylesheet" href="Css/index.css">
    <link rel="shortcut icon" href="../padoca/Imagens/icons8-bread-50.png">
        <!--LINK CDN BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      </head>
    <body>

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-lg p-3 mb-5 bg-white rounded"> <!--Barra Superior-->
        <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="index.php">Padoca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="criadores.html">Criadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="termosdeusos2.html">Termos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="listar-estr.php">Listar Estrutura</a>
          </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="operacaofab.php">Operações</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="roteirofab.php">Roteiros</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="processofab.php">Processos</a>
        </li> 
        <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="ordemprod.php">Ordem Prod.</a>
            </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="apontamento.php">Apontamentos</a>
        </li> 
            </ul>
         <div class="mw-auto" style="width: 8px;"></div>
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#notifications">
            Notificações <span class="badge text-bg-success">3</span>
            </button>
        </div>
       </div>
    </nav>
    <P>
        <div class="container-fluid">
        </div>
        <div class="container">
        <div class="container-principal-produtos">
        <hr> <hr> <hr> <hr> <hr> <hr> <h4 class="page-header">ESTRUTURA DE PRODUTO</h4>
         <hr>
            <form action="cadastro-estr.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">

              <div class="form-group col-md-3">
                  <label>Codigo Produto:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_cod" placeholder="Digite codigo do produto" required/>
                  
                  <?php
                             //Chamando banco de dados
                             include("conexao.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "padoca");
                            //fazendo a seleção do produto
//                             $productCode = $_POST['cc_cod']; // Assuming you're using POST method
//                             $query = "SELECT nm_produto FROM tb_produto WHERE cc_code = ?";
//                            $stmt = $pdo->prepare($query);
//                            $stmt->execute([$productCode]);
//                            $description = $stmt->fetchColumn();
                            
//                            if ($description) {
//                                echo "Description: " . $description;
//                                echo  '<td>'.$linha['nm_produto'].'</td>';

//                              } else {
//                                echo "Product not found.";
//                            }
                              ?>
                </div>
                
                <hr>
 
                <div class="form-group col-md-3">
                  <label>Componente:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_comp" placeholder="Digite compomente do produto" required/>
                </div>
                <div class="form-group col-md-3">
                    <label>SEQ:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_seq" placeholder="Sequencia na estrutura" required>
                  </div>    
                  <hr>
                  <div class="form-group col-md-3">
                    <label>Qtde.Necessaria:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_qtde" placeholder="Digite qtde. necessaria" required>
                  </div>      
                  <div class="form-group col-md-3">
                    <label>Qtde.Perda:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_perda" placeholder="Digite qtde. perda" required>
                  </div>      

                  <div class="form-group col-md-2">
                    <label>Lista Estrutura:</label>
                    <select  name="c_lista" class="form-control form-control-sm col-md-10 col-sm-10" placeholder="Digite codigo da lista" required>
                      <option value="LST-0001">LST-0001-Panificacao</option>
                      <option value="LST-0002">LST-0002-Doceria</option>
                      <option value="LST-0003">LST-0003-Salgateria</option>
                      <option value="LST-0004">LST-0004-Bolos</option>
                      <option value="LST-0005">LST-0005-KIT Festas</option>
                      <option value="LST-0006">LST-0006-KIT Bebidas</option>
                    </select>
                  </div>
                  <hr>
                   <div class="form-group col-md-3">
                    <label>Tempo Producao:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_qtde_horas" placeholder="Digite qtde. horas" required>
                  </div>      
                  <div class="row">
                  <div class="form-group col-md-8">
                <input type="submit" class="btn btn-primary" name="btn_enviar" value="Cadastrar">
            </form>
        </div><!--Fechando container bootstrap-->
  <?php include("dep_query.php");?>     
  </body>
</html>

