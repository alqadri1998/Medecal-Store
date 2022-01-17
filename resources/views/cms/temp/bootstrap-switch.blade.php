@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Turn checkboxes and radio buttons into toggle switches.
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold"
                                                                   href="https://bttstrp.github.io/bootstrap-switch/examples.html"
                                                                   target="_blank">Demo Page</a> or <a
                            class="kt-link kt-font-bold" href="https://github.com/Bttstrp/bootstrap-switch" target="_blank">Github
                            Repo</a>.
                    </div>
                </div>
            </div>
        </div>

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Bootstrap Switch Examples
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="checked" id="kt_switch_1">
                            <input data-switch="true" type="checkbox" id="kt_switch_1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">State Colors</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-color="success"
                                   data-off-color="warning">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-color="brand">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-color="danger">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-color="info">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Custom Label</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-text="True"
                                   data-handle-width="50" data-off-text="False" data-on-color="success">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-text="1"
                                   data-handle-width="30" data-off-text="0" data-on-color="info">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-text="Enabled"
                                   data-handle-width="70" data-off-text="Disabled" data-on-color="brand">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Disabled State</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="checked" disabled>
                            <input data-switch="true" type="checkbox" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Sizing</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input data-switch="true" data-size="small" type="checkbox" checked="checked">
                            <input data-switch="true" type="checkbox" checked="checked">
                            <input data-switch="true" data-size="large" type="checkbox" checked="checked">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <a href="" class="btn btn-label-danger btn-bold" data-toggle="modal"
                               data-target="#kt_switch_modal">Launch switches on modal</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="reset" class="btn btn-brand">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

        <!--end::Portlet-->

        <!--begin::Modal-->
        <div class="modal fade" id="kt_switch_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Bootstrap Switch Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-remove"></span>
                        </button>
                    </div>
                    <form class="kt-form kt-form--fit kt-form--label-right">
                        <div class="modal-body">
                            <div class="form-group row kt-margin-t-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input data-switch="true" type="checkbox" checked="checked" id="kt_switch_1">
                                    <input data-switch="true" type="checkbox" id="kt_switch_1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">State Colors</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-color="success"
                                           data-off-color="warning">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-color="brand">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-color="danger">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-color="info">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Custom Label</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-text="True"
                                           data-off-text="False" data-on-color="success">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-text="1"
                                           data-off-text="0" data-on-color="info">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-text="Enabled"
                                           data-off-text="Disabled" data-on-color="brand">
                                </div>
                            </div>
                            <div class="form-group row kt-margin-b-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Disabled State</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input data-switch="true" type="checkbox" checked="checked" disabled>
                                    <input data-switch="true" type="checkbox" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-brand" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--end::Modal-->
    </div>
@endsection

@section('page-scripts')
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-switch.js')}}" type="text/javascript"></script>
@endsection
