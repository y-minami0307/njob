{{--ユーザ作成/編集 コンポーネント--}}
<div class="maint-container">
    <!--バリデーションエラー-->
    @if ($errors->any())
        <div class="valid-error-container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--ユーザ名-->
    <div class="input-container">
        <label id="user-name-label">ユーザ名</label>
        <div class="input-box">
            <input type="text" name="user_name" id="user-name" class="input-common" maxlength="20" placeholder="例）nihon-tarou">
            <div id="user-name-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="user-name-error-message"></span>
            </div>
        </div>
    </div>

    <!--メールアドレス-->
    <div class="input-container">
        <label id="email-label">メールアドレス</label>
        <div class="input-box">
            <input type="text" name="email" id="email" class="input-common" maxlength="255" placeholder="例）nihon-tarou@example.com">
            <div id="email-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="email-error-message"></span>
            </div>
        </div>
    </div>

    <!--パスワード-->
    <div class="input-container">
        <label id="password-label">パスワード</label>
        <div class="input-box">
            <input type="password" name="password" id="password" class="input-common" maxlength="255">
            <div id="password-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="password-error-message"></span>
            </div>
        </div>
    </div>

    <!--パスワード（確認）-->
    <div class="input-container">
        <label id="password-confirmation-label">パスワード（確認）</label>
        <div class="input-box">
            <input type="password" name="password_confirmation" id="password-confirmation" class="input-common" maxlength="255">
            <div id="password-confirmation-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="password-confirmation-error-message"></span>
            </div>
        </div>
    </div>

    <div class="column">
        <!--部門-->
        <div class="input-container">
            <label>部門</label>
            <div class="input-box">
                <x-inputs.commons.select-box id='departments' :classs='[]' name='department_code' :selectItems='$departmentSelectItems'></x-inputs.commons.select-box>
            </div>
        </div>

        <!--グループ-->
        <div class="input-container">
            <label>グループ</label>
            <div class="input-box">
                <x-inputs.commons.select-box id='groups' :classs='[]' name='group_code'></x-inputs.commons.select-box>
            </div>
        </div>

        <!--役職-->
        <div class="input-container">
            <label>役職</label>
            <div class="input-box">
                <x-inputs.commons.select-box id='positions' :classs='[]' name='position_code' :selectItems='$positionSelectItems'></x-inputs.commons.select-box>
            </div>
        </div>
    </div>

    <div class="column">
        <!--名前-->
        <div class="input-container">
            <label>名前</label>
            <div class="input-box">
                <input type="text" name="personal_name" id="personal-name" class="input-common" maxlength="50" placeholder="例）日本　太郎">
            </div>
        </div>

        <!--名前カナ-->
        <div class="input-container">
            <label>名前カナ</label>
            <div class="input-box">
                <input type="text" name="personal_name_kana" id="personal-name-kana" class="input-common" maxlength="100" placeholder="例）ﾆﾎﾝ ﾀﾛｳ">
            </div>
        </div>
    </div>

    <div class="phone-container">
        <div class="column">
            <!--電話番号-->
            <div class="input-container">
                <label id="phone-number-label">電話番号</label>
                <div class="input-box">
                    <input type="text" name="phone_number" id="phone-number" class="input-common" maxlength="10" placeholder="例）0901234567">
                </div>
            </div>

            <!--携帯電話番号-->
            <div class="input-container">
                <label id="mobile-phone-number-label">携帯電話番号</label>
                <div class="input-box">
                    <input type="text" name="mobile_phone_number" id="mobile-phone-number" class="input-common" maxlength="11" placeholder="例）08012345678">
                </div>
            </div>
        </div>

        <div class="phone-error-container">
            <!--電話番号エラー-->
            <div id="phone-number-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="phone-number-error-message"></span>
            </div>

            <!--携帯電話番号エラー-->
            <div id="mobile-phone-number-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="mobile-phone-number-error-message"></span>
            </div>
        </div>
    </div>

    <!--郵便番号-->
    <div class="input-container">
        <label id="post-number-label">郵便番号</label>
        <div class="input-box">
            <div>
                <input type="text" name="post_number" id="post-number" class="input-common" maxlength="7" placeholder="例）1111234">
            </div>
            <div id="post-number-error" class="error">
                <i class="fa-solid fa-triangle-exclamation"></i><span id="post-number-error-message"></span>
            </div>
        </div>
    </div>

    <!--住所-->
    <div class="input-container">
        <label>住所</label>
        <div class="input-box">
            <textarea name="address" id="address" class="textarea-common" maxlength="255" rows="2" placeholder="例）福岡県福岡市中央区1-20　中央コーポ101号"></textarea>
        </div>
    </div>

    <!--管理者-->
    <div class="input-container auth-container">
        <div><input type="checkbox" id="box-1" class="checkbox-after"><label for="box-1">管理者</label></div>
    </div>
</div>