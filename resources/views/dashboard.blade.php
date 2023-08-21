@extends('layouts.app')
@section('main')

<section id="menu" class="bg-light">
    <div class="logo">
        <img src="{{asset('assets/logo.jpg')}}" alt="Logo">
        <h2>KDR University</h2>
    </div>
    <div class="items">
        <hr class="my-4">
        <ul class="list-unstyled">
            <li><a href="index.html"><i class="fa fa-bars"></i> Dashboard</a></li>
            <li>
                <a href="#departmentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-home"></i> Department
                </a>
                <ul class="collapse list-unstyled" id="departmentSubmenu">
                    <li><a href="create department.html"><i class="fa fa-university"></i> Create Department</a></li>
                    <li><a href="managedepartment.html"><i class="fa fa-cogs"></i> Manage Department</a></li>
                </ul>
            </li>
            <li>
                <a href="#classesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-home"></i> Classes
                </a>
                <ul class="collapse list-unstyled" id="classesSubmenu">
                    <li><a href="create class.html"><i class="fa fa-university"></i> Create Class</a></li>
                    <li><a href="manage class.html"><i class="fa fa-cogs"></i> Manage Class</a></li>
                </ul>
            </li>
            <li>
                <a href="#subjectsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-home"></i> Subjects
                </a>
                <ul class="collapse list-unstyled" id="subjectsSubmenu">
                    <li><a href="{{url('create/subject')}}"><i class="fa fas fa-book"></i> Create Subject</a></li>
                    <li><a href="manage subject.html"><i class="fa fa-cogs"></i> Manage Subject</a></li>
                </ul>
            </li>
            <li>
                <a href="#studentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-home"></i> Students
                </a>
                <ul class="collapse list-unstyled" id="studentsSubmenu">
                    <li><a href="add student.html"><i class="fa far fa-users"></i> Add Student</a></li>
                    <li><a href="manage student.html"><i class="fa fa-cogs"></i> Manage Student</a></li>
                </ul>
            </li>
            <li>
                <a href="#resultsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-home"></i> Results
                </a>
                <ul class="collapse list-unstyled" id="resultsSubmenu">
                    <li><a href="add result.html"><i class="fa fas fab fa-pied-piper"></i> Add Result</a></li>
                    <li><a href="manage result.html"><i class="fa fa-cogs"></i> Manage Result</a></li>
                </ul>
            </li>
            <li>
                <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-cog"></i> Admin
                </a>
                <ul class="collapse list-unstyled" id="adminSubmenu">
                    <li><a href="create admin.html"><i class="fa fa-user-plus"></i> Create Admin</a></li>
                    <li><a href="manage admin.html"><i class="fa fa-cogs"></i> Manage Admin</a></li>
                </ul>
            </li>
        </ul>
    </div>
</section>


@endsection