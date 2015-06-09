(function(){

  angular.module('survey')
    .controller('SurveyCtrl', ['$scope','$http', '$sce', function($scope, $http, $sce){
      var $controller = this;

      $controller.mailSent = false;
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
      '<p>Este cuestionario fue creado para que la persona que lo realice pueda identificar alguna de sus motivaciones o intereses profesionales enmarcados o clasificados en cinco campos determinados por las diferentes profesiones más conocidas.
Estos campos profesionales son: </p>

1-  Social <br>  
2-  Salud-deporte <br>
3-  Artístico <br>
4-  Tecnológico <br>
5-  Negocios<br> 
<p>Sabemos que podrían existir otros campos profesionales pero el objetivo actual es identificar la motivación inicial para una posterior búsqueda más profunda con mayores elementos personales que se deben tener para una elección profesional.
METODOLOGIA</p>

1-  Lee y contesta con tu primer impulso todas las frases que aparecen a continuación
2-  Deberás elegir la opción me gusta para contestarlas por lo tanto las que no me gustan ya no se tendrán en cuenta en la puntuación final <br>
3-  Cuando contestes todo, podrás esperar inmediatamente un resultado de acuerdo a lo que has elegido (o puntuado). <br>
4-  Las conclusiones finales serán las que tuvieron mayor puntuación según la estructura  interna del cuestionario y lo que la persona ha puntuado. <br>
5-  Después de leer tu resultado debes anotar si te pareció adecuado y te sentiste identificado con el (el resultado) <br>
6-  Podrás dejar tus datos si quisieras que te contactemos para un mejor análisis de tus intereses profesionales. <br>
');

      $controller.retest = {
        "title": "Se necesita rehacer.",
        "desc": "Se necesita rehacer el test porque los resultados no fueron concluyentes."
      }

      var index = -1;
      $controller.init = function(){
          $controller.mailSent = false;
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
          }).success(function(){
            $controller.mailSent = true;
          });
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
