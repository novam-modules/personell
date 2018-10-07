@extends('personell::layouts.master')

@section('content')
    <h1 class="d-flex align-items-center justify-content-center">
        <a href="/admin/personell/employees">
            <i class="material-icons md-36" data-hide="#new-emp.collapse">undo</i>
        </a>
        <span class="w-100 text-center">{{ $employee->contact->name }}</span>
        <a href="#new-emp" data-toggle="modal">
            <i class="material-icons md-36">add_circle_outline</i>
        </a>
    </h1>

    <div id="employee-viewer">
            <div class="row">
                <div class="col-md-12"><a href="https://qa.holbrookasphalt.com/users" class="back-button"><i class="icon-chevron-left-circle"></i></a></div>
            </div>
            <div class="card-deck">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Employee Details</h4>
                        </div>
                        <div class="card-body">
                            <employee-profile
                                :employee='@json(Auth::user()->getAttributes())'
                                :empno="'{{ auth()->id() }}'">
                            </employee-profile>
                        </div>
                    </div>
                    <div class="card col-md-5">
                        <div class="card-header row">
                                <h4 class="card-title">Employee Contacts</h4>
                            </div>
                        <div class="card-body">
                            <employee-contacts
                                :employee='@json(Auth::user()->getAttributes())'
                                :empno="'{{ auth()->id() }}'">
                            </employee-contacts>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table width="100%" class="user-table">
                                <tbody>
                                    <tr>
                                        <td width="40%"><strong>Department:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Position:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><strong>HA-M Group:</strong></td>
                                        <td> Temp </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Region:</strong></td>
                                        <td> Utah </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Zamp Payroll ID:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><strong>BambooHR ID:</strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

            <hr>
    <nav class="nav">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">
                    Welcome
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="payroll"
                    aria-selected="false">
                    Payroll Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">
                    Payroll Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                    aria-selected="false">
                    Assignments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"
                    aria-selected="false">
                    Permissions
                </a>
            </li>
        </ul>
    </nav>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="px-3">
                        Time Card
                            <div class="pull-right">
                                <div class="form-inline">
                                    <div class="visible-xs">
                                        <div style="display: inline-block; margin-right: 24px;"><span>September 30 -
                                                October 6</span></div> <a href="#" onclick="applyDate('2018-09-23'); return false;"
                                            style="color: white; margin-right: 12px;">« Previous Week</a>
                                        ·
                                        <a href="#" onclick="applyDate('2018-10-07'); return false;" style="color: white; margin-left: 12px;">Next
                                            Week »</a>
                                    </div>
                                    <div class="hidden-xs"><span style="vertical-align: 2px;">September 30 - October 6</span>
                                        <input type="date" id="timeclock-datepicker" value="2018-09-30" class="form-control"
                                            style="margin-top: -7px; margin-right: -13px; margin-left: 15px;"></div>
                                </div>
                            </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-body"><svg width="100%" viewBox="0 0 720 216" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Timecard">
                                    <g id="Header-Dates" transform="translate(0.000000, 6.000000)" font-size="10"
                                        font-family="Lato-Bold, Lato" fill="#000000" font-weight="bold"><text x="135" y="10"
                                            text-anchor="middle">Sun, Sep 30th</text> <text x="225" y="10" text-anchor="middle">Mon,
                                            Oct 1st</text> <text x="315" y="10" text-anchor="middle">Tue, Oct 2nd</text>
                                        <text x="405" y="10" text-anchor="middle">Wed, Oct 3rd</text> <text x="495" y="10"
                                            text-anchor="middle">Thu, Oct 4th</text> <text x="585" y="10" text-anchor="middle">Fri,
                                            Oct 5th</text> <text x="675" y="10" text-anchor="middle">Sat, Oct 6th</text></g>
                                    <g id="Fixed-Times" transform="translate(0.000000, 24.000000)" font-size="10"
                                        font-family="Lato-Regular, Lato" fill="#000000" font-weight="normal"><text x="85" y="10"
                                            text-anchor="end">Midnight</text> <text x="85" y="24" text-anchor="end">2:00am</text>
                                        <text x="85" y="38" text-anchor="end">4:00am</text> <text x="85" y="52" text-anchor="end">6:00am</text>
                                        <text x="85" y="66" text-anchor="end">8:00am</text>
                                        <text x="85" y="80" text-anchor="end">10:00am</text> <text x="85" y="94"
                                            text-anchor="end">Noon</text> <text x="85" y="108" text-anchor="end">2:00pm</text>
                                        <text x="85" y="122" text-anchor="end">4:00pm</text> <text x="85" y="136"
                                            text-anchor="end">6:00pm</text> <text x="85" y="150" text-anchor="end">8:00pm</text>
                                        <text x="85" y="164" text-anchor="end">10:00pm</text></g>
                                    <g id="Footer-Hours" transform="translate(0.000000, 196.000000)" font-size="10"
                                        font-family="Lato-Bold, Lato" fill="#000000" font-weight="bold"><text x="85" y="10"
                                            text-anchor="end">0.00 hours</text> <text x="135" y="10" text-anchor="middle">--</text>
                                        <text x="225" y="10" text-anchor="middle">--</text> <text x="315" y="10"
                                            text-anchor="middle">--</text> <text x="405" y="10" text-anchor="middle">--</text>
                                        <text x="495" y="10" text-anchor="middle">--</text> <text x="585" y="10"
                                            text-anchor="middle">--</text> <text x="675" y="10" text-anchor="middle">--</text></g>
                                    <g id="Time-Clock" transform="translate(110.000000, 24.000000)" fill="#4CC63D"></g>
                                    <g id="Horizontal-Dividers" transform="translate(0.000000, 23.000000)" stroke-linecap="square">
                                        <path d="M0,1 L720,1" stroke="#D9D9D9"></path>
                                        <path d="M0,15 L720,15" stroke="#F2F2F2"></path>
                                        <path d="M0,29 L720,29" stroke="#F2F2F2"></path>
                                        <path d="M0,43 L720,43" stroke="#F2F2F2"></path>
                                        <path d="M0,57 L720,57" stroke="#F2F2F2"></path>
                                        <path d="M0,71 L720,71" stroke="#F2F2F2"></path>
                                        <path d="M0,85 L720,85" stroke="#F2F2F2"></path>
                                        <path d="M0,99 L720,99" stroke="#F2F2F2"></path>
                                        <path d="M0,113 L720,113" stroke="#F2F2F2"></path>
                                        <path d="M0,127 L720,127" stroke="#F2F2F2"></path>
                                        <path d="M0,141 L720,141" stroke="#F2F2F2"></path>
                                        <path d="M0,155 L720,155" stroke="#F2F2F2"></path>
                                        <path d="M0,169 L720,169" stroke="#F2F2F2"></path>
                                    </g>
                                    <g id="Vertical-Dividers" transform="translate(89.000000, 25.000000)" stroke="#F2F2F2"
                                        stroke-linecap="square">
                                        <path d="M1,0 L1,167"></path>
                                        <path d="M91,0 L91,167"></path>
                                        <path d="M181,0 L181,167"></path>
                                        <path d="M271,0 L271,167"></path>
                                        <path d="M361,0 L361,167"></path>
                                        <path d="M451,0 L451,167"></path>
                                        <path d="M541,0 L541,167"></path>
                                        <path d="M631,0 L631,167"></path>
                                    </g>
                                </g>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Time Spent Per Job</div>
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" width="100%" viewBox="0 0 720 20.5">
                                <g>
                                    <path stroke="#DDD" stroke-linecap="square" d="M187 0L187 20.5M263 0L263 20.5M339 0L339 20.5M415 0L415 20.5M491 0L491 20.5M567 0L567 20.5M643 0L643 20.5M719 0L719 20.5"></path>
                                    <path stroke="#DDD" stroke-linecap="square" d="M187 0.5L720 0.5M0 20L720 20"></path>
                                    <text fill="#ADADAD" font-family="Lato-Regular, Lato, Arial" font-size="8" text-anchor="middle"
                                        x="225" y="13">Sun</text> <text fill="#ADADAD" font-family="Lato-Regular, Lato, Arial"
                                        font-size="8" text-anchor="middle" x="301" y="13">Mon</text> <text fill="#ADADAD"
                                        font-family="Lato-Regular, Lato, Arial" font-size="8" text-anchor="middle" x="377"
                                        y="13">Tue</text> <text fill="#ADADAD" font-family="Lato-Regular, Lato, Arial"
                                        font-size="8" text-anchor="middle" x="453" y="13">Wed</text> <text fill="#ADADAD"
                                        font-family="Lato-Regular, Lato, Arial" font-size="8" text-anchor="middle" x="529"
                                        y="13">Thu</text> <text fill="#ADADAD" font-family="Lato-Regular, Lato, Arial"
                                        font-size="8" text-anchor="middle" x="605" y="13">Fri</text> <text fill="#ADADAD"
                                        font-family="Lato-Regular, Lato, Arial" font-size="8" text-anchor="middle" x="681"
                                        y="13">Sat</text>
                                </g>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="row">
                <div class="col-md-12">
                    <div data-v-de74cb4e="" class="card">
                        <div data-v-de74cb4e="" class="card-header">Time Card Entries</div>
                        <div data-v-de74cb4e="" class="card-body">
                            <table data-v-de74cb4e="" class="table">
                                <thead data-v-de74cb4e="">
                                    <tr data-v-de74cb4e="">
                                        <th data-v-de74cb4e="">Time In</th>
                                        <th data-v-de74cb4e=""></th>
                                        <th data-v-de74cb4e="">Time Out</th>
                                        <th data-v-de74cb4e=""></th>
                                        <th data-v-de74cb4e="">Job</th>
                                        <th data-v-de74cb4e="">Work Order</th>
                                        <th data-v-de74cb4e=""></th>
                                        <th data-v-de74cb4e="" style="text-align: center;">User Error?</th>
                                        <th data-v-de74cb4e=""></th>
                                    </tr>
                                </thead>
                                <tbody data-v-de74cb4e=""></tbody>
                                <tfoot data-v-de74cb4e="">
                                    <tr data-v-de74cb4e="">
                                        <td data-v-de74cb4e="" colspan="9" align="right"><a data-v-de74cb4e="" href="#">Add
                                                Entry <i data-v-de74cb4e="" class="icon-add-circle"></i></a></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Permissions</div>
                        <div class="card-body">
                            <form action="https://qa.holbrookasphalt.com/users/view/370" method="post"><input type="hidden"
                                    name="_token" value="NXPFKFVtvdvN4tPiBTVAAOxY7apZAnkOjwDNd0Pt"> <button type="submit"
                                    class="btn btn-primary pull-right" style="margin-left: 15px;">Save Changes</button>
                                <button type="reset" class="btn btn-secondary pull-right">Cancel</button> <br><br><br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: right;">Permission</th>
                                            <th style="text-align: center;">Read Own</th>
                                            <th style="text-align: center;">Read All</th>
                                            <th style="text-align: center;">Write</th>
                                            <th style="text-align: center;">Delete</th>
                                            <th style="text-align: right;">Permission</th>
                                            <th style="text-align: center;">Read Own</th>
                                            <th style="text-align: center;">Read All</th>
                                            <th style="text-align: center;">Write</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="right">Announcements</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_2[read_own]"
                                                    checked="checked" disabled="disabled"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_2[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_2[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_2[delete]"></td>
                                            <td align="right">Beta</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_32[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_32[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_32[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_32[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Billing</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_24[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_24[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_24[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_24[delete]"></td>
                                            <td align="right">Calendar</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_3[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_3[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_3[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_3[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Clockin Wo Required</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_26[read_own]"
                                                    checked="checked" disabled="disabled"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_26[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_26[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_26[delete]"></td>
                                            <td align="right">Customer Contacts</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_14[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_14[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_14[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_14[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Customers</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_13[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_13[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_13[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_13[delete]"></td>
                                            <td align="right">Dashboard</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_22[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_22[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_22[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_22[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Enter Materials</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_28[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_28[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_28[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_28[delete]"></td>
                                            <td align="right">Equipment</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_10[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_10[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_10[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_10[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Equipment Maintenance</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_11[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_11[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_11[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_11[delete]"></td>
                                            <td align="right">Fleet</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_8[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_8[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_8[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_8[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Fleet Maintenance</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_9[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_9[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_9[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_9[delete]"></td>
                                            <td align="right">Group Permissions</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_21[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_21[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_21[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_21[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Groups</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_20[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_20[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_20[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_20[delete]"></td>
                                            <td align="right">Materials</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_7[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_7[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_7[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_7[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Projects</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_4[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_4[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_4[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_4[delete]"></td>
                                            <td align="right">Reports</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_17[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_17[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_17[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_17[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Reports Foreman</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_31[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_31[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_31[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_31[delete]"></td>
                                            <td align="right">Schedules</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_25[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_25[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_25[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_25[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Services</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_12[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_12[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_12[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_12[delete]"></td>
                                            <td align="right">Shop Hours</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_29[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_29[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_29[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_29[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Sieve</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_27[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_27[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_27[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_27[delete]"></td>
                                            <td align="right">Subcontractor Services</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_16[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_16[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_16[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_16[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Subcontractors</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_15[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_15[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_15[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_15[delete]"></td>
                                            <td align="right">Tasks</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_6[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_6[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_6[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_6[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Teams</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_23[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_23[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_23[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_23[delete]"></td>
                                            <td align="right">Timecard</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_1[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_1[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_1[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_1[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Transport Forms</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_33[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_33[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_33[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_33[delete]"></td>
                                            <td align="right">Travel</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_30[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_30[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_30[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_30[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">User Permissions</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_19[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_19[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_19[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_19[delete]"></td>
                                            <td align="right">Users</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_18[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_18[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_18[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_18[delete]"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Workorders</td>
                                            <td align="center"><input type="checkbox" data-type="read_own" name="permission_5[read_own]"></td>
                                            <td align="center"><input type="checkbox" data-type="read_all" name="permission_5[read_all]"></td>
                                            <td align="center"><input type="checkbox" data-type="write" name="permission_5[write]"></td>
                                            <td align="center"><input type="checkbox" data-type="delete" name="permission_5[delete]"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: right;">Permission</th>
                                            <th style="text-align: center;">Read Own</th>
                                            <th style="text-align: center;">Read All</th>
                                            <th style="text-align: center;">Write</th>
                                            <th style="text-align: center;">Delete</th>
                                            <th style="text-align: right;">Permission</th>
                                            <th style="text-align: center;">Read Own</th>
                                            <th style="text-align: center;">Read All</th>
                                            <th style="text-align: center;">Write</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </tfoot>
                                </table> <button type="submit" class="btn btn-primary pull-right" style="margin-left: 15px;">Save
                                    Changes</button> <button type="reset" class="btn btn-secondary pull-right">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
@stop
