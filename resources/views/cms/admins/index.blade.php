@extends('cms.parent')

@section('title','Admins')

{{--table-bordered--}}
@section('content')
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Metronic extends <code>Bootstrap Table</code> component with a variety of options to provide
                        uniquely looking Table component that matches the Metronic's design standards.
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold"
                                                                   href="https://getbootstrap.com/docs/4.3/content/tables/"
                                                                   target="_blank">Documentation</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Responsive tables
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="table-responsive">
                                    <table class="table  table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Table heading</th>
                                            <th>Table heading</th>
                                            <th>Table heading</th>
                                            <th>Table heading</th>
                                            <th>Table heading</th>
                                            <th>Table heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
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
