<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{
    public static function getRandomModelId(string $model)
    {
        $count = $model::query()->count();
        if($count == 0)
        {
            $randomId = $model::factory()->create()->id;
        }
        else
        {
            $randomId = rand(1, $count);
        }
        return $randomId;
    }
}
