<?php

/**
 * greatcoin actions.
 *
 * @package    sf_sandbox
 * @subpackage greatcoin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class core_valueActions extends sfActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        return $this->redirect("core_value/page1");
    }
    public function executePage1()
    {
    }
    public function executePage2()
    {
    }
    public function executePage3()
    {
        return $this->redirect("core_value/page3a");
    }
    public function executePage3a()
    {
    }
    public function executePage3b()
    {
    }
    public function executePage3c()
    {
    }
    public function executePage3d()
    {
    }
    public function executePage3e()
    {
    }
    public function executePage4()
    {
    }
}
