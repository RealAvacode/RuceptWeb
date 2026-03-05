<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<!-- Page Title -->
		<title>Rucept</title>

		<!-- Fonts and Material Icons -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700|Material+Icons" rel="stylesheet" type="text/css"/>
		

		<!-- Styles -->
		<link href="css/slides.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
		<!-- Custom Styles -->
		<!--link href="css/custom.css" rel="stylesheet" type="text/css"-->

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="js/plugins.js" type="text/javascript" name="plugins"></script>
		<script src="js/slides.js" type="text/javascript" name="main-scripts"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.0.20/jquery.mb.YTPlayer.min.js"></script>

		<!-- Custom Scripts -->
		<!--script src="js/custom.js" type="text/javascript" name="custom-scripts"></script-->
		 
	</head>
	<body class="slides stack smooth fast smoothScroll animated">
		

<!-- SVG Library -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
  
  <symbol id="logo" viewBox="0 0 106 31"><title>Rucept</title><path d="M17.413 14.04c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52zm2.222 15.96h6.64v-29.6h-6.64v29.6zm9.662-24.56h6.64v-5.04h-6.64v5.04zm0 24.56h6.64v-22.2h-6.64v22.2zm32.782-29.6h-6.64v9.28c-.72-.72-2.6-2.64-6.52-2.64-5.64 0-11 4.28-11 11.8 0 6.68 4.4 11.88 11.12 11.88 4.48 0 6.08-2.2 6.72-3.12v2.4h6.32v-29.6zm-17.52 18.4c0-2.56 1.8-5.56 5.64-5.56 1.56 0 2.96.56 3.96 1.56 1 .96 1.64 2.32 1.64 3.92.08 1.64-.52 3.08-1.56 4.12s-2.52 1.68-4.12 1.68c-3.12 0-5.56-2.28-5.56-5.68v-.04zm42.502 2.4c.52-4.08-.32-7.64-3.12-10.64-2.08-2.2-5-3.52-8.4-3.52-6.76 0-11.64 5.72-11.64 11.92 0 6.6 5.4 11.76 11.76 11.76 2.28 0 4.48-.68 6.32-2 1.88-1.28 3.44-3.2 4.52-5.68h-6.8c-.8 1.16-1.92 2.08-4.04 2.08-2.6 0-4.84-1.56-5.12-3.92h16.52zm-16.44-5.04c.16-1.04 1.52-3.52 4.96-3.52s4.8 2.48 4.96 3.52h-9.92zm34.502-2.12c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52z"/></symbol>
  
  <symbol id="logo-icon" viewBox="0 0 50 41"><title>Brand Name</title><path d="M4,12h42c2.2,0,4,1.8,4,4v21c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V16C0,13.8,1.8,12,4,12z"/><path opacity="0.6" d="M45.5,9h-41C3.7,9,3,8.3,3,7.5v0C3,6.7,3.7,6,4.5,6h41C46.3,6,47,6.7,47,7.5v0C47,8.3,46.3,9,45.5,9z"/><path opacity="0.4" d="M7.5,0h35C43.3,0,44,0.7,44,1.5v0C44,2.3,43.3,3,42.5,3h-35C6.7,3,6,2.3,6,1.5v0C6,0.7,6.7,0,7.5,0z"/></symbol>
  
  <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>
  
  <symbol id="close-small" viewBox="0 0 11 11"><path d="M6.914 5.5l3.793-3.793c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-3.793 3.793-3.793-3.793c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l3.793 3.793-3.793 3.793c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l3.793-3.793 3.793 3.793c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023 0-1.414l-3.793-3.793z"/></symbol>

  <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>
  
  <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>
  
  <symbol id="back" viewBox="0 0 20 20"><path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/></symbol>
  
  <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>
  
  <symbol id="share" viewBox="0 0 22 22"><path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z"/></symbol>
  
  <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>
  
  <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>
  
  <symbol id="arrow-top" viewBox="0 0 24 24"><path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/></symbol>

  <symbol id="drop-down" viewBox="0 0 16 16"><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,5 8,12 15,5" fill="none"></polyline></symbol>
  
  <symbol id="play" viewBox="0 0 30 30"><path d="M7 30v-30l22 15z"/></symbol>
  
  <symbol id="login" viewBox="0 0 22 22"><path d="M13 2c0 .6.4 1 1 1h6v16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2h-6c-.6 0-1 .4-1 1zm-6.5 3.5c0 .3.1.5.3.7l3.8 3.8h-9.6c-.6 0-1 .4-1 1s.4 1 1 1h9.6l-3.8 3.8c-.2.2-.3.5-.3.7s.1.5.3.7c.4.4 1 .4 1.4 0l5.5-5.5c.1-.1.2-.2.2-.3.1-.2.1-.5 0-.8l-.2-.3-5.5-5.5c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7z"/></symbol>
  
  <symbol id="chat" viewBox="0 0 22 22"><path d="M11 22c-.1 0-.3 0-.4-.1-.4-.1-.6-.5-.6-.9v-4h-7.8c-1.2 0-2.2-1-2.2-2.2v-11.6c0-1.2 1-2.2 2.2-2.2h17.7c1.1 0 2.1 1 2.1 2.2v11.7c0 1.2-1 2.2-2.2 2.2h-3.4l-4.7 4.7c-.2.1-.4.2-.7.2zm-8.8-19c-.1 0-.2.1-.2.2v11.7s.1.1.2.1h8.8c.6 0 1 .4 1 1v2.6l3.3-3.3c.2-.2.4-.3.7-.3h3.8c.1 0 .2-.1.2-.2v-11.6c0-.1-.1-.2-.2-.2h-17.6zM5 6h6v2h-6zM5 10h10v2h-10z"/></symbol>
  
  <symbol id="mail" viewBox="0 0 22 22"><path d="M19.8 2h-17.6c-1.2 0-2.2 1-2.2 2.2v13.5c0 1.3 1 2.3 2.2 2.3h17.5c1.2 0 2.2-1 2.2-2.2v-13.6c.1-1.2-.9-2.2-2.1-2.2zm-17.6 2h17.5c.2 0 .3.1.3.2v.3l-9 6.3-9-6.3v-.3c0-.1.1-.2.2-.2zm17.6 14h-17.6c-.1 0-.2-.1-.2-.2v-10.9l8.1 5.7c.3.2.6.3.9.3.3 0 .6-.1.9-.3l8.1-5.7v10.9c0 .1-.1.2-.2.2z"/></symbol>

  <symbol id="sound-on" viewBox="0 0 22 22"><path d="M15 15c-.2 0-.4-.1-.6-.2-.4-.3-.5-1-.2-1.4.5-.7.8-1.5.8-2.4s-.3-1.7-.8-2.4c-.3-.4-.2-1.1.2-1.4.4-.3 1.1-.2 1.4.2.8 1 1.2 2.3 1.2 3.6s-.4 2.6-1.2 3.6c-.2.3-.5.4-.8.4zm4 2.3c-.2 0-.5-.1-.7-.2-.4-.4-.5-1-.1-1.4 1.2-1.3 1.8-3 1.8-4.7 0-1.8-.7-3.5-1.9-4.8-.4-.4-.4-1 0-1.4s1-.4 1.4 0c1.6 1.7 2.5 3.9 2.5 6.2 0 2.2-.8 4.3-2.2 6-.2.2-.5.3-.8.3zm-9 2.7c-.2 0-.4-.1-.6-.2l-4.8-3.8h-2.1c-1.4 0-2.5-1.1-2.5-2.5v-5c0-1.4 1.1-2.5 2.5-2.5h2.2l4.7-3.8c.3-.2.7-.3 1.1-.1.3.2.5.5.5.9v16c0 .4-.2.7-.6.9-.1.1-.3.1-.4.1zm-7.5-12c-.3 0-.5.2-.5.5v5c0 .3.2.5.5.5h2.5c.2 0 .4.1.6.2l3.4 2.7v-11.8l-3.4 2.7c-.2.1-.4.2-.6.2h-2.5z"/></symbol>
  
  <symbol id="sound-off" viewBox="0 0 22 22"><path d="M10.434 2.098c-.347-.165-.758-.119-1.058.121l-4.726 3.781h-2.154c-1.376 0-2.496 1.12-2.496 2.496v5.009c0 1.376 1.12 2.495 2.496 2.495h2.153l4.726 3.781c.181.145.402.219.625.219.147 0 .295-.032.433-.099.347-.167.567-.516.567-.901v-16c0-.384-.22-.735-.566-.902zm-1.434 14.821l-3.375-2.7c-.178-.142-.398-.219-.625-.219h-2.504c-.274 0-.496-.222-.496-.495v-5.009c0-.274.222-.496.496-.496h2.504c.227 0 .447-.077.625-.219l3.375-2.7v11.838zM19.414 11l2.293-2.293c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-2.293 2.293-2.293-2.293c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l2.293 2.293-2.293 2.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l2.293-2.293 2.293 2.293c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023 0-1.414l-2.293-2.293z"/></symbol>
  
  <!-- social -->
  <symbol id="apple" viewBox="-1 1 24 24"><path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/></symbol>

  <symbol id="dribbble" viewBox="0 0 24 24"><path d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/></symbol>

  <symbol id="facebook" viewBox="0 0 24 24"><path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/></symbol>
   
  <symbol id="fb-like" viewBox="0 0 20 20"><path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/></symbol>
  
  <symbol id="googlePlus" viewBox="0 1 24 24"><path d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z"/></symbol>
  
  <symbol id="instagram" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1.1.4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1.1.4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1.1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.3-2.3.2-.6.5-1 .9-1.4.5-.4.9-.6 1.4-.9.4-.1 1.1-.3 2.3-.4h4.8m0-2.2c-3.3 0-3.7 0-4.9.1-1.3 0-2.2.2-3 .5-.7.3-1.4.7-2.1 1.4-.7.7-1.1 1.4-1.4 2.1-.3.8-.5 1.7-.5 3-.1 1.2-.1 1.6-.1 4.9 0 3.3 0 3.7.1 4.9.1 1.3.3 2.1.6 2.9.2.8.6 1.5 1.3 2.2.7.7 1.3 1.1 2.1 1.4.8.3 1.6.5 2.9.6h5s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.1-1.4.7-.7 1.1-1.3 1.4-2.1.3-.8.5-1.6.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.2-.8-.6-1.5-1.3-2.2-.7-.7-1.3-1.1-2.1-1.4-.8-.3-1.6-.5-2.9-.6h-5zM12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/><circle class="st0" cx="18.4" cy="5.6" r="1.4"/></symbol>
  
  <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>

  <symbol id="medium" viewBox="0 0 24 24"><path d="M7.601 5.357c-2.305-1.137-4.6-2.294-6.899-3.444-.577-.289-.694-.216-.694.43-.001 5.147.005 10.294-.008 15.441-.001.57.224.911.726 1.158 2.126 1.047 4.242 2.116 6.362 3.176l.326.151c.308.115.494-.016.562-.315.032-.14.02-.283.02-.438l.009-15.482c.002-.337-.091-.523-.404-.677zm15.983-.001c-2.369-1.184-4.74-2.366-7.101-3.565-.368-.187-.559-.114-.769.231-1.431 2.356-2.876 4.703-4.328 7.046-.144.233-.15.4-.004.637 1.605 2.593 3.198 5.193 4.795 7.79l.238.36.107-.138c2.426-3.948 4.848-7.898 7.283-11.841.204-.33.01-.405-.221-.52zm.413 16.185c.001-4.694.001-9.387.001-14.081v-.38l-.076-.023-7.257 11.812.257.156c2.095 1.05 4.191 2.098 6.287 3.146l.219.097c.314.112.489-.032.554-.329.027-.128.015-.265.015-.398zm-15.273-14.526c-.001 2.547.003 5.093-.008 7.64-.001.234.105.321.285.411 2.204 1.1 4.405 2.205 6.608 3.307l.333.12-7.183-11.692-.035.214z"/></symbol>
  
  <symbol id="pinterest" viewBox="0 0 24 24"><path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/></symbol>
  
  <symbol id="stumbleupon" viewBox="0 0 24 24"><path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/></symbol>
  
  <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>
  
  <symbol id="tumblr" viewBox="0 0 23 23"><path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/></symbol>

  <symbol id="xing" viewBox="0 0 24 24"><path d="M3.647 4.74c-.208 0-.384.073-.472.216-.091.148-.077.338.02.531l2.34 4.051v.02l-3.678 6.49c-.096.191-.091.383 0 .531.088.142.244.236.452.236h3.461c.518 0 .767-.349.944-.669l3.737-6.608-2.38-4.15c-.172-.307-.433-.649-.964-.649h-3.46zm14.542-4.74c-.517 0-.741.326-.927.659l-7.702 13.658 4.918 9.023c.172.307.437.659.967.659h3.457c.208 0 .371-.079.459-.221.092-.148.09-.343-.007-.535l-4.88-8.915v-.023l7.664-13.551c.096-.191.098-.386.007-.534-.088-.142-.252-.221-.46-.221h-3.496z"/></symbol>
  
  <symbol id="youtube" viewBox="0 0 24 24"><path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/></symbol>

