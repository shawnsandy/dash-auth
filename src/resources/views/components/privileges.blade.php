@php

if(!isset($privileges))
$privileges = config("dashauth.abilities");
if(!isset($roles))
$roles = Dashauth::roles();



@endphp

{{ $slot or null }}
<table class="{{ config("dashauth.table_class") }}">

    <thead>
        <tr>
            <th class="is-light">Abilities</th>
            @foreach($privileges as $aKey => $aName)
                <th class="{{ $aKey }}">{{ $aName }}</th>
            @endforeach
        </tr>
    </thead>

    <tbody>
        @foreach($roles as $role)

        <tr>
        <td class="{{ $role["id"] }} is-capitalized is-light">
        {{ $role["name"] }}
        </td>
        @foreach($privileges as $aKey => $aName)
            <td class="{{ $aKey }}">
                @if($role->can($aKey) )
                    <a href="/dashauth/privileges/remove?role={{ $role["name"]}}&privilege={{  $aKey }}" class="">Remove Ability</a>
                @else
                    <a href="/dashauth/privileges/assign?role={{ $role["name"]}}&privilege={{  $aKey }}" class="">Assign Ability</a>
                @endif
            </td>
        @endforeach
        </tr>


        @endforeach
    </tbody>

</table>
