/**
 * MessageUtil
 * 
 */
class MessageUtil {
    
    /**
     * 「{0}を入力してください」のメッセージを返却
     * 
     * @param {String} name - 項目名
     * @returns {String} メッセージ
     */
    static errorNotEntered(name) {
        return ERROR_NOT_ENTERED.replace('{0}', name);
    }

    /**
     * 「{0}は数値のみで入力してください」のメッセージを返却
     * 
     * @param {String} name - 項目名
     * @returns {String} メッセージ
     */
    static errorNumberOnly(name) {
        return ERROR_NUMBER_ONLY.replace('{0}', name);
    }

    /**
     * 「{0}の入力形式が正しくありません」のメッセージを返却
     * 
     * @param {String} name - 項目名
     * @returns {String} メッセージ
     */
    static errorNotMatchPattern(name) {
        return ERROR_NOT_MATCH_PATTERN.replace('{0}', name);
    }

    /**
     * 「{0}は{1}桁以上で入力してください」のメッセージを返却
     * 
     * @param {String} name   - 項目名
     * @param {int}    length - 桁数
     * @returns {String} メッセージ
     */
    static errorMinLength(name, length) {
        let message = ERROR_MIN_LENGTH;
        message = message.replace('{0}', name);
        message = message.replace('{1}', length);
        return message;
    }

    /**
     * 「{0}は半角英数字で入力してください」のメッセージを返却
     * 
     * @param {String} name - 項目名
     * @returns {String} メッセージ
     */
     static errorAlphaNumeric(name) {
        return ERROR_ALPHA_NUMERIC.replace('{0}', name);
    }

    /**
     * 「{0}は半角文字で入力してください」のメッセージを返却
     * 
     * @param {String} name - 項目名
     * @returns {String} メッセージ
     */
    static errorHalfWidthCharacter(name) {
        return ERROR_HALF_WIDTH_CHARACTER.replace('{0}', name);
    }
    
}