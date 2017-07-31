@if(count($roles))

@foreach ($roles as $role => $name)
    <div class="row">
        <div class="flex-center ">
            <div class="col-md-6">{{ ucwords($name["name"]) }}</div>
            <div class="col-md-6 text-right">
                <button class="btn btn-primary btn-sm show-permissions">Assign Permissions</button>
            </div>
        </div>
    </div>
    <hr>
@endforeach

@else

    <p class="alert alert-warning text-center lead">
        We have not found any roles or permissions assigned, if you are the super  / system admin please setup roles and privileges now!
    </p>
    <p class="text-center">
        <a href="/admin/auth/setup" class="btn btn-danger btn-lg">Setup Roles and Abilities</a>
    </p>

@endif
{{ dump(Dashauth::roles()) }}
@push("scripts")
    <script>

    </script>
@endpush
