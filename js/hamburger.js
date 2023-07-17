jQuery( function () {
    let timer = 0;
    $( ".js-hamburger--bt" ).click( function() {
        $( this ).toggleClass( "is-open" );
        $( ".js-hamburger" ).toggleClass( "is-open" );
        $( "body" ).toggleClass( "is-open" );
    })
    $( window ).on( "resize", function() {
        let pcWidth = 769;
        if( timer > 0 ) {
            clearTimeout( timer );
        }
        timer = setTimeout( function() {
            //resizedWidth 今のwindowの幅 innerWidth windowの幅 見ている人のwindowの幅 bodyの幅
            //現在のwindow幅がpcWidthよりも大きくなったら.is-openが外れる操作
            let resizedWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if( resizedWidth >= pcWidth ) {
                $( ".js-hamburger--bt" ).removeClass( ".is-open" );
                $( ".js-hamburger" ).removeClass( ".is-open" );
                $( "body" ).removeClass( ".is-open" );
            }
        }, 200 );
    })
})
