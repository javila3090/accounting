@extends('layouts.base')

@section('title', 'IAccounting')
@section('content')

<!-- [ Layout content ] Start -->


<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">{{ __('messages.new_user') }}</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts and elements</li>
        </ol>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">Horizontal</h6>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 text-sm-right">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 text-sm-right">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 text-sm-right">Textarea</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" placeholder="Textarea"></textarea>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Radios</label>
                        <div class="col-sm-10">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio">
                                    <input name="custom-radio-3" type="radio" class="custom-control-input" checked>
                                    <span class="custom-control-label">Option one is this and that—be sure to include why it's great</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input name="custom-radio-3" type="radio" class="custom-control-input">
                                    <span class="custom-control-label">Option two can be something else and selecting it will deselect option one</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input name="custom-radio-3" type="radio" class="custom-control-input" disabled>
                                    <span class="custom-control-label">Option three is disabled</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Checkbox</label>
                    <div class="col-sm-10">
                        <label class="custom-control custom-checkbox m-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">Check me out</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- [ content ] End -->

@endsection