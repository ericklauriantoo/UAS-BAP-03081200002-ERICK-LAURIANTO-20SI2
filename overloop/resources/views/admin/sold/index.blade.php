@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Sold Product List</h5>
          <a href="{{ url('/admin/sold/print_pdf') }}" target="blank" class="btn btn-primary" title="Print PDF">
            <i class="fa fa-plus" aria-hidden="true"></i> Print PDF
          </a>

          <p><br></p>
          <div class="table-primary">
            <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Size</th>
                    <th>Loopkey</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sold as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->category }}</td>
                    <td>Size {{ $item->size }}</td>
                    <td>{{ $item->loopkey }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection