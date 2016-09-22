@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Show author with id: {{ $author->id }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Show author with id: {{ $author->id }}</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">
                <div class="row">

                    {{ Form::model($author, ['action' => ['Admin\AdminController@updateAuthor', $author->id], 'method' => 'put']) }}

                        <div class="form-group col-md-6">

                            {!! Form::label('Title of author', 'Name of storage') !!}

                            {!! Form::text('title', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Name of storage',
                                'required' => 'true'
                            ]) !!}
                        </div>


                        <div class="form-group col-md-12">

                            {!! Form::label('text', 'Text of Author') !!}

                            {!! Form::textarea('text', null, [
                                'rows' => '10',
                                'class' => 'form-control',
                                'placeholder' => 'Text of author',
                                'required' => 'true'
                            ]) !!}
                        </div>

                        <div class="form-group col-md-12">
                            @if ($author->img)
                            {{ Html::image('/upload/authors/'.$author->img, 'alt', array( 'width' => 425, 'height' => 200, 'class'=>'hoverImg', 'data-img'=>$author->img)) }}
                            @else
                                <i class="fa fa-unlink"></i>
                            @endif
                        </div>

                        <div class="form-group col-md-6">

                            {!! Form::label('slug', 'Slug of Author') !!}

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