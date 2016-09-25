@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Show all quotations</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Show all quotations</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">

                <table id="blogTable" class="table table-striped table-hover" data-page-length='10' cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th data-class-name="priority" >#ID</th>
                        <th>Author</th>
                        <th>TEXT</th>
                        <th>CREATE AT</th>
                        <th>UPDATE AT</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($A_quotations as $quotation)
                        <tr>
                            <td>{{ $quotation->id }}</td>
                            <td>{{ $quotation->author->first_name ." ".$quotation->author->middle_name . " " .$quotation->author->last_name }}</td>
                            <td>{{ str_limit($quotation->text, 30) }}</td>
                            <td>{{ $quotation->created_at }}</td>
                            <td>{{ $quotation->updated_at }}</td>
                            <td>

                                <a href="{{ url('/administration/quotation/'.$quotation->id) }}"><span class="label label-success" title="Edit"><i class="fa fa-pencil"></i></span></a>
                                @if($quotation->active == 1)
                                    <a class="hideForUser" data-type="quotation" data-id="{{ $quotation->id }}" href=""><span class="label label-warning" title="Hide for users"><i class="fa fa-eye"></i></span></a>
                                @else
                                    <a class="showForUser" data-type="quotation" data-id="{{ $quotation->id }}" href=""><span class="label label-warning" title="Show for users"><i class="fa fa-eye-slash"></i></span></a>
                                @endif

                                <a href="{{ url('/') }}"><span class="label label-info" title="Detail"><i class="fa fa-folder-open-o"></i></span></a>
                                <a href="{{ url('/administration/quotation/delete/'.$quotation->id) }}"><span class="label label-danger" title="Remove"><i class="fa fa-trash-o"></i></span></a>
                                <a href="#" data-type="quotation" data-id="{{ $quotation->id }}" class="call-delete-entity-modal" type="button" data-toggle="modal" data-target="#myModal"><span class="label label-danger" title="Remove"><i class="fa fa-trash-o"></i></span></a>
                                {{-- <span class="label label-primary">Primary</span>
                                 <span class="label label-success">Success</span>
                                 <span class="label label-info">Info</span>
                                 <span class="label label-warning">Warning</span>
                                 <span class="label-s label-danger">Danger</span>--}}
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </section>

@endsection