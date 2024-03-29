<?php

namespace App\Models\Codes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * グループコード Model
 * 
 */
class GroupCode extends Model
{
    use HasFactory;
    use \App\Traits\Accessors\Groups\CodeTable;
}
