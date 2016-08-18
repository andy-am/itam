@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Show quotation with id: {{ $quotation->id }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Show quotation with id: {{ $quotation->id }}</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="box box-solid">

            <div class="box-body">
                <div class="row">

                    {{ Form::model($quotation, ['action' => ['AdminController@updateQuotation', $quotation->id], 'method' => 'put']) }}

                        <div class="form-group col-md-6">

                            {!! Form::label('Name of author', 'Name of Author') !!}

                            {!! Form::text('author', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Name of author',
                                'required' => 'true'
                            ]) !!}
                        </div>


                        <div class="form-group col-md-12">

                            {!! Form::label('text', 'Text of quotation') !!}

                            {!! Form::textarea('text', null, [
                                'rows' => '10',
                                'class' => 'form-control',
                                'placeholder' => 'Text of quotation',
                                'required' => 'true'
                            ]) !!}
                        </div>

                        <div class="form-group col-md-12">
                            @if ($quotation->img)
                            {{ Html::image('/images/upload/quotation/'.$quotation->img, 'alt', array( 'width' => 425, 'height' => 200, 'class'=>'hoverImg', 'data-img'=>$quotation->img)) }}
                            @else
                                <i class="fa fa-unlink"></i>
                            @endif
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