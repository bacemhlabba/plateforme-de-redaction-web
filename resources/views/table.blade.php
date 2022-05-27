@section('table')
<table border="1">
    <tr>
      <th>Identifier</th>
      <th>Title</th>
      <th>Price(TND)</th>
      <th>Description</th>
      <th>Delivery Date</th>
    </tr>
    @foreach ($projets as $projet)
    <tr>
      <td>{{ $projet['identifier'] }}</td>
      <td>{{ $projet['title'] }}</td>
      <td>{{ $projet['price'] }}</td>
      <td>{{ $projet['description'] }}</td>
      <td>{{ $projet['delivery_date'] }}</td>
    </tr>
    @endforeach
</table>
@endsection