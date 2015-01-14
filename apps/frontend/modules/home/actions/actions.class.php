<?php

/**
 * home actions.
 *
 * @package    sf_sandbox
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
  }

  public function executeLanguage()
  {
    $this->getUser()->setCulture($this->getRequestParameter('lang'));
    $this->redirect($this->getRequest()->getReferer());
  }
}
