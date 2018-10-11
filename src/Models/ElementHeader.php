<?php

namespace ATW\ElementalHeader\Models;

use ATW\ElementalBase\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\Assets\Image;

class ElementHeader extends BaseElement
{
    private static $icon = 'font-icon-block-content';

    private static $db = [
    ];

    private static $has_one = [
        'Image' => Image::class
    ];

    private static $owns = [
        'Image'
    ];

    private static $table_name = 'ElementHeader';

    private static $singular_name = 'header element';

    private static $plural_name = 'header elements';

    private static $description = 'header element';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Header');
    }
}
