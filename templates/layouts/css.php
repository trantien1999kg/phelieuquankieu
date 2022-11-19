<link rel="stylesheet" href="./assets/css/fontawesome/css/all.min.css">
<?php

    $css->setCache("cached");

    $css->setCss("./assets/css/all.css");

    $css->setCss("./assets/css/fonts.css");

    $css->setCss("./assets/css/normalize.css");

    $css->setCss("./assets/css/reset.css");

    $css->setCss("./assets/plugins/mmenu/mmenu.css");

    $css->setCss("./assets/css/style.css?v=".filemtime("./assets/css/style.css"));

    $css->setCss("./assets/css/grid.css?v=".filemtime("./assets/css/grid.css"));

    $css->setCss("./assets/css/responsive.css?v=".filemtime("./assets/css/responsive.css"));

    $css->setCss("./assets/css/main.css?v=".filemtime("./assets/css/main.css"));
    $css->setCss("./assets/css/vegas.css");

    echo $css->getCss();

?>

<style>
    @font-face {

font-family: 'font';

src: url('assets/images/fonts/svnaptima/SVN-Aptima.ttf') format('truetype');

}
@font-face {

font-family: 'rain';

src: url('assets/images/fonts/utmavo/rain.ttf') format('truetype');

}

@font-face {

font-family: 'svn_revolution';

src: url('assets/images/fonts/SVN Revolution.ttf') format('truetype');

font-display: swap;
font-weight: normal;

}


@font-face {

    font-family: 'fontAVO';

    src: url('assets/images/fonts/font/UTMAvo/UTMAvo.ttf') format('truetype');

}
@font-face {

font-family: 'fontAVOb';

src: url('assets/images/fonts/font/UTMAvo/UTM AvoBold.ttf') format('truetype');

}
@font-face {

font-family: 'fontAVObi';

src: url('assets/images/fonts/font/UTMAvo/UTM AvoBold_Italic.ttf') format('truetype');

}
@font-face {

font-family: 'fontAVOi';

src: url('assets/images/fonts/font/UTMAvo/UTM AvoItalic.ttf') format('truetype');

}


@font-face {

    font-family: 'font italic';

    src: url('assets/images/fonts/svnaptima/SVN-Aptima italic.ttf') format('truetype');

}

@font-face {

    font-family: 'font bold';

    src: url('assets/images/fonts/svnaptima/SVN-Aptima bold.ttf') format('truetype');

}

@font-face {

    font-family: 'font bold italic';

    src: url('assets/images/fonts/svnaptima/SVN-Aptima bold italic.ttf') format('truetype');

}


    
    @font-face {

        font-family: 'Roboto-Black';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Black.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-BlackItalic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-BlackItalic.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Bold';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Bold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-BoldItalic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-BoldItalic.ttf') format('truetype');

    }

     @font-face {

        font-family: 'Roboto-Italic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Italic.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Light';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Light.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-LightItalic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-LightItalic.ttf') format('truetype');

    }
    
    @font-face {

        font-family: 'Roboto-Medium';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Medium.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-MediumItalic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-MediumItalic.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Regular';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Regular.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Thin';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-Thin.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-ThinItalic';

        src: url('assets/images/fonts/font/FontRoboto/Roboto-ThinItalic.ttf') format('truetype');

    }

    /* Helvetica */
    @font-face {

        font-family: 'HelveticaNeue';

        src: url('assets/images/fonts/font/Helvetica/helveticaneue.ttf') format('truetype');

    }
    @font-face {

        font-family: 'UTMNokia';

        src: url('assets/images/fonts/UTMNokia.ttf') format('truetype');

    }
    
    /* End */
    
    
:root {

    --utm-nokia:'UTMNokia';

    --helvetica:'HelveticaNeue';
    
    --rbt-black:'Roboto-Black';

    --rbt-blackitalic:'Roboto-BlackItalic';

    --rbt-bold:'Roboto-Bold';

    --rbt-bolditalic:'Roboto-BoldItalic';

    --rbt-italic:'Roboto-Italic';

    --rbt-light:'Roboto-Light';

    --rbt-lightitalic:'Roboto-LightItalic';

    --rbt-medium:'Roboto-Medium';

    --rbt-mediumitalic:'Roboto-MediumItalic';

    --rbt-regular:'Roboto-Regular';

    --rbt-thin:'Roboto-Thin';

    --rbt-thin:'Roboto-ThinItalic';

    --html-bg-website: <?=$row_setting['color_page']?>;

    --html-cl-website: <?=$row_setting['color_text']?>;
  
}

</style>