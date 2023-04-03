<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php helper::flashDataView('statu'); ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= $params['data']['ad'].' '.$params['data']['soyad'] ?> Müşterisi Düzenleniyor...</h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/musteriler/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Adı</label>
                                <input type="text" class="form-control" name="ad" value="<?= $params['data']['ad']; ?>" placeholder="Müşteri Adı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Soyadı</label>
                                <input type="text" class="form-control" name="soyad" value="<?= $params['data']['soyad']; ?>"  placeholder="Müşteri Soyadı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Şirket</label>
                                <input type="text" class="form-control" name="sirket" value="<?= $params['data']['sirket']; ?>" placeholder="Şirket Adı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" value="<?= $params['data']['email']; ?>" placeholder="Email Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefon</label>
                                <input type="text" class="form-control" name="telefon" value="<?= $params['data']['telefon']; ?>" placeholder="Telefon Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adres</label>
                                <input type="text" class="form-control" name="adres" value="<?= $params['data']['adres']; ?>" placeholder="Adres Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">TC</label>
                                <input type="text" class="form-control" name="tc" value="<?= $params['data']['tc']; ?>" placeholder="TC Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Not</label>
                                <input type="text" class="form-control" name="notu" value="<?= $params['data']['notu']; ?>" placeholder="Notunuzu Yazınız...">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>