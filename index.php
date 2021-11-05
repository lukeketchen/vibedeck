<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vibe Deck</title>
</head>
<style>
	body{
		background: #EFEFEF;
		display: flex;
		justify-self: center;
		align-items: center;
		height: 100vh;
	}
	.container{
		max-width: 50%;
		margin: auto;
		background: white;
		border-radius: 2rem;
		padding: 3rem;
		text-align: center;
		box-shadow: 0 30px 40px rgba(0,0,0,.1);
	}
	button{
		background: #A9A9A9;
		padding: 1rem 2rem;
		border-radius: 1rem;
	}
	button:hover{
		cursor: pointer;
	}
	.pushable {
		background: hsl(340deg 100% 32%);
		border-radius: 12px;
		border: none;
		padding: 0;
		cursor: pointer;
		outline-offset: 4px;
	}
	.front {
		display: block;
		padding: 12px 42px;
		border-radius: 12px;
		font-size: 1.25rem;
		background: hsl(345deg 100% 47%);
		color: white;
		transform: translateY(-6px);
	}

	.pushable:active .front {
		transform: translateY(-2px);
	}
</style>
<body>
	<div class="container">
		<h1>Vibe Deck</h1>
		<p>Click the button to refresh what you will be jammin too</p>
		<div class="action">
			<button class="pushable" onClick="window.location.reload();">
				<span class="front">
					Generate
				</span>
			</button>
		</div>
		<?php
			$json = json_decode(file_get_contents('genres.json'));
			$one_item = $json[rand(0, count($json) - 1)];
			$one_item_string = json_encode($one_item);
		?>
		<h3><?= $one_item;?></h3>
	</div>

</body>
</html>
