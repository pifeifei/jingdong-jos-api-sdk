<?php

namespace ARS\Lotus;

function C($className)
{
    return LtObjectUtil::singleton($className);
}
