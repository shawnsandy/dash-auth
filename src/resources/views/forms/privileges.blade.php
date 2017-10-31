@if(count(Dashauth::roles()))

@foreach(Dashauth::roles() as $role)

@if($user->isAn($role["name"]))
{{ $slot or "Description" }}
{{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
    {{ $remove_button or "Button" }}
@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    {{ $add_button or "Button" }}
@endif
{{ Form::hidden("role", $role["name"]) }}
{{ Form::hidden("user", $user->id) }}
{{ Form::close() }}

@endforeach

@else
<p>
Sorry no roles found
</p>
@endif
