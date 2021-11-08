<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lancamento $lancamento
 */
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<?php $this->assign('title', __('Adicionar Lançamento')); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->Html->css('bs-stepper.min.css'); ?>
<?= $this->Html->script('bs-stepper.min.js'); ?>
<div class="contADD container p-5">
    <div id="stepper1" class="carlADD bs-stepper card">
        <div class="bshADD bs-stepper-header">
            <div class="step" data-target="#test-l-1">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">1</span>
                </button>
            </div>
            <div class="linADD line"></div>
            <div class="step" data-target="#test-l-2">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">2</span>
                </button>
            </div>
            <div class="linADD line"></div>
            <div class="step" data-target="#test-l-3">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">3</span>
                </button>
            </div>
            <div class="linADD line"></div>
            <div class="step" data-target="#test-l-4">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">4</span>
                </button>
            </div>
        </div>
        <div class="bscADD bs-stepper-content">
            <?= $this->Form->create($lancamento, ['type' => 'file']) ?>
            <div id="test-l-1" class="bscC content">
                <div class="panel-body">
                    <div class="form-group ">
                        <?= $this->Form->label('Tipo') ?>
                        <?= $this->Form->select('tipo', ['PREVISTO' => 'PREVISTO', 'REALIZADO' => 'REALIZADO'], ['class' => 'form-control tipo', 'empty' => 'SELECIONE']); ?>
                        <span class="span" style="color: #CF6856"></span>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('descricao', ['label' => 'Descrição', 'placeholder' => 'Descrição'], ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('valor', ['label' => 'Valor', 'placeholder' => 'Valor'], ['class' => 'border border-success text-info form-control']); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div id="proximo" class="nextADD btn" onclick="stepper1.next()">Próximo</div>

                </div>
            </div>

            <div id="test-l-2" class="bscC content">
                <div class="panel-body">
                    <div class="form-group">
                        <?= $this->Form->control('data_emissao', ['label' => 'Data de Emissão', 'placeholder' => 'dd/mm/yyyy'], ['class' => 'border border-success text-info form-control dataADD']); ?>
                    </div>
                    <div class="form-group baixa">
                        <?= $this->Form->control('data_baixa', ['label' => 'Data de Baixa', 'placeholder' => 'Data de Baixa'], ['class' => 'border border-success text-info form-control dataADD']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('data_vencimento', ['label' => 'Data de Vencimento', 'placeholder' => 'Data de Vecimento'], ['class' => 'border border-success text-info form-control dataADD']); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="nextADD btn" onclick="stepper1.previous()">Voltar</div>
                    <div class="nextADD btn" onclick="stepper1.next()">Próximo</div>
                </div>
            </div>
            <div id="test-l-3" class="bscC content">
                <div class="panel-body">

                    <div class="form-group">
                        <?= $this->Form->control('grupo', ['options' => $Grupos, 'empty' => 'SELECIONE', 'class' => 'grupo']) ?>
                        <span class="s-grupo"></span>
                    </div>

                    <!-- <div class="form-group tudo">
                          <?= $this->Form->control('fluxoconta_id', ['options' => $tudo, 'empty' => 'SELECIONE', 'class' => 'conta']); ?>
                      </div> -->
                    <div class="form-group select">
                        <label for="" class="l-todos">Conta</label>
                        <select name="" class="todos form-control" id="">
                            <option value="0">SELECIONE</option>
                            <?php
                            foreach ($todos as $t => $todo) :
                            ?>
                                <option value=<?= $t ?>><?= $todo ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group select">
                        <label for="" class="l-entradas d-none">Conta</label>
                        <select name="" class="entradas form-control d-none" id="">
                            <option>SELECIONE</option>
                            <?php
                            foreach ($entradas as $i => $entrada) :
                            ?>
                                <option value=<?= $i ?>><?= $entrada ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="form-group select ">
                        <label for="" class="l-saidas d-none">Conta</label>
                        <select name="" class="saidas form-control d-none" id="">
                            <option>SELECIONE</option>
                            <?php
                            foreach ($saidas as $o => $saida) :
                            ?>
                                <option value=<?= $o ?>><?= $saida ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="nextADD btn" onclick="stepper1.previous()">Voltar</div>
                    <div class="nextADD btn" id="teste" onclick="stepper1.next()">Próximo</div>
                </div>
            </div>
            <div id="test-l-4" class="bscC content">
                <div class="panel-body">
                    <div class="fornecedor form-group">
                        <?= $this->Form->control('fornecedor_id', ['options' => $fornecedores, 'empty' => 'SELECIONE']); ?>
                    </div>
                    <div class="cliente form-group">
                        <?= $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => 'SELECIONE']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('Comprovante', ['type' => 'file'], ['class' => 'file']); ?>
                    </div>
                </div>
                <div class="fooADD d-flex justify-content-between">
                    <div>
                        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'canADD btn']) ?>
                    </div>
                    <div>
                        <div class="nextADD btn" onclick="stepper1.previous()">Voltar</div>
                        <?= $this->Form->button(__('Salvar', ['class' => 'btn pull-right']), ['confirm' => 'Quer mesmo salvar esse lançamento?']) ?>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
        <script>
            var stepper1Node = document.querySelector('#stepper1')
            var stepper1 = new Stepper(document.querySelector('#stepper1'))

            stepper1Node.addEventListener('show.bs-stepper', function(event) {
                console.warn('show.bs-stepper', event)
            })
            stepper1Node.addEventListener('shown.bs-stepper', function(event) {
                console.warn('shown.bs-stepper', event)
            })

            var stepper2 = new Stepper(document.querySelector('#stepper2'), {
                linear: false,
                animation: true
            })
            var stepper3 = new Stepper(document.querySelector('#stepper3'), {
                animation: true
            })
            var stepper4 = new Stepper(document.querySelector('#stepper4'))
        </script>

    </div>
