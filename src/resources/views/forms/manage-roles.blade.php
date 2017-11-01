{{ Form::open(['url', 'auth/roles']) }}
{{ Form::hidden('role', $role) }}
{{ Form::hidden('user_id', $user) }}
{{ $slot }}
{{ Form::close() }}
