/**
 * DepartmentApi
 * 
 */
class DepartmentApi {

    /**
     * プレフィックス
     * 
     * @var {String} - PREFIX
     */
    static PREFIX = 'department';

    /**
     * 部門IDに一致するグループを取得
     * http://xxxxxxx/api/department
     * 
     * @param {int} department_id - 部門ID
     * @returns {Object} json {
     *  {array} groups グループ {
     *   {int}    id           - グループID
     *   {String} name         - グループ名
     *   {String} abbreviation - 略称
     *  }
     * }
     */
    static async getGroupsFindByDepartmentId(department_id) {
        let response = await FetchApi.get(DepartmentApi.PREFIX + '/' + department_id);
        return response;
    }

}