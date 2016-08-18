<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="/images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>{{Lang::get("quotations.quotations")}}</h2>

                    @foreach($A_quotations as $quotation)
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="/images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote> {{ $quotation->text }} </blockquote>
                                <h3><a href="#">- {{ $quotation->author }} </a></h3>
                            </div>
                        </div>
                    @endforeach

                 </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>{{ Lang::get('footer.contact') }}</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                    </address>

                    <h2>{{ Lang::get('footer.address') }}</h2>
                    <address>
                        Unit C2, St.Vincent's Trading Est., <br>
                        Feeder Road, <br>
                        Bristol, BS2 0UY <br>
                        United Kingdom <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>{{ Lang::get('footer.sendAMessage') }}</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Meno">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Správa..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Odošli">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; {{ Lang::get('footer.copyright') }} Andrej Májik 2016. All Rights Reserved.</p>
                    <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a> <a href="{{ url('/administration') }}" title="Administration" class="fa fa-lock"></a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>