{{--共通円ボタンコンポーネント--}}
<button type="{{ $type }}"  id="{{ $id }}" class="button-common circle {{ $class }}" {!! $otherAttribute !!}>
    <div>{{ $slot }}</div>
</button>