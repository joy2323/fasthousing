
@extends('user.master_user')


@section('content')

  <!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

<!-- Header -->
<div id="header">
    <div class="container">
        
        <!-- Left Side Content -->
        <div class="left-side">
            
            <!-- Logo -->
            <div id="logo">
                <a href="index.html"><img src="images/logot.png" alt=""></a>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation">
                <ul id="responsive">

                    <li><a href="#">Home</a>
                        <!-- <ul class="dropdown-nav">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                        </ul> -->
                    </li>

                    <li><a href="freelancers-grid-layout-full-page.html">Hire A Tutor</a>
                        <!-- <ul class="dropdown-nav">
                            <li><a href="#">Browse Jobs</a>
                                <ul class="dropdown-nav">
                                    <li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
                                    <li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
                                    <li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
                                    <li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
                                    <li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
                                    <li><a href="jobs-grid-layout.html">Grid Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Browse Tasks</a>
                                <ul class="dropdown-nav">
                                    <li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
                                    <li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
                                    <li><a href="tasks-grid-layout.html">Grid Layout</a></li>
                                    <li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
                                </ul>
                            </li>
                            <li><a href="browse-companies.html">Browse Companies</a></li>
                            <li><a href="single-job-page.html">Job Page</a></li>
                            <li><a href="single-task-page.html">Task Page</a></li>
                            <li><a href="single-company-profile.html">Company Profile</a></li>
                        </ul> -->
                    </li>

                    <li><a href="#">For Tutors</a>
                        <ul class="dropdown-nav">
                            <!-- <li><a href="#">Find a Freelancer</a>
                                <ul class="dropdown-nav">
                                    <li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
                                    <li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
                                    <li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
                                    <li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
                                </ul>
                            </li>
                            <li><a href="single-freelancer-profile.html">Freelancer Profile</a></li> -->
                            <li><a href="dashboard-post-a-job.html">Login</a></li>
                            <li><a href="dashboard-post-a-task.html">Register</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="current">Company Profile</a>
                        <!-- <ul class="dropdown-nav">
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="dashboard-messages.html">Messages</a></li>
                            <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                            <li><a href="dashboard-reviews.html">Reviews</a></li>
                            <li><a href="dashboard-manage-jobs.html">Jobs</a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
                                    <li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
                                    <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-manage-tasks.html">Tasks</a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>
                                    <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                    <li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
                                    <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-settings.html">Settings</a></li>
                        </ul> -->
                    </li>

                    <li>
                    
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                           <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">{{ __('Logout') }}
                           </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                        </div>
                            

                    </li>

                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
            
        </div>
        <!-- Left Side Content / End -->


    </div>
</div>
<!-- Header / End -->

</header>


@endsection