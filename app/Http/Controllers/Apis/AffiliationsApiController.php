<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AffiliationsApi\AffiliationsApiServiceInterface;

/**
 * 所属 API Controller
 * 
 */
class AffiliationsApiController extends Controller
{
    /**
     * 所属 API ServiceInterface
     * 
     * @var AffiliationsApiServiceInterface 所属 API ServiceInterface
     */
    private $affiliations_api_service;

    /**
     * __construct
     * 
     * @param AffiliationsApiServiceInterface affiliation_api_service 所属 API ServiceInterface
     */
    public function __construct(AffiliationsApiServiceInterface $affiliations_api_service)
    {
        $this->affiliations_api_service = $affiliations_api_service;
    }

    /**
     * 所属IDに一致する部門を取得
     * HTTP Method GET
     * http://xxx/api/affiliations/{id}/departments
     * 
     * @param string id 所属ID
     * @return json
     */
    public function getDepartmentsFindById($id)
    {
        try
        {
            // 所属IDに一致する部門を取得
            $data = $this->affiliations_api_service->getDepartmentsFindById((int)$id);

            return $this->jsonResponse($data);    
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * 所属IDに一致する部門のグループを取得
     * HTTP Method GET
     * http://xxx/api/affiliations/{affiliation_id}/departments/{department_id}/groups
     * 
     * @param string affiliation_id 所属ID
     * @param string department_id  部門ID
     */
    public function getGroupsFindByAffiliationDepartment($affiliation_id, $department_id)
    {
        try
        {
            // 所属IDに一致する部門のグループを取得
            $data = $this->affiliations_api_service->getGroupsFindByAffiliationDepartment((int)$affiliation_id, (int)$department_id);

            return $this->jsonResponse($data);    
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }
}
