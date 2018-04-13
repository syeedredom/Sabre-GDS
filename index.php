<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sabre API</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	
<div id="app">
	<div class="container">
	<h1>Sabre GDS</h1>
		<div class="form">
			<form action="#" id="gf">
				<div class="form-group">
					<select class="form-control" name="trip">
						<option value="1">RoundTrip</option>
						<option value="2">One Way</option>
						<option value="3">Multi-City</option>
					</select>
				</div>
				<div class="row form-group">
					<div class="col">
						<input type="text" class="form-control" name="from" placeholder="Flying From">
					</div>
					<div class="col">
						<input type="text" class="form-control" name="to" placeholder="Flying To">
					</div>
				</div>
				<div class="form-group">
					<input type="date" class="form-control" name="depDate" placeholder="Departuredate">
				</div>
				<button type="button" class="btn btn-sm" id="submit">Look Up</button>
			</form>
		</div>

<hr>
<!-- Button trigger modal -->
<button v-on:click="AirlineLookup" type="button" class="btn btn-primary" data-toggle="modal" data-target="#AirlineLookup">
  Airline Lookup
</button>

<!-- Modal -->
<div class="modal fade" id="AirlineLookup" tabindex="-1" role="dialog" aria-labelledby="AirlineLookupLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AirlineLookupLabel">Airline Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="airlines">
	        <table class="table  table-striped">
	        	<thead>
	        		<tr>
	        			<td>Airline Code</td>
	        			<td>Airline Name</td>
	        			<td>Alternate Business Name</td>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<tr v-for="airline in AirlineInfo">
	        			<td><span class="AC">{{airline.AirlineCode}}</span></td>
	        			<td><span class="AN">{{airline.AirlineName}}</span></td>
	        			<td><span class="ABN">{{airline.AlternativeBusinessName}}</span></td>
	        		</tr>
	        	</tbody>
	        </table>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><!-- end modal -->
	</div><!-- end container -->
	

</div><!-- #app vue-init-->
	

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- VUE JS: development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script src="scripts.js"></script>
</body>
</html>