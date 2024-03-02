<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="active">
                            <a href="/dashboard"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Master Data</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="">
                                <i data-feather="server"></i><span>Reference</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/profession" class="">Profession</a></li>
                                <li><a href="/categories" class="">Categories</a>
                                </li>
                                <li><a href="/type" class="">Type
                                        Product</a>
                                </li>
                                <li><a href="/role" class="">Access
                                        Role</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i
                                    data-feather="box"></i><span>Product</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/product" class="">Item
                                        Product</a></li>
                                <li><a href="/scanbarcode" class="">Scan
                                        Barcode</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/supplier" class=""><i data-feather="codepen"></i><span>Suplier</span></a>
                        </li>
                        <li>
                            <a href="/customer" class=""><i data-feather="users"></i><span>Customer</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Managements</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="users"></i><span>Manage
                                    Users</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a href="/employee" class="">Employee </a>
                                </li>
                                <li>
                                    <a href="/users" class="">Employee
                                        Users</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales Transaction</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i
                                    data-feather="shopping-cart"></i><span>Transaction</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/shopping-cart" class="">Shopping Cart</a></li>
                                <li><a href="/orders" class="">Orders</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i
                                    data-feather="credit-card"></i><span>Purchase</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/purchase" class="">Purchase</a></li>
                                <li><a href="/purchase-supplier" class="">Purchase
                                        Suplier</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li><a href="salesreport.html"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a>
                        </li>
                        <li><a href="purchaseorderreport.html"><i data-feather="pie-chart"></i><span>Purchase
                                    report</span></a></li>
                        <li><a href="inventoryreport.html"><i data-feather="credit-card"></i><span>Inventory
                                    Report</span></a></li>
                        <li><a href="invoicereport.html"><i data-feather="file"></i><span>Invoice Report</span></a>
                        </li>
                        <li><a href="purchasereport.html"><i data-feather="bar-chart"></i><span>Purchase
                                    Report</span></a></li>
                        <li><a href="supplierreport.html"><i data-feather="database"></i><span>Supplier
                                    Report</span></a></li>
                        <li><a href="customerreport.html"><i data-feather="pie-chart"></i><span>Customer
                                    Report</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" role="tab" aria-selected="true">
                            <img src="{{ asset('assets') }}/img/icons/grid.svg" alt />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#messages" id="master-tab" data-bs-toggle="tab"
                            data-bs-target="#master" role="tab" aria-selected="false">
                            <img src="{{ asset('assets') }}/img/icons/server.svg" alt />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#profile" id="user-tab" data-bs-toggle="tab"
                            data-bs-target="#user" role="tab" aria-selected="false">
                            <img src="{{ asset('assets') }}/img/icons/users.svg" alt />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#report" id="sales-tab" data-bs-toggle="tab"
                            data-bs-target="#sales" role="tab" aria-selected="true">
                            <img src="{{ asset('assets') }}/img/icons/shopping-bag.svg" alt />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab"
                            data-bs-target="#report" role="tab" aria-selected="true">
                            <img src="{{ asset('assets') }}/img/icons/book.svg" alt />
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                    <li>
                        <a href="/dashboard" class="active"><span>Dashboard</span></a>
                    </li>
                </ul>
                <ul class="tab-pane" id="master" aria-labelledby="master-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Reference</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="/profession" class="">Profession</a></li>
                            <li><a href="/categories" class="">Categories</a>
                            </li>
                            <li><a href="/type" class="">Type
                                    Product</a>
                            </li>
                            <li><a href="/role" class="">Access
                                    Role</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Product</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="/product" class="">Item
                                    Product</a></li>
                            <li><a href="/scanbarcode" class="">Scan
                                    Barcode</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/supplier" class=""><span>Suplier</span></a>
                    </li>
                    <li>
                        <a href="/customer" class=""><span>Customer</span></a>
                    </li>
                </ul>
                <ul class="tab-pane" id="user" aria-labelledby="user-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Manage
                                Users</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="/employee" class="">Employee </a>
                            </li>
                            <li>
                                <a href="/users" class="">Employee
                                    Users</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="sales" aria-labelledby="sales-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Transaction</span><span
                                class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="/shopping-cart" class="">Shopping Cart</a></li>
                            <li><a href="/orders" class="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Purchase</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="/purchase" class="">Purchase</a></li>
                            <li><a href="/purchase-supplier" class="">Purchase
                                    Suplier</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="report" aria-labelledby="set-tab3">
                    <li>
                        <a href="sales-report.html"><span>Sales Report</span></a>
                    </li>
                    <li>
                        <a href="purchase-report.html"><span>Purchase report</span></a>
                    </li>
                    <li>
                        <a href="inventory-report.html"><span>Inventory Report</span></a>
                    </li>
                    <li>
                        <a href="invoice-report.html"><span>Invoice Report</span></a>
                    </li>
                    <li>
                        <a href="supplier-report.html"><span>Supplier Report</span></a>
                    </li>
                    <li>
                        <a href="customer-report.html"><span>Customer Report</span></a>
                    </li>
                    <li>
                        <a href="expense-report.html"><span>Expense Report</span></a>
                    </li>
                    <li>
                        <a href="income-report.html"><span>Income Report</span></a>
                    </li>
                    <li>
                        <a href="tax-reports.html"><span>Tax Report</span></a>
                    </li>
                    <li>
                        <a href="profit-and-loss.html"><span>Profit & Loss</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sidebar horizontal-sidebar">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <ul class="nav">
            <li>
                <a href="/dashboard" class="active subdrop"><i data-feather="grid"></i><span> Dashboard</span>
                </a>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img src="{{ asset('assets') }}/img/icons/server.svg" alt /><span>
                        Master Data
                    </span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Reference</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="/profession" class="">Profession</a></li>
                            <li><a href="/categories" class="">Categories</a>
                            </li>
                            <li><a href="/type" class="">Type
                                    Product</a>
                            </li>
                            <li><a href="/role" class="">Access
                                    Role</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img src="{{ asset('assets') }}/img/icons/users.svg"
                        alt="img" /><span>User Managements</span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Manage
                                Users</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="/employee" class="">Employee </a>
                            </li>
                            <li>
                                <a href="/users" class="">Employee
                                    Users</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img src="{{ asset('assets') }}/img/icons/shopping-bag.svg"
                        alt="img" /><span>Sales Transaction</span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Transaction</span><span
                                class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="/shopping-cart" class="">Shopping Cart</a></li>
                            <li><a href="/orders" class="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Purchase</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="/purchase" class="">Purchase</a></li>
                            <li><a href="/purchase-supplier" class="">Purchase
                                    Suplier</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img src="{{ asset('assets') }}/img/icons/book.svg"
                        alt="img" /><span>Reports</span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="sales-report.html"><span>Sales Report</span></a>
                    </li>
                    <li>
                        <a href="purchase-report.html"><span>Purchase report</span></a>
                    </li>
                    <li>
                        <a href="inventory-report.html"><span>Inventory Report</span></a>
                    </li>
                    <li>
                        <a href="invoice-report.html"><span>Invoice Report</span></a>
                    </li>
                    <li>
                        <a href="supplier-report.html"><span>Supplier Report</span></a>
                    </li>
                    <li>
                        <a href="customer-report.html"><span>Customer Report</span></a>
                    </li>
                    <li>
                        <a href="expense-report.html"><span>Expense Report</span></a>
                    </li>
                    <li>
                        <a href="income-report.html"><span>Income Report</span></a>
                    </li>
                    <li>
                        <a href="tax-reports.html"><span>Tax Report</span></a>
                    </li>
                    <li>
                        <a href="profit-and-loss.html"><span>Profit & Loss</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
