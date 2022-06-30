{{--共通テーブルコンポーネント--}}
<div id="{{ $id }}" class="table-common-wrap {{ $class }}">
    <header>
        {{--ヘッダー--}}
        {{ $headers }}
    </header>
    <div class="table-common-container">
        <table class="table-common">
            <thead>
                {{--テーブルヘッダー--}}
                {{ $tableHeaders }}
            </thead>
            <tbody>
                {{--テーブルボディ--}}
                {{ $tableBodys }}
            </tbody>
        </table>
    </div>
    <footer>
        {{--フッター--}}
        {{ $footers }}
    </footer>
</div>