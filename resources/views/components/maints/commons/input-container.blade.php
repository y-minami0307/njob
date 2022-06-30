{{--メンテナンスページ作成/編集 入力欄コンポーネント--}}
<div class="input-container">
    <label id="{{ $id }}-label">{{ $label }}</label>
    <div class="input-box">
        {{ $slot }}
        @if ($visibleError)
            <x-inputs.commons.error :id='$id' :name='$name'></x-inputs.commons.error>
        @endif
    </div>
</div>