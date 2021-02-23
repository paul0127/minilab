$(function () {

    $('[auto-sliderr]').each(function (idx, item) {
        var $item = $(item);

        init($item);
    });

    function init($ele) {
        var $ul = $ele.find('ul');
        var $imgList = $ul.find('li');
        var itemLen = $imgList.length;
        var sliderIdx = 0;
        var speed = 300;
        var timmer;
        var time = 5000;
        var sliderrRange = Object.keys($ele[0].attributes).map(function (key) {
            var attr = $ele[0].attributes[key];
            return { name: attr.name, value: attr.value };
        }).filter(function (attr) {
            return attr.name.indexOf('sliderr-range-') === 0;
        });
        var itemPerPage = getItemPerPageByRange(sliderrRange);
        var isCenterStyle = isFloat(itemPerPage);
        var totalPage = getTotalPage();
        var isIngoreLiWidthResize = false;
        var sliderrIngoreLiWidthResizeAttr = $ele.attr('sliderr-ingore-li-width-resize');

        if (typeof sliderrIngoreLiWidthResizeAttr !== typeof undefined && sliderrIngoreLiWidthResizeAttr !== false) {
            isIngoreLiWidthResize = true;
        }

        buildSlider();
        onClick();
        onTouch();

        function buildSlider() {
            reset();

            if( itemPerPage === 0 ) {
                $ul.css("width", "");
                $imgList.css("width", "");
                return;
            };

            var percent;
            if( isCenterStyle ) {
                percent = 100 * itemPerPage * itemLen;
            } else {
                percent = 100 / itemPerPage * itemLen;
            }
            $ul.width(percent + '%');
            if( !isIngoreLiWidthResize ) $imgList.width(100 / itemLen + '%');

            var $dot = $ele.nextAll('[sliderr-dot]');
            var aTagTemplate = '';
            if( $dot.length !== 0 ) {
                for( var i = 0; i < totalPage ; i++ ) {
                    aTagTemplate += '<a href="javascript:void(0)" class="' + ( i === 0 ? 'use' : '' ) + '" sliderr-dot-idx="' + i + '"></a>            ';
                }
                $dot.empty().append(aTagTemplate);
            }

            if( isCenterStyle ) {
                go(1);
            }
        }

        function go(idx) {
            var defaultMarginLeft = isCenterStyle ? (1 - itemPerPage) * 100 / 2: 0;
            var moveRange = isCenterStyle ? itemPerPage * 100 : 100;

            setTimmer();

            $ul.stop( true, true ).animate({
                'margin-left': ( defaultMarginLeft - idx * moveRange ) + '%'
            }, speed, function() {
                var $dot = $ele.nextAll('[sliderr-dot]').find('a');
                if( $dot.length === 0 ) return;
                $dot.removeClass('use');
                $dot.eq(idx).addClass('use');
            });
        }

        // click event
        function onClick() {
            var $left = $ele.nextAll().find('[sliderr-left]');
            var $right = $ele.nextAll().find('[sliderr-right]');

            $left.attr('href', 'javascript:void(0)');
            $right.attr('href', 'javascript:void(0)');

            $left.click(function() {
                if( sliderIdx <= 0 ) {
                    sliderIdx = totalPage - 1;
                } else {
                    sliderIdx--;
                }

                go(sliderIdx);
            });

            $right.click(function() {
                if( totalPage - 1 <= sliderIdx ) {
                    sliderIdx = 0;
                } else {
                    sliderIdx++;
                }

                go(sliderIdx);
            });

            setTimeout(function() {
                var $dot = $ele.nextAll('[sliderr-dot]').find('a');
                if( $dot.length !== 0 ) {
                    $dot.click(function() {
                        var idx = $(this).attr('sliderr-dot-idx');
                        sliderIdx = +idx;
                        go(+idx);
                    });
                }
            }, 0);
            
        }

        function onTouch() {
            if( $ul === undefined ) return;
            
            var tempMarginLeft;
            var mc = new Hammer.Manager($ul.get(0), {
                touchAction: 'auto',
                inputClass: Hammer.SUPPORT_POINTER_EVENTS ? Hammer.PointerEventInput : Hammer.TouchInput,
                recognizers: [
                    [Hammer.Pan,{ direction: Hammer.DIRECTION_HORIZONTAL }],
                ]
            });

            mc.on("panleft panright panend panstart", function(ev) {
                if( itemPerPage === 0 ) {
                    return;
                };

                switch( ev.type ) {
                    case "panstart":
                        tempMarginLeft = $ul.css('margin-left');
                        clearInterval(timmer);
                        break;
                    case "panleft":
                    case "panright":
                        $ul.css('margin-left', parseInt(tempMarginLeft) + ev.deltaX);
                        break;
                    case "panend":
                        if( ev.deltaX > 80 && sliderIdx > 0 ) {
                            if( sliderIdx <= 0 ) {
                                sliderIdx = totalPage - 1;
                            } else {
                                sliderIdx--;
                            }
                            go(sliderIdx);
                        } else if ( ev.deltaX < -80 && sliderIdx < (totalPage - 1) ) {
                            if( totalPage - 1 <= sliderIdx ) {
                                sliderIdx = 0;
                            } else {
                                sliderIdx++;
                            }
                            go(sliderIdx);
                        } else {
                            $ul.css('margin-left', tempMarginLeft);
                            setTimmer();
                        }
                        break;
                }
            });
        }

        function reset() {
            var defaultMarginLeft = isCenterStyle ? (1 - itemPerPage) * 100 / 2: 0;
            $ul.css('margin-left', defaultMarginLeft + '%');
            sliderIdx = 0;
            setTimmer();
            //dot
            var $dot = $ele.nextAll('[sliderr-dot]').find('a');
            if( $dot.length !== 0 ) {
                $dot.removeClass('use');
                $dot.eq(0).addClass('use');
            }
        }

        $(window).resize(function() {
            var newItemPerPage = getItemPerPageByRange(sliderrRange);
            if( itemPerPage !== newItemPerPage ) {
                itemPerPage = newItemPerPage;
                isCenterStyle = isFloat(itemPerPage);
                totalPage = getTotalPage();
                buildSlider();
            } else {
                reset();
            }
        });

        function setTimmer() {
            clearInterval(timmer);

            if( itemPerPage === 0 ) {
                return;
            }

            timmer = setInterval(function() {
                if( totalPage - 1 <= sliderIdx ) {
                    sliderIdx = 0;
                } else {
                    sliderIdx++;
                }

                go(sliderIdx);
            }, time);
        }

        function getItemPerPageByRange(range) {
            var width = $(window).width();
            var itemPerPage = 0;

            range.forEach(function(val, idx) {
                var temp = val.name.replace('sliderr-range-', '').split('-');
                var start = temp[0];
                var end = temp[1] || 999999;

                if( width > +start && width < +end ) {
                    itemPerPage = +val.value;
                }
            });

            return itemPerPage;
        }

        function getTotalPage() {
            if( isCenterStyle ) {
                return itemLen;
            } else {
                return Math.ceil(itemLen / itemPerPage);
            }
        }

        function isFloat(n){
            return Number(n) === n && n % 1 !== 0;
        }
    }

});