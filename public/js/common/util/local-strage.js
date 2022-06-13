/**
 * LocalStarageUtil
 * 
 */
class LocalStarageUtil {

    /**
     * Key
     * 
     */
    static KEY_INITIALIZE = 'initialize';
    static KEY_BASE_SIDE_MENU_STATUS = 'baseSideMenuStatus';

    /**
     * 初期化
     * 
     */
    static initialize() {
        if (LocalStarageUtil.getItem(LocalStarageUtil.KEY_INITIALIZE) == null) {
            // 初期化済フラグ
            LocalStarageUtil.setItem(LocalStarageUtil.KEY_INITIALIZE, 1);
            // サイドメニュー開閉状態
            LocalStarageUtil.setItem(LocalStarageUtil.KEY_BASE_SIDE_MENU_STATUS, 1);
        }
    }

    /**
     * LocalStarageに保存したデータを取得
     * 
     * @param {String} key - キー
     * @returns {*} 取得データ
     */
    static getItem(key) {
        return localStorage.getItem(key);
    }

    /**
     * LocalStarageに保存したデータを数値型で取得
     * @param {String} key - キー
     * @returns {int} 数値型に変換した値 
     *                指定のキーが保存されていない または 数値に変換不可の場合「0」を返却
     */
    static getInt(key) {
        let result = 0;
        let value = LocalStarageUtil.getItem(key);

        if (value !== null) {
            if (Number.isNaN(Number(value)) == false) {
                result = parseInt(value, 10);
            }
        }

        return result;
    }

    /**
     * LocalStarageにデータを保存
     * 
     * @param {String} key - キー
     * @param {*} value    - 値
     */
    static setItem(key, value) {
        localStorage.setItem(key, value);
    }

}