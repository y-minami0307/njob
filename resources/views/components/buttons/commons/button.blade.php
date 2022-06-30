{{--共通ボタンコンポーネント--}}
<button type="{{ $type }}"  id="{{ $id }}" class="button-common {{ $class }}" {!! $otherAttribute !!}>
    <div>{{ $slot }}</div>
</button>
