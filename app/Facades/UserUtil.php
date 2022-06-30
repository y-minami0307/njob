<?php

namespace App\Facades;

/**
 * ユーザ 共通処理
 * 
 */
class UserUtil
{

    /**
     * 0埋めしたユーザIDを返却
     * 
     * @param int id ユーザID
     * @return string 0埋めしたユーザID
     */
    public function zeroPaddingId($id)
    {
        return \AppUtil::zeroPadding(\UserConst::MAX_LENGTH_USER_ID, $id);
    }

    /**
     * ページネーション用データを生成し返却
     * 
     * @param Collection collection ページネーションの対象とするCollection
     * @param int    page ページ番号
     * @param int    one_page_data_count 1ページに表示するデータ件数
     * @param string url url
     * @param LengthAwarePaginator ページネーション用データ
     */
    public function getLengthAwarePaginator($collection, $page = 1, $one_page_data_count = \UserConst::ONE_PAGE_DATA_COUNT, $url = '')
    {
        return \AppUtil::getLengthAwarePaginator($collection, $page, $one_page_data_count, $url);
    }

}