<html lang="en">
  <head>
     <title>Floating labels example · Bootstrap</title>  

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" > 
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}" > 
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}" >

    
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          
      
    <form class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
    
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>
</div>
    <script src="{{ asset('plugins/styles/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/styles/jquery.js') }}"></script>
    <script src="{{ asset('plugins/styles/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/styles/all.js') }}"></script> 
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
</body>
</html>
