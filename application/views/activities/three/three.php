<?php
/**
 * Created by PhpStorm.
 * Project: g4f-php
 * File: one.php
 * User: Nicolai
 * Date: 21/06/2023
 * Time: 22:26
 */

/**
 * @var $ARCHIVE_IN_USE
 * @var $series
 */

$ARCHIVE_IN_USE = 'three.php';
?>

<div class="container">
    <div class="text-center pageTitle">
        <h2>Teste Prático G4F - Nicolai Furtado</h2>
        <h4>Atividade #3 - Números Primos</h4>
    </div>

    <div class="pageReturn">
        <a href="<?=site_url('')?>"><button class="returnButton">Página Inicial</button></a>
    </div>

    <div class="pageContent">
        <h5>Popule um banco de dados MySQL (InnoDB) com dados de pelo menos 3 séries de TV utilizando a seguinte estrutura:</h5>

        <code>
            series_tv -> (id, titulo, canal, genero);<br>
            series_tv_intervalos -> (id_serie_tv, dia_da_semana, horario);
        </code>

        <br>
        <br>

        <h5>
            Usando PHP OOP e JavaScript, escreva um código que informe quando a próxima série
            de TV será exibida levando em consideração a data e hora atuais, ou a partir de uma data
            e hora informados pelo usuário. Opcionalmente, o resultado também pode ser filtrado pela
            série de TV;
        </h5>

        <h5>
            Fatores como usabilidade e agradabilidade do layout serão considerados.
        </h5>
    </div>

    <hr>

    <div class="returnActivityAnswer">

        <?php if(isset($_GET['type'])){ ?>
            <script>
                setTimeout(function(){
                    window.location.href = "<?=site_url('atvThree')?>";
                }, 5000);
            </script>
            <?php if($_GET['type'] == 'warning'){ ?>
                <div class="alert alert-warning" role="alert">
                    <?=$_GET['msg']?>
                </div>
            <?php } ?>

            <?php if($_GET['type'] == 'error'){ ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['msg']?>
                </div>
            <?php } ?>

            <?php if($_GET['type'] == 'success'){ ?>
                <div class="alert alert-success" role="alert">
                    <?=$_GET['msg']?>
                </div>
            <?php } ?>
        <?php } ?>

        <div class="row" style="padding-bottom: 20px;">
            <div class="col-lg-10 col-md-4 col-sm-2">
                <h3>Listagem de Séries de TV</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-2 text-end">
                <button class="btn btn-outline-info" onclick="addSeries('<?=site_url('atvThree/create')?>', 'Adicionar nova série')">+ Série</button>
            </div>
        </div>

        <div class="filter" style="padding-bottom: 20px;">
            <form method="GET" action="<?=site_url('atvThree/filter')?>">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control" value="<?=isset($_GET['title']) ? $_GET['title'] : ''?>" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-outline-success">Filtrar</button>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </form>
        </div>

        <?php if(count($series) == 0) { ?>
            <h3>Nenhum dado encontrado.</h3>
        <?php } else { ?>
            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Canal</th>
                        <th scope="col">Série</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Tempo Restante</th>
                        <th scope="col" width="5%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($series as $s){ ?>
                        <tr>
                            <th scope="row"><?=$s['canal']?></th>
                            <td><?=$s['titulo']?></td>
                            <td><?=$s['genero']?></td>
                            <td><?=remainingDaysAndTime($s['dia_da_semana'], $s['horario'])?><br><small><i><?=dateFormatter($s['dia_da_semana'], 2)?> - <?=$s['horario']?></i></small></td>
                            <td>
                                <i class="fa-solid fa-trash" onclick="deleteSerie('<?=site_url('atvThree/delete')?>', <?=$s['id']?>)">
                                    &nbsp;
                                <i class="fa-solid fa-pencil" onclick="editSerie('<?=site_url('atvThree/edit')?>', <?=$s['id']?>, 'Editar série')">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="systemModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle"></h4>
            </div>
            <div class="modal-body" id="modalInfo"></div>
        </div>
    </div>
</div>