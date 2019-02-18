@extends('layouts.app')

@section('content')
    <div class="container">
      <h4>Settings</h4>
      <h6>Set-up your app settings to match your organization needs</h6>
    </div>
    <div class="row">
      <div class="col-6 offset-1">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Departments</th>
              <td><a href="{{url('settings/department')}}">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Ranks</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Levels</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Employee Ranking</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Evaluator</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Years of experience points</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Certification/ training points</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Examination score points</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Survey - Likert scale</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Scheduled evaluation reminder</th>
              <td>Edit</td>
            </tr>
            <tr>
              <th scope="row">Allow employee to export evaluation</th>
              <td>Edit</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

@endsection
