@php

    $auth_roles = Dashauth::roles();

    $current_user = Auth::user();


@endphp



@if(  config("dashauth.setup") || Bouncer::is($current_user)->a('superadmin', 'admin') )

    @if(count($auth_roles) > 0 && isset($user))

        <div class="roles">
            {{-- if user has role display add else display remove button--}}
            <ul class="list-group">
                @foreach($auth_roles as $key => $role)
                    <li class="list-group-item">
                        @if($user->isAn($role["name"]))
                            {{ Form::open(['url' => '/dashauth/roles/'.$role["name"], 'method' => 'put',]) }}
                            <p>
                             <button type="submit" class="{{ $btn_class }}">Remove {{ $role["title"] }} Role</button>
                            </p>
                        @else
                            {{ Form::open(['url' => '/dashauth/roles/', 'name' => $role["name"]]) }}
                            <p>
                             <button type="submit" class="{{ $btn_class }}">Add {{ $role["title"] }} Role</button>
                            </p>
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
