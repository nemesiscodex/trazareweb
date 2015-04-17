(function(){

  angular.module('survey')
    .controller('SurveyCtrl', ['$scope','$http', '$sce', function($scope, $http, $sce){
      var $controller = this;

      $controller.rasgos = [];
      $controller.username = "";
      $controller.email = "";
      $controller.results = [];
      $controller.original = [];
      $controller.title = [
        'La felicidad',
        'Con cuales te sentis identificado?',
        'Terminamos :)'
        ];

      $controller.felicidad = $sce.trustAs('html',
        '<p>La felicidad (del latín <b>felicitas</b>, a su vez de '+
        'felix, "fértil", "fecundo") es un estado emocional que se produce en la'+
        ' persona cuando cree haber alcanzado una meta deseada.</p>' +
        '<p>La felicidad suele ir aparejada a una condición interna o subjetiva de' +
        'satisfacción y alegría.</p> <p>Algunos psicólogos han tratado de caracterizar' +
        ' el grado de felicidad mediante diversos tests, y han llegado a definir '+
        ' la felicidad como una medida de bienestar subjetivo (autopercibido) '+
        'que influye en las actitudes y el comportamiento de los individuos. '+
        'Las personas que tienen un alto grado de felicidad muestran generalmente'+
        'un enfoque del medio positivo, al mismo tiempo que estimula a conquistar '+
        'nuevas metas (véase motivación).</p>');

      $controller.retest = {
        "title": "Se necesita rehacer.",
        "desc": "Se necesita rehacer el test porque los resultados no fueron concluyentes."
      }

      var index = -1;
      $controller.init = function(){
          $controller.username = "";
          $controller.email = "";
          index = -1;
          $controller.results = [];
          $controller.original = $controller.original.map(function(obj){
            obj.selected = undefined;
            return obj;
          });
          $controller.next();
      };

      $controller.submit = function(){
          $http.post('/submit', {
            "username": $controller.username,
            "email": $controller.email,
            "results": $controller.results.map(function(obj){
              var newobj = {
                "id": obj.id,
                "name": obj.name,
                "count": obj.count
              };
              return newobj;
            })
          })
      };

      angular.element('.btn-principal').on('click', function(){
        $controller.init();
        $scope.$digest();
      });

      $controller.checkAnswers = function(){
        var answers = $controller.original.filter(function(obj){
          return obj.selected;
        });
        //If more than 20 selected. retest!
        if(answers.length >= 20)
          return [];

        var rasgos = $controller.rasgos.slice(0).map(function(obj){
          obj.count = 0;
          return obj;
        });
        var rasgos_map = rasgos.reduce(function(map, obj){
          map[obj.id] = obj;
          return map;
        }, {});
        for(var i = 0; i < answers.length; i++){
          rasgos_map[answers[i].rasgo_id].count++;
        }
        var _rasgo = Object.keys(rasgos_map)
        .map(function(key){ return rasgos_map[key]})
        .reduce(function(array, obj){
          console.log(obj.count + ' >= ' + obj.min);
          if(obj.count >= obj.min)
            array.push(obj);
          return array;
        }, [])
        .sort(function(obja, objb){
          return objb.count - obja.count;
        })
        ;
        console.log(_rasgo);
        return _rasgo;
      };

      /**
      * Random shuffle
      * The de-facto unbiased shuffle algorithm is
      * the Fisher-Yates (aka Knuth) Shuffle.
      * source: https://github.com/coolaj86/knuth-shuffle
      */
      function shuffle(array) {
        var currentIndex = array.length, temporaryValue, randomIndex ;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

          // Pick a remaining element...
          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex -= 1;

          // And swap it with the current element.
          temporaryValue = array[currentIndex];
          array[currentIndex] = array[randomIndex];
          array[randomIndex] = temporaryValue;
        }

        return array;
      }

      $controller.next = function(){
        if(index < 0){
          $controller.items = [];
          index = 0;
          $controller.step = 0;
          return true;
        }

        var offset = 3;
        if($controller.original.length < index + offset){
          $controller.step = 2;
          $controller.items = [];
          $controller.results = $controller.checkAnswers();
          return false;
        }
        $controller.items = $controller.original.slice(index, index + offset);
        index = index + offset;
        $controller.step = 1;
        return true;
      };

      // Fetch items
      $http.get('/items').
        success(function(data, status, headers, config) {
          index = -1;
          $controller.original = shuffle(data);
          $controller.next();

        })
        ;

      // Fetch rasgos
      $http.get('/rasgos').
        success(function(data, status, headers, config) {
          $controller.rasgos = data;
        })
        ;
    }])
    ;
})();
