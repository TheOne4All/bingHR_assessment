<?php
// $path_public = config('global.public_path');
echo public_path();
require_once public_path() . '\helpers\ModalHelper.php';
$path_resources = str_replace('public', 'resources', public_path());
$modalHelper = new ModalHelperer;

$addStaff = [
    'name' => 'addStaff',
    'title' => 'Add User',
    'subtitle' => 'Create a Single User Record',
    'file' => $path_resources . '\views\employees\form.blade.php',
    'url' => route("employees.store"),
    'size' => 'lg',
    'submit' => 'Add User',
    'cancel' => 'Cancel',
    'classlist' => 'slide-up enable-scroll',
];
$modalHelper->modal($addStaff)->modal_body()->modal_end();

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BingHR Home Assessment</title>

    <!-- CSS Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/material.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="antialiased">
    <svg style="display:none;">
        <symbol id="options" viewBox="0 0 16 16">
            <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z" />
            <path
                d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z" />
        </symbol>
        <symbol id="collapse" viewBox="0 0 16 16">
            <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81" />
        </symbol>
    </svg>
    <header class="page-header">
        <nav>
            <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
                <i class="material-icons">view_list</i>
            </button>
            <ul class="admin-menu">
                <!-- <li class="menu-heading">
                    <h3>Admin</h3>
                </li> -->
                <li>
                    <a href="#0">
                        <i class="material-icons">dashboard</i>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/') }}">
                        <i class="material-icons">person</i>
                        <span class="ml-2">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">apartment</i>
                        <span class="ml-2">Departments</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">group</i>
                        <span class="ml-2">Employees</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">local_activity</i>
                        <span class="ml-2">Activities</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">celebration</i>
                        <span class="ml-2">Holidays</span>
                    </a>
                </li>
                <!-- <li class="menu-heading">
                    <h3>Settings</h3>
                </li> -->
                <li>
                    <a href="#0">
                        <i class="material-icons">event</i>
                        <span class="ml-2">Events</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">money</i>
                        <span class="ml-2">Payroll</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">account_box</i>
                        <span class="ml-2">Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="material-icons">equalizer</i>
                        <span class="ml-2">Reports</span>
                    </a>
                </li>
                <li>
                    <div class="switch">
                        <input type="checkbox" id="mode" checked>
                        <label for="mode">
                            <span></span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                        <svg aria-hidden="true">
                            <use xlink:href="#collapse"></use>
                        </svg>
                        <span>Collapse</span>
                    </button>
                </li>
            </ul>
        </nav>
    </header>
    <section class="page-content">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top pl-0 pr-0">
            <div class="container-fluid pl-0 pr-0">
                <div class="navbar-wrapper">
                    <h4 class="">Users</h4>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <div class="mr-2">
                        <select name="year" class="form-control">
                            <option>Year</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <form class="navbar-form mr-2">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round search-bar">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </form>
                    <div class="mr-2">
                        <select name="lang" class="form-control menu-link" style="width:115px">
                            <option>Language</option>
                            <option>English</option>
                            <option>Spanish</option>
                            <option>French</option>
                        </select>
                    </div>
                    <div class="mr-2">
                        <select name="report" class="form-control menu-link" style="width:110px">
                            <option>Reports</option>
                            <option>Annual Report</option>
                            <option>Financial Report</option>
                            <option>Cash-flow Report</option>
                        </select>
                    </div>
                    <div class="mr-4">
                        <select name="projects" class="form-control menu-link" style="width:110px">
                            <option>Projects</option>
                            <option>Turner Website Development</option>
                            <option>UI Design</option>
                        </select>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link" href="http://example.com">
                                <i class="material-icons">email</i>
                                <span class="notification bg-primary">3</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link" href="http://example.com">
                                <i class="material-icons">notifications</i>
                                <span class="notification bg-primary">5</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-photo" href="javascript:;">
                                <?php if (isset($_SESSION['user_info']) && !empty($_SESSION['user_info']['img'])) {
    echo '<img src="' . FYNX_PUBLIC['media_url'] . 'user-profile/' . $_SESSION['user_info']['img'] . '" width="50px" class="profile-photo-small rounded-circle img-raised">';
} else {echo '<i class="material-icons">person</i>';}?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <button class="btn btn-success float-right" data-toggle="modal" data-target="#addStaff">Add
                    User</button>
            </div>
            <!-- <div class="clearfix"></div> -->
        </div>

        <!-- ======= List Section ======= -->
        <section class="bg-white pt-3 pb-3 pl-3 pr-3">
            <div class="">
                <div class="row section-title">
                    <div class="col-md-6">
                        <h5>List Users</h5>
                        <!-- <p>Displays the list of users</p> -->
                    </div>
                    <div class="col-md-6">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round search-bar">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    @if (count($allEmployees) != '')
                    <div class="card-body pl-0 pr-0">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background-color: #F9FBFD;">
                                    <th>Name</th>
                                    <th></th>
                                    <th>Create Date</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($allEmployees as $employee)
                                    <?php
