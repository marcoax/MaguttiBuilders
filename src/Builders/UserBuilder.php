<?php

namespace magutti\MaguttiBuilders\Builders;
use Carbon\Carbon;

/**
 * Class UserBuilder
 * @package App\maguttiCms\Builders
 */
class UserBuilder extends LaraCmsBuilder
{
    /**
     * @return mixed
     */
    public  function todayUser(){
        return $this->whereDate('created_at',Carbon::today()->toDateString());
    }

    /**
     * @return mixed
     */
    public  function yesterdayUser(){
        return $this->whereDate('created_at',Carbon::yesterday()->toDateString());
    }
}
