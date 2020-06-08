<?php

include "conexao.php";

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT em.id_empresa, em.nome, em.email, em.telefone, em.site, es.nome as estado, ci.nome as cidade, em.descricao,
case em.realiza_coleta when 1 then 'Sim' else 'Não' end as realiza_coleta, em.link_logo 
FROM te_empresas em
inner join te_estados as es on es.id_estados = em.estado
inner join te_cidades as ci on ci.id_cidade = em.cidade
where em.cidade = 16 and em.estado = 8 ";

$query = mysqli_query($link, $sql);
$qtd = mysqli_num_rows($query);

while ($linha = mysqli_fetch_assoc($query)) {
?>
    <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="<?= $linha['link_logo']; ?>" alt="logo empresa">
            <div class="card-body">
                <a data-toggle="modal" data-target="#modal<?= $linha['id_empresa']; ?>">
                    <p class="card-text"><?= $linha['nome']; ?></p>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal<?= $linha['id_empresa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?= $linha['nome']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

<?php
}
