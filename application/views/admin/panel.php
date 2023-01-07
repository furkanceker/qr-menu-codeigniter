<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>

<div class="row">
    <div class="col-md-6">
        <div class="col-12">
        <form action="<?php echo base_url('admin/ayarlarpost/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label>Site Adı</label>
                <input type="text" name="baslik" required class="form-control" value="<?= $config->baslik; ?>">
            </div>
            <div class="form-group">
                <label>Açıklama</label>
                <input type="text" name="aciklama" required class="form-control" value="<?= $config->aciklama; ?>">
            </div>
            <div class="form-group">
                <label>Çalışma Saatleri</label>
                <input type="text" name="saat" required class="form-control" value="<?= $config->saat; ?>">
            </div>
            <div class="form-group">
                <label>Adres</label>
                <input type="text" name="adres" required class="form-control" value="<?= $config->adres; ?>">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Site Logosu</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Site İcon</label>
                        <input type="file" name="icon" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Facebook</label>
                        <input type="text" name="facebook" required class="form-control" value="<?= $config->facebook; ?>">
                    </div>
                    <div class="col-6">
                        <label>Instagram</label>
                        <input type="text" name="instagram" required class="form-control" value="<?= $config->instagram; ?>">
                    </div>
                    <div class="col-6">
                        <label>Twitter</label>
                        <input type="text" name="twitter" required class="form-control" value="<?= $config->twitter; ?>">
                    </div>
                    <div class="col-6">
                        <label for="phone">Telefon</label>
                        <input type="tel" name="telefon" class="form-control" placeholder="5523310309" pattern="[0-9]{10}" value="<?= $config->telefon; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-flat btn-block">Kaydet</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $this->load->view('admin/include/footer'); ?>
