(function(){
  angular.module('survey')
    .directive('surveyItem', function(){
      return {
        restrict: 'C',
        template: '<div style="cursor: pointer"' +
        ' class="centrado pregunta" ng-class="{active: item.selected}" '+
          'onclick="$(this).find(\'input:checkbox\').click()">' +
          '<img class="img-responsive center-block" width="205px" style="height: 140px" ng-src="/img/items/{{ item.img }}"' +
          ' alt="{{ item.name }}" >' +
          '<p>{{ item.name }}</p>' +
          '<div class="checkbox-item">' +
            	'<input type="checkbox"  style="cursor: inherit" ng-model="item.selected" onclick="event.stopPropagation()" value="None"' +
               ' id="selected" name="selected" />' +
          '</div>' +
        '</div>',
        scope: {
          item: '=item'
        }
      };
    })
    ;
})();
