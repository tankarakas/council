@extends('layouts.queue')
@section('title')
	Queue
@endsection
@section('content')
<div class="row">
	<div class="col-md-12" style="text-align: center">
		<h1>Queue App</h1>
	</div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">New Customer</div>
            <div class="panel-body">
                @include('partials.queueform')
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Queue</div>
            <div class="panel-body">
                <p>
					List of the customers being queued
                </p>
            </div>

            <table class="table">
                <thead>
                	<tr>
                		<th>#</th>
						<th>Type</th>
						<th>Name</th>
						<th>Service</th>
						<th>Queued At</th>
                	</tr>
                </thead>
				<tbody>
					@foreach ($queue as $customer)
						<tr>
							<td>{{ $customer->id }}</td>
							<td>{{ $customer->type }}</td>

							@if ($customer->type == 'Citizen' && $customer->title != "")
								<td>{{ $customer->title }}. {{ $customer->name }} {{ $customer->surname }}</td>
							@elseif ($customer->type == 'Citizen' && $customer->title == "")
								<td>{{ $customer->name }} {{ $customer->surname }}</td>
							@elseif ($customer->type == 'Organisation')
								<td>{{ $customer->organisation }}</td>
							@elseif ($customer->type == 'Anonymous')
								<td>Anonymous</td>
							@else
								<td>no information</td>
							@endif

							<td>{{ $customer->service }}</td>
							<td>{{ date('H:i', strtotime($customer->queued_at)) }}</td>
						</tr>
					@endforeach
				</tbody>
            </table>
        </div>
    </div>
</div>

<script>
</script>
@endsection
