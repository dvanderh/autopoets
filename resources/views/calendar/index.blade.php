@extends('layouts.default')
@section('nav')
	<span><a href="/">Home</a> <a href="/contact">Contact</a> <a href="/calendar">Kalender</a> <a href="/products">Producten</a></span>
@stop
@section('content')
	{{ dd($calendar) }}
	{{ $calendar->date['2014-11-05'] }}

	<div class="calendar">
		<h3>Kalender</h3>
		<a href="/calendar/{{ $monthNum-1 }}"><</a> {{ $month }} <a href="/calendar/{{ $monthNum+1 }}">></a>
		<a href="/calendar/{{ $monthNum-12 }}"><</a> {{ $year }} <a href="/calendar/{{ $monthNum+12 }}">></a>
		<table>
			<tr>	
				<td>Ma</td>
				<td>Di</td>
				<td>Wo</td>
				<td>Do</td>
				<td>Vr</td>
				<td>Za</td>
				<td>Zo</td>
			</tr>
			@for($i=0;$i<($maxDays+$start-1);$i++)
				@if(($i % 7) == 0)
					<tr>
				@endif
				@if($i <= $start-2)
					 <td>{{ $prevMonth[$i] }}</td> 
				@else
					<td>{{ $i - $start + 2 }}</td>
				@endif
				@if(($i % 7) == 6)
				 	</tr>
				@endif
			@endfor

		</table>
	</div>
@stop