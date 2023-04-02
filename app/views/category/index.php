<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Kategori Listesi</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Ad</th>
                                        <th>Düzenle</th>
                                        <th>Kaldır</th>
                                    </tr>
                                    <?php if(count($params['data']) != 0): ?>
                                        <?php foreach ($params['data'] as $key => $value): ?>
                                            <tr>
                                                <td><?= $value['id'];?></td>
                                                <td><?= $value['ad']; ?></td>
                                                <td><a class="btn btn-warning btn-sm" href="<?= SITE_URL; ?>/category/edit/<?= $value['id']; ?>">Düzenle</a></td>
                                                <td><a class="btn btn-danger btn-sm" href="<?= SITE_URL; ?>/category/delete/<?= $value['id']; ?>">Sil</a></td>
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