$permission = explode(',', $employee->permission);
switch ($permission[0]) {
    case '1':
        $user_permission = 'Super-Admin';
        $bgColor = 'bg-danger';
        $txtColor = 'text-white';
        break;
    case '2':
        $user_permission = 'Admin';
        $bgColor = 'bg-primary';
        $txtColor = 'text-white';
        break;
    case '3':
        $user_permission = 'Employee';
        $bgColor = 'bg-info';
        $txtColor = 'text-white';
        break;
    case '4':
        $user_permission = 'HR-Admin';
        $bgColor = 'bg-success';
        $txtColor = 'text-white';
        break;
}
?>
                                    <tr>
                                        <td class="row">
                                            <div class="col-3"><i
                                                    class="material-icons shadow rounded-circle p-3">person</i>
                                            </div>
                                            <div class="col-9">
                                                <span
                                                    class="bold d-block">{{ucwords(strtolower($employee->lastname.', '.$employee->firstname))}}</span>
                                                <span class="d-block">{{strtolower($employee->email)}}</span>
                                            </div>

                                        </td>
                                        <td><span class="{{$bgColor.' '.$txtColor}} p-2 rounded-lg"
                                                style="display:block; text-align:center; width:150px;">{{$user_permission}}</span>
                                        </td>
                                        <td>{{date_format($employee->created_at,"d M, Y")}}</td>
                                        <td>{{ucwords(strtolower($employee->role))}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-white" title="Edit"
                                                    data-toggle="modal" data-target="#editStaff<?=$employee['id']?>"><i
                                                        class="material-icons">edit</i></button>
                                                <button type="button" class="btn btn-white" data-toggle="modal"
                                                    data-target="#deleteStaff<?=$employee['id']?>" title="Delete"><i
                                                        class="material-icons">delete</i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
$editStaff = [
    'name' => 'editStaff',
    'title' => 'Edit User',
    'subtitle' => 'Update a Single User Record',
    'file' => $path_resources . '\views\employees\form.blade.php',
    'url' => route("employees.update", $employee->id),
    'submit' => 'Update User',
    'cancel' => 'Cancel',
    'size' => 'lg',
    'classlist' => 'slide-up enable-scroll',
];

$deleteStaff = [
    'name' => 'deleteStaff',
    'title' => 'Delete Staff',
    'file' => $path_resources . '\views\employees\delete.blade.php',
    'url' => route("employees.destroy", $employee->id),
    'cancel' => 'No',
    'submit' => 'Yes',
    'classlist' => 'stick-up',
    'size' => 'sm',
];
$modalHelper->modal($editStaff, $employee->id)->modal_field('employee', $employee)->modal_body()->modal_end();
$modalHelper->modal($deleteStaff, $employee->id)->modal_field('id', $employee->id)->modal_body()->modal_end();
?>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                    @else
                    <div class="col-12 text-center pb-4 pt-4">No Record(s) Found</div>
                    @endif
                </div>

            </div>
        </section>
        <!-- End About Me Section -->

        <footer class="page-footer" style="float:left; padding:20px 0;">
            <span>&copy; Copyright 2022 </span>
            <b><a href="https://binghr.io/" target="_blank">BingHR.io</a></b>
        </footer>
        <!-- template js script -->
        <script src="js/template.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </section>
</body>







</html>
