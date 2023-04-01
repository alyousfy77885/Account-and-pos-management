<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $invoice->name }}</title>
        <style>
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

direction:rtl;

            }

            h1,h2,h3,h4,h5,h6,p,span,div { 
                font-family: DejaVu Sans; 
                font-size:10px;
                font-weight: normal;
            }

            th,td { 
                font-family: DejaVu Sans; 
                font-size:10px;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }

            .panel-default {
                border-color: #ddd;
            }

            .panel-body {
                padding: 15px;
            }

            table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 0px;
                border-spacing: 0;
                border-collapse: collapse;
                background-color: transparent;
direction:rtl;
            }

            thead  {
                text-align:right;
                display: table-header-group;
                vertical-align: middle;
            }

            th, td  {
                border: 1px solid #ddd;
                padding: 6px;
            }

            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
        </style>
        @if($invoice->duplicate_header)
            <style>
                @page { margin-top: 140px;}
                header {
                    top: -100px;
                    position: fixed;
                }
            </style>
        @endif
    </head>
    <body dir="rtl">
        <header>
            <div style="position:absolute; right:0pt; width:250pt;float:right">
            
	<!-- Logo -->
	@if(!empty($receipt_details->logo))
		<img src="{{$receipt_details->logo}}" class="img img-responsive center-block">
	@endif
