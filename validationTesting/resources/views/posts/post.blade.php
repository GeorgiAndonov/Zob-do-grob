        <div class="blog-post">
          <a href="/posts/{{$post->id}}">

            <h2 class="blog-post-title">{{$post->title}}</h2>
            
            </a>

            <p class="blog-post-meta">

               Created at: {{$post->created_at->toFormattedDateString()}}

               By {{$post->user->name}}

            </p>

           {{$post->body}}
          </div><!-- /.blog-post -->