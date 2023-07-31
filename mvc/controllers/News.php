<?php
class News extends Controller
{
    function Default()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getSV();
    }
    function getImageUrl()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getImageUrl();
    }
}
