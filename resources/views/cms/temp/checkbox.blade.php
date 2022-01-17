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
                            <h3 class="kt-portlet__head-title">Basic Checkbox</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Default Checkboxes</label>
                                <div class="kt-checkbox-list">
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--disabled">
                                        <input type="checkbox" disabled> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <div class="kt-checkbox-inline">
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Option 1
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Option 3
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes Checked State</label>
                                <div class="kt-checkbox-inline">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" checked> Option 1
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Option 2
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" checked> Option 3
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
                                <label class="col-3 col-form-label">Checkboxes</label>
                                <div class="col-9">
                                    <div class="kt-checkbox-list">
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox" checked="checked"> Checked
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--disabled">
                                            <input type="checkbox" disabled> Disabled
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Checkboxes</label>
                                <div class="col-9">
                                    <div class="kt-checkbox-inline">
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 3
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Checkboxes Checked State</label>
                                <div class="col-9">
                                    <div class="kt-checkbox-inline">
                                        <label class="kt-checkbox" cheched>
                                            <input type="checkbox"> Option 1
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox" checked="checked"> Option 2
                                            <span></span>
                                        </label>
                                        <label class="kt-checkbox">
                                            <input type="checkbox"> Option 3
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
                                <label>Default Checkboxes</label>
                                <div class="kt-checkbox-list">
                                    <label class="kt-checkbox">
                                        <input type="checkbox"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--disabled">
                                        <input type="checkbox" disabled="disabled"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--success">
                                        <input type="checkbox"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--brand">
                                        <input type="checkbox"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Bold Checkboxes</label>
                                <div class="kt-checkbox-list">
                                    <label class="kt-checkbox kt-checkbox--bold">
                                        <input type="checkbox"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--bold">
                                        <input type="checkbox" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--disabled">
                                        <input type="checkbox" disabled="disabled"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success">
                                        <input type="checkbox"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
                                        <input type="checkbox"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Solid Checkboxes</label>
                                <div class="kt-checkbox-list">
                                    <label class="kt-checkbox kt-checkbox--solid">
                                        <input type="checkbox"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--solid">
                                        <input type="checkbox" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--disabled">
                                        <input type="checkbox" disabled="disabled"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">
                                        <input type="checkbox"> Success state
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
                                        <input type="checkbox"> Brand state
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Checked States</label>
                                <div class="kt-checkbox-list">
                                    <label class="kt-checkbox kt-checkbox--tick kt-checkbox--success">
                                        <input type="checkbox"> Default
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--tick kt-checkbox--success">
                                        <input type="checkbox" checked="checked"> Checked
                                        <span></span>
                                    </label>
                                    <label
                                        class="kt-checkbox kt-checkbox--tick kt-checkbox--disabled kt-checkbox--success">
                                        <input type="checkbox" disabled="disabled" checked="checked"> Disabled
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--tick kt-checkbox--brand">
                                        <input type="checkbox" checked> Brand state
                                        <span></span>
                                    </label>
                                    <label class="kt-checkbox kt-checkbox--tick kt-checkbox--danger">
                                        <input type="checkbox" checked> Danger state
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
