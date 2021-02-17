@extends('layouts.admin')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Seller Approvals</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/home">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Seller List
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Seller Lists</h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
          can use any example of below table for your table and it can be use with any type of bootstrap tables.
        </p>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Seller Name</th>
              <th>Email</th>
              <th>Account Status</th>
              <th>Registered On</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach($seller as $s)
            <tr>
              <td>
                {{$s->name}}
              </td>
              <td>
                {{$s->email}}
              </td>
              <td>
              <span class="badge badge-pill badge-light-primary mr-1">{{$s->accountstatus}}</span>
              </td>
              <td>{{$s->created_at}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                    <i data-feather="more-vertical"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i data-feather="edit-2" class="mr-50"></i>
                      <span>Edit</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i data-feather="trash" class="mr-50"></i>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->

<!-- Table head options end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    @endsection