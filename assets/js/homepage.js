

    $('.home-bg, .menu-wrap, .soc-wrap, .logo-wrap-t, .more-menu').colorScroll({
        colors: [
            {
                color: '#00BCDD',
                position: '0%'
            },
            {
                color: '#FFD03E',
                position: '22%'
            },
            {
                color: '#AA7BC9',
                position: '44%'
            },
            {
                color: '#60C5BA',
                position: '66%'
            },
            {
                color: '#EB6852',
                position: '88%'
            }
        ]
    });

    $('.nav-side-bg, .logo-wrap, .nav-bot, #our-work-menu, .dropdown').colorScroll({
        colors: [
            {
                color: '#00AFD4',
                position: '0%'
            },
            {
                color: '#FFC627',
                position: '22%'
            },
            {
                color: '#906FB4',
                position: '44%'
            },
            {
                color: '#26B8B0',
                position: '66%'
            },
            {
                color: '#E95944',
                position: '88%'
            }
        ]
    });

    if ( $(window).width() > 767) {
        $('.home-sections').snapscroll();
    }