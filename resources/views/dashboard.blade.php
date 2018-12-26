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
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <ul class="nav nav-pills nav-fill" id="getStartedWizard">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active text-center" id="step1" role="tabpanel" aria-labelledby="list-home-list">
                        <h4 class="text-primary pt-4 pb-2">Get started... <br> Step 1 </h4>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <i class="py-5 text-info fa fa-cogs fa-5x"></i>
                        <h4 class="text-primary px-3">Configure eVal settings <br> and evaluation procedure</h4>
                        <p class="text-muted px-3">Create your departments, rank, level, roles, survey scale, etc. for evaluation procedures</p>
                        <div class="row py-4">
                            <a href="#step2" class="col-md-12" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-right fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="step2" role="tabpanel" aria-labelledby="list-profile-list">
                        <h4  class="text-primary pt-4 pb-2">Step 2</h4>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                        <i class="py-5 text-info fa fa-users fa-5x"></i>
                        <h4 class="text-primary px-3">Create your team</h4>
                        <p class="text-muted px-5">Register your team by providing basic information. <br> The invitation will be sent to their email to join</p>
                        <div class="row py-4">
                            <a href="#step1" class="col-6 text-right" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-left fa-2x"></i>
                            </a>
                            <a href="#step3" class="col-6 text-left" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-right fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="step3" role="tabpanel" aria-labelledby="list-messages-list">
                        <h4 class="text-primary pt-4 pb-2">Step 3</h4>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="40" aria-valuemax="100"></div>
                        </div>
                        <i class="py-5 text-info fa fa-list fa-5x"></i>
                        <h4 class="text-primary px-3">Create an assessment</h4>
                        <p class="text-muted px-5">Create and assign assessment to each of your team</p>
                        <div class="row py-4">
                            <a href="#step2" class="col-6 text-right" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-left fa-2x"></i>
                            </a>
                            <a href="#step4" class="col-6 text-left" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-right fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="step4" role="tabpanel" aria-labelledby="list-messages-list">
                        <h4 class="text-primary pt-4 pb-2">Step 4</h4>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="60" aria-valuemax="100"></div>
                        </div>
                        <i class="py-5 text-info fa fa-book fa-5x"></i>
                        <h4 class="text-primary px-3">Review evaluation</h4>
                        <p class="text-muted px-5">Finally, review submitted assessments</p>
                        <div class="row py-4">
                            <a href="#step3" class="col-6 text-right" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-left fa-2x"></i>
                            </a>
                            <a href="#done" class="col-6 text-left" data-toggle="tab" aria-expanded="false" >
                                <i class="text-secondary fa fa-chevron-right fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="done" role="tabpanel" aria-labelledby="list-messages-list">
                        <h4 class="text-primary pt-4 pb-2">Done!</h4>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="80" aria-valuemax="100"></div>
                        </div>
                        <i class="py-5 text-info fa fa-book fa-5x"></i>
                        <p class="text-muted px-5">Evaluation steps completed.</p>
                        <div class="row py-4">
                            <button id="closeWizard" class="btn btn-outline-primary mx-auto px-5">Got it!</button>
                        </div>
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
    $('#closeWizard').on('click',function(){
        $('#wizardModal').modal('hide');
    });
</script>
@endsection
