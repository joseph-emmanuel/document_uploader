<?php
    //Core class
    class Core
    {
        protected $currentController='Pages';
        protected $currentMethod='index';
        protected $params=[];
        public function __construct()
        {
            
            // print_r($this->getUrl());
        }

        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url=rtrim($_GET['url'], '/');//will remove all the unwanted '/' from the url

                $url=filter_var($url, FILTER_SANITIZE_URL);//will not allow any symbols to go through the url

                $url=explode('/', $url);
                return $url;
            }
        }
    }
