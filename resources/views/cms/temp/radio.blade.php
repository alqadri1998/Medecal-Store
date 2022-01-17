@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Basic Radio</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Default Radios</label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio">
                                        <input type="radio" name="radio1"> Option 1
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="radio1"> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--disabled">
                                        <input type="radio" disabled name="radio1"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" checked="checked" name="radio1"> Checked
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Radios</label>
                                <div class="kt-radio-inline">
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2"> Option 1
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2"> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2"> Option 3
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Inline Radios Selected State</label>
                                <div class="kt-radio-inline">
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2"> Option 1
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2" checked> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="radio2"> Option 3
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Horizontal Form</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Radios</label>
                                <div class="col-9">
                                    <div class="kt-radio-list">
                                        <label class="kt-radio">
                                            <input type="radio" name="radio3"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio3"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" checked="checked" name="radio3"> Checked
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--disabled">
                                            <input type="radio" disabled name="radio3"> Disabled
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Radios</label>
                                <div class="col-9">
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="radio4"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio4"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio4"> Option 3
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Radios Selected State</label>
                                <div class="col-9">
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="radio4"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" checked="checked" name="radio4"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio4"> Option 3
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
            <div class="col-md-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Color Options</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Default Radios</label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio">
                                        <input type="radio" name="radio5"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" checked="checked" name="radio5"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--disabled">
                                        <input type="radio" disabled="disabled" name="radio5"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--success" name="radio5">
                                        <input type="radio"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand" name="radio5">
                                        <input type="radio"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Bold Radios</label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio kt-radio--bold">
                                        <input type="radio" name="radio6"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold">
                                        <input type="radio" checked="checked" name="radio6"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--disabled">
                                        <input type="radio" disabled="disabled" name="radio6"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                        <input type="radio" name="radio6"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                        <input type="radio" name="radio6"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Solid Radios</label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" name="radio7"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" checked="checked" name="radio7"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid kt-radio--disabled">
                                        <input type="radio" disabled="disabled" name="radio7"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid kt-radio--success">
                                        <input type="radio" name="radio7"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid kt-radio--brand">
                                        <input type="radio" name="radio7"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Tick Radios</label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio kt-radio--tick kt-radio--success">
                                        <input type="radio" name="radio7"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--tick kt-radio--success">
                                        <input type="radio" name="radio7" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--tick kt-radio--success kt-radio--disabled">
                                        <input type="radio" disabled="disabled" name="radio7"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--tick kt-radio--brand">
                                        <input type="radio" name="radio7"> Brand state
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--tick kt-radio--danger">
                                        <input type="radio" name="radio7"> Danger state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')

@endsection
