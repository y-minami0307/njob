{{--共通セレクトボックスコンポーネント--}}
<div class="select-common">
    <select id="{{ $id }}" class="{{ $class }}" name="{{ $name }}">
        @if ($visibleBlankItem)
            <option value="{{ \SelectBoxConst::BLANK_VALUE }}">{{ \SelectBoxConst::BLANK_NAME }}</option>
        @endif
        @foreach ($selectItems as $selectItem)
            <option value="{{ $selectItem->value }}" {{ $selectItem->value == $selectedValue ? 'selected' : '' }}>{{ $selectItem->name }}</option>
        @endforeach
    </select>
</div>