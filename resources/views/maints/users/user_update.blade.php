@extends('layouts.base')

{{--ページタイトル--}}
@section('title', 'ユーザー編集')

{{--固有css--}}
@push('css')
    <link rel="stylesheet" href="{{ asset('css/maint/common/maint-input.css') }}">
    <link rel="stylesheet" href="{{ asset('css/maint/user/user-input.css') }}">
@endpush

{{--固有js--}}
@push('js')
    <script src="{{ asset('js/lib/ajaxzip3/ajaxzip3.js') }}"></script>
    <script src="{{ asset('js/common/util/selectbox.js') }}"></script>
    <script src="{{ asset('js/common/api/fetch-api.js') }}"></script>
    <script src="{{ asset('js/common/api/affiliations-api.js') }}"></script>
    <script src="{{ asset('js/maint/user/user-input.js') }}"></script>
@endpush

{{--パンくずリスト--}}
@section('breadcrumb')
    <x-bases.breadcrumb :breadcrumbs='[["name" => "ユーザ管理", "url" => ""], ["name" => "ユーザ編集", "url" => route("user.update", ["id" => $data->user->id])]]'></x-bases.breadcrumb>
@endsection

{{--ユーザー作成ページ--}}
@section('page')
<main class="maint-input-wrap container">
    <form method="POST" action="{{ route('user.update', ['id' => $data->user->id]) }}" id="user-input-form" class="maint-input-form">
        @method('PATCH')
        @csrf
        <!--ユーザ情報-->
        <main>
            {{--ユーザ作成/編集 コンポーネント--}}
            <x-maints.users.user-input :affiliationSelectItems='$data->affiliation_select_items' :positionSelectItems='$data->position_select_items' :user='$data->user'></x-maints.users.user-input>
        </main>

        <!--フッター-->
        <footer>
            <div>
                <x-buttons.commons.button type='submit'>更新</x-buttons.commons.button>
            </div>
        </footer>
    </form>
</main>
@endsection