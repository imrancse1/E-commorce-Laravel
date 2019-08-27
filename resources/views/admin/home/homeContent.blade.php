@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-primary card-inverse">
                <div class="card-header card-primary">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-default">
                    <a href="javascript:;">
                        <span class="float-sm-left">View Details</span>
                        <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-green card-inverse">
                <div class="card-header card-green">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-green">
                    <a href="javascript:;">
                        <span class="float-sm-left">View Details</span>
                        <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-yellow card-inverse">
                <div class="card-header card-yellow">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-yellow">
                    <a href="javascript:;">
                        <span class="float-sm-left">View Details</span>
                        <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-red card-inverse">
                <div class="card-header card-red">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-red">
                    <a href="javascript:;">
                        <span class="float-sm-left">View Details</span>
                        <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                    <div class="float-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white btn-sm dropdown-toggle"
                                    data-toggle="dropdown">
                                Actions

                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="#">Action</a>

                                <a class="dropdown-item" href="#">Another action</a>

                                <a class="dropdown-item" href="#">Something else here</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.panel -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                    <div class="float-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white btn-sm dropdown-toggle"
                                    data-toggle="dropdown">
                                Actions

                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="#">Action</a>

                                <a class="dropdown-item" href="#">Another action</a>

                                <a class="dropdown-item" href="#">Something else here</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>3326</td>
                                        <td>10/21/2013</td>
                                        <td>3:29 PM</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>3325</td>
                                        <td>10/21/2013</td>
                                        <td>3:20 PM</td>
                                        <td>$234.34</td>
                                    </tr>
                                    <tr>
                                        <td>3324</td>
                                        <td>10/21/2013</td>
                                        <td>3:03 PM</td>
                                        <td>$724.17</td>
                                    </tr>
                                    <tr>
                                        <td>3323</td>
                                        <td>10/21/2013</td>
                                        <td>3:00 PM</td>
                                        <td>$23.71</td>
                                    </tr>
                                    <tr>
                                        <td>3322</td>
                                        <td>10/21/2013</td>
                                        <td>2:49 PM</td>
                                        <td>$8345.23</td>
                                    </tr>
                                    <tr>
                                        <td>3321</td>
                                        <td>10/21/2013</td>
                                        <td>2:23 PM</td>
                                        <td>$245.12</td>
                                    </tr>
                                    <tr>
                                        <td>3320</td>
                                        <td>10/21/2013</td>
                                        <td>2:15 PM</td>
                                        <td>$5663.54</td>
                                    </tr>
                                    <tr>
                                        <td>3319</td>
                                        <td>10/21/2013</td>
                                        <td>2:13 PM</td>
                                        <td>$943.45</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.panel -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    <p>
                                        <small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via
                                            Twitter
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                        laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia
                                        pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas
                                        suscipit facere rem dicta, debitis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem
                                        quibusdam, tenetur commodi provident cumque magni voluptatem libero,
                                        quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias,
                                        officia repellendus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                        maiores odit qui est tempora eos, nostrum provident explicabo
                                        dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae
                                        minus eaque facere.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                                        numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil
                                        iure molestias aliquam, voluptatem totam quaerat, magni commodi
                                        quisquam.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est
                                        quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias
                                        sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis
                                        ut debitis!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus
                                        modi quam ipsum alias at est molestiae excepturi delectus nesciunt,
                                        quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum,
                                        atque.</p>
                                    <hr>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            <i class="fa fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">Action</a>

                                            <a class="dropdown-item" href="#">Another action</a>

                                            <a class="dropdown-item" href="#">Something else here</a>

                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio
                                        quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam.
                                        Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur,
                                        commodi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                        obcaecati, quaerat tempore officia voluptas debitis consectetur culpa
                                        amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt
                                        quisquam maxime neque eaque.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bell fa-fw"></i> Notifications Panel
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="float-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="float-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="float-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="float-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="float-right text-muted small"><em>11:32 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                            <span class="float-right text-muted small"><em>11:13 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-warning fa-fw"></i> Server Not Responding
                            <span class="float-right text-muted small"><em>10:57 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                            <span class="float-right text-muted small"><em>9:49 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item text-dark">
                            <i class="fa fa-money fa-fw"></i> Payment Received
                            <span class="float-right text-muted small"><em>Yesterday</em>
                                    </span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-white btn-block">View All Alerts</a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.panel -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                </div>
                <div class="card-body">
                    <div id="morris-donut-chart"></div>
                    <a href="#" class="btn btn-white btn-block">View Details</a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.panel -->
            <div class="chat-panel card">
                <div class="card-header">
                    <i class="fa fa-comments fa-fw"></i> Chat
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-white btn-sm" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right slidedown">

                            <a class="dropdown-item" href="#">
                                <i class="fa fa-refresh fa-fw"></i> Refresh
                            </a>


                            <a class="dropdown-item" href="#">
                                <i class="fa fa-check-circle fa-fw"></i> Available
                            </a>


                            <a class="dropdown-item" href="#">
                                <i class="fa fa-times fa-fw"></i> Busy
                            </a>


                            <a class="dropdown-item" href="#">
                                <i class="fa fa-clock-o fa-fw"></i> Away
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                            </a>

                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="chat">
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="float-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img float-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                    </small>
                                    <strong class="float-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="float-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img float-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                    </small>
                                    <strong class="float-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm"
                               placeholder="Type your message here..."/>
                        <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                    </div>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>

@endsection