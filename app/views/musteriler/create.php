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
                        <h3 class="box-title"> Yeni Müşteri Ekle </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/musteriler/send" method="POST">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Adı</label>
                                <input type="text" class="form-control" name="ad" placeholder="Müşteri Adı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Soyadı</label>
                                <input type="text" class="form-control" name="soyad" placeholder="Müşteri Soyadı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Şirket</label>
                                <input type="text" class="form-control" name="sirket" placeholder="Şirket Adı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefon</label>
                                <input type="text" class="form-control" name="telefon" placeholder="Telefon Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adres</label>
                                <input type="text" class="form-control" name="adres" placeholder="Adres Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">TC</label>
                                <input type="text" class="form-control" name="tc" placeholder="TC Yazınız...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Not</label>
                                <input type="text" class="form-control" name="notu" placeholder="Notunuzu Yazınız...">
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