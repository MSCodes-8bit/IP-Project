(function($) {
    var slide = function(ele,options) {
        var $ele = $(ele);
        var setting = {
            speed: 1,
            interval: 5000,
            
        };
        $.extend(true, setting, options);
        var wid = $(window).width();
        if (wid <= 600) {
            var states = [
                { $zIndex: 1, width: 120, height: 150, top: 69, left: '1rem', $opacity: 0.2, $filter: 'blur(3px)' },
                { $zIndex: 2, width: 130, height: '10rem', top: 59, left: 0, $opacity: 0.4, $filter: 'blur(2px)' },
                { $zIndex: 3, width: 170, height: '14rem', top: 35, left: '2rem', $opacity: 0.7, $filter: 'blur(1px)' },
                { $zIndex: 4, width: '12rem', height: '18rem', top: 0, left: '4rem', $opacity: 1, $filter: 'blur(0px)' },
                { $zIndex: 3, width: 170, height: '14rem', top: 35, left: '7rem', $opacity: 0.7, $filter: 'blur(1px)' },
                { $zIndex: 2, width: 130, height: '10rem', top: 59, left: '11rem', $opacity: 0.4, $filter: 'blur(2px)' },
                { $zIndex: 1, width: 120, height: 150, top: 69, left: '10rem' , $opacity: 0.2, $filter: 'blur(3px)' }
            ];
        }
        else {
             var states = [
                { $zIndex: 1, width: 120, height: 150, top: 69, left: 134, $opacity: 0.2, $filter: 'blur(3px)' },
                { $zIndex: 2, width: 130, height: '10rem', top: 59, left: 0, $opacity: 0.4, $filter: 'blur(2px)' },
                { $zIndex: 3, width: 170, height: '16rem', top: 35, left: 110, $opacity: 0.7, $filter: 'blur(1px)' },
                { $zIndex: 4, width: '18rem', height: '22rem', top: 0, left: '14rem', $opacity: 1, $filter: 'blur(0px)' },
                { $zIndex: 3, width: 170, height: '16rem', top: 35, left: 470, $opacity: 0.7, $filter: 'blur(1px)' },
                { $zIndex: 2, width: 130, height: '10rem', top: 59, left: 620, $opacity: 0.4, $filter: 'blur(2px)' },
                { $zIndex: 1, width: 120, height: 150, top: 69, left: 500, $opacity: 0.2, $filter: 'blur(3px)' }
            ];
        }


        var $lis = $ele.find('li');
        var timer = null;

        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
        autoPlay();

        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('div').css('filter', state.$filter);
            });
        }


        function next() {
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }

    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
        return this;
    }
})(jQuery);
