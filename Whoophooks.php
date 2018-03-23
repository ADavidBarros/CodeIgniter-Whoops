<?php
class WhoopsHooks {
    public function bootWhoops() {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
        $whoops->register();
    var_dump($whoops);

    }

}