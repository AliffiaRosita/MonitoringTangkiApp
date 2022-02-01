@extends('template.main')
@section('content')
<h3>Dashboard</h3>
<br>
<div class="card">
    <div class="card-body">
        <div >
            <canvas id="myChart" ></canvas>
        </div>
    </div>
</div>
<div class="card mt-5">
    <h5 class="m-3">History</h5>
    <table class="table table-striped ">
        <thead>
            <th>No</th>
            <th>Nama Tangki</th>
            <th>Jenis Sensor</th>
            <th>Tinggi</th>
            <th>Volume</th>
        </thead>
        <tbody>
            @foreach ($historyAll as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tangki->nama }}</td>
                <td>{{ $item->sensor->jenis}}</td>
                <td>{{ $item->tinggi }}</td>
                <td>{{ $item->volume }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('js')

<script>

const cData= JSON.parse(`{!! $chart_data !!}`);

const labels = cData.label;
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Air',
      data: cData.dataAir,
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
    },
    {
      label: 'Minyak',
      data: cData.dataMinyak,
      backgroundColor: [
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
    }]

};
const config = {
  type: 'bar',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Diagram Tangki Air dan Minyak'
      }
    }
  },
};

const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );





</script>

@endpush
