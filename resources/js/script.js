const { Callbacks } = require("jquery");

window.onload = function() {
    $(function () {

        function setAnime(scroll,target,cls) {
            $(target).each(function (k) {
                let elementPosition = $(this).offset().top; //要素の位置を取得
                let windowHeight = $(window).height(); //画面の高さを取得

                console.log(k+':'+scroll+','+elementPosition+'('+(scroll > elementPosition - windowHeight - 620)+')');

                if (scroll > elementPosition - windowHeight - 620){
                    $(this).addClass(cls);
                } else if(scroll < elementPosition -windowHeight-720) {
                    $(this).removeClass(cls,15000);
                };
            });
        };

        $('#brief-history').on('show.bs.modal', function(){
            $(this).on('scroll', function () {
                let scroll = $(this).scrollTop();
                setAnime(scroll, '.history', 'current');
                setAnime(scroll, '.history-content', 'current');
            });
        });

        $('.bubble').each(function (key) {
            const leftMin = 5;
            const leftMax = 95;
            const heightMax = $(document).height();
            const heightMin = $(window).height() - $(window).height() / 4
            const speedMin = 0.8;
            const speedMax = 3;
            let $this = $(this);
            let leftPosition = Math.floor(Math.random() * ((leftMax + 1) - leftMin) + leftMin);
            let topPosition = (Math.random() * ((heightMax + 1) - heightMin) + heightMin).toFixed(2);
            let speed = Math.floor(Math.random() * ((speedMax + 1) - speedMin) + speedMin);
            $this.css('top', topPosition + 'px');
            $this.css('left', leftPosition + '%');
            let top = $this.offset().top;

            $(window).on('scroll', function () {
                let scroll = $(window).scrollTop();
                let topPos = top - scroll / 3;

                if (scroll>topPos) {
                    $this.css('top', topPosition);
                } else {
                    $this.css('top', topPos);
                };
            })
        });

        $('.portfolio-item').on('click', function () {
            $('#work-modal').modal('show');
        });

    });
}
