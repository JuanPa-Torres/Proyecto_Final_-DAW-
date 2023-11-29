<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('modelo/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre">
                </div>
                
                <div class="mb-3">
                    <label for="Modalidad" class="form-label">Modalidad</label>
                    <input type="text" class="form-control" name="Modalidad" >
                </div>

                <div class="mb-3">
                    <label for="Año" class="form-label">Año</label>
                    <input type="text" class="form-control" name="Año">
                </div>

                <div class="mb-3">
                    <label for="Gama" class="form-label">Gama</label>
                    <input type="text" class="form-control" name="Gama" >
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>