<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modifier un article</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/form_create/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/form_create/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/form_create/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/form_create/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/form_create/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/form_create/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/form_create/css/main.css">

	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

	    <!--highlight js-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
<!--===============================================================================================-->
</head>
<body style="background-color: #3D40FF;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="\assets\img\ng.png" style="width: 1000px; margin-top: -100px;">
				</div>

				<form id="form" enctype="multipart/form-data" method="post" action="{{url('posts', $post)}}" class="login100-form validate-form" style="margin-top: -50px;">
					<span class="login100-form-title">
						Modifier un article
					</span>

					@csrf
					{{method_field('patch')}}

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="title" value="{{$post->title}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="c" name="chapo" value="{{$post->chapo}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" required>
                        <input type="text" hidden name="content" value="">
                        <div class="" id="content" style="height: 300px;">
						{!!$post->content!!}
                        </div>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<center>Ajouter un image</center>
						<input  type="file" name="image">
						<span class="focus-input100"></span>
						<span class="symbol-input100"></span>
					</div>

					<input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color:#3D40FF;">
							Modifier
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<!--quill js-->
		<!-- Include the quill Library-->
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
		<script src="/js/quill/image-resize.min.js"></script>
		<script src="/js/quill/video-resize.min.js"></script>

<!--===============================================================================================-->	
	<script src="/assets/form_create/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/form_create/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/form_create/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/form_create/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/form_create/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	
    //initialisation de l'editeur
	var options = {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['size', 'bold', 'italic', 'underline'],
      ['image', 'code-block', 'video', 'blockquote', 'code', 'align',{align:'center'}, 'link'],
      ['color'],
      [{ list: 'ordered' }, { list: 'bullet' },]
  ],
  imageResize: {
       modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
   },
   videoResize: {
          modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
      },
   syntax: true,
  },
  placeholder: 'Ecrivez ici...',
  theme: 'snow'  // or 'bubble'
  };
  var quill = new Quill('#content', options);
  //a la sumission  du formulmaire on recup??re
            //le contenu de la div qui a le texte riche
            //et on met ce contenu dans l'input hidden
            var form = document.getElementById('form');
            form.onsubmit = function() {
              // Populate hidden form on submit
              var text = document.querySelector('input[name=content]');
              text.value = quill.root.innerHTML;
            //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());
              // No back end to actually submit to!
            //   alert('Open the console to see the submit data!')
              return true;
            };

	</script>

</body>
</html>