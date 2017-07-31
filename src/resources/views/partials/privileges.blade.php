@foreach ($abilities as $ability => $name)
    <div class="row">
        <div class="flex-center ">
            <div class="col-md-6">{{ $name }}</div>
            <div class="col-md-6 text-right">
                <button class="btn btn-primary btn-sm show-permissions">Assign Permissions</button>
            </div>
        </div>
    </div>


    <hr>
@endforeach
{{ dump(Dashauth::roles()) }}
@push("scripts")
    <script>

    </script>
@endpush
