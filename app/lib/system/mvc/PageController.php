<?php

namespace system\mvc;

use system;

class PageController extends Controller{

    /**
     * @var View
     */
    protected $view;

    private $title;

    private $subTitle;


    public function __construct($class)
    {
        $this->view = new View();
        $this->view->getSmarty()->setTemplateDir("../template/".getNameNamespace($class));
        $this->view->getSmarty()->setCompileDir("../../tmp/templates_c");
    }

    public function display($class)
    {
        $this->view->getSmarty()->display(getNameClass($class).".tpl");
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * @param mixed $subTitle
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }
}