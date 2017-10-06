<?php 
    $baseUri = $this->url->getBaseUri();
//    var_dump($status); die;
//    var_dump(in_array('0', $status)); die;
?>
<div class="row">
        <fieldset>
            <legend class="legend-padding">
                Consulta de Pedidos
            </legend>
            <form class="col s12" name="form-pagination" action="" method="post">
                <div class="row">
                    <div class="input-field col s12 m4">
                        <?=Phalcon\Tag::textField(["pedido", "class" => "validate", "id" => "pedido-id"])?>
                        <label for="icon_prefix">Pedido</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <?=Phalcon\Tag::textField(["garcon", "class" => "validate", "id" => "garcon-id"])?>
                        <label for="icon_telephone">Garçon</label>
                    </div>
                    <div class="input-field col s12 m4">
                    <?php
                    echo $this->tag->select([
                        "status[]",
                        App\PedidosStatus::$_status,
                        "using" => array("status_id", "nome"),
                        "class" => 'form-control',
                        'useEmpty' => true,
                        'multiple' => true,
                        'emptyText' => 'Selecione',
                        'emptyValue' => '@'
                        ]);
                    ?>
                    </div>
                </div>
                <div class="row center">
                    <div class="input-field col s12 m4">
                        <?=Phalcon\Tag::textField(["mesa", "class" => "validate", "id" => "mesa-id"])?>
                        <label for="icon_prefix">Mesa</label>
                    </div>
                    <div class="input-field col s12 m8">
                        <input type="reset" name="btn-limpar" class="btn waves-light red" value="Limpar Formulário">
                        <input type="submit" name="btn-pesquisar" class="btn waves-light black" value="Pesquisar">
                    </div>
                </div>
                <input type="hidden" value="<?=$pagination->getPage()?>" name="page-submit" id="page-submit-id">
            </form>
        </fieldset>
</div>
<div class="row">
    <div class="col s12">
        <table class="highlight centered">
        <thead>
          <tr>
              <th>PEDIDO</th>
              <th>MESA</th>
              <th>GARÇON</th>
              <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido) {?>
                <tr>
                    <td><?=$pedido->pedidos_id?></td>
                    <td><?=$pedido->mesa_mesa_id?></td>
                    <td><?=$pedido->login?></td>
                    <td class="uppercase"><?=$pedido->status?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?=$pagination->getPagination();?>
        </tfoot>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('select').material_select();
        
        //select-pages
        //next-page-id
        
    });
</script>