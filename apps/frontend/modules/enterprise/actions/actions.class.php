<?php

/**
 * greatcoin actions.
 *
 * @package    sf_sandbox
 * @subpackage greatcoin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class enterpriseActions extends sfActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        return $this->redirect("enterprise/page1");
    }
    public function executePage1()
    {
    }
    public function executePage2()
    {
    }
}
