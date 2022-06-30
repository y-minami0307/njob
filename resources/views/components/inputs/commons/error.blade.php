{{--メンテナンスページ作成/編集 エラーコンポーネント--}}
<div id="{{ $id }}-error" class="input-error" style="{{ $errors->has($name) ? 'display:block' : '' }}">
    <i class="fa-solid fa-triangle-exclamation"></i><span id="{{ $id }}-error-message">{{$errors->first($name)}}</span>
</div>