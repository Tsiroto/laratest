<div class="card m-1 w-75">
  <div class="card-body">
    <h5 class="card-title">
      <a href="{{ route('post', $post) }}" class="text-dark">{{ $post->title }}</a>
    </h5>
    <p class="text-secondary">{{ $post->body }}</p>
    <br>
    {{-- <p class="text-info">Published by {{ $post->user->name }}.</p> --}}
  </div>
</div>
