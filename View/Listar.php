<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     include("../controller/produtoController.php");
     $res = produtoController::listarProduto();
     $qtd = $res->rowCount();
     if($qtd>0){
        print "<table class = 'table table-hover table-striped table-bordered'";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome do Produto</th>";
        print "<th>Quantidade</th>";
        print "<th>Tipo</th>";
        print "<th>Valor</th>";
        print "</tr>";
        while($row = $res->fetch(PDO::FETCH_OBJ)){
            print "<tr>";
            print "<td>".$row->nomeProduto."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row->tipo."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
            <button onclick=\"location.href='../view'";

        }
         
     }
     ?>
</body>
</html>