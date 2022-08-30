<div class="col-xs-2">
    <b>Bank Account Details</b><br><br>
    <b>NMB-BANK PLC (TZS)</b><br>
    Netphone Technology <br>
    Swift code: NMIBTZTZ <br>
    <b>4281 0004 541</b> <br>
</div>
@if (auth()->user()->email == 'aemmanuel199@gmail.com')
<div class="col-xs-2">
    <br><br>
    <b>M-PESA (Lipa namba)</b><br>
    Netphone Technology <br>
    Lipa namba: <b>5144116</b> <br>
</div>
<div class="col-xs-2">
</div>
@else
<div class="col-xs-2">
    <br><br>
    <b>EQUITY BANK (TZS)</b><br>
    Netphone Technology <br>
    Swift code: EQBLTZTZ <br>
    <b>3002 2116 6336 3</b> <br>
</div>
<div class="col-xs-2">
    <br><br>
    <b>M-PESA (Lipa namba)</b><br>
    Netphone Technology <br>
    Lipa namba: <b>5144116</b> <br>
</div>
@endif