</div>
            <div style="margin-right:300pt;">
                <b>التاريخ: </b> uhej<br />
                @if ($invoice->due_date)
                    <b>Due date: </b>{{ 82929<br />
                @endif
                @if ($invoice->number)
                    <b>رقم#: </b> 22
                @endif
                <br />
            </div>
            <br />
            <h2>{{ 33 }} {{ 11 ? '#' . 33: '' }}</h2>
        </header>
        <main>
            <div style="clear:both; position:relative;">
                <div style="position:absolute;right:0pt; width:250pt;">
                    <h4>Business Details:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body" dir="rtl">
                     @if(!empty($receipt_details->display_name))
				{{$receipt_details->display_name}}
			@endif


	@if(!empty($receipt_details->address))
				<small class="text-center">
				{!! $receipt_details->address !!}
				</small>
		@endif
		@if(!empty($receipt_details->contact))
			<br/>{{ $receipt_details->contact }}
		@endif	
		@if(!empty($receipt_details->contact) && !empty($receipt_details->website))
			, 
		@endif
		@if(!empty($receipt_details->website))
			{{ $receipt_details->website }}
		@endif
		@if(!empty($receipt_details->location_custom_fields))
			<br>{{ $receipt_details->location_custom_fields }}
		@endif
		</p>
		<p>
		@if(!empty($receipt_details->sub_heading_line1))
			{{ $receipt_details->sub_heading_line1 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line2))
			<br>{{ $receipt_details->sub_heading_line2 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line3))
			<br>{{ $receipt_details->sub_heading_line3 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line4))
			<br>{{ $receipt_details->sub_heading_line4 }}
		@endif		
		@if(!empty($receipt_details->sub_heading_line5))
			<br>{{ $receipt_details->sub_heading_line5 }}
		@endif
	
            
	                        </div>
                    </div>
                </div>
                <div style="margin-right: 300pt;">
                    <h4>Customer Details:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                          	<!-- customer info -->
				@if(!empty($receipt_details->customer_name))
					<br/>
					<b>{{ $receipt_details->customer_label }}</b> {{ $receipt_details->customer_name }} <br>
				@endif
				@if(!empty($receipt_details->customer_info))
					{!! $receipt_details->customer_info !!}
				@endif
				@if(!empty($receipt_details->client_id_label))
					<br/>
					<b>{{ $receipt_details->client_id_label }}</b> {{ $receipt_details->client_id }}
				@endif
				@if(!empty($receipt_details->customer_tax_label))
					<br/>
					<b>{{ $receipt_details->customer_tax_label }}</b> {{ $receipt_details->customer_tax_number }}
				@endif
				@if(!empty($receipt_details->customer_custom_fields))
					<br/>{!! $receipt_details->customer_custom_fields !!}
				@endif
				@if(!empty($receipt_details->sales_person_label))
					<br/>
					<b>{{ $receipt_details->sales_person_label }}</b> {{ $receipt_details->sales_person }}
				@endif
			</div>
                    </div>
                </div>
            </div>
            <h4>Items:</h4>
            <table class="tablle table-borderedd" dir="rtl">
                <thead>
                    <tr>
                      <th>{{$receipt_details->table_product_label}}</th>
					<th>{{$receipt_details->table_qty_label}}</th>
					<th>{{$receipt_details->table_unit_price_label}}</th>
					<th>{{$receipt_details->table_subtotal_label}}</th>
				</tr>
			</thead>
			<tbody>
				@forelse($receipt_details->lines as $line)
					<tr>
						<td style="word-break: break-all;">
							@if(!empty($line['image']))
								<img src="{{$line['image']}}" alt="Image" width="50" style="float: left; margin-right: 8px;">
							@endif
                            {{$line['name']}} {{$line['variation']}} 
                            @if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif @if(!empty($line['cat_code'])), {{$line['cat_code']}}@endif
                            @if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
                            @if(!empty($line['sell_line_note']))({{$line['sell_line_note']}}) @endif 
                            @if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif 
                            @if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif 
                        </td>
						<td>{{$line['quantity']}} {{$line['units']}} </td>
						<td>{{$line['unit_price_inc_tax']}}</td>
						<td>{{$line['line_total']}}</td>
					</tr>
					@if(!empty($line['modifiers']))
						@foreach($line['modifiers'] as $modifier)
							<tr>
								<td>
		                            {{$modifier['name']}} {{$modifier['variation']}} 
		                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif @if(!empty($modifier['cat_code'])), {{$modifier['cat_code']}}@endif
		                            @if(!empty($modifier['sell_line_note']))({{$modifier['sell_line_note']}}) @endif 
		                        </td>
								<td>{{$modifier['quantity']}} {{$modifier['units']}} </td>
								<td>{{$modifier['unit_price_inc_tax']}}</td>
								<td>{{$modifier['line_total']}}</td>
							</tr>
						@endforeach
					@endif
				@empty
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				@endforelse
			</tbody>
		</table>
            <div style="clear:both; position:relative;">
            
                    <div style="position:absolute; right:0pt; width:250pt;">
                        <h4>Notes:</h4>
                        <div class="panel panel-default">
                            <div class="panel-body">
                              {{$receipt_details->date_label}}</b> {{$receipt_details->invoice_date}}

				@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
					<br>
					@if(!empty($receipt_details->serial_no_label))
						<b>{!! $receipt_details->serial_no_label !!}</b>
					@endif
					{{$receipt_details->repair_serial_no}}<br>
		        @endif
				@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
					@if(!empty($receipt_details->repair_status_label))
						<b>{!! $receipt_details->repair_status_label !!}</b>
					@endif
					{{$receipt_details->repair_status}}<br>
		        @endif
		        
		        @if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
					@if(!empty($receipt_details->repair_warranty_label))
						<b>{!! $receipt_details->repair_warranty_label !!}</b>
					@endif
					{{$receipt_details->repair_warranty}}
					<br>
		        @endif
		        
				<!-- Waiter info -->
				@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
		        	<br/>
					@if(!empty($receipt_details->service_staff_label))
						<b>{!! $receipt_details->service_staff_label !!}</b>
					@endif
					{{$receipt_details->service_staff}}
		        @endif

                            </div>
                        </div>
                    </div>
                
                <div style="margin-right: 300pt;">
                    <h4>Total:</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><b>Subtotal</b></td>
                                <td>{{ $invoice->subTotalPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</td>
                            </tr>
                            @foreach($invoice->tax_rates as $tax_rate)
                                <tr>
                                    <td>
                                        <b>
                                            {{ $tax_rate['name'].' '.($tax_rate['tax_type'] == 'percentage' ? '(' . $tax_rate['tax'] . '%)' : '') }}
                                        </b>
                                    </td>
                                    <td>{{ $invoice->taxPriceFormatted((object)$tax_rate) }} {{ $invoice->formatCurrency()->symbol }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><b>TOTAL</b></td>
                                <td><b>{{ $invoice->totalPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($invoice->footnote)
                <br /><br />
                <div class="well">
                    {{ $invoice->footnote }}
                </div>
            @endif
        </main>

        <!-- Page count -->
        <script type="text/php">
            if (isset($pdf) && $GLOBALS['with_pagination'] && $PAGE_COUNT > 1) {
                $pageText = "{PAGE_NUM} of {PAGE_COUNT}";
                $pdf->page_text(($pdf->get_width()/2) - (strlen($pageText) / 2), $pdf->get_height()-20, $pageText, $fontMetrics->get_font("DejaVu Sans, Arial, Helvetica, sans-serif", "normal"), 7, array(0,0,0));
            }
        </script>
    </body>
</html>
