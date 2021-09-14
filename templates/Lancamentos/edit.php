<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lancamento $lancamento
 */
?>

<?php $this->assign('title', __('Editar Lançamento')); ?>




<div class="card card-primary card-outline">
  <?= $this->Form->create($lancamento) ?>
  <div class="card-body">
    <?php
    echo $this->Form->label('Tipo');
    echo $this->Form->select('tipo', ['PREVISTO' => 'PREVISTO', 'REALIZADO' => 'REALIZADO'], ['class' => 'form-control']);
    echo $this->Form->control('descricao');
    echo $this->Form->control('valor');
    echo $this->Form->control('data_emissao');
    echo $this->Form->control('data_baixa');
    echo $this->Form->control('data_vencimento');
    echo $this->Form->control('fluxoconta_id', ['options' => $fluxocontas, 'empty' => true]);
    echo $this->Form->control('fornecedor_id', ['options' => $fornecedores, 'empty' => true]);
    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => true]);
    echo $this->Form->control('lancamento_id', ['options' => $lancamentos, 'empty' => true]);
    echo $this->Form->control('dreconta_id', ['options' => $drecontas, 'empty' => true]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Salvar')) ?>
      <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>