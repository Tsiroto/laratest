<div class="card m-1 w-75">
  <div class="card-body">
    <h4 class="card-title">
      <a href="{{ route('post', $post) }}" class="text-dark">{{ $post->title }}</a>
    </h4>
    <p class="text-secondary">{{ $post->body }}</p>
    <br>
    <p class="text-info">And that's it. We have finished programming. Now let's go learn gardening.</p>
    <a href="#" class="btn btn-primary text-center">Go gardening</a>
  </div>
</div>
