<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Principal</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/pricing.css') }}" rel="stylesheet">
</head>

<body><br>
    <div class="nav justify-content-center">
        <img width="350" height="40" src="{{ asset('assets/images/logogabriel.png') }}">
    </div>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            </div>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h3 class="fw-normal"> <b>
                        218002319 - ANDRADE ORTIZ ESROM OBED
                    </b></h3>
                <h4 class="text-muted"><b>Seleccione Una Opción: </b></h4>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-warning">
                        <div class="card-header py-3 text-white bg-warning border-warning">
                            <h4 class="my-0 fw-normal">Inscripción</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="fs-5 text-muted">Carreras y Periodos</li>
                                <br>
                                <li>187-3 INGENIERÍA INFORMÁTICA SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <a href="{{route('InscripcionCaso1Error')}}" type="button" class="w-100 text-white btn btn-lg btn-warning">Inscribir</a>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>187-2 INGENIERÍA EN SISTEMAS SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <button type="button" class="w-100 text-white btn btn-lg btn-warning">Inscribir</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-danger">
                        <div class="card-header py-3 text-white bg-danger border-danger">
                            <h4 class="my-0 fw-normal">Retiro</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="fs-5 text-muted">Carreras y Periodos</li>
                                <br>
                                <li>187-3 INGENIERÍA INFORMÁTICA SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <a href="{{route('RetiroEscena1')}}" type="button"  class="w-100 btn btn-lg btn-danger">Retirar</a>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>187-2 INGENIERÍA EN SISTEMAS SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <a href="{{route('RetiroEscena1')}}" type="button"  class="w-100 btn btn-lg btn-danger">Retirar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-success">
                        <div class="card-header py-3 text-white bg-success border-success">
                            <h4 class="my-0 fw-normal">Adicion</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="fs-5 text-muted">Carreras y Periodos</li>
                                <br>
                                <li>187-3 INGENIERÍA INFORMÁTICA SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <a href="{{route('AdicionCaso1')}}" type="button"  class="w-100 btn btn-lg btn-success">Adicionar</a>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>187-2 INGENIERÍA EN SISTEMAS SANTA CRUZ 3/2022 SEMESTRAL</li>
                            </ul>
                            <p class="fs-5 text-muted"><b></b></p>
                            <button type="button" class="w-100 btn btn-lg btn-success">Adicionar</button>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy;2023</small>
            </div>
        </footer>

    </div>
</body>

</html>
