@extends('institute.layouts.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Change Password
                </h2>
            </div>

        </div>
    </div>
    <center>
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            @foreach($user_details as $details)
                            @endforeach
                            <h6>Change your password</h6>
                            <form action="{{route('institutechangepassword',$details->user_id)}}" method="post">
                                {{csrf_field()}}
                                <div class="col-lg-6 m-t-20">
                                    @if($errors->any())
                                    @include('errors.error')
                                    @endif
                                    <div class="form-group">
                                        <input type="password"  class="form-control" placeholder="Old Password"
                                            name="old_password" value="{{old('old_password')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  class="form-control" placeholder="New Password"
                                        name="password" value="{{old('password')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  class="form-control" placeholder="Confrim Password"
                                        name="password_confirmation" value="{{old('password_confirmation')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-round">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </center>
</section>
@endsection