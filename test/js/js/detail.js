 $('#product-img-thumbnail-box li').mouseover(function() {
                $('#product-img-thumbnail-box li').attr('class','');
                $(this).attr('class','active');

                $('#single-product-img .big-img').attr( 'src',$(this.children[0]).attr('_src') );
                $('#single-product-img .big-img').attr( '_src',$(this.children[0]).attr('_src2') );
            });

            $('#single-product-img .mask-t').hover(function() {
                $('#single-product-img .mask-y').show();
                $('#big-img-box').show();
                $('#big-img-box img').attr( 'src', $('#single-product-img .big-img').attr('_src') );

                move();
            },function() {
                $('#single-product-img .mask-y').hide();
                $('#big-img-box').hide();
            }).mousemove(move);

            function move(ev) {
                var ev = ev || window.event;
                var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                var centerX = ev.clientX - $('#single-product-img')[0].offsetLeft - $('#single-product-img .mask-y')[0].offsetWidth/2;
                var centerY = ev.clientY + scrollTop - $('#single-product-img')[0].offsetTop - $('#single-product-img .mask-y')[0].offsetHeight/2;;

                if ( centerX < 0 ) {
                    centerX = 0;
                } else if ( centerX > $('#single-product-img .mask-t')[0].offsetWidth - $('#single-product-img .mask-y')[0].offsetWidth) {
                    centerX = $('#single-product-img .mask-t')[0].offsetWidth - $('#single-product-img .mask-y')[0].offsetWidth;
                }

                if ( centerY < 0 ) {
                    centerY = 0;
                } else if ( centerY > $('#single-product-img .mask-t')[0].offsetHeight - $('#single-product-img .mask-y')[0].offsetHeight) {
                    centerY = $('#single-product-img .mask-t')[0].offsetHeight - $('#single-product-img .mask-y')[0].offsetHeight;
                }

                $('#single-product-img .mask-y').css('left', centerX).css('top', centerY);

                var scaleY = centerY / ( $('#single-product-img .mask-t')[0].offsetHeight - $('#single-product-img .mask-y')[0].offsetHeight );
                var scaleX = centerX / ( $('#single-product-img .mask-t')[0].offsetWidth - $('#single-product-img .mask-y')[0].offsetWidth );

                var minLeft = parseInt($('#big-img-box img').css('width')) - parseInt($('#big-img-box').css('width'));
                var minTop = parseInt($('#big-img-box img').css('height')) - parseInt($('#big-img-box').css('height'));
                $('#big-img-box img').css('left',-scaleX * minLeft ).css('top',-scaleY * minTop);
            }