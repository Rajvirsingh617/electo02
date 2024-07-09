<x-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                    <h1 class="m-0">Add New Product</h1>
                </div>
                <!-- Example link for adding a new category -->
                <!-- <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Product</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- Main form start -->
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input name="product_name" type="text" class="form-control" id="product_name"
                                        placeholder="Enter Product">
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select class="select2" style="width: 100%;">
                                                <option>ASC</option>
                                                <option>DESC</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="select2" style="width: 100%;">
                                                <option>ASC</option>
                                                <option>DESC</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mrp">MRP</label>
                                            <input name="mrp" type="text" class="form-control" id="mrp" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="sell_price">Sell Price</label>
                                            <input name="sell_price" type="text" class="form-control" id="sell_price"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="qty_available">Available Quantity</label>
                                            <input name="qty_available" type="text" class="form-control"
                                                id="qty_available" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="product_desc">Product Description</label>
                                            <textarea name="content" id="editor"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="prod_thumbnail_img">Product Thumbnail (212*200px)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" requrird name=prod_thumbnail_img
                                                class="custom-file-input" id="prod_thumbnail_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="prod_main_img">Product Main Image (720*660px)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" requrird name="prod_main_img" class="custom-file-input"
                                                id="prod_main_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- Main form end -->

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>