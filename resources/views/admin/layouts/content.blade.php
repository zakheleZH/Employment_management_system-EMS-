  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Users
                        <p><i class="fas fa-user fa-fw" style="font-size:100px;"></i></p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" style="font-size:18px;">
                            {{App\Models\User::all()->count()}}
                        </a>
                        <div class="small text-white"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Department
                        <p><i class="fas fa-home" style="font-size:100px;"></i></p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" style="font-size:18px;">
                            {{App\Models\Department::all()->count()}}
                        </a>
                        <div class="small text-white"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Notice
                        <p><i class="fas fa-envelope" style="font-size:100px;"></i></p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" style="font-size:18px;">
                            {{App\Models\Notice::all()->count()}}
                        </a>
                        <div class="small text-white"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body"> Leave
                        <p><i class="fas fa-book" style="font-size:100px;"></i></p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#" style="font-size:18px;">

                            {{App\Models\Leave::all()->count()}}
                        </a>
                        <div class="small text-white"></div>
                    </div>
                </div>
            </div>
        </div> <div class="row">

        </div>

        <br>
        <hr>



<!--end first model-->









             </table>

              <!-- /.card-header -->

              <!-- /.card-body -->

            <!-- /.card -->

            <!-- Input addon -->

            <!-- /.card -->
            <!-- Horizontal Form -->

            <!-- /.card -->

          </div>

          </div>
