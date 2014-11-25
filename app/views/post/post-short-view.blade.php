
<div class="col-sm-4 col-md-4">
     <div class="portfolio_item wow animated flipInX"> <a href="../post/{{$post->id}}" data-path-hover="M 180,190 0,158 0,0 180,0 z">
          <figure style="background-image:url({{ $post->image() }})">
               <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                    <path d="M 180,0 0,0 0,0 180,0 z"/>
               </svg>
               <figcaption>
                    <p>{{strip_tags(str_limit($post->description, 150));}}</p>
                    <div class="view_button">Ver Más</div>
               </figcaption>
          </figure>
          </a>
          <div class="portfolio_description">
               <h3><a href="portfolio_item.html">{{$post->title}}</a></h3>
               <p>{{$user->username}} <span> {{$post->point}} Puntos</span></p>
          </div>
     </div>
</div>