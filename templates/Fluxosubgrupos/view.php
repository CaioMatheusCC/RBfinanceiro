<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fluxosubgrupo $fluxosubgrupo
 */
?>

<style>
  .del {
    margin-right: 78%;
  }

  .edi {
    margin-right: 2%;
  }

  .tr1 a {

    color: #029BE1;

  }

  .views {
    padding: 50px 50px 50px 50px;
  }

  @media (max-width: 620px) {
    .views {
      padding: 0px;
      padding-top: 50px;
    }


  }
</style>



<div class="container-fluid d-flex align-items-center justify-content-center views">

  <div style="border: green solid 2px; border-radius: 20px;" class="card card-outline container bg-white ">

    <div class="card-header d-sm-flex" style="padding-top: 50px; color: green;">
      <h2 class="card-title" style="color: green;"><?= h($fluxosubgrupo->subgrupo) ?></h2>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <tr>
          <th style="color: green;"><?= __('Subgrupo') ?></th>
          <td class="text-info"><?= h($fluxosubgrupo->subgrupo) ?></td>
        </tr>
        <tr>
          <th style="color: green;"><?= __('Descrição') ?></th>
          <td class="text-info"><?= h($fluxosubgrupo->descricao) ?></td>
        </tr>
        <tr>
          <th style="color: green;"><?= __('Grupo') ?></th>
          <td class="tr1"><?= $fluxosubgrupo->has('fluxogrupo') ? $this->Html->link($fluxosubgrupo->fluxogrupo->grupo, ['controller' => 'Fluxogrupos', 'action' => 'view', $fluxosubgrupo->fluxogrupo->grupo]) : '' ?></td>
        </tr>
        <tr>
          <th style="color: green;"><?= __('N° do Subgrupo') ?></th>
          <td class="text-info"><?= $this->Number->format($fluxosubgrupo->id_fluxosubgrupo) ?></td>
        </tr>
        <tr>
          <th style="color: green;"><?= __('Criado') ?></th>
          <td class="text-info"><?= h($fluxosubgrupo->created->i18nFormat('dd-MM-yyyy', 'UTC')) ?></td>
        </tr>
        <tr>
          <th style="color: green;"><?= __('Modificado') ?></th>
          <td class="text-info"><?= h($fluxosubgrupo->modified->i18nFormat('dd-MM-yyyy', 'UTC')) ?></td>
        </tr>
      </table>
    </div>
    <div class="card-footer bg-white" style="border-radius: 20px;">

      <div style="padding-top: 20px;" class="d-flex bd-highlight mb-3">
        <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete',  $fluxosubgrupo->id_fluxosubgrupo],
          ['confirm' => __('Você quer mesmo deletar {0}?',  $fluxosubgrupo->subgrupo), 'class' => 'del btn btn-sm btn-outline-danger mr-auto p-2 bd-highlight']
        ) ?>

        <?= $this->Html->link(__('Editar'), ['action' => 'edit',  $fluxosubgrupo->id_fluxosubgrupo], ['class' => 'edi btn btn-sm btn-outline-success p-2 bd-highlight']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-sm btn-outline-info p-2 bd-highlight']) ?>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid d-flex align-items-center justify-content-center views">

  <div style="border: green solid 2px; border-radius: 20px;" class="related related-caixaregistros view card container bg-white">

    <div class="card-header d-sm-flex" style="padding-top: 50px;">
      <h3 class="card-title" style="color: green;"><?= __('Relacionados') ?></h3>
      <!-- <div class="card-toolbox">
      <?= $this->Html->link(__('Novo'), ['controller' => 'Fluxocontas', 'action' => 'add'], ['class' => 'btn btn-info btn-sm']) ?>
      <?= $this->Html->link(__('Todos'), ['controller' => 'Fluxocontas', 'action' => 'index'], ['class' => 'btn btn-info btn-sm']) ?>
    </div> -->
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <tr style="color: green;">
          <th><?= __('N° da Conta') ?></th>
          <th><?= __('Conta') ?></th>
          <th><?= __('Descrição') ?></th>
          <th><?= __('Criado') ?></th>
          <th><?= __('Modificado') ?></th>
          <th><?= __('Subgrupo') ?></th>
          <th class="actions"><?= __('Ações') ?></th>
        </tr>
        <?php if (empty($fluxosubgrupo->fluxocontas)) { ?>
          <tr>
            <td colspan="7" class="text-info">
              Não Encontrado!
            </td>
          </tr>
        <?php } else { ?>
          <?php foreach ($fluxosubgrupo->fluxocontas as $fluxocontas) : ?>
            <tr>
              <td class="text-info"><?= h($fluxocontas->id_fluxoconta) ?></td>
              <td class="text-info"><?= h($fluxocontas->conta) ?></td>
              <td class="text-info"><?= h($fluxocontas->descricao) ?></td>
              <td class="text-info"><?= h($fluxocontas->created->i18nFormat('dd-MM-yyyy', 'UTC')) ?></td>
              <td class="text-info"><?= h($fluxocontas->modified->i18nFormat('dd-MM-yyyy', 'UTC')) ?></td>
              <td class="text-info"><?= h($fluxocontas->fluxosubgrupo_id) ?></td>
              <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Fluxocontas', 'action' => 'view', $fluxocontas->id_fluxoconta], ['class' => 'btn btn-xs btn-outline-info']) ?>
                <?= $this->Html->link(__('Editar'), ['controller' => 'Fluxocontas', 'action' => 'edit', $fluxocontas->id_fluxoconta], ['class' => 'btn btn-xs btn-outline-success']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Fluxocontas', 'action' => 'delete', $fluxocontas->id_fluxoconta], ['class' => 'btn btn-xs btn-outline-danger', 'confirm' => __('Você quer mesmo deletar {0}?', $fluxocontas->conta)]) ?>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php } ?>
      </table>
    </div>
  </div>
</div>