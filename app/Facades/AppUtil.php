<?php

namespace App\Facades;

use Illuminate\Pagination\LengthAwarePaginator;

/**
 * 共通処理
 * 
 */
class AppUtil
{

    /**
     * 値がNULLまたは空白の場合、Trueを返却
     * 
     * @param string value 文字列
     * @return bool 値がNULLまたは空白：true それ以外：false
     */
    public function isNullOrBlank($value)
    {
        if ($value == null || $value == '')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * 値がNULLの場合、空文字を返却
     * 
     * @param string value 文字列
     * @return string 値がNULL：空文字 値がNULLでない:引数の値
     */
    public function convertNullToString($value)
    {
        if ($value == null)
        {
            return '';
        }
        else
        {
            return $value;
        }
    }

    /**
     * 値がNULLの場合、0を返却
     * 
     * @param int value 数値
     * @return string 値がNULL：0 値がNULLでない:引数の値
     */
    public function convertNullToInt($value)
    {
        if ($value == null)
        {
            return 0;
        }
        else
        {
            return $value;
        }
    }

    /**
     * 配列内の文字を指定の文字で区切り結合して返却
     * 
     * @param array<string> array     配列
     * @param string        delimiter 区切り文字
     * @param string 配列内の文字を指定の文字で区切り結合した値
     */
    public function convertStringArrayToString($array, $delimiter = '')
    {
        $result = '';

        foreach ($array as $string)
        {
            $result.= $string.$delimiter;
        }

        if ($delimiter !== '') $result = rtrim($result);

        return $result;
    }

    /**
     * 値を「〇」マークに変換し返却
     * 
     * @param int value 0 or 1
     * @return string 0：空文字 1：〇
     */
    public function convertFlgMarkCircle($value)
    {
        if ($value == 1)
        {
            return \MarkConst::CIRCLE;
        }
        else
        {
            return '';
        }
    }

    /**
     * 値を指摘桁数で0埋めして返却
     * 
     * @param int length 桁数
     * @param int value  数値
     * @return string 0埋め後の数値
     */
    public function zeroPadding($length, $value)
    {
        return sprintf('%0'.$length.'d', $value);
    }

    /**
     * ページネーション用データを生成し返却
     * 
     * @param Collection collection          ページネーションの対象とするCollection
     * @param int        page                ページ番号
     * @param int        one_page_data_count 1ページに表示するデータ件数
     * @param string     url                 url
     * @param LengthAwarePaginator ページネーション用データ
     */
    public function getLengthAwarePaginator($collection, $page, $one_page_data_count, $url)
    {
        return new LengthAwarePaginator(
            $collection->forPage($page, $one_page_data_count),
            count($collection),
            \PaginationConst::PAGE_NUMBER_COUNT,
            $page,
            array('path' => $url)
        );
    }

}