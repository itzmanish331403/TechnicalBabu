@extends('layout.admin-panel')

@section('page-content')

<div class="container mt-5">
  <a  class="add-btn" href="{{ route('product.create') }}"> Add product </a>
  
    <table class="table table-bordered yajra-datatable"  style="width: 1250px;
    border: 1px;
    text-align: center;">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>image</th>
                <th>name</th>
                <th>status</th>
                <th>special_price</th>
                <th>discount</th>
                <th>mrp</th>
                <!-- <th>url_key</th> -->
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>



@endsection

@section('script')

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'image', name: 'imge'},
            {data: 'name', name: 'name'},
            {data: 'status', name: 'status'},
            {data: 'discount', name: 'discount'},
            {data: 'special_price', name: 'special_price'},
            {data: 'mrp', name: 'mrp'},
            // {data: 'url_key', name: 'url_key'},
            {data: 'delete', name: 'delete'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>


@endsection