@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Show blog with id: {{ $blog->id }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Show blog with id: {{ $blog->id }}</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">
                <div class="row">

                    {{ Form::model($blog, ['action' => ['Admin\AdminController@updateBlog', $blog->id], 'method' => 'put']) }}

                        <div class="form-group col-md-6">

                            {!! Form::label('Title of blog', 'Name of storage') !!}

                            {!! Form::text('title', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Name of storage',
                                'required' => 'true'
                            ]) !!}
                        </div>


                        <div class="form-group col-md-12">

                            {!! Form::label('text', 'Text of Blog') !!}

                            {!! Form::textarea('text', null, [
                                'rows' => '10',
                                'class' => 'form-control',
                                'placeholder' => 'Text of blog',
                                'required' => 'true'
                            ]) !!}
                        </div>

                        <div class="form-group col-md-12">
                            @if ($blog->img)
                            {{ Html::image('/upload/blogs/'.$blog->img, 'alt', array( 'width' => 425, 'height' => 200, 'class'=>'hoverImg', 'data-img'=>$blog->img)) }}
                            @else
                                <i class="fa fa-unlink"></i>
                            @endif
                        </div>

                        <div class="form-group col-md-6">

                            {!! Form::label('slug', 'Slug of Blog') !!}

                            {!! Form::text('slug', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Address of storage',
                                'required' => 'true'
                            ]) !!}
                        </div>

                        <div class="form-group col-md-12">
                            {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i> Update', [
                                'type' => 'submit',
                                'class' => 'form-control btn btn-success',
                            ]) !!}

                        </div>
                    {{ Form::close() }}
                </div>

            </div>

        </div>

    </section>

@endsection