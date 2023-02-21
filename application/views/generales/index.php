<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center"><?= $titulo ?></h6>
        </div>
        <div class="card-body text-dark">
            <div class="table-responsive">
                <table id="mitable" class="table table-sm table-bordered text-dark">
                    <thead style="font-size: 15px; background-color:#151618; color:white;">
                        <th style="color:white;">id</th>
                        <th style="color:white;">Nombre</th>
                        <th style="color:white;">Opciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($municipios as $municipio) { ?>
                            <tr>
                                <td><?= $municipio->id_municipio ?></td>
                                <td><?= $municipio->NombreMunicipio ?></td>
                                <td>
                                    <?php foreach ($opciones as $key => $value) {
                                        if ($key == "texto") {
                                            $texto = $value;
                                        } else if ($key == "ruta") {
                                            $ruta = $value; ?>
                                            <a id="<?= $municipio->id_municipio ?>" href="<?= base_url() ?><?= $ruta ?>/<?= $municipio->id_municipio ?>" class="btn btn-success"><?= $texto ?></a>
                                    <?php }
                                    } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#mitable').DataTable();
    });
</script>