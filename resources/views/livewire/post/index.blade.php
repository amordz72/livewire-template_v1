<div class="mx-5">
  <h1 class="bg-red-500 text-center my-5">index</h1>
  <input type="text" wire:model.lazy='name'><br>


<ul>
  @foreach ($posts as $post)
   <li class="bg-gray-300"><span>{{ $post->title }}</span></li>
  @endforeach
  </ul>
  <br>

 <div class="flex justify-evenly"> {{ $posts->links() }}</div>


</div>
