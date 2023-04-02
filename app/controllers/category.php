<?php

class category extends controller
{
    public function index(){

        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('categoryModel')->list();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/index',['data' => $data]);
        $this->render('site/footer');

    }
    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/create');
        $this->render('site/footer');
    }

    /* Kategori Eklemek */
    public function send()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if($_POST) {
            $ad = helper::cleaner($_POST['ad']);
            if($ad != ''){
                $ekle = $this->model('categoryModel')->create($ad);
                if($ekle) {
                    helper::flashData('statu', 'Kategori Başarıyla Eklendi');
                    helper::redirect(SITE_URL. '/category/');
                } else {
                    helper::flashData('statu', 'Kategori Eklenemedi!!');
                    helper::redirect(SITE_URL. '/category/create');
                }
            } else {
                helper::flashData('statu', 'Lütfen Tüm Alanları Doldurun');
                helper::redirect(SITE_URL. '/category/create');
            }
        } else {
            exit('Giriş Yok');
        }
    }

    public function edit($id){

        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('categoryModel')->edit($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/edit',['data' => $data]);
        $this->render('site/footer');
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if($_POST) {
            $ad = helper::cleaner($_POST['ad']);
            if($ad != ''){
                $duzenle = $this->model('categoryModel')->update($id,$ad);
                if($duzenle) {
                    helper::flashData('statu', 'Kategori Başarıyla Güncellendi');
                    helper::redirect(SITE_URL. '/category/');
                } else {
                    helper::flashData('statu', 'Kategori Güncellenemedi!!');
                    helper::redirect(SITE_URL. '/category/edit/'.$id);
                }
            } else {
                helper::flashData('statu', 'Lütfen Tüm Alanları Doldurun');
                helper::redirect(SITE_URL. '/category/edit/'.$id);
            }
        } else {
            exit('Giriş Yok');
        }
    }

    public function delete($id){

        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        $delete = $this->model('categoryModel')->delete($id);
        helper::redirect(SITE_URL.'/category');

    }

}