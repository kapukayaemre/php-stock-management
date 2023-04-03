<?php

class stok extends controller
{
    public function index(){
        if (!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('stokModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stok/index', ['data' => $data]);
        $this->render('site/footer');

    }

    public function create(){
        if (!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        $urunler = $this->model('urunlerModel')->list();
        $musteriler = $this->model('musterilerModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stok/create', ['urunler' => $urunler, 'musteriler' => $musteriler]);
        $this->render('site/footer');

    }

    public function send(){

        if (!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        if($_POST) {
            $urun_id = intval($_POST['urun_id']);
            $musteri_id = intval($_POST['musteri_id']);
            $islem_tipi = intval($_POST['islem_tipi']);
            $adet = intval($_POST['adet']);
            $fiyat = helper::cleaner($_POST['fiyat']);

            if($adet != 0 && $fiyat != "") {
                $insert = $this->model('stokModel')->create($urun_id,$musteri_id,$islem_tipi,$adet,$fiyat);
                if($insert){
                    helper::flashData('statu', 'Stok Başarıyla Eklendi');
                    helper::redirect(SITE_URL. '/stok');
                } else {
                    helper::flashData('statu', 'Stok Eklenemedi!!');
                    helper::redirect(SITE_URL. '/stok/create');
                }
            } else {
                helper::flashData('statu', 'Stok Fiyat ve Adeti Boş Bırakılamaz');
                helper::redirect(SITE_URL. '/stok/create');
            }

        } else {
            exit('Yasaklı Giriş');
        }

    }

    public function edit($id){
        if (!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('stokModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stok/edit', ['data' => $data]);
        $this->render('site/footer');
    }

    public function update($id){

    }

    public function delete($id){

    }

}