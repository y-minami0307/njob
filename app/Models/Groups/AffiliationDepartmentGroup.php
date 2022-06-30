<?php

namespace App\Models\Groups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 所属部門グループ Model
 * 
 */
class AffiliationDepartmentGroup extends Model
{
    use HasFactory;

    /**
     * テーブル名
     * 
     * @var string table
     */
    protected $table = 'affiliation_department_groups';
}
