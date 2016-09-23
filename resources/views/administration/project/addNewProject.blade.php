@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Add new project</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add new project</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">

                <div class="row">

                    {{ Form::open(['url' => ['/administration/project/storeNewProject'], 'method' => 'post', 'files'=>true]) }}
                    <div class="col-md-6">
                        <div class="form-group col-md-12">

                            {!! Form::label('text', 'Meno') !!}

                            {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Meno',
                                'required' => 'true'
                            ]) !!}
                        </div>
                        <div class="form-group col-md-12">

                            {!! Form::label('text', 'Stredné meno') !!}

                            {!! Form::text('title', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Stredné meno',
                            ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-12">

                        {!! Form::label('text', 'Text of Project') !!}

                        {!! Form::text('description', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Motto',
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Image') !!}
                        {!! Form::file('img', null) !!}
                    </div>

                    <div class="form-group col-md-12">
                        {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i> Save', [
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