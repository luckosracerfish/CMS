<?php

namespace Yab\Quarx\Models;

use Illuminate\Support\Collection;

class Layout extends Collection
{
    public function value($name) {
        return $this->where('field', $name)->first()->value;
    }
}