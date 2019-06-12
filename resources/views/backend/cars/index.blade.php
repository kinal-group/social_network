@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-md-4">
        kk
    </div>
    <div class="col-md-8 table table-responsive pull-right">
            <table class="table table-responsive table-collapsed table-bordered mytable" >
                <thead>
                    <tr class="bg bg-primary">
                        <th>Garage ID</th>
                        <th>Garage Name</th>
                        <th>Feature Photos</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Publish Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @php
                        for($i=1;$i<=10;$i++){
                        @endphp
                        <tr>
                            <td>001</td>
                            <td>Narith PTO Garage</td>
                            <td>001</td>
                            <td>Description</td>
                            <td>
                                <img class="img_status" src="https://png.pngtree.com/svg/20161129/8c2089239c.svg"/>
                            </td>
                            <td><i class="fa fa-calendar"></i> &nbsp; 2019-06-11</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i>&nbsp;Edit</a>
                                <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> &nbsp;Delete</a>
                            </td>
                        </tr>
                        @php
                        }
                        @endphp
                </tbody>
            </table>
    </div>

</div>
@endsection
