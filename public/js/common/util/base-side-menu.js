/**
 * BaseSideMenuUtil
 */
class BaseSideMenuUtil {

    /**
     * 保存したサイドメニューの状態に対応して開閉を切り替える
     */
    static setBaseSideMenu() {
        if (LocalStarageUtil.getInt(LocalStarageUtil.KEY_BASE_SIDE_MENU_STATUS) == 1) {
            // サイドメニューを開く
            BaseSideMenuUtil.openBaseSideMenu();
        } else {
            // サイドメニューを閉じる
            BaseSideMenuUtil.closeBaseSideMenu();
        }
    }

    /**
     * サイドメニューの開閉を切り替える
     */
    static toggleBaseSideMenu() {
        if (LocalStarageUtil.getInt(LocalStarageUtil.KEY_BASE_SIDE_MENU_STATUS) == 0) {
            // サイドメニューを開く
            BaseSideMenuUtil.openBaseSideMenu();
        } else {
            // サイドメニューを閉じる
            BaseSideMenuUtil.closeBaseSideMenu();
        }
    }

    /**
     * サイドメニューを開く
     */
    static openBaseSideMenu() {
        $('#base-side-menu').css({'width':''});
        LocalStarageUtil.setItem(LocalStarageUtil.KEY_BASE_SIDE_MENU_STATUS, 1);
    }

    /**
     * サイドメニューを閉じる
     */
    static closeBaseSideMenu() {
        $('#base-side-menu').css({'width':'0px'});
        LocalStarageUtil.setItem(LocalStarageUtil.KEY_BASE_SIDE_MENU_STATUS, 0);
    }

}