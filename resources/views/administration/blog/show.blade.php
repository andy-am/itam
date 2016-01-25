@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Show all blogs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Show all blogs</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#ID</th>
                <th>TITLE</th>
                <th>SLUG</th>
                <th>TEXT</th>
                <th>CREATE AT</th>
                <th>UPDATE AT</th>
                <th>ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->slug }}</td>
                    <td>{{ str_limit($blog->text,100) }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td>{{ $blog->updated_at }}</td>
                    <td>edit,delete</td>

                </tr>
            @endforeach



            </tbody>
        </table>

    </section>
@endsection