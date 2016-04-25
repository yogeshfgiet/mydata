<?php

class Etech_Mydata_Model_Mydata extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('mydata/mydata');
    }

    public function loadAllData() {
        $data = $this->getResource()->loadAllData();
        return $data;
    }


    public function deleteByCondition($id) {
        return $this->getResource()->deleteByCondition($id);
    }

    public function updateByCondition($edit_id) {
       
        $data = $this->getResource()->selectByCondition($edit_id);   
        return $data;
    }

}
