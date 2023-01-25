@extends('layouts.master')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="breadcrumb-range-picker">
                    <span><i class="icon-calender"></i></span>
                    <span class="ml-1">August 08, 2017 - August 08, 2017</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12 ">
                    <h2 class="page-heading">Hi,Welcome Back!f
                        @if(isset($data -> id))
                            {{$data -> trackid}}
                        @endif
                    </h2>
                    <p class="mb-0">Your restaurent admin template</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table-responsive-xl" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Order Name</th>
                                        <th scope="col">Custommer Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Delivery time</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>54565</td>
                                        <td>Fresh Crostini</td>
                                        <td>Adam Smith</td>
                                        <td>Gulshan</td>
                                        <td>10:20</td>
                                        <td>5</td>
                                        <td>$34</td>
                                        <td><span class="badge badge-xs badge-primary">Pending</span>
                                        </td>
                                        <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>54565</td>
                                        <td>Multigrain Hot Cereal</td>
                                        <td>John Doe</td>
                                        <td>Baridhara</td>
                                        <td>3:00</td>
                                        <td>4</td>
                                        <td>$ 87</td>
                                        <td><span class="badge badge-xs badge-success">Delivered</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>54235</td>
                                        <td>French Fry</td>
                                        <td>Maximillian</td>
                                        <td>Khilgaon</td>
                                        <td>2:00</td>
                                        <td>6</td>
                                        <td>$ 65</td>
                                        <td><span class="badge badge-xs badge-dark">Cencelled</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>54587</td>
                                        <td>Fried Egg Sandwich</td>
                                        <td>John Johnson</td>
                                        <td>Gulshan</td>
                                        <td>11:00</td>
                                        <td>3</td>
                                        <td>$ 56</td>
                                        <td><span class="badge badge-xs badge-primary">Pending</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>54521</td>
                                        <td>Pizza</td>
                                        <td>Mike Hussy</td>
                                        <td>Banani</td>
                                        <td>12:00</td>
                                        <td>5</td>
                                        <td>$ 65</td>
                                        <td><span class="badge badge-xs badge-warning">Pending</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2345</td>
                                        <td>Fresh Crostini</td>
                                        <td>Adam Smith</td>
                                        <td>Gulshan</td>
                                        <td>10:20</td>
                                        <td>5</td>
                                        <td>$34</td>
                                        <td><span class="badge badge-xs badge-primary">Pending</span>
                                        </td>
                                        <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2345</td>
                                        <td>Multigrain Hot Cereal</td>
                                        <td>John Doe</td>
                                        <td>Baridhara</td>
                                        <td>3:00</td>
                                        <td>4</td>
                                        <td>$ 87</td>
                                        <td><span class="badge badge-xs badge-success">Delivered</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2345</td>
                                        <td>French Fry</td>
                                        <td>Maximillian</td>
                                        <td>Khilgaon</td>
                                        <td>2:00</td>
                                        <td>6</td>
                                        <td>$ 65</td>
                                        <td><span class="badge badge-xs badge-dark">Cencelled</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1231</td>
                                        <td>Fried Egg Sandwich</td>
                                        <td>John Johnson</td>
                                        <td>Gulshan</td>
                                        <td>11:00</td>
                                        <td>3</td>
                                        <td>$ 56</td>
                                        <td><span class="badge badge-xs badge-primary">Pending</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6755</td>
                                        <td>Pizza</td>
                                        <td>Mike Hussy</td>
                                        <td>Banani</td>
                                        <td>12:00</td>
                                        <td>5</td>
                                        <td>$ 65</td>
                                        <td><span class="badge badge-xs badge-warning">Pending</span>
                                        </td>
                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
