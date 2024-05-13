
<!DOCTYPE html>
     <table>
      <th>clientId</th>
      <th>No. of payment</th>
      <th>Last Payment Date</th>
      <th>Loan Amount</th>
      <tbody>
        @if($loanData->count())
          @foreach($loanData as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->num_of_payment}}</td>
                <td>{{$data->first_payment_date}}</td>
                <td>{{$data->last_payment_date}}</td>
                <td>{{$data->loan_amount}}</td>
              </tr>
        @endforeach  
         @endif                                           
                      
      </tbody>
     </table>
</form>
