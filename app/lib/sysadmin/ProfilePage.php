<?php

namespace sysadmin;

use system\mvc\PageController;

/**
 * Class LoginPage
 * @author Maylon Vinicius
 */

class ProfilePage extends PageController
{
    public function __construct()
    {
        parent::__construct($this, "Profile");

        $this->initializeMenu();
        $this->display($this);
    }
}