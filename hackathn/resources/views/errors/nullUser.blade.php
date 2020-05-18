
@section('title', '404')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - GSAP 404 typed message using SplitText </title>
  <link rel="stylesheet" href="{{asset('errors/css/style2.css')}}">
  <link rel="stylesheet" href="{{asset('errors/css/style.css')}}">

<style>

.copy-container>a{

    color:ffffff;
}

</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="copy-container center-xy">
    <p>
     <span class="typed"></span>
    

    </p>
   
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{asset('errors/js/main.js')}}"></script>
</body>
</html>