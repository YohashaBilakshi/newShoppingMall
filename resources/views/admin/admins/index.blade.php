@include('admin/layouts/headDashboard')

<body>

<div class="container-scroller">

    @include('admin/layouts/navigation')
    
    <div class="container-fluid page-body-wrapper">
        
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Users </h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
            </div>
    
            <div class="row">

                <div class="col-lg-6 grid-margin stretch-card">
                    <a class="nav-link btn btn-primary create-new-button" id="createNew" data-toggle="dropdown" aria-expanded="false" onclick="showCreate()">+ Register New User</a>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User List</h4>
                        </p>
                        <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Username </th>
                                    <th> Role </th>
                                    <th> Email </th>
                                    <th> Comtact Number  </th>
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
                                    <td> 
                                        {{-- <a href="{{ route('user.edit', ['id' => 1]) }}" class="btn btn-primary btn-icon-text">
                                            Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                        </a> --}}
                                        <a href="{{ route('user.edit', ['id' => 1]) }}" class="btn btn-primary btn-icon-text">
                                            Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>

                                        <a href="{{ route('user.edit', ['id' => 1]) }}" class="btn btn-danger btn-icon-text">
                                            Delete <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            
            </div>


            <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered custom-modal-width" role="document">
                    <div class="modal-content">
                        @include('admin/admins/create')
                    </div>
                </div>
            </div> 
            
        </div>

            @include('admin/layouts/footer')
        
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    

<script>
    function showCreate(){
        $('#createUserModal').modal('show')
    }
</script>

</body>
