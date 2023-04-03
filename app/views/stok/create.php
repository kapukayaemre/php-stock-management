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
                        <h3 class="box-title"> Yeni Stok Ekle </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/stok/send" method="POST">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Seçimi</label>
                                <select name="urun_id" class="form-control">
                                    <option value="">- Ürün Seçiniz -</option>
                                    <?php foreach ($params['urunler'] as $key => $value): ?>
                                        <option value="<?= $value['id']; ?>"><?= $value['ad']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Seçimi</label>
                                <select name="musteri_id" class="form-control">
                                    <option value="">- Müşteri Seçiniz -</option>
                                    <?php foreach ($params['musteriler'] as $key => $value): ?>
                                        <option value="<?= $value['id']; ?>"><?= $value['ad'].' '.$value['soyad']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">İşlem Seçimi</label>
                                <select name="islem_tipi" class="form-control">
                                    <option value="">- İşlem Tipi Seçiniz -</option>
                                    <option value="0">Stok Giriş</option>
                                    <option value="1">Stok Çıkış</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adeti</label>
                                <input type="text" name="adet" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Birim Fiyatı</label>
                                <input type="text" name="fiyat" class="form-control">
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