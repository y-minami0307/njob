/**
 * base.js
 * 
 */
$(function(){
    // イベント設定
    // サイドメニュー　開閉ボタンクリック時イベント
    $('#base-side-toggle').on('click', clickBaseSideToggle);

    // 初期化処理が終了するまでコンテンツを非表示に設定
    $('body').hide();

    // 初期化処理を実行
    initialize();

    // コンテンツを表示
    $('body').show();

    /**
     * 初期化処理
     * 
     */
    function initialize() {
        // LocalStarageを初期化
        LocalStarageUtil.initialize();

        // サイドメニューの開閉を切り替える
        BaseSideMenuUtil.setBaseSideMenu();
    }

    /**
     * サイドメニュー　開閉ボタンクリック時イベント
     * 
     * @param {Object} e 
     */
    function clickBaseSideToggle(e) {
        // サイドメニューの開閉を切り替える
        BaseSideMenuUtil.toggleBaseSideMenu();
    }

 });