<!DOCTYPE html>
<html>
<head>
<title>Laravel Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

.w-5{
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4">

<h3>Simple Search</h3><br>
<form action="{{ route('simple_search') }}" method="GET">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Type the name" aria-describedby="basic-addon2" name="search">
<div class="input-group-append">
<button class="btn btn-secondary" type="submit">Search</button>
</div>
</div>
</form>

</div>

<br>
<div class="col-md-8">
<h3>List of Students</h3>
<table class="table table-striped">
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>course</th>
</tr>
@foreach($student as $pep)
<tr>
<td>{{ $pep->id }}</td>
<td>{{ $pep->name }}</td>
<td>{{ $pep->email }}</td>
<td>{{ $pep->course }}</td>
</tr>
@endforeach
</table>
{{ $student->links() }}
</div>
</div>
</div>
</body>
</html>