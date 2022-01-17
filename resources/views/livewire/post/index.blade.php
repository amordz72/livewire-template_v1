<div class="mx-5">

    @section('title')
    | All post
    @endsection
    <div class="grid">
        <div class="col-spane-12">
            col1
        </div>
        <div class="col-start-12">
            <div>
                data
            </div>

            <div class="flex justify-evenly"> {{ $posts->links() }}</div>
        </div>

    </div>






</div>
