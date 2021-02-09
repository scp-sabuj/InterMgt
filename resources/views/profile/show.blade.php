@extends('layouts.app')

@section('section')
<div class="container-fluid">


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-xl-4">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>

                <h4 class="header-title mt-0">Daily Sales</h4>

                <div class="widget-chart text-center">
                    <div id="morris-donut-example" style="height: 245px;"></div>
                    <ul class="list-inline chart-detail-list mb-0">
                        <li class="list-inline-item">
                            <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mt-0">Statistics</h4>
                <div id="morris-bar-example" style="height: 280px;"></div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mt-0">Total Revenue</h4>
                <div id="morris-line-example" style="height: 280px;"></div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="assets/images/users/avatar-3.jpg" class="img-responsive rounded-circle" alt="user">
                    <div class="wid-u-info">
                        <h5 class="mt-0 m-b-5">Chadengle</h5>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-warning"><b>Admin</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="assets/images/users/avatar-2.jpg" class="img-responsive rounded-circle" alt="user">
                    <div class="wid-u-info">
                        <h5 class="mt-0 m-b-5"> Michael Zenaty</h5>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-custom"><b>Support Lead</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle" alt="user">
                    <div class="wid-u-info">
                        <h5 class="mt-0 m-b-5">Stillnotdavid</h5>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-success"><b>Designer</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="assets/images/users/avatar-10.jpg" class="img-responsive rounded-circle" alt="user">
                    <div class="wid-u-info">
                        <h5 class="mt-0 m-b-5">Tomaslau</h5>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-info"><b>Developer</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-4">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>

                <h4 class="header-title mt-0 m-b-30">Inbox</h4>

                <div class="inbox-widget nicescroll" style="height: 315px;">
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Chadengle</p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Tomaslau</p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Stillnotdavid</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Kurafire</p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Shahedk</p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-8">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>

                <h4 class="header-title mt-0 m-b-30">Latest Projects</h4>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Assign</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adminto Admin v1</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-danger">Released</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adminto Frontend v1</td>
                                <td>01/01/2017</td>
                                <td>26/04/2017</td>
                                <td><span class="badge badge-success">Released</span></td>
                                <td>Adminto admin</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adminto Admin v1.1</td>
                                <td>01/05/2017</td>
                                <td>10/05/2017</td>
                                <td><span class="badge badge-pink">Pending</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Adminto Frontend v1.1</td>
                                <td>01/01/2017</td>
                                <td>31/05/2017</td>
                                <td><span class="badge badge-purple">Work in Progress</span>
                                </td>
                                <td>Adminto admin</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Adminto Admin v1.3</td>
                                <td>01/01/2017</td>
                                <td>31/05/2017</td>
                                <td><span class="badge badge-warning">Coming soon</span></td>
                                <td>Coderthemes</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Adminto Admin v1.3</td>
                                <td>01/01/2017</td>
                                <td>31/05/2017</td>
                                <td><span class="badge badge-primary">Coming soon</span></td>
                                <td>Adminto admin</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout> --}}
