<?php
class ElitSquare_CategoryProducts_Block_Categoryproducts extends Mage_Core_Block_Template
{

    protected $_productCollection;
    protected function _getProductCollection()
    {
    	$categoryCollection = Mage::getResourceModel('catalog/category_collection');
		$categoryCollection->addAttributeToFilter('display_left_sidebar','1');
		

		if(!empty($categoryCollection))
		{
			$finalProductCollection = array();
			foreach($categoryCollection as $_categoryCollection)
			{
				$category = Mage::getModel('catalog/category')->load($_categoryCollection->getEntityId());
				$productcollection = $category->getProductCollection()->addAttributeToSort('position');
				//echo "<pre>";print_R($productcollection->getData());exit;
				$result = array_merge($finalProductCollection,$productcollection->getData());
				
			}
			$this->_productCollection = $result; 
		}
		
        return $this->_productCollection;
    }
    public function getLoadedProductCollection()
    {
        return $this->_getProductCollection();
    }
    
}
?>