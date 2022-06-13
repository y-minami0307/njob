@extends('layouts.layout.common.base')

{{--ページタイトル--}}
@section('title', 'ユーザー作成')

{{--固有css--}}
@push('css')
<link rel="stylesheet" href="{{ asset('css/maint/common/maint-input.css') }}">
<link rel="stylesheet" href="{{ asset('css/maint/user/user-input.css') }}">
@endpush

{{--固有js--}}
@push('js')
<script src="{{ asset('js/common/util/selectbox.js') }}"></script>
<script src="{{ asset('js/common/api/fetch-api.js') }}"></script>
<script src="{{ asset('js/common/api/department-api.js') }}"></script>
<script src="{{ asset('js/maint/user/user-input.js') }}"></script>
@endpush

{{--ユーザー作成ページ--}}
@section('page')
<main class="maint-input-wrap container">
    <form method="POST" action="{{ route('user.create') }}" id="user-input-form" class="maint-input-form">
        @csrf
        <!--ユーザ情報-->
        <main>
            {{--ユーザ作成/編集 コンポーネント--}}
            <x-maints.users.user-input :departmentSelectItems='$data->department_select_items' :positionSelectItems='$data->position_select_items'></x-maints.users.user-input>
        </main>

        <!--フッター-->
        <footer>
            <div>
                <button type="submit" class="button-common">
                    <div>作成</div>
                </button>
            </div>
        </footer>
    </form>
</main>
@endsection