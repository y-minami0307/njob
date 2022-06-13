/**
 * ユーザ作成/編集ページ
 * 
 */
$(function() {

    /**
     * ユーザ名の入力値
     * 
     * @var {String} m_user_name
     */
    var m_user_name = '';

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

    /**
     * パスワード（確認）の入力値
     * 
     * @var {String} m_password_confirmation
     */
    var m_password_confirmation = '';

    // イベント設定
    // ユーザ名 フォーカスアウト時
    $('#user-name').on('blur', blurUserName);
    // メールアドレス フォーカスアウト時
    $('#email').on('blur', blurEmail);
    // パスワード フォーカスアウト時
    $('#password').on('blur', blurPassword);
    // パスワード（確認） フォーカスアウト時
    $('#password-confirmation').on('blur', blurPasswordConfirmation);
    // 電話番号 フォーカスアウト時
    $('#phone-number').on('blur', blurPhoneNumber);
    // 携帯電話番号 フォーカスアウト時
    $('#mobile-phone-number').on('blur', blurMobilePhoneNumber);
    // 郵便番号 フォーカスアウト時
    $('#post-number').on('blur', blurPostNumber);
    // 部門 変更時
    $('#departments').on('change', changeDepartments);
    // 担当者フォーム　submit時イベント
    $('#user-input-form').on('submit', submitUserDetailForm);

    /**
     * ユーザ名 フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurUserName(e) {
        // 半角英数字かの検証を実施
        let validation = ValidationUtil.halfWidthCharacter($('#user-name-label').text(), $('#user-name').val());
        if (ValidationUtil.result == ValidationUtil.RESULT_ERROR) {
            // 検証結果がNG
            showError($('#user-name-error'), $('#user-name-error-message'), ValidationUtil.message);
        } else if(ValidationUtil.result == ValidationUtil.RESULT_BLANK) {
            if (m_user_name !== '') {
                // ユーザ名入力⇒ユーザ名未入力をエラーとする
                showError($('#user-name-error'), $('#user-name-error-message'), MessageUtil.errorNotEntered($('#user-name-label').text()));
            }
        } else {
            // ユーザ名が入力されている場合、エラーメッセージを非表示に設定
            hideError($('#user-name-error'), $('#user-name-error-message'));
        }

        // 入力値を保持
        m_user_name = $('#user-name').val();
    }

    /**
     * メールアドレス フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurEmail(e) {
        // メールアドレスの検証を実施
        let validation = ValidationUtil.mailAddress($('#email-label').text(), $('#email').val());
        if (ValidationUtil.result == ValidationUtil.RESULT_ERROR) {
            // 検証結果がNG
            showError($('#email-error'), $('#email-error-message'), ValidationUtil.message);
        } else if(ValidationUtil.result == ValidationUtil.RESULT_BLANK) {
            if (m_email !== '') {
                // メールアドレス入力⇒メールアドレス未入力をエラーとする
                showError($('#email-error'), $('#email-error-message'), MessageUtil.errorNotEntered($('#email-label').text()));
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
        // パスワードの検証を実施
        let validation = ValidationUtil.password($('#password-label').text(), $('#password').val());
        if (ValidationUtil.result == ValidationUtil.RESULT_ERROR) {
            // 検証結果がNG
            showError($('#password-error'), $('#password-error-message'), ValidationUtil.message);
        } else if(ValidationUtil.result == ValidationUtil.RESULT_BLANK) {
            if (m_password !== '') {
                // パスワード入力⇒パスワード未入力をエラーとする
                showError($('#password-error'), $('#password-error-message'), MessageUtil.errorNotEntered($('#password-label').text()));
            }
        } else {
            // 検証結果がOKの場合、エラーメッセージを非表示に設定
            hideError($('#password-error'), $('#password-error-message'));
        }

        // 入力値を保持
        m_password = $('#password').val();
    }

    /**
     * パスワード（確認） フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurPasswordConfirmation(e) {
        if ($('#password-confirmation').val() == '') {
            if (m_password_confirmation !== '') {
                // パスワード（確認）入力⇒パスワード（確認）未入力をエラーとする
                showError($('#password-confirmation-error'), $('#password-confirmation-error-message'), MessageUtil.errorNotEntered($('#password-confirmation-label').text()));
            }
        } else {
            // 検証結果がOKの場合、エラーメッセージを非表示に設定
            hideError($('#password-confirmation-error'), $('#password-confirmation-error-message'));
        }

        // 入力値を保持
        m_password_confirmation = $('#password-confirmation').val();
    }

    /**
     * 電話番号 フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurPhoneNumber(e) {
        // 数値のみかを検証
        validationNumberOnly($('#phone-number-label'), $('#phone-number'), $('#phone-number-error'), $('#phone-number-error-message'));
    }

    /**
     * 携帯電話番号 フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurMobilePhoneNumber(e) {
        // 数値のみかを検証
        validationNumberOnly($('#mobile-phone-number-label'), $('#mobile-phone-number'), $('#mobile-phone-number-error'), $('#mobile-phone-number-error-message'));
    }

    /**
     * 郵便番号 フォーカスアウト時
     * 
     * @param {Object} e 
     */
    function blurPostNumber(e) {
        // 数値のみかを検証
        validationNumberOnly($('#post-number-label'), $('#post-number'), $('#post-number-error'), $('#post-number-error-message'));
    }

    /**
     * 部門 変更時
     * 
     * @param {Object} e 
     */
    function changeDepartments(e) {
        // 部門IDに一致するグループを設定
        setGroups($("#departments").val());
    }

    /**
     * 担当者フォーム　submit時イベント
     * 
     * @param {Object} e 
     * @returns {boolean} チェック結果 false:NG true:OK
     */
    function submitUserDetailForm(e) {
        let $user_name = $('#user-name');
        let $email = $('#email');
        let $password = $('#password');
        let $password_confirmation = $('#password-confirmation');
        let validation = true;
        
        if ($user_name.val() == '') {
            // ユーザ名未入力
            showError($('#user-name-error'), $('#user-name-error-message'), MessageUtil.errorNotEntered($('#user-name-label').text()));
            validation = false;
        }

        if ($email.val() == '') {
            // メールアドレス未入力
            showError($('#email-error'), $('#email-error-message'), MessageUtil.errorNotEntered($('#email-label').text()));
            validation = false;
        }

        if ($password.val() == '') {
            // パスワード未入力
            showError($('#password-error'), $('#password-error-message'), MessageUtil.errorNotEntered($('#password-label').text()));
            validation = false;
        }

        if ($password_confirmation.val() == '') {
            // パスワード（確認）未入力
            showError($('#password-confirmation-error'), $('#password-confirmation-error-message'), MessageUtil.errorNotEntered($('#password-confirmation-label').text()));
            validation = false;
        }

        if (showErrorCheck()) {
            // エラーが表示されている場合はNG
            return false;
        }

        return validation;
    }

    /**
     * 数値のみかの検証を行いエラーメッセージの表示/非表示を切り替える
     * 
     * @param {Object} $label         - ラベルのjQuery Object
     * @param {Object} $input         - 入力欄のjQuery Object
     * @param {Object} $error         - エラーメッセージを表示するエリアのjQuery Object
     * @param {Object} $error_message - エラーメッセージを表示するjQuery Object
     */
    function validationNumberOnly($label, $input, $error, $error_message) {
        // 数値のみかの検証を実施
        let validation = ValidationUtil.numberOnly($label.text(), $input.val());
        if (ValidationUtil.result == ValidationUtil.RESULT_ERROR) {
            // 検証結果がNG
            showError($error, $error_message, ValidationUtil.message);
        } else {
            // 検証結果がOKの場合、エラーメッセージを非表示に設定
            hideError($error, $error_message);
        }
    }

    /**
     * エラーメッセージが表示されているかを判定
     * 
     * @returns {boolean} チェック結果 false:NG true:OK
     */
    function showErrorCheck() {
        let check = false;

        $.each($('.error'), function(index, element) {
            if ($(element).is(':visible')) {
                // エラーメッセージが表示されている
                check = true;
                return false;
            }
        });

        return check;
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

    /**
     * 部門IDに一致するグループをセレクトボックスに設定
     * 
     * @param {int} department_id - 部門ID
     */
    async function setGroups(department_id) {
        // グループセレクトボックスの選択項目をクリア
        SelectBoxUtil.clearExceptFirstItems($('#groups'));

        // 部門IDに一致するグループを取得
        let result = await DepartmentApi.getGroupsFindByDepartmentId(Number(department_id));
        if (result.status == 'success') {
            // グループの値を選択項目設定用の配列に追加
            let items = [];
            result.data.groups.forEach(function(group) {
                items.push(SelectBoxUtil.getItem(group.id, group.name));
            });

            // グループをセレクトボックスに追加
            SelectBoxUtil.addItems($('#groups'), items);
        }
    }

});