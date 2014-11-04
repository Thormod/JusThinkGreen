		<article class="clearfix">
			<div class="post-date">
				 {{ $post->created_at }} | <a href=""> {{Auth::user()->username}} </a> <span><a href="">0 comentarios</a></span>
			</div>		
			<h2><a href="">{{$post->title}}</a></h2>
			<p>{{strip_tags(str_limit($post->content_text, 1500));}}.
			</p>
			<div class="panel-footer" style="text-align: right">
			    	Puntuación: {{$post->point}} <a href="/post/{{$post->id}}" class="btn btn-default" role="button">Ver más</a>
			  	</div>
		</article>
