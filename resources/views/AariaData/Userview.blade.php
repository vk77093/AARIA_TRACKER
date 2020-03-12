@extends('layouts.app')
@section('content')
<style>
.mystyle{
 border: 4px solid black;
}
</style>
<div class="alert alert-info" role="alert">
        <h6 class="text-center" style="margin-top:2px;">User DATA</h6>
        </div>
<br />
@if(Session::has('Data_Submit'))
<p class="alert alert-danger">
  {{session('Data_Submit')}}
</p>
@endif

<table class="table table-hover table-bordered table-condensed mystyle">
  <thead>
    <tr>
      <th>Id</th>
       <th>User</th>
       <th>Company Name</th>
       <th>Address</th>
       <th>mobile Num</th>
       <th>Conatct Person</th>
        <th>Designation</th>
       <th>NatureOfBuss</th>
       <th>dateOfVisit</th>
       <th>purposeVisit</th>
       <th>Minutes Of Meeting</th>
       <th>Visit Status</th>
       <th>Review points</th>
       <th>Compotitors Brand</th>
        <th>Interested Segmanet</th>
        <th>call Productive</th>
        <th>Created_at</th>
    </tr>
  </thead>
  <tbody>
    @if($trackerData)
    @foreach($trackerData as $data)
    <tr>
      <td><a href="{{route('userauth.trackerSubmit.edit',$data->id)}}">{{$data->id}}</a></td>
      <td>{{$data->user->name}}</td>
<td><a href="{{route('userauth.trackerSubmit.edit',$data->comp_name)}}">{{$data->comp_name}}</a></td>
      <td>{{$data->address}}</td>
      <td>{{$data->mobileNum}}</td>
      <td>{{$data->contact_person}}</td>
      <td>{{$data->designation}}</td>
      <td>{{$data->natureBuss}}</td>
      <td>{{$data->dateOfVisit}}</td>
      <td>{{$data->purposeVisit}}</td>
      <td>{{$data->mom}}</td>
      <td>{{$data->visitStatus}}</td>
      <td>{{$data->reviewpoints}}</td>
      <td>{{$data->comptbrand}}</td>
      <td>{{$data->Interested}}</td>
      <td>{{$data->callProd}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
    </tr>
    @endforeach
   @endif
  </tbody>

</table>

<nav aria-label="Page navigation example">
 <ul class="pagination justify-content-center">
    {{$trackerData->render()}}
  </ul>

</nav>
@endsection
