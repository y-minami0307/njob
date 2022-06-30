<?php

namespace App\Models\Groups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 所属部門 Model
 * 
 */
class AffiliationDepartment extends Model
{
    use HasFactory;

    /**
     * テーブル名
     * 
     * @var string table
     */
    protected $table = 'affiliation_departments';

    /**
     * 関連するグループを取得
     * 
     * @param Collection 所属
     */
    public function groupCodes()
    {
        return $this->belongsToMany(\App\Models\Codes\GroupCode::class, 'affiliation_department_groups');
    }
}
