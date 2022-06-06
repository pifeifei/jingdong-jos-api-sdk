<?php

namespace ARS\Lotus;

interface LtStore
{
    public function add($key, $value);
    public function del($key);
    public function get($key);
    public function update($key, $value);
}
