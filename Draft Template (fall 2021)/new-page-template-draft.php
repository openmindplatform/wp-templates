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
		<link rel="stylesheet" type="text/css" href="https://www.guidedtrack.com/assets/guidedtrack.css">
		<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|PT+Serif:400,400i,700,700i" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
            body {
				/* increased padding */
                padding-top: 40px;
                background-color: #fbfcfe;
            }
			
			/* parent of program-container div - center program container horizontally */
			.row{
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}

            /* Loader */
            .spinner>.double-bounce1, .double-bounce2 {
                background-color: #66c6c1;
            }

            /* Container basic styling */
            .program_container {
                background-color: #fff;
				/* reduce bottom padding */
                padding: 30px 50px 30px 50px;
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
            .program_container .text p {
                font-size: 18px;
                line-height: 1.62;
                color: #555;
            }

            .h1, 
            .h2, 
            .h3, 
            h1, 
            h2, 
            h3 {
                font-size: 24px !important;
				font-family: 'Arimo', Arial, sans-serif !important;
                font-weight: 700 !important;
                color: #404042 !important;
                margin-bottom: 30px !important;
                margin-top: 0 !important;
            }

            b, 
            strong {
                font-family: "800" !important;
                color: #111 !important;
                font-size: 19px !important;
            }

			a {
				color: #337ab7 !important;
				text-decoration: none !important;
			}
			
			a:hover, 
            a:focus {
                color: #66c6c1 !important;
            }

            /* Images */
			.program_container .multimedia_node * {
				margin-top: 16px;
				margin-bottom: 16px;
			}
			
			/* Component (Default — no classes added) */
			.program_container .component {
				padding: 12px;
				padding-bottom: 0;
				border: 1px solid;
				margin-bottom: 12px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
				border-color: #eee;
			}
			
			/* Points Bubble */
            .program_container .points div {
                width: 70px;
                height: 70px;
                padding-top: 40px;
                font-size: 10px;
                font-family: "Arimo", Arial, sans-serif;
                right: 5px;
                position: relative;
            }

            .program_container .points::before {
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

            .program_container .points div br {
                content: "";
                line-height: 0;
                padding-right: 3px;
            }

            .program_container .points .total {
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

            .program_container .points div.change.positive {
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

            .program_container .points {
                right: -4px;
                padding-left: 24px;
                background-color: #fff;
            }

            /* Progress Bar */
            /* */
            .program_container .progress {
				background-color: rgba(148, 207, 161, 0.2) !important;
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                border-radius: 5px;
                -webkit-border-radius: none;
                -moz-border-radius: none;
                /* overrides position: static that affixes progress to top of window */
                position: relative;
                height: 20px;
				/* reduce bottom margin to match enlarged nav container */
                margin-bottom: 5px;
				/* override new GT CSS positioning */
				top: auto !important;
				
            }
			
			@media screen and (min-width: 768px){
				.program_container .progress {
					width: auto !important;
				}
			}	
			
			@media screen and (max-width: 767px){
				.progress {
					position: fixed !important;
					width: calc(100% - 30px) !important;
					margin: 40px 30px 0 15px !important;
				}
			}
			
            .program_container .progress .progress-bar {
                line-height: 20px;
                font-family: "Arimo", Arial, sans-serif;
				/* enlarge font slightly */
                font-size: 11px;
				/* override new GT CSS narrow height, heavier font */
				height: auto !important;
				font-weight: 400 !important;
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
                background: rgb(102,198,193) !important; /* Old browsers */
                background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%) !important; /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%) !important; /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

                box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
                -webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
                -moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15);
				
				z-index: 1 !important;
            }


            /* Program navigation */
            #program_navigation {
				display: flex;
				flex-direction: row;
                border-bottom: 1px solid #eee !important;
                min-height: 38px !important;
				/* override GT CSS */
				-webkit-box-shadow: none !important;
   				box-shadow: none !important;
				width: 100% !important;
				z-index: 10 !important;
            }
			
			@media (max-width: 767px) {
				#program_navigation {
					/* override new GT CSS positioning nav at very top */
					margin-right: 15px !important;
					max-width: calc(100% - 30px) !important;
					margin-bottom: 1em !important;
				}
			} 
			
			/* override new GT CSS; make opaque */
			#program_navigation #back-button{
				opacity: 1;
			}

            #program_navigation #back-button span.glyphicon{
				/* place in front of bottom nav border*/
				z-index: 10;
                width: 20px;
                height: 19px;
                line-height: 19px;
                background-image: url("../wp-content/uploads/2017/12/icon-back.png");
                background-size: 20px 19px;
                background-repeat: no-repeat;
                text-indent: -9999px;
                left: -5px;
				/* adjust positioning to line up with nav border */
                top: 39px;
                background-color: #fff !important;
                padding-right: 40px !important;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }
			
			@media (max-width: 767px) {
				#program_navigation #back-button span.glyphicon{
					left: 0px !important;
				}
			}

            #program_navigation #back-button span.glyphicon:hover {
                background-image: url("../wp-content/uploads/2017/12/icon-back_green.png");
            }

            .navigation_items .text-center {
                display: none !important;
            }

			/* hide nav item by default */
			li.no-icon {
                display: none !important;
            }

            #program_navigation .navigation_container {
				/* correct for excessive spacing */
                margin-top: 0;
                margin-bottom: 0;
				width: auto !important;
            }
			
			/* override GT CSS box-shadow for small screens */
			@media screen and (max-width: 767px) {
				.program_container .navigation_container {
					background: var(--themeColor-background);
					-webkit-box-shadow: none;
					box-shadow: none;
					position: relative;
					bottom: auto !important;
					left: 0;
					margin-top: 0px;
					z-index: 100;
				}
			}

            #program_navigation .navigation_container ul.navigation_items {
                font-size: 14px;
                font-family: "Arimo", sans-serif;
                font-weight: 500;
                color: #aaa;
				/* remove lowered positioning */
                top: 0;
                position: relative;
            }

            #program_navigation .navigation_container ul.navigation_items li {
                position: relative;
                padding-left: 42px;
                font-size: 16px;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }

            .no-touch #program_navigation .navigation_container ul.navigation_items li:hover, 
            #program_navigation .navigation_container ul.navigation_items .no-touch li:hover, 
            .no-touch #program_navigation #run-menu:hover, 
            #program_navigation .no-touch #run-menu:hover {
                color: #66c6c1;
            }

            #program_navigation .navigation_container ul.navigation_items li {
                /* Trying to fix narrow container for nav li "Return to Main Menu" */
                width: auto;
                background-color: #fff;
                background-image: url("../wp-content/uploads/2017/12/icon-home.png");
                background-repeat: no-repeat;
                background-size: 16px;
                background-position: 18px 10px;
            }

            #program_navigation .navigation_container ul.navigation_items li:hover{
                background-image: url("../wp-content/uploads/2017/12/icon-home_green.png");
            }

            .gt-program-navigation-button.active, 
            #program_navigation .active#back-button, 
            #program_navigation .navigation_container ul.navigation_items li.active, 
            #program_navigation .active#run-menu {
                border-bottom: none;
            }

            /* Run Menu */

            #program_navigation #run-menu {
				/* override GT CSS positioning */
				position: absolute;
				left: auto !important;
				right: -47 !important;
				top: 47 !important;
				line-height: 64px;
				width: 47px;
            }
			
			@media (max-width: 767px) {
				#program_navigation #run-menu {
					/* try to get menu visible in small screens */
					right: 0 !important;
					top: 15 !important;
				}
			}
			
            .dropdown-menu {
                border: 1px solid #f7f7f7 !important;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
				/* trying to fix positioning */
				left: auto !important;
				right: 0 !important;
            }
			
				
			.program_container .dropdown-menu.pull-right {
				/* override new GT CSS — put menu closer to toggle */
				margin-top: 30px !important;
			}
			
			@media screen and (max-width: 767px) {
				.program_container .dropdown-menu.pull-right {
					max-width: 90vw !important;
					margin-top: 48px !important;
					z-index: 100;
					/* darker box shadow for more contrast on mobile */
					box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2) !important;
					-webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2) !important;
					-moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2) !important;
				}
			}
			
			/* imported from GT legacy CSS — menu toggle behavior */
			#program_navigation #run-menu .dropdown-toggle {
				display: inline-block;
				margin-bottom: 0;
				font-weight: 400;
				line-height: 1.42857;
				white-space: nowrap;
				text-align: center;
				vertical-align: middle;
				touch-action: manipulation;
				cursor: pointer;
				user-select: none;
			}
			
			@media (max-width: 768px) {
				/* override new GT CSS focus styling for mobile */
				.program_container #run-menu .dropdown-toggle:focus {
					background-color: transparent !important;
					transition: none !important;
				}
			}

            #program_navigation #run-menu .dropdown-toggle span {
                color: #555;
				/* increase size of icon */
				font-size: 1.2em;
				padding-bottom: 0px !important;
				/* override GT CSS reduced opacity */
				opacity: 1 !important;
            }
			
			
			.dropdown-menu li {
				/* override vertical divider between items in dropdown menu */
				border-bottom: none !important;
				z-index: 1001;
			}

            .dropdown-menu>li>a {
                font-family: "Arimo", sans-serif;
                color: #404042 !important;

                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }

            .dropdown-menu>li>a:focus,  .dropdown-menu>li>a:hover {
                background-color: #fff;
                color: #66c6c1;
            }

            .gt-program-navigation-button.open, 
            #program_navigation .open#back-button, 
            #program_navigation .navigation_container ul.navigation_items li.open, 
            #program_navigation .open#run-menu, 
            .gt-program-navigation-button:active, 
            #program_navigation #back-button:active, 
            #program_navigation .navigation_container ul.navigation_items li:active, 
            #program_navigation #run-menu:active {
                color: #66c6c1;
            }

            /* Main menu list items styling */
            .button-group.custom-menu li.answer:nth-child(5), 
            .button-group.custom-menu li.answer:nth-child(4), 
            .button-group.custom-menu li.answer:nth-child(3), 
            .button-group.custom-menu li.answer:nth-child(2), 
            .button-group.custom-menu li.answer:first-child {
                border: 1px solid #66c6c1;
            }

            .program_container .question.custom-menu {
                padding: 0;
                background-color: transparent;
            }

            .program_container .tip.custom-menu {
                background-color: transparent;
                padding: 0;
            }

            .program_container .main .answers.custom-menu {
                background-color: transparent;
                padding: 0;
            }


            /* Button Main Styling */
			.program_container .btn {
				/*override new GT CSS large top margin*/
				margin: 0.5em 0px 7px 0px;
			}
			
            .program_container .btn-default, 
            ul.button-group li.btn-primary {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
                background: rgb(102,198,193); /* Old browsers */
                background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background-image: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                white-space: normal;
                font-family: "Arimo", Arial, sans-serif;
                font-weight: 700 !important;
				/* slightly larger font for better contrast */
                font-size: 19px;
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

            .program_container .btn-default.active, 
            .program_container .btn-default.focus, 
            .program_container .btn-default:active, 
            .program_container .btn-default:focus, 
            .program_container .btn-default:hover, 
            ul.button-group li.btn-primary:hover {
                color: #fff;

                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#93cea0+0,66c6c1+100 */
                background: rgb(147,206,160); /* Old browsers */
                background: -moz-linear-gradient(left, rgba(147,206,160,1) 0%, rgba(102,198,193,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

                border: none;
            }

            .btn-group-lg>.btn, 
            .btn-lg {
                padding: 15px;
                margin-top: 30px !important;
            }

            /* Accordion Styling First Level */
            .program_container .main .panel-group .panel-heading a, 
            .program_container .main .panel-group .panel-heading a:link, 
            .program_container .main .panel-group .panel-heading a:hover, 
            .program_container .main .panel-group .panel-heading a:active, 
            .program_container .main .panel-group .panel-heading a:visited {
                color: #404042;
            }

            .text + .panel-group {
                margin-top: 15px;
            }

            .panel-default>.panel-heading {
                background-color: #fff !important;
            }

            .panel-heading {
                padding: 0;
            }

            .panel-heading .panel-title h4 {
                padding: 15px 20px;
                font-size: 18px;
                line-height: 28px;
            }

            .panel-heading .panel-title {
                width: 100%;
                display: block;
            }

            .panel-heading .panel-title[aria-expanded="true"] {
                border-left: 2px solid #66c6c1;
                transition-delay: 0.3s;
            }

            .panel-collapse, 
            .panel-title {
                border-left: 2px solid;
                border-color: transparent;
            }

            .panel-collapse.collapse.in {
                border-left: 2px solid #66c6c1;
            }

            .panel-group .panel-heading+.panel-collapse>.list-group, 
            .panel-group .panel-heading+.panel-collapse>.panel-body {
                border-top: 0;
                padding-top: 0;
            }

            .panel-group .panel-body.main .text {
                padding-left: 2px;
                padding-top: 0;
            }

            .panel {
                background-color: #fff !important;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
                border: 1px solid #f7f7f7 !important;

                -webkit-transition: all 0.3s ease-out !important;
                -moz-transition: all 0.3s ease-out !important;
                -o-transition: all 0.3s ease-out !important;
                transition: all 0.3s ease-out;
            }

            .panel:hover {
                box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
                -webkit-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
                -moz-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
            }

            .program_container .main .panel-group .panel-heading a.panel-title .toggle-expand {
                color: #404042 !important;
                top: 1em !important;
            }

            .panel-group .panel-heading+.panel-collapse>.list-group, 
            .panel-group .panel-heading+.panel-collapse>.panel-body {
                border-top: 1px solid #eee !important;
				/* added padding on all sides of panel content */
                padding: 1em !important;
            }

            .program_container .main .panel-group .panel-heading a.panel-title.collapsed .toggle-expand .glyphicon-chevron-down {
                top: 7px;
            }

            /* Accordion Second Level */
            .panel .panel-collapse .panel-body .panel-group .panel .panel-heading h4 {
                font-weight: 700;
                line-height: 1.62;
                color: #555;
            }

            /* Main content styling */
            .program_container .main {
				/* override GT CSS extra padding on left/right, extra bottom margin */
                padding: 3em 0em 0em 0em;
				margin-bottom: 0em;
            }
			
			@media screen and (max-width: 767px) {
				.program_container .main {
					margin-top: 48px;
				}
			}
				

            .program_container .main .prompt {
				/* bold & slightly enlarge question prompts */
				font-size: 19px;
                font-weight: 700;
				/* decrease top margin slightly */
                margin-top: .5em;
                margin-left: 0;
                margin-right: 0;
            }
			
			/* don't display blank question prompt */
			.program_container .prompt:empty {
                padding: 0;
                margin: 0;
            }

            /* Questions General Styling */
            .program_container .question {
                font-size: 18px;
                font-weight: 800;
                
                background-color: #f7f7f7;
                border-radius: 8px 8px 0 0;
                -webkit-border-radius: 8px 8px 0 0;
                -moz-border-radius: 8px 8px 0 0;
                /* eliminate bottom padding */
                padding: 1em 1em 0.5em 1em;
            }

            ul.button-group {
                border: none;
            }

            ul.button-group li {
                font-size: 18px;
                line-height: 28px;
                font-weight: 400;

                background-color: #fff !important;
                border: 1px solid #f7f7f7 !important;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                -moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1) !important;
                border-radius: 5px !important;
                -webkit-border-radius: 5px !important;
                -moz-border-radius: 5px !important;

                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }
			
			.program_container li.answer {
				/*override GT CSS smaller font sizes for questions */
				font-size: 18px;
			}

			/* imported from GT legacy CSS */
			ul.button-group .answer.selected {
				font-weight: 700;
			}

            .no-touch ul.button-group .answer:hover:not(.selected) {
/*                 background-color: #f5f6fa !important; */
				/* try higher contrast color for hover state */
				background-color: rgba(148, 207, 161, 0.1) !important;
				border: 1px solid transparent !important;
				font-weight: 500 !important;
                box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
                -webkit-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
                -moz-box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2) !important;
            }

            ul.button-group .answer {
                margin-bottom: 10px !important;
            }

            ul.button-group .answer.selected {
/*                 background-color: #f5f6fa !important; */
				background-color: rgba(148, 207, 161, 0.3) !important;
				border: 1px solid transparent !important;
            }

            ul.button-group .answer.selected span.glyphicon {
                display: none;
            }

            ul.button-group li:last-of-type, 
            ul.button-group li:first-of-type {
                border-bottom: 1px solid #f7f7f7 !important;
                border-radius: 5px !important;
                -webkit-border-radius: 5px !important;
                -moz-border-radius: 5px !important;
            }

            .program_container .main .answers {
                padding: 1em;
                margin: 0;
                background-color: #f7f7f7;
                
                -webkit-border-radius: 8px 8px 0 0;
                -moz-border-radius: 8px 8px 0 0;
                border-radius: 0 0 8px 8px;
            }

            /* Tip styling */
            .program_container .tip {
                font-size: 16px;
				color: #666 !important;
                background-color: #f7f7f7;
				/* add top margin to counterbalance lack of bottom padding for prompt */
                padding: 0.5em 0 1em 1.1em;
                margin: 0;
            }

            .program_container .tip:empty {
                padding: 0;
                margin: 0;
            }


            .program_container .main .answer_textbox {
                background-color: #f7f7f7;
                padding: 1em;
                margin: 0;
            }

			/* override full width for submit button in new GT CSS */
            .program_container .answer_textbox .answer_submit {
                margin-left: 0;
				border: none !important;
				width: auto !important;
            }
			
			@media screen and (max-width: 767px) {
				/* add top margin above submit button on mobile since text boxes are full width above */
				.program_container .answer_textbox .answer_submit {
					margin-top: 1em;
				}
			}		

            .program_container .answer_input {
				/* override extra top margin in new GT CSS */
				margin-top: 0px !important;
                margin-right: 1em;
            }
			
			.program_container .answer_input .form-control, 
			.program_container .form-inline .input-group, 
			.program_container .form-inline .input-group>.form-control {
				/* override full width in GT CSS */
				width: auto !important;
			}
			
			@media screen and (max-width: 767px) {
				.program_container .answer_input .form-control, 
				.program_container .form-inline .input-group, 
				.program_container .form-inline .input-group>.form-control {
					/* override full width in GT CSS */
					width: 100% !important;
				}
			}
			


            /* Gradable Question Styling */
            .program_container .question.question-gradable {
                position: relative;
                padding: 2px 1em 1em 45px;
            }

            .program_container .question.question-gradable::before {
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

            .program_container .tip.question-gradable {
                background-color: #f7f7f7;
                margin: 0;
                padding: 0 0 1em 45px;
            }

            .program_container .tip.question-gradable:empty {
                padding: 0;
                margin: 0;
            }


            /* Slider Styling */
            .program_container .main .slider-answer-widget .slider-label {
                font-size: 14px;
                font-weight: 700;
            }

            .slider-track {
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                background-color: rgba(63, 80, 160, 0.1) !important;
                background-image: none;
				/* override added border in new GT CSS; add small margin to make room for labels */
				border: none !important;
				margin-top: 5px !important;
            }

            .program_container .main .slider-answer-widget .slider-selection {
                background-color: #66c6c1;
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
            }

            .slider-handle {
                width: 30px;
                height: 30px;
                background-color: #66c6c1 !important;
                background-image: none;
                opacity: 1;
				/* override added border in new GT CSS */
				border: none !important;
            }

            .slider.slider-horizontal .slider-handle {
                margin-left: -15px;
				/* move handle down a smidge */
                margin-top: -5px;
            }

            .slider .tooltip {
				/* override new GT CSS higher tooltip placement */
                margin-top: .5em !important;
            }
			
			/* override new GT CSS matching tooltip to theme color */
			.slider .tooltip .tooltip-inner {
				background-color: #666 !important;
			}
			.slider .tooltip .tooltip-arrow {
				border-top-color: #666 !important;
			}

            /* Styling background on slider widget */
            .program_container .main .slider-answer-widget {
                background-color: #f7f7f7;
                margin: 0 0 1em 0;
				/* extra padding on top & bottom */
                padding: 2em 1em 1.5em 1em;
                width: 100%;
                box-sizing: border-box;
                
                border-radius: 0 0 8px 8px;
                -webkit-border-radius: 0 0 8px 8px;
                -moz-border-radius: 0 0 8px 8px;
            }

			.slider-answer-widget .slider-label.left {
                margin-right: 0;
                padding-right: 1em;
            }
            .slider-answer-widget .slider-label.right {
                margin-left: 0;
                padding-left: 1em;
            }

            /* Forms Styling */

			/* override extra margin in new GT CSS */
			textarea.form-control {
				margin-top: 0 !important;
			}
			
			.form-inline .form-control {
				/* override new GT CSS enlarged form input font */
				font-size: 15px !important;
			}
			
            .form-control {
                border: 1px solid #eee !important;
				background-color: #fff !important;
				border-radius: 4px !important;
				/* styling details import from bootstrap.css  — not working */
				-webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
				box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
				-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s !important;
				-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
				transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
            }

            .input-group {
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1) !important;
                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1) !important;
                -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1) !important;
            }

            .input-group-addon {
                background-color: rgba(63, 80, 160, 0.1) !important;
                border: 1px solid #eee !important;
				color: #555 !important;
            }

            .form-control:focus {
                box-shadow: none !important;
                -webkit-box-shadow: none !important;
                -moz-box-shadow: none !important;
                border-color: #66c6c1 !important;
            }

            ul.navigation_items li .navigation_icon {
                line-height: 23.8px;
            }

            /* Lists */
			.program_container .main .list {
				list-style: disc outside;
				/* override shallow padding in GT CSS */
				padding-left: 40px;
				margin: 0px 0px 10px 0px;
            }
			
            .program_container .main .list li {
				font-size: inherit !important;
				/* this isn't working */
/* 				font-weight: inherit !important; */
				line-height: 1.6em !important;
				list-style: none !important;
                position: relative !important;
				/* override extra padding in GT CSS */
				margin-bottom: 8px;
            }
			
			/* this should force strong to display as bold but isn't */
			.program_container .main .list li strong {
				font-weight: "800" !important;
                color: #111 !important;
                font-size: 19px !important;
            }

            .program_container .main .list li::before {
                position: absolute !important;
                content: "" !important;
                display: block !important;
                width: 6px !important;
                height: 6px !important;
                background-color: #66c6c1 !important;
                border-radius: 50% !important;
                -webkit-border-radius: 50% !important;
                -moz-border-radius: 50% !important;
                top: 13px !important;
                left: -18px !important;
				z-index: 5 !important;
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
                body {
                    background-color: #fff;
                    padding-top: 15px;
                }

                .program_container {
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

            /* Styling for Participant Progress Table div */
            .table-button{ 
                display: inline-block;
                border-width: 2px;
                border-radius: 3px;
            }
            #s-btn {
                margin-left: -6px;
            }
            #pp-display {
                margin-top: 15px;
                font-size: 12px;
            }

            #dl-button, 
            #searchBox {
                float: right;
                margin-right: 5px;
            }

            .styled-table{ 
                overflow:auto; 
            }

            .styled-table table{
                width: 100%;
                table-layout: auto;
                margin: auto;
                margin-top: 15px;
                border-collapse: collapse;
                font-size: 14px;
                font-family: sans-serif;
                border-spacing: 0;
                overflow: hidden;
                margin-bottom: 0px;
            }

            .styled-table thead tr {
                white-space: nowrap;
                background-color: #00B496;
                color: #ffffff;
                text-align: left;
                font-size: 14px;
                cursor:  pointer;
            }

            .styled-table thead th{ 
                padding: 12px 12px 12px 8px;
            }

            .styled-table th,
            .styled-table td {
                padding: 5px 8px;
            }

            .styled-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .styled-table tbody tr:last-of-type {
                border-bottom: 2px solid #00B496;
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

	</head>
	
    <script>

    	//Sets default values
		var AccessCode, csvHeaders, scoreHeaders, progressHeaders, tableData={};

		$(window).on("loadData", function(event, data){
		    tableData = data;
		});

		//Loads CSV table headers and initializes table data object
		$(window).on("loadSettings", function(event, data){
		  tableData={};
		  AccessCode = data.AccessCode;
		  csvHeaders = data.csvHeaders; 
		     
		});

		//Loads Headers and calls function to generate table 
		$(window).on("loadHeaders", function(event, data){

		  // Sets score and progress table headers expected by AccessCode
		  scoreHeaders = data.score;
		  progressHeaders = data.progress;

		  // Displays participant progress table
		  $(".main").before($('#pp-display'));
		  $('.main').css("padding-top","0em");

		  $('#pp-display').css("display","block");
		  

		  // Increases size of container to hold table
		  $(".container").css("width","1400px");

		  //Defaults to generate progress table 
		  btnSelected(1);
		  generateTable(progressHeaders, tableData);

		});

		// Closes table and removes div visibility
		$(window).on("closeTable", function(event, data){
		   tableData = {};
		  // Decreases size of container to default
		    $(".container").css("width","1170px");
		    $('.main').css("padding-top","3em");
		  // Hides participant progress table 
		  $('#pp-display').css("display","none");

		});

		// Adds individual users to tableData object with OMID
		$(window).on("addUser", function(event, data){
		    tableData[data.OMID] = {};
		    tableData[data.OMID] = data;
		    delete tableData[data.OMID]['OMID'];
		});

		// Uses OMID to add Participant progress data to tableData object
		$(window).on("addUserData", function(event, data){
		    try{
			    Object.assign(tableData[data.OMID], data);
			    delete tableData[data.OMID]['OMID'];
		    }
		    catch(err){
		     	console.log(err);
		    }
		});

		function generateTable(headers, data) {
		  //Creates table
		  var table = document.createElement("table");
		  table.id='pp-table';
		  //Inserts empty header row at top
		  var header = table.createTHead();
		  // Create an empty <tr> element and add it to the first position of <thead>:
		  var tr = header.insertRow(0);    

		  for (var i = 0; i < headers.length; i++) {
		    var th = document.createElement("th");      // table header.
		    th.setAttribute("onclick", "sortTable("+i+")" ); //makes headers clickable for sorting
		    th.innerHTML = headers[i] + " ";
		    th.innerHTML += '<i class="fa fa-sort" aria-hidden="true"></i>';
		    tr.appendChild(th);
		  }
		  var row, body = table.createTBody();
		  // Adds data to the table mapped as rows.
		  for (var item in data) {
		    let record = data[item];
		    row = body.insertRow(-1);
		    for (var j = 0; j < headers.length; j++) {
		      var tabCell = row.insertCell(-1);
		      if (record[headers[j]] != null)
		        tabCell.innerHTML = record[headers[j]];
		    }
		  }

		            var divShowData = document.getElementById('showData');
		            divShowData.innerHTML="";
		  divShowData.appendChild(table);
		  
		} 

		// Sets color selected for table buttons 
		function btnSelected(n){
			 if(n==1){ 
			   $('#p-btn').css('background','#00B496');
			   $('#p-btn').css('color','white');
			   $('#s-btn').css('background','#fff');
			   $('#s-btn').css('color', '#333');
			   
			 }
			 else {
			   $('#p-btn').css('background','#fff');
			   $('#p-btn').css('color', '#333');
			   $('#s-btn').css('background','#00B496');
			   $('#s-btn').css('color','white');
			}
		}

		//Sorts table using headers
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("pp-table");
		  switching = true;
		  // Set the sorting direction to ascending:
		  dir = "asc";
		  /* Make a loop that will continue until
		  no switching has been done: */
		  while (switching) {
		    // Start by saying: no switching is done:
		    switching = false;
		    rows = table.rows;
		   
		    for (i = 1; i < (rows.length - 1); i++) {
		      // Start by saying there should be no switching:
		      shouldSwitch = false;
		      /* Get the two elements you want to compare,
		      one from current row and one from the next: */
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		      /* Check if the two rows should switch place,
		      based on the direction, asc or desc: */
		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          // If so, mark as a switch and break the loop:
		          shouldSwitch = true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          // If so, mark as a switch and break the loop:
		          shouldSwitch = true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch) {
		      /* If a switch has been marked, make the switch
		      and mark that a switch has been done: */
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      // Each time a switch is done, increase this count by 1:
		      switchcount ++;
		    } else {
		      /* If no switching has been done AND the direction is "asc",
		      set the direction to "desc" and run the while loop again. */
		      if (switchcount == 0){ 
		       if(dir == "asc") {
		        dir = "desc";
		        switching = true;
		       }
		      }
		    }
		  }
		}
		  
		//Searches table using search box input
		function filterList() {
		  // Declare variables
		  var input, filter, table, tr, fName, lName, i, txtValue;
		  input = document.getElementById("searchBox");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("pp-table");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
		    lName = tr[i].getElementsByTagName("td")[0];
		    fName = tr[i].getElementsByTagName("td")[1];
		    if (fName || lName)  {
		      txtValue = lName.textContent || lName.innerText;
		      txtValue2 = fName.textContent || fName.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } 
		      else if (txtValue2.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		    }
		      else {
		        tr[i].style.display = "none";
		      }
		    }
		  }
		}

		//Triggers CSV download using csv headers
		function downloadCSV() {

		  var csvTable=[]
		  
		    for (var obj in tableData ){
		      let s = tableData[obj];
		      csvTable.push(s);
		    }
		    const content = csvTable.map(r => Object.values(r).join());
		    var csv = [csvHeaders].concat(content).join("\n");

		    var exportedFilename = AccessCode + '.csv' || 'export.csv';

		  var blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
		  if (navigator.msSaveBlob) { // IE 10+
		      navigator.msSaveBlob(blob, exportedFilename);
		  } else {
		      var link = document.createElement("a");
		      if (link.download !== undefined) { // feature detection
		          // Browsers that support HTML5 download attribute
		            var url = URL.createObjectURL(blob);
		            link.setAttribute("href", url);
		            link.setAttribute("download", exportedFilename);
		            link.style.visibility = 'hidden';
		            document.body.appendChild(link);
		            link.click();
		            document.body.removeChild(link);
		      }
		  }
		}

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
    <div id="pp-display" style="display:none">
        <br></br>
        <h3 style="margin-bottom:3px">Participant Progress Dashboard</h3>

        <p style="font-size:15px">Below you can view the progress of your participants on the OpenMind program. Only participants who have completed at least lesson 1 will display.</p>

        <input type="text" id="searchBox" onkeyup="filterList()" placeholder="Search for names...">

        <button type="button" onclick="downloadCSV()" id="dl-button">Download</button>

        <button type="button" onclick="generateTable(progressHeaders, tableData);btnSelected(1)" id="p-btn" class="table-button">View Progress</button>
        <button type="button" onclick="generateTable(scoreHeaders, tableData);btnSelected(2)" id="s-btn" class="table-button">View Scores</button>

    <div class='styled-table' id='showData'></div>
  </div>
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