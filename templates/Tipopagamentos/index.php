<!-- <div class="card">
  <div class="card-header">
    <h3 class="card-title">Todos os lançamentos</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead class="nm">
        <tr style="color: green;">

          <th><?= __('Nome') ?></th>
          <th><?= __('Descricao') ?></th>
          <th><?= __('Ações') ?></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($tipopagamentos as $tipopagamento): ?>
            <tr style="color: #029BE1;">

            <td><?= h($tipopagamento->nome) ?></td>
            <td><?= h($tipopagamento->descricao) ?></td>

            <td class="actions">
            <div class="btn-group">
              <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-info', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-success', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Você quer mesmo deletar o tipo de pagamento {0}?', $tipopagamento->nome)]) ?>
            </div>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr style="color: green;">

          <th><?= __('Nome') ?></th>
          <th><?= __('Descricao') ?></th>
          <th><?= __('Ações') ?></th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      columns: [{
          data: 'Nome'
        },
        {
          data: 'Descricao'
        },
        {
          data: 'Ações',
          render: function(data, type, row) {
            return type === 'export' ?
              null :
              data;
          }
        }
      ],
      buttons: [{
          extend: 'copyHtml5',

          exportOptions: {
            orthogonal: 'export',
            columns: function(column, data, node) {
              if (column > 7) {
                return false;
              }
              return true;
            },
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            orthogonal: 'export',
            columns: function(column, data, node) {
              if (column > 7) {
                return false;
              }
              return true;
            },
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            orthogonal: 'export',
            columns: function(column, data, node) {
              if (column > 7) {
                return false;
              }
              return true;
            },
          }
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script> -->
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopagamento[]|\Cake\Collection\CollectionInterface $tipopagamentos
 */
?>

<?php $this->assign('title', __('Tipos de Pagamento') ); ?>
<style>
  .tr1 a{

        color: #029BE1;

    }

    .nm a{
        color: green;
    }
</style>

<div class="container-fluid d-flex align-items-center justify-content-center p-5">
    <div class="card container card-outline bg-white" style="border: green solid 2px; border-radius: 20px;">
        <div class="card-header d-sm-flex" style="padding-top: 50px;">
    <div class="card-toolbox">
      <?= $this->Paginator->limitControl([], null, [
            'label'=>false,
            'class' => 'form-control-sm',
            'style' => 'color: #029BE1; border: 2px solid green;',
          ]); ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <thead class="nm">
          <tr style="color:green;">

              <th class="teste"><?= $this->Paginator->sort('Nome') ?></th>
              <th class="teste"><?= $this->Paginator->sort('Descricao') ?></th>

              <th class="actions teste"><?= __('Ações') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tipopagamentos as $tipopagamento): ?>
            <tr style="color: #029BE1;">

            <td><?= h($tipopagamento->nome) ?></td>
            <td><?= h($tipopagamento->descricao) ?></td>

            <td class="actions">
              <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-info', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-success', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tipopagamento->id_tipopagamento], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Você quer mesmo deletar o tipo de pagamento {0}?', $tipopagamento->nome)]) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->

  <div class="card-footer d-md-flex paginator" style="color: green;">
    <div class="mr-auto" style="font-size:.8rem">
      <?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} Tipos de Pagamentos de {{count}} no total')) ?>
    </div>

    <ul class="pagination pagination-sm">
      <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape'=>false]) ?>
    </ul>

  </div>
  <!-- /.card-footer -->
</div>
