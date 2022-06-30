<?php

namespace App\Traits\Relations\BelongsTos;

/**
 * AffiliationCode BelongsTo Relation
 * 
 */
trait AffiliationCode
{
    /**
     * 関連する所属を取得
     * 
     * @param AffiliationCode 所属
     */
    public function affiliationCode()
    {
        return $this->belongsTo(\App\Models\Codes\AffiliationCode::class)->withDefault(function($model) {
            $model->id = 0;
            $model->name = '';
            $model->abbreviation = '';
        });
    }
}