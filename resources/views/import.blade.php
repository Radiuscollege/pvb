@extends('layout')

@section('main')

	<form action="{{ route('import.import') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="pvb_file">CSV-bestand:</label>
			<input type="file" name="pvb_file" id="pvb_file">
			<small class="form-text text-muted">Selecteer een .csv bestand (geexporteerd van het tabblad 'planning examens').</small>
		</div>

		<button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
	</form>

@endsection