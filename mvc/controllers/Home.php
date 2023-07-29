<?php
class Home extends Controller
{
    function Default()
    {
        $nameList = $this->model('SinhVienModel');
        echo $nameList->getSV();
    }
    function getImg()
    {
        $model = $this->model('SinhVienModel');
        $images = $model->getImageUrl();
        $this->view('AoDepViews', ['ImageUrl' => $images]);
    }
}
