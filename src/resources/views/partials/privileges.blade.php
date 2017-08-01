@if(count($roles))

    @foreach ($roles as $role => $name)
        <div class="manage-privileges">

            <div class="row">
                <div class="flex-center ">
                    <div class="col-md-3">
                        <button class="btn btn-primary btn-block toggle-permissions">
                            {{ ucwords($name["name"]) }} Role
                        </button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="privileges flex-center">
                        <div class="row">
                            @foreach($privileges as $privilege => $name )
                                <a href="/" class="btn btn-link btn-xs">{{ ucwords($name) }} |</a>
                            @endforeach
                            <button class="btn btn-link btn-xs toggle-permissions">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    @endforeach

@else

    <p class="alert alert-warning text-center lead">
        We have not found any roles or permissions assigned, if you are the super / system admin please setup roles and
        privileges now!
    </p>
    <p class="text-center">
        <a href="/admin/auth/setup" class="btn btn-danger btn-lg">Setup Roles and Abilities</a>
    </p>

@endif
{{ dump(Dashauth::roles()) }}

@push('styles')
<style>
    .privileges {
        display: none;
    }

    .manage-privileges {
        margin-bottom: 22px;
    }
</style>
@endpush

@push("scripts")
<script>
    $(".manage-privileges").each(function () {

        var toggle_permissions = $(this).find(".toggle-permissions");
        var privilegs = $(this).find(".privileges");

        toggle_permissions.click(function (e) {
            $(".privileges").fadeOut();
            e.preventDefault();
            privilegs.fadeToggle();
        })
    })
</script>
@endpush
