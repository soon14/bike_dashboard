<?php

namespace Bike\Dashboard\Db\Primary;

use Bike\Dashboard\Db\AbstractEntity;

class User extends AbstractEntity
{
    protected static $pk = 'id';

    protected static $cols = array(
        'id' => null,
    );
}