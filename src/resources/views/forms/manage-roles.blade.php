{{ Form::open(['url', 'admin/auth/roles']) }}
{{ Form::hidden('role', $role) }}
{{ Form::hidden('user_id', $user) }}
{{ $slot }}
{{ Form::close() }}
