@if($user->isAn($role["name"]))
    {{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
    <button type="submit" class="btn btn-link btn-sm">Remove {{ $role["title"] }} Role</button>
@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    <button type="submit" class="btn btn-link btn-sm">Add {{ $role["title"] }} Role</button>
@endif
{{ Form::hidden("role", $role["name"]) }}
{{ Form::hidden("user", $user->id) }}
{{ Form::close() }}
