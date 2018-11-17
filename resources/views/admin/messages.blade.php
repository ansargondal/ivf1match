@extends('layouts.admin.app')

@section('title', 'Messages - Ivf1match')

@section('content')
    <main class="main message" id="messages">
        <div class="c-container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="messages"><i class="fa fa-files-o" aria-hidden="true"></i></li>
                                <li>Messages</li>
                                <li><span class="divider"></span></li>
                                <li class="total">200</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="read"><i class="fa fa-envelope-open" aria-hidden="true"></i></li>
                                <li>Read</li>
                                <li><span class="divider"></span></li>
                                <li class="total">200</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <ul class="messages-summary">
                                <li class="unread"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                                <li>Unread</li>
                                <li><span class="divider"></span></li>
                                <li class="total">200</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table  dt" data-toggle="table"
                           data-search="true" data-pagination="true" id="data-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col">Message</th>
                            <th scope="col" class="no-sort">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">01</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">02</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">03</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">04</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">05</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">06</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">07</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">08</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">09</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">10</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">11</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">12</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">13</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">14</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">15</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">16</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">17</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">18</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">19</td>
                            <td>Randy</td>
                            <td>randy@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>I need some...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">20</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td>oct_09,2018</td>
                            <td>Home delivery...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">21</td>
                            <td>Penny</td>
                            <td>penny@gmail.com</td>
                            <td>oct 09, 2018</td>
                            <td>Order is pendi...</td>
                            <p class="text-center full-message d-none">I need some infor about the task you are doing at
                                home.it might be really useful for my colleagues as well as for my boos. I 'll be really
                                thankful to you.</p>
                            <td class="actions text-center">
                                <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                                   data-placement="top"
                                   title="Reply">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                                   title="Read">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                   data-placement="top"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--!row-->
        </div>
    </main>
@endsection