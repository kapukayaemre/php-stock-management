<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php helper::flashDataView('statu'); ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Yeni Ürün Ekle </h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/urunler/send" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adı</label>
                                <input type="text" class="form-control" name="ad" placeholder="Ürün Adı Yazınız...">
                            </div>

                            <div class="form-group">
                                <label>Ürün Kategorisi</label>
                                <select name="kategori_id" class="form-control">
                                    <option value="">- Kategori Seçin -</option>
                                    <?php foreach ($params['category'] as $key => $value): ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['ad']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="display: block">Ürün Özellikleri</label>
                                <button id="yeniEkle" class="btn btn-info" type="button">Yeni Özellik Ekle</button>
                            </div>

                            <div id="productProp">

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
<script src="http://stock-management.local/public/bower_components/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready( function () {
        var i = $(".selectProp").length;
        $('#yeniEkle').click(function (){
            var temp = '<div class="col-md-6">' +
                '<label>Ürün Özelliği</label>' +
                '<input type="text" class="form-control selectProp" name="ozellik['+i+'][name]">' +
                '</div>' +
                '' +
                '<div class="col-md-6">' +
                '<label>Değeri</label>' +
                '<input type="text" class="form-control" name="ozellik['+i+'][value]">' +
                '</div>';
            $('#productProp').append(temp);
            i++;
        });
    });
</script>