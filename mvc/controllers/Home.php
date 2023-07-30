<?php
class Home extends Controller
{
    function Default()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getSV();
    }

    function getImg()
    {
        $model = $this->model('SinhVienModel');
        $images = $model->getImageUrl();
        $this->view('AoDepViews', [
            'Pages' => 'contact',
            'Student' => $model->getStudent()
        ]);
    }
    function SinhVien()
    {
        $model = $this->model('SinhVienModel');
        $student = $model->getStudent();
        $this->view('AoDepViews', [
            'Pages' => 'news',
            'Student' => $student
        ]);
    }
}
