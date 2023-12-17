<?php
namespace Contracts;

use Illuminate\Database\Eloquent\Model;

interface EloquentToFAModel
{
    public function makeFromEloquent(Model $model): FAModel;
}
