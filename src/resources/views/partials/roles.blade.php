<?php $roles = config('dashauth.roles'); ?>
@if(count($roles) && isset($user))
    <div class="roles">
        {{-- if user has role display add else display remove button--}}
        @foreach($roles as $role)
            @if($user->isAn($role))
                <a href="" class="btn btn-success">Remove Role</a>
            @else
                <a href="" class="btn btn-success">Add Role</a>
            @endif
        @endforeach
    </div>
@endif
