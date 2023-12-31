@extends('layouts.admin')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Status</h1>
        </div>
      

        @if($errors->any())        
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('trans.update', $item->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="trasanction_status">Status</label>
                        <select name="transaction_status" id="transaction_status" class="form-control">
                            <option value="{{ $item->transaction_status }}" selected> Status saat ini <b>{{ $item->transaction_status }}</b></option>
                            <option value="IN CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>                   
                    <button type="submit" class="btn btn-primary btn-block">
                        Update
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->



@endsection

