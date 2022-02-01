@extends('template.main')
@section('content')
<h3 class="text-center mb-3">{{ $tangki->nama }}</h3>

<div class="row">
    <div class="col-5" >
        <div class="card" style="box-shadow: 3px -1px 31px 7px rgba(209,209,209,0.73);">
            <div class="card-body ">
                <div >
                    <canvas id="myChart" ></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-7">
            <div class="card " style="box-shadow: 3px -1px 31px 7px rgba(209,209,209,0.73);">
                    <div class="card-body ">
                       <strong>Deskripsi Tangki</strong>
                        <ul>
                            <li>
                                Suhu  : {{ $tangki->suhu }} &deg;C
                            </li>
                            <li>
                                Kapasitas Maksimum  : {{ $tangki->volume }} m<sup>3</sup>
                            </li>
                            <li>
                                Tinggi Tangki  : {{ $tangki->tinggi }} m
                            </li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-5 mb-3">History</h5>
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Jenis Sensor</th>
                        <th>Tinggi</th>
                        <th>Volume</th>
                    </thead>
                    <tbody>
                        @foreach ($tangki->historySensor as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->sensor->jenis }}</td>
                            <td>{{ $item->tinggi }} m</td>
                            <td>{{ $item->volume }} m<sup>3</sup></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection

@push('js')

<script>

    const cData= JSON.parse(`{!! $chart_data !!}`);

    console.log(cData.label);

    const data = {
    labels:
    cData.label,
  datasets: [{
    label: 'My First Dataset',
    data: cData.data,
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

    const config = {
        type: 'doughnut',
        data: data,
        options: {
        plugins:{
            title: {
        display: true,
        text: 'Diagram Tangki Air dan Minyak'
      }
        }
        }
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
        </script>

@endpush
