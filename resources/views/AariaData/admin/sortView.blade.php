@extends('layouts.app')
@section('content')
<form class="form-inline" action="" method="get">
  @csrf
  @if()
  <div class="form-group">
    <label for="exampleFormControlSelect1">user Select</label>
      <select class="form-control" id="exampleFormControlSelect1" name=""></select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
</form>
@endsection
