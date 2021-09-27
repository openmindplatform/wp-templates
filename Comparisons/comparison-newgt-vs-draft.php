<!-- CSS revision in progress --> 

<html>
<head>
	<script src="https://www.guidedtrack.com/assets/jquery_gt.js"></script>
	<script src="https://www.guidedtrack.com/assets/interpreter.js"></script>
	<link rel="stylesheet" type="text/css" href="https://www.guidedtrack.com/assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" id="structure" href="https://spencergreenberg.com/pm/guidedtrack-ui-demo/css/structure.css">
	<link rel="stylesheet" type="text/css" href="https://spencergreenberg.com/pm/guidedtrack-ui-demo/css/bootstrap-slider.css">
	<link rel="stylesheet" type="text/css" href="https://spencergreenberg.com/pm/guidedtrack-ui-demo/css/bootstrap-datetime-picker.css">
	<link rel="stylesheet" type="text/css" id="mode" href="https://spencergreenberg.com/pm/guidedtrack-ui-demo/css/lightColors.css">
	<link rel="stylesheet" type="text/css" href="https://spencergreenberg.com/pm/guidedtrack-ui-demo/css/app.css">

	<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|PT+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
	
	<style id="themeColors">
		html.gr__openmindplatform_org body{
			padding-top: 20px;
			padding-bottom: 40px;
			background-color: #fbfcfe;
		}
		.guidedtrack.program_container {
			font-family: 'PT Serif', Times, serif;
		}

		.guidedtrack.program_container {
			background-color: #fff;
			padding: 30px 50px 0 50px;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);
			-webkit-box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 2px 50px 0 rgba(0, 0, 0, 0.1);  
		}

		p, 
		ul.list li, 
		ol.list li {
			font-family: 'PT Serif', Times, serif;
			font-size: 18px;
			color: #555;
		}

		#program_navigation {
		border-bottom: 1px solid #eee;
		}

		#back-button ~ #run-menu {
		right: 0;
		left: initial;
		}

		#run-menu .dropdown-toggle span{
		font-size: 24px;
		}

		#run-menu .dropdown-toggle span::before {
		display: none;
		}

		.guidedtrack.program_container .question {
			font-size: 18px;
			font-weight: 800;
			background-color: #f7f7f7;
			border-radius: 8px 8px 0 0;
			-webkit-border-radius: 8px 8px 0 0;
			-moz-border-radius: 8px 8px 0 0;
			padding: 1em;
		}

		.guidedtrack.program_container .tip {
			margin: 0.7em 0 0 0.7em;
			color: #666;
			font-weight: normal;
			font-size: 16px;
			background-color: #f7f7f7;
			padding: 0 0 1em 1.1em;
			margin: 0;
		}

		.guidedtrack.program_container .tip:empty {
			padding: 0;
			margin: 0;
		}

		.guidedtrack.program_container .main .answers {
			padding: 1em;
			margin: 0;
			background-color: #f7f7f7;
			-webkit-border-radius: 8px 8px 0 0;
			-moz-border-radius: 8px 8px 0 0;
			border-radius: 0 0 8px 8px;
		}

		.guidedtrack.program_container .main li.answer {
			margin-bottom: 10px;
		}

		.guidedtrack.program_container ul.button-group li {
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

		.program_container .main .answer_textbox {
			background-color: #f7f7f7;
			padding: 1em;
			margin: 0;
		}

		.answer_input {
			margin-top: 0;
		}

		.question {
			margin-top: 0;
		}

		.guidedtrack .form-control {
			display: block;
			width: 100%;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			border: 1px solid #eee;
		}

		.guidedtrack .form-control:focus {
			border-color: #66c6c1;
		}

		.guidedtrack .btn, .guidedtrack .btn-primary {
			border-radius: 6px;
			border: none;
			display: inline-block;
			background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%);
			background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			background-image: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
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
			box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);      
			padding: 6px 12px;
		}

		.guidedtrack .btn-lg {
			padding: 15px;
		}

		.guidedtrack .btn-default:hover, .guidedtrack .btn-default:focus, .guidedtrack .btn-default:active,
		.guidedtrack .btn-primary:hover, .guidedtrack .btn-primary:focus, .guidedtrack .btn-primary:active{
			color: #fff;
			background: rgb(147,206,160);
			background: -moz-linear-gradient(left, rgba(147,206,160,1) 0%, rgba(102,198,193,1) 100%);
			background: -webkit-linear-gradient(left, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%);
			background: linear-gradient(to right, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%);
			border: none;
		}

		.guidedtrack .btn-default.disabled, 
		.guidedtrack .btn-default.disabled.active, 
		.guidedtrack .btn-default.disabled.focus, 
		.guidedtrack .btn-default.disabled:active, 
		.guidedtrack .btn-default.disabled:focus, 
		.guidedtrack .btn-default.disabled:hover, 
		.guidedtrack .btn-default[disabled], 
		.guidedtrack .btn-default[disabled].active, 
		.guidedtrack .btn-default[disabled].focus, 
		.guidedtrack .btn-default[disabled]:active, 
		.guidedtrack .btn-default[disabled]:focus, 
		.guidedtrack .btn-default[disabled]:hover, 
		.guidedtrack fieldset[disabled] .btn-default, 
		fieldset[disabled] .btn-default.active, 
		.guidedtrack fieldset[disabled] .btn-default.focus, 
		.guidedtrack fieldset[disabled] .btn-default:active, 
		.guidedtrack fieldset[disabled] .btn-default:focus, 
		.guidedtrack fieldset[disabled] .btn-default:hover {
			border-radius: 6px;
			border: none;
			background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%);
			background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			background-image: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
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
			box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0 3px 15px 0 rgba(0, 0, 0, 0.15);
			padding: 6px 12px;
			display: inline-block;
			filter: none;
		}

		.text + .panel-group {
			margin-top: 15px;
		}

		.guidedtrack .panel-group {
			margin-bottom: 20px;
		}

		.guidedtrack .panel {
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

		.guidedtrack .panel-group .panel {
			margin-bottom: 0;
			border-radius: 4px;
		}

		.program_container .main .panel-group .panel {
			border-radius: 6px;
		}

		.program_container .main .panel-group .panel-heading {
			position: relative;
			padding-right: 40px;
		}

		.guidedtrack .panel-default>.panel-heading {
			background-color: #fff;
		}

		.guidedtrack .program_container .main .panel-group .panel-heading a, .guidedtrack .program_container .main .panel-group .panel-heading a:link, .guidedtrack .program_container .main .panel-group .panel-heading a:hover, .guidedtrack .program_container .main .panel-group .panel-heading a:active, .guidedtrack .program_container .main .panel-group .panel-heading a:visited {
			color: #404042;
		}

		.guidedtrack .panel-heading {
			padding: 0;
		}

		.guidedtrack .panel-heading .panel-title h4 {
			padding: 15px 20px;
			font-size: 18px;
			line-height: 28px;
		}

		.guidedtrack .panel-heading .panel-title {
			width: 100%;
			display: block;
		}
		.guidedtrack .panel-collapse, .guidedtrack .panel-title {
			border-left: 2px solid;
			border-color: transparent;
		}

		.program_container .main .panel-group .panel-heading a.panel-title .toggle-expand {
			color: #404042;
			top: 1.1em;
		}

		.guidedtrack .panel:hover {
			box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
			-webkit-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2);
		}

		.guidedtrack .panel:hover a {
			color: #404042;
		}

		.guidedtrack .panel-heading .panel-title[aria-expanded="true"] {
			border-left: 2px solid #66c6c1;
			transition-delay: 0.3s;
		}

		.guidedtrack .panel-heading .panel-title {
			width: 100%;
			display: block;
		}

		.guidedtrack .panel-collapse, 
		.guidedtrack .panel-title {
			border-left: 2px solid;
			border-color: transparent;
		}

		.guidedtrack .panel-collapse.collapse.in {
			border-left: 2px solid #66c6c1;
		}

		.guidedtrack a.panel-title {
			color: #404042;
		}

		#program_navigation #back-button {
			position: absolute;
			top: 0;
			left: 0;
			width: 47px;
			line-height: 48px;
			text-align: center;
		}

		.guidedtrack #program_navigation #back-button span.glyphicon {
			width: 20px;
			height: 19px;
			line-height: 19px;
			background-image: url(../wp-content/uploads/2017/12/icon-back.png);
			background-size: 20px 19px;
			background-repeat: no-repeat;
			text-indent: -9999px;
			left: -5px;
			top: 38px;
			background-color: #fff;
			padding-right: 40px;
			-webkit-transition: all 0.3s ease-out;
			-moz-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}

		.guidedtrack #program_navigation #back-button span.glyphicon:hover {
			background-image: url(../wp-content/uploads/2017/12/icon-back_green.png);
		}

		.guidedtrack.program_container .main {
			padding-top: 3em;
		}

		.guidedtrack .h1, 
		.guidedtrack .h2, 
		.guidedtrack .h3, 
		.guidedtrack h1, 
		.guidedtrack h2, 
		.guidedtrack h3 {
			font-family: 'Arimo', Arial, sans-serif;
			font-weight: 700;
			color: #404042;
			margin-bottom: 30px;
			margin-top: 0;
		}

		.h3, h3 {
			font-size: 24px;
		}

		.panel-group .panel-heading+.panel-collapse>.list-group, 
		.panel-group .panel-heading+.panel-collapse>.panel-body {
			border-top: 1px solid #eee;
			padding-top: 1em;
		}

		.prompt {
			font-weight: 800;
		}

		.guidedtrack .progress {
			background-color: rgba(148, 207, 161, 0.2);
			box-shadow: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			border-radius: 5px;
			-webkit-border-radius: none;
			-moz-border-radius: none;
			position: relative;
			width: 100%;
			margin-bottom: 15px;
			height: 20px;
		}

		.guidedtrack .progress .progress-bar {
			line-height: 20px;
			height: 20px;
			font-family: "Arimo", Arial, sans-serif;
			font-size: 10px;
			background: rgb(102,198,193);
			background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%);
			background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
		}

		.guidedtrack #program_navigation .navigation_container ul.navigation_items {
			font-size: 14px;
			font-family: "Arimo", sans-serif;
			font-weight: 500;
			color: #aaa;
			top: 18px;
			position: relative;
		}

		.guidedtrack #program_navigation .navigation_container ul.navigation_items li {
			background-color: #fff;
		}

		.guidedtrack ul.navigation_items li .navigation_icon {
			line-height: 23.8px;
		}

		.navigation_container ul li {
			max-width: 126px;
		}

		.guidedtrack #program_navigation .navigation_container ul.navigation_items li {
			color: #aaa;
		}

		.guidedtrack #program_navigation .navigation_container ul.navigation_items li:hover {
			color: #66c6c1;
		}

		.guidedtrack .input-group-addon {
			background-color: rgba(63, 80, 160, 0.1);
			border: 1px solid #eee;
			width: auto;
		}

		.input-group-addon {
			color: #555;
		}

		.guidedtrack .input-group {
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
			-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
		}

		.program_container .answer_textbox .answer_submit.textbox {
			margin-top: 0.5em;
		}

		li.answer span[role="checkbox"] {
			float: left;
			margin-right: 10px;
			width: 14px;
			height:14px;
			margin-top: 7px;
		}

		li.answer:hover [type="checkbox"] ~ span[role="checkbox"]:after, li.answer:hover [type="checkbox"]:checked ~ span[role="checkbox"]:after, li.answer [type="checkbox"]:checked ~ span[role="checkbox"]:after {
			width: 14px;
			font-size: 14px;
			top: -7px;
			position: relative;
		}

		.guidedtrack.program_container ul.button-group li.submit {
			width: 100%;
			height: auto;
			padding: 15px;
			font-weight: 700;
		}

		.program_container .main .slider-answer-widget {
			background-color: #f7f7f7;
			margin-bottom: 1em;
			margin-top: 0;
			margin-left: 0;
			margin-right: 0;
			padding: 2em 1em 1em 1em;
			width: 100%;
			box-sizing: border-box;
			border-radius: 0 0 8px 8px;
			-webkit-border-radius: 0 0 8px 8px;
			-moz-border-radius: 0 0 8px 8px;
		}

		.slider.slider-horizontal {
			height: 20px;
		}

		.guidedtrack .slider-track {
			box-shadow: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			background-color: rgba(63, 80, 160, 0.1);
			background-image: none;
			border: none;
		}

		.guidedtrack.program_container .main .slider-answer-widget .slider-selection {
			background-color: #66c6c1;
			box-shadow: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
		}

		.slider .tooltip .tooltip-inner {
			background-color: #000;
		}

		.slider .tooltip .tooltip-arrow {
			border-top-color: #000;
		}

		.guidedtrack .slider-handle {
			width: 25px;
			height: 25px;
			background-color: #66c6c1;
			background-image: none;
			opacity: 1;
			border: none;
			top: -5px;
		}


		.slider .tooltip.top {
			margin-top: -42px;
		}

		.slider.slider-horizontal .tooltip {
			-ms-transform: translateX(-47%);
			transform: translateX(-47%);
		}


		.slider-answer-widget .btn, .guidedtrack .slider-answer-widget .btn-default[disabled] {
			width: 100%;
			padding: 15px;
		}

		.guidedtrack .button-group.custom-menu li.answer:nth-child(5), .guidedtrack .button-group.custom-menu li.answer:nth-child(4), .guidedtrack .button-group.custom-menu li.answer:nth-child(3), .guidedtrack .button-group.custom-menu li.answer:nth-child(2), .guidedtrack .button-group.custom-menu li.answer:first-child {
			border: 1px solid #66c6c1;
		}

		.guidedtrack .panel .panel-collapse .panel-body .panel-group .panel .panel-heading h4 {
			font-weight: 700;
			line-height: 1.62;
			color: #555;
		}

		.program_container .main .panel-group .panel-body {
		padding: 15px;
		}

		.program_container .main .panel-group .panel-body .text {
			padding-left: 2px;
		}

		.guidedtrack.program_container .main .list li {
			position: relative;
			list-style: none;
		}

		.guidedtrack.program_container .main .list li::before {
			position: absolute;
			content: "";
			display: block;
			width: 6px;
			height: 6px;
			background-color: #66c6c1;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			top: 9px;
			left: -18px;
		}

		.guidedtrack.program_container .question.question-gradable {
			position: relative;
			padding: 1.05em 1em 1em 45px;
		}

		.guidedtrack.program_container .question.question-gradable::before {
			position: absolute;
			display: block;
			background-image: url(../wp-content/uploads/2018/01/question-star-turquise.png);
			background-size: 18px;
			content: "";
			width: 18px;
			height: 18px;
			background-repeat: no-repeat;
			left: 15px;
			top: 22px;
		}

		.guidedtrack.program_container .points {
			padding-left: 24px;
			right: 40px;
			top: -35px;
			position: relative !important;
			z-index: 1000;
			float: right;
		}

		.guidedtrack.program_container .points .total {
			position: relative;
		}

		.guidedtrack.program_container .points div {
			width: 70px;
			height: 70px;
			padding-top: 45px;
			font-size: 10px;
			font-family: "Arimo", Arial, sans-serif;
			right: 5px;
			position: relative;
			font-weight: 400;
			text-align: center;
			top: 0;
			border-radius: 50%;
		}

		.guidedtrack.program_container .points .total::before {
			position: absolute;
			display: block;
			content: "";
			background-image: url(../wp-content/uploads/2018/01/icon-star.png);
			width: 25px;
			height: 24px;
			background-size: 25px;
			top: 14px;
			left: 50%;
			margin-left: -12px;
			z-index: 1;
		}

		.guidedtrack.program_container .points .total {
			background: rgb(102,198,193);
			background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%);
			background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
			border: none;
			color: #fff;
		}

		.program_container .points .change {
			color: white;
		}

		.guidedtrack.program_container .points div.change.positive {
			position: absolute;
			top: 49px;
			right: -41px;
			padding-top: 30px;
			z-index: 2;
			background: rgb(102,198,193);
			background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%);
			background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%);
			border: none;
		}

		.program_container .main .slider-answer-widget .slider-label {
			display: inline-block;
			font-weight: 700;
			vertical-align: top;
			width: 18%;
			font-size: 14px;
			transform: none;
		}

		.slider.slider-horizontal {
			display: inline-block;
			max-width: 60%;
			width: 60% !important;
			vertical-align: top;
		}

		.slider-label.left, 
		.slider-label.right {
			position: relative;
			float: none;
			margin: 0;
		}

		.slider-label.left {
			margin-right: 2%;
		}

		.slider-label.right {
			margin-left: 2%;
			text-align: right;
		}

		.guidedtrack.program_container .tip.question-gradable {
			padding: 0 0 1em 45px;
			margin: 0;
		}

		audio {
			width: 100%;
			margin: 15px 0;
		}

		.navigation_container ul li {
			height: initial;
		}

		.guidedtrack.program_container .question.custom-menu, .guidedtrack.program_container .main .answers.custom-menu {
			padding: 0;
			background-color: transparent;
		}

		.program_container .main .multimedia_node {
			margin-top: 1.1em;
			margin-bottom: 1.1em;
			display: inline-block;
			width: 100%;
			text-align: center;
		}

		#run-menu .dropdown-toggle {
			z-index: 1001;
		}

		.dropdown-menu {
			background-color: #fff;
			border: 1px solid #eee;
			z-index: 1001;
			border-radius: 4px;
		}

		.dropdown-menu li:hover, 
		.dropdown-menu li:focus {
			filter: none;
		}

		.dropdown-menu li:hover a, 
		.dropdown-menu li:focus a, 
		#run-menu .dropdown-menu .glyphicon {
		color:  #66c6c1;
		}

		/* responsive styling */
		.guidedtrack.program_container {
			font-family: 'PT Serif', Times, serif;
		}

		@media (max-width: 992px) {
			html.gr__openmindplatform_org body {
				background-color: #fff;
				padding-top: 15px;
			}
	
			.guidedtrack.program_container {
				box-shadow: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				padding: 15px;
			} 
		}


		#program_navigation {
			background: none;
			box-shadow: none;
		}

		@media (max-width: 767px) {
			.guidedtrack.program_container > .main {
				width: 100%;
				float: left;
			}
			
			#program_navigation {
				position: relative !important;
				z-index: 1;
				max-width: 100%;
				top: 40px;
			}
			
			#program_navigation #back-button {
				left: 15px;
			}
			
			#back-button ~ #run-menu {
				right: 15px;
			}
			
			.guidedtrack .progress {
				position: relative;
				z-index: 1500;
				top: 0;
			}
			
			.navigation_container {
				position: relative;
				background: none;
				box-shadow: none;
			}
			
			.guidedtrack.program_container .points {
				width: 70px;
				margin: 0;
				top: 0;
				right: 25px;
				float: right;
			}
			
			.guidedtrack.program_container .points::before {
				z-index: 2000;
				left: 51px;
			}
			
			.guidedtrack.program_container .points div.change.positive {
				right: -23px;
				z-index: 3000;
			}

			strong, p strong {
				font-weight: bold;
				font-size: 18px;
			}

			.guidedtrack.program_container .main li.answer.selected span{
				display: none;
			}

			li label {
				font-size: 18px;
			}

			#run-menu, #back-button ~ #run-menu {
				top: 20px;
				right: -50px;
			}
		}

		@media (max-width: 991px) {
			.dropdown-menu.pull-right {
				left: 0 !important;
			}

			#program_navigation #run-menu {
				right: 0;
				top: 20px;
			}

			#run-menu .dropdown-toggle:focus {
				background-color: white !important;
			}

			/* Additional Styles */
			#program_navigation #back-button::before {
				width: 15px;
				height: 48px;
				background-color: #fff;
				position: absolute;
				display: block;
				content: "";
				top: 25px;
				left: -20px;
			}

			#program_navigation #back-button {
				z-index: 2000;
			}

			.slider.slider-horizontal {
				width: 100% !important;
			}

			.program_container .main .slider-answer-widget .slider-label {
				max-width: none;
				width: auto;
				margin-right: 0;
				float: left;
				transform: translateY(10px);
			}

			.slider-label.right {
				float: right !important;
				transform: translateY(-8px) !important;
				margin-top: -32px !important;
			}

			.slider-label.left {
				margin-top: -50px !important;
			}

			.program_container .main .slider-answer-widget .slider-label {
				max-width: 50% !important;
			}

			.slider-label.right {
				margin-top: -75px !important;
			}

			.slider .tooltip.top {
				margin-top: 22px;
			}

			.tooltip.top .tooltip-arrow {
				transform: rotate(180deg);
				top: 0;
				bottom: initial;
			}

			.slider.slider-horizontal {
				margin-bottom: 25px;
			}

			#program_navigation #run-menu {
				top: 20px;
				z-index: 4000;
			}

			#program_navigation #run-menu {
				right: initial;
				left: 0;
				background-color: #fff;
			}
		}

		@media (max-width: 768px) {
			.program_container .points {
				top: -35px;
			}
		}

		@media screen and (min-width: 768px) {
			#back-button { 
				opacity: 1 !important;
			}

			.maintain {
				background-color: #FCF8E3;
				max-width: 100%;
			}
		}

	
		@media screen and (max-width: 767px){
			.maintain {
				margin-top: 68px;
				margin-bottom: -48px;
			}
		}
	</style>

   
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
	<div aria-live='polite' class='guidedtrack program_container col-md-8 col-md-offset-2' data-environment='production' id='6brk3lm'>
		<div id='program_navigation'>
			<div id='back-button'></div>
			<div class='navigation_container'></div>
			<div id='run-menu'></div>
		</div>
		<div class='points'>
			<div class='total'></div>
			<div class='change positive' style='display: none;'></div>
		</div>
		<div class='maintain' style="display: none;"></div>
		<div class='main'></div>
	</div>

	 <script>
	  jQuery(document).ready(function() {
		var points = jQuery('.points').find('.total');
		  if (points.css('display') == 'block')
		  {
			jQuery('.points').css('z-index', '6000');
		  }
	  });
	</script>
</body>
</html>
