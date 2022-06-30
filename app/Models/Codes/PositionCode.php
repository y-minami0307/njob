<?php

namespace App\Models\Codes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 役職コード Model
 * 
 */
class PositionCode extends Model
{
    use HasFactory;
    use \App\Traits\Accessors\Groups\CodeTable;
}
