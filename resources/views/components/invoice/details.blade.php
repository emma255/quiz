<div class="row" style="font-size: 9px">
    <div class="col-xs-4">
        <b>Customer</b><br>
        {{ $print->name }} <br>
        @isset($print->postal)
        BOX {{ $print->postal }}, {{ $print->location }} <br>
        @endisset
        {{ $print->contact }} <br>
        TIN: {{ formatTIN($print->tin) }}<br>
        VRN: {{ formatVRN($print->vrn) }}<br><br>
    </div>

    <div class="col-xs-4 text-center">
        <b>{{ $type??'' }} Number</b> <br>
        {{ $print->notes }} <br><br>
        <b>Date of Issue</b> <br>
        {{ $print->date }}
    </div>

    <div class="col-xs-3 text-center">
        <b>Exchange Rate</b> <br>
        {{ $print->exchange_rate??"0.00" }} <br><br>
        <b>Currency</b> <br>
        {{ $print->currency }}
    </div>
</div>

<div class="text-center" style="margin-bottom: 1px;">
    For: {{ ucwords($print->for??'') }}
</div>
