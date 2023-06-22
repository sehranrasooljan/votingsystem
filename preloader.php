<!DOCTYPE html>
<html lang="en">
<head>
<div class="self-container" style="margin:0; padding: 0;">
	<!-- <title>Loading</title> -->

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	

<div class="page">
<link rel= "stylesheet" type= "text/css" href = "/static/diary/updatepage.css">
<script src="https://cdn.tiny.cloud/1/tqa92zf2lukln0ritoavtb2b9ospf6898jnd0senmv5ahfk9/tinymce/5/tinymce.min.js"></script>
	
        <script src="jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <style>
    
        .preload{
            font-family: sans-serif;
            position: fixed;
            top: 0;
            width: 100%;
            height: 100vh;
            background: deepskyblue;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease;
        }
					
        .loading{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 40px;
            display: flex;
            align-items: center;
            transition: opacity 0.5 ease;
        }
        h1.text{
		color: white;
		position: fixed;
		top: 40%;
	}

	.preload-finish{
		opacity: 0;
		pointer-events: none;
	}


	.obj{
		width: 6px;
		height: 4px;
		background: white;
		margin: 0 3px;
		border-radius: 10px;
		animation: loading 0.8s infinite;
	}

	.obj:nth-child(2){
		animation-delay: 0.1s;
	}

	.obj:nth-child(3){
		animation-delay: 0.2s;
	}

	.obj:nth-child(4){
		animation-delay: 0.3s;
	}

	.obj:nth-child(5){
		animation-delay: 0.4s;
	}

	.obj:nth-child(6){
		animation-delay: 0.5s;
	}

	.obj:nth-child(7){
		animation-delay: 0.6s;
	}

	.obj:nth-child(8){
		animation-delay: 0.7s;
	}

	@keyframes loading {
		0%{
			height: 0;
		}
		50%{
			height: 40px;
		}
		100%{
			height: 0;
		}
	}


	</style>
	<div class="preload">
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<div class="obj"></div>
		<h1 class="text">Voting</h1>
	</div>
	<script>
		window.addEventListener("load", ()=>{
			const preload  = document.querySelector(".preload");
			preload.classList.add("preload-finish");
		});
	</script>
</body>
</html>
<!-- .....................................................................................	 -->

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    