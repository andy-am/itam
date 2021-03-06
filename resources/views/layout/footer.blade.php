<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="/images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                @if(count($quotations) > 0)
                    <div class="testimonial bottom">
                        <h2>Citáty</h2>
                        @foreach($quotations as $quotation)
                            <div class="media">
                                <div class="pull-left">
                                    @if($quotation->author->image)
                                        <a href="#">{{ Html::image('/upload/authors/'.$quotation->author->image, 'alt', array( 'width' => 81, 'height' => 81, 'class'=>'img-thumbnail')) }}</a>
                                    @else
                                        <a href="#"><img class="img-thumbnail" src="/images/home/profile1.png" alt=""></a>
                                    @endif
                                </div>
                                <div class="media-body">
                                    <blockquote>{{ $quotation->text }}</blockquote>
                                    <h3><a href="#">- {{ $quotation->author->first_name . " " . $quotation->author->middle_name . " " . $quotation->author->last_name }} </a></h3>
                                </div>
                            </div>
                        @endforeach
                     </div>
                @endif
            </div>

            <div class="col-md-8 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Pošlite nám email</h2>
                    @if( $errors->first('emailWasSent') ) <h1>{{ $errors->first('emailWasSent') }} </h1> @endif

                    {{ Form::open(['url' => ['contact/sendUsEmail'], 'method' => 'post']) }}


                        <div class="form-group @if($errors->first('name')) has-error @endif">
                            {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Meno',
                            ]) !!}
                            <span class="help-block">
                                {{ $errors->first('name') }}
                            </span>
                        </div>

                        <div class="form-group @if($errors->first('email')) has-error @endif">
                            {!! Form::text('email', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Email',
                            ]) !!}
                            <span class="help-block ">
                                {{ $errors->first('email') }}
                            </span>
                        </div>

                        <div class="form-group @if($errors->first('message')) has-error @endif">
                            {!! Form::textarea('message', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Správa'
                            ]) !!}
                            <span class="help-block">
                                {{ $errors->first('message') }}
                            </span>
                        </div>

                        <div class="form-group">

                            {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i> Odošli', [
                                'type' => 'submit',
                                'class' => 'btn btn-submit',
                            ]) !!}
                        </div>

                        {{ Form::close() }}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Andrej Májik 2016.</p>
                    <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a> <a href="{{ url('/administration') }}" title="Administration" class="fa fa-lock"></a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>