<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/admin/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Andrej</p>

                <a href="/"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            {{--<li class="active">
                <a href="{{ url('/administration') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>--}}

            {{--<li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                </a>
            </li>--}}
            <li class="frontend text-center">
                <a href="/">
                    <i class="ion ion-android-contacts"></i>
                    <span>FRONTEND </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss"></i>
                    <span>Novinky </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('') }}"><i class="fa fa-angle-double-right"></i> Pridať novinku</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Grafy </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('') }}"><i class="fa fa-angle-double-right"></i> Visits</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-indent-left"></i>
                    <span>Ankety </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('') }}"><i class="fa fa-angle-double-right"></i> All votes</a></li>
                </ul>
            </li>

            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Emails </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/administration/email/showEmails') }}"><i class="fa fa-angle-double-right"></i> Show emails</a></li>
                </ul>
            </li>--}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-comments"></i>
                    <span>Blog </span>
                    <i class="fa fa-angle-left pull-right"></i>
                    <small class="badge pull-right bg-red">{{ $A_blogs->count()}}</small>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url("/administration/blog/addNewBlog")}}"><i class="fa fa-angle-double-right"></i>Add New Blog</a></li>
                    <li><a href="{{url("/administration/blog/showAllBlogs")}}"><i class="fa fa-angle-double-right"></i>Show Blogs</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ion ion-speakerphone"></i>
                    <span>Newsletter </span>
                    <i class="fa fa-angle-left pull-right"></i>
                    <small class="badge pull-right bg-red">{{ $A_newsletters->count()}}</small>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url("/administration/newsletter/addNewNewsletter")}}"><i class="fa fa-angle-double-right"></i>Add New Newsletter</a></li>
                    <li><a href="{{url("/administration/newsletter/showAllNewsletters")}}"><i class="fa fa-angle-double-right"></i>Show Newsletter</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-quote-left"></i>
                    <span>Citáty </span>
                    <i class="fa fa-angle-left pull-right"></i>
                    <small class="badge pull-right bg-red">{{ $A_quotations->count() }}</small>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url("/administration/quotation/addNewQuotation")}}"><i class="fa fa-angle-double-right"></i>Add New Quotation</a></li>
                    <li><a href="{{url("/administration/quotation/showAllQuotation")}}"><i class="fa fa-angle-double-right"></i>Show Quotation</a></li>
                </ul>
            </li>

            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                    <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                </ul>
            </li>--}}
            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                </ul>
            </li>--}}
            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                </ul>
            </li>--}}
            {{--<li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>--}}
            {{--<li>
                <a href="pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>--}}
            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                    <li><a href="/pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                </ul>
            </li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>