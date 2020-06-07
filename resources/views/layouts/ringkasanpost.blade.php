<!-- Ringkasan Post -->
      @foreach($posts as $post)
        <div class="card mb-4">
            <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{ $post->title }}</h2>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{ $post->created_at }} by
              <a href="#">Start Bootstrap</a>
            </div>
        </div>
      @endforeach
{{-- 
	<div class="container">
		<br><br>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-3">
				<a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div> --}}
