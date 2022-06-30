{{--ベースレイアウト　ヘッダー--}}
<header class="base-header">
    <!--ヘッダー-->
    <div class="system-name">Njob</div>

    <!--ヘッダーメニュー-->
    <div class="base-header-menu">
        <!--通知-->
        <div class="notice-container">
            <img src="{{ asset('img/icon/32px/bell_255_255_255.png') }}">
            <div class="notice-count-container">
                <div class="notice-count">9</div>
            </div>
        </div>

        <!--ログインユーザー-->
        <div class="user-container">
            <!--ユーザーアイコン-->
            <div class="icon-container">
                <img src="{{ asset('img/icon/32px/not-user_200_200_200.png') }}">
            </div>

            <!--ユーザー名-->
            <div class="user-name">y-minami</div>
            <div class="button">▼</div>
        </div>
    </div>
</header>