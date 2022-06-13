/**
 * login.js
 * 
 */
$(function(){
    
    /**
     * メールアドレスの入力値
     * 
     * @var {String} m_email
     */
    var m_email = '';

    /**
     * パスワードの入力値
     * 
     * @var {String} m_password
     */
    var m_password = '';

    // イベント設定
    // メールアドレス フォーカスアウト時
    $('#email').on('blur', blurEmail);
    // パスワード フォーカスアウト時
    $('#password').on('blur', blurPassword);
    // ログインフォーム　submit時イベント
    $('#login-form').on('submit', submitLoginForm);

    /**
     * メールアドレス フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurEmail(e) {
        // メールアドレスの検証を実施
        let validation = Validation.mailAddress($('#email').val());
        if (validation.result == Validation.RESULT_ERROR) {
            // 検証結果がNG
            showError($('#email-error'), $('#email-error-message'), validation.message);
        } else if(validation.result == Validation.RESULT_BLANK) {
            if (m_email !== '') {
                // メールアドレス入力⇒メールアドレス未入力をエラーとする
                showError($('#email-error'), $('#email-error-message'), ERROR_NOT_ENTERED_MAIL_ADDRESS);
            }
        } else {
            // 検証結果がOKの場合、エラーメッセージを非表示に設定
            hideError($('#email-error'), $('#email-error-message'));
        }

        // 入力値を保持
        m_email = $('#email').val();
    }

    /**
     * パスワード フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurPassword(e) {
        if ($('#password').val() == '') {
            if (m_password !== '') {
                // パスワード入力⇒パスワード未入力をエラーとする
                showError($('#password-error'), $('#password-error-message'), ERROR_NOT_ENTERED_PASSWORD);
            }
        } else {
            // パスワードが入力されている場合、エラーメッセージを非表示に設定
            hideError($('#password-error'), $('#password-error-message'));
        }

        // 入力値を保持
        m_password = $('#password').val();
    }

    /**
     * ログインフォーム　submit時イベント
     * 
     * @param {Object} e 
     * @returns {boolean} チェック結果 false:NG true:OK
     */
    function submitLoginForm(e) {
        let $email = $('#email');
        let $password = $('#password');
        let validation = true;

        if ($email.val() == '') {
            // メールアドレス未入力
            showError($('#email-error'), $('#email-error-message'), ERROR_NOT_ENTERED_MAIL_ADDRESS);
            validation = false;
        }

        if ($password.val() == '') {
            // パスワード未入力
            showError($('#password-error'), $('#password-error-message'), ERROR_NOT_ENTERED_PASSWORD);
            validation = false;
        }

        return validation;
    }

    /**
     * エラーメッセージを表示する
     * 
     * @param {Object} $error_object         - エラーメッセージを表示するエリアのjQuery Object
     * @param {Object} $error_message_object - エラーメッセージを表示するjQuery Object
     * @param {Object} error_message         - エラーメッセージ
     */
    function showError($error_object, $error_message_object, error_message) {
        $error_object.show();
        $error_message_object.text(error_message);
    }

    /**
     * エラーメッセージを非表示にする
     * 
     * @param {Object} $error_object         - エラーメッセージを表示するエリアのjQuery Object
     * @param {Object} $error_message_object - エラーメッセージを表示するjQuery Object
     */
    function hideError($error_object, $error_message_object) {
        $error_object.hide();
        $error_message_object.text('');
    }

});