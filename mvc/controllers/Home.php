<?php
class Home extends Controller
{
    function Default()
    {
        $model = $this->model('SinhVienModel');
        echo $model->getSV();
    }

    function getImageUrl()
    {
        $model = $this->model('SinhVienModel');
        $images = $model->getImageUrl();
        $this->view('master1', [
            'Pages' => 'contact',
            'Images' => $images,
            'Student' => $model->getStudent()
        ]);
    }
    function getStudent()
    {
        $model = $this->model('SinhVienModel');
        $student = $model->getStudent();
        $this->view('master1', [
            'Pages' => 'home',
            'Student' => $student
        ]);
    }
}
