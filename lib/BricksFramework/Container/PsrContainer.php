<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

declare(strict_types=1);

namespace BricksFramework\Container;

class PsrContainer implements PsrContainerInterface, \IteratorAggregate
{
    protected $stack = [];

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new Exception\NotFoundException("PSR Container has no value with id '$id'");
        }
        return $this->stack[$id];
    }

    /**
     * @return bool
     */
    public function has($id)
    {
        return isset($this->stack[$id]);
    }

    public function set(string $id, $value) : void
    {
        $this->stack[$id] = $value;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($stack = &$this->stack);
    }
}
