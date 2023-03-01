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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
        font-size: 13px;
    }

    .table-responsive {
        margin: 30px 0;
    }

    .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        border-radius: 3px;
        min-width: 1000px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        min-width: 100%;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 60px;
    }

    table.table tr th:last-child {
        width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }

    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #F44336;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }

    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }

    .custom-checkbox label:before {
        width: 18px;
        height: 18px;
    }

    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }

    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
        padding: 20px 30px;
    }

    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }

    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
        display: inline-block;
    }

    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }

    .modal textarea.form-control {
        resize: vertical;
    }

    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }

    .modal form label {
        font-weight: normal;
    }
</style>
<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#").prop("checked", false);
            }
        });
    });
</script>

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
        <div class="row">
            <h3 class="fw-normal"><b> PPA : <select id="PPA">
                        <option value="65">65</option>
                        <option value="53">53</option>
                        <option value="35">35</option>
                    </select></b>
            </h3>
        </div>
        <main>
            <div class="container-xl" id="miTable">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2><b>Inscripción</b></h2>
                                </div>
                                <br>
                                <button class="btn btn-success" onclick="inscribir()">Guardar materias
                                    grabadas</button>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Grupo</th>
                                <th>Sigla</th>
                                <th>Materia</th>
                                <th>Docente</th>
                                <th>Horario</th>
                                <th>Cantidad Inscritos</th>
                                <th>Accion</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SA</td>
                                    <td id="s" name="s">MAT202</td>
                                    <td>PROB. Y ESTADISTICAS 1</td>
                                    <td>ING. BRAULIO</td>
                                    <td id="h1">L-M-V | 7:00 a 8:00</td>
                                    <td>25/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c1" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SB</td>
                                    <td id="s" name="s">MAT202</td>
                                    <td>PROB. Y ESTADISTICAS 1</td>
                                    <td>ING. CANO</td>
                                    <td id="h2">L-M-V | 8:00 a 9:00</td>
                                    <td>25/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c2" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SB</td>
                                    <td id="s" name="s">MAT205</td>
                                    <td>MET. NUMERICOS</td>
                                    <TD>ING. ENRIQUE</TD>
                                    <td id="h3">L-M-V | 10:00 a 11:00</td>
                                    <td>65/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c3" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SB</td>
                                    <td id="s" name="s">MAT205</td>
                                    <td>MET. NUMERICOS</td>
                                    <TD>ING. JOSE</TD>
                                    <td id="h4">L-M-V | 8:00 a 9:00</td>
                                    <td>65/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c4" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SX</td>
                                    <td id="s" name="s">INF220</td>
                                    <td>ESTRUCT. DE DATOS 1</td>
                                    <td>ING. WINNIPEG</td>
                                    <td id="h5">MT-J | 12:00 a 14:00</td>
                                    <td>75/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c5" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SC</td>
                                    <td id="s" name="s">INF221</td>
                                    <td>PROG. ENSAMBLADOR</td>
                                    <TD>ING. VALENTIN</TD>
                                    <td id="h6">L-M-V | 7:00 a 8:00</td>
                                    <td>45/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c6" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SM</td>
                                    <td id="s" name="s">INF221</td>
                                    <td>PROG. ENSAMBLADOR</td>
                                    <TD>ING. VALENTIN</TD>
                                    <td id="h7">L-M-V | 11:00 a 12:00</td>
                                    <td>45/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c7" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SE</td>
                                    <td id="s" name="s">ADM200</td>
                                    <td>CONTABILIDAD</td>
                                    <TD>LIC. FLORES</TD>
                                    <td id="h8">L-M-V | 9:00 a 10:00</td>
                                    <td>100/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c8" name="mis-checkboxes2">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <label class="mx-auto text-center table-title text-white">Materias de levantamiento:</label>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Grupo</th>
                                    <th>Sigla</th>
                                    <th>Materia</th>
                                    <TH>Docente</TH>
                                    <th>Horario</th>
                                    <th>Cantidad Inscritos</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SA</td>
                                    <td id="s">MAT302</td>
                                    <td>PROB. Y ESTADISTICAS 2</td>
                                    <td>ING. BRAULIO</td>
                                    <td id="h9">L-M-V | 8:00 a 9:00</td>
                                    <td>35/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c9" name="mis-checkboxes">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SB</td>
                                    <td id="s" name="s">INF318</td>
                                    <td>PROG. LOGICA Y FUNCIONAL</td>
                                    <td>ING. VARGAS</td>
                                    <td id="h10">L-M-V | 16:00 a 17:00</td>
                                    <td>15/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c10" name="mis-checkboxes">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SX</td>
                                    <td id="s" name="s">INF310</td>
                                    <td>ESTRUCT. DE DATOS 2</td>
                                    <td>ING. GINO</td>
                                    <td id="h11">L-M-V | 10:00 a 11:00</td>
                                    <td>65/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c11" name="mis-checkboxes">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SC</td>
                                    <td id="s">INF312</td>
                                    <td>BASE DE DATOS 1</td>
                                    <td>ING. VEIZAGA</td>
                                    <td id="h12">L-M-V | 8:00 a 9:00</td>
                                    <td>50/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c12" name="mis-checkboxes">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SE</td>
                                    <td id="s">INF319</td>
                                    <td>LENG. FORMALES</td>
                                    <td>ING. GINO</td>
                                    <td id="h13">L-M-V | 7:00 a 8:00</td>
                                    <td>8/100</td>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c13" name="mis-checkboxes">
                                            <label for=""></label>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-xl" id="miTable2" style="display:none;">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2><b>Boleta de Inscripción</b></h2>
                                </div>
                                <br>

                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr style="display:none;">
                                    <th>Grupo</th>
                                    <th>Sigla</th>
                                    <th>Materia</th>
                                    <TH>Docente</TH>
                                    <th>Horario</th>
                                    <th>Cantidad Inscritos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="1" style="display:none;">
                                    <td>SA</td>
                                    <td id="s" name="s">MAT202</td>
                                    <td>PROB. Y ESTADISTICAS 1</td>
                                    <td>ING. BRAULIO</td>
                                    <td id="h1">L-M-V | 7:00 a 8:00</td>
                                    <td>26/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="2" style="display:none;">
                                    <td>SB</td>
                                    <td id="s" name="s">MAT202</td>
                                    <td>PROB. Y ESTADISTICAS 1</td>
                                    <td>ING. CANO</td>
                                    <td id="h2">L-M-V | 8:00 a 9:00</td>
                                    <td>26/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="3" style="display:none;">
                                    <td>SB</td>
                                    <td id="s" name="s">MAT205</td>
                                    <td>MET. NUMERICOS</td>
                                    <TD>ING. ENRIQUE</TD>
                                    <td id="h3">L-M-V | 10:00 a 11:00</td>
                                    <td>66/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="4" style="display:none;">
                                    <td>SB</td>
                                    <td id="s" name="s">MAT205</td>
                                    <td>MET. NUMERICOS</td>
                                    <TD>ING. JOSE</TD>
                                    <td id="h4">L-M-V | 8:00 a 9:00</td>
                                    <td>66/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="5" style="display:none;">
                                    <td>SX</td>
                                    <td id="s" name="s">INF220</td>
                                    <td>ESTRUCT. DE DATOS 1</td>
                                    <td>ING. WINNIPEG</td>
                                    <td id="h5">MT-J | 12:00 a 14:00</td>
                                    <td>76/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="6" style="display:none;">
                                    <td>SC</td>
                                    <td id="s" name="s">INF221</td>
                                    <td>PROG. ENSAMBLADOR</td>
                                    <TD>ING. VALENTIN</TD>
                                    <td id="h6">L-M-V | 7:00 a 8:00</td>
                                    <td>46/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="7" style="display:none;">
                                    <td>SM</td>
                                    <td id="s" name="s">INF221</td>
                                    <td>PROG. ENSAMBLADOR</td>
                                    <TD>ING. VALENTIN</TD>
                                    <td id="h7">L-M-V | 11:00 a 12:00</td>
                                    <td>46/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="8" style="display:none;">
                                    <td>SA</td>
                                    <td id="s">MAT302</td>
                                    <td>PROB. Y ESTADISTICAS 2</td>
                                    <td>ING. BRAULIO</td>
                                    <td id="h9">L-M-V | 8:00 a 9:00</td>
                                    <td>36/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="9" style="display:none;">
                                    <td>SB</td>
                                    <td id="s" name="s">INF318</td>
                                    <td>PROG. LOGICA Y FUNCIONAL</td>
                                    <td>ING. VARGAS</td>
                                    <td id="h10">L-M-V | 16:00 a 17:00</td>
                                    <td>16/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="10" style="display:none;">
                                    <td>SX</td>
                                    <td id="s" name="s">INF310</td>
                                    <td>ESTRUCT. DE DATOS 2</td>
                                    <td>ING. GINO</td>
                                    <td id="h11">L-M-V | 10:00 a 11:00</td>
                                    <td>66/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="11" style="display:none;">
                                    <td>SC</td>
                                    <td id="s">INF312</td>
                                    <td>BASE DE DATOS 1</td>
                                    <td>ING. VEIZAGA</td>
                                    <td id="h12">L-M-V | 8:00 a 9:00</td>
                                    <td>51/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                                <tr id="12" style="display:none;">
                                    <td>SE</td>
                                    <td id="s">INF319</td>
                                    <td>LENG. FORMALES</td>
                                    <td>ING. GINO</td>
                                    <td id="h13">L-M-V | 7:00 a 8:00</td>
                                    <td>9/100</td>
                                    <td>
                                        <label for="">INS</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="mi-modal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">¡ERROR!</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Error! Por favor, solo elegir MAX. 2 materias de levantamiento</p>
                                <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input onclick="cerrarModal()" type="submit" class="btn btn-danger" value="OK">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="mi-modal2" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">¡ERROR!</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Error! Por favor, elegir 1 materia</p>
                                <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input onclick="cerrarModal2()" type="submit" class="btn btn-danger"
                                    value="OK">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <div id="mi-modalDoble" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Error! Por favor no seleccionar materias iguales</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModalDoble()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mi-modalRaiz" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Error! Por favor, elegir pre-requisito</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModalRaiz()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mi-modalHorario" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>¡Error! Choque de horarios</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModalHorario()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mi-modal53" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Error! Por favor, solo elegir MAX. 1 materias de levantamiento</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModal53()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mi-modal35" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Error! No puede elegir ninguna materia de levantamiento</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModal35()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mi-modalOk" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">¡ERROR!</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Error! Maximo de cupos</p>
                        <p class="text-warning"><small>Esta accion no puede ser realizada.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input onclick="cerrarModalOk()" type="submit" class="btn btn-danger" value="OK">
                    </div>
                </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
    var checkbox1 = document.getElementById("c1");
    var checkbox2 = document.getElementById("c2");
    var checkbox3 = document.getElementById("c3");
    var checkbox4 = document.getElementById("c4");
    var checkbox5 = document.getElementById("c5");
    var checkbox6 = document.getElementById("c6");
    var checkbox7 = document.getElementById("c7");
    var checkbox8 = document.getElementById("c8");
    var checkbox9 = document.getElementById("c9");
    var checkbox10 = document.getElementById("c10");
    var checkbox11 = document.getElementById("c11");
    var checkbox12 = document.getElementById("c12");
    var checkbox13 = document.getElementById("c13");

    function inscribir() {
        var checkboxes = document.getElementsByName("mis-checkboxes");
        var checkboxes2 = document.getElementsByName("mis-checkboxes2");
        var ppa = document.getElementById("PPA");
        var algunoSeleccionado = 0;
        var algunoSeleccionado2 = 0;
        var contador = 0;
        if(checkbox8.checked){
            document.getElementById("mi-modalOk").style.display = "block";
        }
        if (checkbox3.checked && checkbox11.checked) {
            document.getElementById("mi-modalHorario").style.display = "block";
        }
        if (checkbox1.checked && checkbox6.checked) {
            document.getElementById("mi-modalHorario").style.display = "block";
        }
        if (checkbox2.checked && checkbox9.checked) {
            document.getElementById("mi-modalHorario").style.display = "block";
        }
        if (checkbox2.checked && checkbox4.checked) {
            document.getElementById("mi-modalHorario").style.display = "block";
        }
        if (checkbox4.checked && checkbox9.checked) {
            document.getElementById("mi-modalHorario").style.display = "block";
        }
        if (checkbox1.checked && checkbox2.checked) {
            document.getElementById("mi-modalDoble").style.display = "block";
        }
        if (checkbox3.checked && checkbox4.checked) {
            document.getElementById("mi-modalDoble").style.display = "block";
        }
        if (checkbox6.checked && checkbox7.checked) {
            document.getElementById("mi-modalDoble").style.display = "block";
        }
        for (var i = 0; i < checkboxes2.length; i++) {
            if (checkboxes2[i].checked) {
                algunoSeleccionado2 = algunoSeleccionado2 + 1;
            }
        }
        if (algunoSeleccionado2 == 0) {
            document.getElementById("mi-modal2").style.display = "block";
            return;
        }
        if (document.getElementById("PPA").value == "65") {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    algunoSeleccionado = algunoSeleccionado + 1;
                }
            }
            if (algunoSeleccionado > 2) {
                document.getElementById("mi-modal").style.display = "block";
                return;
            }
            if (checkbox9.checked) {
                if (!checkbox1.checked) {
                    document.getElementById("mi-modalRaiz").style.display = "block";
                }
            }
            if (!checkbox5.checked && (checkbox10.checked || checkbox11.checked || checkbox12.checked || checkbox13
                    .checked)) {
                document.getElementById("mi-modalRaiz").style.display = "block";
            } else {
                var miDiv = document.getElementById("miTable");
                miDiv.style.display = "none";
                if (checkbox1.checked) {
                    var miDiv = document.getElementById("1");
                    miDiv.style.display = "block";
                }
                if (checkbox2.checked) {
                    var miDiv = document.getElementById("2");
                    miDiv.style.display = "block";
                }
                if (checkbox3.checked) {
                    var miDiv = document.getElementById("3");
                    miDiv.style.display = "block";
                }
                if (checkbox4.checked) {
                    var miDiv = document.getElementById("4");
                    miDiv.style.display = "block";
                }
                if (checkbox5.checked) {
                    var miDiv = document.getElementById("5");
                    miDiv.style.display = "block";
                }
                if (checkbox6.checked) {
                    var miDiv = document.getElementById("6");
                    miDiv.style.display = "block";
                }
                if (checkbox7.checked) {
                    var miDiv = document.getElementById("7");
                    miDiv.style.display = "block";
                }
                if (checkbox9.checked) {
                    var miDiv = document.getElementById("8");
                    miDiv.style.display = "block";
                }
                if (checkbox10.checked) {
                    var miDiv = document.getElementById("9");
                    miDiv.style.display = "block";
                }
                if (checkbox11.checked) {
                    var miDiv = document.getElementById("10");
                    miDiv.style.display = "block";
                }
                if (checkbox12.checked) {
                    var miDiv = document.getElementById("11");
                    miDiv.style.display = "block";
                }
                if (checkbox13.checked) {
                    var miDiv = document.getElementById("12");
                    miDiv.style.display = "block";
                }
                var miDiv = document.getElementById("miTable2");
                miDiv.style.display = "block";

            }
        }
        if (document.getElementById("PPA").value == "53") {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    algunoSeleccionado = algunoSeleccionado + 1;
                }
            }
            if (algunoSeleccionado > 1) {
                document.getElementById("mi-modal53").style.display = "block";
                return;
            }
            if (!checkbox1.checked && checkbox6.checked) {
                document.getElementById("mi-modalRaiz").style.display = "block";
            } else {
                if (!checkbox5.checked && (checkbox10.checked || checkbox11.checked || checkbox12.checked || checkbox13
                        .checked)) {
                    document.getElementById("mi-modalRaiz").style.display = "block";
                } else {
                    var miDiv = document.getElementById("miTable");
                    miDiv.style.display = "none";
                    if (checkbox1.checked) {
                        var miDiv = document.getElementById("1");
                        miDiv.style.display = "block";
                    }
                    if (checkbox2.checked) {
                        var miDiv = document.getElementById("2");
                        miDiv.style.display = "block";
                    }
                    if (checkbox3.checked) {
                        var miDiv = document.getElementById("3");
                        miDiv.style.display = "block";
                    }
                    if (checkbox4.checked) {
                        var miDiv = document.getElementById("4");
                        miDiv.style.display = "block";
                    }
                    if (checkbox5.checked) {
                        var miDiv = document.getElementById("5");
                        miDiv.style.display = "block";
                    }
                    if (checkbox6.checked) {
                        var miDiv = document.getElementById("6");
                        miDiv.style.display = "block";
                    }
                    if (checkbox7.checked) {
                        var miDiv = document.getElementById("7");
                        miDiv.style.display = "block";
                    }
                    if (checkbox9.checked) {
                        var miDiv = document.getElementById("8");
                        miDiv.style.display = "block";
                    }
                    if (checkbox10.checked) {
                        var miDiv = document.getElementById("9");
                        miDiv.style.display = "block";
                    }
                    if (checkbox11.checked) {
                        var miDiv = document.getElementById("10");
                        miDiv.style.display = "block";
                    }
                    if (checkbox12.checked) {
                        var miDiv = document.getElementById("11");
                        miDiv.style.display = "block";
                    }
                    if (checkbox13.checked) {
                        var miDiv = document.getElementById("12");
                        miDiv.style.display = "block";
                    }


                    var miDiv = document.getElementById("miTable2");
                    miDiv.style.display = "block";
                }
            }
        }
        if (document.getElementById("PPA").value == "35") {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    algunoSeleccionado = algunoSeleccionado + 1;
                }
            }
            if (algunoSeleccionado > 0) {
                document.getElementById("mi-modal35").style.display = "block";
                return;
            }
            if (!checkbox1.checked && checkbox6.checked) {
                document.getElementById("mi-modalRaiz").style.display = "block";
                return;
            } else {
                if (!checkbox5.checked && (checkbox10.checked || checkbox11.checked || checkbox12.checked || checkbox13
                        .checked)) {
                    document.getElementById("mi-modalRaiz").style.display = "block";
                } else {
                    var miDiv = document.getElementById("miTable");
                    miDiv.style.display = "none";
                    if (checkbox1.checked) {
                        var miDiv = document.getElementById("1");
                        miDiv.style.display = "block";
                    }
                    if (checkbox2.checked) {
                        var miDiv = document.getElementById("2");
                        miDiv.style.display = "block";
                    }
                    if (checkbox3.checked) {
                        var miDiv = document.getElementById("3");
                        miDiv.style.display = "block";
                    }
                    if (checkbox4.checked) {
                        var miDiv = document.getElementById("4");
                        miDiv.style.display = "block";
                    }
                    if (checkbox5.checked) {
                        var miDiv = document.getElementById("5");
                        miDiv.style.display = "block";
                    }
                    if (checkbox6.checked) {
                        var miDiv = document.getElementById("6");
                        miDiv.style.display = "block";
                    }
                    if (checkbox7.checked) {
                        var miDiv = document.getElementById("7");
                        miDiv.style.display = "block";
                    }
                    if (checkbox9.checked) {
                        var miDiv = document.getElementById("8");
                        miDiv.style.display = "block";
                    }
                    if (checkbox10.checked) {
                        var miDiv = document.getElementById("9");
                        miDiv.style.display = "block";
                    }
                    if (checkbox11.checked) {
                        var miDiv = document.getElementById("10");
                        miDiv.style.display = "block";
                    }
                    if (checkbox12.checked) {
                        var miDiv = document.getElementById("11");
                        miDiv.style.display = "block";
                    }
                    if (checkbox13.checked) {
                        var miDiv = document.getElementById("12");
                        miDiv.style.display = "block";
                    }


                    var miDiv = document.getElementById("miTable2");
                    miDiv.style.display = "block";
                }
            }
        }
    }
    function cerrarModalOk() {
        document.getElementById("mi-modalOk").style.display = "none";
        return;
    }
    function cerrarModalHorario() {
        document.getElementById("mi-modalHorario").style.display = "none";
        return;
    }

    function cerrarModalRaiz() {
        document.getElementById("mi-modalRaiz").style.display = "none";
        return;
    }

    function cerrarModal() {
        document.getElementById("mi-modal").style.display = "none";
        return;
    }

    function cerrarModal2() {
        document.getElementById("mi-modal2").style.display = "none";
        return;
    }

    function cerrarModal53() {
        document.getElementById("mi-modal53").style.display = "none";
        return;
    }

    function cerrarModal35() {
        document.getElementById("mi-modal35").style.display = "none";
        return;
    }

    function cerrarModalDoble() {
        document.getElementById("mi-modalDoble").style.display = "none";
        return;
    }
</script>

</html>
