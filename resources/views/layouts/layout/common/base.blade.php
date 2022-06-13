<!DOCTYPE html>
{{--全ページ共通レイアウト--}}
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/lib/destyle/destyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common/base.css') }}">
        @stack('css')
        <script src="{{ asset('js/lib/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/common/const/const.js') }}"></script>
        <script src="{{ asset('js/common/const/message.js') }}"></script>
        <script src="{{ asset('js/common/util/local-strage.js') }}"></script>
        <script src="{{ asset('js/common/util/validation.js') }}"></script>
        <script src="{{ asset('js/common/util/message.js') }}"></script>
        <script src="{{ asset('js/common/util/base-side-menu.js') }}"></script>
        <script src="{{ asset('js/common/base.js') }}"></script>
        @stack('js')
    </head>

    <body>
        <div class="base-wrap">
            {{--ヘッダー--}}
            @include('layouts.includes.common.base.header')

            <!--コンテンツ-->
            <div class="base-container">
                {{--サイドメニュー--}}
                @include('layouts.includes.common.base.sidemenu')

                <div class="page-wrap">
                    <header>
                        {{--パンくずリスト--}}
                        @include('layouts.includes.common.base.breadcrumbs')
                    </header>

                    <div class="page-container">
                        {{--各ページのコンテンツ--}}
                        @yield('page')

                        {{--ライトバー--}}
                        @include('layouts.includes.common.base.rightbar')
                    </div>
                </div>
            </div>

            {{--フッター--}}
            @include('layouts.includes.common.base.footer')
        </div>
    </body>

</html>