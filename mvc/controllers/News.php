<?php
class News extends Controller
{
    function Default()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getSV();
    }
    function getWebsiteUrl()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getWebsiteUrl();
    }
}
