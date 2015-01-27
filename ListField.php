<?php

namespace Bolt\Extension\Pinpickle\ListType;

use Bolt\Field\FieldInterface;

class ListField implements FieldInterface
{

    public function getName()
    {
        return 'list';
    }

    public function getTemplate()
    {
        return '_list.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default'=>'');
    }

    public function getDecodedValue($value, $fieldinfo) {
        return 'Derp';
    }

}
