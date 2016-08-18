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

        <div class="box box-solid">

            <div class="box-body">

                <table id="blogTable" class="table table-striped table-hover" data-page-length='10' cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th data-class-name="priority" >#ID</th>
                        <th>PIC</th>
                        <th>TITLE</th>
                        <th>TEXT</th>
                        <th>SENT AT</th>
                        <th>CREATE AT</th>
                        <th>UPDATE AT</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($A_newsletters as $newsletter)
                        <tr>
                            <td>{{ $newsletter->id }}</td>
                            <td> @if ($newsletter->img) {{ Html::image('/images/upload/newsletter/'.$newsletter->img, 'alt', array( 'width' => 15, 'height' => 15, 'class'=>'hoverImg', 'data-img'=>$newsletter->img)) }} @else <i class="fa fa-unlink"></i> @endif </td>
                            <td>{{ $newsletter->title }}</td>
                            <td>{{ str_limit($newsletter->text, 30) }}</td>
                            <td>{{ $newsletter->sent_at }}</td>
                            <td>{{ $newsletter->created_at }}</td>
                            <td>{{ $newsletter->updated_at }}</td>
                            <td>

                                <a href="{{ url('/administration/newsletter/'.$newsletter->id) }}"><span class="label label-success" title="Edit"><i class="fa fa-pencil"></i></span></a>
                                {{--@if($newsletter->display == 1)
                                    <a class="hideBlog" data-id="{{ $newsletter->id }}" href=""><span class="label label-warning" title="Hide for users"><i class="fa fa-eye"></i></span></a>
                                @else
                                    <a class="showBlog" data-id="{{ $newsletter->id }}" href=""><span class="label label-warning" title="Show for users"><i class="fa fa-eye-slash"></i></span></a>
                                @endif--}}

                                <a href="{{ url('/') }}"><span class="label label-info" title="Detail"><i class="fa fa-folder-open-o"></i></span></a>
                                <a href="{{ url('/administration/newsletter/delete/'.$newsletter->id) }}"><span class="label label-danger" title="Remove"><i class="fa fa-trash-o"></i></span></a>

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