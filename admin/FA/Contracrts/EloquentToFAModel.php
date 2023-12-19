<?php
namespace Contracts;

use FA\Models\AbstractFAModel;
use Illuminate\Database\Eloquent\Model;

interface EloquentToFAModel
{
    public function makeFromEloquent(Model $model): AbstractFAModel;
}
