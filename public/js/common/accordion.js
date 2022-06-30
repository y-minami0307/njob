/**
 * accordion.js
 * 
 */
class Accordion {

    /**
     * constructor
     * 
     * @param {Object} $button    - アコーディオン開閉ボタン
     * @param {Object} $accordion - アコーディオン
     */
    constructor($button, $accordion){
        this.$button = $button;
        this.$accordion = $accordion;

        // イベントの初期化
        this.initializeEvent();
    }

    /**
     * イベントの初期化処理を実行
     * 
     */
    initializeEvent() {
        // アコーディオン開閉ボタンクリック時イベント
        this.$button.on('click', {accordion : this}, this.clickButton);
    }

    /**
     * アコーディオン開閉ボタンクリック時イベント処理
     * 
     * @param {Object} e 
     */
    clickButton(e) {
        // アコーディオンの開閉を切り替える
        e.data.accordion.changeOpenCloseAccordion();
    }

    /**
     * アコーディオンの開閉を切り替える
     * 
     */
    changeOpenCloseAccordion() {
        if (this.$accordion.is(':visible')) {
            // アコーディオンオープン時
            this.closeAccordion();
        } else {
            // アコーディオンクローズ時
            this.openAccordion();
        }
    }

    /**
     * アコーディオンを開く
     * 
     */
    openAccordion() {
        this.$accordion.slideDown(200);
    }

    /**
     * アコーディオンを閉じる
     * 
     */
    closeAccordion() {
        this.$accordion.slideUp(200);
    }

}