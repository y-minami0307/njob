/**
 * FetchApi
 * 
 */
class FetchApi {

    /**
     * HTTP Method GET
     * 
     * @param {String} url - URL
     * @returns {Object}
     */
    static async get(url) {
        try {
            let response = await fetch(URL_ROOT_API + '/' + url);
            if (response.ok) {
                let data = await response.json();
                return {'status' : 'success', 'data' : data};
            } else {
                return {'status' : 'failure', 'error' : response.statusText};
            }
        } catch (error) {
            return {'status' : 'failure', 'error' : error};
        }
    }

}