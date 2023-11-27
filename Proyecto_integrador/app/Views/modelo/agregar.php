<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('historial_Medico/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="estadoSalud" class="form-label">Estado de Salud</label>
                    <input type="text" class="form-control" name="estadoSalud" id="estadoSalud" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>
                
                <div class="mb-3">
                    <label for="alergias" class="form-label">Alergias</label>
                    <input type="text" class="form-control" name="alergias" id="alergias" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>

                <div class="mb-3">
                    <label for="vacunas" class="form-label">Vacunas</label>
                    <input type="text" class="form-control" name="vacunas" id="vacunas" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>

                <div class="mb-3">
                    <label for="tratamientos" class="form-label">Tratamientos</label>
                    <input type="text" class="form-control" name="tratamientos" id="tratamientos" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>




                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

                

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>