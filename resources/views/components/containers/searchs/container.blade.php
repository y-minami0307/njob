{{--検索条件コンテナコンポーネント--}}
<form method="POST" action="{{ $formAction }}" id="{{ $formId }}" class="{{ $formClass }}">
    @csrf
    <div class="search-container">
        {{--検索条件--}}
        {{ $conditions }}

        <div class="detail-conditions-wrap">
            <div id="detail-conditions-btn" class="detail-conditions-btn"><i class="fa-solid fa-circle-plus"></i></div>
            <div id="detail-conditions-container" class="detail-conditions-container">
                <div id="detail-conditions" class="conditions">
                    {{--詳細検索条件--}}
                    {{ $detailConditions }}
                </div>
            </div>
        </div>

        <div class="row end">
            <x-buttons.commons.button id='search-btn' type='submit'>検索</x-buttons.commons.button>
        </div>
    </div>
</form>