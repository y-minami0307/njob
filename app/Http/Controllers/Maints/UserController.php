<?php

namespace App\Http\Controllers\Maints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maints\UserRequest;
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
     * ユーザ作成ページ表示
     * HTTP Method GET
     * http://xxx/maint/user/create
     * 
     * @return View
     */
    public function indexCreate()
    {
        // ユーザ作成ページに表示するデータを取得
        $data = $this->user_service->getCreatePageDatas();
        
        return view('maints.users.user_create')->with('data', $data);
    }

    /**
     * ユーザ作成
     * HTTP Method POST
     * http://xxx/maint/user/create
     * 
     * @param UserRequest request リクエスト {
     *  string user_name ユーザ名
     *  string email     メールアドレス
     *  string password  パスワード
     * }
     */
    public function create(UserRequest $request)
    {
        // バリデーションを実行
        //Validator::make($request->all(), $this->rules('create'))->validate();

        // 入力値の取得
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $password = $request->input('password');

        // ユーザ作成を実行
        $this->user_service->createUser(
            $user_name, $email, $password
        );

        return view('maint.user.user_create');
    }
}
