@extends ('layouts.menu')
@section('title', 'Accueil')

@section ('content')

  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Derniers Articles</strong></h4>

        <div class="row">
          @foreach($posts as $post)
          
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/storage/images/posts/{{$post->image}}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">
                  {{$post->chapo}}</h6></br></br>
                  {{$post->created_at}}
                </p>
                @auth
                @if($post->user->id == Auth::user()->id)
                  <div>
                    <a href="{{route('posts.edit', $post)}}">
                      <i class="fas fa-pencil-alt" style="color: #3D40FF;"></i>
                    </a>
                  </div>
                  <div>
                    <form class="" id="form" action="{{route('posts.destroy', $post)}}" method="post">
                      @csrf
                      {{method_field('delete')}}
                      <button type="submit" name="button" style="border: none; background-color: white;">
                        <i class="fas fa-trash" style="color: #3D40FF;"></i>
                      </button>
                    </form>

                  </div>
                @endif
                @endauth
                <a href="{{url('posts', $post)}}" class="btn btn-primary" >Read</a>
              </div>
            </div>
          </div>
          @endforeach


      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <!--Main layout-->
@endsection