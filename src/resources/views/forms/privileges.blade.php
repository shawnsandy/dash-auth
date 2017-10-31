@if($user->isAn($role["name"]))
    {{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
    <button type="submit" class="{{ config("dashauth.btn_class") }}">Remove {{ $role["title"] }} Role
    </button>
@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    <button type="submit" class="{{ config("dashauth.btn_class") }}">Add {{ $role["title"] }}
    Role
    </button>
@endif
{{ Form::hidden("role", $role["name"]) }}
{{ Form::hidden("user", $user->id) }}
{{ Form::close() }}
