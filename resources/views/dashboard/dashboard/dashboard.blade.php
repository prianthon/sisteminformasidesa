@extends('master')

@section('title')
  <title>Dashboard</title>
@endsection

@section('modernizr')
  <script src="{{ asset('/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
@endsection

@section('body')
  <body data-page="dashboard">
@endsection

@section('namaatas')
  <div class="navbar-center">Dashboard</div>
@endsection

@section('mainsidebar')
<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li class="current">
                <a href="index.html"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-shopping80"></i><span class="sidebar-text">eCommerce</span>
                <span class="fa arrow"></span><span class="label label-danger pull-right m-r-20 w-300">New</span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="ecommerce_dashboard.html"><span class="sidebar-text">Dashboard<span class="label label-dark pull-right">Hot</span></span></a>
                    </li>
                    <li>
                        <a href="ecommerce_products.html"><span class="sidebar-text">Products</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_product_view.html"><span class="sidebar-text">Product View</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_orders.html"><span class="sidebar-text">Orders</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_order_view.html"><span class="sidebar-text">Order View</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_invoice.html"><span class="sidebar-text">Invoice</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_pricing.html"><span class="sidebar-text">Pricing Tables</span></a>
                    </li>
                    <li>
                        <a href="shopping_cart.html"><span class="sidebar-text">Shopping Cart<span class="label label-danger pull-right">New</span></span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i><span class="sidebar-text">Blogging</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="blog_dashboard.html"><span class="sidebar-text">Dashboard<span class="label label-dark pull-right">Hot</span></span></a>
                    </li>
                    <li>
                        <a href="posts.html"><span class="sidebar-text">Articles</span></a>
                    </li>
                    <li>
                        <a href="post_edit.html"><span class="sidebar-text">Article View</span></a>
                    </li>
                    <li>
                        <a href="events.html"><span class="sidebar-text">Events</span></a>
                    </li>
                    <li>
                        <a href="event_edit.html"><span class="sidebar-text">Event View</span></a>
                    </li>
                    <li>
                        <a href="blog-list.html"><span class="sidebar-text">Blog List</span></a>
                    </li>
                    <li>
                        <a href="blog-single.html"><span class="sidebar-text">Blog Single</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../frontend/index.html" target="_blank"><i class="glyph-icon flaticon-frontend"></i><span class="sidebar-text">Frontend</span></a>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-star105"></i><span class="sidebar-text">Extra</span>
                <span class="fa arrow"></span><span class="label label-primary pull-right m-r-20 w-300">Hot</span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="widgets.html"><span class="sidebar-text">Widgets</span></a>
                    </li>
                    <li>
                        <a href="intro.html"><span class="sidebar-text">Intro</span></a>
                    </li>
                    <li>
                        <a href="coming_soon.html"><span class="sidebar-text">Coming Soon</span></a>
                    </li>
                    <li>
                        <a href="notes.html"><span class="sidebar-text">Notes</span></a>
                    </li>
                    <li>
                        <a href="calendar.html"><span class="sidebar-text">Calendar</span></a>
                    </li>
                    <li>
                        <a href="maps.html"><span class="sidebar-text">Google Maps</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil"></i><span class="sidebar-text">Colors Options</span>
                    <span class="fa arrow"></span></a>
                    <ul class="submenu collapse">
                    <li>
                        <a href="#" data-style="dark" class="theme-color"><span class="sidebar-text">Dark Skin</span></a>
                    </li>
                    <li>
                        <a href="#" data-style="light" class="theme-color"><span class="sidebar-text">Light Skin</span></a>
                    </li>
                    <li>
                        <a href="#" data-style="cafe" class="theme-color"><span class="sidebar-text">Cafe Skin</span></a>
                    </li>
                    <li>
                        <a href="#" data-style="blue" class="theme-color"><span class="sidebar-text">Blue Skin</span></a>
                    </li>
                    <li>
                        <a href="#" data-style="red" class="theme-color"><span class="sidebar-text">Red Skin</span></a>
                    </li>
                    <li>
                        <a href="#" data-style="green" class="theme-color"><span class="sidebar-text">Green Skin</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-email"></i><span class="sidebar-text">Email</span><span class="fa arrow"></span></a>
                 <ul class="submenu collapse">
                    <li>
                        <a href="mailbox.html"><span class="sidebar-text">Inbox</span></a>
                    </li>
                    <li>
                        <a href="email_compose.html"><span class="sidebar-text">Write a Message</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Forms</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="forms.html"><span class="sidebar-text">Form Elements</span></a>
                    </li>
                    <li>
                        <a href="form_validation.html"><span class="sidebar-text">Form Validation</span></a>
                    </li>
                    <li>
                        <a href="form_wizards.html"><span class="sidebar-text">Form Wizards</span></a>
                    </li>
                    <li>
                        <a href="sliders.html"><span class="sidebar-text">Sliders</span></a>
                    </li>
                    <li>
                        <a href="wysiwyg.html"><span class="sidebar-text">Editors</span></a>
                    </li>
                    <li>
                        <a href="file_upload.html"><span class="sidebar-text">File Upload</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-ui-elements2"></i><span class="sidebar-text">UI Elements</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="components.html"><span class="sidebar-text">Components</span></a>
                    </li>
                    <li>
                        <a href="animations.html"><span class="sidebar-text">Animations CSS3</span></a>
                    </li>
                    <li>
                        <a href="buttons.html"><span class="sidebar-text">Buttons</span></a>
                    </li>
                    <li>
                        <a href="icons.html"><span class="sidebar-text">Icons</span></a>
                    </li>
                    <li>
                        <a href="typography.html"><span class="sidebar-text">Typography</span></a>
                    </li>
                    <li>
                        <a href="modals.html"><span class="sidebar-text">Modals</span></a>
                    </li>
                    <li>
                        <a href="notifications.html"><span class="sidebar-text">Notifications</span></a>
                    </li>
                    <li>
                        <a href="tabs_accordion.html"><span class="sidebar-text">Tabs &amp; Accordion</span></a>
                    </li>
                    <li>
                        <a href="nestable-list.html"><span class="sidebar-text">Nestable &amp; Sortable lists</span></a>
                    </li>
                     <li>
                        <a href="tree.html"><span class="sidebar-text">Tree View</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-pages"></i><span class="sidebar-text">Pages</span><span class="fa arrow"></span>
                    <span class="label label-danger pull-right m-r-20 w-300">New</span>
                </a>
                <ul class="submenu collapse">
                    <li>
                        <a href="timeline.html"><span class="sidebar-text">Timeline</span></a>
                    </li>
                    <li>
                        <a href="forum.html"><span class="sidebar-text">Forum<span class="label label-dark pull-right">New</span></span></a>
                    </li>
                    <li>
                        <a href="members.html"><span class="sidebar-text">Members</span></a>
                    </li>
                    <li>
                        <a href="search_results.html"><span class="sidebar-text">Search Results<span class="label label-danger pull-right">New</span></span></a>
                    </li>
                    <li>
                        <a href="contact.html"><span class="sidebar-text">Contact<span class="label label-danger pull-right">New</span></span></a>
                    </li>
                    <li>
                        <a href="comments.html"><span class="sidebar-text">Comments</span></a>
                    </li>
                    <li>
                        <a href="faq.html"><span class="sidebar-text">FAQ</span></a>
                    </li>
                    <li>
                        <a href="404.html"><span class="sidebar-text">404 Error Page</span></a>
                    </li>
                    <li>
                        <a href="500.html"><span class="sidebar-text">500 Error Page</span></a>
                    </li>
                    <li>
                        <a href="blank_page.html"><span class="sidebar-text">Blank Page</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-panels"></i><span class="sidebar-text">Panels</span><span class="fa arrow"></span></a>
                  <ul class="submenu collapse">
                    <li>
                        <a href="panels.html"><span class="sidebar-text">Custom Panels</span></a>
                    </li>
                    <li>
                        <a href="panels_draggable.html"><span class="sidebar-text">Draggable Panels</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-table"></i><span class="sidebar-text">Tables</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="tables.html"><span class="sidebar-text">Style Tables</span></a>
                    </li>
                    <li>
                        <a href="tables_editable.html"><span class="sidebar-text">Editable Tables</span></a>
                    </li>
                    <li>
                        <a href="tables_dynamic.html"><span class="sidebar-text">Dynamic Tables</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Account</span><span class="fa arrow"></span></a>
                  <ul class="submenu collapse">
                    <li>
                        <a href="profil.html"><span class="sidebar-text">User Profile</span></a>
                    </li>
                    <li>
                        <a href="profil_edit.html"><span class="sidebar-text">Profil Edit</span></a>
                    </li>
                    <li>
                        <a href="login.html"><span class="sidebar-text">Login</span></a>
                    </li>
                    <li>
                        <a href="signup.html"><span class="sidebar-text">Signup</span></a>
                    </li>
                    <li>
                        <a href="password_forgot.html"><span class="sidebar-text">Password recover</span></a>
                    </li>
                    <li>
                        <a href="lockscreen.html"><span class="sidebar-text">Lockscreen</span></a>
                    </li>
                    <li>
                        <a href="session_timeout.html"><span class="sidebar-text">Session Timeout</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="glyph-icon flaticon-gallery"></i><span class="sidebar-text">Images Manager</span><span class="fa arrow"></span></a>
                 <ul class="submenu collapse">
                    <li>
                        <a href="gallery.html"><span class="sidebar-text">Gallery</span></a>
                    </li>
                    <li>
                        <a href="medias.html"><span class="sidebar-text">Medias</span></a>
                    </li>
                    <li>
                        <a href="image_croping.html"><span class="sidebar-text">Image Croping</span></a>
                    </li>
                </ul>
            </li>
            <li class="m-b-245">
                <a href="charts.html"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Charts</span><span class="pull-right label label-primary">6</span></a>
            </li>

        </ul>
    </div>
    <div class="footer-widget">
        <div class="footer-gradient"></div>
        <div id="sidebar-charts">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Orders</div>
                    <div class="sidebar-chart-number">1,256</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar1"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Income</div>
                    <div class="sidebar-chart-number">$47,564</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar2"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Visits</div>
                    <div class="sidebar-chart-number" id="number-visits">147,687</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar3"></span>
                </div>
            </div>
        </div>
        <div class="sidebar-footer clearfix">
            <a class="pull-left" href="profil_edit.html" data-rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
            <a class="pull-left" href="lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
            <a class="pull-left" href="login.html" data-rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
        </div>
    </div>
</nav>
@endsection

@section('js')
  <script src="{{ asset('/assets/js/application.js') }}"></script>
@endsection
