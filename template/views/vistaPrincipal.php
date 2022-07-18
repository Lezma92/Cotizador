<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <!-- //inicio de header -->
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Nosotroos</h4>
                        <p class="text-white">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">

                    <strong>Cotizador App</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- //fin del header -->


    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card mb-3 m-1">
                <div class="card-header">
                    <h5>Informacion del cliente</h5>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="txt_nombre" class="form-label">Nombre: </label>
                                    <input type="text" class="form-control" id="txt_nombre" placeholder="Ingrese su nombre">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="txt_empresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="txt_empresa" placeholder="Nombre de la empresa">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="txt_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="txt_email" placeholder="name@example.com">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <div class="col-lg-4 col-12">

        </div>
    </div>



    <!-- //inicio del footer -->
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Cotizador app &copy 2022</p>

        </div>
    </footer>
    <!-- //fin del footer -->

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>