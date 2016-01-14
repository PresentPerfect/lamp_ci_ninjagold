<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Page View</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		.container {
			margin: 20px;
		}
		.col-md-3 {
			/*outline: red 1px dotted;*/
			text-align: center;
		}
		.panel {
			padding-bottom: 10px;
		}

		p {
			margin:0;
			padding:0;
		}
	</style>
</head>
<body>
	<div class='container'>

		<h1>Your Current Gold: <?= $this->session->userdata('total_gold') ?></h1>

		<div class='row'>
			<div class='col-md-3'>
				<div class='panel panel-default'>
					<div class='panel-heading'><h2>Farm</h2></div>
					<div class='panel-body'>
						<h4>(earns 10-20 golds)</h4>
					</div>
					<form action='process_money' method='post'>
						<input type='hidden' name='building' value='farm'>
						<input type='submit' class='btn btn-primary'  value='Find Gold!'>
					</form>
				</div>
			</div>

			<div class='col-md-3'>
				<div class='panel panel-default'>
					<div class='panel-heading'><h2>Cave</h2></div>
					<div class='panel-body'>
						<h4>(earns 5-10 golds)</h4>
					</div>
					<form action='process_money' method='post'>
						<input type='hidden' name='building' value='cave'>
						<input type='submit' class='btn btn-primary'  value='Find Gold!'>
					</form>
				</div>
			</div>

			<div class='col-md-3'>
				<div class='panel panel-default'>
					<div class='panel-heading'><h2>House</h2></div>
					<div class='panel-body'>
						<h4>(earns 2-5 golds)</h4>
					</div>
					<form action='process_money' method='post'>
						<input type='hidden' name='building' value='house'>
						<input type='submit' class='btn btn-primary'  value='Find Gold!'>
					</form>
				</div>
			</div>

			<div class='col-md-3'>
				<div class='panel panel-default'>
					<div class='panel-heading'><h2>Casino</h2></div>
					<div class='panel-body'>
						<h4>(earns/takes 0-50 golds)</h4>
					</div>
					<form action='process_money' method='post'>
						<input type='hidden' name='building' value='casino'>
						<input type='submit' class='btn btn-primary'  value='Find Gold!'>
					</form>
				</div>
			</div>				
		</div>

		<b>Activies:</b>
		<div class='panel panel-default'>
			<div class='panel-body' style='max-height: 200px;overflow-y: scroll';>
<?=    			$this->session->userdata('message');
?>
			</div>
		</div>
		<a href="mains/reset"><button class='btn btn-warning'>Reset</button></a>
	</div>
</body>
</html>