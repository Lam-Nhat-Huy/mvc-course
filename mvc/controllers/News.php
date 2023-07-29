<?php
class News extends Controller
{
    function Default()
    {
        $nameList = $this->model('SinhVienModel');
        echo $nameList->getSV();
    }
    function getWebsiteUrl()
    {
        $website = $this->model('SinhVienModel');
        echo $website->getWebsiteUrl();
    }
}
