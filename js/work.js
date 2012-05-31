// $Id$
(function ($) {

    /**
     *
     *
    Drupal.behaviors.thinkdrop = {
      attach: function (context, settings) {
        Drupal.equalWidths();
        
        
        $(window).resize(function() {
            Drupal.equalWidths();
        });
      }
    }
     */
    var newMargin = 0;
    
    Drupal.equalWidths = function(context){
        var $view = $('.view-thinkdrop-projects', context);
        var viewWidth = $view.width();
        var rowWidth = 300 + newMargin;
        
        var rowCount = Math.floor(viewWidth / rowWidth);
        var totalRowWidth = rowWidth * rowCount;
        
        var remainingPixels = viewWidth - totalRowWidth;
        newMargin = remainingPixels / (rowCount - 1);

        console.log(rowCount, 'row count');
       
        $('.views-row', $view).each(function(i, row){
            //Don't apply to last item in row
            
            var rowPos = i % rowCount;
            if (rowPos + 1  != rowCount){
                $(this).css('margin-right', newMargin);
            }
        });
    }
})(jQuery);