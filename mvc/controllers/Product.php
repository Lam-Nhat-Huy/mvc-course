<?php
class Product extends Controller
{
    public function Default()
    {
        $product = $this->model('SinhVienModel');
        echo $product->getSV();
    }

    public function Create()
    {
        $product = $this->model('SinhVienModel');
        echo $product->GetWebsiteUrl();
    }
}
