@extends('base')
@section('head-css')
<link href="{{ asset('/css/base.css') }}" rel="stylesheet">
@stop
@section('content')
  <div class="row">
    <img class="img-responsive center-block" src="{{ asset('/img/logo.png') }}" />
    <h1 class="text-center">¿Te animás a ser feliz?</h1>
    <br>
    <button class="btn btn-principal btn-lg center-block" data-toggle="modal"
    data-target="#intro"> ¡Sí, me animo!</button>
  </div>

  <!-- Modal -->
  <div ng-app="survey" ng-controller="SurveyCtrl as ctrl" class="modal fade" id="intro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title" id="info-title">{$ ctrl.title[ctrl.step] $}</h3>
        </div>
        <div class="modal-body">
          <div ng-if="ctrl.step == 2">
            <div ng-show="ctrl.results.length > 0">
              <h3>Resultados</h3>
              <div ng-repeat="result in ctrl.results">
                <h4>{$ result.name $}</h4>
                <p>{$ result.desc $}</p>
              </div>
              <h3 class="text-center">Te mandamos el resultado completo completo a tu mail</h3>
              <br>
              <form name="sendResults" class="col-md-6 col-md-offset-3">

                  <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon  glyphicon-user" aria-hidden="true"></span></span>
                    <input required name="username" ng-model="ctrl.username" type="text" class="form-control" placeholder="Nombre y Apellido" aria-describedby="sizing-addon2">
                  </div>

                   <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                    <input required name="email" ng-model="ctrl.email" type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
                  </div>
                  <br>
                  <button ng-disabled="!sendResults.$valid" ng-click="ctrl.submit()" type="button" class="btn  btn-amarillo">Enviar</button>
              </form>
            </div>
            <div ng-hide="ctrl.results.length > 0">
                <h4>{$ ctrl.retest.title $}</h4>
                <p>{$ ctrl.retest.desc $}</p>
            </div>
          </div>
          <div class="col-md-4" ng-repeat="item in ctrl.items">
            <div class="survey-item" item="item" ></div>
          </div>
          <div ng-if="ctrl.step == 0" ng-bind-html="ctrl.felicidad"></div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-amarillo btn-sm" ng-click="ctrl.next()" >
            <span ng-if="ctrl.step == 1">Siguiente <i class="glyphicon glyphicon-arrow-right"></i></span>
            <span ng-if="ctrl.step == 0">Comenzar el Test</span>
            <span ng-if="ctrl.step == 2" ng-click="ctrl.init()">Volver a empezar</span>
          </a>
        </div>
      </div>
    </div>
  </div>

@stop
@section('scripts')
  <script src="{{ asset('/vendor/angular/angular.min.js') }}" ></script>
  <script>
    (function(){
      angular.module('survey',[]);
    })();
  </script>
  <script src="{{ asset('/js/survey.config.js') }}"></script>
  <script src="{{ asset('/js/survey.surveyCtrl.controller.js') }}"></script>
  <script src="{{ asset('/js/survey.surveyItem.directive.js') }}"></script>
@stop
