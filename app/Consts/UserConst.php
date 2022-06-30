<?php

namespace App\Consts;

/**
 * ユーザ 定数
 * 
 */
class UserConst
{
    /**
     * 項目名 ユーザID
     * 
     * @var string LABEL_NAME_USER_ID
     */
    public const LABEL_NAME_USER_ID = 'ユーザID';

    /**
     * 項目名 ユーザ名
     * 
     * @var string LABEL_NAME_USER_NAME
     */
    public const LABEL_NAME_USER_NAME = 'ユーザ名';

    /**
     * 項目名 メールアドレス
     * 
     * @var string LABEL_NAME_EMAIL
     */
    public const LABEL_NAME_EMAIL = 'メールアドレス';

    /**
     * 項目名 パスワード
     * 
     * @var string LABEL_NAME_PASSWORD
     */
    public const LABEL_NAME_PASSWORD = 'パスワード';

    /**
     * 項目名 パスワード（確認）
     * 
     * @var string LABEL_NAME_PASSWORD_CONFIRMATION
     */
    public const LABEL_NAME_PASSWORD_CONFIRMATION = 'パスワード（確認）';

    /**
     * 項目名 名前
     * 
     * @var string LABEL_NAME_PERSONAL_NAME
     */
    public const LABEL_NAME_PERSONAL_NAME = '名前';

    /**
     * 項目名 名前カナ
     * 
     * @var string LABEL_NAME_PERSONAL_NAME_KANA
     */
    public const LABEL_NAME_PERSONAL_NAME_KANA = '名前カナ';

    /**
     * 項目名 電話番号
     * 
     * @var string LABEL_NAME_PHONE_NUMBER
     */
    public const LABEL_NAME_PHONE_NUMBER = '電話番号';

    /**
     * 項目名 携帯電話番号
     * 
     * @var string LABEL_NAME_MOBILE_PHONE_NUMBER
     */
    public const LABEL_NAME_MOBILE_PHONE_NUMBER = '携帯電話番号';

    /**
     * 項目名 郵便番号
     * 
     * @var string LABEL_NAME_POST_NUMBER
     */
    public const LABEL_NAME_POST_NUMBER = '郵便番号';

    /**
     * 項目名 住所
     * 
     * @var string LABEL_NAME_ADDRESS
     */
    public const LABEL_NAME_ADDRESS = '住所';

    /**
     * 項目名 管理者
     * 
     * @var string LABEL_NAME_ADMIN
     */
    public const LABEL_NAME_ADMIN = '管理者';

    /**
     * 最大桁数 ユーザID
     * 
     * @var int MAX_LENGTH_USER_ID
     */
    public const MAX_LENGTH_USER_ID = 8;

    /**
     * 最大桁数 ユーザ名
     * 
     * @var int MAX_LENGTH_USER_NAME
     */
    public const MAX_LENGTH_USER_NAME = 20;

    /**
     * 最大桁数 メールアドレス
     * 
     * @var int MAX_LENGTH_EMAIL
     */
    public const MAX_LENGTH_EMAIL = 255;

    /**
     * 最大桁数 パスワード
     * 
     * @var int MAX_LENGTH_PASSWORD
     */
    public const MAX_LENGTH_PASSWORD = 255;

    /**
     * 最大桁数 名前
     * 
     * @var int MAX_LENGTH_PERSONAL_NAME
     */
    public const MAX_LENGTH_PERSONAL_NAME = 50;

    /**
     * 最大桁数 名前カナ
     * 
     * @var int MAX_LENGTH_PERSONAL_NAME_KANA
     */
    public const MAX_LENGTH_PERSONAL_NAME_KANA = 100;

    /**
     * 最大桁数 電話番号
     * 
     * @var int MAX_LENGTH_PHONE_NUMBER
     */
    public const MAX_LENGTH_PHONE_NUMBER = 10;

    /**
     * 最大桁数 携帯電話番号
     * 
     * @var int MAX_LENGTH_MOBILE_PHONE_NUMBER
     */
    public const MAX_LENGTH_MOBILE_PHONE_NUMBER = 11;

    /**
     * 最大桁数 郵便番号
     * 
     * @var int MAX_LENGTH_POST_NUMBER
     */
    public const MAX_LENGTH_POST_NUMBER = 7;

    /**
     * 最大桁数 住所
     * 
     * @var int MAX_LENGTH_ADDRESS
     */
    public const MAX_LENGTH_ADDRESS = 255;

    /**
     * 最小桁数 パスワード
     * 
     * @var int MIN_LENGTH_PASSWORD
     */
    public const MIN_LENGTH_PASSWORD = 8;

    /**
     * プレースホルダ ユーザ名
     * 
     * @var string PLACEHOLDER_USER_NAME
     */
    public const PLACEHOLDER_USER_NAME = '例）nihon-tarou';

    /**
     * プレースホルダ メールアドレス
     * 
     * @var string PLACEHOLDER_EMAIL
     */
    public const PLACEHOLDER_EMAIL = '例）nihon-tarou@example.com';

    /**
     * プレースホルダ 名前
     * 
     * @var string PLACEHOLDER_PERSONAL_NAME
     */
    public const PLACEHOLDER_PERSONAL_NAME = '例）日本　太郎';

    /**
     * プレースホルダ 名前カナ
     * 
     * @var string PLACEHOLDER_PERSONAL_NAME_KANA
     */
    public const PLACEHOLDER_PERSONAL_NAME_KANA = '例）ﾆﾎﾝ ﾀﾛｳ';

    /**
     * プレースホルダ 電話番号
     * 
     * @var string PLACEHOLDER_PHONE_NUMBER
     */
    public const PLACEHOLDER_PHONE_NUMBER = '例）0901234567';

    /**
     * プレースホルダ 携帯電話番号
     * 
     * @var string PLACEHOLDER_MOBILE_PHONE_NUMBER
     */
    public const PLACEHOLDER_MOBILE_PHONE_NUMBER = '例）08012345678';

    /**
     * プレースホルダ 郵便番号
     * 
     * @var string PLACEHOLDER_MOBILE_POST_NUMBER
     */
    public const PLACEHOLDER_MOBILE_POST_NUMBER = '例）1111234';

    /**
     * プレースホルダ 住所
     * 
     * @var string PLACEHOLDER_ADDRESS
     */
    public const PLACEHOLDER_ADDRESS = '例）福岡県福岡市中央区1-20　中央コーポ101号';

    /**
     * チェック値 管理者
     * 
     * @var int CHECKED_VALUE_ADMIN
     */
    public const CHECKED_VALUE_ADMIN = \CheckBoxConst::DEFAULT_CHECKED_VALUE;

    /**
     * 未チェック値 管理者
     * 
     * @var int UN_CHECKED_VALUE_ADMIN
     */
    public const UN_CHECKED_VALUE_ADMIN = \CheckBoxConst::DEFAULT_UN_CHECKED_VALUE;

    /**
     * 1ページに表示するデータ件数
     * 
     * @var int ONE_PAGE_DATA_COUNT
     */
    public const ONE_PAGE_DATA_COUNT = \PaginationConst::ONE_PAGE_DATA_COUNT;
}