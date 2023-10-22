<?php

namespace IvanPortillo\framework\Container;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private array $services = [];
    public function add(string $id, string|object $concrete = null): void
    {
        if (null === $concrete) {
            if (!class_exists($id)) {
                throw new ContainerException("Service $id could not be found");
            }
            $concrete = $id;
        }
        $this->services[$id] = $concrete;
    }
    public function get(string $id)
    {
       return new $this->services[$id];
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->services);
    }
}