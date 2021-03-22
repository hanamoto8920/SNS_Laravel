<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  <title>@yield('title')</title>
</head>

<body>
  <div class="header">
    @include('header')
  </div>
  <div class="container">
    <div class="content">
      @yield('content')
    </div>
  </div>
  <div class="footer">
    @include('footer')
  </div>
</body>

</html>