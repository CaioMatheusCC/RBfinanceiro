    <style>
tr > td{
    max-width: 100px;
}

.text-nw{
    padding: 0px;
    margin: 0px;
    white-space: nowrap;
    overflow: auto;
}

.text-nr {
            padding: 0px;
            margin: 0px;
            white-space: nowrap;
            overflow: auto;
            color: #17a2b8;
            font-size: 15px;
        }

.mwtd{
    max-width: 150px;
}

</style>
<div class="container table-responsive">
    <table class="table table-sm table-bordered table-white rounded">
        <thead class="bg-info">
            <tr>
            <th scope="col"><a href= "/relatorios/exportRelatorioGerencial/" style="font-size: 30px;color: white;"><i class="fas fa-file-excel"></i></a></th>
                <?php foreach($obj['header'] as $data): ?>
                    <th scope="col"><?= $data ?></th>
                <?php endforeach; ?>
                <th scope="col">Total</th>
            </tr>

        </thead>
        <thead >
            <tr>
            <th scope="row" class="bg-info"><p class="text-nw">Entradas: </p></th>
                <?php foreach($obj['total']['entradas'] as $t):
                    if($t<0){?>
                      <td class="text-danger"><?= $t ?></td>
                      <?php }else if($t>0){?>
                        <td class="text-success"><?= $t ?></td>
                        <?php }else{ ?>
                            <td class="text-info"><?= $t ?></td>
                            <?php } endforeach; ?>
                        </tr>
                    </thead>
                    <tbody class="text-success">
                    <?php
                        foreach($obj['rows']['td'] as $valor):
                            if(in_array($valor[0], $obj['rows']['th']['entradas'])){
                            ?>
                                <tr>
                                <th scope="row" class="bg-white" ><p class="text-nr"><i class="fas fa-angle-right"></i> <?= $valor[0] ?></p></th>
                                    <?php for($i = 1; $i < count($valor); $i++): ?>
                                        <td><?= $valor[$i] ?></td>
                                    <?php endfor; ?>
                                </tr>
                            <?php
                            }
                        endforeach;
                    ?>
                    </tbody>
                    <thead>
                        <tr>
                        <th scope="row" class="bg-info"><p class="text-nw">Saídas: </p></th>
                            <?php foreach($obj['total']['saidas'] as $t):
                    if($t<0){?>
                      <td class="text-danger"><?= $t ?></td>
                      <?php }else if($t>0){?>
                        <td class="text-success"><?= $t ?></td>
                        <?php }else{ ?>
                            <td class="text-info"><?= $t ?></td>
                            <?php } endforeach; ?>
                        </tr>
                    </thead>
                    <tbody class="text-danger">
                    <?php
                        foreach($obj['rows']['td'] as $valor):
                            if(in_array($valor[0], $obj['rows']['th']['saidas'])){
                            ?>
                                <tr>
                                <th scope="row" class="bg-white" ><p class="text-nr"><i class="fas fa-angle-right"></i> <?= $valor[0] ?></p></th>
                                    <?php for($i = 1; $i < count($valor); $i++): ?>
                                        <td><?= $valor[$i] ?></td>
                                    <?php endfor; ?>
                                </tr>
                            <?php
                            }
                        endforeach;
                    ?>
                    </tbody>
        <thead class="thead-light">
            <tr>
            <th class="bg-info" style="color: white;" scope="row"><p class="text-nw"> Saldo Atual <br> (Entradas - Saídas) </p></th>
                <?php foreach($obj['total']['entradas-saidas'] as $t):
                    if($t<0){?>
                      <td class="text-danger"><?= $t ?></td>
                <?php }else if($t>0){?>
                    <td class="text-success"><?= $t ?></td>
                <?php }else{ ?>
                    <td class="text-info"><?= $t ?></td>
                <?php } endforeach; ?>
            </tr>
        </thead>
    </table>
</div>
