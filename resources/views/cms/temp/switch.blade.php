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
                            <h3 class="kt-portlet__head-title">
                                Basic Examples
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Default Switch</label>
                                <div class="col-3">
														<span class="kt-switch">
															<label>
																<input type="checkbox" checked="checked" name=""/>
																<span></span>
															</label>
														</span>
                                </div>
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
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Unchacked State</label>
                                <div class="col-3">
														<span class="kt-switch">
															<label>
																<input type="checkbox" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--icon">
															<label>
																<input type="checkbox" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Disabled State</label>
                                <div class="col-3">
														<span class="kt-switch">
															<label>
																<input type="checkbox" disabled name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--icon">
															<label>
																<input type="checkbox" disabled name="">
																<span></span>
															</label>
														</span>
                                </div>
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
                            <h3 class="kt-portlet__head-title">
                                Sizing
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section kt-section--last">
                            <div class="kt-section__title">Large size:</div>
                            <div class="kt-section__content">

                                <!--begin::Form-->
                                <form class="kt-form">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Default Switch</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg">
																	<label>
																		<input type="checkbox" checked="checked"
                                                                               name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg kt-switch--icon">
																	<label>
																		<input type="checkbox" checked="checked"
                                                                               name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Unchacked State</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg">
																	<label>
																		<input type="checkbox" name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg kt-switch--icon">
																	<label>
																		<input type="checkbox" name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Disabled State</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg">
																	<label>
																		<input type="checkbox" disabled name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--lg kt-switch--icon">
																	<label>
																		<input type="checkbox" disabled name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                </form>

                                <!--end::Form-->
                            </div>
                            <div class="kt-section__title">Small size:</div>
                            <div class="kt-section__content">

                                <!--begin::Form-->
                                <form class="kt-form">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Default Switch</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm">
																	<label>
																		<input type="checkbox" checked="checked"
                                                                               name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm kt-switch--icon">
																	<label>
																		<input type="checkbox" checked="checked"
                                                                               name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Unchacked State</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm">
																	<label>
																		<input type="checkbox" name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm kt-switch--icon">
																	<label>
																		<input type="checkbox" name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Disabled State</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm">
																	<label>
																		<input type="checkbox" disabled name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                        <label class="col-3 col-form-label">With Icon</label>
                                        <div class="col-3">
																<span class="kt-switch kt-switch--sm kt-switch--icon">
																	<label>
																		<input type="checkbox" disabled name="">
																		<span></span>
																	</label>
																</span>
                                        </div>
                                    </div>
                                </form>

                                <!--end::Form-->
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
            <div class="col-md-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Solid Style
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Success</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Primary</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--primary">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Info</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--info">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Danger</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--danger">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Brand</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--brand">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Dark</label>
                                <div class="col-3">
														<span class="kt-switch kt-switch--dark">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
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
                            <h3 class="kt-portlet__head-title">
                                Outline Style
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Form-->
                        <form class="kt-form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Success</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Warning</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--warning">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Info</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--info">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Danger</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--danger">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Primary</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--primary">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                                <label class="col-3 col-form-label">Brand</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--brand">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Dark</label>
                                <div class="col-3">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
                                </div>
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
