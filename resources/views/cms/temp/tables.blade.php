@extends('cms.parent')

@section('content')
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Metronic extends <code>Bootstrap Table</code> component with a variety of options to provide uniquely looking Table component that matches the Metronic's design standards.
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold" href="https://getbootstrap.com/docs/4.3/content/tables/" target="_blank">Documentation</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Basic Tables
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
												<span class="kt-section__info">
													Using the most basic table markup, here’s how tables look in Metronic:
												</span>
                            <div class="kt-section__content">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="kt-section">
												<span class="kt-section__info">
													You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.
												</span>
                            <div class="kt-section__content">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Table Head Options
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
												<span class="kt-section__info">
													Similar to default and inverse tables, use one of two modifier classes to make &lt;thead&gt;s appear light or dark gray.
												</span>
                            <div class="kt-section__content">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Small Table
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
												<span class="kt-section__info">
													Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
												</span>
                            <div class="kt-section__content">
                                <table class="table table-sm table-head-bg-brand">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Striped Rows
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
            <div class="col-xl-6">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Bordered Table
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Hoverable Table
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>
                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Table Row States
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-active">
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="table-brand">
                                        <th scope="row">4</th>
                                        <td>Nick</td>
                                        <td>looper</td>
                                        <td>@king</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">5</th>
                                        <td>Joan</td>
                                        <td>thestar</td>
                                        <td>@joan</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">6</th>
                                        <td>Sean</td>
                                        <td>coder</td>
                                        <td>@coder</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Section-->
                    </div>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

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
                            <div class="kt-section__info">
                                Create responsive tables by wrapping any table with <code>.table-responsive</code> <code>DIV</code> to make them scroll horizontally on small devices (under 768px)
                            </div>
                            <div class="kt-section__content">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
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
                                            <th scope="row">1</th>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                        </tr>
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
