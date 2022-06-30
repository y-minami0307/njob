{{--ベースレイアウト　パンくずリスト--}}
<div class="base-breadcrumbs">
    <div class="item">
        <a href="" class="link">
            <i class="fas fa-home"></i>Home
        </a>
        <div>▶</div>
    </div>
    @foreach ($breadcrumbs as $breadcrumb)
        <div class="item">
            <a href="{{ $breadcrumb['url'] }}" class="link">{{ $breadcrumb['name'] }}</a>
            <div>▶</div>
        </div>
    @endforeach
</div>