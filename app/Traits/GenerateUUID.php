<?php


namespace App\Traits;


use Illuminate\Support\Str;

trait GenerateUUID
{
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if(empty($model->id)) {
                $model->id = Str::uuid();
            }
        });
    }
}
