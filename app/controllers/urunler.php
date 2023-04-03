<?php

class urunler extends controller
{
    public function index() {
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('urunlerModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index',['data' => $data]);
        $this->render('site/footer');
    }

    public function create(){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

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

    public function edit($id){
        $category = $this->model('categoryModel')->list();
        $data = $this->model('urunlerModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/edit',['category' => $category, 'data' => $data]);
        $this->render('site/footer');
    }

    public function update($id){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        if ($_POST) {
            $ad = helper::cleaner($_POST['ad']);
            $kategori_id = intval($_POST['kategori_id']);
            $ozellikler = json_encode($_POST['ozellik']);
            if($ad!='') {
                $insert = $this->model('urunlerModel')->update($id,$ad,$kategori_id,$ozellikler);
                if ($insert) {
                    helper::flashData('statu', 'Ürün Başarıyla Güncellendi');
                    helper::redirect(SITE_URL. '/urunler/edit/'. $id);
                } else {
                    helper::flashData('statu', 'Ürün Eklenemedi!!');
                    helper::redirect(SITE_URL. '/urunler/edit/'. $id);
                }
            } else {
                helper::flashData('statu', 'Ürün Adı Boş Bırakılamaz');
                helper::redirect(SITE_URL. '/urunler/edit/'. $id);
            }
        } else {
            exit('Giriş Yetkiniz Yok');
        }
    }

    public function delete($id){

        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        $this->model('urunlerModel')->delete($id);
        helper::redirect(SITE_URL. '/urunler');

    }



}