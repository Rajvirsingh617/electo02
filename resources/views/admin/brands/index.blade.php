<x-layout>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                    <h1 class="m-0">All Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{route('brands.create')}}" class="btn btn-primary">Add New Brand</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th style="text-align: center;">id</th>
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;">Logo(s)</th>
                            <th style="text-align: center;">Options</th>
                            </tr>
                            

                          </thead>
                          <tbody>
                             @foreach($brands as $brand)
                                <tr>
                                <td style="text-align: center;">{{$brand->id}}</td>
                                    <td style="text-align: center;">{{$brand->brand_name}}</td>
                                    <td style="text-align: center;">
                                        <img src="{{$brand->brand_logo}}" alt="Brand Logo" />
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="/admin/brands/{{$brand->id}}/edit" class="btn btn-outline-info rounded-circle btn-sm a_viewbrand" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-eye"></i>   
                                        </a>
                                        <a href="/admin/brands/{{$brand->id}}/edit" class="btn btn-outline-info rounded-circle btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>   
                                        </a>
                                        <form method="POST" action="{{ route('brands.destroy', ['brand' => $brand->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger rounded-circle btn-sm" onclick="return confirm('Do you really want to delete?')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                             @endforeach 
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-layout>