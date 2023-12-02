@extends('gym_template/head')
@section('title','GYM SOFTWARE')
@section('links')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">





@include('gym_template/sidebar')
@include('gym_template/box')

@section('gym_template/feeds')


<h1 style="text-align: center;">Income for Year {{ $year }}</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Month</th>
                        <th>Total Income</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($monthlyIncomes as $monthlyIncome)
                        <tr>           
                            <td>{{ strftime("%B", mktime(0, 0, 0, $monthlyIncome->month, 1)) }}</td>
                            <td>${{ $monthlyIncome->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>