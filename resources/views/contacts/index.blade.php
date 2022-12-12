@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cửa hàng/Đại lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ action('App\Http\Controllers\ContactController@create') }}" class="btn btn-primary me-3">Thêm đại lý/cửa hàng</a>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    <h4>Danh sách</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (!$contacts->count())
                    <tr>
                        <td colspan="7">

                            <div class="text-center py-4">
                                <svg style="width:300px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 372.6"><g id="Layer_2" data-name="Layer 2"><g id="Character"><rect y="327.4" width="500" height="0.25" style="fill:#ebebeb"/><rect x="416.8" y="343.5" width="33.1" height="0.25" style="fill:#ebebeb"/><rect x="322.5" y="346.3" width="8.7" height="0.25" style="fill:#ebebeb"/><rect x="396.6" y="334.3" width="19.2" height="0.25" style="fill:#ebebeb"/><rect x="52.5" y="335.9" width="43.2" height="0.25" style="fill:#ebebeb"/><rect x="104.6" y="335.9" width="6.3" height="0.25" style="fill:#ebebeb"/><rect x="131.5" y="340.2" width="93.7" height="0.25" style="fill:#ebebeb"/><path d="M237,282.8H43.9a5.7,5.7,0,0,1-5.7-5.7V5.7A5.8,5.8,0,0,1,43.9,0H237a5.7,5.7,0,0,1,5.7,5.7V277.1A5.6,5.6,0,0,1,237,282.8ZM43.9.2a5.5,5.5,0,0,0-5.4,5.5V277.1a5.5,5.5,0,0,0,5.4,5.5H237a5.5,5.5,0,0,0,5.5-5.5V5.7A5.5,5.5,0,0,0,237,.2Z" style="fill:#ebebeb"/><path d="M453.3,282.8H260.2a5.7,5.7,0,0,1-5.7-5.7V5.7A5.8,5.8,0,0,1,260.2,0H453.3A5.7,5.7,0,0,1,459,5.7V277.1A5.6,5.6,0,0,1,453.3,282.8ZM260.2.2a5.5,5.5,0,0,0-5.4,5.5V277.1a5.5,5.5,0,0,0,5.4,5.5H453.3a5.5,5.5,0,0,0,5.5-5.5V5.7A5.5,5.5,0,0,0,453.3.2Z" style="fill:#ebebeb"/><rect x="92" y="230.9" width="126.4" height="8.92" style="fill:#ebebeb"/><rect x="163.5" y="230.9" width="55" height="8.92" style="fill:#e0e0e0"/><rect x="92" y="239.8" width="18.7" height="87.61" style="fill:#ebebeb"/><polygon points="110.7 248.9 92 242.5 92 239.8 110.7 239.8 110.7 248.9" style="fill:#e0e0e0"/><rect x="199.8" y="239.8" width="18.7" height="87.61" style="fill:#e0e0e0"/><rect x="163.5" y="239.8" width="18.7" height="87.61" style="fill:#ebebeb"/><polygon points="182.2 248.9 163.5 242.5 163.5 239.8 182.2 239.8 182.2 248.9" style="fill:#e0e0e0"/><rect x="128.3" y="239.8" width="18.7" height="87.61" style="fill:#e0e0e0"/><rect x="71" y="32.2" width="159.3" height="135.67" style="fill:#ebebeb"/><rect x="230.3" y="32.2" width="1.8" height="135.67" transform="translate(462.4 200.1) rotate(180)" style="fill:#e0e0e0"/><rect x="88.8" y="26.4" width="123.7" height="147.33" transform="translate(250.7 -50.6) rotate(90)" style="fill:#f5f5f5"/><path d="M148.9,143.1c9-30,11.5-74.2,30.6-68.1s-5.9,71.5-5.9,71.5Z" style="fill:#fff"/><path d="M164.4,144.6c-9.2-43.5-6.9-101.2-35.4-99.9s0,101.8,0,101.8Z" style="fill:#fff"/><path d="M184.5,139.7H122.2a4.9,4.9,0,0,0-5,4.6c-1.3,28.7,3.4,58,12.2,86.6h47.7c8.7-28.6,13.4-57.9,12.1-86.6A4.8,4.8,0,0,0,184.5,139.7Z" style="fill:#ebebeb"/><rect x="322.7" y="47.3" width="3.5" height="280.1" style="fill:#e0e0e0"/><rect x="405.2" y="47.3" width="3.5" height="280.1" style="fill:#e0e0e0"/><rect x="297.8" y="47.3" width="3.5" height="280.1" style="fill:#ebebeb"/><rect x="380.3" y="47.3" width="3.5" height="280.1" style="fill:#ebebeb"/><rect x="297.8" y="45.4" width="110.9" height="3.83" style="fill:#ebebeb"/><rect x="297.8" y="114" width="110.9" height="3.83" style="fill:#ebebeb"/><rect x="297.8" y="182.6" width="110.9" height="3.83" style="fill:#ebebeb"/><rect x="297.8" y="251.2" width="110.9" height="3.83" style="fill:#ebebeb"/><rect x="297.8" y="319.8" width="110.9" height="3.83" style="fill:#ebebeb"/><rect x="383.8" y="45.4" width="24.9" height="3.83" style="fill:#e0e0e0"/><rect x="383.8" y="114" width="24.9" height="3.83" style="fill:#e0e0e0"/><rect x="383.8" y="182.6" width="24.9" height="3.83" style="fill:#e0e0e0"/><rect x="383.8" y="251.2" width="24.9" height="3.83" style="fill:#e0e0e0"/><rect x="383.8" y="319.8" width="24.9" height="3.83" style="fill:#e0e0e0"/><path d="M342.5,68.8V63.4H329.2v5.4a6.4,6.4,0,0,1-6.4,6.3h0a6.4,6.4,0,0,0-6.4,6.4V114h38.9V81.5a6.4,6.4,0,0,0-6.4-6.4h0A6.4,6.4,0,0,1,342.5,68.8Z" style="fill:#f0f0f0"/><rect x="311.7" y="160.3" width="58.4" height="22.31" style="fill:#f0f0f0"/><rect x="370.1" y="160.3" width="10.2" height="22.31" transform="translate(750.4 342.9) rotate(180)" style="fill:#e6e6e6"/><rect x="370.1" y="170.2" width="10.2" height="2.46" transform="translate(750.4 342.9) rotate(180)" style="fill:#ebebeb"/><rect x="311.7" y="170.2" width="58.4" height="2.46" style="fill:#f5f5f5"/><rect x="308.8" y="280.4" width="45.6" height="39.44" style="fill:#f0f0f0"/><rect x="354.5" y="280.4" width="7.9" height="39.44" transform="translate(716.9 600.1) rotate(180)" style="fill:#e6e6e6"/><rect x="354.5" y="297.9" width="7.9" height="4.35" transform="translate(716.9 600.1) rotate(180)" style="fill:#ebebeb"/><rect x="308.8" y="297.9" width="45.6" height="4.35" style="fill:#f5f5f5"/><rect x="354.5" y="293.3" width="7.9" height="1.55" transform="translate(716.9 588.1) rotate(180)" style="fill:#ebebeb"/><rect x="308.8" y="293.3" width="45.6" height="1.55" style="fill:#f5f5f5"/><rect x="311.7" y="211.1" width="8.3" height="40.1" style="fill:#f0f0f0"/><rect x="311.7" y="225.4" width="8.3" height="11.52" style="fill:#fafafa"/><rect x="320" y="211.1" width="28.1" height="40.1" transform="translate(668 462.3) rotate(180)" style="fill:#e6e6e6"/><rect x="323.4" y="205.9" width="9.3" height="45.28" style="fill:#ebebeb"/><rect x="323.4" y="220.3" width="9.3" height="6.97" style="fill:#fafafa"/><rect x="323.4" y="231.9" width="9.3" height="6.97" style="fill:#fafafa"/><rect x="332.7" y="205.9" width="31.7" height="45.28" transform="translate(697.2 457.1) rotate(180)" style="fill:#e0e0e0"/><rect x="338.1" y="211.1" width="5" height="40.1" style="fill:#f0f0f0"/><rect x="338.9" y="216.2" width="3.3" height="29.94" style="fill:#fafafa"/><rect x="343.1" y="211.1" width="17.1" height="40.1" transform="translate(703.3 462.3) rotate(180)" style="fill:#e6e6e6"/><rect x="350.9" y="209" width="5.7" height="42.21" style="fill:#ebebeb"/><rect x="350.9" y="222.4" width="5.7" height="6.5" style="fill:#fafafa"/><rect x="350.9" y="233.3" width="5.7" height="6.5" style="fill:#fafafa"/><rect x="356.5" y="209" width="19.3" height="42.21" transform="translate(732.4 460.2) rotate(180)" style="fill:#e0e0e0"/><circle cx="345.2" cy="147.9" r="12.4" transform="translate(-3.5 287.4) rotate(-45)" style="fill:#f5f5f5"/><circle cx="358.9" cy="151.7" r="8.6" transform="translate(-19.7 59.5) rotate(-9.2)" style="fill:#ebebeb"/><ellipse id="_Path_" data-name="&lt;Path&gt;" cx="250" cy="361.3" rx="193.9" ry="11.3" style="fill:#f5f5f5"/><path d="M126.1,283.7H254.6a0,0,0,0,1,0,0v66.3a6.5,6.5,0,0,1-6.5,6.5H132.6a6.5,6.5,0,0,1-6.5-6.5V283.7A0,0,0,0,1,126.1,283.7Z" style="fill:#407bff"/><path d="M126.1,283.7H217l-11.2-14.3c-1.2-1.5-4.3-2.8-6.8-2.8H117.3c-2.5,0-3.6,1.3-2.4,2.8Z" style="fill:#407bff"/><path d="M126.1,283.7H217l-11.2-14.3c-1.2-1.5-4.3-2.8-6.8-2.8H117.3c-2.5,0-3.6,1.3-2.4,2.8Z" style="opacity:0.2"/><path d="M254.6,283.7H163.7l11.2-9.3c1.2-1,4.2-1.8,6.8-1.8h81.7c2.5,0,3.6.8,2.3,1.8Z" style="fill:#407bff"/><path d="M163.7,283.7h90.9a0,0,0,0,1,0,0v66.3a6.5,6.5,0,0,1-6.5,6.5H170.1a6.5,6.5,0,0,1-6.5-6.5V283.7A0,0,0,0,1,163.7,283.7Z" style="fill:#fff;opacity:0.2"/><polygon points="137.4 283.7 137.4 329.2 140.5 326.7 142.7 329.2 144.7 326.5 146.6 329.2 149.4 327.1 152.4 329.2 152.4 283.7 137.4 283.7" style="fill:#fff;opacity:0.5"/><line x1="157.7" y1="184.5" x2="141.6" y2="171" style="fill:none;stroke:#407bff;stroke-miterlimit:10"/><line x1="166.1" y1="191.6" x2="161.2" y2="187.4" style="fill:none;stroke:#407bff;stroke-miterlimit:10"/><path d="M214.5,219.9l53.3-66.6-71-59.5-47,53.9-7,13.5a3.9,3.9,0,0,0,.5,5.5l64,53.7A5.3,5.3,0,0,0,214.5,219.9Z" style="fill:#407bff"/><polygon points="177.9 170.8 170.3 183.2 173.3 183.8 174.4 186.7 176.5 186.8 177.4 189.3 179.9 190 181.8 193.1 189.5 180.7 177.9 170.8" style="fill:#fff;opacity:0.5"/><polygon points="265.4 151.4 217.7 204.7 149.8 147.7 196.8 93.8 265.4 151.4" style="opacity:0.1"/><polygon points="265.4 151.4 217.7 204.7 237.4 206.2 284.5 152.2 265.4 151.4" style="fill:#407bff"/><polygon points="265.4 151.4 217.7 204.7 237.4 206.2 284.5 152.2 265.4 151.4" style="opacity:0.30000000000000004"/><polygon points="177.8 93 130 146.3 149.8 147.7 196.8 93.8 177.8 93" style="fill:#407bff"/><polygon points="177.8 93 130 146.3 149.8 147.7 196.8 93.8 177.8 93" style="opacity:0.4"/><polygon points="250.7 167.8 265.4 151.4 196.8 93.8 188 114.9 250.7 167.8" style="opacity:0.1"/><polygon points="149.8 147.7 196.8 93.8 188 114.9 154.9 152 149.8 147.7" style="opacity:0.2"/><path d="M282,51.1c.2.6,0,1.2-.4,1.3s-.9-.3-1.1-.9,0-1.3.4-1.4S281.8,50.4,282,51.1Z" style="fill:#263238"/><path d="M282.1,52.3a23.6,23.6,0,0,1-1.5,6.4,3.7,3.7,0,0,0,3.3-.3Z" style="fill:#ed847e"/><path d="M283.3,46.8c.1-.1.2-.1.2-.2s0-.5-.2-.5a3.6,3.6,0,0,0-3.6.4c-.2.1-.2.3-.1.5s.4.2.6.1h0a3.1,3.1,0,0,1,2.8-.3Z" style="fill:#263238"/><path d="M304.2,55.3c.5,5.3,1.8,15.1,4.9,17.3,0,0-.7,6.3-11.9,8s-6.8-5.3-6.8-5.3c6.5-2.6,5.5-7.5,3.7-12l4.7-5.5C300.6,55.7,304,52.6,304.2,55.3Z" style="fill:#ffc3bd"/><path d="M313.2,75.2c1-1-1.1-4.6-2.3-5.1-3.2-1.4-16.4,0-21.3,4.2a5.6,5.6,0,0,0-.4,4.7Z" style="fill:#fff"/><path d="M355.1,342.5a3,3,0,0,1-2.1,0,.8.8,0,0,1-.3-.9,1.5,1.5,0,0,1,.5-.6c1.1-.6,3.7.2,3.9.2s.1.1.1.2,0,.2-.1.2Zm-1.5-1.3h-.2l-.3.4c0,.4.1.5.1.5s2.2-.2,3.3-.7A7.2,7.2,0,0,0,353.6,341.2Z" style="fill:#407bff"/><path d="M357.1,341.6H357c-1-.2-3.1-1.4-3.2-2.4s0-.5.4-.7a1.4,1.4,0,0,1,.9,0c1.2.5,2,2.8,2.1,2.9v.2Zm-2.6-2.7h-.1c-.3.1-.2.2-.2.3s1.4,1.5,2.5,1.9-1-1.9-1.8-2.2Z" style="fill:#407bff"/><path d="M296.5,353.2a4,4,0,0,1-2.5-.6.9.9,0,0,1,0-.9,1.8,1.8,0,0,1,.7-.5c1.4-.3,4.3,1.3,4.4,1.4s.1.1.1.2l-.2.2Zm-1.3-1.6h-.4l-.4.3c-.1.2-.1.4,0,.4s2.4.6,4,.4A9.4,9.4,0,0,0,295.2,351.6Z" style="fill:#407bff"/><path d="M299,353a.1.1,0,0,1-.1-.1c-1-.4-3-2.2-2.8-3.2s.2-.4.7-.5a2,2,0,0,1,1.1.3c1.1.9,1.3,3.2,1.3,3.2s0,.2-.1.2A.1.1,0,0,1,299,353Zm-2-3.4h-.2c-.3,0-.3.2-.3.2s1.2,2,2.3,2.6-.4-2-1.1-2.6Z" style="fill:#407bff"/><polygon points="308.2 352.8 299.8 352.8 299 333.4 307.3 333.4 308.2 352.8" style="fill:#ffc3bd"/><polygon points="366.8 339.6 359.1 342.2 351.2 324 358.9 321.4 366.8 339.6" style="fill:#ffc3bd"/><path d="M357.3,340.3l9-2.7a.6.6,0,0,1,.8.3l3.8,6.6a1.2,1.2,0,0,1-.8,1.8c-3.1.9-4.7,1.2-8.6,2.4-2.4.7-8.6,3-12,3.7s-4.6-2.6-3.2-3.2c6-2.6,8.4-5.6,9.9-8A2,2,0,0,1,357.3,340.3Z" style="fill:#263238"/><path d="M299.9,351.8H309a.7.7,0,0,1,.7.6l1.7,7.4a1.3,1.3,0,0,1-1.2,1.5c-3.3-.1-8.1-.3-12.2-.3s-6.9.3-12.5.3c-3.5,0-4.4-3.5-3-3.8,6.5-1.4,9.7-1.6,15.4-5A3.7,3.7,0,0,1,299.9,351.8Z" style="fill:#263238"/><path d="M324.1,77.9a85.6,85.6,0,0,1,6.7,6.8A88.3,88.3,0,0,1,337,92a62.1,62.1,0,0,1,5.6,8.2,39.1,39.1,0,0,1,2.3,5c.2.4.3.9.5,1.4s.3,1,.4,1.6l.2.8v.9a11.2,11.2,0,0,1,0,2.6,11.9,11.9,0,0,1-1.7,4.4,35.3,35.3,0,0,1-2.3,2.7,30.7,30.7,0,0,1-4.6,3.3,72.6,72.6,0,0,1-9,4.2,114,114,0,0,1-18.2,5l-1.7-6.1c5.4-2.3,10.9-4.8,16-7.6a53.4,53.4,0,0,0,7.1-4.3,15.6,15.6,0,0,0,2.6-2.3l.6-.9c.1-.2,0-.1-.1.2s0,.2-.2-.2a1.4,1.4,0,0,0-.2-.6l-.3-.7a22.3,22.3,0,0,0-1.9-3.2,57.4,57.4,0,0,0-5-6.6c-1.8-2.2-3.7-4.3-5.7-6.5l-6.1-6.2Z" style="fill:#ffc3bd"/><path d="M310.9,125.1l-8,2.4,5.1,8.3s4.7-1.9,5.7-5.9Z" style="fill:#ffc3bd"/><polygon points="299.8 130.4 302.9 137.3 308 135.8 302.9 127.5 299.8 130.4" style="fill:#ffc3bd"/><path d="M305.7,80.2c-.8,7.9,16.2,20.3,16.2,20.3l16.3-11.1a34.8,34.8,0,0,0-12.1-12.8C316.8,70.6,306.6,70.2,305.7,80.2Z" style="fill:#407bff"/><g style="opacity:0.30000000000000004"><path d="M305.7,80.2c-.8,7.9,16.2,20.3,16.2,20.3l16.3-11.1a34.8,34.8,0,0,0-12.1-12.8C316.8,70.6,306.6,70.2,305.7,80.2Z" style="fill:#fff"/></g><path d="M278,79.5s-7.3,11.2,10.1,71.4l44.1-6.5c-.6-6.1-8-32.7-8.3-61.8A10.4,10.4,0,0,0,313,72.3l-3.9.3a168,168,0,0,0-18.7,2.7A85.8,85.8,0,0,0,278,79.5Z" style="fill:#407bff"/><g style="opacity:0.30000000000000004"><path d="M278,79.5s-7.3,11.2,10.1,71.4l44.1-6.5c-.6-6.1-8-32.7-8.3-61.8A10.4,10.4,0,0,0,313,72.3l-3.9.3a168,168,0,0,0-18.7,2.7A85.8,85.8,0,0,0,278,79.5Z" style="fill:#fff"/></g><path d="M276.9,98.8h.2l10.4.9c1.5,6.7-4.3,15.8-7.3,20.1A184.1,184.1,0,0,1,276.9,98.8Z" style="opacity:0.2"/><polygon points="299 333.5 299.4 343.4 307.8 343.4 307.4 333.5 299 333.5" style="opacity:0.2"/><polygon points="358.9 321.4 351.2 324 355.3 333.4 363 330.8 358.9 321.4" style="opacity:0.2"/><path d="M303.1,43.4c1.9,8,3.4,12.7.6,17.9-4.3,7.9-15.1,7.1-19.3-.2s-6.2-18.7.6-24.2A11.3,11.3,0,0,1,303.1,43.4Z" style="fill:#ffc3bd"/><path d="M286.9,51.3l-3,1.9.3-10.5a9,9,0,0,1-5.6-1.7c1.1-1,18.4-7.1,23.8-6,.5-.2,1.2-1.3,1.2-1.3s.2,1.3-.7,1.8a3,3,0,0,1,2.8,1.2,3.8,3.8,0,0,0-2.3.1s6,.9,3.9,9.2-1.6,14.5-1.6,14.5-4.5,3.4-8.4,2.8C293.2,58.7,287.2,53.3,286.9,51.3Z" style="fill:#263238"/><path d="M281.1,40.2c-4.9.1-6.7-2.4-7.9-4.4,3.5-.3,10.8-2.6,16.2-3s11.3.7,9.5,3S281.1,40.2,281.1,40.2Z" style="fill:#263238"/><path d="M282.1,38c-3.9-.5-7.9-4.3-4.9-7.9,1.1,2.7,8.6,2.4,13.9,1.2,7-1.4,11.9.9,9.4,5.7C299.2,39.6,282.1,38,282.1,38Z" style="fill:#263238"/><path d="M291.3,48.9a9.4,9.4,0,0,1-.3,6c-1,2.5-3.2,2-4.4-.2s-1.7-5.6,0-7.4S290.5,46.5,291.3,48.9Z" style="fill:#ffc3bd"/><path d="M303.7,148.6s7.2,60.9,12.4,84.8c5.7,26.2,33.7,97.5,33.7,97.5l14.1-4.8s-18-53.7-22.8-90.3c-3.7-28.1-8.9-91.4-8.9-91.4Z" style="fill:#263238"/><path d="M346.2,326.4l2.9,6,16.4-5.3-1.9-4.9Z" style="fill:#407bff"/><path d="M307.7,179.9c2.2,16.9,5.1,36.9,7.6,49.8C318.9,210,319.9,185.3,307.7,179.9Z" style="opacity:0.30000000000000004"/><path d="M288.1,150.9s-6,57.3-5.1,82.7,13.3,107.9,13.3,107.9h14.2s-2.6-79.9-2-105.9c.7-28.3,11.3-89.4,11.3-89.4Z" style="fill:#263238"/><path d="M293.6,335.9c-.1,0,.8,5.8.8,5.8h17.2l.5-5.2Z" style="fill:#407bff"/><path d="M285.3,93.6c-1.5,2.4-3.1,4.7-4.8,7s-3.3,4.5-5.1,6.7a123.4,123.4,0,0,1-11.5,12.6c-1.2,1-2.2,2-3.4,2.9l-.9.7-.4.4-.6.4a14.3,14.3,0,0,1-3.2,1.7,20.2,20.2,0,0,1-5.5.9,25,25,0,0,1-4.8-.2,62.4,62.4,0,0,1-16.8-4.7l1.8-6.1a101.3,101.3,0,0,0,15.4.8l3.4-.4a8.3,8.3,0,0,0,2.4-.8l.4-.2c-.1,0,.1-.2.2-.3l.3-.3.7-.6c.9-.8,1.7-1.8,2.6-2.6a71.9,71.9,0,0,0,5.1-5.9c1.7-1.9,3.3-4,4.9-6.1l4.7-6.4,4.5-6.4Z" style="fill:#ffc3bd"/><path d="M291.1,90.9c3.4,11-16.1,23.2-16.1,23.2L262.3,98a70,70,0,0,1,10.5-14.7C281.4,73.9,288.6,82.5,291.1,90.9Z" style="fill:#407bff"/><g style="opacity:0.30000000000000004"><path d="M291.1,90.9c3.4,11-16.1,23.2-16.1,23.2L262.3,98a70,70,0,0,1,10.5-14.7C281.4,73.9,288.6,82.5,291.1,90.9Z" style="fill:#fff"/></g><path d="M233,116.4l-10.3-1.9,1.1,8.9s5.3,3,9.2-1.7Z" style="fill:#ffc3bd"/><polygon points="218.8 116.5 221 122.9 223.8 123.4 222.7 114.5 218.8 116.5" style="fill:#ffc3bd"/></g></g></svg>
                                <p class="fs-6 text-muted mt-3">There are no contacts!</p>
                            </div>

                        </td>
                    </tr>
                @endif
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>
                            @if ($contact->getImages()->count())
                                <img src="{{ $contact->getImages()->first()->getUrl() }}" width="50px" />
                            @endif
                        </td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            <div>{{ $contact->phone }}</div>
                            <div>{{ $contact->phone_2 }}</div>
                        </td>
                        <td>{{ $contact->contact_name }}</td>
                        <td class="text-end">
                            <div class="btn-group me-2">
                                <a href="{{ action('App\Http\Controllers\ContactController@edit', [
                                    'contact' => $contact,
                                ]) }}" type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                <a href="{{ action('App\Http\Controllers\ContactController@destroy', [
                                    'contact' => $contact,
                                ]) }}"
                                    link-method="DELETE"
                                    type="button" class="btn btn-sm btn-outline-secondary">
                                        Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $contacts->links() }}
    </div>

    <script>
        class CLink {
            constructor(link)
            {
                this.link = link;
                this.url = this.link.attr('href');
                this.method = (this.link.attr('link-method') ?? 'GET').toUpperCase();
            }

            init() {
                this.applyEvents();
            }

            applyEvents() {
                var _this = this;

                if (this.method !== 'GET') {
                    this.link.on('click', function(e) {
                        e.preventDefault();

                        var form = jQuery('<form>', {
                            'action': _this.url,
                            'method': 'POST'
                        });
                        form.append(jQuery('<input>', {
                            'name': '_token',
                            'value': '{{ csrf_token() }}',
                            'type': 'hidden'
                        }));
                        form.append(jQuery('<input>', {
                            'name': '_method',
                            'value': _this.method,
                            'type': 'hidden'
                        }));
                        $(document.body).append(form);
                        form.submit();
                    });
                        
                }
            }
        }

        $(function() {
            $('[link-method]').each(function() {
                var link = new CLink($(this));
                link.init();
            });
        });
    </script>
@endsection