<?php

class urunler extends controller
{
    public function index() {
        $data = $this->model('urunlerModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index',['data' => $data]);
        $this->render('site/footer');
    }

    public function create(){
        $category = $this->model('categoryModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/create',['category' => $category]);
        $this->render('site/footer');
    }

    public function send(){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        if ($_POST) {
            $ad = helper::cleaner($_POST['ad']);
            $kategori_id = intval($_POST['kategori_id']);
            $ozellikler = json_encode($_POST['ozellik']);
            if($ad!='') {
                $insert = $this->model('urunlerModel')->create($ad,$kategori_id,$ozellikler);
                if ($insert) {
                    helper::flashData('statu', 'Ürün Başarıyla Eklendi');
                    helper::redirect(SITE_URL. '/urunler/');
                } else {
                    helper::flashData('statu', 'Ürün Eklenemedi!!');
                    helper::redirect(SITE_URL. '/urunler/create');
                }
            } else {
                helper::flashData('statu', 'Ürün Adı Boş Bırakılamaz');
                helper::redirect(SITE_URL. '/urunler/create');
            }
        } else {
            exit('Giriş Yetkiniz Yok');
        }
    }

}