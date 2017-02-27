<form class="add-que" action="/queue/add" method="post">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="service">Services</label>
		<div class="radio">
			<label>
				<input type="radio" name="service" value="Housing" checked>Housing</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="service" value="Benefits">Benefits</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="service" value="Council Tax">Council Tax</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="service" value="Fly-tipping">Fly-tipping</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="service" value="Missed Bin">Missed Bin</label>
		</div>
	</div>


	<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary active">
			<input class="type-toggler" name="type" value="Citizen" type="radio" value="Citizen" checked>Citizen</input>
		</label>
		<label class="btn btn-primary">
			<input class="type-toggler" name="type" value="Organisation" type="radio">Organisation</input>
		</label>
		<label class="btn btn-primary">
			<input class="type-toggler" name="type" value="Anonymous" type="radio">Anonymous</input>
		</label>
	</div>

	<br>
	<br>

	<div class="form-group citizen">
		<label for="title">Title</label>
		<select name="title" class="form-control" id="title">
			<option value=""></option>
			<option value="Mr">Mr</option>
			<option value="Mrs">Mrs</option>
			<option value="Mss">Mss</option>
			<option value="Dr">Dr</option>
		</select>
	</div>

	<div class="form-group citizen">
		<label for="name">First Name</label>
		<input type="text" name="name" class="form-control" id="name">
	</div>
	<div class="form-group citizen">
		<label for="surname">Last Name</label>
		<input type="text" name="surname" class="form-control" id="surname">
	</div>
	<div class="form-group organisation">
		<label for="organisation">Organisation Name</label>
		<input type="text" name="organisation" class="form-control" id="organisation">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
$('.organisation').hide();
$('.type-toggler').change(function (e) {
	 switch (e.target.value) {
		 case "Citizen":
		 	$('.citizen').show();
			$('.organisation').hide();
			break;
		case "Organisation":
			$('.citizen').hide();
			$('.organisation').show();
			break;
		case "Anonymous":
			$('.citizen').hide();
			$('.organisation').hide();
			break;
	 }

 });
</script>
