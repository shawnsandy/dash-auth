@php
    if(!isset($privileges))
    $privileges = config("dashauth.abilities");
    if(!isset($roles))
    $roles = Dashauth::roles();
@endphp
@if(count($roles))

    @foreach ($roles as $role)
        <div class="manage-privileges">

            <div class="row">

                <div class="col-md-3">
                    <div class="flex-center ">
                        <p class="h4">
                            <a href="#" class="toggle-permissions">{{ ucwords($role->name) }} Role</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="privileges flex-center">

                        @foreach($privileges as $privilege => $ability )

                            @if($role->can($privilege) )
                                <a href="/" class="btn btn-success btn-sm" style="padding: 0 5px">{{ ucwords($ability) }}</a>
                            @else
                                <a href="/" class="btn btn-default btn-sm" style="padding: 0 5px">{{ ucwords($ability) }}</a>
                            @endif

                        @endforeach

                    </div>
                </div>

            </div>


        </div>
        <hr>
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
