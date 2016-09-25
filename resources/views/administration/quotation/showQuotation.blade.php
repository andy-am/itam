@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Edit The Quotation</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit The Quotation</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">

                <div class="row">

                    {{ Form::model($quotation, ['action' => ['Admin\QuotationController@updateQuotation', $quotation->id], 'method' => 'post']) }}

                    <div class="form-group col-md-6">

                        {!! Form::label('Author of Quotation', 'Author of Quotation') !!}


                        <select name="author_id" class="form-control">
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}" @if($author->id == $quotation->author_id ) selected="selected" @endif>{{ $author->first_name . " " .$author->middle_name . " " . $author->last_name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group col-md-12">

                        {!! Form::label('text', 'Text of Quotation') !!}

                        {!! Form::textarea('text', null, [
                        'rows' => '10',
                        'class' => 'form-control',
                        'placeholder' => 'Quotation',
                        'required' => 'true'
                        ]) !!}
                    </div>


                    {{--<div class="form-group">
                        {!! Form::label('Image') !!}
                        {!! Form::file('img', null) !!}
                    </div>--}}

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