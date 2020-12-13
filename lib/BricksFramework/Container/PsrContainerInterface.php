<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

/**
 * @copyright Sumedia 2020 <kontakt@sumedia-webdesign.de>
 * @author Sven Ullmann <kontakt@sumedia-webdesign.de>
 */

namespace BricksFramework\Container;

use Psr\Container\ContainerInterface;

interface PsrContainerInterface extends ContainerInterface
{
    public function set(string $id, $value) : void;
}
