<?php

/**
 * aReusableSlotTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class aReusableSlotTable extends PluginaReusableSlotTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object aReusableSlotTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('aReusableSlot');
    }
}