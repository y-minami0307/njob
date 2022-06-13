/**
 * SelectBoxUtil
 * 
 */
class SelectBoxUtil {

    /**
     * 選択項目を生成し返却
     * 
     * @param {int}    value    - 選択値
     * @param {String} name     - 項目名
     * @param {String} selected - 選択状態
     */
    static getItem(value, name, selected = '') {
        return {
            'value' : value,
            'name' : name,
            'selected' : selected
        }
    }

    /**
     * セレクトボックスに項目を追加
     * 
     * @param {Object} $select_box - セレクトボックス
     * @param {Object} item - 選択項目 {
     *  {int}    value    - 選択値
     *  {String} name     - 項目名
     *  {String} selected - 選択状態
     * }
     */
    static addItem($select_box, item) {
        $select_box.append('<option value="' + item.value + '" ' + item.selected + '>' + item.name + '</option>');
    }

    /**
     * セレクトボックスに項目を追加
     * 
     * @param {Object} $select_box - セレクトボックス
     * @param {array} items - 選択項目 {
     *  {int}    value    - 選択値
     *  {String} name     - 項目名
     *  {String} selected - 選択状態
     * }
     */
    static addItems($select_box, items) {
        items.forEach(function(item) {
            SelectBoxUtil.addItem($select_box, item);
        });
    }

    /**
     * セレクトボックスの項目をクリア
     * 
     * @param {Object} $select_box - セレクトボックス
     * @param {int} start_index - クリアする項目の開始位置
     */
    static clearItems($select_box, start_index) {
        let $options = $select_box.children();

        for (let i = start_index; i < $options.length; i++) {
            // 選択項目を削除
            $($options[i]).remove();
        }
    }

    /**
     * セレクトボックスの項目を全てクリア
     * 
     * @param {Object} $select_box - セレクトボックス
     */
    static clearAllItems($select_box) {
        SelectBoxUtil.clearItems($select_box, 0);
    }

    /**
     * セレクトボックスの項目を先頭以外全てクリア
     * 
     * @param {Object} $select_box - セレクトボックス
     */
    static clearExceptFirstItems($select_box) {
        SelectBoxUtil.clearItems($select_box, 1);
    }

}