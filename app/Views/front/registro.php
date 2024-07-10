 <section class="bg-primary-subtle">
 <div class="container d-flex justify-content-center align-items-center vh-100">
        <form id="frmregistro "class="row g-3 needs-validation bg-custom p-2" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label text-custom">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
                <div class="valid-feedback">
                    Gracias!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label text-custom">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required>
                <div class="valid-feedback">
                    Gracias!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label text-custom">Usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text input-group-text-custom" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Por favor ingrese otro usuario.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label text-custom">Ciudad</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Por favor ingrese una ciudad valida.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label text-custom">País</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Seleccionar...</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Por favor ingrese un país valido.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label text-custom">Codigo Postal</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                    Por favor ingrese un Código Postal valido.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label text-custom" for="invalidCheck">
                        Debe aceptar los terminos y condiciones 
                    </label>
                    <div class="invalid-feedback">
                        Debes aceptar antes de enviar.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary btn-custom" type="submit">Submit form</button>
            </div>
        </form>
    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

