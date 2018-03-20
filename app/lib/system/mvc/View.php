<?php

namespace system\mvc;

class View{

    private $compileDir = "";

    private $templateDir = "";

    private $templateFile = "";
    /**
     * @var \Smarty
     */
    private $smarty;

    public function __construct()
    {
        $this->smarty = new \Smarty();
    }

    public function assign($name, $value)
    {
        $this->smarty->assign($name, $value);
    }
    /**
     * @return string
     */
    public function getCompileDir()
    {
        return $this->compileDir;
    }

    /**
     * @param string $compileDir
     */
    public function setCompileDir($compileDir)
    {
        $this->compileDir = $compileDir;
    }

    /**
     * @return string
     */
    public function getTemplateDir()
    {
        return $this->templateDir;
    }

    /**
     * @param string $templateDir
     */
    public function setTemplateDir($templateDir)
    {
        $this->templateDir = $templateDir;
    }

    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->templateFile;
    }

    /**
     * @param string $templateFile
     */
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
    }

    /**
     * @return \Smarty
     */
    public function getSmarty()
    {
        return $this->smarty;
    }

    /**
     * @param \Smarty $smarty
     */
    public function setSmarty($smarty)
    {
        $this->smarty = $smarty;
    }
}