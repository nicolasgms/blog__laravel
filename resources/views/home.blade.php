@extends ('layouts.app')
@section ('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>{{Auth::user()->name}} | Tableau de bord</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
</br>
</br>
<div class="container">
  @if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif
  <div class="span3 well">
    <center>
      <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><i class="fas fa-user" style="font-size: 100px; color:#3D40FF;"></i></a>
      <h3>{{Auth::user()->name}}</h3>
      <h4>{{Auth::user()->email}}</h4>
    </center>
  </div>


<div style="margin:auto;" class="styles__LearningPreferencesStyled-sc-12bmj7v-0 epBefi">
<div class="styles__CategoryButtons-sc-12bmj7v-1 zWiuY">
    <a href="{{route('posts.create')}}" class="styles__CategoryButton-sc-12bmj7v-2 cPlcLj">
    <div class="styles__CategoryButton_Icon-sc-12bmj7v-3 habppD">
      <div>
        <center><i class="fas fa-plus-square" style="color:#3D40FF; font-size: 60px;"></i></center>
      </div>
    </div>
    <p class="jss86 jss89 jss77 " variant="h6" align="center"></i>Ajouter un article</p>
  </a><a  href="{{url('post_perso')}}" class="styles__CategoryButton-sc-12bmj7v-2 cPlcLj">
    <div class="styles__CategoryButton_Icon-sc-12bmj7v-3 habppD">
      <div>
      <i class="fas fa-list" style="color: #3D40FF; font-size: 60px;"></i>
      </div>
    </div>
    <p class="jss86 jss90 jss77 " variant="h6" align="center">Liste des articles</p>
  </a><a href="{{url('posts')}}" class="styles__CategoryButton-sc-12bmj7v-2 cPlcLj">
    <div class="styles__CategoryButton_Icon-sc-12bmj7v-3 habppD">
      <div>
        <center><i class="fas fa-home" style="color: #3D40FF; font-size: 60px;"></i></center>
      </div>
    </div>
    <p class="jss86 jss91 jss77 " variant="h6" align="center">Accueil</p>
  </a></div>
</div>

</div> 
</body>
</html>
@endsection

