<?php
/*
Template Name: Blank Page
*/
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<html>
	<head>
		<title>OpenMind</title>
		<link rel="icon" href="https://openmindplatform.org/wp-content/uploads/2017/11/cropped-OM-Icon-32x32.png" sizes="32x32" />
		
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<script src="https://www.guidedtrack.com/assets/jquery_gt.js"></script>
		<script src="https://www.guidedtrack.com/assets/interpreter.js?v=1"></script>
		<link rel="stylesheet" type="text/css" href="https://www.guidedtrack.com/assets/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://1061174115.rsc.cdn77.org/css_samples/guidedtrack_legacy.css">
		<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|PT+Serif:400,400i,700,700i" rel="stylesheet">

		<style>
			body {
				padding-top: 24px;
			}

			body.openMind-app {
				padding-top: 20px;
				background-color: #fbfcfe;
			}

			/* Loader */
			.openMind-app .spinner>.double-bounce1, .double-bounce2 {
				background-color: #66c6c1;
			}

			/* Container basic styling */
			.openMind-app .program_container {
				background-color: #fff;
				padding: 30px 50px 50px 50px;
				margin-bottom: 40px;
				border-radius: 5px;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;

				box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);
				-webkit-box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);
				-moz-box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);

				font-family: 'PT Serif', Times, serif;
				font-size: 18px;
				color: #555;
			}

			/* Typography */
			.openMind-app .program_container .text p {
				font-size: 18px;
				line-height: 1.62;
				color: #555;
			}

			.openMind-app .h1, .openMind-app .h2, .openMind-app .h3, .openMind-app h1, .openMind-app h2, .openMind-app h3 {
				font-family: 'Arimo', Arial, sans-serif;
				font-weight: 700;
				color: #404042;
				margin-bottom: 30px;
				margin-top: 0;
			}

			.openMind-app b, .openMind-app strong {
				font-family: "800";
				color: #111;
				font-size: 19px;
			}

			.openMind-app a:hover, .openMind-app a:focus {
				color: #66c6c1;
			}

			/* Points Bubble */
			.openMind-app .program_container .points div {
  				width: 70px;
  				height: 70px;
  				padding-top: 40px;
  				font-size: 10px;
				font-family: "Arimo", Arial, sans-serif;
  				right: 5px;
				position: relative;
			}
			
			.openMind-app .program_container .points::before {
				position: absolute;
  				display: block;
  				content: "";
    			background-image: url("../wp-content/uploads/2018/01/icon-star.png");
  				width: 25px;
  				height: 24px;
  				background-size: 25px;
  				top: 12px;
  				left: 50%;
 				margin-left: -5px;  
				z-index: 1;
			}

			.openMind-app .program_container .points div br {
  				content: "";
  				line-height: 0;
  				padding-right: 3px;
			}

			.openMind-app .program_container .points .total {
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
				background: rgb(102,198,193); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

				box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-moz-box-shadow:  0 5px 20px 0 rgba(0, 0, 0, 0.15);

				border: none;
				color: #fff;
			}

			.openMind-app .program_container .points div.change.positive {
				position: absolute;
				top: 0;
				right: 5px;
				padding-top: 30px;
				z-index: 2;
				
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
				background: rgb(102,198,193); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				
				border: none;
			}

			.openMind-app .program_container .points {
  				right: -4px;
				padding-left: 24px;
				background-color: #fff;
			}

			/* Progress Bar */
			.openMind-app .program_container .progress {
				height: 20px;
			}

			.openMind-app .program_container .progress .progress-bar {
				line-height: 20px;
				font-family: "Arimo", Arial, sans-serif;
				font-size: 10px;

				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
				background: rgb(102,198,193); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

				box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			}

			.openMind-app .progress {
				background-color: rgba(148, 207, 161, 0.2);
				box-shadow: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;

				border-radius: 5px;
				-webkit-border-radius: none;
				-moz-border-radius: none;
			}

			/* Program navigation */
			.openMind-app #program_navigation {
				border-bottom: 1px solid #eee;
				min-height: 38px;
			}

			.openMind-app #program_navigation #back-button span.glyphicon{
  				width: 20px;
  				height: 19px;
  				line-height: 19px;
  				background-image: url("../wp-content/uploads/2017/12/icon-back.png");
  				background-size: 20px 19px;
  				background-repeat: no-repeat;
				text-indent: -9999px;
				left: -5px;

				top: 29px;
  				background-color: #fff;
  				padding-right: 40px;

  				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;
			}

			.openMind-app #program_navigation #back-button span.glyphicon:hover {
  				background-image: url("../wp-content/uploads/2017/12/icon-back_green.png");
			}

			.openMind-app .program_container .progress {
  				margin-bottom: 15px;
			}

			.openMind-app .navigation_items .text-center {
  				display: none;
			}
			
			.openMind-app #program_navigation .navigation_container {
				margin-top: -10px;
				margin-bottom: -10px;
			}

			.openMind-app #program_navigation .navigation_container ul.navigation_items {
  				font-size: 14px;
  				font-family: "Arimo", sans-serif;
  				font-weight: 500;
  				color: #aaa;
				top: 18px;
  				position: relative;
			}

			.openMind-app #program_navigation .navigation_container ul.navigation_items li {
  				position: relative;
  				padding-left: 42px;
				font-size: 16px;

  				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;
			}

			.no-touch #program_navigation .navigation_container ul.navigation_items li:hover, #program_navigation .navigation_container ul.navigation_items .no-touch li:hover, .no-touch #program_navigation #run-menu:hover, #program_navigation .no-touch #run-menu:hover {
  				color: #66c6c1;
			}

			.openMind-app #program_navigation .navigation_container ul.navigation_items li {
				background-color: #fff;
  				background-image: url("../wp-content/uploads/2017/12/icon-home.png");
  				background-repeat: no-repeat;
  				background-size: 16px;
				background-position: 18px 10px;
			}

			.openMind-app #program_navigation .navigation_container ul.navigation_items li:hover{
  				background-image: url("../wp-content/uploads/2017/12/icon-home_green.png");
			}
			
			.openMind-app .gt-program-navigation-button.active, .openMind-app #program_navigation .active#back-button, .openMind-app #program_navigation .navigation_container ul.navigation_items li.active, .openMind-app #program_navigation .active#run-menu {
				border-bottom: none;
			}

			/* Run Menu */

			.openMind-app #program_navigation #run-menu {
  				top: -20px;
  				right: -50px;
			}

			.openMind-app .dropdown-menu {
  				border: 1px solid #f7f7f7;
  				box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				border-radius: 5px;
  				-webkit-border-radius: 5px;
  				-moz-border-radius: 5px;
			}

			.openMind-app #program_navigation #run-menu .dropdown-toggle span {
				color: #555;
			}

			.openMind-app .dropdown-menu>li>a {
  				font-family: "Arimo", sans-serif;
  				color: #404042;

				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;
			}

			.openMind-app .dropdown-menu>li>a:focus, .openMind-app .dropdown-menu>li>a:hover {
  				background-color: #fff;
  				color: #66c6c1;
			}

			.gt-program-navigation-button.open, 
			.openMind-app #program_navigation .open#back-button, 
			.openMind-app #program_navigation .navigation_container ul.navigation_items li.open, 
			.openMind-app #program_navigation .open#run-menu, 
			.gt-program-navigation-button:active, 
			.openMind-app #program_navigation #back-button:active, 
			.openMind-app #program_navigation .navigation_container ul.navigation_items li:active, 
			.openMind-app #program_navigation #run-menu:active {
  				color: #66c6c1;
			}
			
			/* Main menu list items styling */
			.openMind-app .button-group.custom-menu li.answer:nth-child(5), 
			.openMind-app .button-group.custom-menu li.answer:nth-child(4), 
			.openMind-app .button-group.custom-menu li.answer:nth-child(3), 
			.openMind-app .button-group.custom-menu li.answer:nth-child(2), 
			.openMind-app .button-group.custom-menu li.answer:first-child {
  				border: 1px solid #66c6c1;
			}
			
			.openMind-app .program_container .question.custom-menu {
  				padding: 0;
  				background-color: transparent;
			}

			.openMind-app .program_container .tip.custom-menu {
  				background-color: transparent;
  				padding: 0;
			}

			.openMind-app .program_container .main .answers.custom-menu {
  				background-color: transparent;
  				padding: 0;
			}


			/* Button Main Styling */
			.openMind-app .program_container .btn-default, .openMind-app ul.button-group li.btn-primary {
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
				background: rgb(102,198,193); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background-image: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				
				white-space: normal;

				font-family: "Arimo", Arial, sans-serif;
				font-weight: 700;
				font-size: 18px;
				color: #fff;

				border: none;

				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;


				box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				-moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			}

			.openMind-app .program_container .btn-default.active, 
			.openMind-app .program_container .btn-default.focus, 
			.openMind-app .program_container .btn-default:active, 
			.openMind-app .program_container .btn-default:focus, 
			.openMind-app .program_container .btn-default:hover, 
			.openMind-app ul.button-group li.btn-primary:hover {
				color: #fff;

				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#93cea0+0,66c6c1+100 */
				background: rgb(147,206,160); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(147,206,160,1) 0%, rgba(102,198,193,1) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

				border: none;
			}

			.openMind-app .btn-group-lg>.btn, .openMind-app .btn-lg {
				padding: 15px;
				margin-top: 20px;
			}

			/* Accordion Styling First Level */
			.openMind-app .program_container .main .panel-group .panel-heading a, 
			.openMind-app .program_container .main .panel-group .panel-heading a:link, 
			.openMind-app .program_container .main .panel-group .panel-heading a:hover, 
			.openMind-app .program_container .main .panel-group .panel-heading a:active, 
			.openMind-app .program_container .main .panel-group .panel-heading a:visited {
				color: #404042;
			}
			
			.text + .panel-group {
  				margin-top: 15px;
			}
			
			.openMind-app .panel-default>.panel-heading {
  				background-color: #fff;
			}

			.openMind-app .panel-heading {
  				padding: 0;
			}

			.openMind-app .panel-heading .panel-title h4 {
  				padding: 15px 20px;
				font-size: 18px;
				line-height: 28px;
			}

			.openMind-app .panel-heading .panel-title {
  				width: 100%;
  				display: block;
			}

			.openMind-app .panel-heading .panel-title[aria-expanded="true"] {
  				border-left: 2px solid #66c6c1;
  				transition-delay: 0.3s;
			}

			.openMind-app .panel-collapse, .openMind-app .panel-title {
  				border-left: 2px solid;
  				border-color: transparent;
			}

			.openMind-app .panel-collapse.collapse.in {
  				border-left: 2px solid #66c6c1;
			}

			.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
 				border-top: 0;
  				padding-top: 0;
			}

			.openMind-app .panel-group .panel-body.main .text {
				padding-left: 2px;
				padding-top: 0;
			}

			.openMind-app .panel {
  				background-color: #fff;
  				box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				border: 1px solid #f7f7f7;

				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;
			}

			.openMind-app .panel:hover {
				box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
				-webkit-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
				-moz-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
			}

			.openMind-app .program_container .main .panel-group .panel-heading a.panel-title .toggle-expand {
  				color: #404042;
  				top: 1em;
			}

			.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
  				border-top: 1px solid #eee;
				padding-top: 1em;
			}
			
			.program_container .main .panel-group .panel-heading a.panel-title.collapsed .toggle-expand .glyphicon-chevron-down {
				top: 7px;
			}

			/* Accordion Second Level */
			.openMind-app .panel .panel-collapse .panel-body .panel-group .panel .panel-heading h4 {
				font-weight: 700;
  				line-height: 1.62;
				color: #555;
			}

			/* Main content styling */
			.openMind-app .program_container .main {
				padding-top: 3em;
			}

			.openMind-app .program_container .main .prompt {
				margin-top: 1em;
				margin-left: 0;
				margin-right: 0;
			}

			/* Questions General Styling */
			.openMind-app .program_container .question {
				font-size: 18px;
				font-weight: 800;
				
				background-color: #f7f7f7;
  				border-radius: 8px 8px 0 0;
				-webkit-border-radius: 8px 8px 0 0;
				-moz-border-radius: 8px 8px 0 0;
  				padding: 0.5em 1em 1em 1em;
			}
			
			.openMind-app ul.button-group {
  				border: none;
			}

			.openMind-app ul.button-group li {
				font-size: 18px;
				line-height: 28px;
				font-weight: 400;

				background-color: #fff;
  				border: 1px solid #f7f7f7;
  				box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				-moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  				border-radius: 5px;
  				-webkit-border-radius: 5px;
  				-moz-border-radius: 5px;

				-webkit-transition: all 0.3s ease-out;
 				 -moz-transition: all 0.3s ease-out;
  				-o-transition: all 0.3s ease-out;
  				transition: all 0.3s ease-out;
			}

			.no-touch ul.button-group .answer:hover:not(.selected) {
				background-color: #f5f6fa;

				box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
				-webkit-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
				-moz-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
			}

			.openMind-app ul.button-group .answer {
  				margin-bottom: 10px;
			}

			.openMind-app ul.button-group .answer.selected {
				background-color: #f5f6fa;
			}

			.openMind-app ul.button-group .answer.selected span.glyphicon {
				display: none;
			}

			.openMind-app ul.button-group li:last-of-type, .openMind-app ul.button-group li:first-of-type {
  				border-bottom: 1px solid #f7f7f7;
  				border-radius: 5px;
  				-webkit-border-radius: 5px;
  				-moz-border-radius: 5px;
			}
			
			.openMind-app .program_container .main .answers {
				padding: 1em;
  				margin: 0;
  				background-color: #f7f7f7;
  				
				-webkit-border-radius: 8px 8px 0 0;
				-moz-border-radius: 8px 8px 0 0;
  				border-radius: 0 0 8px 8px;
			}
			
			/* Tip styling */
			.openMind-app .program_container .tip {
				font-size: 16px;
				
				background-color: #f7f7f7;
  				padding: 0 0 1em 1.1em;
  				margin: 0;
			}
			
			.openMind-app .program_container .tip:empty {
  				padding: 0;
  				margin: 0;
			}

			
			.openMind-app .program_container .main .answer_textbox {
				background-color: #f7f7f7;
  				padding: 1em;
  				margin: 0;
			}
			
			.openMind-app .program_container .answer_textbox .answer_submit.textbox {
				margin-left: 0;
			}
			
			.openMind-app .program_container .answer_input {
				margin-right: 1em;
			}
			
			/* Gradable Question Styling */
			.openMind-app .program_container .question.question-gradable {
  				position: relative;
				padding: 2px 1em 1em 45px;
			}

			.openMind-app .program_container .question.question-gradable::before {
  				position: absolute;
  				display: block;
  				background-image: url("../wp-content/uploads/2018/01/question-star-turquise.png");
  				background-size: 18px;
  				content: "";
  				width: 18px;
  				height: 18px;
  				background-repeat: no-repeat;
  				left: 15px;
 				top: 22px;
			}
			
			.openMind-app .program_container .tip.question-gradable {
				background-color: #f7f7f7;
				margin: 0;
				padding: 0 0 1em 45px;
			}
			
			.openMind-app .program_container .tip.question-gradable:empty {
  				padding: 0;
				margin: 0;
			}


			/* Slider Styling */
			.openMind-app .program_container .main .slider-answer-widget .slider-label {
				font-size: 14px;
				font-weight: 700;
			}

			.openMind-app .slider-track {
				box-shadow: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;

				border-radius: 5px;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;

				background-color: rgba(63, 80, 160, 0.1);
				background-image: none;
			}

			.openMind-app .program_container .main .slider-answer-widget .slider-selection {
				background-color: #66c6c1;

				box-shadow: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;

				border-radius: 5px;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
			}

			.openMind-app .slider-handle {
				width: 30px;
				height: 30px;
				background-color: #66c6c1;
				background-image: none;
				opacity: 1;
			}

			.openMind-app .slider.slider-horizontal .slider-handle {
				margin-left: -15px;
				margin-top: -10px;
			}

			.openMind-app .slider .tooltip {
				margin-top: 0;
			}
			
			/* Styling background on slider widget */
			.program_container .main .slider-answer-widget {
  				background-color: #f7f7f7;
  				margin-bottom: 1em;
  				margin-top: 0;
  				margin-left: 0;
  				margin-right: 0;
  				padding: 1em;
  				width: 100%;
  				box-sizing: border-box;
				
				border-radius: 0 0 8px 8px;
				-webkit-border-radius: 0 0 8px 8px;
				-moz-border-radius: 0 0 8px 8px;
			}

			.program_container .main .slider-answer-widget .slider-label.left {
  				margin-right: 0;
 				padding-right 1em;
			}

			.program_container .main .slider-answer-widget .slider-label.right {
  				margin-left: 0;
  				padding-left: 1em;
			}

			/* Forms Styling */
			.openMind-app .form-control {
  				border: 1px solid #eee;
			}

			.openMind-app .input-group {
  				box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
  				-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
  				-moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
			}

			.openMind-app .input-group-addon {
  				background-color: rgba(63, 80, 160, 0.1);
  				border: 1px solid #eee;
			}

			.openMind-app .form-control:focus {
  				box-shadow: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
  				border-color: #66c6c1;
			}


      .openMind-app ul.navigation_items li .navigation_icon {
        line-height: 23.8px;
      }
			
			/* Lists */
			.openMind-app .program_container .main .list li {
				font-size: 18px;
			}
			
			.openMind-app .program_container .main .list li {
  				list-style: none;
  				position: relative;
			}

			.openMind-app .program_container .main .list li::before {
  				position: absolute;
  				content: "";
  				display: block;
  				width: 6px;
  				height: 6px;
  				background-color: #66c6c1;
  				border-radius: 50%;
  				-webkit-border-radius: 50%;
  				-moz-border-radius: 50%;
  				top: 13px;
  				left: -18px;
			}
			
			/* Image certificate Text Positioning */
			.image-superimpose {
  				position: relative;
			}

			.image-superimpose .multimedia_caption {
  				position: absolute;
  				top: 38%;
				left: 8.6%;
  				font-family: 'Poppins','Arial', sans-serif;
  				font-size: 70%;
  				font-weight: 500;
  				font-style: normal;
			}

			.image-superimpose .multimedia_caption  strong {
  				width: 100%;
  				display: block;
  				text-align: left;
  				font-family: 'Poppins','Arial', sans-serif;
  				color: #3d4fa1;
  				font-size: 180%;
  				padding-top: 4px;
			}
			
			/* Print styling */
			@media print {
				.image-superimpose {
  					position: relative !important;
				}

				.image-superimpose .multimedia_caption {
  					position: absolute !important;
  					top: 38% !important;
					left: 8.6% !important;
  					font-family: 'Poppins','Arial', sans-serif !important;
  					font-size: 70% !important;
  					font-weight: 500 !important;
  					font-style: normal !important;
				}

				.image-superimpose .multimedia_caption  strong {
  					width: 100% !important;
  					display: block !important;
  					text-align: left !important;
  					font-family: 'Poppins','Arial', sans-serif !important;
  					color: #3d4fa1 !important;
  					font-size: 180% !important;
  					padding-top: 4px !important;
				}
			}
			
			/* Responsive Styling */
			@media (max-width: 992px) {
  				body.openMind-app {
    				background-color: #fff;
					padding-top: 15px;
  				}
  
  				.openMind-app .program_container {
    				box-shadow: none;
    				-webkit-box-shadow: none;
    				-moz-box-shadow: none;
    				padding: 15px;
  				}
			}
			
			/* Responsive styling for Image certificate */
			@media (max-width: 479px) {
				
				.image-superimpose .multimedia_caption {
					top: 35%;
					font-size: 50%;
				}

				.image-superimpose .multimedia_caption  strong {
					font-size: 150%;
				}
			}
			
			@media (min-width: 480px) and (max-width: 567px) {
				.image-superimpose .multimedia_caption {
					top: 38%;
					font-size: 50%;
				}

				.image-superimpose .multimedia_caption  strong {
					font-size: 150%;
				}
			}
			
			@media (min-width: 768px) and (max-width: 991px) {
				.image-superimpose .multimedia_caption {
					top: 40%;
				}

				.image-superimpose .multimedia_caption  strong {
					font-size: 180%;
				}
			}
			
			@media (min-width: 992px) and (max-width: 1199px) {
				.image-superimpose .multimedia_caption {
					font-size: 60%;
					top: 37%;
				}

				.image-superimpose .multimedia_caption  strong {
					font-size: 180%;
				}
			}
		</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177276190-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177276190-1');
