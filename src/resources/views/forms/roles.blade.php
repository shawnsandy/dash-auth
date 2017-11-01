@php
    $roles = Dashauth::roles()
@endphp
@if(count($roles))

@foreach($roles as $role)

@if($user->isAn($role["name"]))

{{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
<p class="div flex-left">
<button class="{{ $btn_class or config("dashauth.btn_class") }}">
Remove {{ $role["name"]}} role
</button>
</p>

@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
    <p>
    <button class="{{ $btn_class or config("dashauth.btn_class") }}">
Assign role {{ $role["name"]}}
</button>
    </p>
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
