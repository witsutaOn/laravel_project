<style>
@font-face{
	font-family:  'THSarabunNew';
	font-style: normal;
	font-weight: normal;
	src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
}
@font-face{
	font-family:  'THSarabunNew';
	font-style: normal;
	font-weight: normal;
	src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
}
@font-face{
	font-family:  'THSarabunNew';
	font-style: normal;
	font-weight: normal;
	src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
}
@font-face{
	font-family:  'THSarabunNew';
	font-style: normal;
	font-weight: normal;
	src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
	font-family: "THSarabunNew";
}
</style>

@forelse($table_position as $row)
	<h1>Position : {{ $row->position_id }} </h1>
	<div>
		<strong>position_id : </strong>
		<span>{{ $row->position_id }}</span>
	</div>
	<div>
		<strong>position_name : </strong>
		<span>{{ $row->position_name }}</span>
	</div>
	<div>
		<a href="{{ url('/') }}/position">back to employee</a>
	</div>
	สวัสดี
@empty
	<div>This Employee "id" does not exist</div>
@endforelse
