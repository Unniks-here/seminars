<html>
    <head>

    </head>
    <body>
        <table>
            <tr><td></td><td></td><td></td><td>Registered Candidates for ICEE2k19</td></tr>
            <tr><td></td><td></td><td></td></tr>
        </table>
        <table class="table table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Reg No</th>
                  <th>Name</th>
                  <th>Submission Mode</th>
                  <th>Area</th>
                  <th>Title</th>
                  <th>Authors</th>
                  <th>Mode of Presentation</th>
                  <th>Mode of Payement</th>
                  <th>DD No</th>
                  <th>DD date</th>
                  <th>DD bank</th>
                  <th>Transaction ID</th>
                  <th>Transaction Date</th>
                  <th>Transaction Bank</th>
                  <th>Amount</th>
                  <th>File</th>
                </tr>
            </thead>
            <tbody>
              @foreach($submissions as $submit)
                <tr>
                <td>{{$loop->iteration}}</td>
                {{-- <td><a class="mb-2 btn btn-sm {{$submit->approved==0? 'btn-warning' : 'btn-primary'  }} mr-1" href="/submissions/approve/now/{{$submit->id}}" style="color:white">{{$submit->approved==0? 'Approve' : 'Reject'  }}</a></td> --}}
                <td>{{$submit->reg_id}}</td>
                <td>{{$submit->name}}</td>
                <td>{{$submit->paper_submission_mode}}</td>
                <td>{{$submit->area_of_paper}}</td>
                <td>{{$submit->title}}</td>
                <td>{{$submit->authors_with_address}}</td>
                <td>{{$submit->mode_of_presentation}}</td>
                <td>{{$submit->mode_of_payment}}</td>
                <td>{{$submit->dd_no}}</td>
                <td>{{$submit->dd_date}}</td>
                <td>{{$submit->dd_bank}}</td>
                <td>{{$submit->transation_id}}</td>
                <td>{{$submit->dd_date}}</td>
                <td>{{$submit->transaction_bank}}</td>
                <td>{{$submit->amount}}</td>
                <td><a href="http://icee2k19.org/uploads/{{$submit->file_doc}}">{{$submit->file_doc}}</a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </body>
</html>