<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

	<title>NTQ Solution Admin Control Panel</title>
	  
	<link rel="icon" type="image/ico" href="favicon.ico"/> 
	   <!-- Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	 {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
	  {!! Html::style('css/app.css') !!} 
	  {!! Html::style('css/icons.css') !!} 
	  {!! Html::style('css/login.css') !!} 

	  {!! HTML::script('js/jquery-1.11.1.min.js'); !!}
	  {!! HTML::script('js/bootstrap.min.js'); !!} 
	  {!! HTML::script('js/common.js'); !!} 

</head>
<body>
	
	<div class="header">
		<a class="logo" href="list-categories.html">  
			{{ HTML::image('img/logo.png', 
                           'Admin Control Panel', 
                           array('title' => 'Admin Control Panel')) }}  
 		</a>

	</div>

	<div class="menu">

		<div class="breadLine">
			<div class="arrow"></div>
			<div class="adminControl active">
				Hi, Ta Quoc Vuong
			</div>
		</div>

		<div class="admin">
	        <div class="image">
	        	{{ HTML::image('img/users/avatar.jpg', 
                           'avatart', 
                           array('title' => 'avatart', 'class' => 'img-polaroid')) }}  
	        </div>
	        <ul class="control">
	            <li><span class="icon-cog"></span> <a href="#">Update Profile</a></li>
	            <li><span class="icon-share-alt"></span> <a href="#">Logout</a></li>
	        </ul>
	    </div>

		<ul class="navigation" id="all-controller"> 
			<li>
				<a href= "{{route('users.index')}}">
					<span class="isw-grid"></span><span class="text">Users</span>
				</a>  
	        </li>
	        <li>
	            <a href="permissions/">
	                <span class="isw-list"></span><span class="text">Permissions</span>
	            </a>
	        </li>
	        <li>
	        	<a href= "{{route('roles.index')}}">
					<span class="isw-user"></span><span class="text">Roles</span>
				</a>  
	        </li>
		</ul>

	</div>

	@yield('content')

</body>
</html>