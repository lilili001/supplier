<?php

namespace Modules\Supplier\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['supplier_name','url','support_foreign_ship', 'support_return', 'return_days', 'cat'];
}
