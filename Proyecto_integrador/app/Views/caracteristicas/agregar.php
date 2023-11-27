<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('direccion/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>
                
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>

                <div class="mb-3">
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" name="calle" id="calle" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>


                <div class="mb-3">
                    <label for="noExterior" class="form-label">Numero Exterior</label>
                    <input type="text" class="form-control" name="noExterior" id="noExterior" >
                    <!--minlength="1" maxlength = "30"required pattern="[a-z - A-Z \s]{1,15}"-->
                </div>

                <div class="mb-3">
                    <label for="cd" class="form-label">CP</label>
                    <input type="text" class="form-control" name="cp" id="cp" >
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