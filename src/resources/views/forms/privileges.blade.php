@if($user->isAn($role["name"]))
{{ $slot }}
{{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
    {{ $remove_button }}
@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    {{ $add_button }}
@endif
{{ Form::hidden("role", $role["name"]) }}
{{ Form::hidden("user", $user->id) }}
{{ Form::close() }}
