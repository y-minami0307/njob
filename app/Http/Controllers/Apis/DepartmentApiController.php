<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DepartmentApi\DepartmentApiServiceInterface;

/**
 * 部門 API Controller
 * 
 */
class DepartmentApiController extends Controller
{
    /**
     * 部門 API ServiceInterface
     * 
     * @var DepartmentApiServiceInterface 部門 API ServiceInterface
     */
    private $department_api_service;

    /**
     * __construct
     * 
     * @param DepartmentApiServiceInterface department_api_service 部門 API ServiceInterface
     */
    public function __construct(DepartmentApiServiceInterface $department_api_service)
    {
        $this->department_api_service = $department_api_service;
    }

    /**
     * 部門IDに一致するグループを取得
     * HTTP Method GET
     * http://xxx/api/department
     * 
     * @param int 部門ID
     * @return json
     */
    public function getGroupsFindByDepartmentId($department_id)
    {
        // 部門IDに一致するグループを取得
        $data = $this->department_api_service->getGroupsFindByDepartmentId($department_id);

        return $this->jsonResponse($data);
    }
}
