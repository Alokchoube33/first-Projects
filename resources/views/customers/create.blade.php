        
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

            <!-- Bootstrap Css -->
            <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
            <!-- Icons Css -->
            <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
            <!-- App Css-->
            <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
          
            @extends('mainSection.master')  
            @section('content')
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                        
                                        <h4 class="card-title">Table Edit</h4>
                                        <a href="#" class="btn btn-primary">Add Customer</a>
                                        <a href="#" class="btn btn-secondary">Back</a>
                        
                                    </div>
                        
                                    <div class="table-responsive">
                                        <!-- Add your form here -->
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                                                @error('name')
                                                <p class = valid-feedback>{{$message}}</p>
                                                @enderror
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                                                @error('email')
                                                <p class = valid-feedback>{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone') }}">
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                        
                                    </div>
                        
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            @endsection
           
 

     