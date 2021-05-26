@extends ('layouts.menu')
@section('title', $post->title)

@section ('content')
<center>
<div class="col-lg-8 col-md-24 mb-8">
</br>
</br>
</br>
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                </br>
                </br>
                <h5 class="card-title">{{$post->title}}</h5>
                <strong>{{$post->user->name}}</br></br></strong>
                <img src="/storage/images/posts/{{$post->image}}" class="img-fluid" />
                <a href="#!">
                </a>
              </div>
              <div class="card-body"style="text-align: justify;">
                
                <p class="card-text" >
                   {!!$post->content!!}
                </p>
                <p style="text-align: right;">{{$post->created_at}}</p>
              </div>
            </div>
          </div>
</center>