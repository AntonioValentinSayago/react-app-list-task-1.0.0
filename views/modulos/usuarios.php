<main id="main" class="main">
    <div class="pagetitle" style="display: flex;">
        <h1>Panel Principal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"></a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
        <div style="margin-left: auto;">
            <button type="button" class="btn btn-primary btn-add"><i class="bi bi-plus me-1"></i>Cliente</button>
            <button type="button" class="btn btn-primary btn-add"><i class="bi bi-plus me-1"></i>Nota</button>
        </div>
    </div><!-- End Page Title -->

    <section class="section dasboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Registro de Notas </h5>
                                <table class="table table-borderless datatable" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">Folio de Nota</th>
                                            <th scope="col">Fecha Entrega</th>
                                            <th scope="col">Saldo</th>
                                            <th scope="col">Deuda</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $usuario): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $usuario->getId(); ?>
                                                </td>
                                                <td>
                                                    <?php echo $usuario->getNombre(); ?>
                                                </td>
                                                <td>
                                                    <?php echo $usuario->getEmail(); ?>
                                                </td>
                                                <td>
                                                    <?php echo $usuario->getDineroCuenta(); ?>
                                                </td>
                                                <td>
                                                    <?php echo $usuario->getTotalPagar(); ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End -->