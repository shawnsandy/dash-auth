@php
{{--  User role admin component  --}}
    $auth_roles = Dashauth::roles();

    $current_user = Auth::user();


@endphp



@if(  config("dashauth.setup") || Bouncer::is($current_user)->isAn('superadmin', 'admin') )

    @if(count($auth_roles) > 0 && isset($user))

        <div class="roles">
            {{-- if user has role display add else display remove button--}}
            <ul class="list-group">
                @foreach($auth_roles as $key => $role)
                    <li class="list-group-item">
                        @if($user->isAn($role["name"]))
                            {{ Form::open(['url' => '/admin/auth/roles/'.$role["name"], 'method' => 'put',]) }}
                            <button type="submit" class="">Remove {{ $role["title"] }} Role</button>
                        @else
                            {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $role["name"]]) }}
                            <button type="submit" class="">Add {{ $role["title"] }} Role</button>
                        @endif
                        {{ Form::hidden("role", $role["name"]) }}
                        {{ Form::hidden("user", $user->id) }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

@endif
