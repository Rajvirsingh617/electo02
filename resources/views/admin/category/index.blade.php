

<x-layout title="Category Information"><!-- I will pass data to the layout compoent using prop/ properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <h1 class="m-0">All Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6  text-right">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
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
                            <h3 class="card-title">Category List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#Id</th>
                                        <th style="text-align: center;">Category Name</th>
                                        <th style="text-align: center;">Description</th>
                                        <th style="text-align: center;">Picture</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td style="text-align: center;">{{$category->category_id}}</td>
                                            <td style="text-align: center;">{{$category->category_name }}</td>
                                            <td style="text-align: center;">{{$category->description}}</td>
                                            <td style="text-align: center;">
                                                @if(isset($category->picture) && !empty($category->picture))
                                                <img width="100" src="{{ asset('/').ltrim($category->picture,'/') }}" />
                                                @else
                                                    &#45;
                                                    &#x2D;          
                                                    -
                                                @endif
                                            </td>       
                                            <td style="text-align: center;">
                                                <a href="#" class="btn btn-outline-info rounded-circle">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <form method="POST" action="{{ route('category.destroy', ['category' => $category->category_id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger rounded-circle" onclick="return confirm('Do you really want to delete?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                    </td>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>    
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>