@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Add new newsletter</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add new newsletter</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">

                <div class="row">

                    {{ Form::open(['url' => ['/administration/newsletter/storeNewNewsletter'], 'method' => 'post', 'files'=>true]) }}

                    <div class="form-group col-md-6">

                        {!! Form::label('Title of newsletter', 'Name of storage') !!}

                        {!! Form::text('title', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Title',
                            'required' => 'true'
                        ]) !!}
                    </div>

                    <div class="form-group col-md-12">

                        {!! Form::label('text', 'Text of Newsletter') !!}

                        {!! Form::textarea('text', null, [
                            'rows' => '10',
                            'class' => 'form-control',
                            'placeholder' => 'Text of blog',
                            'required' => 'true'
                        ]) !!}
                    </div>

                    <div class="form-group col-md-6">

                        {!! Form::label('slug', 'Slug of Blog') !!}

                        {!! Form::text('slug', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Address of storage',
                            'required' => 'true'
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