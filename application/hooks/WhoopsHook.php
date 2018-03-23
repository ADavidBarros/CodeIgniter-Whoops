<?php
// use Exception as BaseException;
// use Whoops\Handler\PrettyPageHandler;
// use Whoops\Run;
//require_once FCPATH.'vendor/autoload.php';


class WhoopsHook {
    public function bootWhoops() {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
        $whoops->register();
    }
}