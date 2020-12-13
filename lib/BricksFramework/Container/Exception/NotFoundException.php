<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Container\Exception;

use Psr\Container\NotFoundExceptionInterface;
use BricksFramework\Exception\LogicException;

class NotFoundException extends LogicException implements NotFoundExceptionInterface
{
}
