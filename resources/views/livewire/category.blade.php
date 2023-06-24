<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                
                <span href="" class="btn btn-sm btn-primary">Add</span>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Kategori</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>
                               <div class="btn-group"></div>
                               <span href="" class="btn btn-sm btn-primary">Edit</span>
                               <span href="" class="btn btn-sm btn-danger">Delete</span>   
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
