@php
    $roles = Dashauth::roles();

@endphp
@if(count($roles))

@foreach($roles as $role)

@if($user->isAn($role["name"]))

{{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put', "name" => $role["name"]]) }}
<p class="div flex-left">
<button class="{{ $btn_class or config("dashauth.btn_class") }}">
Remove {{ $role["name"]}} role
</button>
</p>

@else
    {{ Form::open(['url' => '/admin/auth/roles/', 'name' => ""]) }}
    <p>
    <button class="{{ $btn_class or config("dashauth.btn_class") }}">
Assign role {{ $role["name"]}}
</button>
    </p>
@endif
 {{ csrf_field() }}
{{ Form::hidden("role", $role["name"]) }}
{{ Form::hidden("user", $user->id) }}
{{ Form::close() }}

@endforeach

@else
<p>
Sorry no roles found
</p>
@endif
