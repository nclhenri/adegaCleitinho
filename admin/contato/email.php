<?php
 
require_once('class/email.php');
$contato = new   contatoEmail();
$lista = $contato->ListarContato();
 
//teste
//var_dump($lista)
?>
 
 
 
<div class="ajusteTabela site">
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Id </th>
                <th>Nome </th>
                <th>E-mail </th>
                <th>Telefone </th>
                <th>Mensagem</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ativo</th>
 
            </tr>
 
        </thead>
        <tbody>
            <?php foreach ($lista as  $linha) : ?>
                <tr>
                    <td><?php echo $linha['idContato']; ?></td>
                    <td><?php echo $linha['nomeContato']; ?></td>
                    <td><?php echo $linha['emailContato']; ?></td>
                    <td><?php echo $linha['telContato']; ?></td>
                    <td><?php echo $linha['assuntoContato']; ?></td>
                    <td><?php echo $linha['dataContado']; ?></td>
                    <td><?php echo $linha['horaContado']; ?></td>
                    <td><?php echo $linha['statusContato']; ?></td>
                </tr>
            <?php endforeach; ?>
 
        </tbody>
 
    </table>
</div>