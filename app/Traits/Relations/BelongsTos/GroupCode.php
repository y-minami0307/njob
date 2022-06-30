<?php

namespace App\Traits\Relations\BelongsTos;

/**
 * GroupCode BelongsTo Relation
 * 
 */
trait GroupCode
{
    /**
     * 関連するグループを取得
     * 
     * @param GroupCode グループ
     */
    public function groupCode()
    {
        return $this->belongsTo(\App\Models\Codes\GroupCode::class)->withDefault(function($model) {
            $model->id = 0;
            $model->name = '';
            $model->abbreviation = '';
        });
    }
}