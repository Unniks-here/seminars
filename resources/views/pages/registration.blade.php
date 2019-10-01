@extends('layouts.template')
@section('css')
	<style>
	.smtable td, .smtable th{
			font-size: 10px;
		}
	</style>
@endsection
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-sm-9"> 
				<div class="row">  
		<div class="col-md-8" > 
		<div> 		 
		<div  align="left">
		
	<strong> Registration Fee</strong> <br> 
	<div class="table-responsive">
		<table class="table table-bordered smtable" style="background: #f6f6f6; ">
              <thead>
                <tr><th class="td">Type</th>
                <th class="td">Category</th>
                <th class="td">Up to 15<sup>th</sup> November, 2019</th>
                <th class="td">After 15<sup>th</sup> November, 2019</th>
              </tr></thead>
              <tbody>
                 <tr>
                    <td class="td" rowspan="4">Indian   (INR)</td>
                    <td class="td">Research Scholars</td>
                    <td class="td">2000</td>
                    <td class="td">2500</td>
                 </tr>
                 <tr> 
                   <td class="td">Faculty</td>
                   <td class="td">2500</td>
                   <td class="td">3000</td>
                 </tr>
                 <tr> 
                   <td class="td">Industry Delegate</td>
                   <td class="td">3000</td>
                   <td class="td">4000</td>
                 </tr>
                 <tr> 
                   <td class="td">Academic Groups (4 People)</td>
                   <td class="td">7000</td>
                   <td class="td">10000</td>
                 </tr>
                 <tr>
                   <td class="td"  rowspan="3">Foreign (INR)</td>
                   <td class="td">Research Scholars</td>
                   <td class="td">7000</td>
                   <td class="td">8000</td>
                 </tr>
                 <tr> 
                   <td class="td">Faculty</td>
                   <td class="td">8000</td>
                   <td class="td">9000</td>
                 </tr>
                 <tr> 
                   <td class="td">Industry Delegate</td>
                   <td class="td">10000</td>
                   <td class="td">11000</td>
                 </tr>
              </tbody>
           </table>
	</div>
 <font size="2">Note: Registration Fee Includes Conference Kit, Lunch, Tea, Publication.<br><br>
 </font>
 <br>
 <table class="table" >
	<tr>
		<td>Bank Name: State Bank of India, 
				<br>Branch: Karicode, Kollam
				<br>Address: Mumthas Complex, Karicode, Kollam
				<br>A/c No 67382785938 A/c Name: The Principal
				<br>IFSC Code: SBIN0070870, SWIFT Code: SBININBB, <br>Branch code: 70870
			</td>
			<td>
					<b>For Queries and Further Information</b><br>
					Harilal N Thazhikkattuseril<br>
              		+91 8281151654
			</td>
	</tr>
</table> 
		</div>
</div>
	 <br>	 
                </div><!--/.col-sm-6-->

                <div class="col-md-4  wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<div class="testimonial" align="center"> 
						@if (Auth::guest()) <a class="btn btn-warning readmore" href="/login"> Online Registration </a> <br><br>
						
						@else

						<a class="btn btn-warning readmore" href="/submissions/home"> Submissions </a> <br>

						@endif
					</div>
                    <div class="testimonial" align="left">  
					
						<!-- <h3>Entitlement</h3>   -->
						<div align="left"> 
							<p>Delegate Registration Fee Includes: </p>
							
							<ul> 
								<li>Access to all Sessions and Presentation
								</li><li>Tea / Coffee / Lunch </li>
								<li>Conference Kit</li> 
								<li>Participation Certificate</li> 
							</ul>

							<br>
						</div>
						<br>

					</div> 
				</div>
				<div class="col-md-12">
				<hr>
						<h4>Intimation</h4>
						<div align="justify">A registration confirmation letter will be sent to you via e-mail on receipt of the payment. </div><br><br>
	   
						<h4>Cancellation Policy</h4>
  
					   <div align="justify"> 
						  Cancellation should be made in writing (stating your name and reference/registration number) and send to <a href="mailto:icee2k19@gmail.com">icee2k19@gmail.com</a> 
						  <br> <strong>In case of cancellation: to refund<br>
						</strong>      31<sup>st</sup> August 2019 to 1<sup>st</sup> October 2019 - refund of 50% of your registration fee minus bank charges and administrative fee. 
							<br>31<sup>st</sup> October 2019 to 5<sup>th</sup> October 2019 - refund of 25% of your registration fee less bank charges and administrative fee. 
						  <br>No refund will be made for cancellation received after 8<sup>th</sup> October 2019
					  </div> 
				</div>
			</div>
		</div>
			<div class="col-lg-3 align-self-baseline">
				<div class="text-center">
				<h4>Important dates</h4>
				<hr class="divider ">  			
			</div>
			<div class="table-responsive" style="padding-top:20px;">
				<table class="table  imp_date">
					<tr><td><b style="color: #26ad6d;">Abstract submission	</b><br><font size="3"><i> Up to 1<sup>st</sup>  November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Paper acceptance intimation	</b><br><font size="3"><i> 10<sup>th</sup>  November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Full papers submission	</b><br><font size="3"><i> Up to 30<sup>th</sup> November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Early bird registration	</b><br><font size="3"><i> Up to 15<sup>th</sup> November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Conference days	</b><br><font size="3"><i> 12<sup>th</sup> to 14<sup>th</sup>  December, 2019</i></font>  </td></tr>
				</table>
			</div>
         </div>
		</div>
        
    </div>
  @endsection