@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div id="wizardModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="text-center p-3 m-3">
                    <h4>Get Started!</h4>
                </div>
                <ul class="nav nav-pills nav-fill" id="getStartedWizard">
                    <li class="nav-item">
                        <a href="#step1" data-toggle="tab" aria-expanded="false" >Step 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#step2" data-toggle="tab" aria-expanded="false" >Step 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#step3" data-toggle="tab" aria-expanded="false" >Step 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="#step4" data-toggle="tab" aria-expanded="false" >Step 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="#done" data-toggle="tab" aria-expanded="false" >Done</a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h3>Configure eVal settings and evaluation procedure</h3>
                        <h4>Create your departments, rank, level, roles, survey scale, etc. for evaluation procedures</h4>
                    </div>
                    <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                        <h3>Create your team</h3>
                        <h4>Register your team by providing basic information. The invitation will be sent to their email to join</h4>
                    </div>
                    <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="40" aria-valuemax="100"></div>
                        </div>
                        <h3>Create an assessment</h3>
                        <h4>Create and assign assessment to each of your team</h4>
                    </div>
                    <div class="tab-pane fade" id="step4" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="60" aria-valuemax="100"></div>
                        </div>
                        <h3>Review evaluation</h3>
                        <h4>Finally, review submitted assessments</h4>
                    </div>
                    <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="80" aria-valuemax="100"></div>
                        </div>
                        <h3>Done!</h3>
                        <h4>Evaluation steps completed.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
    </div>
</div>

<script>
    $(window).on('load',function(){
        $('#wizardModal').modal('show');
    });
</script>
@endsection
