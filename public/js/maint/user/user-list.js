/**
 * ユーザ管理ページ
 * 
 */
 $(function() {

    /**
     * 詳細検索条件アコーディオン
     * 
     * @var {Accordion} m_accordion_detail_conditions
     */
    var m_accordion_detail_conditions;

    // 初期化処理を実行
    initialize();

    /**
     * 初期化処理
     * 
     */
    function initialize () {
        // 詳細検索条件アコーディオンのインスタンスを生成
        m_accordion_detail_conditions = new Accordion($('#detail-conditions-btn'), $('#detail-conditions'));
    }

 });