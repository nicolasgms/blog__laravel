<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tableau de bord</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style media="screen">
    /*! CSS Used from: Embedded */
.MuiButtonBase-root{color:inherit;border:0;cursor:pointer;margin:0;display:inline-flex;outline:0;padding:0;position:relative;align-items:center;user-select:none;border-radius:0;vertical-align:middle;-moz-appearance:none;justify-content:center;text-decoration:none;background-color:transparent;-webkit-appearance:none;-webkit-tap-highlight-color:transparent;}
.MuiButtonBase-root::-moz-focus-inner{border-style:none;}
@media print{
.MuiButtonBase-root{-webkit-print-color-adjust:exact;}
}
/*! CSS Used from: Embedded */
.MuiButton-root{color:rgba(0, 0, 0, 0.87);padding:6px 16px;font-size:0.875rem;min-width:64px;box-sizing:border-box;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:500;line-height:1.75;border-radius:4px;text-transform:uppercase;}
.MuiButton-root:hover{text-decoration:none;background-color:rgba(0, 0, 0, 0.04);}
@media (hover: none){
.MuiButton-root:hover{background-color:#3D40FF;}
}
.MuiButton-label{width:100%;display:inherit;align-items:inherit;justify-content:inherit;}
.MuiButton-outlined{border:1px solid rgba(0, 0, 0, 0.23);padding:5px 15px;}
.MuiButton-disableElevation{box-shadow:none;}
.MuiButton-disableElevation:hover{box-shadow:none;}
.MuiButton-disableElevation:active{box-shadow:none;}
.MuiButton-fullWidth{width:100%;}
/*! CSS Used from: Embedded */
.jss57{margin:8px;display:flex;padding:10px 12px;font-size:1.5rem;font-weight:700;line-height:24px;white-space:nowrap;border-radius:4px;letter-spacing:0.35px;text-transform:inherit;background-color:white;}
.jss57:focus{outline:none;}
.jss57:hover{background-color:#E5E5E5;}
/*! CSS Used from: Embedded */
.jss77{font-size:1.6rem;font-weight:700;line-height:1.5;letter-spacing:0.5px;}
/*! CSS Used from: https://www.educative.io/_next/static/css/916796c7d64a879b9de4.css */
a{background-color:transparent;}
a:active,a:hover{outline:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,:after,:before{background:0 0!important;box-shadow:none!important;color:#000!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
p{orphans:3;widows:3;}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
p{margin:0 0 10px;}
/*! CSS Used from: Embedded */
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.epBefi{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;align-self:center;flex:0 0 auto;width:100%;max-width:1024px;margin-top:15px;}
.zWiuY{display:flex;width:100%;height:100%;}
.cPlcLj{display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.cPlcLj:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.cPlcLj{margin:5px;}
}
.habppD{width:90px;height:90px;overflow:visible;}
.habppD > svg{height:90px;width:90px;overflow:visible;}
/*! CSS Used fontfaces */
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-regular-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-regular-latin.woff) format("woff");font-weight:400;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-regular-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-regular-nonlatin.woff) format("woff");font-weight:400;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-italic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-italic-latin.woff) format("woff");font-weight:400;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-italic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-italic-nonlatin.woff) format("woff");font-weight:400;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralight-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralight-latin.woff) format("woff");font-weight:200;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralight-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralight-nonlatin.woff) format("woff");font-weight:200;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralightitalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralightitalic-latin.woff) format("woff");font-weight:200;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralightitalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extralightitalic-nonlatin.woff) format("woff");font-weight:200;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-light-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-light-latin.woff) format("woff");font-weight:300;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-light-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-light-nonlatin.woff) format("woff");font-weight:300;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-lightitalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-lightitalic-latin.woff) format("woff");font-weight:300;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-lightitalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-lightitalic-nonlatin.woff) format("woff");font-weight:300;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibold-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibold-latin.woff) format("woff");font-weight:600;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibold-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibold-nonlatin.woff) format("woff");font-weight:600;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibolditalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibolditalic-latin.woff) format("woff");font-weight:600;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibolditalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-semibolditalic-nonlatin.woff) format("woff");font-weight:600;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bold-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bold-latin.woff) format("woff");font-weight:700;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bold-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bold-nonlatin.woff) format("woff");font-weight:700;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bolditalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bolditalic-latin.woff) format("woff");font-weight:700;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bolditalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-bolditalic-nonlatin.woff) format("woff");font-weight:700;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabold-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabold-latin.woff) format("woff");font-weight:800;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabold-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabold-nonlatin.woff) format("woff");font-weight:800;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabolditalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabolditalic-latin.woff) format("woff");font-weight:800;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabolditalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-extrabolditalic-nonlatin.woff) format("woff");font-weight:800;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-black-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-black-latin.woff) format("woff");font-weight:900;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-black-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-black-nonlatin.woff) format("woff");font-weight:900;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-blackitalic-latin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-blackitalic-latin.woff) format("woff");font-weight:900;font-style:italic;unicode-range:U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Nunito Sans";font-display:swap;src:url(https://www.educative.io/static/fonts/nunitosans/nunitosans-blackitalic-nonlatin.woff2) format("woff2"), url(https://www.educative.io/static/fonts/nunitosans/nunitosans-blackitalic-nonlatin.woff) format("woff");font-weight:900;font-style:italic;unicode-range:U+100-130, U+132-151, U+154-2BA, U+2BD-2C5, U+2C7-2D9, U+2DB, U+2DD-1FFF, U+2070-2073, U+2075-20AB, U+20AD-2121, U+2123-2190, U+2192, U+2194-2211, U+2213, U+2214, U+2216-FEFE, U+FF00-FFFC, U+FFFE, U+FFFF;}
</style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Tableau de bord') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-align: right;">
                                    Parametres
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
