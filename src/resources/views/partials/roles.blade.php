<?php $roles = config('dashauth.roles'); ?>
@if(count($roles) && isset($user))
    <div class="roles">
        {{-- if user has role display add else display remove button--}}
        <ul class="list-group">
        @foreach($roles as $role)
            <li class="list-group-item">
            @if($user->isAn($role))
               <a href="" class="btn btn-link btn-block">Remove {{ $role }} Role</a>
            @else
               <a href="" class="btn btn-link btn-block">Add {{ $role }} Role</a>
            @endif
            </li>
        @endforeach
        </ul>
    </div>
@endif
