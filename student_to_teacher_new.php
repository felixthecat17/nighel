<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Evaluation</title>
	<style type="text/css">
		body {
			background: rgb(2,0,36);
			background: linear-gradient(214deg, rgba(2,0,36,1) 0%, rgba(20,45,76,1) 25%, rgba(0,212,255,1) 100%); 
			color: #ececec;
			font-family: 'Trebuchet MS';
		}

		.container {
			background: rgba(255, 255, 255, 0.2);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(5px);
			-webkit-backdrop-filter: blur(5px);
			border: 1px solid rgba(255, 255, 255, 0.3);

			width: 100%;
			max-width: 1366px;
			min-height: 100vh;

			margin: auto;

/*			padding: 10px;*/
		}

		.container h1 {
			text-align: center;
			text-transform: uppercase;
			font-size: 25px;
			letter-spacing: 2px;
		}

		.timer p {
			margin: 20px;
  			text-align: right;
		}

		.user-info {
		  display: flex;
		  /*! justify-content: space-evenly; */
		  flex-wrap: wrap;
		  margin: 20px;
		  /*! align-content: center; */
		}
		.input-group {
		  width: auto;
		  margin: auto;
		  padding: 5px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<span class="timer">
			<p>Time: -</p>
		</span>
		<h1>Student Evaluation Of Teaching Behavior</h1>

		<div class="user-info">
			<div class="input-group">
				<label>Name or ID No.:</label>
				<input type="text" name="">
			</div>

			<div class="input-group">
				<label>Name or ID No.:</label>
				<input type="text" name="">
			</div>

			<div class="input-group">
				<label>Name or ID No.:</label>
				<input type="text" name="">
			</div>

			<div class="input-group">
				<label>Name or ID No.:</label>
				<input type="text" name="">
			</div>
		</div>
	</div>
</body>
</html>