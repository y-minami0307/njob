{{--全ページ共通レイアウト　サイドメニュー--}}
<aside class="base-side">
    <!--サイドメニュー　開閉トグル-->
    <div class="base-side-toggle-container">
        <div id="base-side-toggle" class="toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!--サイドメニュー　メニュー一覧-->
    <ul id="base-side-menu" class="base-side-menu">
        <!--メニュー：Home-->
        <li>
            <a href="{{ url('/home') }}">
                <div class="menu">
                    <i class="fas fa-home"></i>Home
                </div>
            </a>
        </li>
    </ul>
</aside>