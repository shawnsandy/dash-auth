@php
    $roles = Dashauth::roles()
@endphp
@if(count($roles))

{{ $slot or "Description"}}

@foreach($roles as $role)

@if($user->isAn($role["name"]))
{{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
    {{ $remove_button or "Remove Role ".$role["name"] }}
@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    {{ $add_button or "Assign Role ".$role["name"] }}
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
