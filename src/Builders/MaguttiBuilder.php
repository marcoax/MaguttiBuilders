<?php

namespace magutti\MaguttiBuilders\Builders;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class LaraCmsBuilder.
 */
class MaguttiBuilder extends Builder
{
    public function status($status)
    {
        return $this->where(config('magutti_builder.status_field'), $status);
    }

    public function active()
    {
        return $this->status(1);
    }

    public function inactive()
    {
        return $this->where(config('magutti_builder.status_field'), '!=', 1)->orWhereNull(config('magutti_builder.status_field'));
    }

    public function published()
    {
        return $this->where(config('magutti_builder.publish_field'), 1);
    }
}
