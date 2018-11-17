@extends('layouts.frontend.app')
@section('title', 'Donor Profiles')

{{--pushing donor profiles stylesheets--}}
@push('css')
    <link rel="stylesheet" href="{{asset('css/donor-profiles.css')}}">
@endpush
@section('content')
    <section class="section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Browse All the avilable <span>donors</span> based on their <span>Race, Location</span> , Eyes &
                        Local
                        or</p>
                    <p>Sign Up as recipeint to get in touch with them.All of the messages will be moderated by admin</p>
                    <br><br>
                    <a href="recipient-signup.html" class="bttn">Become a Recipient</a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section ends-->

    <!--DONOR PROFILE FILTERS-->
    <section class="section filters">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Donor Profile <span>Filters</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="race-tab" data-toggle="tab" href="" data-target="#race"
                               role="tab" aria-controls="race" aria-selected="true">Race</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hair-tab" data-toggle="tab" href="" data-target="#hair" role="tab"
                               aria-controls="hair" aria-selected="false">Hair</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eyes-tab" data-toggle="tab" href="" data-target="#eyes" role="tab"
                               aria-controls="eyes" aria-selected="false">Eyes</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="race" role="tabpanel" aria-labelledby="race-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Caucasian
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Hispanic
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Mixed
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Black (Carib)
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Black (African)
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Black (Hispanic)
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show" id="hair" role="tabpanel" aria-labelledby="hair-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Md Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Black
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Dk Blonde
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    It Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Dk Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Red
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Md Blonde
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    It Blonde
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show" id="eyes" role="tabpanel" aria-labelledby="eyes-tab">
                            <ul>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Blue
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Brown
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Hazel
                                  </label>
                              </span>
                                </li>
                                <li>
                              <span class='checkboxes'>
                                  <label class='checkbox'>
                                    <input type='checkbox'>
                                    <span class='indicator'></span>
                                    Green
                                  </label>
                              </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="local">
                        <div class="col-xs-12">
                            <p>Local
                                <span class="wrapper pull-right">
                                <input type="checkbox" value="1" id="input_2">
                                <label for='input_2' tabindex="-1">
                                  <span class="check"></span>
                                </label>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-8">
                    <div class="row">

                        {{--@foreach($profiles as $profile)--}}
                        {{--<div class="col-xs-12 col-md-6">--}}
                        {{--<div class="wrap text-center">--}}
                        {{--<img src="{{$profile->images->first()->path }}" alt="EGG DONOR"--}}
                        {{--class="img-fluid">--}}
                        {{--<h4>DONOR INFO</h4>--}}
                        {{--<ul class="text-left">--}}
                        {{--<li>Age <span class="pull-right">{{$profile->age}}</span></li>--}}
                        {{--<li>Eyes <span class="pull-right">{{$profile->eye_color}}</span></li>--}}
                        {{--<li>Cycle <span class="pull-right">Available</span></li>--}}
                        {{--</ul>--}}
                        {{--<a href="{{route('donors.show', $profile->id)}}" class="btn bttn">More Details</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                        {{--<div class="col-xs-12">--}}
                        {{--<nav aria-label="Page navigation">--}}
                        {{--{{$profiles->links()}}--}}
                        {{--</nav>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection