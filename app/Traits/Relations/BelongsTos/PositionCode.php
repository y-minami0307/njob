<?php

namespace App\Traits\Relations\BelongsTos;

/**
 * PositionCode BelongsTo Relation
 * 
 */
trait PositionCode
{
    /**
     * 関連する役職を取得
     * 
     * @param PositionCode 役職
     */
    public function positionCode()
    {
        return $this->belongsTo(\App\Models\Codes\PositionCode::class)->withDefault(function($model) {
            $model->id = 0;
            $model->name = '';
            $model->abbreviation = '';
        });
    }
}