@include('admin/layouts/headDashboard')

<body>

    <div class="container-scroller">

        @include('admin/layouts/navigation')
        
        <div class="container-fluid page-body-wrapper">
            
            <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Order </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order List</h4>
                        </p>
                        <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Order ID </th>
                                    <th> Amount </th>
                                    <th> Date No </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Herman Beck </td>
                                    <td> $ 77.99 </td>
                                    <td> May 15, 2015 </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> $245.30 </td>
                                    <td> July 1, 2015 </td>
                                    <td> July 1, 2015 </td>
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>

                @include('admin/layouts/footer')
            
            </div>
        </div>

    </div>

</body>