</svg>

<!-- Navigation -->
<nav class="side">
  <div class="navigation">
    <ul></ul>
  </div>
</nav>
<!-- Panel Top #06 -->
<nav class="panel top">
  <div class="sections">
    <div class="left"><a href="#" title="Rucept"><img id="chng" src="white_logo.png" /></a></div>
    <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
  </div>
</nav>

<!-- Sidebar --> 
<nav class="sidebar deepPurple" data-sidebar-id="1">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <a href="#" title="Rucept"><img  src="white_logo.png" /></a>
   
    <ul class="subMenu">
      <li><a href="#"> </a></li>
      <li><a href="#">Merchandise Now</a></li>
      <li><a href="#">How Rucept Works</a></li>
      <li><a href="#">Instant Revenue</a></li>
      <li><a href="#">Made for You</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Marketplaces</a></li>
      <li><a href="#">Factories</a></li>
      <li><a href="#">Pricing</a></li>
      <li><a href="#">FAQs</a></li>
      <li><a href="#">Testimonials</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="social">
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg></a></li>
    </ul>
  </div>
</nav>

<!-- Slide 1 (#21) -->
<section class="slide fade kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12">
          <h1 class="huge ae-1">Merchandising Unbound</h1>
          <div class="ae-2"><p class="hero">Rucept is a zero hassle end to end merchandising solution for creators, content aggregators, and celebrities</p></div>
          <a class="button crop pink ae-3">Merchandise Now</a>
          <div class="button play white small popupTrigger toCenter ae-6 fromCenter block margin-top-5" data-popup-id="21-0">
            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" id="player" data-property="{videoURL:'https://youtu.be/9uxhT1izgJE',containment:'self',startAt:0,mute:false,autoPlay:true,loop:true,opacity:1,printUrl:false}" ></div>
</section>

<!-- Popup Video -->
<div class="popup autoplay" data-popup-id="21-0">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/101231747?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slide 2 (#74) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12 toCenter">
          <h1 class="ae-1">How Rucept Works</h1>
          <div class="ae-2"><p>Our creative services and integrated platform ensure high quality assets turn into hundreds of products which are sold all over the world in an inventory free made on demand model</p></div>
        </div>
        <div class="fix-12-12">  
          <ul class="grid grid-74 later equal left margin-top-5">
            <li class="col-3-12 ae-3 fromCenter">
              <a href="#" class="box-74">
                <div class="thumbnail-74">
                  <img src="assets/img/inner-74-1.jpg" class="wide" alt="Thumbnail"/>
                </div>
                <div class="name-74 equalElement table wide">
                  <div class="cell">
                    <h3 class="big">Content Creation</h3>
                    <div class="description-74">We create original content unique to your brand aesthetic that speaks to your audience</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-3-12 ae-4 fromCenter">
              <a href="#" class="box-74">
                <div class="thumbnail-74">
                  <img src="assets/img/inner-74-2.jpg" class="wide" alt="Thumbnail"/>
                </div>
                <div class="name-74 equalElement table wide">
                  <div class="cell">
                    <h3 class="big">Product Catalogs</h3>
                    <div class="description-74">All creative assets made by us or provided by you are placed on hundreds of products, creating digital catalogs</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-3-12 ae-5 fromCenter">
              <a href="#" class="box-74">
                <div class="thumbnail-74">
                  <img src="assets/img/inner-74-3.jpg" class="wide" alt="Thumbnail"/>
                </div>
                <div class="name-74 equalElement table wide">
                  <div class="cell">
                    <h3 class="big">Multichannel Listing</h3>
                    <div class="description-74">Our API integrated and manual listing tools bring your products to dozens of sites worldwide</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-3-12 ae-5 fromCenter">
              <a href="#" class="box-74">
                <div class="thumbnail-74">
                  <img src="assets/img/inner-74-4.jpg" class="wide" alt="Thumbnail"/>
                </div>
                <div class="name-74 equalElement table wide">
                  <div class="cell">
                    <h3 class="big">Worldwide Fulfillment</h3>
                    <div class="description-74">Our AI automatically finds manufacturer best suited to deliver products made on demand post customer purchase</div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
                
      </div>
    </div>
  </div>
</section>

<!-- Slide 3 (#29) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-12-12">
          <ul class="flex verticalCenter">
            <li class="col-5-12 ae-1 cell-29">
              <img src="assets/img/iphone-7.png" class="iphone-29" alt="iPhone Thumbnail" data-action="zoom"/>
            </li>
            <li class="col-7-12 left">
              <h1 class="ae-1 fromLeft">Instant Revenue</h1>
              <div class="ae-2 fromLeft">
                <p>Eliminate long merchandising setup cycles times with our platform. Start building catalogs, listing and generating revenue right away, while retainin rights to your products</p>
              </div>
              <a class="button round pink ae-3 fromCenter crop">Start free trial</a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- Slide 4 (#70) -->
<section class="slide fade kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <div class="fix-12-12">  
          <ul class="grid fixedSpaces equal fromCenter">
            <h1>Rucept Is For Creators</h1>
          </ul>
          <ul class="grid fixedSpaces equal fromCenter">
            <li class="col-4-12">
              <a href="#" class="box-70 ae-1" style="background-color:#BDD6D3;">
                <div class="thumbnail-70">
                  <img class="wide" src="assets/img/70-grid-1.png" alt="Image">
                </div>
                <div class="info-70">
                  <div class="category-70">100% Creative</div>
                  <h3 class="big title-70">For Artists</h3>
                  <p class="small equalElement">Retain creative control by designing your own products and catalogs with existing assets</p>
                  <div class="button pink wide crop">Learn More</div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-70 ae-2" style="background-color:#C3CCDD;">
                <div class="thumbnail-70">
                  <img class="wide" src="assets/img/70-grid-2.png" alt="Image">
                </div>
                <div class="info-70">
                  <div class="category-70">100% Business</div>
                  <h3 class="big title-70">For Content Sites</h3>
                  <p class="small equalElement">Open up new revenue streams for your high traffic content site with owner or affiliate model</p>
                  <div class="button pink wide crop">Learn More</div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-70 ae-3" style="background-color:#D9D5C5;">
                <div class="thumbnail-70">
                  <img class="wide" src="assets/img/70-grid-3.png" alt="Image">
                </div>
                <div class="info-70">
                  <div class="category-70">100% Exposure</div>
                  <h3 class="big title-70">For Celebrities</h3>
                  <p class="small equalElement">Make the most of your media footprint by introducing products designed for you to your fan base</p>
                  <div class="button pink wide crop">Learn More</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        
      </div> 
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/img-70.jpg)"></div>
</section>

<!-- Slide 5 (#69) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12 toCenter">
          <h1 class="ae-1">We Make All Products</h1>
          <div class="ae-2"><p>Rucept enables you to access the worlds biggest made to order product catalog exclusively through our platform</p></div>
        </div>
        <div class="fix-12-12">  
          <ul class="grid grid-69 later equal equalMobile popupTrigger controller" data-popup-id="69-4" data-slider-id="69-4">
            <li class="col-4-12">
              <a href="#" class="box-69 ae-3 equalElement selected" style="background-image:url(gif/200w_d.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">34 Products</div>
                    <div class="title-69">Direct to Garment Prints</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-69 ae-4 equalElement" style="background-image:url(gif/200w_d_1.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">22 Products</div>
                    <div class="title-69">Sublimation Prints</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-69 ae-5 equalElement" style="background-image:url(gif/200w_d_2.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">63 Products</div>
                    <div class="title-69">Fashion Accessories</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-69 ae-6 equalElement" style="background-image:url(gif/200w_d_3.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">51 Products</div>
                    <div class="title-69">Home Decor</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-69 ae-7 equalElement" style="background-image:url(gif/200w_d_4.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">29 Products</div>
                    <div class="title-69">Footwear</div>
                  </div>
                </div>
              </a>
            </li>
            <li class="col-4-12">
              <a href="#" class="box-69 ae-8 equalElement" style="background-image:url(gif/200w_d_5.gif);">
                <div class="table cell-69 equalElement">
                  <div class="cell">
                    <div class="category-69">42 Products</div>
                    <div class="title-69">Paper and Stationery</div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Popup Gallery -->
<div class="popup animated" data-popup-id="69-4">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
      
        <ul class="slider inlineBlock clickable popupContent ae-1 fromCenter disableSelect" data-slider-id="69-4" style="display: inline-block;">
          <li class="selected"><img src="assets/img/grid-1-preview.jpg" class="selected" alt="Image"/></li>
          <li><img src="assets/img/grid-2-preview.jpg" alt="Image"/></li>
          <li><img src="assets/img/grid-3-preview.jpg" alt="Image"/></li>
          <li><img src="assets/img/grid-4-preview.jpg" alt="Image"/></li>
          <li><img src="assets/img/grid-5-preview.jpg" alt="Image"/></li>
          <li><img src="assets/img/grid-6-preview.jpg" alt="Image"/></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>

<!-- Slide 6 (#68) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12 toCenter">
          <h1 class="ae-1">We Sell on Major Sites</h1>
          <div class="ae-2"><p>List catalogs of products on <a href="https://rucept.net/"> over 30 </a> major global eCommerce marketplace for unparalleled and cost effective multichannel selling integrations</p></div>
        </div>
        <div class="fix-12-12">
          <!-- remove class tintLogos to disable color change of logo images -->
          <ul class="grid grid-68 equal later">
            <li class="col-2-12">
              <div class="table wide equalElement ae-3">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/amazon.jpg" alt="BBC"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-4">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/amazon.jpg" alt="Google"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-5">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/Rakuten_logo.svg.png" alt="Apple"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-6">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/logo-lazada1.png" alt="Canon"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-7">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/Paytm_logo.png" alt="Nike"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-8">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/youtube_PNG21.png" alt="Green Peace"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-3">
                <div class="cell">
                 <img width="124" src="eCommerceLogos/New_Walmart_Logo.png" alt="Facebook"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-4">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/lazada-logos-05-1.png" alt="Audi"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-5">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/acouk_logo_rgb_large.jpg" alt="Warner Bros"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-6">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/taobao.png" alt="Microsoft"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-7">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/instagram-logo-transparent_258555.jpg" alt="Coca Cola"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-8">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/2000px-EBay_logo.svg.png" alt="Reebok"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-3">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/nLogo.png" alt="Adidas"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-4">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/logo-amazon-fr.png" alt="Vimeo"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-5">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/fnac-logo.png" alt="NBC"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-6">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/facebook-logo-vector-400x400.png" alt="Sony"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-7">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/Etsy_logo.png" alt="PlayStation"/>
                </div>
              </div>
            </li>
            <li class="col-2-12">
              <div class="table wide equalElement ae-8">
                <div class="cell">
                  <img width="124" src="eCommerceLogos/Jabong_logo_logotype.png" alt="National Geographic"/>
                </div>
              </div>
            </li>
          </ul>
        </div>
                
      </div>
    </div>
  </div>
</section>

<!-- Slide 7 (#36) -->
<section class="slide fade kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap top">
      
        <div class="fix-10-12 toCenter">
          <img class="margin-bottom-1 ae-1 fromCenter" src="assets/img/icon-36.png" alt="App Icon" width="70"/>
          <div class="ae-2"><p class="hero">We Manufacture Everywhere</p></div>
          <h1 class="ae-3">Over Two Dozen Factories</h1>
          <div class="ae-4"><p>Our AI combs through product pricing and shipping data to determine the fastest, cheapest way to make and ship anywhere </p></div>
        </div>
        <div class="fix-12-12 ae-5">
          <img class="ipad-36" src="assets/img/ipad-36.png" data-action="zoom" alt="iPad App"/>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/img-36.jpg)"></div>
</section>

<!-- Slide 8 (#85) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-12-12">
          <h1 class="ae-1">Flexible Pricing</h1>
          <ul class="grid noSpaces equal grid-85 ae-2 fromCenter dicoder-pircing">
            <li class="col-3-12 tint-85 ae-3" id="price-di-one">
              <h3 class="small uppercase ae-4">New Content Design</h3>
              <div class="price-85 ae-5"><span class="currency-85">$</span>25</div>
              <div class="ae-5"><div class="h4 uppercase bold small opacity-6 margin-top-2" style="min-height: 34px">Per image created</div></div>
              <div class="features-85 equalElement ae-6">
                <ul>
                  <li><strong>Made for product masking</strong></li>
                  <li><strong>Pattern, print, or design</strong></li>
                  <li class="opacity-7">Bulk pricing for set of 8</li>
                  <li class="opacity-7">Made with data, client input</li>
                </ul>
              </div>
              <a href="#" class="button teal wide cropBottom ae-7">Design My Content </a>
            </li>
            <li class="col-3-12 ae-4" id="price-di-two">
              <h3 class="small uppercase ae-5">Product Creation</h3>
              <div class="price-85 ae-6"><span class="currency-85">$</span>4</div>
              <div class="ae-6"><div class="h4 uppercase bold small opacity-6 margin-top-2" style="min-height: 34px">Price per 10 SKUs</div></div>
              <div class="features-85 equalElement ae-7">
                <ul>
                  <li><strong>250+ photorealistic products</strong></li>
                  <li><strong>Mock ups by virtual assistant</strong></li>
                  <li class="opacity-7">Amazon compliant products</li>
                  <li class="opacity-7">Minimum 100 SKUs</li>
                </ul>
              </div>
              <a href="#" class="button pink wide cropBottom ae-8">Make Products For Me</a>
            </li>
            <li class="col-3-12 ae-5" id="price-di-three">
              <h3 class="small uppercase ae-6">Multichannel Listing</h3>
              <div class="price-85 ae-7"><span class="currency-85">$</span>50</div>
              <div class="ae-7"><div class="h4 uppercase bold small opacity-6 margin-top-2" style="min-height: 34px">Price per channel</div></div>
              <div class="features-85 equalElement ae-8">
                <ul>
                  <li><strong>Unlimited listings</strong></li>
                  <li><strong>Includes seller fees</strong></li>
                  <li class="opacity-7">100% Managed by Rucept</li>
                  <li class="opacity-7">Ebay and Etsy priced differently</li>
                </ul>
              </div>
              <a href="#" class="button pink wide cropBottom ae-9">List Worldwide</a>
            </li>
            <li class="col-3-12 ae-6" id="price-di-four">
              <h3 class="small uppercase ae-7">Global Fulfillment</h3>
              <div class="price-85 ae-8">10<span class="currency-85 currency-85-dicoder">%</span></div>
              <div class="ae-8"><div class="h4 uppercase bold small opacity-6 margin-top-2" style="min-height: 34px">Of Net Profit</div></div>
              <div class="features-85 equalElement ae-9">
                <ul>
                  <li><strong>On demand manufacturing</strong></li>
                  <li><strong>Low prices = high margins</strong><span class="helpBubble"><div class="helpMessage">The most innovative designers <strong>consciously</strong> reject the standard and cultivate.</div></span></li>
                  <li class="opacity-7">Global shipping and returns</li>
                  <li class="opacity-7">24/7 Customer Support</li>
                </ul>
              </div>
              <a href="#" class="button pink wide cropBottom ae-10">Manage my Fulfillment</a>
            </li>
          </ul>
        </div> 
        
      </div>
    </div>
  </div>
</section>

<!-- Slide 9 (#63) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
          
        <div class="fix-12-12">
          <div class="fix-10-12 toCenter">
            <h1 class="ae-1">Frequently Asked Questions</h1>
            <div class="ae-2"><p>Ecommerce is hard. Rucept is easy. See how below. </p></div>
          </div>
          <ul class="flex left margin-top-6">
            <li class="col-6-12 margin-bottom-1 ae-3">
              <h3 class="sourceSans">How are you different from Shopify, Volusion or Woo Commerce?</h3>
              <p class="small">3rd party ecommerce solutions only provide one step of the puzzle which is online selling.Rucept connects with fulfilment partners and handles pricing, upload and inventory management on several sites.</p>
            </li>
            <li class="col-6-12 margin-bottom-1 ae-4">
              <h3 class="sourceSans">How much do products cost? How do I set markup on products?</h3>
              <p class="small">Our base cost is lower than Zazzle,Shutterfly, and Cafepress and most markups are determined by our dynamic pricing method which finds the best price to ship the most products and optimize earnings.</p>
            </li>
            <li class="col-6-12 margin-bottom-1 ae-5">
              <h3 class="sourceSans">Am I selling art to you?</h3>
              <p class="small">No, your art is yours, even the one we create for you. Our licensing agreement allows for us to create products to list on your site and on marketplaces. Rucept owns no copyright.</p>
            </li>
            <li class="col-6-12 margin-bottom-1 ae-6">
              <h3 class="sourceSans">How and when do I get paid?</h3>
              <p class="small">When you sign up with fulfilled by Rucept, it will ask you for payout details over bank account or Paypal. Payouts are made monthly after adjusting for local taxes and returns.</p>
            </li>
          </ul>
          <a href="#" class="button pink crop margin-top-4 ae-7">More questions and answers</a>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- Slide 10 (#41) -->
<section class="slide fade kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">
        
        <div class="fix-10-12 center">
          <div class="ae-1"><p class="hero opaque">"We've taken our historical images, concept art and storyboards from hangings on the studio wall to fully realized products available everywhere with Rucept. Most importantly, it brings us money to support the film."</p></div>
          
          <div class="fix-4-12">
            <a href="#" class="author block">
              <div class="ae-2 fromCenter"><img width="60" class="avatar-41 ae-2 fromCenter" src="assets/img/avatar-1.jpg" alt="Paul Rand"/></div>
              <div class="ae-3"><h3 class="margin-bottom-0">Sean Graham</h3></div>
              <div class="ae-4"><p class="small">Director, Ramayan Film</p></div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="background" id="player1" data-property="{videoURL:'https://youtu.be/9uxhT1izgJE',containment:'self',startAt:0,mute:false,autoPlay:true,loop:true,opacity:1,printUrl:false}" ></div>
</section>

<!-- Slide 11 (#55) -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <h1 class="ae-1">Say Hello</h1>
        <div class="ae-2"><p>Message us here for product questions, employment opportunities, investor interest and press</p></div>
        <div class="fix-5-12 margin-top-6">
          <div class="pad shadow selected ae-3">
            <form action="ajax-email.php" id="contact-form" method="post" class="wide center" data-ajax-form="true">
              <div class="label ae-4 cropTop"><label class="cropTop opacity-5" for="name55">Your name</label></div>
              <input class="stroke ae-5 wide" id="name55" type="name" name="name" placeholder="Name" required/>
              <div class="label ae-6"><label class="opacity-5" for="email55">Email address</label></div>
              <input class="stroke ae-7 wide" id="email55" type="email" name="email" placeholder="Email" required/>
              <div class="label ae-8"><label class="opacity-5" for="message55">Message</label></div>
              <textarea class="left ae-9" id="message55" type="text" name="message" placeholder="Message" required></textarea>
              <input class="button wide pink ae-10 margin-top-2 cropBottom" type="submit" name="submit" value="Send message" data-success-text="Done!" data-success-class="green"/>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>  
</section>

<!-- Panel Bottom #04 -->
<nav class="panel bottom">
  <div class="sections">
    <div class="left"></div>
    <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
    <div class="right"><span data-dropdown-id="2" class="button actionButton dropdownTrigger"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#share"></use></svg></span></div>
  </div>
</nav>

<!-- Share Window -->
<div class="dropdown share bottom right" data-dropdown-id="2" data-text="Take a look at this" data-url="https://designmodo.com" data-pinterest-image="https://designmodo.com/wp-content/uploads/2015/10/Presentation.jpg">
  <div class="title">Share</div>
  <ul>
    <li class="facebook"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fb-like"></use></svg></li>
    <li class="twitter"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></li>
    <li class="googlePlus"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg></li>
    <li class="pinterest"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg></li>
    <!-- li class="stumbleupon"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stumbleupon"></use></svg></li>
    <li class="linkedin"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></li -->
    <li class="mail" data-subject="Subject" data-body="Body">share by email</li>
  </ul>
</div>

<!-- Preloader -->
<div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>
					    <script defer> 
						

						
						jQuery(function(){
						
					
												
           jQuery("#player").mb_YTPlayer();
          
           jQuery("#player1").delay(500).mb_YTPlayer();
		   
		
    });
  </script>
	</body>
</html>
