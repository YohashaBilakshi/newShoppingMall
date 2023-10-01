<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

  </head>
  <body>

    <div class="container-scroller">

        @include('admin/layouts/navigation')
      
        <div class="container-fluid page-body-wrapper">
            
            <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Product </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">Product List</li>
                    </ol>
                </nav>
                </div>
                <div class="row">
                
                    <div class="col-lg-6 grid-margin stretch-card">
                        <a class="nav-link btn btn-primary create-new-button" id="createNew" data-toggle="dropdown" aria-expanded="false" onclick="showCreate()"> + Add New Product</a>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product List</h4>
                            </p>
                            <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Categoay </th>
                                        <th> Price </th>
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

    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    
    <script>
        function showCreate(){
            $('#createUserModal').modal('show')
        }
    </script>

  </body>
</html>