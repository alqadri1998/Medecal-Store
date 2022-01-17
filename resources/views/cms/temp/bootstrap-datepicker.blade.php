@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        A datepicker for twitter bootstrap (@twbs).
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold"
                                                                   href="https://uxsolutions.github.io/bootstrap-datepicker/"
                                                                   target="_blank">Demo Page</a> or <a
                            class="kt-link kt-font-bold" href="https://github.com/uxsolutions/bootstrap-datepicker"
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
                        Bootstrap Date Picker Examples
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="kt_datepicker_1" readonly
                                   placeholder="Select date"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly placeholder="Select date"
                                       id="kt_datepicker_2"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar"></i>
														</span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Enable clear and today helper buttons</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Orientation</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Top left" id="kt_datepicker_4_1"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-bullhorn"></i>
														</span>
                                </div>
                            </div>
                            <div class="kt-space-10"></div>
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Top right" id="kt_datepicker_4_2"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-clock-o"></i>
														</span>
                                </div>
                            </div>
                            <div class="kt-space-10"></div>
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Bottom left" id="kt_datepicker_4_3"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-check"></i>
														</span>
                                </div>
                            </div>
                            <div class="kt-space-10"></div>
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Bottom right" id="kt_datepicker_4_4"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-check-circle-o"></i>
														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Range Picker</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-daterange input-group" id="kt_datepicker_5">
                                <input type="text" class="form-control" name="start"/>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                                </div>
                                <input type="text" class="form-control" name="end"/>
                            </div>
                            <span class="form-text text-muted">Linked pickers for date range selection</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Inline Mode</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class id="kt_datepicker_6"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="#" class="btn btn-label-brand" data-toggle="modal" data-target="#kt_datepicker_modal">Launch
                                modal datepickers</a>
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
        <div class="modal fade" id="kt_datepicker_modal" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bootstrap Date Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-remove"></span>
                        </button>
                    </div>
                    <form class="kt-form kt-form--fit kt-form--label-right">
                        <div class="modal-body">
                            <div class="form-group row kt-margin-t-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="kt_datepicker_1_modal" readonly
                                           placeholder="Select date"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" readonly placeholder="Select date"
                                               id="kt_datepicker_2_modal"/>
                                        <div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar-check-o"></i>
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row kt-margin-b-20">
                                <label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" value="05/20/2017"
                                               id="kt_datepicker_3_modal"/>
                                        <div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar"></i>
																</span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Enable clear and today helper buttons</span>
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
                            <div class="input-group date">
                                <input type="text" class="form-control is-valid" readonly placeholder="Select date"
                                       id="kt_datepicker_1_validate"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
                                </div>
                                <div class="valid-feedback">
                                    Success! You"ve done it.
                                </div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Invalid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control is-invalid" readonly placeholder="Select date"
                                       id="kt_datepicker_2_validate"/>
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
                                </div>
                                <div class="invalid-feedback">
                                    Sorry, the date is taken. Try another date?
                                </div>
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
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
@endsection




