<?php
class Product extends Controller
{
    public function Default()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getSV();
    }

    public function Create()
    {
        $model = $this->model('SinhVienModel');
        echo $model->GetWebsiteUrl();
    }
}
