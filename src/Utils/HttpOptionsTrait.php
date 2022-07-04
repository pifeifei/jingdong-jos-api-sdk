<?php

namespace ACES\Utils;

trait HttpOptionsTrait
{
    protected array $option = [];

    public function option($option, $value)
    {
        $this->option[$option] = $value;
    }

    public function getOption($option)
    {
        return $this->option[$option] ?? null;
    }

    public function options(): array
    {
        return $this->option;
    }
}
