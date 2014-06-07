@extends('layout')

@section('content')
<form method='post'>
Name <input type='text' name='name'>
Email <input type='text' name='email'>
<input type='submit' value='Create'>
</form>
@stop