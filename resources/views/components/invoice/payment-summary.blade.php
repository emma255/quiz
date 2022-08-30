<div class="col-xs-4">
    <table id="summation">
        <tr>
            <td>Material Cost</td>
            <td>
                <b>{{ number_format($material, 2) }}</b>
            </td>
        </tr>
        <tr>
            <td>Labor Charge</td>
            <td>
                <b>{{ number_format($print->labor_charge, 2) }}</b>
            </td>
        </tr>
        <tr>
            <td>VAT Cost<small> ({{ $print->vat }}%)</small></td>
            <td>
                <b>{{ number_format($vat = $subtotal * ($print->vat/100), 2) }}</b>
            </td>
        </tr>
        @if ($type == 'invoice')
        <tr>
            <td>Withholding tax <small>({{ $print->withholding_tax }}%)</small></td>
            <td>
                <b>-{{ number_format($wtax = $subtotal * ($print->withholding_tax/100), 2) }}</b>
            </td>
        </tr>
        @endif
        <tr class="bg-gray">
            <td><b>TOTAL COST</b></td>
            <td>
                <b>{{ number_format($total = $subtotal + $vat, 2) }}
            </td>
        </tr>
        @if ($type == 'proforma')
        <tr>
            <td style="font-size: 9px">Advance Payment</td>
            <td>
                {{ $print->advance }} % <small>({{ number_format($total * ($print->advance / 100), 2) }})</small>
            </td>
        </tr>
        @endif
    </table>
</div>