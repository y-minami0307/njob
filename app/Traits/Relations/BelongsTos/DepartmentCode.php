<?php

namespace App\Traits\Relations\BelongsTos;

/**
 * DepartmentCode BelongsTo Relation
 * 
 */
trait DepartmentCode
{
    /**
     * 関連する部門を取得
     * 
     * @param DepartmentCode 部門
     */
    public function departmentCode()
    {
        return $this->belongsTo(\App\Models\Codes\DepartmentCode::class)->withDefault(function($model) {
            $model->id = 0;
            $model->name = '';
            $model->abbreviation = '';
        });
    }
}