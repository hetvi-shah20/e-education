@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>
                    Edit Your Profile
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#main_profile">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Educational
                                            Qalification</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                            href="#Account">services</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                            href="#Facilities">Facilities</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                            href="#SocialMedia">Social
                                            Media</a>
                                    </li>
                                </ul>

                                @foreach($profile_setup as $profile)
                                <div class="tab-content">
                                    @foreach($user_details as $main_registration_details)
                                    <div class="tab-pane body active" id="main_profile">
                                        <form method="post"
                                            action="{{route('instituteProfileupdatetab5',$profile->main_id)}}">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Full Name"
                                                            name="name" value="{{Auth::user()->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"
                                                            placeholder="Email Address" name="email"
                                                            value="{{Auth::user()->email}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Contact No"
                                                            name="mobileno"
                                                            value="{{$main_registration_details->mobileno}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <input type="text" class="form-control" placeholder="Landline No"
                                                        name="landlineno"
                                                        value="{{$main_registration_details->landlineno}}">
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <input type="email" class="form-control"
                                                        placeholder="Institue Email Address" name="institute_email"
                                                        value="{{$main_registration_details->email}}">
                                                </div>
                                                @foreach($state as $state_name)
                                                @endforeach
                                                <div class="col-lg-6 col-md-12">
                                                    <select class="form-control show-tick" name="state" id="state">
                                                        <option value="{{$state_name->id}}">{{$state_name->name}}
                                                        </option>
                                                        <option value="">---state---</option>
                                                        @foreach($states as $key => $state)
                                                        <option value="{{$key}}"> {{$state}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 col-md-12">
                                                    <select name=" form-control show-tick city">
                                                        <option class="city"></option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group m-b-10">
                                                        <textarea rows="4" class="form-control no-resize" name="address"
                                                            placeholder="Address">{{$main_registration_details->address}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-round">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                    @endforeach

                                    <div class="tab-pane body active" id="about">
                                        <form method="post"
                                            action="{{route('instituteProfileupdatetab1',$profile->id)}}">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="College Name" name="clg_name"
                                                            value="{{$profile->clg_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control"
                                                            placeholder="Year Of Passing" name="year"
                                                            value="{{$profile->year}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Stream"
                                                            name="stream" value="{{$profile->stream}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <select class="form-group show-tick" name="type">
                                                        <option value="{{$profile->type}}">{{$profile->type}}</option>
                                                        <option value="">-- Type --</option>
                                                        <option value="Exprienced">Exprienced</option>
                                                        <option value="Fresher">Fresher</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <select class="form-group show-tick" name="exprience">
                                                        <option value="{{$profile->exprience}}">{{$profile->exprience}}
                                                        </option>
                                                        <option value="">-- Year --</option>
                                                        <option value="0">0 Year</option>
                                                        <option value="1">1 Year</option>
                                                        <option value="2">2 Year</option>
                                                        <option value="5">5 Year</option>
                                                        <option value="10">10+ Year</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-b-10">
                                                        <textarea rows="4" class="form-control no-resize"
                                                            name="jobprofile"
                                                            placeholder="Job Profile&#10;Company Name &#10;Designation &#10;Roles & Responsibility">{{$profile->jobprofile}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-round">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                    </div>

                                    <div class="tab-pane body" id="Facilities">
                                        <form method="post"
                                            action="{{route('instituteProfileupdatetab3',$profile->id)}}">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label>Facilities/Infrastrcture :</label>
                                                    </div>
                                                    @php ($facilities = [])
                                                    @if ($profile->facilities_infrastrcture != "")
                                                    @foreach(explode(',', $profile->facilities_infrastrcture) as $info)
                                                    <?php
                                                        $facilities[] = $info;
                                                        ?>

                                                    @endforeach
                                                    @endif

                                                    <div class="checkbox">
                                                        @if(in_array("books",$facilities))
                                                        <input id="procheck2" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="books" checked>
                                                        @else
                                                        <input id="procheck2" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="books">
                                                        @endif
                                                        <label for="procheck2">Books</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        @if(in_array("material",$facilities))
                                                        <input id="procheck3" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="material" checked>
                                                        @else
                                                        <input id="procheck3" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="material">
                                                        @endif
                                                        <label for="procheck3">Material [Hard & Soft] </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        @if(in_array("computer",$facilities))
                                                        <input id="procheck4" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="computer" checked>
                                                        @else
                                                        <input id="procheck4" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="computer">
                                                        @endif
                                                        <label for="procheck4">Computer</label>
                                                    </div>
                                                    <div class=" checkbox">
                                                        @if(in_array("computer",$facilities))
                                                        <input id="procheck7" type="checkbox"
                                                            name="facilities_infrastrcture[]"
                                                            value="sitting arrangements" checked>
                                                        @else
                                                        <input id="procheck7" type="checkbox"
                                                            name="facilities_infrastrcture[]"
                                                            value="sitting arrangements">
                                                        @endif
                                                        <label for="procheck7">Sitting Arrangements</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label> </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        @if(in_array("internet",$facilities))
                                                        <input id="procheck5" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="internet" checked>
                                                        @else
                                                        <input id="procheck5" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="internet">

                                                        @endif
                                                        <label for="procheck5">Internet</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        @if(in_array("ac",$facilities))
                                                        <input id="procheck6" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="ac" checked>
                                                        @else
                                                        <input id="procheck6" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="ac">
                                                        @endif
                                                        <label for="procheck6">Ac</label>
                                                    </div>
                                                    <div class=" checkbox">
                                                        @if(in_array("test",$facilities))
                                                        <input id="procheck19" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="test" checked>
                                                        @else
                                                        <input id="procheck19" type="checkbox"
                                                            name="facilities_infrastrcture[]" value="test">
                                                        @endif
                                                        <label for="procheck19">Mounthly/Weekly Test</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-round">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane body" id="SocialMedia">
                                        <form method="post"
                                            action="{{route('instituteProfileupdatetab4',$profile->id)}}">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <h4 class="m-b-0"><strong>
                                                                <center><label>Social Media Accounts</label></center>
                                                            </strong></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Website : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->website == 'NONE')
                                                            <input type="url" class="form-control" placeholder="Website"
                                                                name="website">
                                                            @else
                                                            <input type="url" class="form-control" placeholder="Website"
                                                                name="website" value="{{$profile->website}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Facebook : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->facebook == 'NONE')
                                                            <input type="url" class="form-control"
                                                                placeholder="Facebook" name="facebook">
                                                            @else
                                                            <input type="url" class="form-control"
                                                                placeholder="Facebook" name="facebook"
                                                                value="{{$profile->facebook}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Linkedin : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->linkedin == 'NONE')
                                                            <input type="url" class="form-control"
                                                                placeholder="Linkedin" name="linkedin">
                                                            @else
                                                            <input type="url" class="form-control"
                                                                placeholder="Linkedin" name="linkedin"
                                                                value="{{$profile->linkedin}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Google : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->google == 'NONE')
                                                            <input type="url" class="form-control" placeholder="Google"
                                                                name="google">
                                                            @else
                                                            <input type="url" class="form-control" placeholder="Google"
                                                                name="google" value="{{$profile->google}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Twitter : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->twitter == 'NONE')
                                                            <input type="url" class="form-control" placeholder="Twitter"
                                                                name="twitter">
                                                            @else
                                                            <input type="url" class="form-control" placeholder="Twitter"
                                                                name="twitter" value="{{$profile->twitter}}">
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Instgram : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->instgram == 'NONE')
                                                            <input type="url" class="form-control"
                                                                placeholder="Instgram" name="instgram">
                                                            @else
                                                            <input type="url" class="form-control"
                                                                placeholder="Instgram" name="instgram"
                                                                value="{{$profile->instgram}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Youtube Channel : </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            @if($profile->youtube == 'NONE')
                                                            <input type="url" class="form-control" placeholder="Youtube"
                                                                name="youtube">
                                                            @else
                                                            <input type="url" class="form-control" placeholder="Youtube"
                                                                name="youtube" value="{{$profile->youtube}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-round">Save
                                                    Changes</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane body" id="Account">
                                        <form method="post"
                                            action="{{route('instituteProfileupdatetab2',$profile->id)}}">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="col-lg-6 col-md-12">
                                                        <select class="form-group show-tick" name="standard_from">
                                                            <option value="{{$profile->standard_from}}">
                                                                {{$profile->standard_from}}</option>
                                                            <option value="">Choose standard from</option>
                                                            <option value="1">1 </option>
                                                            <option value="2">2 </option>
                                                            <option value="3">3 </option>
                                                            <option value="4">4 </option>
                                                            <option value="5">5 </option>
                                                            <option value="6">6 </option>
                                                            <option value="7">7 </option>
                                                            <option value="8">8 </option>
                                                            <option value="9">9 </option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="First Year">First Year</option>
                                                            <option value="Second Year">Second Year</option>
                                                            <option value="Third Year">Third Year</option>
                                                            <option value="Fourth Year">Fourth Year</option>
                                                            <option value="Fifth Year">Fifth Year</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <select class="form-group show-tick" name="standard_to">
                                                        <option value="{{$profile->standard_to}}">
                                                            {{$profile->standard_to}}</option>
                                                        <option value="">Choose standard to</option>
                                                        <option value="1">1 </option>
                                                        <option value="2">2 </option>
                                                        <option value="3">3 </option>
                                                        <option value="4">4 </option>
                                                        <option value="5">5 </option>
                                                        <option value="6">6 </option>
                                                        <option value="7">7 </option>
                                                        <option value="8">8 </option>
                                                        <option value="9">9 </option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">First Year</option>
                                                        <option value="14">Second Year</option>
                                                        <option value="15">Third Year</option>
                                                        <option value="16">Fourth Year</option>
                                                        <option value="17">Fifth Year</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-b-10">
                                                        <textarea rows="4" name="subjects"
                                                            class="form-control no-resize"
                                                            placeholder="Subjects&#10;(maths,science)&#10;(C,C++,Java)">{{$profile->subjects}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label>Boards/University :</label>
                                                    </div>
                                                    <div class=" checkbox">

                                                        @php ($board = [])
                                                        @if ($profile->board_university != "")
                                                        @foreach(explode(',', $profile->board_university) as $info)
                                                        <?php
                                                        $board[] = $info;
                                                        ?>

                                                        @endforeach
                                                        @endif

                                                        @if(in_array("CBSC",$board))
                                                        <input id="procheck8" type="checkbox" value="CBSC"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck8" type="checkbox" value="CBSC"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck8">CBSC</label>
                                                    </div>
                                                    <div class=" checkbox">
                                                        @if(in_array("DPS",$board))
                                                        <input id="procheck10" type="checkbox" value="DPS"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck10" type="checkbox" value="DPS"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck10">Delhi Public School</label>
                                                    </div>

                                                    <div class=" checkbox">
                                                        @if(in_array("bacholar",$board))
                                                        <input id="procheck12" type="checkbox" value="bacholar"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck12" type="checkbox" value="bacholar"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck12">Bacholar</label>
                                                    </div>

                                                    <div class="checkbox">
                                                        @if(in_array("phd",$board))
                                                        <input id="procheck14" type="checkbox" value="phd"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck14" type="checkbox" value="phd"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck14">Doctrate [P.H.D]</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label></label>
                                                    </div>
                                                    <div class=" checkbox">
                                                        @if(in_array("GBSC",$board))
                                                        <input id="procheck9" type="checkbox" value="GBSC"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck9" type="checkbox" value="GBSC"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck9">GSCB</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        @if(in_array("diploma",$board))
                                                        <input id="procheck11" type="checkbox" value="diploma"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck11" type="checkbox" value="diploma"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck11">Diploma</label>
                                                    </div>

                                                    <div class=" checkbox">
                                                        @if(in_array("master",$board))
                                                        <input id="procheck13" type="checkbox" value="master"
                                                            name="board_university[]" checked>
                                                        @else
                                                        <input id="procheck13" type="checkbox" value="master"
                                                            name="board_university[]">
                                                        @endif
                                                        <label for="procheck13">Masters</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-round">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@section('scripts')
<script type="text/javascript">
$('#state').on('change', function() {
    var stateID = $(this).val();
    if (stateID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-city-list')}}?state_id=" + stateID,
            success: function(res) {
                if (res) {
                    $(".city").empty();
                    $.each(res, function(key, value) {
                        $(".city").append('<option value="' + value + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#city").empty();
                }
            }
        });
    } else {
        $("#city").empty();
    }

});
</script>
@endsection