<?php
class musteriler extends controller {

    public function index(){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('musterilerModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('musteriler/index', ['data' => $data]);
        $this->render('site/footer');

    }

    public function create(){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        $this->model('musterilerModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('musteriler/create');
        $this->render('site/footer');
    }

    public function send(){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        if($_POST){
            $ad = helper::cleaner($_POST['ad']);
            $soyad = helper::cleaner($_POST['soyad']);
            $sirket = helper::cleaner($_POST['sirket']);
            $email = helper::cleaner($_POST['email']);
            $telefon = helper::cleaner($_POST['telefon']);
            $adres = helper::cleaner($_POST['adres']);
            $tc = helper::cleaner($_POST['tc']);
            $notu = helper::cleaner($_POST['notu']);

            if($ad != '' && $soyad != '') {
                $insert = $this->model('musterilerModel')->create($ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu);
                if ($insert) {
                    helper::flashData('statu','Müşteri Ekleme Başarılı');
                    helper::redirect(SITE_URL.'/musteriler/');
                } else {
                    helper::flashData('statu','Müşteri Eklenemedi!!');
                    helper::redirect(SITE_URL.'/musteriler/create');
                }
            } else {
                helper::flashData('statu','Lütfen Boş Alan Bırakmayın');
                helper::redirect(SITE_URL.'/musteriler/create');
            }

        } else {
            exit('Erişim Hakkınız Yok');
        }

    }

    public function edit($id){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('musterilerModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('musteriler/edit',['data' => $data]);
        $this->render('site/footer');
    }

    public function update($id){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }
        if($_POST){
            $ad = helper::cleaner($_POST['ad']);
            $soyad = helper::cleaner($_POST['soyad']);
            $sirket = helper::cleaner($_POST['sirket']);
            $email = helper::cleaner($_POST['email']);
            $telefon = helper::cleaner($_POST['telefon']);
            $adres = helper::cleaner($_POST['adres']);
            $tc = helper::cleaner($_POST['tc']);
            $notu = helper::cleaner($_POST['notu']);

            if($ad != '' && $soyad != '') {
                $update = $this->model('musterilerModel')->update($id,$ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu);
                if ($update) {
                    helper::flashData('statu','Müşteri Güncelleme Başarılı');
                    helper::redirect(SITE_URL.'/musteriler/');
                } else {
                    helper::flashData('statu','Müşteri Eklenemedi!!');
                    helper::redirect(SITE_URL.'/musteriler/edit/'. $id);
                }
            } else {
                helper::flashData('statu','Lütfen Boş Alan Bırakmayın');
                helper::redirect(SITE_URL.'/musteriler/edit/'. $id);
            }

        } else {
            exit('Erişim Hakkınız Yok');
        }

    }

    public function delete($id){
        if(!$this->sessionManager->isLogged()){
            helper::redirect(SITE_URL);
            die();
        }

        $this->model('musterilerModel')->delete($id);
        helper::redirect(SITE_URL. '/musteriler');

    }

}