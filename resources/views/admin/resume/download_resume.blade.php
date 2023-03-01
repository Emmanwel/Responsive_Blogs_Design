@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="card-body mt-7">

                            <h4 class="card-title">Upload Resume </h4>

                            <form method="post" action="{{ route('store.resume') }}" enctype="multipart/form-data">

                                @csrf

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                    <label class="custom-file-label" for="chooseFile">Select file</label>
                                </div>

                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Resume">

                            </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
    </div>
@endsection
