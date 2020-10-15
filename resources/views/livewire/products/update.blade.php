<div class="wrapper">



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese datos</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">nombre</label>
                                    <input type="name" class="form-control" wire:model="name" type="text"
                                        class="form-control" id="name" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">descripcion</label>
                                    <input type="password" class="form-control" wire:model="description"
                                        class="form-control" id="description">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button wire:click="update" class="btn btn-primary"><i class='fas fa-save'></i>
                                </button>
                            </div>
                        </form>
                    </div>



                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>
                <!-- ./wrapper -->