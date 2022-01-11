@extends('layouts.admin.master')
@section('title', 'Dashboard')
@section('page-css')
    <!-- Custom CSS -->

@endsection

@section('content')
    {{-- <div class="row">
    <div class="col-3">
        <button class="btn btn-dark" data-toggle="modal" data-target="#allNewOrderModal">All
            New Order</button>
    </div>
    <div class="col-3">
        <button class="btn btn-dark" data-toggle="modal"
            data-target="#viewOrderModal">View</button>
    </div>
</div> --}}
    {{-- <div class="row">
        <div class="col-6">
            <h1 class="section-title">Users</h1>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#addUser"><i class="ion-plus-round"> Add User </i></button>
        </div>
    </div> --}}
    <!-- Dashboard Card -->
    <div class="row pt-5">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="ms-header-text">
                                <h4 class="mt-0 header-title">All Users</h4>
                            </div>
                            <button type="button" class="btn btn-outline-success float-right waves-effect waves-light"
                                name="button" id="addButton" data-toggle="modal" data-target="#add"> Add New
                            </button>
                        </div>

                        <span class="showError"></span>
                        <div class="table-responsive">
                            <table id="userTable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Role</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Role</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->




    </div><!-- container -->

    </div>

<!-- Add  Modal -->
<div class="modal fade bs-example-modal-center" id="add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h5 class="modal-title mt-0 text-center">Add New User</h5>
                <button type="button" class="close modal_close_icon" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="employeeAddForm" method="POST"> @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Type name" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Type email" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"> 
                                <label class="ms-checkbox-wrap ms-checkbox-dark">
                                    <input type="checkbox" value="1" name="is_admin">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span>Is Admin </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-block btn-success waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add  Modal End -->
@endsection