</div>


<script>
    $(".tipo").change(function() {
        $tipo = $(".tipo").val();
        if ($tipo == "PREVISTO") {
            $(".file").addClass('d-none');
            $('.baixa').addClass('d-none');
        } else {
            $(".file").removeClass('d-none');
            $('.baixa').removeClass('d-none');
        }
    });

    $('.grupo').change(function() {
        $grupo = $(".grupo option:selected").text();

        if ($grupo == 'saida') {
            $('.entradas').addClass('d-none')
            $('.l-entradas').addClass('d-none')

            $('.todos').addClass('d-none')
            $('.l-todos').addClass('d-none')

            $('.saidas').removeClass('d-none')
            $('.l-saidas').removeClass('d-none')
            $('.saidas').attr('id', 'fluxoconta-id').attr('name', 'fluxoconta_id')

            $('#teste').attr('onclick', 'stepper1.next()')
            $('.s-grupo').text(' ')

        } else if ($grupo == 'entrada') {
            $('.saidas').addClass('d-none')
            $('.l-saidas').addClass('d-none')

            $('.todos').addClass('d-none')
            $('.l-todos').addClass('d-none')

            $('.entradas').removeClass('d-none')
            $('.l-entradas').removeClass('d-none')
            $('.entradas').attr('id', 'fluxoconta-id').attr('name', 'fluxoconta_id')

            $('#teste').attr('onclick', 'stepper1.next()')
            $('.s-grupo').text(' ')
        } else {
            $('.saidas').addClass('d-none');
            $('.l-saidas').addClass('d-none')

            $('.entradas').addClass('d-none');
            $('.l-entradas').addClass('d-none')

            $('.todos').removeClass('d-none');
            $('.l-todos').removeClass('d-none')


        }

    });


    $('.entradas').change(function() {
        $tipo = $(".entradas option:selected").text();
        if ($tipo.indexOf('Cliente') != -1) {
            $('.cliente').removeClass('d-none')
            $('.fornecedor').addClass('d-none');

        } else {
            $('.cliente').addClass('d-none');
            $('.fornecedor').addClass('d-none');
        }

    });


    $('.saidas').change(function() {
        $tipo = $(".saidas option:selected").text();

        if ($tipo.indexOf('Fornecedor') != -1) {

            $('.cliente').addClass('d-none')
            $('.fornecedor').removeClass('d-none');

        } else {
            $('.cliente').addClass('d-none');
            $('.fornecedor').addClass('d-none');
        }
    });


    $('.tipo').change(function() {
        $tipo = $('.tipo').val();
        try {
            const response = axios.get('/caixas/getCaixaaberto').then(function(response) {
                if ((response.data !== true) && ($tipo !== 'PREVISTO')) {
                    $('.span').text('Caixa Fechado');
                    $('#proximo').removeAttr('onclick')
                } else {
                    $('.span').text(' ');
                    $('#proximo').attr('onclick', 'stepper1.next()');
                }
            })
        } catch (error) {
            console.log(error);
        }

    })


    function grupo($grupo) {
        $grupo = $grupo;
        if ($grupo == 0) {
            $('#teste').removeAttr('onclick')
            $('.todos').prop('disabled', true);
        }

        $('#teste').click(function() {
                if ($grupo == 0) {
                    $('.s-grupo').text('Campo Obrigatório')
                } else {
                    $('.s-grupo').text(' ')
                }
            })
    }

    $('.grupo').ready(function() {
        $grupo = $('.grupo').val();
        grupo($grupo)
    })

    $('.grupo').change(function() {
        $grupo = $('.grupo').val();
        grupo($grupo)
    })
</script>
