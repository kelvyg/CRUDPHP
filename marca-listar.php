<h1>Listar marca</h1>
<?php
    $sql = "SELECT * FROM marca";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p> Encontrou <b>$qtd</b> resultado(s).</P>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print"<tr>";
        print "<th>#</th>";
        print "<th>Nome da marca</th>";
        print"</tr>";
        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->id_marca."</td>";
            print "<td>". $row->nome_marca."</td>";
            print "<td>". $row->nome_marca."</td>";
            print "<td>
                <button onclick =\"location.href='?page=marca-editar&id_marca=".$row->id_marca."';\"class='btn btn-primary'>Editar</button> 

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')
                ){location.href='?page=marca-salvar&acao=excluir&id_marca=".$row->id_marca."';}ELSE{false;}\" class='btn
                btn-danger'>Excluir</button>

            </td>";
            print"</tr>";
        }
        print"</table>";
    }else{
        print "Não encontrou resultado";
    }
?>