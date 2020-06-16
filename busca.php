<?php

include "conexao.php";

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$sql = "SELECT em.id_empresa, em.nome, em.email, em.telefone, em.site, es.nome as estado, ci.nome as cidade, em.descricao,
case em.realiza_coleta when 1 then 'Sim' else 'Não' end as realiza_coleta, em.link_logo, latitude, longitude, mp.frame
FROM te_empresas em
inner join te_estados as es on es.id_estados = em.estado
inner join te_cidades as ci on ci.id_cidade = em.cidade
left join te_mapas as mp on mp.id_empresa = em.id_empresa
where em.cidade = $cidade and em.estado = $estado and em.disponivel = 1";

$query = mysqli_query($link, $sql);
$qtd = mysqli_num_rows($query);

if ($qtd > 0) {

    $i = 0;
    while ($linha = mysqli_fetch_assoc($query)) {
        $i++;
?>
        <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
            <div class="card" style="width: 10rem; height: 10rem;">
                <img class="card-img-top" src="<?= $linha['link_logo']; ?>" alt="logo empresa">
                <div class="card-body">
                    <a href="#" data-toggle="modal" data-target="#modal<?= $linha['id_empresa']; ?>">
                        <p class="card-text"><?= $linha['nome']; ?></p>
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal<?= $linha['id_empresa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle"><?= $linha['nome']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><?= $linha['descricao']; ?></p>
                        <p><strong>Estado: </strong><span><?= $linha['estado']; ?></span></p>
                        <p><strong>Cidade: </strong><span><?= $linha['cidade']; ?></span></p>
                        <p><b>Realiza coleta em domicílio? </b><?= $linha['realiza_coleta']; ?></p>
                        <p><b>Telefone: </b><?= $linha['telefone']; ?></p>
                        <p><b>Email: </b>
                            <?php if ($linha['email'] != null) { ?>
                                </b><a href="<?= $linha['email']; ?>"><?= $linha['email']; ?></a></p>
                            <?php  } else { ?>
                                <span>Não informado</span></p>
                            <?php } ?>
                        <p><b>Site: </b>
                                <?php if ($linha['site'] != null) { ?>
                            </b><a href="<?= $linha['site']; ?>"><?= $linha['site']; ?></a></p>
                        <?php  } else { ?>
                            <span>Não informado</span></p>
                        <?php } ?>
                        
                        <?php if ($linha['frame'] != null) {
                        ?>
                            <p><iframe src="<?= $linha['frame']; ?>" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-fechar" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <div class="col-12 text-center">
        <div class="alert alert-danger" role="alert">
            Ainda não há empresas cadastradas em sua cidade =(
        </div>
    </div>
<?php
}
