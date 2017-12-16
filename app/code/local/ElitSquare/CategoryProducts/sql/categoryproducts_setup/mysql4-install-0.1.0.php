<?php
/** @var Mage_Eav_Model_Entity_Setup $installer */
$installer = new Mage_Eav_Model_Entity_Setup();
$installer->startSetup();
$installer->addAttribute(
    'catalog_category',
    'display_left_sidebar',
    array(
        'group' => 'General Information',
        'input' => 'select',
        'type' => 'int',
        'source' => 'eav/entity_attribute_source_boolean',
        'label' => 'Display this category product in Left Sidebar',
        'required' => 0,
        'unique' => 0,
        'sort_order' => 3,
        'user_defined' => 1,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    ));
$installer->endSetup();