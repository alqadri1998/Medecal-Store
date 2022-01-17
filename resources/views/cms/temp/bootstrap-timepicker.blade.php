@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Easily select a time for a text input using your mouse or keyboards arrow keys.
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold"
                                                                   href="http://jdewit.github.io/bootstrap-timepicker/"
                                                                   target="_blank">Demo Page</a> or <a
                            class="kt-link kt-font-bold" href="https://github.com/jdewit/bootstrap-timepicker"
                            target="_blank">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Bootstrap Time Picker Examples
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time"
                                   type="text"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control" id="kt_timepicker_2" readonly placeholder="Select time"
                                       type="text"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-clock-o"></i>
														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="la la-clock-o"></i>
														</span>
                                </div>
                                <input class="form-control" id="kt_timepicker_3" readonly placeholder="Select time"
                                       type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="la la-exclamation-circle"></i>
														</span>
                                </div>
                                <input class="form-control" id="kt_timepicker_4" readonly value="10:30:20 AM"
                                       type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-label-success" data-toggle="modal"
                               data-target="#kt_timepicker_modal">Launch modal timepickers</a>
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
        <div class="modal fade" id="kt_timepicker_modal" tabindex="-1" role="dialog" aria-labelledby=""
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Bootstrap Time Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-remove"></span>
                        </button>
                    </div>
                    <form class="kt-form kt-form--fit kt-form--label-right">
                        <div class="modal-body">
                            <div class="form-group row kt-margin-t-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_timepicker_1_modal" readonly
                                           placeholder="Select time" type="text"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <input class="form-control" id="kt_timepicker_2_modal" readonly
                                               placeholder="Select time" type="text"/>
                                        <div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-clock-o"></i>
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-clock-o"></i>
																</span>
                                        </div>
                                        <input class="form-control" id="kt_timepicker_3_modal" readonly
                                               placeholder="Select time" type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row kt-margin-b-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-exclamation-circle"></i>
																</span>
                                        </div>
                                        <input class="form-control" id="kt_timepicker_4_modal" readonly
                                               value="10:30:20 AM" type="text"/>
                                    </div>
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

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Validation State Examples
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Valid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control is-valid" id="kt_timepicker_1_validate" readonly
                                       placeholder="Select time" type="text"/>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="la la-clock-o"></i></span>
                                </div>
                                <div class="valid-feedback">Success! You"ve done it.</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row has-danger">
                        <label class="col-form-label col-lg-3 col-sm-12">Error State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control is-invalid" id="kt_timepicker_2_validate" readonly
                                       placeholder="Select time" type="text"/>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="la la-clock-o"></i></span>
                                </div>
                                <div class="invalid-feedback">Sorry, that username"s taken. Try another?</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="reset" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

        <!--end::Portlet-->
    </div>
@endsection

@section('page-scripts')
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js')}}"
            type="text/javascript"></script>
@endsection
