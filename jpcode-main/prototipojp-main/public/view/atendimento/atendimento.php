<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=logout" />
    <link rel="stylesheet" href="bs-stepper.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Atendimento - Hotel Winner</title>
    <script src="atendimentoScript.js"></script>
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <!-- Passos 1, 2, 3... Talvez precise remover, peguei um CSS que achei no GitHub  https://github.com/Johann-S/bs-stepper/tree/v1.7.0#how-to-use-it -->
    <div class="bs-stepper py-3 ">
        <div class="bs-stepper-header" id="stepper1" role="tablist">
            <!-- Passo 1 -->
            <div class="step" data-target="#information-part">
            <button type="button" class="step-trigger" role="tab">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label">Cadastro</span>
            </button>
            </div>
            <div class="line"></div>
            <!-- Passo 2 -->
            <div class="step" data-target="#information-part">
            <button type="button" class="step-trigger" role="tab">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label">Agendamento</span>
            </button>
            </div>
            <div class="line"></div>
            <!-- Passo 3 -->
            <div class="step" data-target="#information-part">
            <button type="button" class="step-trigger" role="tab">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label">Resumo</span>
            </button>
            </div>
        </div>
        <div class="bs-stepper-content">


        <!-- Formulario 1: Ficha de hospedagem -->
        <form>
        <div class="card-group" style="width: 50rem">
            <!-- Lado esquerdo -->
            <div class="card" style="width: 10rem; border-right: none;">
                <div class="card-body">
                    <h5 class="card-title">Ficha de hospedagem</h5>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nome completo*</label>
                        <input type="text" class="form-control" id="nameInput">
                    </div>
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Data de nascimento*</label>
                        <input type="date" class="form-control" id="dateInput">
                    </div>
                    <div class="mb-3">
                        <label for="payInput" class="form-label">Fiador*</label>
                        <input type="text" class="form-control" id="payInput">
                    </div>
                    <div class="mb-3">
                        <label for="contInput" class="form-label">Contato*</label>
                        <input type="text" class="form-control" id="contInput">
                    </div>
                </div>
            </div>
            <!-- Lado direito -->
            <div class="card" style="width: 10rem; border-left: none;">
                <div class="card-body">
                <h5 class="card-title"><br></h5>
                    <div class="mb-3 row">
                        <div class="col-lg-9"><label for="qntInput" class="form-label">Quantidade de hóspedes*</label></div>
                        <div class="col-lg-3"><input type="number" class="form-control" min=1 max=9 default=1 id="qntInput" onchange="changeQnt()"></div>
                    </div>
                    <br>
                    <div class="mb-3">
                    <label for="typeInput" class="form-label">Tipo de documento*</label>
                    <select id="typeInput" class="form-select" onchange="clearDoc('docInput')" aria-label="Tipo de documento">
                        <option selected disabled>Selecione</option>
                        <option value="1">RG</option>
                        <option value="2">CPF</option>
                        <option value="3">Passaporte</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="docInput" class="form-label">Número do Documento*</label>
                        <input type="number" class="form-control" id="docInput">
                    </div>
                    <div class="mb-3">
                        <label for="obsInput" class="form-label">Observações</label>
                        <textarea class="form-control" id="obsInput" rows="3"></textarea>
                    </div>
                </div>
                </div>
            </div>
        </form>
        </div>

         <!-- Ficha do Hóspede 2, aparecer clones dependendo do número de hospedes -->
        <div class="card" style="width: 25rem; margin: 20px">
            <div class="card-body" style="width: 25rem">
                    <h5 class="card-title">Ficha do hóspede 2</h5>
                        <div class="mb-3">
                            <label for="name2Input" class="form-label">Nome completo*</label>
                            <input type="text" class="form-control" id="name2Input">
                        </div>
                        <div class="mb-3">
                        <label for="type2Input" class="form-label">Tipo de documento*</label>
                        <select id="type2Input" class="form-select" onchange="clearDoc('doc2Input')" aria-label="Tipo de documento">
                            <option selected disabled>Selecione</option>
                            <option value="1">RG</option>
                            <option value="2">CPF</option>
                            <option value="3">Passaporte</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="doc2Input" class="form-label">Número do Documento*</label>
                            <input type="number" class="form-control" id="doc2Input">
                        </div>
                        <div class="mb-3">
                            <label for="obsInput" class="form-label">Observações</label>
                            <textarea class="form-control" id="obsInput" rows="3"></textarea>
                        </div>
                    </div>
        </div>
        <button type="submit" class="btn btn-light" id="btnConfirmar">Confirmar</button>
    </div>




<!-- Página 2 -->

    <form>
    <div class="card-group" style="width: 60rem; margin: 20px">
        <div class="card" style="width: 15rem; border-right: none;">
            <div class="card-body" style="width: 15rem">
                <h5 class="card-title">Agendamento</h5>
                <div class="mb-3">
                    <label for="checkInInput" class="form-label">Data de Check-in*</label>
                    <input type="date" class="form-control" id="checkInInput">
                </div>
            </div>
        </div>
        <div class="card" style="width: 15rem; border-left: none;">
            <div class="card-body" style="width: 15rem">
                <h5 class="card-title"><br></h5>
                <div class="mb-3">
                    <label for="checkOutInput" class="form-label">Data de Check-out*</label>
                    <input type="date" class="form-control" id="checkOutInput">
                </div>
            </div>
        </div>
        <div class="card" style="width: 15rem; border-right: none;">
            <div class="card-body" style="width: 15rem">
                <h5 class="card-title"><br></h5>
                <div class="mb-3">
                    <label for="typeRoomInput" class="form-label">Tipo de quarto*</label>
                    <select id="typeRoomInput" class="form-select" aria-label="Tipo de qaurto">
                        <option selected disabled>Selecione</option>
                        <option value="1">Abc</option>
                        <option value="2">Def</option>
                        <option value="3">Ghi</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card" style="width: 15rem; border-left: none;">
            <div class="card-body" style="width: 15rem">
                <h5 class="card-title"><br></h5>
                <div class="mb-3">
                    <label for="obsRoomInput" class="form-label">Observações</label>
                    <textarea class="form-control" id="obsRoomInput" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    </form>
    <br><br><br>
  </body>
</html>
