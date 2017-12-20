    <!-- =============================================================
         footer SECTION
     ==============================================================-->
    <footer class="bg-dark">
        <div class="py-5 content-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <div class="card-body p-0">
                                <h4 class="card-title">
                                    CORPORATION
                                </h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Customer Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Company</a>
                                    </li>
                                    <li>
                                        <a href="#">Investor Relations</a>
                                    </li>
                                    <li class="last">
                                        <a href="#">Advanced Search</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <div class="card-body p-0">
                                <h4 class="card-title">
                                    CUSTOMER SERVICE
                                </h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Specials</a>
                                    </li>
                                    <li>
                                        <a href="#">Investor Relations</a>
                                    </li>
                                    <li class="last">
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <div class="card-body p-0">
                                <h4 class="card-title">
                                    CONTACT US
                                </h4>
                                <ul class="list-unstyled mb-0 toggle-footer">
                                    <li class="media align-items-center">
                                        <span class="fa-stack">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <div class="media-body">
                                            <p>Themesstock, 789 Main rd,<br> Anytown, CA 12345 USA</p>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <span class="fa-stack">
                                            <i class="fa fa-mobile"></i>
                                        </span>
                                        <div class="media-body">
                                            <p>
                                                9801212345 <br> 9801212345
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media align-items-center">
                                        <span class="fa-stack">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <div class="media-body">
                                            <p>
                                                abcdef@gmail.com
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <div class="card-body p-0">
                                <h4 class="card-title">
                                    Your email address
                                </h4>
                                {!! Form::open(['id'=>'subscribeFrm']) !!}
                                     {!! Form::hidden('subscribe_route', route('systemSubscribe'), ['class'=>'subscribe_url']) !!}
                                     <div class="form-group">
                                      {!! Form::text('subscribe_email', null, ['placeholder'=>'Your email address', 'class'=>'form-control subscribe_email', 'required']) !!}
                                    </div>


                                     <div class="form-group cstm-btn">
                                       {!! Form::submit('Subscribe', ['class'=>'btn btn-success']) !!}
                                      </div>
                                {!! Form::close() !!}
                                <ul class="list-inline mb-0 social-icons">
                                    <li class="list-inline-item">
                                        <a href="#" class="icon-container">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="icon-container">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="icon-container">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-content">
            <div class="container">
                Copyright © 2017 mywebnepal - All rights Reserved
            </div>
        </div>
    </footer>