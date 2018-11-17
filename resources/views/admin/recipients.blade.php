@extends('layouts.admin.app')

@section('title', 'Recipients - Ivf1match')

@section('content')
    <main class="main" id="salesman-customers">
        <div class="c-container">
            <div class="row">
                <div class="col-md-3 col-xl-3">
                    <div class="card user">
                        <div class="card-body ">
                            <img src="../img/customer-2.jpg" alt="" class="salesman-profile">
                            <span class="salesman-info">
                        <h4>Alena Cutick</h4>
                        <p>Lorem consectetur adipisicing elit. Omnis, voluptas!</p>
                    </span>
                        </div>
                        <div class="card-footer">
                            <span class="blocked-on">Blocked On</span>
                            <span class="date">Oct 10, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-3">
                    <div class="card user">
                        <div class="card-body">
                            <img src="../img/customer-1.jpg" alt="" class="salesman-profile">
                            <span class="salesman-info">
                        <h4>Alena Cutick</h4>
                        <p>Lorem consectetur adipisicing elit. Omnis, voluptas!</p>
                    </span>
                        </div>
                        <div class="card-footer">
                            <span class="blocked-on">Created On</span>
                            <span class="date">Oct 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div><!--!row-->

            <div class="row">
                <div class="table-responsive">
                    <table class="dt table" data-toggle="table" data-search="true"
                           data-pagination="true" id="data-table">
                        <thead>

                        <tr>
                            <th>Recipient ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="no-sort ">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-dark btn-status font-weight-bold  badge-warning dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        InActive
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-info dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Info
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-dark btn-status font-weight-bold  badge-warning dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        InActive
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-info dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        New
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-dark btn-status font-weight-bold  badge-warning dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        InActive
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3411</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>johndoe@gmail.com</td>
                            <!--<td><span class="badge badge-success">&nbsp;Complete&nbsp;</span></td>-->
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn badge py-2 px-3 text-white btn-status font-weight-bold  badge-success dropdown-toggle "
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="min-width: 95px;">
                                        Active
                                    </button>
                                    <div class="dropdown-menu js-status-dd">
                                        <a class="dropdown-item" href="#">New</a>
                                        <a class="dropdown-item" href="#">Active</a>
                                        <a class="dropdown-item" href="#">InActive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="actions ">
                                <a href="#" class="ml-2 action js-btn-user-edit" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                                   title="Delete"><i
                                            class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--!row-->
        </div>

    </main>
@endsection

{{--Pushing Recipients only js file--}}
@push('js')
    <script src="../js/admin/recipients.min.js"></script>
@endpush