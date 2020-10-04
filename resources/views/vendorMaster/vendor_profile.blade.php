@extends('layouts.vendor')


@section('title')
    Dashboard | Vendor
@endsection


@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                    <th>Name</th>
                    <th>username</th>
                    <th>gender</th>
                    
                    <th>address</th>
                    <th>email</th>
                    <th>state</th>
                    <th>zip</th>
                    <th>idproofno.</th>
                    <th>idprroftype</th>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $vendors->name }}</td>
                    <td>{{ $vendors->username }}</td>
                    <td>{{ $vendors->gender }}</td>
                    <td>{{ $vendors->address }}</td>
                    <td>{{ $vendors->state }}</td>
                    <td>{{ $vendors->zip }}</td>
                    <td>{{ $vendors->id_proof_no }}</td>
                    </tr>
                
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  

@endsection


@section('scripts')
    
@endsection