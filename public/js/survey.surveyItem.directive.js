(function(){
  angular.module('survey')
    .directive('surveyItem', function(){
      return {
        restrict: 'C',
        template: '<div style="cursor: pointer; height: 430px"' +
        ' class="centrado pregunta" ng-class="{active: item.selected}" '+
          'onclick="$(this).find(\'input:checkbox\').click()">' +
          '<img class="img-responsive center-block" width="205px" style="height: 200px" ng-src="/img/items/{{ item.img }}"' +
          ' alt="{{ item.name }}" >' +
          '<p style="height: 130px;">{{ item.name }}</p>' +
          '<div class="checkbox-item">' +
            	'<input type="checkbox"  style="cursor: inherit; bottom: 0" ng-model="item.selected" onclick="event.stopPropagation()" value="None"' +
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
