<?php
class App
{
    protected $controller = 'Home';
    protected $action = 'Default';
    protected $params = [];

    function __construct()
    {
        //  [0] => home [1] => show [2] => params
        $arr = $this->UrlProcess();

        // Xử lí controllers [0] => Home (Home/News/Product trong thư mục controllers)
        if (file_exists('./mvc/controllers/' . $arr[0] . '.php')) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        // Khi nhập không đúng controllers thì mặc định trả về $this->controller (protected $controller = 'home)
        require_once './mvc/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Xử lí acction
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Xử lí params
        if ($arr) {
            $this->params = array_values($arr);
        } else {
            $this->params = [];
        }
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    // Lọc khoảng trắng và giấu / trên url
    function UrlProcess()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}
