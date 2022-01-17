<div class="mx-5">

    @section('title')
    | All post
    @endsection


    <div class="grid grid-cols-12 gap-1 mb-5">
        <div class="col-start-0 col-span-4 bg-slate-400">01</div>
        <div class="col-start-5 col-end-12 bg-red-400">02</div>

      </div>



    <div class="flex justify-evenly"> {{ $posts->links() }}</div>


</div>
