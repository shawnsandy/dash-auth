@php

    $auth_roles = config('dashauth.roles');
    $current_user = Auth::user();

@endphp

@if( empty(config("dashauth.user_admins")) || $current_user->isAn($_role = config("dashauth.user_admins")) )

    @if(count($auth_roles) && isset($user))

        <div class="roles">
            {{-- if user has role display add else display remove button--}}
            <ul class="list-group">
                @foreach($auth_roles as $key => $title)
                    <li class="list-group-item">
                        @if($user->isAn($key))
                            {{ Form::open(['url' => '/admin/auth/roles/'.$key, 'method' => 'put',]) }}
                            <button type="submit" class="btn btn-link btn-sm">Remove {{ $title }} Role</button>
                        @else
                            {{ Form::open(['url' => '/admin/auth/roles/', 'name' => $key]) }}
                            <button type="submit" class="btn btn-link btn-sm">Add {{ $title }} Role</button>
                        @endif
                        {{ Form::hidden("role", $key) }}
                        {{ Form::hidden("user", $user->id) }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

@endif
