{{--ユーザ作成/編集 コンポーネント--}}
<div class="maint-container">
    <!--バリデーションエラー-->
    @if ($errors->any())
        <div class="valid-error-container">
            <ul>
                <li>入力内容に誤りがあります内容をご確認ください</li>
            </ul>
        </div>
    @endif

    <!--ユーザID-->
    <x-inputs.commons.hidden-box id='user-id' name='user_id' :value='$id'></x-inputs.commons.hidden-box>

    <!--ユーザ名-->
    <x-maints.commons.input-container id='user-name' name='user_name' :label='\UserConst::LABEL_NAME_USER_NAME'>
        <x-inputs.textBoxs.user-name :value='\AppUtil::convertNullToString(old("user_name", $user_name))' :placeholder='\UserConst::PLACEHOLDER_USER_NAME'></x-inputs.textBoxs.user-name>
    </x-maints.commons.input-container>

    <!--メールアドレス-->
    <x-maints.commons.input-container id='email' name='email' :label='\UserConst::LABEL_NAME_EMAIL'>
        <x-inputs.textBoxs.email :value='\AppUtil::convertNullToString(old("email", $email))' :placeholder='\UserConst::PLACEHOLDER_EMAIL'></x-inputs.textBoxs.email>
    </x-maints.commons.input-container>

    @if ($id == 0)
        <!--パスワード-->
        <x-maints.commons.input-container id='password' name='password' :label='\UserConst::LABEL_NAME_PASSWORD'>
            <x-inputs.passwordboxs.password></x-inputs.passwordboxs.password>
        </x-maints.commons.input-container>

        <!--パスワード（確認）-->
        <x-maints.commons.input-container id='password-confirmation' name='password_confirmation' :label='\UserConst::LABEL_NAME_PASSWORD_CONFIRMATION'>
            <x-inputs.passwordboxs.password-confirmation></x-inputs.passwordboxs.password-confirmation>
        </x-maints.commons.input-container>
    @endif

    <div class="group-container">
        <div class="column">
            <!--所属-->
            <x-maints.commons.input-container id='affiliation-code' name='affiliation_code' :label='\AffiliationConst::LABEL_NAME_AFFILIATION' :visibleError='false'>
                <x-inputs.selectBoxs.affiliation :selectItems='$affiliationSelectItems' :selectedValue='\AppUtil::convertNullToInt(old("affiliation_code", $affiliation_code))'></x-inputs.selectBoxs.affiliation>
            </x-maints.commons.input-container>

            <!--部門コード-->
            <x-inputs.commons.hidden-box id='hidden-department-code' name='hidden_department_code' :value='\AppUtil::convertNullToInt(old("department_code", $department_code))'></x-inputs.commons.hidden-box>

            <!--部門-->
            <x-maints.commons.input-container id='department-code' name='department_code' :label='\DepartmentConst::LABEL_NAME_DEPARTMENT' :visibleError='false'>
                <x-inputs.selectBoxs.department></x-inputs.selectBoxs.department>
            </x-maints.commons.input-container>

            <!--グループコード-->
            <x-inputs.commons.hidden-box id='hidden-group-code' name='hidden_group_code' :value='\AppUtil::convertNullToInt(old("group_code", $group_code))'></x-inputs.commons.hidden-box>

            <!--グループ-->
            <x-maints.commons.input-container id='group-code' name='group_code' :label='\GroupConst::LABEL_NAME_GROUP' :visibleError='false'>
                <x-inputs.selectBoxs.group></x-inputs.selectBoxs.group>
            </x-maints.commons.input-container>

            <!--役職-->
            <x-maints.commons.input-container id='position-code' name='position_code' :label='\PositionConst::LABEL_NAME_POSITION' :visibleError='false'>
                <x-inputs.selectBoxs.position :selectItems='$positionSelectItems' :selectedValue='\AppUtil::convertNullToInt(old("position_code", $position_code))'></x-inputs.selectBoxs.position>
            </x-maints.commons.input-container>
        </div>

        <div>
            <!--部門エラー-->
            <x-inputs.commons.error id='department-code' name='department_code'></x-inputs.commons.error>

            <!--グループエラー-->
            <x-inputs.commons.error id='group-code' name='group_code'></x-inputs.commons.error>

            <!--役職エラー-->
            <x-inputs.commons.error id='position-code' name='position_code'></x-inputs.commons.error>
        </div>
    </div>

    <div class="group-container">
        <div class="column">
            <!--名前-->
            <x-maints.commons.input-container id='personal-name' name='personal_name' :label='\UserConst::LABEL_NAME_PERSONAL_NAME' :visibleError='false'>
                <x-inputs.textBoxs.personal-name :value='\AppUtil::convertNullToString(old("personal_name", $personal_name))' :placeholder='\UserConst::PLACEHOLDER_PERSONAL_NAME'></x-inputs.textBoxs.personal-name>
            </x-maints.commons.input-container>

            <!--名前カナ-->
            <x-maints.commons.input-container id='personal-name-kana' name='personal_name_kana' :label='\UserConst::LABEL_NAME_PERSONAL_NAME_KANA' :visibleError='false'>
                <x-inputs.textBoxs.personal-name-kana :value='\AppUtil::convertNullToString(old("personal_name_kana", $personal_name_kana))' :placeholder='\UserConst::PLACEHOLDER_PERSONAL_NAME_KANA'></x-inputs.textBoxs.personal-name-kana>
            </x-maints.commons.input-container>
        </div>

        <div>
            <!--名前エラー-->
            <x-inputs.commons.error id='personal-name' name='personal_name'></x-inputs.commons.error>

            <!--名前カナエラー-->
            <x-inputs.commons.error id='personal-name-kana' name='personal_name_kana'></x-inputs.commons.error>
        </div>
    </div>

    <div class="group-container">
        <div class="column">
            <!--電話番号-->
            <x-maints.commons.input-container id='phone-number' name='phone_number' :label='\UserConst::LABEL_NAME_PHONE_NUMBER' :visibleError='false'>
                <x-inputs.textBoxs.phone-number :value='\AppUtil::convertNullToString(old("phone_number", $phone_number))' :placeholder='\UserConst::PLACEHOLDER_PHONE_NUMBER'></x-inputs.textBoxs.phone-number>
            </x-maints.commons.input-container>

            <!--携帯電話番号-->
            <x-maints.commons.input-container id='mobile-phone-number' name='mobile_phone_number' :label='\UserConst::LABEL_NAME_MOBILE_PHONE_NUMBER' :visibleError='false'>
                <x-inputs.textBoxs.mobile-phone-number :value='\AppUtil::convertNullToString(old("mobile_phone_number", $mobile_phone_number))' :placeholder='\UserConst::PLACEHOLDER_MOBILE_PHONE_NUMBER'></x-inputs.textBoxs.mobile-phone-number>
            </x-maints.commons.input-container>
        </div>

        <div>
            <!--電話番号エラー-->
            <x-inputs.commons.error id='phone-number' name='phone_number'></x-inputs.commons.error>

            <!--携帯電話番号エラー-->
            <x-inputs.commons.error id='mobile-phone-number' name='mobile_phone_number'></x-inputs.commons.error>
        </div>
    </div>

    <!--郵便番号-->
    <x-maints.commons.input-container id='post-number' name='post_number' :label='\UserConst::LABEL_NAME_POST_NUMBER'>
        <x-inputs.textBoxs.post-number :value='\AppUtil::convertNullToString(old("post_number", $post_number))' :placeholder='\UserConst::PLACEHOLDER_MOBILE_POST_NUMBER' otherAttribute="onKeyUp=AjaxZip3.zip2addr(this,'','address','address');"></x-inputs.textBoxs.post-number>
    </x-maints.commons.input-container>

    <!--住所-->
    <x-maints.commons.input-container id='address' name='address' :label='\UserConst::LABEL_NAME_ADDRESS'>
        <x-inputs.textAreas.address :value='\AppUtil::convertNullToString(old("address", $address))' :placeholder='\UserConst::PLACEHOLDER_ADDRESS'></x-inputs.textAreas.address>
    </x-maints.commons.input-container>

    <!--管理者-->
    <div class="input-container">
        <div class="auth-container">
            <div>
                <x-inputs.checkBoxs.admin :checkedValue='\AppUtil::convertNullToInt(old("admin", $admin))' checkBoxBeforeAndAfter='after'></x-inputs.checkBoxs.admin>
            </div>
        </div>
        <div>
            <!--管理者エラー-->
            <x-inputs.commons.error id='admin' name='admin'></x-inputs.commons.error>
        </div>
    </div>
</div>