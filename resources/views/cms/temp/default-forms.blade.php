@extends('cms.parent')

@section('title','Page Title')

@section('content')
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Basic Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <span
                                        class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                                <div class="form-group">
                                    <label>Subscription</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"
                                                                               id="basic-addon2">$</span></div>
                                        <input type="text" class="form-control" placeholder="99.9">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Communication:</label>
                                    <div class="kt-checkbox-list">
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
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="reset" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Section Separator
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div
                                    class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <span
                                        class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                                <div
                                    class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                <div class="form-group">
                                    <label>Subscription</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"
                                                                               id="basic-addon2">$</span></div>
                                        <input type="text" class="form-control" placeholder="99.9">
                                    </div>
                                </div>
                                <div
                                    class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                <div class="form-group">
                                    <label>Communication:</label>
                                    <div class="kt-checkbox-list">
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
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="reset" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
            <div class="col-lg-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Horizontal Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form">
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
                                </div>
                                <h3 class="kt-section__title">2. Customer Account:</h3>
                                <div class="kt-section__body">
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
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <h3 class="kt-section__title">2. Customer Account:</h3>
                                <div class="kt-section__body">
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

@endsection
