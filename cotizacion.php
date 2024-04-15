<?php
include('principal.php');
?>
    <div class="container2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4">Solicitud de Cotización</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="nombres" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" required>
                        </div>
                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccionEmpresa" class="form-label">Dirección de la Empresa</label>
                            <input type="text" class="form-control" id="direccionEmpresa" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción de la Aplicación que Necesita</label>
                            <textarea class="form-control" id="descripcion" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php
 include('footer.php');
 ?>
