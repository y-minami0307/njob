@extends('layouts.base')

{{--ページタイトル--}}
@section('title', 'ユーザー管理')

{{--固有css--}}
@push('css')
    <link rel="stylesheet" href="{{ asset('css/maint/common/maint-list.css') }}">
@endpush

{{--固有js--}}
@push('js')
    <script src="{{ asset('js/common/accordion.js') }}"></script>
    <script src="{{ asset('js/maint/user/user-list.js') }}"></script>
@endpush

{{--パンくずリスト--}}
@section('breadcrumb')
    <x-bases.breadcrumb :breadcrumbs='[["name" => "ユーザ管理", "url" => ""]]'></x-bases.breadcrumb>
@endsection

{{--ユーザー作成ページ--}}
@section('page')
<main class="maint-list-wrap container">
    <div class="maint-list-container">
        {{--検索条件--}}
        <div class="maint-search-container">
            <x-containers.searchs.container :formAction='route("user.search")'>
                <x-slot name="conditions">
                    <div class="row">
                        {{--ユーザID--}}
                        <x-containers.searchs.column :label='\UserConst::LABEL_NAME_USER_ID'>
                            <x-inputs.textBoxs.user-id :value='$data->conditions->user_id'></x-inputs.textBoxs.user-id>
                        </x-containers.searchs.column>

                        {{--ユーザ名--}}
                        <x-containers.searchs.column :label='\UserConst::LABEL_NAME_USER_NAME'>
                            <x-inputs.textBoxs.user-name :value='$data->conditions->user_name'></x-inputs.textBoxs.user-name>
                        </x-containers.searchs.column>

                        {{--メールアドレス--}}
                        <x-containers.searchs.column :classs='["email"]' :label='\UserConst::LABEL_NAME_EMAIL'>
                            <x-inputs.textBoxs.email :value='$data->conditions->email'></x-inputs.textBoxs.email>
                        </x-containers.searchs.column>
                    </div>
                    <div class="row">
                        {{--所属--}}
                        <x-containers.searchs.column :label='\AffiliationConst::LABEL_NAME_AFFILIATION'>
                            <x-inputs.selectBoxs.affiliation :selectItems='$data->conditions->affiliation_select_items'></x-inputs.selectBoxs.affiliation>
                        </x-containers.searchs.column>

                        {{--部門--}}
                        <x-containers.searchs.column :label='\DepartmentConst::LABEL_NAME_DEPARTMENT'>
                            <x-inputs.selectBoxs.department :selectItems='$data->conditions->department_select_items'></x-inputs.selectBoxs.department>
                        </x-containers.searchs.column>

                        {{--グループ--}}
                        <x-containers.searchs.column :label='\GroupConst::LABEL_NAME_GROUP'>
                            <x-inputs.selectBoxs.group :selectItems='$data->conditions->group_select_items'></x-inputs.selectBoxs.group>
                        </x-containers.searchs.column>

                        {{--役職--}}
                        <x-containers.searchs.column :label='\PositionConst::LABEL_NAME_POSITION'>
                            <x-inputs.selectBoxs.position :selectItems='$data->conditions->position_select_items'></x-inputs.selectBoxs.position>
                        </x-containers.searchs.column>

                        {{--名前--}}
                        <x-containers.searchs.column :classs='["personal-name"]' :label='\UserConst::LABEL_NAME_PERSONAL_NAME'>
                            <x-inputs.textBoxs.personal-name :value='$data->conditions->personal_name'></x-inputs.textBoxs.personal-name>
                        </x-containers.searchs.column>

                        {{--管理者--}}
                        <x-containers.searchs.column>
                            <div><x-inputs.checkBoxs.admin checkBoxBeforeAndAfter='after'></x-inputs.checkBoxs.admin></div>
                        </x-containers.searchs.column>
                    </div>
                </x-slot>
                <x-slot name="detailConditions">
                    <div class="row">

                    </div>
                </x-slot>
            </x-containers.searchs.container>
        </div>

        <div class="maint-table-container">
            <x-tables.commons.table>
                <x-slot name="headers">
                    <div class="create-link"><a href="{{ route('user.create') }}" class="link-common"><i class="fa-solid fa-circle-plus"></i>新規ユーザを作成</a></div>
                </x-slot>
                <x-slot name="tableHeaders">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>ユーザID</th>
                        <th>ユーザ名</th>
                        <th>メールアドレス</th>
                        <th>所属</th>
                        <th>部門</th>
                        <th>グループ</th>
                        <th>役職</th>
                        <th>名前</th>
                        <th class="center">管理者</th>
                    </tr>
                </x-slot>
                <x-slot name="tableBodys">
                    @if ($data->user_list !== null)
                        @foreach ($data->user_list as $user)
                            <tr>
                                <td class="td-button-circle">
                                    <a>
                                        <x-buttons.commons.circle-delete-button></x-buttons.commons.circle-delete-button>
                                    </a>
                                </td>
                                <td class="td-button-circle">
                                    <a href="{{ route('user.update', ['id' => $user->id]) }}">
                                        <x-buttons.commons.circle-edit-button></x-buttons.commons.circle-edit-button>
                                    </a>
                                </td>
                                <td class="td-user-id"><a class="link-common">{{ \UserUtil::zeroPaddingId($user->id) }}</a></td>
                                <td class="td-user-name">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="td-affiliation">{{ $user->affiliationCode->name }}</td>
                                <td class="td-department">{{ $user->departmentCode->name }}</td>
                                <td class="td-group">{{ $user->groupCode->name }}</td>
                                <td class="td-position">{{ $user->positionCode->name }}</td>
                                <td class="td-personal-name">{{ $user->personal_name }}</td>
                                <td class="center">{{ \AppUtil::convertFlgMarkCircle($user->admin) }}</td>
                            </tr>    
                        @endforeach
                    @endif
                </x-slot>
                <x-slot name="footers">
                    <div>
                        {{--ページネーション--}}
                        @if ($data->user_list !== null)
                            {!! $data->user_list->links() !!}
                        @endif
                        <div>1</div>
                        <div>1</div>
                        <div>1</div>
                        <div>1</div>
                        <div>1</div>
                    </div>
                </x-slot>
            </x-tables.commons.table>
        </div>
    </div>
</main>
@endsection