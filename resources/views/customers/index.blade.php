


            

            <!-- ============================================================== -->
            <!-- Table  Content here -->
            <!-- ============================================================== -->
               @extends('mainSection.master')
               @section('content')
            <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Editable Table</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Editable Table</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Table Edit</h4>
                                        <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>phone</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                      <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                          
                                                     
                                                </tbody>
                                                </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                @endsection
  
      
  
  
      