<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Stok Listesi</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Ürün Adı</th>
                                        <th>İşlem Tipi</th>
                                        <th>Toplam Fiyat</th>
                                        <th>Düzenle</th>
                                        <th>Kaldır</th>
                                    </tr>
                                    <?php if($params['data']): ?>
                                        <?php foreach ($params['data'] as $key => $value): ?>
                                           <?php $urunler = $this->model('urunlerModel')->getData($value['urun_id']);
                                                if($value['islem_tipi'] == 0) {
                                                    $islem = 'Stok Giriş';
                                                    $toplamFiyat = "-".$value['adet'] * $value['fiyat'];
                                                } else {
                                                    $islem = 'Stok Çıkış';
                                                    $toplamFiyat = "+".$value['adet'] * $value['fiyat'];
                                                }

                                           ?>

                                            <tr>
                                                <td><?= $value['id'];?></td>
                                                <td><?= $urunler['ad']; ?></td>
                                                <td><?= $islem; ?></td>
                                                <td><?= $toplamFiyat; ?>₺</td>
                                                <td><a class="btn btn-warning btn-sm" href="<?= SITE_URL; ?>/stok/edit/<?= $value['id']; ?>">Düzenle</a></td>
                                                <td><a class="btn btn-danger btn-sm" href="<?= SITE_URL; ?>/stok/delete/<?= $value['id']; ?>">Sil</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
    </section>
</div>