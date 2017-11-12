@extends('common.layouts_bootstrap')
@section('content')
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        {{--<button type="button" class="btn btn-outline-primary">管理者</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">管理者な教員</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">学生</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">通学教務</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">学サポ</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">通信教務</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">通教・通信</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">通学のみ</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">通教のみ</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">ITC</button>--}}
        {{--<button type="button" class="btn btn-outline-primary">MEC</button>--}}

        <form method="POST" action="{{ action('Debug\User\ImpersonateController@manualUpdate') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="userName">氏名</label>
                <input type="text" name="display_name" value="{{ old('display_name') }}" class="form-control"
                       id="userName" aria-describedby="userNameHelp" placeholder="">
                <small id="userNameHelp" class="form-text text-muted">$_SERVER['DisplayName']
                    = {{ $middlewareDisplayName }}</small>
            </div>
            <div class="form-group">
                <label for="uid">ユーザーID</label>
                <input type="text" name="uid" value="{{ old('uid') }}" class="form-control" id="uid"
                       aria-describedby="uidHelp" placeholder="">
                <small id="uidHelp" class="form-text text-muted">$_SERVER['uid'] = {{ $middlewareUID }}</small>
            </div>
            <div class="form-group">
                <label for="employeeNum">学籍番号・教職員番号</label>
                <input type="text" name="employee_number" value="{{ old('employee_number') }}" class="form-control"
                       id="employeeNum" aria-describedby="employeeNumHelp" placeholder="">
                <small id="employeeNumHelp" class="form-text text-muted">$_SERVER['employeeNumber']
                    = {{ $middlewareEmployeeNumber }}</small>
            </div>
            <div class="form-group">
                <label for="uA">所属</label>
                <select class="form-control" name="unscoped_affiliation" id="uA" aria-describedby="uAHelp">
                    <option value="student">学生(student)</option>
                    <option value="faculty">教員(faculty)</option>
                    <option value="staff">職員(staff)</option>
                </select>
                <small id="uAHelp" class="form-text text-muted">$_SERVER['unscoped-affiliation']
                    = {{ $middlewareUnscopedAffiliation }}</small>
            </div>
            <div class="form-group">
                <label for="mail">メールアドレス</label>
                <input type="text" name="mail" value="{{ old('mail') }}" class="form-control" id="mail"
                       aria-describedby="mailHelp" placeholder="">
                <small id="mailHelp" class="form-text text-muted">$_SERVER['mail'] = {{ $middlewareMail }}</small>
            </div>
            <button type="submit" class="btn btn-primary">切り替え</button>
        </form>
    </main>
@endsection
