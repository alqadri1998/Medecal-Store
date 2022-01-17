@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Form Label Aligment
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <h3 class="kt-section__title">1. Customer Info:</h3>
                                <div class="kt-section__body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Full Name:</label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter full name">
                                            <span class="form-text text-muted">Please enter your full name</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email address:</label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter email">
                                            <span
                                                class="form-text text-muted">We'll never share your email with anyone else</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Holder:</label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Enter full name">
                                            <span class="form-text text-muted">Please enter your account holder</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Contact</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-chain"></i></span></div>
                                                <input type="text" class="form-control" placeholder="Phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Communication:</label>
                                        <div class="col-lg-6">
                                            <div class="kt-checkbox-inline">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> Email
                                                    <span></span>
                                                </label>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> SMS
                                                    <span></span>
                                                </label>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> Phone
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="exampleTextarea">Example
                                            textarea</label>
                                        <div class="col-lg-6">
                                            <div class="kt-checkbox-inline">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enable Helper Buttons</label>
                                        <div class="col-lg-6">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" value="05/20/2017"
                                                       id="kt_datepicker_3_modal"/>
                                                <div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar"></i>
																</span>
                                                </div>
                                            </div>
                                            <span
                                                class="form-text text-muted">Enable clear and today helper buttons</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Minimum Setup</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="kt_timepicker_1_modal" readonly
                                                   placeholder="Select time" type="text"/>
                                        </div>
                                    </div>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
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
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
                                            <span class="kt-switch kt-switch--icon">
                                                <label>
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Live Search</label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <select class="form-control kt-selectpicker"
                                                    data-live-search="true" title="Choose one of the following...">
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US" disabled>United States</option>
                                            </select>
                                            <span
                                                class="form-text text-muted">You can add a search input by passing <code>data-live-search="true"</code> attribute</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <button type="reset" class="btn btn-success">Submit</button>
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
        </div>
    </div>
    <!-- end:: Content -->
@endsection

@section('page-scripts')
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}"
            type="text/javascript"></script>
@endsection
