@extends('admin.master')
@section('title','Create')

@section('content')
<h1>CREATE CATEGORY</h1>
<div style="width: 1000px">
        <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">     
                <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                            <div class="">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="text">Category Parent</label>
                                    <select  class="form-control" name="parent_id">
                                        <option value="0">---Root---</option>
                                            <?php
                                                recursiveCategory($categories, old('parent_id',0));
                                            ?>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="text">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                </div>
                                <!-- End of Form -->
                            <div class="">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="my-1 me-2" >Status</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option selected>Open this select menu</option>
                                        <option value="1" {{old('status')==1 ? 'selected' : ''}}>Show</option>
                                        <option value="2" {{old('status')==2 ? 'selected' : ''}}>Hidden</option>
                                    </select>
                                </div>
                                <!-- End of Form --> 
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>
                        
                        <button class="btn mx-1 me-2 btn-secondary" type="submit">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection