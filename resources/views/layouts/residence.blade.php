<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">Barangay Ermita System</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset("asset/images/user.png") }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('residence') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Residence</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Residence
                            </h2><br/>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Search" />
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <ul class="header-dropdown m-r--5">
                                
                                <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                    <i class="material-icons">add</i>
                                </button>
                            </ul>
                        </div>
                        <!--modal-->
                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="defaultModalLabel">Add Residence</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Message">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Message">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row clearfix">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="Username">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                                <div class="form-line">
                                                                        <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                                                    </div>
                                                        </div>
                                                </div>
                                        </div>        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
            <!-- #END# Striped Rows -->
            <!-- Bordered Table -->
            <!-- #END# Bordered Table -->
            <!-- Hover Rows -->
            <!-- #END# Hover Rows -->
            <!-- Condensed Table -->
            <!-- #END# Condensed Table -->
            <!-- Contextual Classes -->
            <!-- #END# Contextual Classes -->
            <!-- With Material Design Colors -->
            <!-- #END# With Material Design Colors -->
        </div>
    </section>
</body>
</html>
