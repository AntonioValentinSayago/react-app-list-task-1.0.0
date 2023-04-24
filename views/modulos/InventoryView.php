

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
                <a href="nuevoInventario.php"><button type="button" class="btn btn-primary btn-add"><i class="bi bi-plus me-1"></i>Producto</button></a>
                <a href="pdf/inventario.php" target="_target"><button type="button" class="btn btn-danger"><i class="bi bi-filetype-pdf"></i> Generar Reporte</button></a>
            </div>
        </div><!-- End Page Title -->

        <!--Inicio del Section Principal-->
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Control de Inventario </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Código</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col">Existencias</th>
                                                <th scope="col">Etatus</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($productsInventory as $usuario): ?>
                                                <tr>
                                                    <th scope="row"><?php echo $usuario->getIdInventory(); ?></th>
                                                    <th scope="row"><?php echo $usuario->getCodigoProduct(); ?></th>
                                                    <td><?php echo $usuario->getNameProduct(); ?></td>
                                                    <td><?php echo $usuario->getDescription(); ?></td>
                                                    <td><?php echo $usuario->getExistsProduct(); ?></td>
                                                    <td>
                                                        <?php 
                                                            if($usuario->getExistsProduct() >= 10)
                                                            {
                                                               ?><span class="badge bg-success">Disponible</span> <?php
                                                            }
                                                            if($usuario->getExistsProduct() <= 9)
                                                            {
                                                                ?><span class="badge bg-danger">Pocas Existencias</span> <?php
                                                            }
                                                            
                                                        ?>                        
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning" onclick="example()"><i class="bi bi-pencil-square"></i> </span>
                                                        <span class="badge bg-danger" onclick="example()" style="cursor:pointer;"><i class="bi bi-trash-fill"></i> </span>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <script>
        function example()
        {
            Swal.fire({
                icon: 'error',
                title: 'System Error',
                text: 'Intentar más tarde'
            })

        }
    </script>

