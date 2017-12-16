<?php
class ElitSquare_CategoryProducts_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	if (!Mage::getSingleton('customer/session')->isLoggedIn()):
            $this->_redirect('customer/account/login');
            return;
        endif;
        $this->loadLayout();
        $this->renderLayout();
    }
    public function testAction()
    {
        echo "test action";
    }
}

?>