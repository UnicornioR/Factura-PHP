<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.slim.js" defer></script>
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container" >
      <h1>Registro de Factura </h1>
    </div>

    <main>
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-xl-9">
                            <p style="color: #7e8d9f;font-size: 20px;">Factura >> <strong>ID:</strong>
                            <input class="form-label" type="text" id="invoiceNumber" name="invoiceNumber"></p>
                        </div>
                        <div class="col-xl-3 float-end">
                            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                                class="fas fa-print text-primary"></i> Print</a>
                            <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                                class="far fa-file-pdf text-danger"></i> Export</a>
                        </div>
                        <hr>
                    </div>

                    <div class="container">
                        <div class="col-md-12">
                        <div class="text-center">
                            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                            <p class="pt-0"><span style="color:#5d9fc5 ;">Cliente</span></p>
                        </div>

                        </div>


                        <div class="row">
                        <div class="col-xl-8">
                            <ul class="list-unstyled">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="customerName" class="form-label" >Nombres</label>
                                        <input type="text" class="form-control" id="customerName" name="customerName" value="Sam" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="customerSurname" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" id="customerSurname" name="customerSurname" value="Valencia" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Por favor elige un email válido.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="ciudad" class="form-label">Ciudad, País</label>
                                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="Bucaramanga, Colombia" required>
                                        <div class="invalid-feedback">
                                        Por favor provee una ciudad válida.
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fecha" class="form-label">Fecha de factura</label>
                                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                                        <div class="invalid-feedback">
                                        Por favor seleccionar una fecha válida.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="celular" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="celular" name="celular" required>
                                        <div class="invalid-feedback">
                                        Por favor provee un número válido.
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button class="btn btn-primary" type="addHeader">Registrar</button>
                                    </div>
                                </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>    
</body>
</html>