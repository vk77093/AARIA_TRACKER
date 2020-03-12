@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{__('AARIA UPADTE TRACKER DATA')}}
        </div>
        <div class="card-body">
          @if($trackerData)
          <form method="POST" action="{{route('userauth.trackerSubmit.update',$trackerData->id)}}">
            @csrf
             @method('PATCH')
            <div class="form-group row">
              <label for="trackermaster_id" class="col-md-4 col-form-label text-md-right">{{__('Tracker ID')}}</label>
              <div class="col-md-6">
                <input id="trackermaster_id" type="number" name="trackermaster_id" class="form-control" required value="{{$trackerData->id}}"readonly autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="user_id" class="col-md-4 col-form-label text-md-right">{{__('User_id ID')}}</label>
              <div class="col-md-6">
                <input id="user_id" type="number" name="user_id" class="form-control" required value="{{$trackerData->user_id}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="comp_name" class="col-md-4 col-form-label text-md-right">{{__('COMPANY NAME')}}</label>
              <div class="col-md-6">
                <input id="comp_name" type="text" name="comp_name" class="form-control" required value="{{$trackerData->comp_name}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">{{__('Address')}}</label>
              <div class="col-md-6">
                <input id="address" type="text" name="address" class="form-control" required value="{{$trackerData->address}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="mobileNum" class="col-md-4 col-form-label text-md-right">{{__('Mobile Number')}}</label>
              <div class="col-md-6">
                <input id="mobileNum" type="text" name="address" class="form-control" required value="{{$trackerData->mobileNum}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="contact_person" class="col-md-4 col-form-label text-md-right">{{__('contact_person')}}</label>
              <div class="col-md-6">
                <input id="contact_person" type="text" name="contact_person" class="form-control" required value="{{$trackerData->contact_person}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="designation" class="col-md-4 col-form-label text-md-right">{{__('designation')}}</label>
              <div class="col-md-6">
                <input id="designation" type="text" name="designation" class="form-control" required value="{{$trackerData->designation}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="natureBuss" class="col-md-4 col-form-label text-md-right">{{__('natureBuss')}}</label>
              <div class="col-md-6">
                <input id="natureBuss" type="text" name="natureBuss" class="form-control" required value="{{$trackerData->natureBuss}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="comptbrand" class="col-md-4 col-form-label text-md-right">{{__('comptbrand')}}</label>
              <div class="col-md-6">
                <input id="comptbrand" type="text" name="comptbrand" class="form-control" required value="{{$trackerData->comptbrand}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="dateOfVisit1" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit1')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit1" type="date" name="dateOfVisit1" class="form-control" required value="{{$trackerData->dateOfVisit}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="purposeVisit1" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit1')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit1" type="text" name="purposeVisit1" class="form-control" required value="{{$trackerData->purposeVisit}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="remarks1" class="col-md-4 col-form-label text-md-right">{{__('remarks1')}}</label>
              <div class="col-md-6">
                <input id="remarks1" type="text" name="remarks1" class="form-control" required value="{{$trackerData->reviewpoints}}" disabled>
              </div>
            </div>
            @if($trackerData->dateOfVisit2!==null)

            <div class="form-group row">
              <label for="dateOfVisit2" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit2')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit2" type="date" name="dateOfVisit2" class="form-control" value="{{$trackerData->dateOfVisit2}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="dateOfVisit2" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit2')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit2" type="date" name="dateOfVisit2" class="form-control">
              </div>
            </div>
            @endif

            @if($trackerData->purposeVisit2!==null)
            <div class="form-group row">
              <label for="purposeVisit2" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit')}}</label>
            <div class="col-md-6">
              <input id="purposeVisit2" type="text" class="form-control" name="purposeVisit2" value="{{$trackerData->purposeVisit2}}" required readonly>
              </div>
               </div>
            @else
            <div class="form-group row">
              <label for="purposeVisit2" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit')}}</label>
            <div class="col-md-6">
              <select class="form-control" id="purposeVisit2" name="purposeVisit2" value="value="{{'purposeVisit2'}}"" required>
                <option value selected disabled="0">---Select the Purpose of Visit---- </option>
                <option value="Formal introduction meeting ">Formal introduction meeting </option>
                 <option value="Product introduct">Product introduct</option>
                 <option value="Review Meeting">Review Meeting </option>
                 <option value="Product Demonstrate">Product Demonstrate</option>
                  <option value="Order Meeting">Order Meeting </option>
                  <option value="Other Offical Meeting ">Other Offical Meeting </option>
              </select>
            </div>
               </div>
            @endif

            <div class="form-group row">
              <label for="remarks2" class="col-md-4 col-form-label text-md-right">{{__('remarks2')}}</label>
              <div class="col-md-6">
                <input id="remarks2" type="text" name="remarks2" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="dateOfVisit3" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit3')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit3" type="date" name="dateOfVisit3" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="purposeVisit3" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit3')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit3" type="text" name="purposeVisit3" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="remarks3" class="col-md-4 col-form-label text-md-right">{{__('remarks3')}}</label>
              <div class="col-md-6">
                <input id="remarks3" type="text" name="remarks3" class="form-control" >
              </div>
            </div>

            <div class="form-group row">
              <label for="dateOfVisit4" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit4')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit4" type="date" name="dateOfVisit4" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="purposeVisit4" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit4')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit4" type="text" name="purposeVisit4" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="remarks4" class="col-md-4 col-form-label text-md-right">{{__('remarks4')}}</label>
              <div class="col-md-6">
                <input id="remarks4" type="text" name="remarks4" class="form-control" >
              </div>
            </div>

            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update DATA') }}
                                    </button>
                                </div>
                            </div>
          </form>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
