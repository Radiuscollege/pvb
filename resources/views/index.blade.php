@extends('layout')

@section('main')

	<table class="table table-hover">
		<thead>
			<tr>
				<th class="d-md-none">Datum</th>
				<th class="d-none d-md-table-cell">Datum</th>
				<th class="time">Tijd</th>
				<th class="room">Lok.</th>
				<th>Naam</th>
				<th class="d-none d-md-table-cell">KT</th>
				<th class="d-none d-md-table-cell">Casus</th>
				<th class="d-none d-sm-table-cell">Exam1</th>
				<th class="d-none d-sm-table-cell">Exam2</th>
			</tr>
		</thead>
		<tbody>

			@foreach($interviews as $interview)
				<tr>
					<td class="d-md-none">{{ $interview->date->format('d-m') }}</td>
					<td class="d-none d-md-table-cell">{{ $interview->date->format('l j F') }}</td>
					<td class="time">{{ $interview->time }}</td>
					<td class="room">{{ $interview->room }}</td>
					<td>{{ $interview->student_name }}</td>
					<td class="d-none d-md-table-cell">{{ $interview->kerntaak }}</td>
					<td class="d-none d-md-table-cell">{{ $interview->case_number }}</td>
					<td class="d-none d-sm-table-cell">{{ $interview->assessor_1 }}</td>
					<td class="d-none d-sm-table-cell">{{ $interview->assessor_2 }}</td>
				</tr>
			@endforeach

		</tbody>
	</table>

@endsection