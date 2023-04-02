<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php if(isset($_SESSION['statu'])) {
                    echo $_SESSION['statu'];
                } ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Yeni Kategori Ekle </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/category/send" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Adı</label>
                                <input type="text" class="form-control" name="ad" placeholder="Kategori Adı Yazınız...">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>