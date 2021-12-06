<?php
/*
Template Name: Blank Page Stage
*/
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<html>
	<head>
		<title>OpenMind</title>
		<link rel="icon" href="https://openmindplatform.org/wp-content/uploads/2017/11/cropped-OM-Icon-32x32.png" sizes="32x32" />

		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<!-- Essential for GT embed -->
		<script src="https://www.guidedtrack.com/assets/jquery_gt.js"></script>
		<script src="https://www.guidedtrack.com/assets/gt_interpreter.js"></script>
		<script src="https://www.guidedtrack.com/assets/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://www.guidedtrack.com/assets/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://www.guidedtrack.com/assets/guidedtrack.css">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|PT+Serif:400,400i,700,700i|Caladea:400,400i,700,700i" rel="stylesheet">
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
			@media screen and (max-width: 767px) {
				body {
                    padding-top: 0px;
                }
				.program_container {
					margin-bottom: 20px;
					padding: 0px;
				}
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
			
			i, 
            em {
                font-size: 19px;
            }

            b, 
            strong {
				font-family: 'Caladea', Times, serif; 
                font-weight: 700 !important;
                color: #222 !important;
				font-size: 20px;
            }
			
			a {
				color: #337ab7 !important;
				text-decoration: none !important;
			}
			
			a:hover, 
            a:focus {
                color: #66c6c1 !important;
            }
			
			/* Mobile Typography (smaller font sizes) */
			@media screen and (max-width: 767px) {
				.program_container .text p {
					font-size: 17px;
				}
				.h1, 
				.h2, 
				.h3, 
				h1, 
				h2, 
				h3 {
					font-size: 22px !important;
				}
				i, 
           		em {
					font-size: 17.5px;
				}
				b, 
           		strong {
					font-size: 18px;
				}
			}


            /* Images */
			.program_container .multimedia_node * {
				/* adjust margins */
				margin-top: 16px;
				margin-bottom: 24px;
			}
			
			/* overrides new GT CSS default image sizing for speech bubble icons in P2Ps*/
			img[src*="https://openmindplatform.org/wp-content/uploads/2020/11/noun_speech_1966348.png"] {
				height: 40px !important;
				width: 50px !important;
			}
			
			/* iFrames */
			@media screen and (min-width: 768px) {
				.multimedia_node iframe {
					height: 550px !important;
				}
			}
			@media screen and (max-width: 767px) {
				.multimedia_node iframe {
					height: 400px !important;
					max-width: 700px;
				}
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
			
			/* white square container for points bubble*/
			.program_container .points {
                padding: 8px 4px 0 18px !important;
                background-color: #fff;
				height: 106px;
				right: 0px;
				z-index: 150 !important;
				/* imported from GT legacy; positioning needs to be relative because y positioning depends on if progress is visible or not */
				float: right;
				position: relative;
				top: -43px;
            }
						
			/* applies to divs .total & .change */
			.program_container .points div {
                width: 70px;
                height: 70px;
                padding-top: 40px;
                font-size: 11px;
                font-family: "Arimo", Arial, sans-serif;
                right: 5px;
                position: relative;
				/* imported from GT legacy CSS */
    			border-radius: 50%;
				text-align: center;
            }

            /* star icon */
			.program_container .points::before {
                position: absolute;
                display: block;
                content: "";
                background-image: url("../wp-content/uploads/2018/01/icon-star.png");
                width: 25px;
                height: 24px;
                background-size: 25px;
                top: 24px;
                left: 50%;
                margin-left: -10px;  
                z-index: 200 !important;
            }
			
            .program_container .points div br {
                content: "";
                line-height: 0;
                padding-right: 3px;
            }

			/* container for number of points */
            .program_container .points .total {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
                background: rgb(102,198,193); /* Old browsers */
                background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

                box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.15);
                -webkit-box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.15);
                -moz-box-shadow:  0 5px 15px 0 rgba(0, 0, 0, 0.15);

                border: none;
                color: #fff;
				padding-top: 46px !important;
				z-index: 175 !important;
            }
			
			/* points text */
			.program_container .total span {
				position: absolute;
				right: 26px;
			}
				
			/* override new GT CSS mini star icon before points */
			.program_container .total::before {
				display: none !important;
			}
			
            .program_container .points div.change.positive {
				/* fix positioning so it overlays bubble*/
				top: -20px;				
				/* hide when not active */
				display: none;
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#66c6c1+0,93cea0+100 */
                background: rgb(102,198,193); /* Old browsers */
                background: -moz-linear-gradient(left, rgba(102,198,193,1) 0%, rgba(147,206,160,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, rgba(102,198,193,1) 0%,rgba(147,206,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                border: none;
				/*override new GT CSS*/
				color: #fff !important;
				font-size: 20px;		
            }
			
			.program_container .points div.change.positive span{
				margin: -17px;
    			position: absolute;
			}
			
			/* Mobile formatting for Points */
			@media screen and (max-width: 767px) {
				.program_container .points {
					top: 20px; 
					height: 60px !important;
					width: 60px !important;
					margin-left: 0px !important;
					margin-right: -6px !important;
					max-width: 60px !important;
					padding: 6 3px 0 6px !important;
					position: fixed;
					background-color: transparent !important;
				}
				.program_container .points div {
					font-size: 10px;
					width: 45px;
					height: 45px;
				}
				.program_container .points::before {
					top: 13px;
					width: 20px;
					height: 20px;
					background-size: 20px;
					margin-left: -16px;  
				}
				.program_container .total {
					min-width: auto;
					box-shadow: 1px 3px 6px 0 rgba(0, 0, 0, 0.12) !important;
					-webkit-box-shadow: 1px 3px 6px 0 rgba(0, 0, 0, 0.12) !important;
					-moz-box-shadow:  1px 3px 6px 0 rgba(0, 0, 0, 0.12) !important;
					/* override GT CSS */
					margin: 0px !important;
				}				
				.program_container .total span {
					position: fixed;
					transform: translateY(-15px);
					right: 22px;
				}
				.program_container .points div.change.positive {
					top: 8px;
					margin-left: 3px;
					height: 40px;
					width: 40px;
				}
				.program_container .points div.change.positive span {
					margin: -30px 10px -12px -12px;
					font-size: 14px;
				}
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
				z-index: 300 !important;
				
            }		
			/* overrides new GT CSS full width default, except on mobile */
			@media screen and (min-width: 768px){
				.program_container .progress {
					width: auto !important;
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
			
			/* Mobile formatting for Progress */
			@media screen and (max-width: 767px){
				.program_container .progress {
					position: fixed !important;
					width: calc(100% - 30px) !important;
					margin: 7px 30px 0 15px !important;
					height: 13px !important;
				}
				
				.program_container .progress .progress-bar {
					font-size: 10px !important;
					line-height: 13px !important;
				}
			}

			/* Maintain div */
			.program_container .maintain {
				background-color: transparent !important;
				display: none;
			}
			
            /* Program navigation */
            #program_navigation {
				display: flex;
				flex-direction: row;
				align-items: center;
				justify-content: center;
                border-bottom: 1px solid #eee !important;
                min-height: 38px;
				/* override GT CSS */
				height: 38px;
				-webkit-box-shadow: none;
   				box-shadow: none;
				width: 100% !important;
				z-index: 10 !important;
            }
			
			/* override new GT CSS; make opaque */
			#program_navigation #back-button{
				opacity: 1;
			}

            #program_navigation #back-button span.glyphicon{
				/* place in front of bottom nav border*/
				z-index: 150;
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
                padding-right: 36px !important;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }

            #program_navigation #back-button span.glyphicon:hover {
                background-image: url("../wp-content/uploads/2017/12/icon-back_green.png");
            }

			/* hide home icon */
            .navigation_items .text-center {
                display: none !important;
            }
			/* hide nav item if it lacks an accompanying icon */
			li.no-icon {
                display: none !important;
            }

            .program_container .navigation_container {
				/* correct for excessive spacing */
                margin-top: 0;
				margin-bottom: 0;
				width: calc (100% -60px) !important;
            }


            #program_navigation .navigation_container ul.navigation_items {
                font-size: 14px;
                font-family: "Arimo", sans-serif;
                font-weight: 500;
            }

            .program_container .navigation_container ul li {
                position: relative;
				/* reduce padding */
                padding: 0 10px 0 35px;
                font-size: 16px;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
				background-color: #fff;
				color: rgb(80, 80, 80, .6);
                background-image: url("../wp-content/uploads/2017/12/icon-home.png");
                background-repeat: no-repeat;
                background-size: 16px;
                background-position: 10px 7px;
				/* override new GT CSS */
				max-width: max-content !important;
				height: 30px !important;
				margin-top: 45px;
				opacity: 1 !important;
            }
		
			/* Mobile styling for Nav */
			@media screen and (max-width: 767px) {
				#program_navigation {
					/* adjust nav dimensions when it's sticky on mobile */
					margin-right: 15px !important;
					margin-left: 0px !important;
/* 					max-width: calc(100% - 30px) !important; */
					margin-bottom: 1em !important;
					-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
					box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
				}
				
				#program_navigation #back-button span.glyphicon{
					/* place within sticky header on mobile */
					left: 15px !important;
					margin-top: -10px !important;
					background-size: 15px 15px;
					height: 15px;
					width: 15px;
				}
				
				/* override GT CSS box-shadow for small screens */
				.program_container .navigation_container {
					background: var(--themeColor-background);
					-webkit-box-shadow: none;
					box-shadow: none;
					position: relative;
					bottom: auto !important;
					left: 0;
					margin-top: 0px;
				}
				
				.program_container .navigation_container ul li {
					margin-top: 26px !important;
					font-size: 14px !important;
					background-color: transparent !important;
					background-size: 13px;
                	background-position: 18px 9px;
					/* low opacity on mobile */
					color: rgb(80, 80, 80, .4);
					z-index: 150;
				}
			} 

            .no-touch #program_navigation .navigation_container ul.navigation_items li:hover, 
            #program_navigation .navigation_container ul.navigation_items .no-touch li:hover, 
            .no-touch #program_navigation #run-menu:hover, 
            #program_navigation .no-touch #run-menu:hover {
                color: #66c6c1;

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

            #program_navigation #run-menu .dropdown-toggle span {
                color: #555;
				/* increase size of icon */
				font-size: 1.3em;
				padding-bottom: 0px !important;
				/* override GT CSS reduced opacity */
				opacity: 1 !important;
            }
			
			/* Mobile Styling for Run Menu */
			@media screen and (max-width: 767px) {
				#program_navigation #run-menu {
					/* fix positioning on small screens */
					right: 38px !important;
					top: 11 !important;
					z-index: 750 !important;
				}
				
				.program_container .dropdown-menu.pull-right {
					position: fixed !important;
					right: 5px!important;
					max-width: 98vw !important;
					top: 6px !important;
					z-index: 1111;
					/* darker box shadow for more contrast on mobile */
					box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.3) !important;
					-webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.3) !important;
					-moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.3) !important;
				}
				
				/* override new GT CSS focus styling for mobile */
				.program_container #run-menu .dropdown-toggle:focus {
					background-color: transparent !important;
					transition: none !important;
				}
				
				/* background behind expanded dropdown on mobile*/
				.program_container .dropdown.open>ul.dropdown-menu::after{
					top: 40px !important;
					background: #f9f9f9;
				}
			}
			
			.dropdown-menu li {
				/* override vertical divider between items in dropdown menu */
				border-bottom: none !important;
				z-index: 1000;
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
			

			
            /* Main content styling */
			
            .program_container .main {
				/* override GT CSS extra padding on left/right, extra bottom margin */
                padding: 3em 0em 0em 0em;
				margin-bottom: 0em;
				z-index: 0;
            }
			@media screen and (max-width: 767px) {
				.program_container .main {
					position: relative;
					margin-top: 48px;
					padding-left: 15px;
					padding-right: 15px;
					z-index: 4;
				}
			}

			/* Add spacing between bottom of question and next text element */
			.program_container .main form + .text,
			.program_container .main ul + .text {
				margin-top: 1em;
			}
			
			/* adjust color of sign out icon to match others*/
			.program_container li.answer .fas::before {
				color: var(--themeColor-primary);
			}
				
			/* Question Prompts */
			
            .program_container .main .prompt {
				/* bold & slightly enlarge question prompts */
				font-family: 'Caladea', Times, serif;
				font-size: 20px;
                font-weight: 700;
				/* decrease top margin slightly */
                margin-top: .5em;
                margin-left: 0;
                margin-right: 0;
            }

			.program_container .main .prompt em {
				font-size: 20px;
			}
			
			.program_container .prompt:empty {
				/* if *question: {blank}, no empty space left for question prompt */
                padding: 0;
                margin: 0;
            }
			
			@media screen and (max-width: 767px) {
				.program_container .main .prompt,
				.program_container .main .prompt em {
					font-size: 19px;
				}
			}
			
			/* Modal Error Messages */

			.program_container .unexpected_answer {
				position: absolute;
				color: red;
				z-index: 1000;
				width: 632px;
				background-color: #fff;
			}
			
			/* error message for blank/invalid text inputs */
			form.text .unexpected_answer,
			form.number .unexpected_answer {		
				text-align: center;
				height: 32px;
				padding: 4px 8px;
				margin: -41px 0 40px 0;
    			width: 684px;
			}
			
			/* error message for paragraph textbox */
			form.text textarea + .unexpected_answer {		
				margin-top: -68px;
			}
			
			/* error message for unanswered multiple choice */
			ul.question_multiple_choice .unexpected_answer {
				margin-top: -60px;
			}
			
			/* error message for unanswered slider */
			.slider-answer-widget .unexpected_answer {
				margin-top: -54px;
				width: 684px;
			}
			
			/* Responsive styling for error messages */
			@media screen and (max-width: 767px) {
				.program_container .unexpected_answer,
				form.text .unexpected_answer,
				form.number .unexpected_answer {
					width: calc(100vw - 4em);
				}
				.slider-answer-widget .unexpected_answer {
					width: calc(100vw - 4.5em);
				}
			}
			
			@media screen and (min-width: 990px) {
				.program_container .unexpected_answer,
				form.text .unexpected_answer,
				form.number .unexpected_answer{
					width: 632px;
				}
			}
	
            /* Questions General Styling */
			
            .program_container .question {
                font-size: 18px;
                font-weight: 700;
                
                background-color: #f7f7f7;
                border-radius: 8px 8px 0 0;
                -webkit-border-radius: 8px 8px 0 0;
                -moz-border-radius: 8px 8px 0 0;
                /* reduce bottom padding */
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
			
			.program_container li.answer, 
			.program_container li label {
				/*override GT CSS smaller font sizes for questions */
				font-size: 18px;
			}
			
			@media screen and (max-width: 767px){
				/* smaller font size for questions on mobile */
				.program_container li.answer, 
				.program_container li label {
					font-size: 17px;
				}
			}
			
			.program_container li.answer span[role="checkbox"] {
				width: 26px;
    			height: 26px;
				background-color: #f9f9f9 !important;
				/* override new GT CSS */
				margin-left: 5px;
			}
			
			/* enlarge check in checkbox*/
			.program_container li.answer [type="checkbox"]:checked ~ span[role="checkbox"]:after {
				font-size: 26px !important;
			}
			
			/* for checkbox questions — last li styled as a button */
			li.submit.btn-primary {
				border: none !important;
				box-shadow: 0 5px 20px 0 rgb(0 0 0 / 15%) !important;
				-webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 15%) !important;
				-moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.15) !important;
			}

            .no-touch ul.button-group .answer:hover:not(.selected) {
				/* background-color: #f5f6fa !important; */
				/* try light green tint for hover state */
				background-color: rgba(148, 207, 161, 0.09) !important;
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
				/* make bolding match regular bold style */
				font-weight: 700;
				font-family: 'Caladea', Times, serif;
				font-size: 20px;
				color: #404042;
				/* background-color: #f5f6fa !important; */
				/* try green tint for selected state */
				background-color: rgba(148, 207, 161, 0.18) !important;
				border: 1px solid transparent !important;
            }
			
			@media screen and (max-width: 767px) {
				ul.button-group .answer.selected {
					font-size: 18px;
            	}
			}
			

            ul.button-group .answer.selected span.glyphicon {
                display: none;
            }

            ul.button-group li:last-of-type, 
            ul.button-group li:first-of-type {
				/* disable bottom border that appears on button for checkbox questions */
				/* border-bottom: 1px solid #f7f7f7 !important; */
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
                padding: 0.5em 1em .5em 1em;
                margin: 0;
            }

            .program_container .tip:empty {
                padding: 0;
                margin: 0;
            }


            .program_container .main .answer_textbox {
                background-color: #f7f7f7;
                padding: .5em 1em 1em 1em;
                margin: 0;
				border-radius: 0 0 8px 8px;
				-webkit-border-radius: 0 0 8px 8px;
				-moz-border-radius: 0 0 8px 8px;
            }

			/* override full width for submit button in new GT CSS */
            .program_container .answer_textbox .answer_submit {
                margin-left: 0;
				border: none !important;
				width: auto !important;
            }	

            .program_container .answer_input {
				/* override extra top margin in new GT CSS */
				margin-top: 0 !important;
				margin-bottom: .5em !important;
            }
			

            /* Gradable Question Styling */
            .program_container .question.question-gradable {
                position: relative;
				/* left padding makes space for star icon */
                padding-left: 52px;
            }

            .program_container .question.question-gradable::before {
                position: absolute;
                display: block;
                background-image: url("../wp-content/uploads/2018/01/question-star-turquise.png");
				/* enlarge star size for greater visibility */
                background-size: 26px;
                content: "";
                width: 26px;
                height: 26px;
                background-repeat: no-repeat;
                left: 15px;
                top: 26px;
            }

            .program_container .tip.question-gradable {
                background-color: #f7f7f7;
                margin: 0;
                padding: 0 1em 1em 52px;
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
			
			/* Calendar questions */
			.program_container .calendar-answer-widget {
				/* match widget background to prompt */
				background-color: #f7f7f7;
			}
			
			/* white background behind calendar */
			.bootstrap-datetimepicker-widget .list-unstyled {
				margin-top: 0;
				margin-bottom: 8px;
				padding: 15px;
				background-color: #fff;
				border: 1px solid #f7f7f7;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
                -moz-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
			}
			
			/* reduce empty space above calendar */
			.program_container .bootstrap-datetimepicker-widget {
				margin: auto;
				margin-top: 1em;
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
				font-size: inherit;
				font-weight: inherit !important;
				line-height: 1.6em !important;
				list-style: none !important;
                position: relative !important;
				/* override extra padding in GT CSS */
				margin-bottom: 8px;
            }
			
			.program_container ul.list li strong {
				font-weight: 700 !important;
                color: #404042 !important;
                font-size: 19px;
			}
			
			@media screen and (max-width: 767px){
				.program_container .main .list li {
					font-size: 17px;
				}
				.program_container ul.list li strong {
					font-size: 18px;
				}
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
			
			/* Chart Styling */
			.chart-title h4 {
				font-size: 20px;
				font-family: 'Arimo', Arial, sans-serif;
                font-weight: 700;
                color: #404042;
                margin-top: 1em !important;
			}
			
			@media screen and (max-width: 767px) {
				/* x-axis labels of chart */
				.program_container .flot-x-axis .flot-tick-label{
					font-size: 11px;
				}
				.program_container .flot-y-axis .flot-tick-label{
					font-size: 12px;
				}
			}
			
            /* Button Main Styling */
			.program_container .btn {
				/*override new GT CSS large top margin*/
				margin: 0.5em 0px 7px 0px;
			}
			
            .program_container .btn-default, 
            ul.button-group li.btn-primary,
			.program_container .btn-primary{
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
			.program_container .btn-primary:focus,
			.program_container .btn-primary:hover, 
            ul.button-group li.btn-primary:hover {
                color: #fff;

                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#93cea0+0,66c6c1+100 */
                background: rgb(147,206,160); /* Old browsers */
                background: -moz-linear-gradient(left, rgba(147,206,160,1) 0%, rgba(102,198,193,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, rgba(147,206,160,1) 0%,rgba(102,198,193,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

                border: none;
            }
			
			.program_container .btn-default[disabled]{
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
			@media screen and (max-width: 767px) {
				.panel-heading .panel-title h4 {
					font-size: 17px;
				}
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
		  UserType = data.UserType;
		  csvHeaders = data.csvHeaders; 
  		  //Displays Course title for courses and group name otherwise
  		  if (UserType == "college" || UserType == "highschool") { 
  		  	infoTitle = "Course Title: ";
  		  	infoData = data.CourseTitle;
  		  }else{
  		  	infoTitle = "Group Name: ";
  		  	infoData = data.GroupName;
  		  }
          // Displays Access Code and Group Name
		  $('#accesscode').empty();
          $('#accesscode').append("Access Code: "+"<em>"+AccessCode+"</em>");
		  $('#info').empty();
          $('#info').append(infoTitle+"<em>"+infoData+"</em>");
		  
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
	<div id="pp-display" style="display:none;margin-top: 0px;">
	<br></br>
		<div style="font-size:13px;">
				<p id="accesscode" style="float:left;"></p>
				<p id="info" style="text-align:right;display:run-in;"></p>
	</div>
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
	<script>
		// 	Hides points bubble when dropdown menu is opened on mobile

		const dropdownMenu = document.getElementById('run-menu');
		const pointsBubble = document.getElementsByClassName('points')[0];
		// needs refinement; points don't reappear on mobile upon closing dropdown
		const dropdownOpen = () => {
			if (window.innerWidth < 768) {
				// at the time that dropdown toggle is clicked...
				if (dropdownMenu.classList.length < 2 ) {
					// hides points bubble while dropdown menu is open
					pointsBubble.style.display = "none";
				} else {
					pointsBubble.style.display = "unset";
				}
			}
		};
		dropdownMenu.addEventListener('click', dropdownOpen);
	</script>
</html>