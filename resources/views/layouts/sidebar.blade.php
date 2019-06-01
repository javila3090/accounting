<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item active">
            <a href="index.html" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>{{ __('messages.dashboard') }}</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">Hot</div>
                </div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">{{ __('messages.my_accounting') }}</li>
        <li class="sidenav-item">
            <a href="typography.html" class="sidenav-link">
                <i class="sidenav-icon feather feather icon-trending-up"></i>
                <div>{{ __('messages.sales_and_income') }}</div>
            </a>
        </li>        
        <li class="sidenav-item">
            <a href="typography.html" class="sidenav-link">
                <i class="sidenav-icon feather feather icon-trending-down"></i>
                <div>{{ __('messages.purchases_and_expenses') }}</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-pie-chart"></i>
                <div>{{ __('messages.taxes') }}</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="bui_alert.html" class="sidenav-link">
                        <div>{{ __('messages.balances') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="bui_badges.html" class="sidenav-link">
                        <div>{{ __('messages.annual') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-bar-chart-2"></i>
                <div>{{ __('messages.balances') }}</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="bui_alert.html" class="sidenav-link">
                        <div>{{ __('messages.monthly') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="bui_badges.html" class="sidenav-link">
                        <div>{{ __('messages.annual') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-list"></i>
                <div>{{ __('messages.tasks') }}</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="bui_alert.html" class="sidenav-link">
                        <div>{{ __('messages.opened_tasks') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="bui_badges.html" class="sidenav-link">
                        <div>{{ __('messages.closed_tasks') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Admin -->
        @if(Auth::check() && Auth::user()->hasRole('admin'))
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">{{ __('messages.admin') }}</li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-users"></i>
                <div>{{ __('messages.users') }}</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="#" class="sidenav-link">
                        <i class="sidenav-icon feather icon-list"></i>
                        <div>{{ __('messages.list') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{url('/users/create')}}" class="sidenav-link">
                        <i class="sidenav-icon feather icon-plus"></i>
                        <div>{{ __('messages.new_user') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        <!-- Pages -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">{{ __('messages.others') }}</li>
        <li class="sidenav-item">
            <a href="pages_faq.html" class="sidenav-link">
                <i class="sidenav-icon feather icon-anchor"></i>
                <div>FAQ</div>
            </a>
        </li>
    </ul>
</div>