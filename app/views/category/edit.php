<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php helper::flashDataView('statu'); ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong style="color: darkblue"><?= $params['data']['ad'] ?></strong> Kategorisi Düzenleniyor...  </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/category/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Adı</label>
                                <input type="text" class="form-control" name="ad" value="<?= $params['data']['ad']; ?>" placeholder="Kategori Adı Yazınız...">
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