</script>
	<?php wp_head(); ?>
	</head>
	
    <script>
        $(window).on("makeTable", makeTable); 

        function makeTable(event, object) {            
            var headers = object.headers;
            var rows = object.rows;
            var columns = headers.length;
            var table = document.createElement("table");
            //add classes below
            table.classList.add("table", "table-striped", "text-center");

			// create the header row (thead)
			var thead = document.createElement('thead');
			var theaders = document.createElement('tr');
			for (var i = 0; i < columns; i++) {
				var th = document.createElement('th');
				th.classList.add("text-center");
				th.appendChild(document.createTextNode(headers[i]));
				theaders.appendChild(th);
			};
			thead.appendChild(theaders);
			table.appendChild(thead);
			
            var tbody = document.createElement('tbody');
            for (var j = 0; j < rows.length; j++) {
                var tr = document.createElement('tr');
                var currentRow = rows[j];
                for (var k = 0; k < columns; k++) {
                    var td = document.createElement('td');
                    td.appendChild(document.createTextNode(currentRow[k]));
                    tr.appendChild(td);
                };
                tbody.appendChild(tr);
            };
            table.appendChild(tbody);


            $(".main").append(table);
        };
    </script>
	
	<body class="openMind-app">
		<div id="main-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
							the_content();
						?>
					</div> <!-- .entry-content -->
				</article> <!-- .et_pb_post -->
			<?php endwhile; ?>

		</div> <!-- #main-content -->
	</body>
</html>