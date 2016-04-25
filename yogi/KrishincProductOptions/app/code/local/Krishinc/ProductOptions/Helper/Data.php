<?php
/**
 * Krishinc
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Krishinc Mod
 * @package     Krishinc_ProductOptions
 * @author      Krishinc Core Team
 * @copyright   Copyright (c) 2013 Krishinc (http://www.krishinc.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/* /app/code/local/Krishinc/ProductOptions/Helper/Data.php */
class Krishinc_ProductOptions_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected $_storageModel = null;

    public function  __construct()
    {
        $this->_storageModel = Mage::getSingleton('krishinc_productoptions/storage');
    }

    /**
     * gets options from storage and generates string
     * @param $id
     * @param $code
     * @return string
     */
    public function getConfigurableProductAttributeOptions($id, $code)
    {
        $values = $this->_storageModel->getOptions($id, $code);
        if ($values){
            $DisplayHTML = '';
            $DisplayHTML.="<ul>";
            foreach ($values as $Key => $attributecolor) {
                $product = Mage::getModel('catalog/product')->load($id);
                $childIds = Mage::getModel('catalog/product_type_configurable')->getChildrenIds($product->getId());
                $childProducts = Mage::getModel('catalog/product_type_configurable')->getUsedProducts(null,$product);

                $ResizeImagePath = array();
                foreach($childProducts as $childProduct)
                {   if($Key == $childProduct->getColor() && $childProduct->getSmallImage() !='no_selection'){
                      $ResizeImagePath[$childProduct->getColor()] = Mage::helper('catalog/image')->init($childProduct, 'small_image')->resize(135);
                    }elseif($Key == $childProduct->getColor()){
                    $ResizeImagePath[$childProduct->getColor()] = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN)."frontend/base/default/images/catalog/product/placeholder/thumbnail.jpg";
                    }else{}

                    //$attributes = Mage::getModel('eav/entity_attribute_option')->getCollection()->setStoreFilter()->join('attribute','attribute.attribute_id=main_table.attribute_id', 'attribute_code' );
                    //$attributes->getSelect()->where('tdv.option_id ='.$childProduct->getColor());
                }
                $attributes = Mage::getModel('eav/entity_attribute_option')->getCollection()->setStoreFilter()->join('attribute','attribute.attribute_id=main_table.attribute_id', 'attribute_code');

                foreach ($attributes as $attribute) {
                    if ($attribute->getOptionId() == $Key) {
                        $imgpath = $ResizeImagePath[$attribute->getOptionId()];
                            $DisplayHTML.='<li style="border:1px solid #000000;margin-right:3px;float:left;height:15px;width:15px;" id="'."ProductOptions_".$Key.'"><img style="cursor:pointer;" src="'.$imgpath.'" width="15" height="15" title="'.$attribute->getValue().'"
                            onclick="setnewcookie('."'".$Key."'".','."'".$id."'".','."'".$imgpath."'".')"></li>';

                    }
                }
            }
            $DisplayHTML.="</ul>";
            return $DisplayHTML;
        }
        return '';
    }
}
