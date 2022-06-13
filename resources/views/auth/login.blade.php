<!DOCTYPE html>
{{--ログインページ--}}
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/lib/destyle/destyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
        <script src="{{ asset('js/lib/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/common/const/message.js') }}"></script>
        <script src="{{ asset('js/common/util/validation.js') }}"></script>
        <script src="{{ asset('js/auth/login.js') }}"></script>
    </head>

    <body>
        <div class="login-wrap">
            <div class="login-container">
                <!--ログインフォーム-->
                <form method="POST" action="/login" id="login-form" class="login-form">
                    <div class="title">Login</div>

                    <div class="input-container">
                        <!--メールアドレス-->
                        <div class="input-box">
                            <input type="text" name="email" id="email" class="under-line-only" placeholder="メールアドレス">
                            <div id="email-error" class="error padding">
                                <i class="fa-solid fa-triangle-exclamation"></i><span id="email-error-message"></span>
                            </div>
                        </div>

                        <!--パスワード-->
                        <div class="input-box">
                            <input type="password" name="password" id="password" class="under-line-only" placeholder="パスワード">
                            <div id="password-error" class="error padding">
                                <i class="fa-solid fa-triangle-exclamation"></i><span id="password-error-message"></span>
                            </div>
                        </div>
                    </div>

                    <!--ログイン状態を維持する-->
                    <div class="remembe-container">
                        <input type="checkbox" id="box-1"><label for="box-1">ログイン状態を維持する</label>
                    </div>
                    
                    <div class="error padding">
                        <i class="fa-solid fa-triangle-exclamation"></i><span>ログインに失敗しました</span>
                    </div>

                    <!--ログインボタン-->
                    <div class="login-button-container">
                        <button type="submit" class="button-common">Login</button>
                    </div>

                    <!--メールアドレス、パスワードを忘れた方はこちら-->
                    <div class="forgot-password-container">
                        <a class="link-common">メールアドレス、パスワードを忘れた方はこちら</a>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>