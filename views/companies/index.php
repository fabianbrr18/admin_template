<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=companies&m=create" class="btn btn-primary">Crear nuevo compañia</a>
                        <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>NIT</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
                                        <th>LOGO</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>Pepsi</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="80px" src="data:image/png;base64,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" alt=""></td>
                                        <td>
                                            <a href="?c=companies&m=show" class="btn btn-sm btn-primary">Detalles</a>
                                            <a href="?c=companies&m=edit" class="btn btn-sm btn-primary">Editar</a>
                                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>