<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="col-3">
        <form action="<?php echo base_url('admin/icecekpost/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label>İçecek Adı</label>
                <input type="text" name="title" required class="form-control">
            </div>
            <div class="form-group">
                <label>İçecek Açıklama</label>
                <input type="text" name="info" required class="form-control">
            </div>
            <div class="form-group">
                <label>İçecek Fiyatı</label>
                <input type="number" min="0" name="price" step="0.01" required class="form-control">
            </div>
            <div class="form-group">
                <label>İçecek Resmi</label>
                <input type="file" name="image" required class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-flat btn-block">İçecek Ekle</button>
            </div>
        </form>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Eklenen İçecekler</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Resim</th>
                        <th style="width: 40px">Fiyat</th>
                        <th>Güncelle</th>
                        <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $say = 1; foreach ($config as $con) { ?> 
                        <tr>
                        <td><?= $say ?></td>
                        <td><?= $con->title ?></td>
                        <td><?= $con->info ?></td>
                        <td><img style="width:75px" src="<?= base_url($con->image); ?>" alt=""></td>
                        <td><span class="badge bg-success"><?= $con->price ?></span></td>
                        <td>Güncelle</td>
                        <td><a href="<?= base_url('admin/iceceksil/'.$con->id); ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
                        </tr>
                        <?php $say++; } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/include/footer'); ?>
