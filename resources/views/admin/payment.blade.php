@extends('layouts.admintemplate')

@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Payment</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    
   <?php $submission = App\Submission::where('user_id',Auth::user()->id)->first();  ?>

        <div class="row">
            <div class="col-lg-7 ">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.payment') }}">
                          {{ csrf_field() }}
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                          @endif
                      <table class="table" >
                        <tr>
                          <td>A/c Holder Name: The Principal
                            <br>A/c No 67382785938 
                              <br>Bank Name: State Bank of India, 
                              <br>Branch: Karicode, Kollam
                              <br>IFSC Code: SBIN0070870, 
                              <br>Branch code: 70870
                              <br>SWIFT Code: SBININBB, 
                              <br>Address: Mumthas Complex, Karicode, Kollam
                            </td>
                        </tr>
                      </table> 
                      <hr>
                      <label for="mode_of_payment">Payement Mode</label>
                      <select name="mode_of_payment" class="form-control mode_of_payment">
                        {{-- <option  value="dd">DD</option> --}}
                        <option  value="Spot">Spot Registration</option>
                        <option  value="NEFT/RTGS">NEFT/RTGS</option>
                      </select><br>
                      <label for="amount">Amount</label>
                      <input class="form-control form-control-lg mb-3" value="{{!empty($submission->amount)?$submission->amount:''}}" type="number" name="amount" min="2000" max="11000" placeholder="Amount">
                      
                      <div class="dd">
                        <label for="dd">DD Number</label>
                        <input class="form-control form-control-lg mb-3" value="{{!empty($submission->dd_no)?$submission->dd_no:''}}" type="text" name="dd_no"  placeholder="DD Number">
                        <label for="dd">DD Date</label>
                        {{-- <div class="date1">
                        <input class="form-control form-control-lg mb-3" value="{{!empty($submission->dd_date)?$submission->dd_date:''}}" type="text" name="dd_date"  placeholder="DD Date">
                        </div> --}}
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control"  placeholder="DD Date" name="dd_date" value="{{!empty($submission->dd_date)?$submission->dd_date:''}}">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                        <br>Bank Details</label>
                        <textarea class="form-control form-control-lg mb-3" type="text" name="dd_bank"  placeholder="Bank Details">{{!empty($submission->dd_bank)?$submission->dd_bank:''}}</textarea>
                      </div>
                      <div class="rtgs">
                          <label for="dd">Transaction Number</label>
                          <input class="form-control form-control-lg mb-3" value="{{!empty($submission->transation_id)?$submission->transation_id:''}}" type="text" name="transation_id"  placeholder="Transaction Number">
                          <label for="dd">Transaction Date</label>
                          {{-- <input class="form-control form-control-lg mb-3" value="{{!empty($submission->dd_date)?$submission->dd_date:''}}" type="text" name="dd_date"  placeholder="Transaction Date"> --}}
                          <div class="input-group date" data-provide="datepicker">
                              <input type="text" class="form-control"  placeholder="Transaction Date" name="transaction_date" value="{{!empty($submission->dd_date)?$submission->dd_date:''}}">
                              <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                              </div>
                          </div>
                          <br>Bank Details</label>
                          <textarea class="form-control form-control-lg mb-3" type="text" name="transaction_bank"  placeholder="Bank Details">{{!empty($submission->transaction_bank)?$submission->transaction_bank:''}}</textarea>
                      </div>
                      <br>
                      <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
              <div class="col-lg-5 ">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Fees</h6>
                  </div>
                  <div class='card-body p-0'>
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
                </div>
            <!-- / Post Overview -->
        </div>
      </div>  
    </div>
@endsection
@section('script')
    <script>

      $(document).ready(function(){

            $('.dd').hide();
            $('.rtgs').hide();
            $('.spot').show();
        @if(!empty($submission))
          $('.mode_of_payment').val("{{$submission->mode_of_payment}}");

          @if($submission->mode_of_payment=='dd')
          {
            $('.dd').show();
            $('.rtgs').hide();
            $('.spot').hide();
          }
          @elseif($submission->mode_of_payment=='NEFT/RTGS')
          {
            $('.dd').hide();
            $('.rtgs').show();
            $('.spot').hide();
          }
          @else
          {
            $('.dd').hide();
            $('.rtgs').hide();
            $('.spot').show();
          }
          @endif
        @endif

        $('.date1').datepicker({
            format: 'mm/dd/yyyy',
        });

        $('.date').datepicker({
            format: 'mm/dd/yyyy',
        });
      });

      $('.mode_of_payment').on('change',function(){
        if($('.mode_of_payment').val()=='dd')
        {
          $('.dd').show();
          $('.rtgs').hide();
          $('.spot').hide();
        }
        else if($('.mode_of_payment').val()=='NEFT/RTGS')
        {
          $('.dd').hide();
          $('.rtgs').show();
          $('.spot').hide();
        }
        else
        {
          $('.dd').hide();
          $('.rtgs').hide();
          $('.spot').show();
        }
      })

     
    </script>
@endsection