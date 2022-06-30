<?php

namespace App\Http\Controllers\Maints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maints\UserCreateRequest;
use App\Http\Requests\Maints\UserUpdateRequest;
use App\Services\User\UserServiceInterface;

/**
 * ユーザ　Controller
 * 
 */
class UserController extends Controller
{
    /**
     * ユーザ ServiceInterface
     * 
     * @var UserServiceInterface ユーザ ServiceInterface
     */
    private $user_service;

    /**
     * __construct
     * 
     * @param UserServiceInterface user_service ユーザ ServiceInterface
     */
    public function __construct(UserServiceInterface $user_service)
    {
        $this->user_service = $user_service;
    }

    /**
     * ユーザ管理ページ表示
     * HTTP Method GET
     * http://xxx/maint/user
     * 
     * @return View
     */
    public function index()
    {
        try
        {
            // ユーザ管理ページに表示するデータを取得
            $data = $this->user_service->getIndexPageDatas();
            
            return view('maints.users.user_list')->with('data', $data);
        }
        catch (\Exception $e)
        {

        }
    }

    /**
     * ユーザ管理ページ検索
     * HTTP Method POST
     * http://xxx/maint/user
     * 
     * @param Request request リクエスト
     * @return View
     */
    public function search(Request $request)
    {
        try
        {
            // 検索条件の取得
            $user_id = $request->input('user_id');
            $user_name = $request->input('user_name');
            $email = $request->input('email');
            $affiliation_code = (int)$request->input('affiliation_code');
            $department_code = (int)$request->input('department_code');
            $group_code = (int)$request->input('group_code');
            $position_code = (int)$request->input('position_code');
            $personal_name = $request->input('personal_name');
            $admin = (int)$request->input('admin');

            // ユーザ管理ページに表示するデータを検索し取得
            $data = $this->user_service->getSearchPageDatas($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);

            return view('maints.users.user_list')->with('data', $data);
        }
        catch (\Exception $e)
        {

        }
    }
    
    /**
     * ユーザ作成ページ表示
     * HTTP Method GET
     * http://xxx/maint/user/create
     * 
     * @return View
     */
    public function indexCreate()
    {
        try
        {
            // ユーザ作成ページに表示するデータを取得
            $data = $this->user_service->getCreatePageDatas();
            
            return view('maints.users.user_create')->with('data', $data);
        }
        catch (\Exception $e)
        {

        }
    }

    /**
     * ユーザ作成
     * HTTP Method POST
     * http://xxx/maint/user/create
     * 
     * @param UserRequest request リクエスト
     */
    public function create(UserCreateRequest $request)
    {
        try
        {
            // 入力値の取得
            $user_name = $request->input('user_name');
            $email = $request->input('email');
            $password = $request->input('password');
            $affiliation_code = (int)$request->input('affiliation_code');
            $department_code = (int)$request->input('department_code');
            $group_code = (int)$request->input('group_code');
            $position_code = (int)$request->input('position_code');
            $personal_name = $request->input('personal_name');
            $personal_name_kana = $request->input('personal_name_kana');
            $phone_number = $request->input('phone_number');
            $mobile_phone_number = $request->input('mobile_phone_number');
            $post_number = $request->input('post_number');
            $address = $request->input('address');
            $admin = (int)$request->input('admin');

            // ユーザ作成を実行
            $this->user_service->create(
                $user_name,
                $email,
                $password,
                $affiliation_code,
                $department_code,
                $group_code,
                $position_code,
                $personal_name,
                $personal_name_kana,
                $phone_number,
                $mobile_phone_number,
                $post_number,
                $address,
                $admin
            );
        }
        catch (\Exception $e)
        {
            
        }
    }

    /**
     * ユーザ編集ページ表示
     * HTTP Method GET
     * http://xxx/maint/user/{id}/update
     * 
     * @param string id ユーザID
     * @return View
     */
    public function indexUpdate($id)
    {
        try
        {
            // ユーザを取得
            $user = $this->user_service->getUser((int)$id);

            if ($user !== null)
            {
                // ユーザ編集ページに表示するデータを取得
                $data = $this->user_service->getUpdatePageDatas($user);
                
                return view('maints.users.user_update')->with('data', $data);
            }
            else
            {
                abort(404);
            }
        }
        catch (\Exception $e)
        {

        }
    }

    /**
     * ユーザ更新ページ表示
     * HTTP Method PATCH
     * http://xxx/maint/user/{id}/update
     * 
     * @param UserUpdateRequest request リクエスト
     * @param string id ユーザID
     * @return View
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try
        {
            // ユーザを取得
            $user = $this->user_service->getUser((int)$id);

            if ($user !== null)
            {
                // 入力値の取得
                $user_name = $request->input('user_name');
                $email = $request->input('email');
                $affiliation_code = (int)$request->input('affiliation_code');
                $department_code = (int)$request->input('department_code');
                $group_code = (int)$request->input('group_code');
                $position_code = (int)$request->input('position_code');
                $personal_name = $request->input('personal_name');
                $personal_name_kana = $request->input('personal_name_kana');
                $phone_number = $request->input('phone_number');
                $mobile_phone_number = $request->input('mobile_phone_number');
                $post_number = $request->input('post_number');
                $address = $request->input('address');
                $admin = (int)$request->input('admin');

                // ユーザ編集を実行
                $this->user_service->update(
                    $user,
                    $user_name,
                    $email,
                    $affiliation_code,
                    $department_code,
                    $group_code,
                    $position_code,
                    $personal_name,
                    $personal_name_kana,
                    $phone_number,
                    $mobile_phone_number,
                    $post_number,
                    $address,
                    $admin
                );
                
                //return view('maints.users.user_update')->with('data', $data);
            }
            else
            {
                abort(404);
            }
        }
        catch (\Exception $e)
        {

        }
    }
}
