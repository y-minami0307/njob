/**
 * ValidationUtil
 * 
 */
class ValidationUtil {

    /**
     * 検証結果 OK
     * 
     */
    static RESULT_OK = 'ok';

    /**
     * 検証結果 ERROR
     * 
     */
    static RESULT_ERROR = 'error';

    /**
     * 検証結果 BLANK
     * 検証対象の値にが未設定時に返却される
     * 
     */
    static RESULT_BLANK = 'blank';

    /**
     * 値が数値のみかの検証を行う
     * 
     * @param {String} name  - 項目名
     * @param {String} value - 検証値
     * @returns {Object} 検証結果 {
     *  result :検証結果を表す値
     *  message:検証結果がNGの場合のメッセージ
     * }
     */
    static numberOnly(name, value) {
        let error = {'result' : ValidationUtil.RESULT_OK, 'message' : ''};

        if (value !== '') {
            if(isNaN(value)) {
                // 値が数値でない
                error.result = ValidationUtil.RESULT_ERROR;
                error.message = MessageUtil.errorNumberOnly(name);
            }
        } else {
            // 検証する値が未設定
            error.result = ValidationUtil.RESULT_BLANK;
            error.message = MessageUtil.errorNotEntered(name);
        }

        return error;
    }

    /**
     * 値が半角英数字かの検証を行う
     * 
     * @param {String} name  - 項目名
     * @param {String} value - 検証値
     * @returns {Object} 検証結果 {
     *  result :検証結果を表す値
     *  message:検証結果がNGの場合のメッセージ
     * }
     */
     static alphaNumeric(name, value) {
        let error = {'result' : ValidationUtil.RESULT_OK, 'message' : ''};

        if (value !== '') {
            let reg = /[^A-Za-z0-9]+/;
            if(reg.test(value)) {
                // 値が半角英数字でない
                error.result = ValidationUtil.RESULT_ERROR;
                error.message = MessageUtil.errorAlphaNumeric(name);
            }
        } else {
            // 検証する値が未設定
            error.result = ValidationUtil.RESULT_BLANK;
            error.message = MessageUtil.errorNotEntered(name);
        }

        return error;
    }

    /**
     * 値が半角英数字かの検証を行う
     * 
     * @param {String} name  - 項目名
     * @param {String} value - 検証値
     * @returns {Object} 検証結果 {
     *  result :検証結果を表す値
     *  message:検証結果がNGの場合のメッセージ
     * }
     */
    static halfWidthCharacter(name, value) {
        let error = {'result' : ValidationUtil.RESULT_OK, 'message' : ''};

        if (value !== '') {
            let reg = /^[^\x01-\x7E\xA1-\xDF]+$/;
            if(reg.test(value)) {
                // 値が半角英数字でない
                error.result = ValidationUtil.RESULT_ERROR;
                error.message = MessageUtil.errorHalfWidthCharacter(name);
            }
        } else {
            // 検証する値が未設定
            error.result = ValidationUtil.RESULT_BLANK;
            error.message = MessageUtil.errorNotEntered(name);
        }

        return error;
    }

    /**
     * メールアドレスの検証を行う
     * 
     * @param {String} name         - メールアドレスの項目名
     * @param {String} mail_address - メールアドレス
     * @returns {Object} 検証結果 {
     *  result :検証結果を表す値
     *  message:検証結果がNGの場合のメッセージ
     * }
     */
    static mailAddress(name, mail_address) {
        let error = {'result' : ValidationUtil.RESULT_OK, 'message' : ''};
        let pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;

        if (mail_address !== '') {
            if (pattern.test(mail_address) == false) {
                // メールアドレスがパターンに一致しない
                error.result = ValidationUtil.RESULT_ERROR;
                error.message = MessageUtil.errorNotMatchPattern(name);
            }
        } else {
            // 検証するメールアドレスが未設定
            error.result = ValidationUtil.RESULT_BLANK;
            error.message = MessageUtil.errorNotEntered(name);
        }

        return error;
    }

    /**
     * パスワードの検証を行う
     * 
     * @param {String} name     - パスワードの項目名
     * @param {String} password - パスワード
     * @returns {Object} 検証結果 {
     *  result :検証結果を表す値
     *  message:検証結果がNGの場合のメッセージ
     * }
     */
    static password(name, password) {
        let error = {'result' : ValidationUtil.RESULT_OK, 'message' : ''};

        if (password !== '') {
            if (password.length < MIN_LENGTH_PASSWORD) {
                // パスワードが8桁未満
                error.result = ValidationUtil.RESULT_ERROR;
                error.message = MessageUtil.errorMinLength(name, MIN_LENGTH_PASSWORD);
            }
        } else {
            // 検証するパスワードが未設定
            error.result = ValidationUtil.RESULT_BLANK;
            error.message = MessageUtil.errorNotEntered(name);
        }

        return error;
    }

}