@extends('layouts.user')

@section('content')
<div class="container">

    <br>
    <h2 class="text-center">SELECT DISTRICT</h2>

    <hr class="mb-4 ml-5 mt-3">
  
    @if(Session::get('success'))
           <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::get('error'))
           <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-header bg-primary text-white">{{ __('District') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{route('tab.choosezone')}}" >
                        @csrf
                      
                        <div class="form-group row">
                        <!-- <strong>District:</strong> -->
                        <select name="district" class="form-control custom-select">
                            <option value="">Select District</option>
                            @foreach($school as $schl)
                                <option value="{{ $schl->district }}"  selected>{{ $schl->district }}</option>
                            @endforeach
                        </select>
                        </div>




                        <div class="form-group row ml-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center ">
                                <button type="submit" class="btn btn-primary  btn-block">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
