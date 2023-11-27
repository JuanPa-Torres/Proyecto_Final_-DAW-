<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('mascota/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>
                
                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <input type="text" class="form-control" name="especie" id="especie" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control"> <!--required-->
                        <option value="macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" >
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