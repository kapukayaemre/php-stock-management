<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php helper::flashDataView('statu'); ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Stok Düzenleme Ekranı </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/stok/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Seçimi</label>
                                <select name="urun_id" class="form-control">
                                    <option value="">- Ürün Seçiniz -</option>
                                    <?php foreach ($params['urunler'] as $key => $value): ?>
                                        <option <?= ($value['id'] == $params['data']['urun_id']) ? 'selected' : ''  ?> value="<?= $value['id']; ?>"><?= $value['ad']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Seçimi</label>
                                <select name="musteri_id" class="form-control">
                                    <option value="">- Müşteri Seçiniz -</option>
                                    <?php foreach ($params['musteriler'] as $key => $value): ?>
                                        <option <?= ($value['id'] == $params['data']['musteri_id']) ? 'selected' : '' ?> value="<?= $value['id']; ?>"><?= $value['ad'].' '.$value['soyad']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">İşlem Seçimi</label>
                                <select name="islem_tipi" class="form-control">
                                    <option value="">- İşlem Tipi Seçiniz -</option>
                                    <option <?= $params['data']['islem_tipi'] == 0 ? 'selected': '' ?> value="0">Stok Giriş</option>
                                    <option <?= $params['data']['islem_tipi'] == 1 ? 'selected': '' ?> value="1">Stok Çıkış</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adeti</label>
                                <input type="text" name="adet" class="form-control" value="<?= $params['data']['adet']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Birim Fiyatı</label>
                                <input type="text" name="fiyat" class="form-control" value="<?= $params['data']['fiyat'] ?>">
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