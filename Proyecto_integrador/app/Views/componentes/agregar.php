<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('raza/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>
                
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>


                <div class="mb-3">
                    <label for="origen" class="form-label">Origen</label>
                    <input type="text" class="form-control" name="origen" id="origen" >
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