<?php

namespace App\Models\Codes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 所属コード Model
 * 
 */
class AffiliationCode extends Model
{
    use HasFactory;
    use \App\Traits\Accessors\Groups\CodeTable;

    /**
     * 関連する所属を取得
     * 
     * @param Collection 所属
     */
    public function departmentCodes()
    {
        return $this->belongsToMany(DepartmentCode::class, 'affiliation_departments');
    }
}
