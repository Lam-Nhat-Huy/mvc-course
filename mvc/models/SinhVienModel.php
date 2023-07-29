<?php
class SinhVienModel
{
    public function GetSV()
    {
        return 'Lam Nhat Huy';
    }

    public function getImageUrl()
    {
        $image_url = 'https://c4.wallpaperflare.com/wallpaper/246/739/689/digital-digital-art-artwork-illustration-abstract-hd-wallpaper-thumb.jpg';
        return '
        <img src="' . $image_url . '" alt="My Image">
        ';
    }
}
