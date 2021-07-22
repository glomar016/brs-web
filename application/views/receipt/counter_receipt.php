
<style>
    #invoice-POS{box-shadow:0 0 1in -.25in rgba(0,0,0,.5);padding:2mm;margin:0 auto;width:150mm;background:#fff;color:#222}
    h4{font-size:1.4em}h3{font-size:1.6em;font-weight:400;line-height:2em}
    .pTag{font-size:0.9em;color:#666;line-height:1.2em}#bot,#mid,#top{border-bottom:1px solid #eee}#top{min-height:100px}#mid{min-height:80px}#bot{min-height:50px}#top .logo{height:60px;width:60px;background:url(<?php echo base_url()?>resources/assets/img/brs-logo.png) no-repeat;background-size:60px 60px}.clientlogo{float:left;height:60px;width:60px;background:url(http://michaeltruong.ca/images/client.jpg) no-repeat;background-size:60px 60px;border-radius:50px}
    .info{display:block;margin-left:0}.title{float:right}.title p{text-align:right}table{width:100%;border-collapse:collapse}.tabletitle{font-size:.5em;background:#eee}.service{border-bottom:1px solid #eee; text-align:center}.item{width:24mm}.itemtext{font-size:.8em}#legalcopy{margin-top:5mm}
</style>
  <div id="invoice-POS">
    
    <center>
      <div>
          <img src="<?php echo base_url()?>resources\assets\img\brs-logo-sm.png">
      </div>
      <div class="info"> 
        <h4>Bus Reservation</h4>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h4>Customer Info</h4>
        <p class="pTag" id="userInfo"> 
            Name: <span id="customerNamePrint">John Raven Glomar</span><br>
            Address: <span id="customerAddressPrint">Purok 8 Unit 5 Adarna Ext. Commonwealth Quezon City</span><br>
        </p>
      </div>
      <div class="info">
        <h4>Trip Info</h4>
        <p class="pTag" id="userInfo"> 
            Reference Number: <span id="referenceNumberPrint">79870722211639</span><br>
            Schedule: <span id="scheduleNamePrint"> July 22, 2021 | 10:00 PM-3:00 AM | Bus Number: Luxury</span><br>
            Promo Code: <span id="tripPromoCodePrint"> RAVEN123 </span><br>
        </p>
      </div>
    </div><!--End Invoice Mid-->

    <div class="info">
        <h4>Passenger Info</h4>
    </div>
    
    <div id="bot">
					<div id="table">
						<table id="passengerTablePrint">
							<thead>
                                
							</thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="pTag">SEAT-01</p>
                                    </td>
                                    <td>
                                        <p class="pTag">John Raven Glomar</p>
                                    </td>
                                    <td>
                                        <p class="pTag">Cubao - Landmark01</p>
                                    </td>
                                    <td>
                                        <p class="pTag">P20.00</p>
                                    </td>
                                    <td>
                                        <p class="pTag">P120.00</p>
                                    </td>
							    </tr>
                            </tbody>

						</table>
					</div><!--End Table-->
<!-- 
					<div id="legalcopy">
						<p class="pTag" class="legal"> This official receipt has a validity of five (5) years from the date of transaction
						</p>
					</div> -->
        <div class="info">
            <h4>Fare Info</h4>
            <div  style="float:right" >
                <p class="pTag" id="userInfo"> 
                        Amount: <span id="tripAmount">P943.56</span><br>
                        Promo Discount: <span id="tripPromoDiscount">P0.00</span><br>
                        <h5>Total Amount: <span id="tripTotalAmount">P900.00</span></h5><br>
                </p>
            </div>
            
      </div>
				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
