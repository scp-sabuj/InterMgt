@extends('admin.layouts.app')
@section('section')
<div class="card-box">
    <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Package</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="#" data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="userName">Package Title*</label>
                            <input type="text" name="nick" parsley-trigger="change" required
                            placeholder="Enter Package Title" class="form-control" id="userName">
                        </div>
                        <div class="form-group">
                            <label for="userName">Package Speed*</label>
                            <input type="number" name="nick" parsley-trigger="change" required
                            placeholder="Enter Package Speed" class="form-control" id="userName" min="0">
                        </div>
                        <div class="form-group">
                            <label for="userName">Package Price*</label>
                            <input type="number" name="nick" parsley-trigger="change" required
                            placeholder="Enter Package Price" class="form-control" id="userName" min="0">
                        </div>
                        <div class="form-group">
                            <label for="userName">Package Discription*</label>
                            <textarea name="" placeholder="Enter Package Discription" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="form-group text-right m-b-0">
        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Add Package</button>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card m-b-20 card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This card has even longer content
                    than the first to show that equal height action.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection