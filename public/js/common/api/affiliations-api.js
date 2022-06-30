/**
 * AffiliationsApi
 * 
 */
class AffiliationsApi {

    /**
     * プレフィックス
     * 
     * @var {String} - PREFIX
     */
    static PREFIX = 'affiliations';

    /**
     * 所属IDに一致する部門を取得
     * http://xxxxxxx/api/affiliations/{id}/departments
     * 
     * @param {int} id - 所属ID
     * @returns {Object} json {
     *  {array} departments 部門 {
     *   {int}    id           - 部門ID
     *   {String} name         - 部門名
     *   {String} abbreviation - 略称
     *  }
     * }
     */
    static async getDepartmentsFindById(id) {
        let response = await FetchApi.get(AffiliationsApi.PREFIX + '/' + id + '/departments');
        return response;
    }

    /**
     * 所属IDに一致する部門のグループを取得
     * http://xxxxxxx/api/affiliations/{affiliation_id}/departments/{department_id}/groups
     * 
     * @param {int} affiliation_id - 所属ID
     * @param {int} department_id  - 部門ID
     * @returns {Object} json {
     *  {array} groups グループ {
     *   {int}    id           - グループID
     *   {String} name         - グループ名
     *   {String} abbreviation - 略称
     *  }
     * }
     */
    static async getGroupsFindByAffiliationDepartment(affiliation_id, department_id) {
        let response = await FetchApi.get(AffiliationsApi.PREFIX + '/' + affiliation_id + '/departments/' + department_id + '/groups');
        return response;
    }

}