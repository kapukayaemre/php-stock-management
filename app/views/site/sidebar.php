<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= IMG_PATH; ?>/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $this->myUserInfo['name']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menü</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>KATEGORİLER</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= SITE_URL; ?>/category/create"><i class="fa fa-circle-o"></i> Kategori Ekle </a></li>
                    <li><a href="<?= SITE_URL; ?>/category/"><i class="fa fa-circle-o"></i> Kategori Listesi </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>ÜRÜNLER</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= SITE_URL; ?>/urunler/create"><i class="fa fa-circle-o"></i> Ürün Ekle </a></li>
                    <li><a href="<?= SITE_URL; ?>/urunler/"><i class="fa fa-circle-o"></i> Ürün Listesi </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>MÜŞTERİLER</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= SITE_URL; ?>/musteriler/create"><i class="fa fa-circle-o"></i> Müşteri Ekle </a></li>
                    <li><a href="<?= SITE_URL; ?>/musteriler/"><i class="fa fa-circle-o"></i> Müşteri Listesi </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>STOK İŞLEMLERİ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= SITE_URL; ?>/stok/create"><i class="fa fa-circle-o"></i> Stok Ekle </a></li>
                    <li><a href="<?= SITE_URL; ?>/stok/"><i class="fa fa-circle-o"></i> Stok Listesi </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>RAPORLAR</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= SITE_URL; ?>/rapor/urun"><i class="fa fa-circle-o"></i> Ürün Listesi </a></li>
                    <li><a href="<?= SITE_URL; ?>/rapor/musteri"><i class="fa fa-circle-o"></i> Müşteri Listesi </a></li>
                </ul>
            </li>

            <li><a href="<?= SITE_URL; ?>/logout"><i class="fa fa-circle-o text-red"></i> <span>Çıkış</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>