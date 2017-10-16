<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    protected $table = 'scores';

    protected $fillable = ['id', 'score'];
}
