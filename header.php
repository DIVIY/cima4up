<!DOCTYPE html>
<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<html <?php language_attributes(); ?>>
	<head>		
		
			
    <script type="application/ld+json">{"@context": "http://schema.org","@type": "WebSite","url": "<?php echo home_url()?>","potentialAction": {"@type": "SearchAction","target": "<?php echo home_url()?>?s={search_term_string}","query-input": "required name=search_term_string"}}</script>
    <script type="application/ld+json">{"@context" : "http://schema.org","@type" : "WebSite","name" : "<?php bloginfo('name'); ?>","alternateName" : "<?php bloginfo('description'); ?>","url" : "<?php echo home_url() ?>"}</script>
    <script type="application/ld+json">{"@context" : "http://schema.org","@type" : "Organization","name" : "<?php bloginfo('name'); ?>","url" : "<?php echo home_url()?>","sameAs" : ["<?php echo get_option('vo_twitter'); ?>","<?php echo get_option('vo_google'); ?>","<?php echo get_option('vo_youtube'); ?>","<?php echo get_option('vo_facebook'); ?>"]}</script>
    <?php echo schemaArticle(); ?>
    <?php wp_head(); ?>
		

    <!--[if lt IE 9]>
       <script src="<?php echo esc_url(get_template_directory_uri()); ?>/data/js/html5shiv.js"></script>
      <![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='all' />
	 <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/favicon.png">
    </head>


<style type="text/css">

	
	@font-face{font-family: 'Original Surfer';font-style: normal;font-weight: 400; src: local('Original Surfer'), local('OriginalSurfer-Regular'), url(http://fonts.gstatic.com/s/originalsurfer/v5/gdHw6HpSIN4D6Xt7pi1-qKW5db5LsfPT1OG_PrKMaps.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face {font-family: 'Days One';font-style: normal;font-weight: 400;  src: local('Days One'), local('DaysOne-Regular'), url(http://fonts.gstatic.com/s/daysone/v6/levHiAHcPaqxEf5sqeyx1_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face {font-family: 'Fredoka One';font-style: normal; font-weight: 400; src: local('Fredoka One'), local('FredokaOne-Regular'), url(http://fonts.gstatic.com/s/fredokaone/v4/SL0aFUFfkFMMdariYQ3_YY4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face {font-family: 'Reem Kufi'; font-style: normal; font-weight: 400; src: local('Reem Kufi Regular'), local('ReemKufi-Regular'), url(http://fonts.gstatic.com/s/reemkufi/v1/UaqTAKa4Uv2-zsuS8_b9kRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2'); unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+FB50-FDFF, U+FE80-FEFC;}
@font-face {font-family: 'Reem Kufi';font-style: normal;font-weight: 400; src: local('Reem Kufi Regular'), local('ReemKufi-Regular'), url(http://fonts.gstatic.com/s/reemkufi/v1/FTp4cbXHs33vRJgqopuR4ltXRa8TVwTICgirnJhmVJw.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face {font-family: 'Russo One';font-style: normal; font-weight: 400; src: local('Russo One'), local('RussoOne-Regular'), url(http://fonts.gstatic.com/s/russoone/v5/4ofjFbAC3dpxPypNpg86KxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2'); unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face {font-family: 'Russo One';font-style: normal;font-weight: 400; src: local('Russo One'), local('RussoOne-Regular'), url(http://fonts.gstatic.com/s/russoone/v5/BUtWDi-16QNsA8yggnRs5RJtnKITppOI_IvcXXDNrsc.woff2) format('woff2'); unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;}
@font-face {font-family: 'Russo One';font-style: normal;font-weight: 400; src: local('Russo One'), local('RussoOne-Regular'), url(http://fonts.gstatic.com/s/russoone/v5/RO6e96EC9m6OLO0tr7J3z1tXRa8TVwTICgirnJhmVJw.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face{font-family:'Font';src:url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-light-bf41009b.eot');src:url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-light-bf41009b.eot?#iefix')format('embedded-opentype'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-light-6e19ed92.woff')format('woff'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-light-46251cb6.ttf')format('truetype'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-light-a25a6cb8.svg#ge_ss_twolight')format('svg');font-weight:400;font-style:normal}
@font-face{font-family:'Font';src:url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-medium-52884ce4.eot');src:url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-medium-52884ce4.eot?#iefix')format('embedded-opentype'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-medium-31ffbc7b.woff')format('woff'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-medium-a29dc375.ttf')format('truetype'),url('http://cima4u.tv/wp-content/themes/YourColor/fonts/ge-ss-two-medium-47105cb2.svg#ge_ss_twomedium')format('svg');font-weight:700;font-style:normal}
@media screen and (min-width:1210px){
body,html{height:100%;margin:0}*{box-sizing:border-box}body{background:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQyMyIgaGVpZ2h0PSI1MTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0iTS0zMiwtNDVMLTg3LDEyMkwtMjUsMjRaIiBmaWxsPSIjM2E0NDg2IiBzdHJva2U9IiMzYTQ0ODYiLz48cGF0aCBkPSJNLTMyLC00NUwtMjUsMjRMMjIsLTE0WiIgZmlsbD0iIzNmNGI5NCIgc3Ryb2tlPSIjM2Y0Yjk0Ii8+PHBhdGggZD0iTS0zMiwtNDVMMjIsLTE0TDE4NCwtNzVaIiBmaWxsPSIjNDM1MDlkIiBzdHJva2U9IiM0MzUwOWQiLz48cGF0aCBkPSJNLTMyLC00NUwxODQsLTc1TDIxNCwtODRaIiBmaWxsPSIjNDY1NGE0IiBzdHJva2U9IiM0NjU0YTQiLz48cGF0aCBkPSJNMjIsLTE0TC0yNSwyNEw3Myw0OFoiIGZpbGw9IiMzYjQ2OGIiIHN0cm9rZT0iIzNiNDY4YiIvPjxwYXRoIGQ9Ik0yMiwtMTRMNzMsNDhMMTI0LDExWiIgZmlsbD0iIzNjNDc4YyIgc3Ryb2tlPSIjM2M0NzhjIi8+PHBhdGggZD0iTTIyLC0xNEwxMjQsMTFMMTg0LC03NVoiIGZpbGw9IiM0MTRkOTgiIHN0cm9rZT0iIzQxNGQ5OCIvPjxwYXRoIGQ9Ik0xODQsLTc1TDEyNCwxMUwyOTAsMTZaIiBmaWxsPSIjNDA0Yzk1IiBzdHJva2U9IiM0MDRjOTUiLz48cGF0aCBkPSJNMTg0LC03NUwyOTAsMTZMMjE0LC04NFoiIGZpbGw9IiM0MzUxOWUiIHN0cm9rZT0iIzQzNTE5ZSIvPjxwYXRoIGQ9Ik0yMTQsLTg0TDI5MCwxNkwzMTcsLTM0WiIgZmlsbD0iIzQyNGY5YSIgc3Ryb2tlPSIjNDI0ZjlhIi8+PHBhdGggZD0iTTIxNCwtODRMMzE3LC0zNEw0OTAsLTI1WiIgZmlsbD0iIzQzNTE5ZSIgc3Ryb2tlPSIjNDM1MTllIi8+PHBhdGggZD0iTTIxNCwtODRMNDkwLC0yNUw3NDMsLTU4WiIgZmlsbD0iIzQ0NTJhMCIgc3Ryb2tlPSIjNDQ1MmEwIi8+PHBhdGggZD0iTTIxNCwtODRMNzQzLC01OEwxMDM1LC03MVoiIGZpbGw9IiM0NjU1YTUiIHN0cm9rZT0iIzQ2NTVhNSIvPjxwYXRoIGQ9Ik0yMTQsLTg0TDEwMzUsLTcxTDExNDcsLTgxWiIgZmlsbD0iIzQ3NTZhNyIgc3Ryb2tlPSIjNDc1NmE3Ii8+PHBhdGggZD0iTTIxNCwtODRMMTE0NywtODFMMTIyNiwtODdaIiBmaWxsPSIjNDg1N2E5IiBzdHJva2U9IiM0ODU3YTkiLz48cGF0aCBkPSJNMzE3LC0zNEwyOTAsMTZMNDE1LDQxWiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTMxNywtMzRMNDE1LDQxTDQ5MCwtMjVaIiBmaWxsPSIjM2U0YTkyIiBzdHJva2U9IiMzZTRhOTIiLz48cGF0aCBkPSJNNDkwLC0yNUw0MTUsNDFMNTY3LDcxWiIgZmlsbD0iIzNhNDU4OCIgc3Ryb2tlPSIjM2E0NTg4Ii8+PHBhdGggZD0iTTQ5MCwtMjVMNTY3LDcxTDU3OSwtMjRaIiBmaWxsPSIjM2Q0ODhlIiBzdHJva2U9IiMzZDQ4OGUiLz48cGF0aCBkPSJNNDkwLC0yNUw1NzksLTI0TDc0MywtNThaIiBmaWxsPSIjNDI0ZjliIiBzdHJva2U9IiM0MjRmOWIiLz48cGF0aCBkPSJNNTc5LC0yNEw1NjcsNzFMNjQyLDEyWiIgZmlsbD0iIzNiNDY4YiIgc3Ryb2tlPSIjM2I0NjhiIi8+PHBhdGggZD0iTTU3OSwtMjRMNjQyLDEyTDY2OSwtMjlaIiBmaWxsPSIjM2Y0Yjk0IiBzdHJva2U9IiMzZjRiOTQiLz48cGF0aCBkPSJNNTc5LC0yNEw2NjksLTI5TDc0MywtNThaIiBmaWxsPSIjNDI0ZjliIiBzdHJva2U9IiM0MjRmOWIiLz48cGF0aCBkPSJNNjY5LC0yOUw2NDIsMTJMNzIyLDgxWiIgZmlsbD0iIzNiNDY4YSIgc3Ryb2tlPSIjM2I0NjhhIi8+PHBhdGggZD0iTTY2OSwtMjlMNzIyLDgxTDc0MywtNThaIiBmaWxsPSIjM2U0YTkxIiBzdHJva2U9IiMzZTRhOTEiLz48cGF0aCBkPSJNNzQzLC01OEw3MjIsODFMODE1LDU2WiIgZmlsbD0iIzNiNDU4OSIgc3Ryb2tlPSIjM2I0NTg5Ii8+PHBhdGggZD0iTTc0MywtNThMODE1LDU2TDgxNSwtMjdaIiBmaWxsPSIjM2Y0YjkzIiBzdHJva2U9IiMzZjRiOTMiLz48cGF0aCBkPSJNNzQzLC01OEw4MTUsLTI3TDk0NSwtNDRaIiBmaWxsPSIjNDM1MDlkIiBzdHJva2U9IiM0MzUwOWQiLz48cGF0aCBkPSJNNzQzLC01OEw5NDUsLTQ0TDEwMzUsLTcxWiIgZmlsbD0iIzQ1NTNhMSIgc3Ryb2tlPSIjNDU1M2ExIi8+PHBhdGggZD0iTTgxNSwtMjdMODE1LDU2TDk0NSwtNDRaIiBmaWxsPSIjM2U0YTkyIiBzdHJva2U9IiMzZTRhOTIiLz48cGF0aCBkPSJNOTQ1LC00NEw4MTUsNTZMOTQ2LDc2WiIgZmlsbD0iIzNhNDU4OCIgc3Ryb2tlPSIjM2E0NTg4Ii8+PHBhdGggZD0iTTk0NSwtNDRMOTQ2LDc2TDEwNjgsMzRaIiBmaWxsPSIjM2I0NjhhIiBzdHJva2U9IiMzYjQ2OGEiLz48cGF0aCBkPSJNOTQ1LC00NEwxMDY4LDM0TDEwMzUsLTcxWiIgZmlsbD0iIzQxNGU5OCIgc3Ryb2tlPSIjNDE0ZTk4Ii8+PHBhdGggZD0iTTEwMzUsLTcxTDEwNjgsMzRMMTE0OSwxMloiIGZpbGw9IiMzZjRiOTMiIHN0cm9rZT0iIzNmNGI5MyIvPjxwYXRoIGQ9Ik0xMDM1LC03MUwxMTQ5LDEyTDExNDcsLTgxWiIgZmlsbD0iIzQzNTE5ZSIgc3Ryb2tlPSIjNDM1MTllIi8+PHBhdGggZD0iTTExNDcsLTgxTDExNDksMTJMMTIyNiwtODdaIiBmaWxsPSIjNDQ1MjlmIiBzdHJva2U9IiM0NDUyOWYiLz48cGF0aCBkPSJNMTIyNiwtODdMMTE0OSwxMkwxMjY3LDI0WiIgZmlsbD0iIzQwNGM5NSIgc3Ryb2tlPSIjNDA0Yzk1Ii8+PHBhdGggZD0iTTEyMjYsLTg3TDEyNjcsMjRMMTM4NiwtODRaIiBmaWxsPSIjNDQ1MTlmIiBzdHJva2U9IiM0NDUxOWYiLz48cGF0aCBkPSJNMTM4NiwtODRMMTI2NywyNEwxMzY2LDE5WiIgZmlsbD0iIzNmNGI5NCIgc3Ryb2tlPSIjM2Y0Yjk0Ii8+PHBhdGggZD0iTTEzODYsLTg0TDEzNjYsMTlMMTQ3MSwtMjZaIiBmaWxsPSIjNDE0ZTk5IiBzdHJva2U9IiM0MTRlOTkiLz48cGF0aCBkPSJNMTM4NiwtODRMMTQ3MSwtMjZMMTUzOSwtNzZaIiBmaWxsPSIjNDU1M2EyIiBzdHJva2U9IiM0NTUzYTIiLz48cGF0aCBkPSJNMTQ3MSwtMjZMMTM2NiwxOUwxNDg0LDI2WiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTE0NzEsLTI2TDE0ODQsMjZMMTUzOSwtNzZaIiBmaWxsPSIjNDE0ZDk4IiBzdHJva2U9IiM0MTRkOTgiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTQ4NCwyNkwxNTMyLDcyWiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTE1MzksLTc2TDE1MzIsNzJMMTU0NSwzNDlaIiBmaWxsPSIjMzAzNzZmIiBzdHJva2U9IiMzMDM3NmYiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTU0NSwzNDlMMTU1NSw1NjhaIiBmaWxsPSIjMmEyMTQ1IiBzdHJva2U9IiMyYTIxNDUiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTU1NSw1NjhMMTU2Miw2ODNaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNLTI1LDI0TC04NywxMjJMMjcsMTg4WiIgZmlsbD0iIzMxMzc3MCIgc3Ryb2tlPSIjMzEzNzcwIi8+PHBhdGggZD0iTS0yNSwyNEwyNywxODhMNzMsNDhaIiBmaWxsPSIjMzQzYjc3IiBzdHJva2U9IiMzNDNiNzciLz48cGF0aCBkPSJNNzMsNDhMMjcsMTg4TDEzNiwxNzBaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNNzMsNDhMMTM2LDE3MEwxMjQsMTFaIiBmaWxsPSIjMzUzZDdhIiBzdHJva2U9IiMzNTNkN2EiLz48cGF0aCBkPSJNMTI0LDExTDEzNiwxNzBMMjkwLDE2WiIgZmlsbD0iIzM2M2Y3ZCIgc3Ryb2tlPSIjMzYzZjdkIi8+PHBhdGggZD0iTTI5MCwxNkwxMzYsMTcwTDI4MCwxODZaIiBmaWxsPSIjMmYzNTZjIiBzdHJva2U9IiMyZjM1NmMiLz48cGF0aCBkPSJNMjkwLDE2TDI4MCwxODZMMzI4LDEzMFoiIGZpbGw9IiMzMTM3NzAiIHN0cm9rZT0iIzMxMzc3MCIvPjxwYXRoIGQ9Ik0yOTAsMTZMMzI4LDEzMEwzNzksODNaIiBmaWxsPSIjMzUzZDdhIiBzdHJva2U9IiMzNTNkN2EiLz48cGF0aCBkPSJNMjkwLDE2TDM3OSw4M0w0MTUsNDFaIiBmaWxsPSIjMzg0MjgzIiBzdHJva2U9IiMzODQyODMiLz48cGF0aCBkPSJNMzc5LDgzTDMyOCwxMzBMNDY3LDE1N1oiIGZpbGw9IiMyZjM1NmMiIHN0cm9rZT0iIzJmMzU2YyIvPjxwYXRoIGQ9Ik0zNzksODNMNDY3LDE1N0w0MTUsNDFaIiBmaWxsPSIjMzMzYTc1IiBzdHJva2U9IiMzMzNhNzUiLz48cGF0aCBkPSJNNDE1LDQxTDQ2NywxNTdMNTY3LDcxWiIgZmlsbD0iIzMzM2I3NiIgc3Ryb2tlPSIjMzMzYjc2Ii8+PHBhdGggZD0iTTU2Nyw3MUw0NjcsMTU3TDU2MywxNzlaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNNTY3LDcxTDU2MywxNzlMNjUwLDE2OFoiIGZpbGw9IiMyZDMzNjgiIHN0cm9rZT0iIzJkMzM2OCIvPjxwYXRoIGQ9Ik01NjcsNzFMNjUwLDE2OEw2NDIsMTJaIiBmaWxsPSIjMzQzYzc4IiBzdHJva2U9IiMzNDNjNzgiLz48cGF0aCBkPSJNNjQyLDEyTDY1MCwxNjhMNzIyLDgxWiIgZmlsbD0iIzM0M2I3NyIgc3Ryb2tlPSIjMzQzYjc3Ii8+PHBhdGggZD0iTTcyMiw4MUw2NTAsMTY4TDc3OSwxNzRaIiBmaWxsPSIjMmQzMjY3IiBzdHJva2U9IiMyZDMyNjciLz48cGF0aCBkPSJNNzIyLDgxTDc3OSwxNzRMODE1LDU2WiIgZmlsbD0iIzMyMzg3MiIgc3Ryb2tlPSIjMzIzODcyIi8+PHBhdGggZD0iTTgxNSw1Nkw3NzksMTc0TDg2NiwxNjJaIiBmaWxsPSIjMmUzNDZhIiBzdHJva2U9IiMyZTM0NmEiLz48cGF0aCBkPSJNODE1LDU2TDg2NiwxNjJMOTQ2LDc2WiIgZmlsbD0iIzMyMzk3NCIgc3Ryb2tlPSIjMzIzOTc0Ii8+PHBhdGggZD0iTTk0Niw3Nkw4NjYsMTYyTDk1MSwxNzFaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNOTQ2LDc2TDk1MSwxNzFMMTAzMywxNjJaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNOTQ2LDc2TDEwMzMsMTYyTDEwNjgsMzRaIiBmaWxsPSIjMzMzYjc2IiBzdHJva2U9IiMzMzNiNzYiLz48cGF0aCBkPSJNMTA2OCwzNEwxMDMzLDE2MkwxMTgwLDEzMloiIGZpbGw9IiMzMTM4NzAiIHN0cm9rZT0iIzMxMzg3MCIvPjxwYXRoIGQ9Ik0xMDY4LDM0TDExODAsMTMyTDExNDksMTJaIiBmaWxsPSIjMzc0MDdmIiBzdHJva2U9IiMzNzQwN2YiLz48cGF0aCBkPSJNMTE0OSwxMkwxMTgwLDEzMkwxMjY3LDI0WiIgZmlsbD0iIzM3NDA4MCIgc3Ryb2tlPSIjMzc0MDgwIi8+PHBhdGggZD0iTTEyNjcsMjRMMTE4MCwxMzJMMTI2NCwxNzZaIiBmaWxsPSIjMzEzNzcwIiBzdHJva2U9IiMzMTM3NzAiLz48cGF0aCBkPSJNMTI2NywyNEwxMjY0LDE3NkwxMzY2LDE5WiIgZmlsbD0iIzM1M2Q3YiIgc3Ryb2tlPSIjMzUzZDdiIi8+PHBhdGggZD0iTTEzNjYsMTlMMTI2NCwxNzZMMTM4NSwxODRaIiBmaWxsPSIjMmYzNTZiIiBzdHJva2U9IiMyZjM1NmIiLz48cGF0aCBkPSJNMTM2NiwxOUwxMzg1LDE4NEwxNDM3LDE0M1oiIGZpbGw9IiMzMDM3NmYiIHN0cm9rZT0iIzMwMzc2ZiIvPjxwYXRoIGQ9Ik0xMzY2LDE5TDE0MzcsMTQzTDE0ODQsMjZaIiBmaWxsPSIjMzYzZjdlIiBzdHJva2U9IiMzNjNmN2UiLz48cGF0aCBkPSJNMTQ4NCwyNkwxNDM3LDE0M0wxNTMyLDcyWiIgZmlsbD0iIzM0M2M3OSIgc3Ryb2tlPSIjMzQzYzc5Ii8+PHBhdGggZD0iTTE1MzIsNzJMMTQzNywxNDNMMTUyMywxNzBaIiBmaWxsPSIjMmYzNDZiIiBzdHJva2U9IiMyZjM0NmIiLz48cGF0aCBkPSJNMTUzMiw3MkwxNTIzLDE3MEwxNTQ1LDM0OVoiIGZpbGw9IiMyYTJiNTgiIHN0cm9rZT0iIzJhMmI1OCIvPjxwYXRoIGQ9Ik0tODcsMTIyTC03NCw0NzRMLTc0LDMxOFoiIGZpbGw9IiMyYTFlM2YiIHN0cm9rZT0iIzJhMWUzZiIvPjxwYXRoIGQ9Ik0tODcsMTIyTC03NCwzMThMLTEyLDIyNloiIGZpbGw9IiMyYTI4NTMiIHN0cm9rZT0iIzJhMjg1MyIvPjxwYXRoIGQ9Ik0tODcsMTIyTC0xMiwyMjZMMjcsMTg4WiIgZmlsbD0iIzJhMmQ1ZCIgc3Ryb2tlPSIjMmEyZDVkIi8+PHBhdGggZD0iTTI3LDE4OEwtMTIsMjI2TDQxLDIyOVoiIGZpbGw9IiMyYTI5NTQiIHN0cm9rZT0iIzJhMjk1NCIvPjxwYXRoIGQ9Ik0yNywxODhMNDEsMjI5TDEzNiwxNzBaIiBmaWxsPSIjMmEyYjU5IiBzdHJva2U9IiMyYTJiNTkiLz48cGF0aCBkPSJNMTM2LDE3MEw0MSwyMjlMMTIzLDI2NFoiIGZpbGw9IiMyYTI4NTMiIHN0cm9rZT0iIzJhMjg1MyIvPjxwYXRoIGQ9Ik0xMzYsMTcwTDEyMywyNjRMMjQyLDI4MloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik0xMzYsMTcwTDI0MiwyODJMMjgwLDE4NloiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik0yODAsMTg2TDI0MiwyODJMMzQxLDI2MVoiIGZpbGw9IiMyYTI1NGUiIHN0cm9rZT0iIzJhMjU0ZSIvPjxwYXRoIGQ9Ik0yODAsMTg2TDM0MSwyNjFMMzI4LDEzMFoiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0zMjgsMTMwTDM0MSwyNjFMNDY3LDE1N1oiIGZpbGw9IiMyYTJjNWMiIHN0cm9rZT0iIzJhMmM1YyIvPjxwYXRoIGQ9Ik00NjcsMTU3TDM0MSwyNjFMNDYzLDI3NVoiIGZpbGw9IiMyYTI3NTAiIHN0cm9rZT0iIzJhMjc1MCIvPjxwYXRoIGQ9Ik00NjcsMTU3TDQ2MywyNzVMNTQyLDI1MVoiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik00NjcsMTU3TDU0MiwyNTFMNTYzLDE3OVoiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik01NjMsMTc5TDU0MiwyNTFMNjM1LDI4MVoiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik01NjMsMTc5TDYzNSwyODFMNjUwLDE2OFoiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik02NTAsMTY4TDYzNSwyODFMNzI0LDI2OFoiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik02NTAsMTY4TDcyNCwyNjhMNzc5LDE3NFoiIGZpbGw9IiMyYTJhNTciIHN0cm9rZT0iIzJhMmE1NyIvPjxwYXRoIGQ9Ik03NzksMTc0TDcyNCwyNjhMODE5LDI2NloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik03NzksMTc0TDgxOSwyNjZMODY2LDE2MloiIGZpbGw9IiMyYTJhNTgiIHN0cm9rZT0iIzJhMmE1OCIvPjxwYXRoIGQ9Ik04NjYsMTYyTDgxOSwyNjZMOTUxLDE3MVoiIGZpbGw9IiMyYTJhNTgiIHN0cm9rZT0iIzJhMmE1OCIvPjxwYXRoIGQ9Ik05NTEsMTcxTDgxOSwyNjZMOTg4LDI1N1oiIGZpbGw9IiMyYTI3NTAiIHN0cm9rZT0iIzJhMjc1MCIvPjxwYXRoIGQ9Ik05NTEsMTcxTDk4OCwyNTdMMTAzMywxNjJaIiBmaWxsPSIjMmEyYjU4IiBzdHJva2U9IiMyYTJiNTgiLz48cGF0aCBkPSJNMTAzMywxNjJMOTg4LDI1N0wxMDE3LDI2M1oiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik0xMDMzLDE2MkwxMDE3LDI2M0wxMTI1LDI4NloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik0xMDMzLDE2MkwxMTI1LDI4NkwxMTgwLDEzMloiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0xMTgwLDEzMkwxMTI1LDI4NkwxMjYxLDI2OVoiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik0xMTgwLDEzMkwxMjYxLDI2OUwxMjY0LDE3NloiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0xMjY0LDE3NkwxMjYxLDI2OUwxMzQzLDI1OVoiIGZpbGw9IiMyYTI2NTAiIHN0cm9rZT0iIzJhMjY1MCIvPjxwYXRoIGQ9Ik0xMjY0LDE3NkwxMzQzLDI1OUwxMzg1LDE4NFoiIGZpbGw9IiMyYTJhNTYiIHN0cm9rZT0iIzJhMmE1NiIvPjxwYXRoIGQ9Ik0xMzg1LDE4NEwxMzQzLDI1OUwxNDM5LDIzM1oiIGZpbGw9IiMyYTI3NTIiIHN0cm9rZT0iIzJhMjc1MiIvPjxwYXRoIGQ9Ik0xMzg1LDE4NEwxNDM5LDIzM0wxNDM3LDE0M1oiIGZpbGw9IiMyYTJjNWIiIHN0cm9rZT0iIzJhMmM1YiIvPjxwYXRoIGQ9Ik0xNDM3LDE0M0wxNDM5LDIzM0wxNTIzLDE3MFoiIGZpbGw9IiMyYTJjNWMiIHN0cm9rZT0iIzJhMmM1YyIvPjxwYXRoIGQ9Ik0xNTIzLDE3MEwxNDM5LDIzM0wxNTE4LDIzNloiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik0xNTIzLDE3MEwxNTE4LDIzNkwxNTQ1LDM0OVoiIGZpbGw9IiMyYTI0NGMiIHN0cm9rZT0iIzJhMjQ0YyIvPjxwYXRoIGQ9Ik0tMTIsMjI2TC03NCwzMThMNDEsMjI5WiIgZmlsbD0iIzJhMjQ0YSIgc3Ryb2tlPSIjMmEyNDRhIi8+PHBhdGggZD0iTTQxLDIyOUwtNzQsMzE4TDYxLDM4NVoiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik00MSwyMjlMNjEsMzg1TDEyMywyNjRaIiBmaWxsPSIjMmEyMDQyIiBzdHJva2U9IiMyYTIwNDIiLz48cGF0aCBkPSJNMTIzLDI2NEw2MSwzODVMMTMxLDM4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMjMsMjY0TDEzMSwzODdMMjQyLDI4MloiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDEzMSwzODdMMjQxLDM2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDI0MSwzNjhMMzQ1LDMyMFoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDM0NSwzMjBMMzQxLDI2MVoiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik0zNDEsMjYxTDM0NSwzMjBMNDE5LDMzMloiIGZpbGw9IiMyYTFlM2YiIHN0cm9rZT0iIzJhMWUzZiIvPjxwYXRoIGQ9Ik0zNDEsMjYxTDQxOSwzMzJMNDYzLDI3NVoiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik00NjMsMjc1TDQxOSwzMzJMNTQ1LDMyNVoiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik00NjMsMjc1TDU0NSwzMjVMNTQyLDI1MVoiIGZpbGw9IiMyYTIxNDQiIHN0cm9rZT0iIzJhMjE0NCIvPjxwYXRoIGQ9Ik01NDIsMjUxTDU0NSwzMjVMNjM1LDI4MVoiIGZpbGw9IiMyYTIwNDQiIHN0cm9rZT0iIzJhMjA0NCIvPjxwYXRoIGQ9Ik02MzUsMjgxTDU0NSwzMjVMNjQyLDM0MFoiIGZpbGw9IiMyYTFkM2QiIHN0cm9rZT0iIzJhMWQzZCIvPjxwYXRoIGQ9Ik02MzUsMjgxTDY0MiwzNDBMNzI0LDI2OFoiIGZpbGw9IiMyYTFmNDEiIHN0cm9rZT0iIzJhMWY0MSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDY0MiwzNDBMNzEzLDM2OVoiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDcxMywzNjlMODQ0LDMzOFoiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDg0NCwzMzhMODE5LDI2NloiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik04MTksMjY2TDg0NCwzMzhMOTg4LDI1N1oiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik05ODgsMjU3TDg0NCwzMzhMOTgxLDM4NloiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik05ODgsMjU3TDk4MSwzODZMMTAyOSwzNThaIiBmaWxsPSIjMmExYjM4IiBzdHJva2U9IiMyYTFiMzgiLz48cGF0aCBkPSJNOTg4LDI1N0wxMDI5LDM1OEwxMDE3LDI2M1oiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik0xMDE3LDI2M0wxMDI5LDM1OEwxMTI1LDI4NloiIGZpbGw9IiMyYTFmNDAiIHN0cm9rZT0iIzJhMWY0MCIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMDI5LDM1OEwxMTM4LDM4MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMTM4LDM4MkwxMjMyLDMzMVoiIGZpbGw9IiMyYTFiMzgiIHN0cm9rZT0iIzJhMWIzOCIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMjMyLDMzMUwxMjYxLDI2OVoiIGZpbGw9IiMyYTFmNDEiIHN0cm9rZT0iIzJhMWY0MSIvPjxwYXRoIGQ9Ik0xMjYxLDI2OUwxMjMyLDMzMUwxMzQzLDM1MloiIGZpbGw9IiMyYTFkM2MiIHN0cm9rZT0iIzJhMWQzYyIvPjxwYXRoIGQ9Ik0xMjYxLDI2OUwxMzQzLDM1MkwxMzQzLDI1OVoiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik0xMzQzLDI1OUwxMzQzLDM1MkwxNDM5LDIzM1oiIGZpbGw9IiMyYTIxNDUiIHN0cm9rZT0iIzJhMjE0NSIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxMzQzLDM1MkwxNDI4LDM4NFoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxNDI4LDM4NEwxNTQ1LDM0OVoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxNTQ1LDM0OUwxNTE4LDIzNloiIGZpbGw9IiMyYTIyNDciIHN0cm9rZT0iIzJhMjI0NyIvPjxwYXRoIGQ9Ik0tNzQsMzE4TC03NCw0NzRMMTQsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS03NCwzMThMMTQsNDQyTDYxLDM4NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02MSwzODVMMTQsNDQyTDc4LDUyMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02MSwzODVMNzgsNTIyTDEzMSwzODdaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNMTMxLDM4N0w3OCw1MjJMMTg3LDQzN1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzEsMzg3TDE4Nyw0MzdMMjQxLDM2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDE4Nyw0MzdMMjU2LDQ3OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDI1Niw0NzhMMzgwLDQ2NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDM4MCw0NjRMMzQ1LDMyMFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0zNDUsMzIwTDM4MCw0NjRMNDEwLDQ0MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0zNDUsMzIwTDQxMCw0NDJMNDE5LDMzMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik00MTksMzMyTDQxMCw0NDJMNTQ1LDMyNVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDQxMCw0NDJMNTg0LDQ4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDU4NCw0ODdMNjQ3LDQ0NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDY0Nyw0NDRMNjQyLDM0MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02NDIsMzQwTDY0Nyw0NDRMNzEzLDM2OVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDY0Nyw0NDRMNzMyLDQ3NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDczMiw0NzZMODQ4LDQ0NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDg0OCw0NDRMODQ0LDMzOFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik04NDQsMzM4TDg0OCw0NDRMOTgxLDM4NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05ODEsMzg2TDg0OCw0NDRMOTYyLDQ3MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05ODEsMzg2TDk2Miw0NzBMMTAyMCw0MzBaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNOTgxLDM4NkwxMDIwLDQzMEwxMDI5LDM1OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDI5LDM1OEwxMDIwLDQzMEwxMTI3LDQyM1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDI5LDM1OEwxMTI3LDQyM0wxMTM4LDM4MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTM4LDM4MkwxMTI3LDQyM0wxMjUwLDQ0NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTM4LDM4MkwxMjUwLDQ0NUwxMjMyLDMzMVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMjMyLDMzMUwxMjUwLDQ0NUwxMzQzLDM1MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzQzLDM1MkwxMjUwLDQ0NUwxMzc5LDQzMFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzQzLDM1MkwxMzc5LDQzMEwxNDI4LDM4NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxMzc5LDQzMEwxNDgzLDQ3NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxNDgzLDQ3NEwxNTI1LDQ0NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxNTI1LDQ0NkwxNTQ1LDM0OVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNTQ1LDM0OUwxNTI1LDQ0NkwxNTU1LDU2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0tNzQsNDc0TC00OSw2NjRMLTIzLDU4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0tNzQsNDc0TC0yMyw1ODdMMTQsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0LDQ0MkwtMjMsNTg3TDc4LDUyMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xODcsNDM3TDc4LDUyMkwxODAsNTgyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4Nyw0MzdMMTgwLDU4MkwyMjYsNTcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4Nyw0MzdMMjI2LDU3MEwyNTYsNDc4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTI1Niw0NzhMMjI2LDU3MEwzNDYsNTIwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTI1Niw0NzhMMzQ2LDUyMEwzODAsNDY0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM4MCw0NjRMMzQ2LDUyMEw0ODEsNTQzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM4MCw0NjRMNDgxLDU0M0w0MTAsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQxMCw0NDJMNDgxLDU0M0w1ODQsNDg3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4NCw0ODdMNDgxLDU0M0w1ODgsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4NCw0ODdMNTg4LDUxMUw2NDcsNDQ0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY0Nyw0NDRMNTg4LDUxMUw2NjUsNTY2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY0Nyw0NDRMNjY1LDU2Nkw3MzIsNDc2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczMiw0NzZMNjY1LDU2Nkw3MzYsNTMxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczMiw0NzZMNzM2LDUzMUw4NDgsNDQ0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMNzM2LDUzMUw4NDcsNTgxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMODQ3LDU4MUw5NTcsNTI0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMOTU3LDUyNEw5NjIsNDcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTk2Miw0NzBMOTU3LDUyNEwxMDU1LDU1M1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05NjIsNDcwTDEwNTUsNTUzTDEwMjAsNDMwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMjAsNDMwTDEwNTUsNTUzTDExMjcsNDIzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDEwNTUsNTUzTDExNjAsNTgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDExNjAsNTgwTDEyNDAsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDEyNDAsNTExTDEyNTAsNDQ1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNTAsNDQ1TDEyNDAsNTExTDEzNzksNDMwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDEyNDAsNTExTDEzNTUsNTc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDEzNTUsNTc1TDE0NTAsNTM0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDE0NTAsNTM0TDE0ODMsNDc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0ODMsNDc0TDE0NTAsNTM0TDE1NTUsNTY4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0ODMsNDc0TDE1NTUsNTY4TDE1MjUsNDQ2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS0yMyw1ODdMLTQ5LDY2NEw0Nyw2NjRaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNLTIzLDU4N0w0Nyw2NjRMNzgsNTIyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTc4LDUyMkw0Nyw2NjRMMTUyLDY1MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03OCw1MjJMMTUyLDY1MEwxODAsNTgyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4MCw1ODJMMTUyLDY1MEwyMzAsNjczWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4MCw1ODJMMjMwLDY3M0wyMjYsNTcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTIyNiw1NzBMMjMwLDY3M0wzNzAsNjcyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTIyNiw1NzBMMzcwLDY3MkwzNDYsNTIwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM0Niw1MjBMMzcwLDY3Mkw0ODEsNTQzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMMzcwLDY3Mkw0MzgsNjgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMNDM4LDY4MEw1NzAsNjc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMNTcwLDY3NUw1ODgsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4OCw1MTFMNTcwLDY3NUw2NjUsNTY2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY2NSw1NjZMNTcwLDY3NUw2NjAsNjM1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY2NSw1NjZMNjYwLDYzNUw3MzYsNTMxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczNiw1MzFMNjYwLDYzNUw3NjMsNjg3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczNiw1MzFMNzYzLDY4N0w4NDcsNTgxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMNzYzLDY4N0w4ODQsNjY3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMODg0LDY2N0w5NTMsNjUwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMOTUzLDY1MEw5NTcsNTI0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTk1Nyw1MjRMOTUzLDY1MEwxMDU1LDU1M1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDU1LDU1M0w5NTMsNjUwTDEwMTgsNjg4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwNTUsNTUzTDEwMTgsNjg4TDExMjgsNjY5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwNTUsNTUzTDExMjgsNjY5TDExNjAsNTgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExNjAsNTgwTDExMjgsNjY5TDEyNjksNjc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExNjAsNTgwTDEyNjksNjc0TDEyNDAsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNDAsNTExTDEyNjksNjc0TDEzNTUsNTc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDEyNjksNjc0TDEzNzgsNjQ5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDEzNzgsNjQ5TDE0NDEsNjU5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDE0NDEsNjU5TDE0NTAsNTM0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0NTAsNTM0TDE0NDEsNjU5TDE1NTUsNTY4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE1NTUsNTY4TDE0NDEsNjU5TDE1NjIsNjgzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS00OSw2NjRMNDM4LDY4MEwyMzAsNjczWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS00OSw2NjRMMjMwLDY3M0w0Nyw2NjRaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNNDcsNjY0TDIzMCw2NzNMMTUyLDY1MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yMzAsNjczTDQzOCw2ODBMMzcwLDY3MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik00MzgsNjgwTDc2Myw2ODdMNTcwLDY3NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NzAsNjc1TDc2Myw2ODdMNjYwLDYzNVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03NjMsNjg3TDEwMTgsNjg4TDg4NCw2NjdaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNODg0LDY2N0wxMDE4LDY4OEw5NTMsNjUwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMTgsNjg4TDE1NjIsNjgzTDEyNjksNjc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMTgsNjg4TDEyNjksNjc0TDExMjgsNjY5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNjksNjc0TDE1NjIsNjgzTDE0NDEsNjU5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNjksNjc0TDE0NDEsNjU5TDEzNzgsNjQ5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PC9nPjwvc3ZnPg==);color:#fff;font-family:'Font','DIN Pro','Helvetica Neue',Helvetica,Arial,sans-serif;background-size:cover;background-position:0 378px;background-repeat:no-repeat;background-color:#2a1a37}body::-webkit-scrollbar{width:5px}body::-webkit-scrollbar-track{background:#fff}body::-webkit-scrollbar-thumb{background:#374080}.stage,.stage *{position:absolute;width:100%;height:100%}.container:after{content:'';clear:both;display:table}.container{width:1200px;margin:0 auto}.header .logo span.four{color:#ffec88}.header .logo em{font-style:normal;display:inline-block}.header .logo .let1{transition:.3s all ease;transform:translate(0px,-60px)}.header .logo .let2{transform:translate(0px,60px);transition:.15s .1s all ease}.header .logo .let3{transform:translate(0px,-60px);transition:.15s .2s all ease}.header .logo .let4{transform:translate(0px,60px);transition:.15s .3s all ease}.header .logo .let5{color:#ffec88;transform:translate(0px,-60px);transition:.15s .4s all ease}.header .logo .let6{transform:translate(0px,60px);transition:.15s .5s all ease}.header .logo.active em{transform:translate(0)}.header .logo{font-size:50px;overflow:hidden;width:200px;margin-left:10px;color:#fff;direction:ltr;letter-spacing:-6px;text-transform:uppercase;line-height:65px;float:right;font-family:Fredoka One;text-shadow:2px 2px 5px rgba(0,0,0,0.66)}.header{height:70px;border-top:4px solid #634882;background:#3f255f;box-shadow:0 1px 13px rgba(0,0,0,0.53);position:fixed;top:0;width:100%;right:0;z-index:9999}span.tvExt{color:#ffea7b}.mainMenu > div > ul > li > a{display:block;transition:.3s all ease;padding:21px;font-size:17px;position:relative;z-index:10}.mainMenu > div > ul > li:last-child > a:before{display:none}.mainMenu > div > ul > li:hover > ul{visibility:visible;opacity:1;z-index:9999}.mainMenu > div > ul > li > ul > li:hover > a{background:#8c2463}.mainMenu > div > ul > li > ul > li > a{font-size:15px;border-bottom:1px solid #3e245d;display:block;transition:.3s all ease;padding:10px}.mainMenu > div > ul > li > ul > li:last-child > a{border-bottom:0}.mainMenu > div > ul > li > ul{position:absolute;border-top:1px solid #6d4a96;top:100%;padding:15px;width:190px;font-size:14px;right:0;background:#4f3271;visibility:hidden;opacity:0;transition:.3s all ease;box-shadow:inset 0 1px 7px rgba(0,0,0,0.36),0px 1px 3px rgba(0,0,0,0.28)}.mainMenu > div > ul > li:hover > a:before{border-color:#341e4e;color:#fff}.mainMenu > div > ul > li > a:after{content:'';position:absolute;bottom:0;right:0;width:100%;height:0;background:linear-gradient(#6e499a,#4f3271);transition:.3s all cubic-bezier(0.49,0.33,0.22,1.35);z-index:-1}.mainMenu > div > ul > li:hover a:after{height:70px}.mainMenu > div > ul > li{display:inline-block;font-weight:700;float:right;position:relative;border-left:1px solid #311c4a}.mainMenu{float:right;perspective:1000px}ul,li{list-style:none;margin:0;padding:0}a{text-decoration:none;color:#fff}.bannerBg{margin-top:70px}.filter{height:58px;margin-bottom:20px;padding-top:10px}.filter h2 span{color:#ffea7b}.filter ul > li.active{background:#2a1e3e;box-shadow:0 2px 5px rgba(0,0,0,0.58)}.filter ul > li{display:inline-block;padding:10px 16px;border-radius:6px;font-weight:700;font-size:17px;margin-right:4px;float:right;cursor:pointer;border-bottom:0}.filter ul{float:left}.filter h2{margin:0;display:inline-block}div#dataTab .block:nth-child(4n+0){margin-left:0}div#dataTab .block img{width:100%;height:100%}div#dataTab .block .image .img2{position:absolute;bottom:0;right:0;width:100%;transition:.5s all ease;height:40%;background-size:282px 370px;background-position:bottom center}div#dataTab .block .image .img1{position:absolute;transition:.3s all ease;top:0;perspective:1000px;right:0;width:100%;height:60%;background-size:282px 370px;overflow:hidden}div#dataTab .block:hover .img2{transform:translate(0px,260px) rotate(80deg)}div#dataTab .block:hover .img1:after{-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);transition:transform .6s}div#dataTab .block .img1:after{box-sizing:border-box;pointer-events:none;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.5);content:'';-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-110%,0)}div#dataTab .block:hover .img1{opacity:.4;transform:translate(10px,-50px) rotate(7deg) scale(1.3)}div#dataTab .block{width:292px;height:380px;float:right;perspective:1000px;overflow:hidden;margin-left:10px;margin-bottom:10px;border:5px solid #e6e6e6;box-shadow:0 0 9px rgba(0,0,0,0.75);position:relative}div#dataTab{min-height:400px}.wrap,.wrap *{box-sizing:initial}.wrap{position:relative;top:150px;width:150px;margin:0 auto;direction:ltr}.loader{position:absolute;top:0;z-index:10;width:50px;height:50px;border:15px solid;border-radius:50%;border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0);animation:loadEr 3s infinite}@keyframes loadEr{0%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}10.4%{border-top-color:#3a458a;border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}20.8%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}31.2%{border-top-color:rgba(44,44,44,0);border-right-color:#3a458a;border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}41.6%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0);transform:rotate(40deg)}52%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:#3a458a;border-left-color:rgba(33,33,33,0)}62.4%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}72.8%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:#3a458a}}.loaderbefore{width:50px;height:50px;border:15px solid #4250a0;border-radius:50%;position:absolute;top:0;z-index:9}.circular{position:absolute;top:-15px;left:-15px;width:70px;height:70px;border:20px solid;border-radius:50%;border-top-color:#333;border-left-color:#fff;border-bottom-color:#333;border-right-color:#fff;opacity:.1;animation:poof 5s infinite}@keyframes poof{0%{transform:scale(1,1) rotate(0deg);opacity:.1}50%{transform:scale(4,4) rotate(360deg);opacity:0}}.another{opacity:.1;transform:rotate(90deg);animation:poofity 5s infinite;animation-delay:1s}@keyframes poofity{0%{transform:scale(1,1) rotate(90deg);opacity:.1}50%{transform:scale(4,4) rotate(-360deg);opacity:0}}.text{position:absolute;top:100px;left:-21px;font-weight:700;font-size:21px;font-family:Font;text-transform:uppercase;color:#fff;animation:opaa 10s infinite}@keyframes opaa{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}.block:hover .categorySpan{transform:translate(0)}.block:hover .viewsSpan{transform:translate(0)}.viewsSpan{position:absolute;left:10px;min-width:70px;background:#8c2463;top:141px;border-radius:5px;font-weight:700;font-size:15px;padding:2px 6px 1px;text-align:center;box-shadow:0 1px 2px rgba(0,0,0,0.58);transition:.3s .1s all ease;transform:translate(-200px,0px)}.categorySpan{position:absolute;transition:.3s all ease;left:10px;background:#4a2c6f;top:112px;border-radius:5px;padding:2px 6px;font-weight:700;font-size:14px;box-shadow:0 1px 2px rgba(0,0,0,0.58);transform:translate(-200px,0px)}.block:hover .boxtitle{transform:scale(1)}.boxtitle{position:absolute;bottom:0;width:100%;left:0;transition:.3s all ease;background:linear-gradient(rgba(70,43,93,0),rgba(0,0,0,0.89),#000);text-align:center;font-weight:700;font-size:15px;padding:16px 9px 9px}.block:hover .boxdetil{transform:rotate(0deg) scale(1);opacity:1;transition:.3s .2s all ease}.boxdetil{position:absolute;right:0;transform:rotate(20deg);transition:.3s all ease;opacity:0;width:100%;overflow:hidden;top:213px;height:88px;padding:12px;transform-origin:bottom left;text-align:center;font-size:15px;line-height:24px;color:#d4d4d4}.pagination li.active{background:radial-gradient(ellipse at top,#292929,#232323 89%,#000)}.pagination li a{font-size:18px;color:#fff;display:block;line-height:100%}.pagination li > span.page-numbers.current{top:0;left:0;background:#8c2463;line-height:38px;display:block;color:#fff;margin:-12px -15px;padding:3px 15px 0}.pagination li{display:inline-block;padding:12px 14px 3px;background:#3e245d;margin-right:2px;box-shadow:0 1px 3px rgba(0,0,0,0.56);direction:ltr;margin-left:2px;height:40px;border-radius:4px;font-weight:700;position:relative;overflow:hidden}.pagination{padding-top:15px;text-align:center;clear:both}footer .alignright{float:right}footer .alignleft{float:left}footer .top{background:rgba(0,0,0,0.52);padding:8px 0;box-shadow:0 2px 5px rgba(0,0,0,0.31);text-align:left}footer{margin-top:15px;background:#29173e;z-index:1;font-weight:700;padding:0;box-shadow:0 -1px 1px rgba(0,0,0,0.35);position:relative}.rencersBanner.active .h{bottom:10px}.rencersBanner.active .t{bottom:5px}.rencersBanner.active .bg{transform:scale(1);opacity:1}.rencersBanner.active .b{right:10px}.rencersBanner.active .c{bottom:18px}.rencersBanner.active .j{bottom:0}.rencersBanner.active .s{right:40px}.rencersBanner .h{width:380px;height:445px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/h.png);position:absolute;bottom:-445px;left:108px;z-index:2;transition:.4s all ease;background-size:101%}.rencersBanner .bg.active{transform:scale(1);opacity:1}.rencersBanner .bg{width:100%;height:100%;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/bg.jpg);position:absolute;bottom:0;right:0;transform:scale(.9);background-size:100% 100%;z-index:-1;opacity:0;transition:.3s all ease}.rencersBanner .b.active{bottom:0}.rencersBanner .b{width:252px;height:430px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/b.png);position:absolute;background-size:100%;bottom:0;right:-300px;z-index:0;z-index:20;transition:.5s .2s all ease}.rencersBanner .c.active{bottom:0}.rencersBanner .c{width:230px;height:417px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/c.png);position:absolute;bottom:-100%;left:0;background-size:100%;z-index:1;transition:.4s .1s all ease}.rencersBanner .j.active{left:0}.rencersBanner .j{width:348px;height:455px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/j.png);background-size:100%;position:absolute;bottom:-455px;right:260px;z-index:19;transition:.5s .3s all ease}.rencersBanner .s.active{right:0}.rencersBanner .s{width:408px;height:410px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/s.png);position:absolute;top:38px;right:-100%;z-index:20;transition:.4s all ease;background-size:100%}.rencersBanner .t{width:280px;height:436px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/t.png);position:absolute;background-size:100%;bottom:-500px;left:260px;z-index:22;transition:.4s .2s all ease}.rencersBanner{position:relative;overflow:hidden;height:278px!important;margin-top:30px;overflow:hidden}.movieSection .bgMovieSection{position:absolute;top:0;right:0;-webkit-filter:blur(20px);width:100%;height:100%;background-size:cover;background-position:center;opacity:.3}.movieSection > .container{position:relative;height:368px}.movieSection .poster img{width:100%;height:100%}.movieSection .poster a:last-child{font-weight:700;position:absolute;top:10px;left:10px;background:#f9df2b;color:#000;padding:2px 7px 0;border-radius:3px}.movieSection .poster .views{position:absolute;bottom:0;right:0;width:100%;background:rgba(29,29,29,0.88);font-weight:700;padding:7px 12px 6px}.movieSection .poster{width:270px;height:360px;float:right;position:relative;border:4px solid #ddd;box-shadow:0 1px 10px rgba(0,0,0,0.86);margin-top:15px}.movieSection{background:#2b1644;margin-top:29px;margin-bottom:0;overflow:hidden;position:relative;perspective:1000px;padding-top:1px;border-bottom:2px solid #353d7b;box-shadow:0 1px 14px rgba(0,0,0,0.72)}.bottomBarRece > div > h2{margin:0;padding:10px 0;font-size:15px}.bottomBarRece a:last-child{margin-left:0}.bottomBarRece a span{position:absolute;bottom:0;right:0;width:100%;background:linear-gradient(transparent,rgba(0,0,0,0.75),rgba(0,0,0,0.88));text-align:center;font-size:13px;padding:7px}.bottomBarRece a img{width:100%;height:100%}.bottomBarRece a{display:inline-block;width:143px;height:190px;overflow:hidden;float:right;margin-left:8px;position:relative}.bottomBarRece{right:0;position:relative;clear:both;width:100%;background:linear-gradient(to left,rgba(0,0,0,0.12),rgba(0,0,0,0.32));padding:8px 0}.leftDetails > h2{margin:7px 0 4px;color:#ffec88}.leftDetails{float:right;width:625px;margin-top:25px;margin-right:20px}.bottomBartitle span{padding:2px 6px 1px;font-size:14px;border-radius:5px;border:1px solid #ccc;font-weight:700}.bottomBartitle span a{color:#e0e0e0}.bottomBartitle em{display:inline-block;width:2px;height:8px;background:#b9b9b9;margin:0 10px}.rightDetails .tags p{margin:0;padding-bottom:6px;margin-bottom:6px;border-bottom:1px solid rgba(255,255,255,0.08)}.rightDetails .tags span{font-weight:700;color:#ffea7b;font-size:18px;margin-bottom:4px}.rightDetails .tags a:hover{background:#3e245d}.rightDetails .tags a{font-size:17px}.rightDetails{width:280px;float:left;margin-top:0;position:relative;overflow:hidden;box-shadow:0 0 10px rgba(84,84,84,0.54);height:393px;margin-bottom:-25px;background:rgba(0,0,0,0.42);padding:20px 18px}.tagsContent a{float:right;display:block;margin:0;padding:0;border:none;margin-bottom:8px;border-radius:3px;perspective:1000px;margin-left:8px;background:#353d7b;color:inherit;vertical-align:middle;box-shadow:0 1px 3px rgba(0,0,0,0.56);position:relative;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.tagsContent > div > span{float:right;font-weight:700;line-height:33px;color:#ffea7b;margin-left:10px}.tagsContent{position:relative;margin-top:25px;background:rgba(0,0,0,0.29);padding:10px 10px 5px;box-sizing:initial}.owl-carousel .animated{-webkit-animation-duration:1000ms;animation-duration:1000ms;-webkit-animation-fill-mode:both;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}.owl-carousel{display:none;direction:ltr;width:100%;-webkit-tap-highlight-color:transparent;position:relative;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0px,0,0)}.owl-carousel .owl-controls .owl-dot,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-nav .owl-prev{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-loaded{display:block}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel .owl-refresh .owl-item{display:none}.owl-carousel .owl-item{position:relative;min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-item img{display:block;width:100%;-webkit-transform-style:preserve-3d}.owl-carousel.owl-text-select-on .owl-item{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}.owl-carousel .owl-grab{cursor:move;cursor:-webkit-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.no-js .owl-carousel{display:block}.owl-carousel .owl-item .owl-lazy{opacity:0;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease}.owl-carousel .owl-item img{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;-webkit-transition:scale 100ms ease;-moz-transition:scale 100ms ease;-ms-transition:scale 100ms ease;-o-transition:scale 100ms ease;transition:scale 100ms ease}.owl-carousel .owl-video-play-icon:hover{-webkit-transition:scale(1.3,1.3);-moz-transition:scale(1.3,1.3);-ms-transition:scale(1.3,1.3);-o-transition:scale(1.3,1.3);transition:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease}.owl-carousel .owl-video-frame{position:relative;z-index:1}ul.slidesRelated{direction:ltr}.related:after{content:'';display:block;clear:both}.related{text-align:center;margin-bottom:-15px}.related > div:last-child{margin-left:0}.related > div > a > h2{text-align:center;font-size:21px;margin:0 0 13px;display:table;margin:0 auto 13px;border:2px solid rgba(255,255,255,0.18);padding:7px 32px;border-radius:10px;color:#ddd;border-bottom:5px solid rgba(255,255,255,0.18);box-shadow:inset 0 -2px 3px rgba(0,0,0,0.25)}.related > div{width:50%;display:inline-block;float:right;padding:15px;height:725px}.owl-carousel .owl-item > li{height:587px}.owl-carousel .owl-item > li > a:nth-child(3n+0){margin-left:0}.owl-carousel .owl-item > li > a span{position:absolute;bottom:0;right:0;z-index:10;width:100%;background:linear-gradient(rgba(70,43,93,0),rgba(0,0,0,0.81),rgba(0,0,0,0.9));font-size:13px;font-weight:700;padding:30px 12px 10px}.owl-carousel .owl-item > li > a:hover img{transform:scale(1.2) rotate(5deg)}.owl-carousel .owl-item > li > a img{width:100%;transition:.3s all ease;height:100%;min-height:100%;z-index:10;position:relative}.owl-carousel .owl-item > li > a{position:relative;width:32.666%;height:290px;perspective:1000px;overflow:hidden;display:block;float:right;border:3px solid rgba(150,150,150,0.91);margin-left:1%;margin-bottom:1%;box-shadow:0 1px 6px rgba(0,0,0,0.62)}.owl-dots{height:17px}.owl-dots > div{display:inline-block;width:15px;height:15px;background:#fff;border-radius:50%;margin:10px 2px 0}.owl-dots > div.active{background:#ffea7b}.bg-1{background:#ECEFF1;color:#37474f}.bg-2{background:#7986cb;color:#ECEFF1}a.imdbICon
.bg-3{background:#37474f;color:#fff}.leftDetails .button{font-size:22px;float:left;box-shadow:0 1px 6px rgba(0,0,0,0.51);min-width:150px;display:block;margin:0;padding:.7em 2em;border:none;background:none;color:inherit;vertical-align:middle;position:absolute;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;font-weight:700;bottom:0;left:300px}.button:focus{outline:none}.button > span{vertical-align:middle}.bg-1 .button{color:#37474f;border-color:#37474f}.bg-2 .button{color:#ECEFF1;border-color:#ECEFF1}.bg-3 .button{color:#fff;border-color:#fff}.button--size-s{font-size:14px}.button--size-m{font-size:16px}.button--size-l{font-size:18px}.button--text-upper{text-transform:uppercase}.button--text-thin{font-weight:300}.button--text-medium{font-weight:500}.button--text-thick{font-weight:600}.button--round-s{border-radius:5px}.button--round-m{border-radius:15px}.button--round-l{border-radius:40px}.button--border-medium{border:2px solid}.button--border-thick{border:3px solid}.button--winona{overflow:hidden;padding:0;-webkit-transition:border-color 0.3s,background-color .3s;transition:border-color 0.3s,background-color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--winona::after{content:attr(data-text);position:absolute;width:100%;height:100%;top:0;left:0;opacity:0;color:#3f51b5;-webkit-transform:translate3d(0,25%,0);transform:translate3d(0,25%,0)}.button--winona > span{display:block}.button--winona.button--inverted{color:#7986cb}.button--winona.button--inverted:after{color:#fff}.button--winona::after,.button--winona > span{padding:1em 2em;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--winona:hover{border-color:#3f51b5;background-color:rgba(63,81,181,0.1)}.button--winona.button--inverted:hover{border-color:#21333C;background-color:#21333C}.button--winona:hover::after{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--winona:hover > span{opacity:0;-webkit-transform:translate3d(0,-25%,0);transform:translate3d(0,-25%,0)}.button--ujarak{-webkit-transition:border-color 0.4s,color .4s;transition:border-color 0.4s,color .4s}.button--ujarak::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:#37474f;z-index:-1;opacity:0;-webkit-transform:scale3d(0.7,1,1);transform:scale3d(0.7,1,1);-webkit-transition:-webkit-transform 0.4s,opacity .4s;transition:transform 0.4s,opacity .4s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--ujarak.button--round-s::before{border-radius:2px}.button--ujarak.button--inverted::before{background:#7986CB}.button--ujarak,.button--ujarak::before{-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--ujarak:hover{color:#fff;border-color:#37474f}.button--ujarak.button--inverted:hover{color:#37474F;border-color:#fff}.button--ujarak:hover::before{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--wayra{overflow:hidden;width:245px;-webkit-transition:border-color 0.3s,color .3s;transition:border-color 0.3s,color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--wayra::before{content:'';position:absolute;top:0;left:0;width:150%;height:100%;background:#37474f;z-index:-1;-webkit-transform:rotate3d(0,0,1,-45deg) translate3d(0,-3em,0);transform:rotate3d(0,0,1,-45deg) translate3d(0,-3em,0);-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transition:-webkit-transform 0.3s,opacity 0.3s,background-color .3s;transition:transform 0.3s,opacity 0.3s,background-color .3s}.button--wayra:hover{color:#fff;border-color:#3f51b5}.button--wayra.button--inverted:hover{color:#3f51b5;border-color:#fff}.button--wayra:hover::before{opacity:1;background-color:#3f51b5;-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg);-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--wayra.button--inverted:hover::before{background-color:#fff}.button--tamaya{overflow:hidden;color:#7986cb;min-width:180px}.button--tamaya.button--inverted{color:#37474f;border-color:#37474f}.button--tamaya::before,.button--tamaya::after{content:attr(data-text);position:absolute;width:100%;height:50%;left:0;color:#fff;overflow:hidden;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--tamaya.button--inverted::before,.button--tamaya.button--inverted::after{background:#fff;color:#37474f}.button--tamaya::before{top:0;padding-top:.6em}.button--tamaya::after{bottom:0;line-height:0}.button--tamaya > span{display:block;-webkit-transform:scale3d(0.2,0.2,1);transform:scale3d(0.2,0.2,1);opacity:0;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--tamaya:hover::before{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--tamaya:hover::after{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--tamaya:hover > span{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--rayen{overflow:hidden;padding:0}.button--rayen.button--inverted{color:#fff}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}.button--rayen::before{content:attr(data-text);position:absolute;top:0;left:-1px;width:100%;height:100%;background:#8c2463;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.button--rayen.button--inverted::before{background:#fff;color:#37474f}.button--rayen > span{display:block}.button--rayen::before,.button--rayen > span{padding:.5em 1em;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--rayen:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);left:0}.button--rayen:hover > span{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--pipaluk{width:240px;padding:1.5em 3em;color:#fff}.button--pipaluk.button--inverted{color:#7986cb}.button--pipaluk::before,.button--pipaluk::after{content:'';border-radius:inherit;position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;-webkit-transition:-webkit-transform 0.3s,background-color .3s;transition:transform 0.3s,background-color .3s;-webkit-transition-timing-function:cubic-bezier(0.25,0,0.3,1);transition-timing-function:cubic-bezier(0.25,0,0.3,1)}.button--pipaluk::before{border:2px solid #7986cb}.button--pipaluk.button--inverted::before{border-color:#fff}.button--pipaluk::after{background:#7986cb}.button--pipaluk.button--inverted::after{background:#fff}.button--pipaluk:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--pipaluk::before,.button--pipaluk:hover::after{-webkit-transform:scale3d(0.7,0.7,1);transform:scale3d(0.7,0.7,1)}.button--pipaluk:hover::after{background-color:#3f51b5}.button--pipaluk.button--inverted:hover::after{background-color:#fff}.button--nuka{margin:1em 2em;-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--nuka.button--inverted{color:#37474f}.button--nuka::before,.button--nuka::after{content:'';position:absolute;border-radius:inherit;background:#7986cb;z-index:-1}.button--nuka::before{top:-4px;bottom:-4px;left:-4px;right:-4px;opacity:.2;-webkit-transform:scale3d(0.7,1,1);transform:scale3d(0.7,1,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s}.button--nuka::after{top:0;left:0;width:100%;height:100%;-webkit-transform:scale3d(1.1,1,1);transform:scale3d(1.1,1,1);-webkit-transition:-webkit-transform 0.3s,background-color .3s;transition:transform 0.3s,background-color .3s}.button--nuka::before,.button--nuka::after{-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--nuka.button--inverted::before,.button--nuka.button--inverted::after{background:#fff}.button--nuka:hover{color:#fff}.button--nuka:hover::before{opacity:1}.button--nuka:hover::after{background-color:#37474f}.button--nuka.button--inverted:hover::after{background-color:#7986cb}.button--nuka:hover::after,.button--nuka:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--moema{padding:1.5em 3em;border-radius:50px;background:#7986cb;color:#fff;-webkit-transition:background-color 0.3s,color .3s;transition:background-color 0.3s,color .3s}.button--moema.button--inverted{background:#ECEFF1;color:#37474f}.button--moema::before{content:'';position:absolute;top:-20px;left:-20px;bottom:-20px;right:-20px;background:inherit;border-radius:50px;z-index:-1;opacity:.4;-webkit-transform:scale3d(0.8,0.5,1);transform:scale3d(0.8,0.5,1)}.button--moema:hover{-webkit-transition:background-color .1s 0.3s,color .1s .3s;transition:background-color .1s 0.3s,color .1s .3s;color:#ECEFF1;background-color:#3f51b5;-webkit-animation:anim-moema-1 .3s forwards;animation:anim-moema-1 .3s forwards}.button--moema.button--inverted:hover{color:#ECEFF1;background-color:#7986cb}.button--moema:hover::before{-webkit-animation:anim-moema-2 .3s .3s forwards;animation:anim-moema-2 .3s .3s forwards}@-webkit-keyframes anim-moema-1{60%{-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}85%{-webkit-transform:scale3d(1.1,1.1,1);transform:scale3d(1.1,1.1,1)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes anim-moema-1{60%{-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}85%{-webkit-transform:scale3d(1.1,1.1,1);transform:scale3d(1.1,1.1,1)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@-webkit-keyframes anim-moema-2{to{opacity:0;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes anim-moema-2{to{opacity:0;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.button--isi{padding:1.2em 2em;color:#fff;background:#7986cb;overflow:hidden}.button--isi::before{content:'';z-index:-1;position:absolute;top:50%;left:100%;margin:-15px 0 0 1px;width:30px;height:30px;border-radius:50%;background:#3f51b5;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale3d(1,2,1);transform:scale3d(1,2,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.7,0,0.9,1);transition-timing-function:cubic-bezier(0.7,0,0.9,1)}.button--isi .button__icon{vertical-align:middle}.button--isi > span{vertical-align:middle;padding-left:.75em}.button--isi:hover::before{-webkit-transform:scale3d(9,9,1);transform:scale3d(9,9,1)}.button.button--aylen{background:#fff;color:#3e245d;overflow:hidden;-webkit-transition:color .3s;transition:color .3s}.button--aylen.button--inverted{background:none;color:#fff}.button--aylen::before,.button--aylen::after{content:'';position:absolute;height:100%;width:100%;bottom:100%;left:0;z-index:-1;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--aylen::before{background:#790909}.button--aylen::after{background:#bf0e0e}.button--aylen:hover{color:#fff}.button--aylen:hover::before,.button--aylen:hover::after{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--aylen:hover::after{-webkit-transition-delay:.175s;transition-delay:.175s}.button.button--saqui{overflow:hidden;color:#fff;background:#37474f;-webkit-transition:background-color .3s ease-in,color .3s ease-in;transition:background-color .3s ease-in,color .3s ease-in}.button--saqui.button--inverted{background:#fff;color:#37474f}.button--saqui::after{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%;padding:1em 2em;color:#37474f;-webkit-transform-origin:-25% 50%;transform-origin:-25% 50%;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);-webkit-transition:-webkit-transform .3s ease-in;transition:transform .3s ease-in}.button--saqui.button--inverted::after{color:#fff}.button--saqui:hover::after,.button--saqui:hover{-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.button--saqui:hover{background-color:#7986cb;color:#7986cb}.button--saqui.button--inverted:hover{background-color:#3f51b5;color:#3f51b5}.button--saqui:hover::after{-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg)}.button.button--wapasha{background:#37474f;color:#fff;-webkit-transition:background-color 0.3s,color .3s;transition:background-color 0.3s,color .3s}.button--wapasha.button--inverted{background:#fff;color:#37474f}.button--wapasha::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border:2px solid #3f51b5;z-index:-1;border-radius:inherit;opacity:0;-webkit-transform:scale3d(0.6,0.6,1);transform:scale3d(0.6,0.6,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--wapasha.button--inverted::before{border-color:#7986cb}.button--wapasha:hover{background-color:#fff;color:#3f51b5}.button--wapasha.button--inverted:hover{background-color:#37474f;color:#7986cb}.button--wapasha:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1);opacity:1}.button--nina{padding:0 2em;background:#7986cb;color:#fff;overflow:hidden;-webkit-transition:background-color .3s;transition:background-color .3s}.button--nina.button--inverted{background:#fff;color:#7986cb}.button--nina > span{display:inline-block;padding:1em 0;opacity:0;color:#fff;-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--nina::before{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%;padding:1em 0;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--nina:hover{background-color:#3f51b5}.button--nina:hover::before{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--nina:hover > span{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--nina:hover > span:nth-child(1){-webkit-transition-delay:.045s;transition-delay:.045s}.button--nina:hover > span:nth-child(2){-webkit-transition-delay:.09s;transition-delay:.09s}.button--nina:hover > span:nth-child(3){-webkit-transition-delay:.135s;transition-delay:.135s}.button--nina:hover > span:nth-child(4){-webkit-transition-delay:.18s;transition-delay:.18s}.button--nina:hover > span:nth-child(5){-webkit-transition-delay:.225s;transition-delay:.225s}.button--nina:hover > span:nth-child(6){-webkit-transition-delay:.27s;transition-delay:.27s}.button--nina:hover > span:nth-child(7){-webkit-transition-delay:.315s;transition-delay:.315s}.button--nina:hover > span:nth-child(8){-webkit-transition-delay:.36s;transition-delay:.36s}.button--nina:hover > span:nth-child(9){-webkit-transition-delay:.405s;transition-delay:.405s}.button--nina:hover > span:nth-child(10){-webkit-transition-delay:.45s;transition-delay:.45s}.button--nanuk{padding:0 2em;overflow:hidden;background:#7986cb;-webkit-transition:background-color .3s;transition:background-color .3s}.button--nanuk.button--inverted{background:#fff;color:#7986cb}.button--nanuk > span{display:inline-block;padding:1em 0}.button--nanuk:hover{background-color:#3f51b5}.button--nanuk:hover > span:nth-child(odd){-webkit-animation:anim-nanuk-1 .5s forwards;animation:anim-nanuk-1 .5s forwards}.button--nanuk:hover > span:nth-child(even){-webkit-animation:anim-nanuk-2 .5s forwards;animation:anim-nanuk-2 .5s forwards}.button--nanuk:hover > span:nth-child(odd),.button--nanuk:hover > span:nth-child(even){-webkit-animation-timing-function:cubic-bezier(0.75,0,0.125,1);transition-animation-function:cubic-bezier(0.75,0,0.125,1)}@-webkit-keyframes anim-nanuk-1{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:#fff}100%{color:#fff}}@keyframes anim-nanuk-1{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:#fff}100%{color:#fff}}@-webkit-keyframes anim-nanuk-2{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:#fff}100%{color:#fff}}@keyframes anim-nanuk-2{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:#fff}100%{color:#fff}}.button--nanuk:hover > span:nth-child(1){-webkit-animation-delay:0;animation-delay:0}.button--nanuk:hover > span:nth-child(2){-webkit-animation-delay:.05s;animation-delay:.05s}.button--nanuk:hover > span:nth-child(3){-webkit-animation-delay:.1s;animation-delay:.1s}.button--nanuk:hover > span:nth-child(4){-webkit-animation-delay:.15s;animation-delay:.15s}.button--nanuk:hover > span:nth-child(5){-webkit-animation-delay:.2s;animation-delay:.2s}.button--nanuk:hover > span:nth-child(6){-webkit-animation-delay:.25s;animation-delay:.25s}.button--nanuk:hover > span:nth-child(7){-webkit-animation-delay:.3s;animation-delay:.3s}.button--nanuk:hover > span:nth-child(8){-webkit-animation-delay:.35s;animation-delay:.35s}.button--nanuk:hover > span:nth-child(9){-webkit-animation-delay:.4s;animation-delay:.4s}.button--nanuk:hover > span:nth-child(10){-webkit-animation-delay:.45s;animation-delay:.45s}.button--nanuk:hover > span:nth-child(11){-webkit-animation-delay:.5s;animation-delay:.5s}.button--antiman{background:none;border:none;height:60px}.button--antiman.button--inverted,.button--antiman.button--inverted-alt{-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--antiman > span{padding-left:.35em}.button--antiman::before,.button--antiman::after{content:'';z-index:-1;border-radius:inherit;pointer-events:none;position:absolute;top:0;left:0;width:100%;height:100%;-webkit-backface-visibility:hidden;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--antiman::before{border:2px solid #37474f;opacity:0;-webkit-transform:scale3d(1.2,1.2,1);transform:scale3d(1.2,1.2,1)}.button--antiman.button--border-thin::before{border-width:1px}.button--antiman.button--border-medium::before{border-width:2px}.button--antiman.button--border-thick::before{border-width:3px}.button--antiman.button--inverted::before{border-color:#7986cb}.button--antiman.button--inverted-alt::before{border-color:#3f51b5}.button--antiman::after{background:#fff}.button--antiman.button--inverted::after{background:#7986cb}.button--antiman.button--inverted-alt::after{background:#3f51b5}.button--antiman.button--inverted:hover{color:#7986cb}.button--antiman.button--inverted-alt:hover{color:#3f51b5}.button--antiman:hover::before{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--antiman:hover::after{opacity:0;-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}.button--itzel{border:none;padding:0;overflow:hidden;width:255px}.button--itzel::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border:2px solid;border-radius:inherit;-webkit-clip-path:polygon(0% 0%,0% 100%,35% 100%,35% 60%,65% 60%,65% 100%,100% 100%,100% 0%);clip-path:url(.http://cima4u.tv/wp-content/themes/YourColor/index.html#clipBox);-webkit-transform:translate3d(0,100%,0) translate3d(0,-2px,0);transform:translate3d(0,100%,0) translate3d(0,-2px,0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}.button--itzel.button--border-thin::before{border:1px solid;-webkit-transform:translate3d(0,100%,0) translate3d(0,-1px,0);transform:translate3d(0,100%,0) translate3d(0,-1px,0)}.button--itzel.button--border-thick::before{border:3px solid;-webkit-transform:translate3d(0,100%,0) translate3d(0,-3px,0);transform:translate3d(0,100%,0) translate3d(0,-3px,0)}.button--itzel::before,.button--itzel .button__icon{-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--itzel .button__icon{position:absolute;top:100%;left:50%;padding:20px;font-size:20px;-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0)}.button--itzel > span{display:block;padding:20px;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-delay:.3s;transition-delay:.3s}.button--itzel:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--itzel:hover .button__icon{-webkit-transition-delay:.1s;transition-delay:.1s;-webkit-transform:translate3d(-50%,-100%,0);transform:translate3d(-50%,-100%,0)}.button--itzel:hover > span{opacity:0;-webkit-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0);-webkit-transition-delay:0;transition-delay:0}.button--naira{padding:0;overflow:hidden;-webkit-transition:background-color .3s;transition:background-color .3s}.button--naira::before{content:'';position:absolute;left:-50%;width:200%;height:200%;background:#3e245d;top:-50%;z-index:-1;-webkit-transform:translate3d(0,-100%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-100%,0) rotate3d(0,0,1,-10deg)}.button--naira.button--inverted::before{background:#7986cb}.button--naira-up::before{-webkit-transform:translate3d(0,100%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,100%,0) rotate3d(0,0,1,10deg)}.button--naira > span{display:block;font-size:22px}.button--naira .button__icon{position:absolute;padding:.55em 2em!important;top:0;width:100%;left:0;font-size:27px;color:#fff;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--naira-up .button__icon{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--naira > span,.button--naira .button__icon{padding:.7em 2em;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--naira:hover::before{-webkit-animation:anim-naira-1 .3s forwards ease-in;animation:anim-naira-1 .3s forwards ease-in}.button--naira-up:hover::before{-webkit-animation:anim-naira-2 .3s forwards ease-in;animation:anim-naira-2 .3s forwards ease-in}@-webkit-keyframes anim-naira-1{50%{-webkit-transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@keyframes anim-naira-1{50%{-webkit-transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@-webkit-keyframes anim-naira-2{50%{-webkit-transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@keyframes anim-naira-2{50%{-webkit-transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}.button--naira:hover{background-color:#3e245d;-webkit-transition:background-color 0 .3s;transition:background-color 0 .3s}.button--naira.button--inverted:hover{background-color:#7986cb}.button--naira:hover .button__icon{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--naira:hover > span{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--naira-up:hover > span{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--quidel{background:#7986cb;color:#7986cb;overflow:hidden;-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--quidel.button--inverted{background:#fff;color:#fff}.button--quidel::before,.button--quidel::after{content:'';position:absolute;z-index:-1;border-radius:inherit}.button--quidel::after{top:2px;left:2px;right:2px;bottom:2px;background:#fff}.button--quidel.button--inverted::after{background:#37474f}.button--quidel::before{background:#37474f;top:0;left:0;width:100%;height:100%;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--quidel.button--inverted::before{background:#7986cb}.button--round-s.button--quidel::after{border-radius:3px}.button--round-m.button--quidel::after{border-radius:13px}.button--round-l.button--quidel::after{border-radius:40px}.button--quidel > span{padding-left:.35em}.button--quidel:hover{color:#37474f}.button--quidel.button--inverted:hover{color:#7986cb}.button--quidel:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button.button--sacnite{width:70px;height:70px;min-width:0;padding:0;color:#fff;-webkit-transition:color .3s;transition:color .3s}.button--scanite.button--round-l{border-radius:50%}.button--sacnite.button--inverted{color:#37474f}.button--sacnite::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border-radius:inherit;z-index:-1;box-shadow:inset 0 0 0 35px #37474f;-webkit-transform:scale3d(0.9,0.9,1);transform:scale3d(0.9,0.9,1);-webkit-transition:box-shadow 0.3s,-webkit-transform .3;transition:box-shadow 0.3s,transform .3s}.button--sacnite.button--inverted::before{box-shadow:inset 0 0 0 35px #fff}.button--sacnite .button__icon{font-size:22px;width:22px}.button--sacnite > span{position:absolute;opacity:0;pointer-events:none}.button--sacnite:hover{color:#37474f}.button--sacnite.button--inverted:hover{color:#fff}.button--sacnite:hover::before{box-shadow:inset 0 0 0 2px #37474f;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--sacnite.button--inverted:hover::before{box-shadow:inset 0 0 0 2px #fff}.button.button--shikoba{padding:1em 30px 1em 50px;overflow:hidden;background:#fff;color:#37474f;border-color:#37474f;-webkit-transition:background-color 0.3s,border-color 0.3s,color .3s;transition:background-color 0.3s,border-color 0.3s,color .3s}.button--shikoba.button--inverted{color:#fff;background:#7986cb}.button--shikoba > span{display:inline-block;-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--shikoba .button__icon{position:absolute;left:20px;font-size:18px;-webkit-transform:translate3d(-40px,2.5em,0);transform:translate3d(-40px,2.5em,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--shikoba:hover .button__icon,.button--shikoba:hover > span{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--shikoba:hover{background:#3f51b5;border-color:#3f51b5;color:#fff}#wrap{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%) scale(.5);width:360px;transition:.3s all ease;height:360px;-webkit-filter:url(#filter);filter:url(#filter)}.c,.o,.u,.n,.t{width:50px;height:50px;position:absolute;top:calc(50% - 25px);left:calc(50% - 25px);background:#fff;border-radius:20px;content:'';-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:all .5s cubic-bezier(0.95,0.01,0,1);transition:all .5s cubic-bezier(0.95,0.01,0,1);box-shadow:0 2px 10px rgba(255,255,255,0.5)}.c{-webkit-transition-delay:.05s;transition-delay:.05s}.o{-webkit-transition-delay:.1s;transition-delay:.1s}.u{-webkit-transition-delay:.15s;transition-delay:.15s}.n{-webkit-transition-delay:.2s;transition-delay:.2s}.t{-webkit-transition-delay:.25s;transition-delay:.25s}.wrap-9 .c{width:180px;height:60px;left:90px;top:30px}.wrap-9 .o{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-9 .u{width:150px;height:60px;left:120px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-9 .n{width:180px;height:60px;left:90px;top:150px}.wrap-9 .t{width:60px;height:120px;left:60px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .o{width:60px;height:240px;left:60px;top:60px}.wrap-8 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .n{width:180px;height:60px;left:90px;top:30px}.wrap-8 .t{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-7 .c{width:140px;height:60px;left:190px;top:70px;-webkit-transform:rotate(-65deg);transform:rotate(-65deg)}.wrap-7 .o{width:190px;height:60px;left:100px;top:210px;-webkit-transform:rotate(-65deg);transform:rotate(-65deg)}.wrap-7 .u{width:0;height:0;left:90px;top:270px}.wrap-7 .n{width:0;height:0;left:150px;top:150px}.wrap-7 .t{width:180px;height:60px;left:90px;top:30px}.wrap-6 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .o{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .u{width:60px;height:240px;left:60px;top:60px}.wrap-6 .n{width:60px;height:120px;left:240px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .t{width:180px;height:60px;left:90px;top:30px}.wrap-5 .c{width:210px;height:60px;left:60px;top:30px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .o{width:210px;height:60px;left:60px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .u{width:60px;height:120px;left:240px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .n{width:60px;height:140px;left:60px;top:60px}.wrap-5 .t{width:180px;height:60px;left:90px;top:150px}.wrap-4 .c{width:60px;height:303px;left:210px;top:30px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .o{width:60px;height:60px;left:244px;top:211px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .u{width:60px;height:81px;left:60px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .n{width:60px;height:208px;left:110px;top:9px;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.wrap-4 .t{width:210px;height:60px;left:57px;top:210px}.wrap-3 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .o{width:60px;height:110px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .n{width:180px;height:60px;left:90px;top:30px}.wrap-3 .t{width:60px;height:110px;left:240px;top:190px;-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}.wrap-2 .c{width:180px;height:60px;left:90px;top:30px}.wrap-2 .o{width:60px;height:130px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-2 .u{width:210px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-2 .n{width:180px;height:60px;left:90px;top:150px}.wrap-2 .t{width:60px;height:160px;left:60px;top:170px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .c{width:160px;height:60px;left:101px;top:57px;-webkit-transform:rotate(-36deg);transform:rotate(-36deg)}.wrap-1 .o{width:0;height:0;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .u{width:0;height:0;left:90px;top:270px}.wrap-1 .n{width:60px;height:140px;left:193px;top:50px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .t{width:60px;height:160px;left:193px;top:174px;-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}.wrap-0 .c{width:0;height:0;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-0 .o{width:60px;height:240px;left:60px;top:60px}.wrap-0 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-0 .n{width:180px;height:60px;left:90px;top:30px}.wrap-0 .t{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.redirectSection.redirected #wrap{transform:translate(-50%,-62%) scale(.5)}@-webkit-keyframes download{0%{transform:translate(0px,100px)}}.redirectSection > a{animation:download .3s alternate ease;position:absolute;bottom:76px;perspective:1000px;right:50%;margin-right:-125px;width:250px;text-align:center;height:66px;border-radius:34px;background:#b30a0a}.redirectSection{height:400px;position:relative}.notes{text-align:center;position:absolute;bottom:0;right:0;width:100%;z-index:10}.notes p:last-child{font-size:21px;color:#ffea7b;margin-bottom:0}.notes p{font-weight:700;font-size:16px;margin:0;color:#ddd;margin-bottom:4px}.categorySection .button:Hover{background:#444e9a}.categorySection .button{min-width:150px;max-width:250px;display:block;box-shadow:0 2px 7px rgba(0,0,0,0.35);margin:0 auto 15px;font-size:20px;padding:.6em 2em;border:2px solid rgba(255,255,255,0.08);background:#2d3368;color:inherit;vertical-align:middle;position:relative;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.searchButton{float:left;width:50px;height:50px;color:#fff;margin-top:8px;background:#8c2463;border-radius:4px;box-shadow:0 1px 3px rgba(0,0,0,0.47);text-align:center;cursor:pointer;font-size:21px;padding-top:13px}.searchForm form{width:1200px;margin:0 auto}.searchForm input{float:right;width:1088px;height:37px;border:0;padding:0 10px;font-family:Font}.searchForm button{float:left;border:0;width:105px;height:37px;font-family:Font;background:#8c2463;font-weight:700;font-size:16px;color:#fff;box-shadow:0 1px 1px rgba(0,0,0,0.33)}.searchForm.active{transform:translate(0px)}.searchForm{position:absolute;top:100px;z-index:100;right:0;width:100%;transform:translate(0px,-60px);padding:6px 0;height:50px;background:#3f255f;border-bottom:2px solid #3e245d;box-shadow:0 1px 2px rgba(0,0,0,0.45);transition:.3s all ease}.copyrights{background:rgba(0,0,0,0.22);padding:15px 0}footer .bot > div{width:289px;display:inline-block;margin-left:10px}footer .bot > div:nth-child(4){margin-left:0}footer .bot > div > h2{display:block;font-weight:700;margin-bottom:5px;color:#fff;box-shadow:0 1px 5px rgba(0,0,0,0.32);background:rgba(0,0,0,0.26);padding:10px 13px 8px;font-size:19px}footer .bot > div ul > li:hover a{color:#ffea7b}footer .bot > div ul > li{font-size:16px;font-weight:700;padding:10px;border-bottom:1px solid rgba(255,255,255,0.06);transition:.3s all ease}footer .bot > div ul > li a{color:#fff;transition:.3s all ease}footer .bot > div ul > li a:before{font-family:FontAwesome;content:"\f104";display:block;float:right;margin-left:10px;font-size:21px}footer .bot > div li:last-child{border-bottom:0}footer .bot{padding:0 0 10px}ul.top-social{display:inline-block;margin-top:0}.top-social li.youtube{background:#b00}.top-social li.facebook{background:#3b5998}.top-social li.twitter{background:#55acee}.top-social li.googleplus{background:#dd4b39}ul.top-social > li i{color:#fff}ul.top-social > li{display:inline-block;width:40px;height:40px;border-radius:5px;background:#565656;text-align:center;font-size:19px;padding-top:10px}.ratioMaster{height:30px;position:relative;margin-bottom:0;background:#313870}.ratioBottom{opacity:.1;height:25px;background-image:url(http://cima4u.tv/wp-content/themes/YourColor/img/bgTitleV.png);background-repeat:repeat-x;background-position:0 5px}.ratioMasterHeader{height:30px;position:absolute;margin-bottom:0;background:#321c4c;top:100%;right:0;z-index:-1;width:100%}.ratioBottomHeader{opacity:.1;height:25px;background-image:url(http://cima4u.tv/wp-content/themes/YourColor/img/bgTitleV.png);background-repeat:repeat-x;background-position:0 5px}.l2,.l1,.l3{width:100%;height:90%;opacity:.15;position:absolute;left:0}.rencersBanner.active .l3 div,.rencersBanner.active .l2 div,.rencersBanner.active .l1 div{-webkit-animation:drop 2s forwards ease-out;animation:drop 2s forwards ease-out}.l3 div,.l2 div,.l1 div{border-radius:0 0 15px 15px;width:2.5%;min-height:30px;float:left;-webkit-transform:translateY(-100%);transform:translateY(-100%)}@-webkit-keyframes drop{from{-webkit-transform:translateY(-100%);transform:translateY(-100%)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes drop{from{-webkit-transform:translateY(-100%);transform:translateY(-100%)}to{-webkit-transform:translateY(0);transform:translateY(0)}}.l1 div{background:linear-gradient(to left,#3f255f,#4f2f75,#3f255f);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l1 div:nth-child(1){height:27%;-webkit-animation-delay:.6s;animation-delay:.6s}.l1 div:nth-child(2){height:65%;-webkit-animation-delay:.23s;animation-delay:.23s}.l1 div:nth-child(3){height:20%;-webkit-animation-delay:.49s;animation-delay:.49s}.l1 div:nth-child(4){height:4%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(5){height:88%;-webkit-animation-delay:.08s;animation-delay:.08s}.l1 div:nth-child(6){height:84%;-webkit-animation-delay:.18s;animation-delay:.18s}.l1 div:nth-child(7){height:88%;-webkit-animation-delay:.2s;animation-delay:.2s}.l1 div:nth-child(8){height:50%;-webkit-animation-delay:.44s;animation-delay:.44s}.l1 div:nth-child(9){height:24%;-webkit-animation-delay:.37s;animation-delay:.37s}.l1 div:nth-child(10){height:33%;-webkit-animation-delay:.18s;animation-delay:.18s}.l1 div:nth-child(11){height:36%;-webkit-animation-delay:.59s;animation-delay:.59s}.l1 div:nth-child(12){height:93%;-webkit-animation-delay:.38s;animation-delay:.38s}.l1 div:nth-child(13){height:91%;-webkit-animation-delay:.26s;animation-delay:.26s}.l1 div:nth-child(14){height:44%;-webkit-animation-delay:.44s;animation-delay:.44s}.l1 div:nth-child(15){height:90%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(16){height:11%;-webkit-animation-delay:.24s;animation-delay:.24s}.l1 div:nth-child(17){height:23%;-webkit-animation-delay:.5s;animation-delay:.5s}.l1 div:nth-child(18){height:64%;-webkit-animation-delay:.3s;animation-delay:.3s}.l1 div:nth-child(19){height:57%;-webkit-animation-delay:.45s;animation-delay:.45s}.l1 div:nth-child(20){height:71%;-webkit-animation-delay:.36s;animation-delay:.36s}.l1 div:nth-child(21){height:4%;-webkit-animation-delay:.54s;animation-delay:.54s}.l1 div:nth-child(22){height:73%;-webkit-animation-delay:.4s;animation-delay:.4s}.l1 div:nth-child(23){height:55%;-webkit-animation-delay:.34s;animation-delay:.34s}.l1 div:nth-child(24){height:34%;-webkit-animation-delay:.17s;animation-delay:.17s}.l1 div:nth-child(25){height:2%;-webkit-animation-delay:.01s;animation-delay:.01s}.l1 div:nth-child(26){height:55%;-webkit-animation-delay:.43s;animation-delay:.43s}.l1 div:nth-child(27){height:20%;-webkit-animation-delay:.04s;animation-delay:.04s}.l1 div:nth-child(28){height:72%;-webkit-animation-delay:.56s;animation-delay:.56s}.l1 div:nth-child(29){height:36%;-webkit-animation-delay:.31s;animation-delay:.31s}.l1 div:nth-child(30){height:60%;-webkit-animation-delay:.05s;animation-delay:.05s}.l1 div:nth-child(31){height:46%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(32){height:21%;-webkit-animation-delay:.27s;animation-delay:.27s}.l1 div:nth-child(33){height:43%;-webkit-animation-delay:.59s;animation-delay:.59s}.l1 div:nth-child(34){height:61%;-webkit-animation-delay:.52s;animation-delay:.52s}.l1 div:nth-child(35){height:20%;-webkit-animation-delay:.38s;animation-delay:.38s}.l1 div:nth-child(36){height:23%;-webkit-animation-delay:.3s;animation-delay:.3s}.l1 div:nth-child(37){height:74%;-webkit-animation-delay:.53s;animation-delay:.53s}.l1 div:nth-child(38){height:57%;-webkit-animation-delay:.25s;animation-delay:.25s}.l1 div:nth-child(39){height:38%;-webkit-animation-delay:.39s;animation-delay:.39s}.l1 div:nth-child(40){height:100%;-webkit-animation-delay:.24s;animation-delay:.24s}.l2 div{background:linear-gradient(to left,#771f54,#86235e,#771f54);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l2 div:nth-child(1){height:12%;-webkit-animation-delay:.75s;animation-delay:.75s}.l2 div:nth-child(2){height:12%;-webkit-animation-delay:.1s;animation-delay:.1s}.l2 div:nth-child(3){height:58%;-webkit-animation-delay:.1s;animation-delay:.1s}.l2 div:nth-child(4){height:19%;-webkit-animation-delay:.66s;animation-delay:.66s}.l2 div:nth-child(5){height:5%;-webkit-animation-delay:.33s;animation-delay:.33s}.l2 div:nth-child(6){height:64%;-webkit-animation-delay:.11s;animation-delay:.11s}.l2 div:nth-child(7){height:12%;-webkit-animation-delay:.22s;animation-delay:.22s}.l2 div:nth-child(8){height:55%;-webkit-animation-delay:.07s;animation-delay:.07s}.l2 div:nth-child(9){height:10%;-webkit-animation-delay:.46s;animation-delay:.46s}.l2 div:nth-child(10){height:72%;-webkit-animation-delay:.7s;animation-delay:.7s}.l2 div:nth-child(11){height:69%;-webkit-animation-delay:.59s;animation-delay:.59s}.l2 div:nth-child(12){height:4%;-webkit-animation-delay:.54s;animation-delay:.54s}.l2 div:nth-child(13){height:63%;-webkit-animation-delay:.11s;animation-delay:.11s}.l2 div:nth-child(14){height:29%;-webkit-animation-delay:.39s;animation-delay:.39s}.l2 div:nth-child(15){height:66%;-webkit-animation-delay:.4s;animation-delay:.4s}.l2 div:nth-child(16){height:36%;-webkit-animation-delay:.75s;animation-delay:.75s}.l2 div:nth-child(17){height:67%;-webkit-animation-delay:.23s;animation-delay:.23s}.l2 div:nth-child(18){height:63%;-webkit-animation-delay:.28s;animation-delay:.28s}.l2 div:nth-child(19){height:40%;-webkit-animation-delay:.62s;animation-delay:.62s}.l2 div:nth-child(20){height:56%;-webkit-animation-delay:.16s;animation-delay:.16s}.l2 div:nth-child(21){height:39%;-webkit-animation-delay:.73s;animation-delay:.73s}.l2 div:nth-child(22){height:13%;-webkit-animation-delay:.67s;animation-delay:.67s}.l2 div:nth-child(23){height:59%;-webkit-animation-delay:.05s;animation-delay:.05s}.l2 div:nth-child(24){height:16%;-webkit-animation-delay:.17s;animation-delay:.17s}.l2 div:nth-child(25){height:76%;-webkit-animation-delay:.57s;animation-delay:.57s}.l2 div:nth-child(26){height:36%;-webkit-animation-delay:.64s;animation-delay:.64s}.l2 div:nth-child(27){height:59%;-webkit-animation-delay:.44s;animation-delay:.44s}.l2 div:nth-child(28){height:39%;-webkit-animation-delay:.06s;animation-delay:.06s}.l2 div:nth-child(29){height:54%;-webkit-animation-delay:.53s;animation-delay:.53s}.l2 div:nth-child(30){height:78%;-webkit-animation-delay:.17s;animation-delay:.17s}.l2 div:nth-child(31){height:15%;-webkit-animation-delay:.4s;animation-delay:.4s}.l2 div:nth-child(32){height:17%;-webkit-animation-delay:.45s;animation-delay:.45s}.l2 div:nth-child(33){height:66%;-webkit-animation-delay:.56s;animation-delay:.56s}.l2 div:nth-child(34){height:64%;-webkit-animation-delay:.57s;animation-delay:.57s}.l2 div:nth-child(35){height:24%;-webkit-animation-delay:.2s;animation-delay:.2s}.l2 div:nth-child(36){height:62%;-webkit-animation-delay:.05s;animation-delay:.05s}.l2 div:nth-child(37){height:18%;-webkit-animation-delay:.49s;animation-delay:.49s}.l2 div:nth-child(38){height:10%;-webkit-animation-delay:.06s;animation-delay:.06s}.l2 div:nth-child(39){height:14%;-webkit-animation-delay:.64s;animation-delay:.64s}.l2 div:nth-child(40){height:31%;-webkit-animation-delay:.12s;animation-delay:.12s}.l3 div{background:linear-gradient(to left,#8c2463,#9a2a6e,#8c2463);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l3 div:nth-child(1){height:49%;-webkit-animation-delay:.51s;animation-delay:.51s}.l3 div:nth-child(2){height:56%;-webkit-animation-delay:.74s;animation-delay:.74s}.l3 div:nth-child(3){height:39%;-webkit-animation-delay:.25s;animation-delay:.25s}.l3 div:nth-child(4){height:50%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(5){height:5%;-webkit-animation-delay:.3s;animation-delay:.3s}.l3 div:nth-child(6){height:14%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(7){height:13%;-webkit-animation-delay:.78s;animation-delay:.78s}.l3 div:nth-child(8){height:28%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(9){height:25%;-webkit-animation-delay:.4s;animation-delay:.4s}.l3 div:nth-child(10){height:56%;-webkit-animation-delay:.05s;animation-delay:.05s}.l3 div:nth-child(11){height:44%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(12){height:36%;-webkit-animation-delay:.47s;animation-delay:.47s}.l3 div:nth-child(13){height:9%;-webkit-animation-delay:.48s;animation-delay:.48s}.l3 div:nth-child(14){height:39%;-webkit-animation-delay:.09s;animation-delay:.09s}.l3 div:nth-child(15){height:31%;-webkit-animation-delay:.16s;animation-delay:.16s}.l3 div:nth-child(16){height:37%;-webkit-animation-delay:.92s;animation-delay:.92s}.l3 div:nth-child(17){height:38%;-webkit-animation-delay:.31s;animation-delay:.31s}.l3 div:nth-child(18){height:23%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(19){height:24%;-webkit-animation-delay:.45s;animation-delay:.45s}.l3 div:nth-child(20){height:44%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(21){height:1%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(22){height:46%;-webkit-animation-delay:.98s;animation-delay:.98s}.l3 div:nth-child(23){height:12%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(24){height:47%;-webkit-animation-delay:.31s;animation-delay:.31s}.l3 div:nth-child(25){height:33%;-webkit-animation-delay:.5s;animation-delay:.5s}.l3 div:nth-child(26){height:56%;-webkit-animation-delay:.9s;animation-delay:.9s}.l3 div:nth-child(27){height:26%;-webkit-animation-delay:.11s;animation-delay:.11s}.l3 div:nth-child(28){height:37%;-webkit-animation-delay:.23s;animation-delay:.23s}.l3 div:nth-child(29){height:52%;-webkit-animation-delay:.13s;animation-delay:.13s}.l3 div:nth-child(30){height:7%;-webkit-animation-delay:.64s;animation-delay:.64s}.l3 div:nth-child(31){height:23%;-webkit-animation-delay:.13s;animation-delay:.13s}.l3 div:nth-child(32){height:10%;-webkit-animation-delay:.95s;animation-delay:.95s}.l3 div:nth-child(33){height:54%;-webkit-animation-delay:.24s;animation-delay:.24s}.l3 div:nth-child(34){height:5%;-webkit-animation-delay:.86s;animation-delay:.86s}.l3 div:nth-child(35){height:28%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(36){height:28%;-webkit-animation-delay:.65s;animation-delay:.65s}.l3 div:nth-child(37){height:56%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(38){height:37%;-webkit-animation-delay:.18s;animation-delay:.18s}.l3 div:nth-child(39){height:26%;-webkit-animation-delay:.48s;animation-delay:.48s}.l3 div:nth-child(40){height:53%;-webkit-animation-delay:.79s;animation-delay:.79s}.rencersBanner.active .cima4uLogo > span{transform:translate(0)}.cima4uLogo > span{transition:.15s all ease;display:inline-block}.cima4uLogo > span.let1{transform:translate(0px,-200px);transition:.15s .2s all ease}.cima4uLogo > span.let2{transform:translate(0px,200px);transition:.15s .3s all ease}.cima4uLogo > span.let3{transform:translate(0px,-200px);transition:.15s .4s all ease}.cima4uLogo > span.let4{transform:translate(0px,200px);transition:.15s .5s all ease}.cima4uLogo > span.let5{transform:translate(0px,-200px);transition:.15s .6s all ease}.cima4uLogo > span.let6{transition:.15s .7s all ease;transform:translate(0px,200px)}.rencersBanner.active .cima4uLogo{transform:translate(0px,16px)}.cima4uLogo{transition:.5s 1.3s all ease;position:absolute;font-size:90px;transform:translate(0,-30px);font-weight:700;width:100%;top:0;right:0;text-align:center;direction:ltr;line-height:285px;font-family:Fredoka One;letter-spacing:-9px;text-shadow:2px 2px 8px rgba(0,0,0,0.53)}.rencersBanner.active span.pointCima4u{transform:translate(0px,0)}span.pointCima4u{transition:.5s 1.25s all ease;width:40px;height:40px;border-radius:15px;position:absolute;transform:translate(0px,-180px);top:50%;margin-top:-60px;color:#8c2463;margin-right:85px;right:50%;background:#fff;font-size:24px;text-align:center;padding:6px 0;padding-left:6px}.rencersBanner.active .cinema4all{transform:translate(0)}.cinema4all{position:absolute;transition:.3s 1.5s all ease;font-family:Reem Kufi;transform:translate(0px,-120px);top:70px;text-shadow:2px 2px 5px rgba(0,0,0,0.66);right:50%;margin-right:-189px;font-size:40px;color:#ffec88}.rencersBanner.active .watchAnddownload{transform:translate(0)}.watchAnddownload{position:absolute;font-weight:700;transition:.3s 1.7s all ease;text-shadow:2px 2px 5px rgba(0,0,0,0.35);transform:translate(0px,120px);bottom:45px;right:50%;margin-right:-193px;color:#ddd;width:370px;text-align:center;font-size:20px}footer .bgMovieSection{position:absolute;top:0;right:0;z-index:-1;-webkit-filter:blur(20px);width:100%;height:100%;background-size:cover;background-position:center;opacity:.3}.breadCrumbs > div > *{background:#2e346a;padding:4px 12px;border-radius:4px}.breadCrumbs > div{width:1200px;margin:0 auto}.breadCrumbs{background:#353d7b;position:relative;font-weight:700;padding:7px 0}.ribbon{transition:.2s all ease;position:absolute;width:250px;height:30px;text-align:center;background:#8c2463;z-index:10;transform:rotate(-35deg);top:18px;left:-92px;line-height:29px;font-weight:700;color:#fff}.ad728x90{height:90px;width:728px;margin:10px auto 0;background:rgba(255,255,255,0.1)}a.imdbICon{position:absolute;bottom:60px;right:10px;width:260px;height:40px;color:#000;background:#ffc520;text-align:center;line-height:43px;font-size:19px;font-weight:700}.storyContent >h2{margin:-22px -22px 15px;background:#321c4c;font-size:20px;padding:7px 24px}.storyContent{background:#3f255f;padding:22px;border-radius:5px;font-weight:700;font-size:15px}
}

@media screen and (max-width:1209px){
 body,html{height:100%;margin:0}*{box-sizing:border-box}body{background:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQyMyIgaGVpZ2h0PSI1MTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0iTS0zMiwtNDVMLTg3LDEyMkwtMjUsMjRaIiBmaWxsPSIjM2E0NDg2IiBzdHJva2U9IiMzYTQ0ODYiLz48cGF0aCBkPSJNLTMyLC00NUwtMjUsMjRMMjIsLTE0WiIgZmlsbD0iIzNmNGI5NCIgc3Ryb2tlPSIjM2Y0Yjk0Ii8+PHBhdGggZD0iTS0zMiwtNDVMMjIsLTE0TDE4NCwtNzVaIiBmaWxsPSIjNDM1MDlkIiBzdHJva2U9IiM0MzUwOWQiLz48cGF0aCBkPSJNLTMyLC00NUwxODQsLTc1TDIxNCwtODRaIiBmaWxsPSIjNDY1NGE0IiBzdHJva2U9IiM0NjU0YTQiLz48cGF0aCBkPSJNMjIsLTE0TC0yNSwyNEw3Myw0OFoiIGZpbGw9IiMzYjQ2OGIiIHN0cm9rZT0iIzNiNDY4YiIvPjxwYXRoIGQ9Ik0yMiwtMTRMNzMsNDhMMTI0LDExWiIgZmlsbD0iIzNjNDc4YyIgc3Ryb2tlPSIjM2M0NzhjIi8+PHBhdGggZD0iTTIyLC0xNEwxMjQsMTFMMTg0LC03NVoiIGZpbGw9IiM0MTRkOTgiIHN0cm9rZT0iIzQxNGQ5OCIvPjxwYXRoIGQ9Ik0xODQsLTc1TDEyNCwxMUwyOTAsMTZaIiBmaWxsPSIjNDA0Yzk1IiBzdHJva2U9IiM0MDRjOTUiLz48cGF0aCBkPSJNMTg0LC03NUwyOTAsMTZMMjE0LC04NFoiIGZpbGw9IiM0MzUxOWUiIHN0cm9rZT0iIzQzNTE5ZSIvPjxwYXRoIGQ9Ik0yMTQsLTg0TDI5MCwxNkwzMTcsLTM0WiIgZmlsbD0iIzQyNGY5YSIgc3Ryb2tlPSIjNDI0ZjlhIi8+PHBhdGggZD0iTTIxNCwtODRMMzE3LC0zNEw0OTAsLTI1WiIgZmlsbD0iIzQzNTE5ZSIgc3Ryb2tlPSIjNDM1MTllIi8+PHBhdGggZD0iTTIxNCwtODRMNDkwLC0yNUw3NDMsLTU4WiIgZmlsbD0iIzQ0NTJhMCIgc3Ryb2tlPSIjNDQ1MmEwIi8+PHBhdGggZD0iTTIxNCwtODRMNzQzLC01OEwxMDM1LC03MVoiIGZpbGw9IiM0NjU1YTUiIHN0cm9rZT0iIzQ2NTVhNSIvPjxwYXRoIGQ9Ik0yMTQsLTg0TDEwMzUsLTcxTDExNDcsLTgxWiIgZmlsbD0iIzQ3NTZhNyIgc3Ryb2tlPSIjNDc1NmE3Ii8+PHBhdGggZD0iTTIxNCwtODRMMTE0NywtODFMMTIyNiwtODdaIiBmaWxsPSIjNDg1N2E5IiBzdHJva2U9IiM0ODU3YTkiLz48cGF0aCBkPSJNMzE3LC0zNEwyOTAsMTZMNDE1LDQxWiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTMxNywtMzRMNDE1LDQxTDQ5MCwtMjVaIiBmaWxsPSIjM2U0YTkyIiBzdHJva2U9IiMzZTRhOTIiLz48cGF0aCBkPSJNNDkwLC0yNUw0MTUsNDFMNTY3LDcxWiIgZmlsbD0iIzNhNDU4OCIgc3Ryb2tlPSIjM2E0NTg4Ii8+PHBhdGggZD0iTTQ5MCwtMjVMNTY3LDcxTDU3OSwtMjRaIiBmaWxsPSIjM2Q0ODhlIiBzdHJva2U9IiMzZDQ4OGUiLz48cGF0aCBkPSJNNDkwLC0yNUw1NzksLTI0TDc0MywtNThaIiBmaWxsPSIjNDI0ZjliIiBzdHJva2U9IiM0MjRmOWIiLz48cGF0aCBkPSJNNTc5LC0yNEw1NjcsNzFMNjQyLDEyWiIgZmlsbD0iIzNiNDY4YiIgc3Ryb2tlPSIjM2I0NjhiIi8+PHBhdGggZD0iTTU3OSwtMjRMNjQyLDEyTDY2OSwtMjlaIiBmaWxsPSIjM2Y0Yjk0IiBzdHJva2U9IiMzZjRiOTQiLz48cGF0aCBkPSJNNTc5LC0yNEw2NjksLTI5TDc0MywtNThaIiBmaWxsPSIjNDI0ZjliIiBzdHJva2U9IiM0MjRmOWIiLz48cGF0aCBkPSJNNjY5LC0yOUw2NDIsMTJMNzIyLDgxWiIgZmlsbD0iIzNiNDY4YSIgc3Ryb2tlPSIjM2I0NjhhIi8+PHBhdGggZD0iTTY2OSwtMjlMNzIyLDgxTDc0MywtNThaIiBmaWxsPSIjM2U0YTkxIiBzdHJva2U9IiMzZTRhOTEiLz48cGF0aCBkPSJNNzQzLC01OEw3MjIsODFMODE1LDU2WiIgZmlsbD0iIzNiNDU4OSIgc3Ryb2tlPSIjM2I0NTg5Ii8+PHBhdGggZD0iTTc0MywtNThMODE1LDU2TDgxNSwtMjdaIiBmaWxsPSIjM2Y0YjkzIiBzdHJva2U9IiMzZjRiOTMiLz48cGF0aCBkPSJNNzQzLC01OEw4MTUsLTI3TDk0NSwtNDRaIiBmaWxsPSIjNDM1MDlkIiBzdHJva2U9IiM0MzUwOWQiLz48cGF0aCBkPSJNNzQzLC01OEw5NDUsLTQ0TDEwMzUsLTcxWiIgZmlsbD0iIzQ1NTNhMSIgc3Ryb2tlPSIjNDU1M2ExIi8+PHBhdGggZD0iTTgxNSwtMjdMODE1LDU2TDk0NSwtNDRaIiBmaWxsPSIjM2U0YTkyIiBzdHJva2U9IiMzZTRhOTIiLz48cGF0aCBkPSJNOTQ1LC00NEw4MTUsNTZMOTQ2LDc2WiIgZmlsbD0iIzNhNDU4OCIgc3Ryb2tlPSIjM2E0NTg4Ii8+PHBhdGggZD0iTTk0NSwtNDRMOTQ2LDc2TDEwNjgsMzRaIiBmaWxsPSIjM2I0NjhhIiBzdHJva2U9IiMzYjQ2OGEiLz48cGF0aCBkPSJNOTQ1LC00NEwxMDY4LDM0TDEwMzUsLTcxWiIgZmlsbD0iIzQxNGU5OCIgc3Ryb2tlPSIjNDE0ZTk4Ii8+PHBhdGggZD0iTTEwMzUsLTcxTDEwNjgsMzRMMTE0OSwxMloiIGZpbGw9IiMzZjRiOTMiIHN0cm9rZT0iIzNmNGI5MyIvPjxwYXRoIGQ9Ik0xMDM1LC03MUwxMTQ5LDEyTDExNDcsLTgxWiIgZmlsbD0iIzQzNTE5ZSIgc3Ryb2tlPSIjNDM1MTllIi8+PHBhdGggZD0iTTExNDcsLTgxTDExNDksMTJMMTIyNiwtODdaIiBmaWxsPSIjNDQ1MjlmIiBzdHJva2U9IiM0NDUyOWYiLz48cGF0aCBkPSJNMTIyNiwtODdMMTE0OSwxMkwxMjY3LDI0WiIgZmlsbD0iIzQwNGM5NSIgc3Ryb2tlPSIjNDA0Yzk1Ii8+PHBhdGggZD0iTTEyMjYsLTg3TDEyNjcsMjRMMTM4NiwtODRaIiBmaWxsPSIjNDQ1MTlmIiBzdHJva2U9IiM0NDUxOWYiLz48cGF0aCBkPSJNMTM4NiwtODRMMTI2NywyNEwxMzY2LDE5WiIgZmlsbD0iIzNmNGI5NCIgc3Ryb2tlPSIjM2Y0Yjk0Ii8+PHBhdGggZD0iTTEzODYsLTg0TDEzNjYsMTlMMTQ3MSwtMjZaIiBmaWxsPSIjNDE0ZTk5IiBzdHJva2U9IiM0MTRlOTkiLz48cGF0aCBkPSJNMTM4NiwtODRMMTQ3MSwtMjZMMTUzOSwtNzZaIiBmaWxsPSIjNDU1M2EyIiBzdHJva2U9IiM0NTUzYTIiLz48cGF0aCBkPSJNMTQ3MSwtMjZMMTM2NiwxOUwxNDg0LDI2WiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTE0NzEsLTI2TDE0ODQsMjZMMTUzOSwtNzZaIiBmaWxsPSIjNDE0ZDk4IiBzdHJva2U9IiM0MTRkOTgiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTQ4NCwyNkwxNTMyLDcyWiIgZmlsbD0iIzNkNDg4ZSIgc3Ryb2tlPSIjM2Q0ODhlIi8+PHBhdGggZD0iTTE1MzksLTc2TDE1MzIsNzJMMTU0NSwzNDlaIiBmaWxsPSIjMzAzNzZmIiBzdHJva2U9IiMzMDM3NmYiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTU0NSwzNDlMMTU1NSw1NjhaIiBmaWxsPSIjMmEyMTQ1IiBzdHJva2U9IiMyYTIxNDUiLz48cGF0aCBkPSJNMTUzOSwtNzZMMTU1NSw1NjhMMTU2Miw2ODNaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNLTI1LDI0TC04NywxMjJMMjcsMTg4WiIgZmlsbD0iIzMxMzc3MCIgc3Ryb2tlPSIjMzEzNzcwIi8+PHBhdGggZD0iTS0yNSwyNEwyNywxODhMNzMsNDhaIiBmaWxsPSIjMzQzYjc3IiBzdHJva2U9IiMzNDNiNzciLz48cGF0aCBkPSJNNzMsNDhMMjcsMTg4TDEzNiwxNzBaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNNzMsNDhMMTM2LDE3MEwxMjQsMTFaIiBmaWxsPSIjMzUzZDdhIiBzdHJva2U9IiMzNTNkN2EiLz48cGF0aCBkPSJNMTI0LDExTDEzNiwxNzBMMjkwLDE2WiIgZmlsbD0iIzM2M2Y3ZCIgc3Ryb2tlPSIjMzYzZjdkIi8+PHBhdGggZD0iTTI5MCwxNkwxMzYsMTcwTDI4MCwxODZaIiBmaWxsPSIjMmYzNTZjIiBzdHJva2U9IiMyZjM1NmMiLz48cGF0aCBkPSJNMjkwLDE2TDI4MCwxODZMMzI4LDEzMFoiIGZpbGw9IiMzMTM3NzAiIHN0cm9rZT0iIzMxMzc3MCIvPjxwYXRoIGQ9Ik0yOTAsMTZMMzI4LDEzMEwzNzksODNaIiBmaWxsPSIjMzUzZDdhIiBzdHJva2U9IiMzNTNkN2EiLz48cGF0aCBkPSJNMjkwLDE2TDM3OSw4M0w0MTUsNDFaIiBmaWxsPSIjMzg0MjgzIiBzdHJva2U9IiMzODQyODMiLz48cGF0aCBkPSJNMzc5LDgzTDMyOCwxMzBMNDY3LDE1N1oiIGZpbGw9IiMyZjM1NmMiIHN0cm9rZT0iIzJmMzU2YyIvPjxwYXRoIGQ9Ik0zNzksODNMNDY3LDE1N0w0MTUsNDFaIiBmaWxsPSIjMzMzYTc1IiBzdHJva2U9IiMzMzNhNzUiLz48cGF0aCBkPSJNNDE1LDQxTDQ2NywxNTdMNTY3LDcxWiIgZmlsbD0iIzMzM2I3NiIgc3Ryb2tlPSIjMzMzYjc2Ii8+PHBhdGggZD0iTTU2Nyw3MUw0NjcsMTU3TDU2MywxNzlaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNNTY3LDcxTDU2MywxNzlMNjUwLDE2OFoiIGZpbGw9IiMyZDMzNjgiIHN0cm9rZT0iIzJkMzM2OCIvPjxwYXRoIGQ9Ik01NjcsNzFMNjUwLDE2OEw2NDIsMTJaIiBmaWxsPSIjMzQzYzc4IiBzdHJva2U9IiMzNDNjNzgiLz48cGF0aCBkPSJNNjQyLDEyTDY1MCwxNjhMNzIyLDgxWiIgZmlsbD0iIzM0M2I3NyIgc3Ryb2tlPSIjMzQzYjc3Ii8+PHBhdGggZD0iTTcyMiw4MUw2NTAsMTY4TDc3OSwxNzRaIiBmaWxsPSIjMmQzMjY3IiBzdHJva2U9IiMyZDMyNjciLz48cGF0aCBkPSJNNzIyLDgxTDc3OSwxNzRMODE1LDU2WiIgZmlsbD0iIzMyMzg3MiIgc3Ryb2tlPSIjMzIzODcyIi8+PHBhdGggZD0iTTgxNSw1Nkw3NzksMTc0TDg2NiwxNjJaIiBmaWxsPSIjMmUzNDZhIiBzdHJva2U9IiMyZTM0NmEiLz48cGF0aCBkPSJNODE1LDU2TDg2NiwxNjJMOTQ2LDc2WiIgZmlsbD0iIzMyMzk3NCIgc3Ryb2tlPSIjMzIzOTc0Ii8+PHBhdGggZD0iTTk0Niw3Nkw4NjYsMTYyTDk1MSwxNzFaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNOTQ2LDc2TDk1MSwxNzFMMTAzMywxNjJaIiBmaWxsPSIjMmUzMzY5IiBzdHJva2U9IiMyZTMzNjkiLz48cGF0aCBkPSJNOTQ2LDc2TDEwMzMsMTYyTDEwNjgsMzRaIiBmaWxsPSIjMzMzYjc2IiBzdHJva2U9IiMzMzNiNzYiLz48cGF0aCBkPSJNMTA2OCwzNEwxMDMzLDE2MkwxMTgwLDEzMloiIGZpbGw9IiMzMTM4NzAiIHN0cm9rZT0iIzMxMzg3MCIvPjxwYXRoIGQ9Ik0xMDY4LDM0TDExODAsMTMyTDExNDksMTJaIiBmaWxsPSIjMzc0MDdmIiBzdHJva2U9IiMzNzQwN2YiLz48cGF0aCBkPSJNMTE0OSwxMkwxMTgwLDEzMkwxMjY3LDI0WiIgZmlsbD0iIzM3NDA4MCIgc3Ryb2tlPSIjMzc0MDgwIi8+PHBhdGggZD0iTTEyNjcsMjRMMTE4MCwxMzJMMTI2NCwxNzZaIiBmaWxsPSIjMzEzNzcwIiBzdHJva2U9IiMzMTM3NzAiLz48cGF0aCBkPSJNMTI2NywyNEwxMjY0LDE3NkwxMzY2LDE5WiIgZmlsbD0iIzM1M2Q3YiIgc3Ryb2tlPSIjMzUzZDdiIi8+PHBhdGggZD0iTTEzNjYsMTlMMTI2NCwxNzZMMTM4NSwxODRaIiBmaWxsPSIjMmYzNTZiIiBzdHJva2U9IiMyZjM1NmIiLz48cGF0aCBkPSJNMTM2NiwxOUwxMzg1LDE4NEwxNDM3LDE0M1oiIGZpbGw9IiMzMDM3NmYiIHN0cm9rZT0iIzMwMzc2ZiIvPjxwYXRoIGQ9Ik0xMzY2LDE5TDE0MzcsMTQzTDE0ODQsMjZaIiBmaWxsPSIjMzYzZjdlIiBzdHJva2U9IiMzNjNmN2UiLz48cGF0aCBkPSJNMTQ4NCwyNkwxNDM3LDE0M0wxNTMyLDcyWiIgZmlsbD0iIzM0M2M3OSIgc3Ryb2tlPSIjMzQzYzc5Ii8+PHBhdGggZD0iTTE1MzIsNzJMMTQzNywxNDNMMTUyMywxNzBaIiBmaWxsPSIjMmYzNDZiIiBzdHJva2U9IiMyZjM0NmIiLz48cGF0aCBkPSJNMTUzMiw3MkwxNTIzLDE3MEwxNTQ1LDM0OVoiIGZpbGw9IiMyYTJiNTgiIHN0cm9rZT0iIzJhMmI1OCIvPjxwYXRoIGQ9Ik0tODcsMTIyTC03NCw0NzRMLTc0LDMxOFoiIGZpbGw9IiMyYTFlM2YiIHN0cm9rZT0iIzJhMWUzZiIvPjxwYXRoIGQ9Ik0tODcsMTIyTC03NCwzMThMLTEyLDIyNloiIGZpbGw9IiMyYTI4NTMiIHN0cm9rZT0iIzJhMjg1MyIvPjxwYXRoIGQ9Ik0tODcsMTIyTC0xMiwyMjZMMjcsMTg4WiIgZmlsbD0iIzJhMmQ1ZCIgc3Ryb2tlPSIjMmEyZDVkIi8+PHBhdGggZD0iTTI3LDE4OEwtMTIsMjI2TDQxLDIyOVoiIGZpbGw9IiMyYTI5NTQiIHN0cm9rZT0iIzJhMjk1NCIvPjxwYXRoIGQ9Ik0yNywxODhMNDEsMjI5TDEzNiwxNzBaIiBmaWxsPSIjMmEyYjU5IiBzdHJva2U9IiMyYTJiNTkiLz48cGF0aCBkPSJNMTM2LDE3MEw0MSwyMjlMMTIzLDI2NFoiIGZpbGw9IiMyYTI4NTMiIHN0cm9rZT0iIzJhMjg1MyIvPjxwYXRoIGQ9Ik0xMzYsMTcwTDEyMywyNjRMMjQyLDI4MloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik0xMzYsMTcwTDI0MiwyODJMMjgwLDE4NloiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik0yODAsMTg2TDI0MiwyODJMMzQxLDI2MVoiIGZpbGw9IiMyYTI1NGUiIHN0cm9rZT0iIzJhMjU0ZSIvPjxwYXRoIGQ9Ik0yODAsMTg2TDM0MSwyNjFMMzI4LDEzMFoiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0zMjgsMTMwTDM0MSwyNjFMNDY3LDE1N1oiIGZpbGw9IiMyYTJjNWMiIHN0cm9rZT0iIzJhMmM1YyIvPjxwYXRoIGQ9Ik00NjcsMTU3TDM0MSwyNjFMNDYzLDI3NVoiIGZpbGw9IiMyYTI3NTAiIHN0cm9rZT0iIzJhMjc1MCIvPjxwYXRoIGQ9Ik00NjcsMTU3TDQ2MywyNzVMNTQyLDI1MVoiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik00NjcsMTU3TDU0MiwyNTFMNTYzLDE3OVoiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik01NjMsMTc5TDU0MiwyNTFMNjM1LDI4MVoiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik01NjMsMTc5TDYzNSwyODFMNjUwLDE2OFoiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik02NTAsMTY4TDYzNSwyODFMNzI0LDI2OFoiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik02NTAsMTY4TDcyNCwyNjhMNzc5LDE3NFoiIGZpbGw9IiMyYTJhNTciIHN0cm9rZT0iIzJhMmE1NyIvPjxwYXRoIGQ9Ik03NzksMTc0TDcyNCwyNjhMODE5LDI2NloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik03NzksMTc0TDgxOSwyNjZMODY2LDE2MloiIGZpbGw9IiMyYTJhNTgiIHN0cm9rZT0iIzJhMmE1OCIvPjxwYXRoIGQ9Ik04NjYsMTYyTDgxOSwyNjZMOTUxLDE3MVoiIGZpbGw9IiMyYTJhNTgiIHN0cm9rZT0iIzJhMmE1OCIvPjxwYXRoIGQ9Ik05NTEsMTcxTDgxOSwyNjZMOTg4LDI1N1oiIGZpbGw9IiMyYTI3NTAiIHN0cm9rZT0iIzJhMjc1MCIvPjxwYXRoIGQ9Ik05NTEsMTcxTDk4OCwyNTdMMTAzMywxNjJaIiBmaWxsPSIjMmEyYjU4IiBzdHJva2U9IiMyYTJiNTgiLz48cGF0aCBkPSJNMTAzMywxNjJMOTg4LDI1N0wxMDE3LDI2M1oiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik0xMDMzLDE2MkwxMDE3LDI2M0wxMTI1LDI4NloiIGZpbGw9IiMyYTI2NGYiIHN0cm9rZT0iIzJhMjY0ZiIvPjxwYXRoIGQ9Ik0xMDMzLDE2MkwxMTI1LDI4NkwxMTgwLDEzMloiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0xMTgwLDEzMkwxMTI1LDI4NkwxMjYxLDI2OVoiIGZpbGw9IiMyYTI3NTEiIHN0cm9rZT0iIzJhMjc1MSIvPjxwYXRoIGQ9Ik0xMTgwLDEzMkwxMjYxLDI2OUwxMjY0LDE3NloiIGZpbGw9IiMyYTJiNTkiIHN0cm9rZT0iIzJhMmI1OSIvPjxwYXRoIGQ9Ik0xMjY0LDE3NkwxMjYxLDI2OUwxMzQzLDI1OVoiIGZpbGw9IiMyYTI2NTAiIHN0cm9rZT0iIzJhMjY1MCIvPjxwYXRoIGQ9Ik0xMjY0LDE3NkwxMzQzLDI1OUwxMzg1LDE4NFoiIGZpbGw9IiMyYTJhNTYiIHN0cm9rZT0iIzJhMmE1NiIvPjxwYXRoIGQ9Ik0xMzg1LDE4NEwxMzQzLDI1OUwxNDM5LDIzM1oiIGZpbGw9IiMyYTI3NTIiIHN0cm9rZT0iIzJhMjc1MiIvPjxwYXRoIGQ9Ik0xMzg1LDE4NEwxNDM5LDIzM0wxNDM3LDE0M1oiIGZpbGw9IiMyYTJjNWIiIHN0cm9rZT0iIzJhMmM1YiIvPjxwYXRoIGQ9Ik0xNDM3LDE0M0wxNDM5LDIzM0wxNTIzLDE3MFoiIGZpbGw9IiMyYTJjNWMiIHN0cm9rZT0iIzJhMmM1YyIvPjxwYXRoIGQ9Ik0xNTIzLDE3MEwxNDM5LDIzM0wxNTE4LDIzNloiIGZpbGw9IiMyYTI5NTUiIHN0cm9rZT0iIzJhMjk1NSIvPjxwYXRoIGQ9Ik0xNTIzLDE3MEwxNTE4LDIzNkwxNTQ1LDM0OVoiIGZpbGw9IiMyYTI0NGMiIHN0cm9rZT0iIzJhMjQ0YyIvPjxwYXRoIGQ9Ik0tMTIsMjI2TC03NCwzMThMNDEsMjI5WiIgZmlsbD0iIzJhMjQ0YSIgc3Ryb2tlPSIjMmEyNDRhIi8+PHBhdGggZD0iTTQxLDIyOUwtNzQsMzE4TDYxLDM4NVoiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik00MSwyMjlMNjEsMzg1TDEyMywyNjRaIiBmaWxsPSIjMmEyMDQyIiBzdHJva2U9IiMyYTIwNDIiLz48cGF0aCBkPSJNMTIzLDI2NEw2MSwzODVMMTMxLDM4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMjMsMjY0TDEzMSwzODdMMjQyLDI4MloiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDEzMSwzODdMMjQxLDM2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDI0MSwzNjhMMzQ1LDMyMFoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0yNDIsMjgyTDM0NSwzMjBMMzQxLDI2MVoiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik0zNDEsMjYxTDM0NSwzMjBMNDE5LDMzMloiIGZpbGw9IiMyYTFlM2YiIHN0cm9rZT0iIzJhMWUzZiIvPjxwYXRoIGQ9Ik0zNDEsMjYxTDQxOSwzMzJMNDYzLDI3NVoiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik00NjMsMjc1TDQxOSwzMzJMNTQ1LDMyNVoiIGZpbGw9IiMyYTFlM2UiIHN0cm9rZT0iIzJhMWUzZSIvPjxwYXRoIGQ9Ik00NjMsMjc1TDU0NSwzMjVMNTQyLDI1MVoiIGZpbGw9IiMyYTIxNDQiIHN0cm9rZT0iIzJhMjE0NCIvPjxwYXRoIGQ9Ik01NDIsMjUxTDU0NSwzMjVMNjM1LDI4MVoiIGZpbGw9IiMyYTIwNDQiIHN0cm9rZT0iIzJhMjA0NCIvPjxwYXRoIGQ9Ik02MzUsMjgxTDU0NSwzMjVMNjQyLDM0MFoiIGZpbGw9IiMyYTFkM2QiIHN0cm9rZT0iIzJhMWQzZCIvPjxwYXRoIGQ9Ik02MzUsMjgxTDY0MiwzNDBMNzI0LDI2OFoiIGZpbGw9IiMyYTFmNDEiIHN0cm9rZT0iIzJhMWY0MSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDY0MiwzNDBMNzEzLDM2OVoiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDcxMywzNjlMODQ0LDMzOFoiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik03MjQsMjY4TDg0NCwzMzhMODE5LDI2NloiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik04MTksMjY2TDg0NCwzMzhMOTg4LDI1N1oiIGZpbGw9IiMyYTIwNDMiIHN0cm9rZT0iIzJhMjA0MyIvPjxwYXRoIGQ9Ik05ODgsMjU3TDg0NCwzMzhMOTgxLDM4NloiIGZpbGw9IiMyYTFjM2EiIHN0cm9rZT0iIzJhMWMzYSIvPjxwYXRoIGQ9Ik05ODgsMjU3TDk4MSwzODZMMTAyOSwzNThaIiBmaWxsPSIjMmExYjM4IiBzdHJva2U9IiMyYTFiMzgiLz48cGF0aCBkPSJNOTg4LDI1N0wxMDI5LDM1OEwxMDE3LDI2M1oiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik0xMDE3LDI2M0wxMDI5LDM1OEwxMTI1LDI4NloiIGZpbGw9IiMyYTFmNDAiIHN0cm9rZT0iIzJhMWY0MCIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMDI5LDM1OEwxMTM4LDM4MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMTM4LDM4MkwxMjMyLDMzMVoiIGZpbGw9IiMyYTFiMzgiIHN0cm9rZT0iIzJhMWIzOCIvPjxwYXRoIGQ9Ik0xMTI1LDI4NkwxMjMyLDMzMUwxMjYxLDI2OVoiIGZpbGw9IiMyYTFmNDEiIHN0cm9rZT0iIzJhMWY0MSIvPjxwYXRoIGQ9Ik0xMjYxLDI2OUwxMjMyLDMzMUwxMzQzLDM1MloiIGZpbGw9IiMyYTFkM2MiIHN0cm9rZT0iIzJhMWQzYyIvPjxwYXRoIGQ9Ik0xMjYxLDI2OUwxMzQzLDM1MkwxMzQzLDI1OVoiIGZpbGw9IiMyYTIwNDIiIHN0cm9rZT0iIzJhMjA0MiIvPjxwYXRoIGQ9Ik0xMzQzLDI1OUwxMzQzLDM1MkwxNDM5LDIzM1oiIGZpbGw9IiMyYTIxNDUiIHN0cm9rZT0iIzJhMjE0NSIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxMzQzLDM1MkwxNDI4LDM4NFoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxNDI4LDM4NEwxNTQ1LDM0OVoiIGZpbGw9IiMyYTFjM2IiIHN0cm9rZT0iIzJhMWMzYiIvPjxwYXRoIGQ9Ik0xNDM5LDIzM0wxNTQ1LDM0OUwxNTE4LDIzNloiIGZpbGw9IiMyYTIyNDciIHN0cm9rZT0iIzJhMjI0NyIvPjxwYXRoIGQ9Ik0tNzQsMzE4TC03NCw0NzRMMTQsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS03NCwzMThMMTQsNDQyTDYxLDM4NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02MSwzODVMMTQsNDQyTDc4LDUyMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02MSwzODVMNzgsNTIyTDEzMSwzODdaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNMTMxLDM4N0w3OCw1MjJMMTg3LDQzN1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzEsMzg3TDE4Nyw0MzdMMjQxLDM2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDE4Nyw0MzdMMjU2LDQ3OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDI1Niw0NzhMMzgwLDQ2NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yNDEsMzY4TDM4MCw0NjRMMzQ1LDMyMFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0zNDUsMzIwTDM4MCw0NjRMNDEwLDQ0MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0zNDUsMzIwTDQxMCw0NDJMNDE5LDMzMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik00MTksMzMyTDQxMCw0NDJMNTQ1LDMyNVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDQxMCw0NDJMNTg0LDQ4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDU4NCw0ODdMNjQ3LDQ0NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NDUsMzI1TDY0Nyw0NDRMNjQyLDM0MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik02NDIsMzQwTDY0Nyw0NDRMNzEzLDM2OVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDY0Nyw0NDRMNzMyLDQ3NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDczMiw0NzZMODQ4LDQ0NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03MTMsMzY5TDg0OCw0NDRMODQ0LDMzOFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik04NDQsMzM4TDg0OCw0NDRMOTgxLDM4NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05ODEsMzg2TDg0OCw0NDRMOTYyLDQ3MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05ODEsMzg2TDk2Miw0NzBMMTAyMCw0MzBaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNOTgxLDM4NkwxMDIwLDQzMEwxMDI5LDM1OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDI5LDM1OEwxMDIwLDQzMEwxMTI3LDQyM1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDI5LDM1OEwxMTI3LDQyM0wxMTM4LDM4MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTM4LDM4MkwxMTI3LDQyM0wxMjUwLDQ0NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMTM4LDM4MkwxMjUwLDQ0NUwxMjMyLDMzMVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMjMyLDMzMUwxMjUwLDQ0NUwxMzQzLDM1MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzQzLDM1MkwxMjUwLDQ0NUwxMzc5LDQzMFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMzQzLDM1MkwxMzc5LDQzMEwxNDI4LDM4NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxMzc5LDQzMEwxNDgzLDQ3NFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxNDgzLDQ3NEwxNTI1LDQ0NloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNDI4LDM4NEwxNTI1LDQ0NkwxNTQ1LDM0OVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xNTQ1LDM0OUwxNTI1LDQ0NkwxNTU1LDU2OFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0tNzQsNDc0TC00OSw2NjRMLTIzLDU4N1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0tNzQsNDc0TC0yMyw1ODdMMTQsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0LDQ0MkwtMjMsNTg3TDc4LDUyMloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xODcsNDM3TDc4LDUyMkwxODAsNTgyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4Nyw0MzdMMTgwLDU4MkwyMjYsNTcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4Nyw0MzdMMjI2LDU3MEwyNTYsNDc4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTI1Niw0NzhMMjI2LDU3MEwzNDYsNTIwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTI1Niw0NzhMMzQ2LDUyMEwzODAsNDY0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM4MCw0NjRMMzQ2LDUyMEw0ODEsNTQzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM4MCw0NjRMNDgxLDU0M0w0MTAsNDQyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQxMCw0NDJMNDgxLDU0M0w1ODQsNDg3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4NCw0ODdMNDgxLDU0M0w1ODgsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4NCw0ODdMNTg4LDUxMUw2NDcsNDQ0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY0Nyw0NDRMNTg4LDUxMUw2NjUsNTY2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY0Nyw0NDRMNjY1LDU2Nkw3MzIsNDc2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczMiw0NzZMNjY1LDU2Nkw3MzYsNTMxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczMiw0NzZMNzM2LDUzMUw4NDgsNDQ0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMNzM2LDUzMUw4NDcsNTgxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMODQ3LDU4MUw5NTcsNTI0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0OCw0NDRMOTU3LDUyNEw5NjIsNDcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTk2Miw0NzBMOTU3LDUyNEwxMDU1LDU1M1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik05NjIsNDcwTDEwNTUsNTUzTDEwMjAsNDMwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMjAsNDMwTDEwNTUsNTUzTDExMjcsNDIzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDEwNTUsNTUzTDExNjAsNTgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDExNjAsNTgwTDEyNDAsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExMjcsNDIzTDEyNDAsNTExTDEyNTAsNDQ1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNTAsNDQ1TDEyNDAsNTExTDEzNzksNDMwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDEyNDAsNTExTDEzNTUsNTc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDEzNTUsNTc1TDE0NTAsNTM0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNzksNDMwTDE0NTAsNTM0TDE0ODMsNDc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0ODMsNDc0TDE0NTAsNTM0TDE1NTUsNTY4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0ODMsNDc0TDE1NTUsNTY4TDE1MjUsNDQ2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS0yMyw1ODdMLTQ5LDY2NEw0Nyw2NjRaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNLTIzLDU4N0w0Nyw2NjRMNzgsNTIyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTc4LDUyMkw0Nyw2NjRMMTUyLDY1MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03OCw1MjJMMTUyLDY1MEwxODAsNTgyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4MCw1ODJMMTUyLDY1MEwyMzAsNjczWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE4MCw1ODJMMjMwLDY3M0wyMjYsNTcwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTIyNiw1NzBMMjMwLDY3M0wzNzAsNjcyWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTIyNiw1NzBMMzcwLDY3MkwzNDYsNTIwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTM0Niw1MjBMMzcwLDY3Mkw0ODEsNTQzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMMzcwLDY3Mkw0MzgsNjgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMNDM4LDY4MEw1NzAsNjc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTQ4MSw1NDNMNTcwLDY3NUw1ODgsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTU4OCw1MTFMNTcwLDY3NUw2NjUsNTY2WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY2NSw1NjZMNTcwLDY3NUw2NjAsNjM1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTY2NSw1NjZMNjYwLDYzNUw3MzYsNTMxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczNiw1MzFMNjYwLDYzNUw3NjMsNjg3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTczNiw1MzFMNzYzLDY4N0w4NDcsNTgxWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMNzYzLDY4N0w4ODQsNjY3WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMODg0LDY2N0w5NTMsNjUwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTg0Nyw1ODFMOTUzLDY1MEw5NTcsNTI0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTk1Nyw1MjRMOTUzLDY1MEwxMDU1LDU1M1oiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0xMDU1LDU1M0w5NTMsNjUwTDEwMTgsNjg4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwNTUsNTUzTDEwMTgsNjg4TDExMjgsNjY5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwNTUsNTUzTDExMjgsNjY5TDExNjAsNTgwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExNjAsNTgwTDExMjgsNjY5TDEyNjksNjc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTExNjAsNTgwTDEyNjksNjc0TDEyNDAsNTExWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNDAsNTExTDEyNjksNjc0TDEzNTUsNTc1WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDEyNjksNjc0TDEzNzgsNjQ5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDEzNzgsNjQ5TDE0NDEsNjU5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEzNTUsNTc1TDE0NDEsNjU5TDE0NTAsNTM0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE0NTAsNTM0TDE0NDEsNjU5TDE1NTUsNTY4WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTE1NTUsNTY4TDE0NDEsNjU5TDE1NjIsNjgzWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS00OSw2NjRMNDM4LDY4MEwyMzAsNjczWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTS00OSw2NjRMMjMwLDY3M0w0Nyw2NjRaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNNDcsNjY0TDIzMCw2NzNMMTUyLDY1MFoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik0yMzAsNjczTDQzOCw2ODBMMzcwLDY3MloiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik00MzgsNjgwTDc2Myw2ODdMNTcwLDY3NVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik01NzAsNjc1TDc2Myw2ODdMNjYwLDYzNVoiIGZpbGw9IiMyYTFhMzciIHN0cm9rZT0iIzJhMWEzNyIvPjxwYXRoIGQ9Ik03NjMsNjg3TDEwMTgsNjg4TDg4NCw2NjdaIiBmaWxsPSIjMmExYTM3IiBzdHJva2U9IiMyYTFhMzciLz48cGF0aCBkPSJNODg0LDY2N0wxMDE4LDY4OEw5NTMsNjUwWiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMTgsNjg4TDE1NjIsNjgzTDEyNjksNjc0WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEwMTgsNjg4TDEyNjksNjc0TDExMjgsNjY5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNjksNjc0TDE1NjIsNjgzTDE0NDEsNjU5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PHBhdGggZD0iTTEyNjksNjc0TDE0NDEsNjU5TDEzNzgsNjQ5WiIgZmlsbD0iIzJhMWEzNyIgc3Ryb2tlPSIjMmExYTM3Ii8+PC9nPjwvc3ZnPg==);color:#fff;font-family:'Font','DIN Pro','Helvetica Neue',Helvetica,Arial,sans-serif;background-size:cover;background-position:0 358px;background-repeat:no-repeat;background-color:#2a1a37}body::-webkit-scrollbar{width:5px}body::-webkit-scrollbar-track{background:#fff}body::-webkit-scrollbar-thumb{background:#374080}.stage,.stage *{position:absolute;width:100%;height:100%}.container:after{content:'';clear:both;display:table}.container{margin:0 auto}.header .logo span.four{color:#ffec88}.header .logo em{font-style:normal;display:inline-block}.header .logo .let1{transition:.3s all ease;transform:translate(0px,-60px)}.header .logo .let2{transform:translate(0px,60px);transition:.15s .1s all ease}.header .logo .let3{transform:translate(0px,-60px);transition:.15s .2s all ease}.header .logo .let4{transform:translate(0px,60px);transition:.15s .3s all ease}.header .logo .let5{color:#ffec88;transform:translate(0px,-60px);transition:.15s .4s all ease}.header .logo .let6{transform:translate(0px,60px);transition:.15s .5s all ease}.header .logo.active em{transform:translate(0)}.header .logo{font-size:70px;overflow:hidden;margin:10px auto;text-align:center;color:#fff;direction:ltr;letter-spacing:-6px;text-transform:uppercase;line-height:65px;font-family:Fredoka One;text-shadow:2px 2px 5px rgba(0,0,0,0.66)}.header{border-top:4px solid #634882;background:#3f255f;box-shadow:0 1px 13px rgba(0,0,0,0.53);position:relative;z-index:100}span.tvExt{color:#ffea7b}.mainMenu > div > ul > li > a{display:block;transition:.3s all ease;padding:15px 21px;font-size:17px;position:relative;text-align:center;z-index:10}.mainMenu > div > ul > li:last-child > a:before{display:none}.mainMenu > div > ul > li:hover > ul{visibility:visible;opacity:1;z-index:9999}.mainMenu > div > ul > li > ul > li:hover > a{background:#8c2463}.mainMenu > div > ul > li > ul > li > a{font-size:15px;border-bottom:1px solid #3e245d;display:block;transition:.3s all ease;padding:10px}.mainMenu > div > ul > li > ul > li:last-child > a{border-bottom:0}.mainMenu > div > ul > li > ul{position:absolute;border-top:1px solid #6d4a96;top:100%;padding:15px;width:190px;font-size:14px;right:0;background:#4f3271;visibility:hidden;opacity:0;transition:.3s all ease;box-shadow:inset 0 1px 7px rgba(0,0,0,0.36),0px 1px 3px rgba(0,0,0,0.28)}.mainMenu > div > ul > li:hover > a:before{border-color:#341e4e;color:#fff}.mainMenu > div > ul > li > a:after{content:'';position:absolute;bottom:0;right:0;width:100%;height:0;background:linear-gradient(#6e499a,#4f3271);transition:.3s all cubic-bezier(0.49,0.33,0.22,1.35);z-index:-1}.mainMenu > div > ul > li:hover a:after{height:53px}.mainMenu > div > ul > li{display:inline-block;font-weight:700;float:right;width:50%;position:relative;border-left:1px solid #311c4a;border-bottom:1px solid #311c4a}.mainMenu{float:right;perspective:1000px}ul,li{list-style:none;margin:0;padding:0}a{text-decoration:none;color:#fff}.bannerBg{margin-top:70px}.filter{margin-bottom:20px;text-align:center}.filter h2 span{color:#ffea7b}.filter ul > li.active{background:#2a1e3e;box-shadow:0 2px 5px rgba(0,0,0,0.58)}.filter ul > li{padding:10px 16px;border-radius:6px;font-weight:700;font-size:17px;cursor:pointer;border-bottom:0}.filter ul{padding:0 20px}div#dataTab .block:nth-child(4n+0){margin-left:0}div#dataTab .block img{width:100%;height:100%}div#dataTab .block .image .img2{position:absolute;bottom:0;right:0;width:100%;transition:.5s all ease;height:50%;background-size:282px 370px;background-position:bottom center}div#dataTab .block .image .img1{position:absolute;transition:.3s all ease;top:0;perspective:1000px;right:0;width:100%;height:50%;background-size:282px 370px;overflow:hidden}div#dataTab .block:hover .img2{transform:translate(0px,260px) rotate(80deg)}div#dataTab .block:hover .img1:after{-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);transition:transform .6s}div#dataTab .block .img1:after{box-sizing:border-box;pointer-events:none;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.5);content:'';-webkit-transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);transform:scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-110%,0)}div#dataTab .block:hover .img1{opacity:.4;transform:translate(10px,-50px) rotate(7deg) scale(1.3)}div#dataTab .block{width:292px;height:380px;perspective:1000px;display:inline-block;overflow:hidden;margin-bottom:10px;border:5px solid #e6e6e6;box-shadow:0 0 9px rgba(0,0,0,0.75);position:relative}div#dataTab{min-height:400px;text-align:center}.wrap,.wrap *{box-sizing:initial}.wrap{position:relative;top:150px;width:150px;margin:0 auto;direction:ltr}.loader{position:absolute;top:0;z-index:10;width:50px;height:50px;border:15px solid;border-radius:50%;border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0);animation:loadEr 3s infinite}@keyframes loadEr{0%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}10.4%{border-top-color:#3a458a;border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}20.8%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}31.2%{border-top-color:rgba(44,44,44,0);border-right-color:#3a458a;border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}41.6%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0);transform:rotate(40deg)}52%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:#3a458a;border-left-color:rgba(33,33,33,0)}62.4%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:rgba(33,33,33,0)}72.8%{border-top-color:rgba(44,44,44,0);border-right-color:rgba(55,55,55,0);border-bottom-color:rgba(66,66,66,0);border-left-color:#3a458a}}.loaderbefore{width:50px;height:50px;border:15px solid #4250a0;border-radius:50%;position:absolute;top:0;z-index:9}.circular{position:absolute;top:-15px;left:-15px;width:70px;height:70px;border:20px solid;border-radius:50%;border-top-color:#333;border-left-color:#fff;border-bottom-color:#333;border-right-color:#fff;opacity:.1;animation:poof 5s infinite}@keyframes poof{0%{transform:scale(1,1) rotate(0deg);opacity:.1}50%{transform:scale(4,4) rotate(360deg);opacity:0}}.another{opacity:.1;transform:rotate(90deg);animation:poofity 5s infinite;animation-delay:1s}@keyframes poofity{0%{transform:scale(1,1) rotate(90deg);opacity:.1}50%{transform:scale(4,4) rotate(-360deg);opacity:0}}.text{position:absolute;top:100px;left:-21px;font-weight:700;font-size:21px;font-family:Font;text-transform:uppercase;color:#fff;animation:opaa 10s infinite}@keyframes opaa{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}.block:hover .categorySpan{transform:translate(0)}.block:hover .viewsSpan{transform:translate(0)}.viewsSpan{position:absolute;left:10px;min-width:70px;background:#8c2463;top:141px;border-radius:5px;font-weight:700;font-size:15px;padding:2px 6px 1px;text-align:center;box-shadow:0 1px 2px rgba(0,0,0,0.58);transition:.3s .1s all ease;transform:translate(-200px,0px)}.categorySpan{position:absolute;transition:.3s all ease;left:10px;background:#4a2c6f;top:112px;border-radius:5px;padding:2px 6px;font-weight:700;font-size:14px;box-shadow:0 1px 2px rgba(0,0,0,0.58);transform:translate(-200px,0px)}.block:hover .boxtitle{transform:scale(1)}.boxtitle{position:absolute;bottom:0;width:100%;left:0;transition:.3s all ease;background:linear-gradient(rgba(70,43,93,0),rgba(0,0,0,0.81),rgba(0,0,0,0.9));text-align:center;font-weight:700;font-size:15px;padding:16px 9px 9px}.block:hover .boxdetil{transform:rotate(0deg) scale(1);opacity:1;transition:.3s .2s all ease}.boxdetil{position:absolute;right:0;transform:rotate(20deg);transition:.3s all ease;opacity:0;width:100%;top:172px;padding:12px;transform-origin:bottom left;text-align:center;font-size:14px;line-height:24px;color:#d4d4d4}.pagination li.active{background:radial-gradient(ellipse at top,#292929,#232323 89%,#000)}.pagination li a{font-size:18px;color:#fff;display:block;line-height:100%}.pagination li > span.page-numbers.current{top:0;left:0;background:#8c2463;line-height:38px;display:block;color:#fff;margin:-12px -15px;padding:3px 15px 0}.pagination li{display:inline-block;padding:12px 14px 3px;background:#3e245d;margin-right:2px;box-shadow:0 1px 3px rgba(0,0,0,0.56);direction:ltr;margin-left:2px;height:40px;border-radius:4px;font-weight:700;position:relative;overflow:hidden}.pagination{padding-top:15px;text-align:center;clear:both}footer .alignright{margin-bottom:10px}footer .top{background:rgba(0,0,0,0.52);padding:7px 10px;box-shadow:0 2px 5px rgba(0,0,0,0.31);text-align:left}footer{margin-top:15px;background:#29173e;z-index:1;font-weight:700;padding:0;box-shadow:0 -1px 1px rgba(0,0,0,0.35);position:relative}.rencersBanner.active .h{bottom:10px}.rencersBanner.active .t{bottom:5px}.rencersBanner.active .bg{transform:scale(1);opacity:1}.rencersBanner.active .b{right:10px}.rencersBanner.active .c{bottom:18px}.rencersBanner.active .j{bottom:0}.rencersBanner.active .s{right:40px}.rencersBanner .h{width:380px;height:445px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/h.png);position:absolute;bottom:-445px;left:108px;z-index:2;transition:.4s all ease;background-size:101%}.rencersBanner .bg.active{transform:scale(1);opacity:1}.rencersBanner .bg{width:100%;height:100%;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/bg.jpg);position:absolute;bottom:0;right:0;transform:scale(.9);background-size:100% 100%;z-index:-1;opacity:0;transition:.3s all ease}.rencersBanner .b.active{bottom:0}.rencersBanner .b{width:252px;height:430px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/b.png);position:absolute;background-size:100%;bottom:0;right:-300px;z-index:0;z-index:20;transition:.5s .2s all ease}.rencersBanner .c.active{bottom:0}.rencersBanner .c{width:230px;height:417px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/c.png);position:absolute;bottom:-100%;left:0;background-size:100%;z-index:1;transition:.4s .1s all ease}.rencersBanner .j.active{left:0}.rencersBanner .j{width:348px;height:455px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/j.png);background-size:100%;position:absolute;bottom:-455px;right:260px;z-index:19;transition:.5s .3s all ease}.rencersBanner .s.active{right:0}.rencersBanner .s{width:408px;height:410px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/s.png);position:absolute;top:38px;right:-100%;z-index:20;transition:.4s all ease;background-size:100%}.rencersBanner .t{width:280px;height:436px;background:url(http://cima4u.tv/wp-content/themes/YourColor/img/t.png);position:absolute;background-size:100%;bottom:-500px;left:260px;z-index:22;transition:.4s .2s all ease}.rencersBanner{position:relative;overflow:hidden;height:278px!important;overflow:hidden;display:none}.movieSection .bgMovieSection{position:absolute;top:0;right:0;-webkit-filter:blur(20px);width:100%;height:100%;background-size:cover;background-position:center;opacity:.3}.movieSection > .container{position:relative;padding-top:1px}.movieSection .poster img{width:100%;height:100%}.movieSection .poster{width:300px;height:400px;border:4px solid #ddd;box-shadow:0 1px 10px rgba(0,0,0,0.86);margin-top:25px;margin:25px auto 0}.movieSection{background:#2b1644;margin-bottom:0;overflow:hidden;position:relative;perspective:1000px;padding-top:1px;border-bottom:2px solid #353d7b;box-shadow:0 1px 14px rgba(0,0,0,0.72)}.bottomBarRece > div > h2{margin:0;padding:10px 0;font-size:15px}.bottomBarRece a:last-child{margin-left:0}.bottomBarRece a span{position:absolute;bottom:0;right:0;width:100%;background:linear-gradient(transparent,rgba(0,0,0,0.75),rgba(0,0,0,0.88));text-align:center;font-size:13px;padding:7px}.bottomBarRece a img{width:100%;height:100%}.bottomBarRece a{display:inline-block;width:143px;height:190px;overflow:hidden;float:right;margin-left:8px;position:relative}.bottomBarRece{right:0;position:relative;clear:both;width:100%;background:linear-gradient(to left,rgba(0,0,0,0.12),rgba(0,0,0,0.32));padding:8px 0}.leftDetails > h2{margin:0 0 4px;color:#fff}.leftDetails{float:right;width:720px;margin-top:25px;padding:0 20px 20px}.bottomBartitle span{padding:2px 6px 1px;font-size:14px;border-radius:5px;border:1px solid #ccc;font-weight:700}.bottomBartitle span a{color:#e0e0e0}.bottomBartitle em{display:inline-block;width:2px;height:8px;background:#b9b9b9;margin:0 10px}.rightDetails .tags span{display:block;font-weight:700;color:#ffea7b;font-size:17px;border-bottom:3px solid rgba(255,255,255,0.07);padding:6px 12px;margin-bottom:4px}.rightDetails .tags a:last-child{border-bottom:0}.rightDetails .tags a:hover{background:#3e245d}.rightDetails .tags a{display:block;color:#d4d4d4;font-size:13px;transition:.3s all ease;padding-bottom:4px;padding:6px 8px;border-bottom:1px solid rgba(255,255,255,0.04)}.rightDetails{margin-top:0;position:relative;overflow:hidden;box-shadow:0 0 10px rgba(84,84,84,0.54);margin-bottom:-25px;background:rgba(0,0,0,0.42);padding:10px}.tagsContent a{float:right;display:block;margin:0;padding:0;border:none;margin-bottom:8px;border-radius:3px;perspective:1000px;margin-left:8px;background:#353d7b;color:inherit;vertical-align:middle;box-shadow:0 1px 3px rgba(0,0,0,0.56);position:relative;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.tagsContent > div > span{float:right;font-weight:700;line-height:33px;color:#ffea7b;margin-left:10px}.tagsContent{position:relative;margin-top:25px;background:rgba(0,0,0,0.29);padding:10px 10px 5px;box-sizing:initial}.owl-carousel .animated{-webkit-animation-duration:1000ms;animation-duration:1000ms;-webkit-animation-fill-mode:both;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}.owl-carousel{display:none;direction:ltr;width:100%;-webkit-tap-highlight-color:transparent;position:relative;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;max-width:initial}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0px,0,0)}.owl-carousel .owl-controls .owl-dot,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-nav .owl-prev{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-loaded{display:block}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel .owl-refresh .owl-item{display:none}.owl-carousel .owl-item{position:relative;min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-item img{display:block;width:100%;-webkit-transform-style:preserve-3d}.owl-carousel.owl-text-select-on .owl-item{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}.owl-carousel .owl-grab{cursor:move;cursor:-webkit-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.no-js .owl-carousel{display:block}.owl-carousel .owl-item .owl-lazy{opacity:0;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease}.owl-carousel .owl-item img{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;-webkit-transition:scale 100ms ease;-moz-transition:scale 100ms ease;-ms-transition:scale 100ms ease;-o-transition:scale 100ms ease;transition:scale 100ms ease}.owl-carousel .owl-video-play-icon:hover{-webkit-transition:scale(1.3,1.3);-moz-transition:scale(1.3,1.3);-ms-transition:scale(1.3,1.3);-o-transition:scale(1.3,1.3);transition:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease}.owl-carousel .owl-video-frame{position:relative;z-index:1}ul.slidesRelated{direction:ltr}.related:after{content:'';display:block;clear:both}.related{text-align:center;margin-bottom:-15px}.related > div:last-child{margin-left:0}.related > div > a > h2{text-align:center;font-size:21px;margin:0 0 13px;display:table;margin:0 auto 13px;border:2px solid rgba(255,255,255,0.18);padding:7px 32px;border-radius:10px;color:#ddd;border-bottom:5px solid rgba(255,255,255,0.18);box-shadow:inset 0 -2px 3px rgba(0,0,0,0.25)}.related > div{padding:15px}.owl-carousel .owl-item > li > a:nth-child(3n+0){margin-left:0}.owl-carousel .owl-item > li > a span{position:absolute;bottom:0;right:0;z-index:10;width:100%;background:linear-gradient(rgba(70,43,93,0),rgba(0,0,0,0.81),rgba(0,0,0,0.9));font-size:13px;font-weight:700;padding:30px 12px 10px}.owl-carousel .owl-item > li > a:hover img{transform:scale(1.2) rotate(5deg)}.owl-carousel .owl-item > li > a img{width:100%;transition:.3s all ease;height:100%;min-height:100%;z-index:10;position:relative}.owl-carousel .owl-item > li > a{position:relative;height:520px;perspective:1000px;overflow:hidden;display:block;margin-bottom:10px;border:3px solid rgba(150,150,150,0.91);box-shadow:0 1px 6px rgba(0,0,0,0.62)}.owl-dots{height:17px}.owl-dots > div{display:inline-block;width:15px;height:15px;background:#fff;border-radius:50%;margin:10px 2px 0}.owl-dots > div.active{background:#ffea7b}.bg-1{background:#ECEFF1;color:#37474f}.bg-2{background:#7986cb;color:#ECEFF1}.bg-3{background:#37474f;color:#fff}.leftDetails .button{font-size:22px;text-align:center;box-shadow:0 1px 6px rgba(0,0,0,0.51);min-width:150px;display:block;margin:0;padding:.7em 2em;border:none;background:none;color:inherit;vertical-align:middle;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;font-weight:700;bottom:0}.button:focus{outline:none}.button > span{vertical-align:middle}.bg-1 .button{color:#37474f;border-color:#37474f}.bg-2 .button{color:#ECEFF1;border-color:#ECEFF1}.bg-3 .button{color:#fff;border-color:#fff}.button--size-s{font-size:14px}.button--size-m{font-size:16px}.button--size-l{font-size:18px}.button--text-upper{text-transform:uppercase}.button--text-thin{font-weight:300}.button--text-medium{font-weight:500}.button--text-thick{font-weight:600}.button--round-s{border-radius:5px}.button--round-m{border-radius:15px}.button--round-l{border-radius:40px}.button--border-medium{border:2px solid}.button--border-thick{border:3px solid}.button--winona{overflow:hidden;padding:0;-webkit-transition:border-color 0.3s,background-color .3s;transition:border-color 0.3s,background-color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--winona::after{content:attr(data-text);position:absolute;width:100%;height:100%;top:0;left:0;opacity:0;color:#3f51b5;-webkit-transform:translate3d(0,25%,0);transform:translate3d(0,25%,0)}.button--winona > span{display:block}.button--winona.button--inverted{color:#7986cb}.button--winona.button--inverted:after{color:#fff}.button--winona::after,.button--winona > span{padding:1em 2em;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--winona:hover{border-color:#3f51b5;background-color:rgba(63,81,181,0.1)}.button--winona.button--inverted:hover{border-color:#21333C;background-color:#21333C}.button--winona:hover::after{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--winona:hover > span{opacity:0;-webkit-transform:translate3d(0,-25%,0);transform:translate3d(0,-25%,0)}.button--ujarak{-webkit-transition:border-color 0.4s,color .4s;transition:border-color 0.4s,color .4s}.button--ujarak::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:#37474f;z-index:-1;opacity:0;-webkit-transform:scale3d(0.7,1,1);transform:scale3d(0.7,1,1);-webkit-transition:-webkit-transform 0.4s,opacity .4s;transition:transform 0.4s,opacity .4s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--ujarak.button--round-s::before{border-radius:2px}.button--ujarak.button--inverted::before{background:#7986CB}.button--ujarak,.button--ujarak::before{-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--ujarak:hover{color:#fff;border-color:#37474f}.button--ujarak.button--inverted:hover{color:#37474F;border-color:#fff}.button--ujarak:hover::before{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--wayra{overflow:hidden;width:245px;-webkit-transition:border-color 0.3s,color .3s;transition:border-color 0.3s,color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--wayra::before{content:'';position:absolute;top:0;left:0;width:150%;height:100%;background:#37474f;z-index:-1;-webkit-transform:rotate3d(0,0,1,-45deg) translate3d(0,-3em,0);transform:rotate3d(0,0,1,-45deg) translate3d(0,-3em,0);-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transition:-webkit-transform 0.3s,opacity 0.3s,background-color .3s;transition:transform 0.3s,opacity 0.3s,background-color .3s}.button--wayra:hover{color:#fff;border-color:#3f51b5}.button--wayra.button--inverted:hover{color:#3f51b5;border-color:#fff}.button--wayra:hover::before{opacity:1;background-color:#3f51b5;-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg);-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--wayra.button--inverted:hover::before{background-color:#fff}.button--tamaya{overflow:hidden;color:#7986cb;min-width:180px}.button--tamaya.button--inverted{color:#37474f;border-color:#37474f}.button--tamaya::before,.button--tamaya::after{content:attr(data-text);position:absolute;width:100%;height:50%;left:0;color:#fff;overflow:hidden;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--tamaya.button--inverted::before,.button--tamaya.button--inverted::after{background:#fff;color:#37474f}.button--tamaya::before{top:0;padding-top:.6em}.button--tamaya::after{bottom:0;line-height:0}.button--tamaya > span{display:block;-webkit-transform:scale3d(0.2,0.2,1);transform:scale3d(0.2,0.2,1);opacity:0;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--tamaya:hover::before{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--tamaya:hover::after{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--tamaya:hover > span{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--rayen{overflow:hidden;padding:0}.button--rayen.button--inverted{color:#fff}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:100%}.button--rayen::before{content:attr(data-text);position:absolute;top:0;left:-1px;width:100%;height:100%;background:#8c2463;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.button--rayen.button--inverted::before{background:#fff;color:#37474f}.button--rayen > span{display:block}.button--rayen::before,.button--rayen > span{padding:.5em 1em;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--rayen:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);left:0}.button--rayen:hover > span{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--pipaluk{width:240px;padding:1.5em 3em;color:#fff}.button--pipaluk.button--inverted{color:#7986cb}.button--pipaluk::before,.button--pipaluk::after{content:'';border-radius:inherit;position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;-webkit-transition:-webkit-transform 0.3s,background-color .3s;transition:transform 0.3s,background-color .3s;-webkit-transition-timing-function:cubic-bezier(0.25,0,0.3,1);transition-timing-function:cubic-bezier(0.25,0,0.3,1)}.button--pipaluk::before{border:2px solid #7986cb}.button--pipaluk.button--inverted::before{border-color:#fff}.button--pipaluk::after{background:#7986cb}.button--pipaluk.button--inverted::after{background:#fff}.button--pipaluk:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--pipaluk::before,.button--pipaluk:hover::after{-webkit-transform:scale3d(0.7,0.7,1);transform:scale3d(0.7,0.7,1)}.button--pipaluk:hover::after{background-color:#3f51b5}.button--pipaluk.button--inverted:hover::after{background-color:#fff}.button--nuka{margin:1em 2em;-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--nuka.button--inverted{color:#37474f}.button--nuka::before,.button--nuka::after{content:'';position:absolute;border-radius:inherit;background:#7986cb;z-index:-1}.button--nuka::before{top:-4px;bottom:-4px;left:-4px;right:-4px;opacity:.2;-webkit-transform:scale3d(0.7,1,1);transform:scale3d(0.7,1,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s}.button--nuka::after{top:0;left:0;width:100%;height:100%;-webkit-transform:scale3d(1.1,1,1);transform:scale3d(1.1,1,1);-webkit-transition:-webkit-transform 0.3s,background-color .3s;transition:transform 0.3s,background-color .3s}.button--nuka::before,.button--nuka::after{-webkit-transition-timing-function:cubic-bezier(0.2,1,0.3,1);transition-timing-function:cubic-bezier(0.2,1,0.3,1)}.button--nuka.button--inverted::before,.button--nuka.button--inverted::after{background:#fff}.button--nuka:hover{color:#fff}.button--nuka:hover::before{opacity:1}.button--nuka:hover::after{background-color:#37474f}.button--nuka.button--inverted:hover::after{background-color:#7986cb}.button--nuka:hover::after,.button--nuka:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--moema{padding:1.5em 3em;border-radius:50px;background:#7986cb;color:#fff;-webkit-transition:background-color 0.3s,color .3s;transition:background-color 0.3s,color .3s}.button--moema.button--inverted{background:#ECEFF1;color:#37474f}.button--moema::before{content:'';position:absolute;top:-20px;left:-20px;bottom:-20px;right:-20px;background:inherit;border-radius:50px;z-index:-1;opacity:.4;-webkit-transform:scale3d(0.8,0.5,1);transform:scale3d(0.8,0.5,1)}.button--moema:hover{-webkit-transition:background-color .1s 0.3s,color .1s .3s;transition:background-color .1s 0.3s,color .1s .3s;color:#ECEFF1;background-color:#3f51b5;-webkit-animation:anim-moema-1 .3s forwards;animation:anim-moema-1 .3s forwards}.button--moema.button--inverted:hover{color:#ECEFF1;background-color:#7986cb}.button--moema:hover::before{-webkit-animation:anim-moema-2 .3s .3s forwards;animation:anim-moema-2 .3s .3s forwards}@-webkit-keyframes anim-moema-1{60%{-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}85%{-webkit-transform:scale3d(1.1,1.1,1);transform:scale3d(1.1,1.1,1)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes anim-moema-1{60%{-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}85%{-webkit-transform:scale3d(1.1,1.1,1);transform:scale3d(1.1,1.1,1)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@-webkit-keyframes anim-moema-2{to{opacity:0;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes anim-moema-2{to{opacity:0;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.button--isi{padding:1.2em 2em;color:#fff;background:#7986cb;overflow:hidden}.button--isi::before{content:'';z-index:-1;position:absolute;top:50%;left:100%;margin:-15px 0 0 1px;width:30px;height:30px;border-radius:50%;background:#3f51b5;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale3d(1,2,1);transform:scale3d(1,2,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.7,0,0.9,1);transition-timing-function:cubic-bezier(0.7,0,0.9,1)}.button--isi .button__icon{vertical-align:middle}.button--isi > span{vertical-align:middle;padding-left:.75em}.button--isi:hover::before{-webkit-transform:scale3d(9,9,1);transform:scale3d(9,9,1)}.button.button--aylen{background:#fff;color:#3e245d;overflow:hidden;-webkit-transition:color .3s;transition:color .3s}.button--aylen.button--inverted{background:none;color:#fff}.button--aylen::before,.button--aylen::after{content:'';position:absolute;height:100%;width:100%;bottom:100%;left:0;z-index:-1;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--aylen::before{background:#790909}.button--aylen::after{background:#bf0e0e}.button--aylen:hover{color:#fff}.button--aylen:hover::before,.button--aylen:hover::after{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--aylen:hover::after{-webkit-transition-delay:.175s;transition-delay:.175s}.button.button--saqui{overflow:hidden;color:#fff;background:#37474f;-webkit-transition:background-color .3s ease-in,color .3s ease-in;transition:background-color .3s ease-in,color .3s ease-in}.button--saqui.button--inverted{background:#fff;color:#37474f}.button--saqui::after{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%;padding:1em 2em;color:#37474f;-webkit-transform-origin:-25% 50%;transform-origin:-25% 50%;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);-webkit-transition:-webkit-transform .3s ease-in;transition:transform .3s ease-in}.button--saqui.button--inverted::after{color:#fff}.button--saqui:hover::after,.button--saqui:hover{-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.button--saqui:hover{background-color:#7986cb;color:#7986cb}.button--saqui.button--inverted:hover{background-color:#3f51b5;color:#3f51b5}.button--saqui:hover::after{-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg)}.button.button--wapasha{background:#37474f;color:#fff;-webkit-transition:background-color 0.3s,color .3s;transition:background-color 0.3s,color .3s}.button--wapasha.button--inverted{background:#fff;color:#37474f}.button--wapasha::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border:2px solid #3f51b5;z-index:-1;border-radius:inherit;opacity:0;-webkit-transform:scale3d(0.6,0.6,1);transform:scale3d(0.6,0.6,1);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--wapasha.button--inverted::before{border-color:#7986cb}.button--wapasha:hover{background-color:#fff;color:#3f51b5}.button--wapasha.button--inverted:hover{background-color:#37474f;color:#7986cb}.button--wapasha:hover::before{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1);opacity:1}.button--nina{padding:0 2em;background:#7986cb;color:#fff;overflow:hidden;-webkit-transition:background-color .3s;transition:background-color .3s}.button--nina.button--inverted{background:#fff;color:#7986cb}.button--nina > span{display:inline-block;padding:1em 0;opacity:0;color:#fff;-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--nina::before{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%;padding:1em 0;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--nina:hover{background-color:#3f51b5}.button--nina:hover::before{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--nina:hover > span{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--nina:hover > span:nth-child(1){-webkit-transition-delay:.045s;transition-delay:.045s}.button--nina:hover > span:nth-child(2){-webkit-transition-delay:.09s;transition-delay:.09s}.button--nina:hover > span:nth-child(3){-webkit-transition-delay:.135s;transition-delay:.135s}.button--nina:hover > span:nth-child(4){-webkit-transition-delay:.18s;transition-delay:.18s}.button--nina:hover > span:nth-child(5){-webkit-transition-delay:.225s;transition-delay:.225s}.button--nina:hover > span:nth-child(6){-webkit-transition-delay:.27s;transition-delay:.27s}.button--nina:hover > span:nth-child(7){-webkit-transition-delay:.315s;transition-delay:.315s}.button--nina:hover > span:nth-child(8){-webkit-transition-delay:.36s;transition-delay:.36s}.button--nina:hover > span:nth-child(9){-webkit-transition-delay:.405s;transition-delay:.405s}.button--nina:hover > span:nth-child(10){-webkit-transition-delay:.45s;transition-delay:.45s}.button--nanuk{padding:0 2em;overflow:hidden;background:#7986cb;-webkit-transition:background-color .3s;transition:background-color .3s}.button--nanuk.button--inverted{background:#fff;color:#7986cb}.button--nanuk > span{display:inline-block;padding:1em 0}.button--nanuk:hover{background-color:#3f51b5}.button--nanuk:hover > span:nth-child(odd){-webkit-animation:anim-nanuk-1 .5s forwards;animation:anim-nanuk-1 .5s forwards}.button--nanuk:hover > span:nth-child(even){-webkit-animation:anim-nanuk-2 .5s forwards;animation:anim-nanuk-2 .5s forwards}.button--nanuk:hover > span:nth-child(odd),.button--nanuk:hover > span:nth-child(even){-webkit-animation-timing-function:cubic-bezier(0.75,0,0.125,1);transition-animation-function:cubic-bezier(0.75,0,0.125,1)}@-webkit-keyframes anim-nanuk-1{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:#fff}100%{color:#fff}}@keyframes anim-nanuk-1{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:#fff}100%{color:#fff}}@-webkit-keyframes anim-nanuk-2{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:#fff}100%{color:#fff}}@keyframes anim-nanuk-2{0%,100%{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}49%{opacity:1;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}50%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);color:inherit}51%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);color:#fff}100%{color:#fff}}.button--nanuk:hover > span:nth-child(1){-webkit-animation-delay:0;animation-delay:0}.button--nanuk:hover > span:nth-child(2){-webkit-animation-delay:.05s;animation-delay:.05s}.button--nanuk:hover > span:nth-child(3){-webkit-animation-delay:.1s;animation-delay:.1s}.button--nanuk:hover > span:nth-child(4){-webkit-animation-delay:.15s;animation-delay:.15s}.button--nanuk:hover > span:nth-child(5){-webkit-animation-delay:.2s;animation-delay:.2s}.button--nanuk:hover > span:nth-child(6){-webkit-animation-delay:.25s;animation-delay:.25s}.button--nanuk:hover > span:nth-child(7){-webkit-animation-delay:.3s;animation-delay:.3s}.button--nanuk:hover > span:nth-child(8){-webkit-animation-delay:.35s;animation-delay:.35s}.button--nanuk:hover > span:nth-child(9){-webkit-animation-delay:.4s;animation-delay:.4s}.button--nanuk:hover > span:nth-child(10){-webkit-animation-delay:.45s;animation-delay:.45s}.button--nanuk:hover > span:nth-child(11){-webkit-animation-delay:.5s;animation-delay:.5s}.button--antiman{background:none;border:none;height:60px}.button--antiman.button--inverted,.button--antiman.button--inverted-alt{-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--antiman > span{padding-left:.35em}.button--antiman::before,.button--antiman::after{content:'';z-index:-1;border-radius:inherit;pointer-events:none;position:absolute;top:0;left:0;width:100%;height:100%;-webkit-backface-visibility:hidden;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--antiman::before{border:2px solid #37474f;opacity:0;-webkit-transform:scale3d(1.2,1.2,1);transform:scale3d(1.2,1.2,1)}.button--antiman.button--border-thin::before{border-width:1px}.button--antiman.button--border-medium::before{border-width:2px}.button--antiman.button--border-thick::before{border-width:3px}.button--antiman.button--inverted::before{border-color:#7986cb}.button--antiman.button--inverted-alt::before{border-color:#3f51b5}.button--antiman::after{background:#fff}.button--antiman.button--inverted::after{background:#7986cb}.button--antiman.button--inverted-alt::after{background:#3f51b5}.button--antiman.button--inverted:hover{color:#7986cb}.button--antiman.button--inverted-alt:hover{color:#3f51b5}.button--antiman:hover::before{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--antiman:hover::after{opacity:0;-webkit-transform:scale3d(0.8,0.8,1);transform:scale3d(0.8,0.8,1)}.button--itzel{border:none;padding:0;overflow:hidden;width:255px}.button--itzel::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border:2px solid;border-radius:inherit;-webkit-clip-path:polygon(0% 0%,0% 100%,35% 100%,35% 60%,65% 60%,65% 100%,100% 100%,100% 0%);clip-path:url(.http://cima4u.tv/wp-content/themes/YourColor/index.html#clipBox);-webkit-transform:translate3d(0,100%,0) translate3d(0,-2px,0);transform:translate3d(0,100%,0) translate3d(0,-2px,0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}.button--itzel.button--border-thin::before{border:1px solid;-webkit-transform:translate3d(0,100%,0) translate3d(0,-1px,0);transform:translate3d(0,100%,0) translate3d(0,-1px,0)}.button--itzel.button--border-thick::before{border:3px solid;-webkit-transform:translate3d(0,100%,0) translate3d(0,-3px,0);transform:translate3d(0,100%,0) translate3d(0,-3px,0)}.button--itzel::before,.button--itzel .button__icon{-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--itzel .button__icon{position:absolute;top:100%;left:50%;padding:20px;font-size:20px;-webkit-transform:translate3d(-50%,0,0);transform:translate3d(-50%,0,0)}.button--itzel > span{display:block;padding:20px;-webkit-transition:-webkit-transform 0.3s,opacity .3s;transition:transform 0.3s,opacity .3s;-webkit-transition-delay:.3s;transition-delay:.3s}.button--itzel:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--itzel:hover .button__icon{-webkit-transition-delay:.1s;transition-delay:.1s;-webkit-transform:translate3d(-50%,-100%,0);transform:translate3d(-50%,-100%,0)}.button--itzel:hover > span{opacity:0;-webkit-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0);-webkit-transition-delay:0;transition-delay:0}.button--naira{padding:0;overflow:hidden;-webkit-transition:background-color .3s;transition:background-color .3s}.button--naira::before{content:'';position:absolute;left:-50%;width:200%;height:200%;background:#3e245d;top:-50%;z-index:-1;-webkit-transform:translate3d(0,-100%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-100%,0) rotate3d(0,0,1,-10deg)}.button--naira.button--inverted::before{background:#7986cb}.button--naira-up::before{-webkit-transform:translate3d(0,100%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,100%,0) rotate3d(0,0,1,10deg)}.button--naira > span{display:block;font-size:22px}.button--naira .button__icon{position:absolute;padding:.55em 2em!important;top:0;width:100%;left:0;font-size:27px;color:#fff;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--naira-up .button__icon{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--naira > span,.button--naira .button__icon{padding:.7em 2em;-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--naira:hover::before{-webkit-animation:anim-naira-1 .3s forwards ease-in;animation:anim-naira-1 .3s forwards ease-in}.button--naira-up:hover::before{-webkit-animation:anim-naira-2 .3s forwards ease-in;animation:anim-naira-2 .3s forwards ease-in}@-webkit-keyframes anim-naira-1{50%{-webkit-transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@keyframes anim-naira-1{50%{-webkit-transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);transform:translate3d(0,-50%,0) rotate3d(0,0,1,-10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@-webkit-keyframes anim-naira-2{50%{-webkit-transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}@keyframes anim-naira-2{50%{-webkit-transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);transform:translate3d(0,50%,0) rotate3d(0,0,1,10deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg);transform:translate3d(0,0%,0) rotate3d(0,0,1,0deg)}}.button--naira:hover{background-color:#3e245d;-webkit-transition:background-color 0 .3s;transition:background-color 0 .3s}.button--naira.button--inverted:hover{background-color:#7986cb}.button--naira:hover .button__icon{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--naira:hover > span{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.button--naira-up:hover > span{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}.button--quidel{background:#7986cb;color:#7986cb;overflow:hidden;-webkit-transition:color .3s;transition:color .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--quidel.button--inverted{background:#fff;color:#fff}.button--quidel::before,.button--quidel::after{content:'';position:absolute;z-index:-1;border-radius:inherit}.button--quidel::after{top:2px;left:2px;right:2px;bottom:2px;background:#fff}.button--quidel.button--inverted::after{background:#37474f}.button--quidel::before{background:#37474f;top:0;left:0;width:100%;height:100%;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--quidel.button--inverted::before{background:#7986cb}.button--round-s.button--quidel::after{border-radius:3px}.button--round-m.button--quidel::after{border-radius:13px}.button--round-l.button--quidel::after{border-radius:40px}.button--quidel > span{padding-left:.35em}.button--quidel:hover{color:#37474f}.button--quidel.button--inverted:hover{color:#7986cb}.button--quidel:hover::before{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button.button--sacnite{width:70px;height:70px;min-width:0;padding:0;color:#fff;-webkit-transition:color .3s;transition:color .3s}.button--scanite.button--round-l{border-radius:50%}.button--sacnite.button--inverted{color:#37474f}.button--sacnite::before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;border-radius:inherit;z-index:-1;box-shadow:inset 0 0 0 35px #37474f;-webkit-transform:scale3d(0.9,0.9,1);transform:scale3d(0.9,0.9,1);-webkit-transition:box-shadow 0.3s,-webkit-transform .3;transition:box-shadow 0.3s,transform .3s}.button--sacnite.button--inverted::before{box-shadow:inset 0 0 0 35px #fff}.button--sacnite .button__icon{font-size:22px;width:22px}.button--sacnite > span{position:absolute;opacity:0;pointer-events:none}.button--sacnite:hover{color:#37474f}.button--sacnite.button--inverted:hover{color:#fff}.button--sacnite:hover::before{box-shadow:inset 0 0 0 2px #37474f;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}.button--sacnite.button--inverted:hover::before{box-shadow:inset 0 0 0 2px #fff}.button.button--shikoba{padding:1em 30px 1em 50px;overflow:hidden;background:#fff;color:#37474f;border-color:#37474f;-webkit-transition:background-color 0.3s,border-color 0.3s,color .3s;transition:background-color 0.3s,border-color 0.3s,color .3s}.button--shikoba.button--inverted{color:#fff;background:#7986cb}.button--shikoba > span{display:inline-block;-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--shikoba .button__icon{position:absolute;left:20px;font-size:18px;-webkit-transform:translate3d(-40px,2.5em,0);transform:translate3d(-40px,2.5em,0);-webkit-transition:-webkit-transform .3s;transition:transform .3s;-webkit-transition-timing-function:cubic-bezier(0.75,0,0.125,1);transition-timing-function:cubic-bezier(0.75,0,0.125,1)}.button--shikoba:hover .button__icon,.button--shikoba:hover > span{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.button--shikoba:hover{background:#3f51b5;border-color:#3f51b5;color:#fff}#wrap{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%) scale(.5);width:360px;transition:.3s all ease;height:360px;-webkit-filter:url(#filter);filter:url(#filter)}.c,.o,.u,.n,.t{width:50px;height:50px;position:absolute;top:calc(50% - 25px);left:calc(50% - 25px);background:#fff;border-radius:20px;content:'';-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:all .5s cubic-bezier(0.95,0.01,0,1);transition:all .5s cubic-bezier(0.95,0.01,0,1);box-shadow:0 2px 10px rgba(255,255,255,0.5)}.c{-webkit-transition-delay:.05s;transition-delay:.05s}.o{-webkit-transition-delay:.1s;transition-delay:.1s}.u{-webkit-transition-delay:.15s;transition-delay:.15s}.n{-webkit-transition-delay:.2s;transition-delay:.2s}.t{-webkit-transition-delay:.25s;transition-delay:.25s}.wrap-9 .c{width:180px;height:60px;left:90px;top:30px}.wrap-9 .o{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-9 .u{width:150px;height:60px;left:120px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-9 .n{width:180px;height:60px;left:90px;top:150px}.wrap-9 .t{width:60px;height:120px;left:60px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .o{width:60px;height:240px;left:60px;top:60px}.wrap-8 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-8 .n{width:180px;height:60px;left:90px;top:30px}.wrap-8 .t{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-7 .c{width:140px;height:60px;left:190px;top:70px;-webkit-transform:rotate(-65deg);transform:rotate(-65deg)}.wrap-7 .o{width:190px;height:60px;left:100px;top:210px;-webkit-transform:rotate(-65deg);transform:rotate(-65deg)}.wrap-7 .u{width:0;height:0;left:90px;top:270px}.wrap-7 .n{width:0;height:0;left:150px;top:150px}.wrap-7 .t{width:180px;height:60px;left:90px;top:30px}.wrap-6 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .o{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .u{width:60px;height:240px;left:60px;top:60px}.wrap-6 .n{width:60px;height:120px;left:240px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-6 .t{width:180px;height:60px;left:90px;top:30px}.wrap-5 .c{width:210px;height:60px;left:60px;top:30px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .o{width:210px;height:60px;left:60px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .u{width:60px;height:120px;left:240px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-5 .n{width:60px;height:140px;left:60px;top:60px}.wrap-5 .t{width:180px;height:60px;left:90px;top:150px}.wrap-4 .c{width:60px;height:303px;left:210px;top:30px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .o{width:60px;height:60px;left:244px;top:211px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .u{width:60px;height:81px;left:60px;top:180px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-4 .n{width:60px;height:208px;left:110px;top:9px;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.wrap-4 .t{width:210px;height:60px;left:57px;top:210px}.wrap-3 .c{width:180px;height:60px;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .o{width:60px;height:110px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-3 .n{width:180px;height:60px;left:90px;top:30px}.wrap-3 .t{width:60px;height:110px;left:240px;top:190px;-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}.wrap-2 .c{width:180px;height:60px;left:90px;top:30px}.wrap-2 .o{width:60px;height:130px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-2 .u{width:210px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-2 .n{width:180px;height:60px;left:90px;top:150px}.wrap-2 .t{width:60px;height:160px;left:60px;top:170px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .c{width:160px;height:60px;left:101px;top:57px;-webkit-transform:rotate(-36deg);transform:rotate(-36deg)}.wrap-1 .o{width:0;height:0;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .u{width:0;height:0;left:90px;top:270px}.wrap-1 .n{width:60px;height:140px;left:193px;top:50px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-1 .t{width:60px;height:160px;left:193px;top:174px;-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}.wrap-0 .c{width:0;height:0;left:90px;top:150px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-0 .o{width:60px;height:240px;left:60px;top:60px}.wrap-0 .u{width:180px;height:60px;left:90px;top:270px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.wrap-0 .n{width:180px;height:60px;left:90px;top:30px}.wrap-0 .t{width:60px;height:240px;left:240px;top:60px;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.redirectSection.redirected #wrap{transform:translate(-50%,-62%) scale(.5)}@-webkit-keyframes download{0%{transform:translate(0px,100px)}}.redirectSection > a{animation:download .3s alternate ease;position:absolute;bottom:76px;perspective:1000px;right:50%;margin-right:-125px;width:250px;text-align:center;height:66px;border-radius:34px;background:#b30a0a}.redirectSection{height:400px;position:relative}.notes{text-align:center;position:absolute;bottom:0;right:0;width:100%;z-index:10}.notes p:last-child{font-size:21px;color:#ffea7b;margin-bottom:0}.notes p{font-weight:700;font-size:16px;margin:0;color:#ddd;margin-bottom:4px}.categorySection .button:Hover{background:#444e9a}.categorySection .button{min-width:150px;max-width:250px;display:block;box-shadow:0 2px 7px rgba(0,0,0,0.35);margin:0 auto 15px;font-size:20px;padding:.6em 2em;border:2px solid rgba(255,255,255,0.08);background:#2d3368;color:inherit;vertical-align:middle;position:relative;z-index:1;-webkit-backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.searchButton{float:left;width:50px;height:50px;display:none;color:#fff;margin-top:8px;background:#8c2463;border-radius:4px;box-shadow:0 1px 3px rgba(0,0,0,0.47);text-align:center;cursor:pointer;font-size:21px;padding-top:13px}.searchForm form{width:1200px;margin:0 auto}.searchForm input{float:right;width:270px;height:37px;border:0;padding:0 10px;font-family:Font}.searchForm button{float:left;border:0;width:95px;height:37px;font-family:Font;background:#8c2463;font-weight:700;font-size:16px;color:#fff;box-shadow:0 1px 1px rgba(0,0,0,0.33)}.searchForm.active{transform:translate(0px)}.searchForm{z-index:100;width:100%;padding:6px 0;height:50px;background:#311c4a;border-bottom:2px solid #3e245d;box-shadow:0 1px 2px rgba(0,0,0,0.45);transition:.3s all ease}.copyrights{background:rgba(0,0,0,0.22);padding:15px 20px;text-align:center}footer .bot > div{margin-left:10px;text-align:right}footer .bot > div:nth-child(4){margin-left:0}footer .bot > div > h2{display:block;font-weight:700;margin-bottom:5px;color:#fff;box-shadow:0 1px 5px rgba(0,0,0,0.32);background:rgba(0,0,0,0.26);padding:10px 13px 8px;font-size:19px}footer .bot > div ul > li:hover a{color:#ffea7b}footer .bot > div ul > li{font-size:16px;font-weight:700;padding:10px;border-bottom:1px solid rgba(255,255,255,0.06);transition:.3s all ease}footer .bot > div ul > li a{color:#fff;transition:.3s all ease}footer .bot > div ul > li a:before{font-family:FontAwesome;content:"\f104";display:block;float:right;margin-left:10px;font-size:21px}footer .bot > div li:last-child{border-bottom:0}footer .bot{padding:0 0 10px;text-align:center}ul.top-social{display:inline-block;margin-top:0}.top-social li.youtube{background:#b00}.top-social li.facebook{background:#3b5998}.top-social li.twitter{background:#55acee}.top-social li.googleplus{background:#dd4b39}ul.top-social > li i{color:#fff}ul.top-social > li{display:inline-block;width:40px;height:40px;border-radius:5px;background:#565656;text-align:center;font-size:19px;padding-top:10px}.ratioMaster{height:30px;position:relative;margin-bottom:0;background:#313870}.ratioBottom{opacity:.1;height:25px;background-image:url(http://cima4u.tv/wp-content/themes/YourColor/img/bgTitleV.png);background-repeat:repeat-x;background-position:0 5px}.ratioMasterHeader{height:30px;position:absolute;margin-bottom:0;background:#321c4c;top:100%;right:0;z-index:-1;width:100%;display:none}.ratioBottomHeader{opacity:.1;height:25px;background-image:url(http://cima4u.tv/wp-content/themes/YourColor/img/bgTitleV.png);background-repeat:repeat-x;background-position:0 5px}.l2,.l1,.l3{width:100%;height:90%;opacity:.15;position:absolute;left:0}.rencersBanner.active .l3 div,.rencersBanner.active .l2 div,.rencersBanner.active .l1 div{-webkit-animation:drop 2s forwards ease-out;animation:drop 2s forwards ease-out}.l3 div,.l2 div,.l1 div{border-radius:0 0 15px 15px;width:2.5%;min-height:30px;float:left;-webkit-transform:translateY(-100%);transform:translateY(-100%)}@-webkit-keyframes drop{from{-webkit-transform:translateY(-100%);transform:translateY(-100%)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes drop{from{-webkit-transform:translateY(-100%);transform:translateY(-100%)}to{-webkit-transform:translateY(0);transform:translateY(0)}}.l1 div{background:linear-gradient(to left,#3f255f,#4f2f75,#3f255f);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l1 div:nth-child(1){height:27%;-webkit-animation-delay:.6s;animation-delay:.6s}.l1 div:nth-child(2){height:65%;-webkit-animation-delay:.23s;animation-delay:.23s}.l1 div:nth-child(3){height:20%;-webkit-animation-delay:.49s;animation-delay:.49s}.l1 div:nth-child(4){height:4%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(5){height:88%;-webkit-animation-delay:.08s;animation-delay:.08s}.l1 div:nth-child(6){height:84%;-webkit-animation-delay:.18s;animation-delay:.18s}.l1 div:nth-child(7){height:88%;-webkit-animation-delay:.2s;animation-delay:.2s}.l1 div:nth-child(8){height:50%;-webkit-animation-delay:.44s;animation-delay:.44s}.l1 div:nth-child(9){height:24%;-webkit-animation-delay:.37s;animation-delay:.37s}.l1 div:nth-child(10){height:33%;-webkit-animation-delay:.18s;animation-delay:.18s}.l1 div:nth-child(11){height:36%;-webkit-animation-delay:.59s;animation-delay:.59s}.l1 div:nth-child(12){height:93%;-webkit-animation-delay:.38s;animation-delay:.38s}.l1 div:nth-child(13){height:91%;-webkit-animation-delay:.26s;animation-delay:.26s}.l1 div:nth-child(14){height:44%;-webkit-animation-delay:.44s;animation-delay:.44s}.l1 div:nth-child(15){height:90%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(16){height:11%;-webkit-animation-delay:.24s;animation-delay:.24s}.l1 div:nth-child(17){height:23%;-webkit-animation-delay:.5s;animation-delay:.5s}.l1 div:nth-child(18){height:64%;-webkit-animation-delay:.3s;animation-delay:.3s}.l1 div:nth-child(19){height:57%;-webkit-animation-delay:.45s;animation-delay:.45s}.l1 div:nth-child(20){height:71%;-webkit-animation-delay:.36s;animation-delay:.36s}.l1 div:nth-child(21){height:4%;-webkit-animation-delay:.54s;animation-delay:.54s}.l1 div:nth-child(22){height:73%;-webkit-animation-delay:.4s;animation-delay:.4s}.l1 div:nth-child(23){height:55%;-webkit-animation-delay:.34s;animation-delay:.34s}.l1 div:nth-child(24){height:34%;-webkit-animation-delay:.17s;animation-delay:.17s}.l1 div:nth-child(25){height:2%;-webkit-animation-delay:.01s;animation-delay:.01s}.l1 div:nth-child(26){height:55%;-webkit-animation-delay:.43s;animation-delay:.43s}.l1 div:nth-child(27){height:20%;-webkit-animation-delay:.04s;animation-delay:.04s}.l1 div:nth-child(28){height:72%;-webkit-animation-delay:.56s;animation-delay:.56s}.l1 div:nth-child(29){height:36%;-webkit-animation-delay:.31s;animation-delay:.31s}.l1 div:nth-child(30){height:60%;-webkit-animation-delay:.05s;animation-delay:.05s}.l1 div:nth-child(31){height:46%;-webkit-animation-delay:.13s;animation-delay:.13s}.l1 div:nth-child(32){height:21%;-webkit-animation-delay:.27s;animation-delay:.27s}.l1 div:nth-child(33){height:43%;-webkit-animation-delay:.59s;animation-delay:.59s}.l1 div:nth-child(34){height:61%;-webkit-animation-delay:.52s;animation-delay:.52s}.l1 div:nth-child(35){height:20%;-webkit-animation-delay:.38s;animation-delay:.38s}.l1 div:nth-child(36){height:23%;-webkit-animation-delay:.3s;animation-delay:.3s}.l1 div:nth-child(37){height:74%;-webkit-animation-delay:.53s;animation-delay:.53s}.l1 div:nth-child(38){height:57%;-webkit-animation-delay:.25s;animation-delay:.25s}.l1 div:nth-child(39){height:38%;-webkit-animation-delay:.39s;animation-delay:.39s}.l1 div:nth-child(40){height:100%;-webkit-animation-delay:.24s;animation-delay:.24s}.l2 div{background:linear-gradient(to left,#771f54,#86235e,#771f54);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l2 div:nth-child(1){height:12%;-webkit-animation-delay:.75s;animation-delay:.75s}.l2 div:nth-child(2){height:12%;-webkit-animation-delay:.1s;animation-delay:.1s}.l2 div:nth-child(3){height:58%;-webkit-animation-delay:.1s;animation-delay:.1s}.l2 div:nth-child(4){height:19%;-webkit-animation-delay:.66s;animation-delay:.66s}.l2 div:nth-child(5){height:5%;-webkit-animation-delay:.33s;animation-delay:.33s}.l2 div:nth-child(6){height:64%;-webkit-animation-delay:.11s;animation-delay:.11s}.l2 div:nth-child(7){height:12%;-webkit-animation-delay:.22s;animation-delay:.22s}.l2 div:nth-child(8){height:55%;-webkit-animation-delay:.07s;animation-delay:.07s}.l2 div:nth-child(9){height:10%;-webkit-animation-delay:.46s;animation-delay:.46s}.l2 div:nth-child(10){height:72%;-webkit-animation-delay:.7s;animation-delay:.7s}.l2 div:nth-child(11){height:69%;-webkit-animation-delay:.59s;animation-delay:.59s}.l2 div:nth-child(12){height:4%;-webkit-animation-delay:.54s;animation-delay:.54s}.l2 div:nth-child(13){height:63%;-webkit-animation-delay:.11s;animation-delay:.11s}.l2 div:nth-child(14){height:29%;-webkit-animation-delay:.39s;animation-delay:.39s}.l2 div:nth-child(15){height:66%;-webkit-animation-delay:.4s;animation-delay:.4s}.l2 div:nth-child(16){height:36%;-webkit-animation-delay:.75s;animation-delay:.75s}.l2 div:nth-child(17){height:67%;-webkit-animation-delay:.23s;animation-delay:.23s}.l2 div:nth-child(18){height:63%;-webkit-animation-delay:.28s;animation-delay:.28s}.l2 div:nth-child(19){height:40%;-webkit-animation-delay:.62s;animation-delay:.62s}.l2 div:nth-child(20){height:56%;-webkit-animation-delay:.16s;animation-delay:.16s}.l2 div:nth-child(21){height:39%;-webkit-animation-delay:.73s;animation-delay:.73s}.l2 div:nth-child(22){height:13%;-webkit-animation-delay:.67s;animation-delay:.67s}.l2 div:nth-child(23){height:59%;-webkit-animation-delay:.05s;animation-delay:.05s}.l2 div:nth-child(24){height:16%;-webkit-animation-delay:.17s;animation-delay:.17s}.l2 div:nth-child(25){height:76%;-webkit-animation-delay:.57s;animation-delay:.57s}.l2 div:nth-child(26){height:36%;-webkit-animation-delay:.64s;animation-delay:.64s}.l2 div:nth-child(27){height:59%;-webkit-animation-delay:.44s;animation-delay:.44s}.l2 div:nth-child(28){height:39%;-webkit-animation-delay:.06s;animation-delay:.06s}.l2 div:nth-child(29){height:54%;-webkit-animation-delay:.53s;animation-delay:.53s}.l2 div:nth-child(30){height:78%;-webkit-animation-delay:.17s;animation-delay:.17s}.l2 div:nth-child(31){height:15%;-webkit-animation-delay:.4s;animation-delay:.4s}.l2 div:nth-child(32){height:17%;-webkit-animation-delay:.45s;animation-delay:.45s}.l2 div:nth-child(33){height:66%;-webkit-animation-delay:.56s;animation-delay:.56s}.l2 div:nth-child(34){height:64%;-webkit-animation-delay:.57s;animation-delay:.57s}.l2 div:nth-child(35){height:24%;-webkit-animation-delay:.2s;animation-delay:.2s}.l2 div:nth-child(36){height:62%;-webkit-animation-delay:.05s;animation-delay:.05s}.l2 div:nth-child(37){height:18%;-webkit-animation-delay:.49s;animation-delay:.49s}.l2 div:nth-child(38){height:10%;-webkit-animation-delay:.06s;animation-delay:.06s}.l2 div:nth-child(39){height:14%;-webkit-animation-delay:.64s;animation-delay:.64s}.l2 div:nth-child(40){height:31%;-webkit-animation-delay:.12s;animation-delay:.12s}.l3 div{background:linear-gradient(to left,#8c2463,#9a2a6e,#8c2463);box-shadow:0 1px 10px rgba(0,0,0,0.24);border-bottom:5px solid rgba(255,255,255,0.02)}.l3 div:nth-child(1){height:49%;-webkit-animation-delay:.51s;animation-delay:.51s}.l3 div:nth-child(2){height:56%;-webkit-animation-delay:.74s;animation-delay:.74s}.l3 div:nth-child(3){height:39%;-webkit-animation-delay:.25s;animation-delay:.25s}.l3 div:nth-child(4){height:50%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(5){height:5%;-webkit-animation-delay:.3s;animation-delay:.3s}.l3 div:nth-child(6){height:14%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(7){height:13%;-webkit-animation-delay:.78s;animation-delay:.78s}.l3 div:nth-child(8){height:28%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(9){height:25%;-webkit-animation-delay:.4s;animation-delay:.4s}.l3 div:nth-child(10){height:56%;-webkit-animation-delay:.05s;animation-delay:.05s}.l3 div:nth-child(11){height:44%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(12){height:36%;-webkit-animation-delay:.47s;animation-delay:.47s}.l3 div:nth-child(13){height:9%;-webkit-animation-delay:.48s;animation-delay:.48s}.l3 div:nth-child(14){height:39%;-webkit-animation-delay:.09s;animation-delay:.09s}.l3 div:nth-child(15){height:31%;-webkit-animation-delay:.16s;animation-delay:.16s}.l3 div:nth-child(16){height:37%;-webkit-animation-delay:.92s;animation-delay:.92s}.l3 div:nth-child(17){height:38%;-webkit-animation-delay:.31s;animation-delay:.31s}.l3 div:nth-child(18){height:23%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(19){height:24%;-webkit-animation-delay:.45s;animation-delay:.45s}.l3 div:nth-child(20){height:44%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(21){height:1%;-webkit-animation-delay:.79s;animation-delay:.79s}.l3 div:nth-child(22){height:46%;-webkit-animation-delay:.98s;animation-delay:.98s}.l3 div:nth-child(23){height:12%;-webkit-animation-delay:.84s;animation-delay:.84s}.l3 div:nth-child(24){height:47%;-webkit-animation-delay:.31s;animation-delay:.31s}.l3 div:nth-child(25){height:33%;-webkit-animation-delay:.5s;animation-delay:.5s}.l3 div:nth-child(26){height:56%;-webkit-animation-delay:.9s;animation-delay:.9s}.l3 div:nth-child(27){height:26%;-webkit-animation-delay:.11s;animation-delay:.11s}.l3 div:nth-child(28){height:37%;-webkit-animation-delay:.23s;animation-delay:.23s}.l3 div:nth-child(29){height:52%;-webkit-animation-delay:.13s;animation-delay:.13s}.l3 div:nth-child(30){height:7%;-webkit-animation-delay:.64s;animation-delay:.64s}.l3 div:nth-child(31){height:23%;-webkit-animation-delay:.13s;animation-delay:.13s}.l3 div:nth-child(32){height:10%;-webkit-animation-delay:.95s;animation-delay:.95s}.l3 div:nth-child(33){height:54%;-webkit-animation-delay:.24s;animation-delay:.24s}.l3 div:nth-child(34){height:5%;-webkit-animation-delay:.86s;animation-delay:.86s}.l3 div:nth-child(35){height:28%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(36){height:28%;-webkit-animation-delay:.65s;animation-delay:.65s}.l3 div:nth-child(37){height:56%;-webkit-animation-delay:.72s;animation-delay:.72s}.l3 div:nth-child(38){height:37%;-webkit-animation-delay:.18s;animation-delay:.18s}.l3 div:nth-child(39){height:26%;-webkit-animation-delay:.48s;animation-delay:.48s}.l3 div:nth-child(40){height:53%;-webkit-animation-delay:.79s;animation-delay:.79s}.rencersBanner.active .cima4uLogo > span{transform:translate(0)}.cima4uLogo > span{transition:.15s all ease;display:inline-block}.cima4uLogo > span.let1{transform:translate(0px,-200px);transition:.15s .2s all ease}.cima4uLogo > span.let2{transform:translate(0px,200px);transition:.15s .3s all ease}.cima4uLogo > span.let3{transform:translate(0px,-200px);transition:.15s .4s all ease}.cima4uLogo > span.let4{transform:translate(0px,200px);transition:.15s .5s all ease}.cima4uLogo > span.let5{transform:translate(0px,-200px);transition:.15s .6s all ease}.cima4uLogo > span.let6{transition:.15s .7s all ease;transform:translate(0px,200px)}.rencersBanner.active .cima4uLogo{transform:translate(0px,16px)}.cima4uLogo{transition:.5s 1.3s all ease;position:absolute;font-size:90px;transform:translate(0,-30px);font-weight:700;width:100%;top:0;right:0;text-align:center;direction:ltr;line-height:285px;font-family:Fredoka One;letter-spacing:-9px;text-shadow:2px 2px 8px rgba(0,0,0,0.53)}.rencersBanner.active span.pointCima4u{transform:translate(0px,0)}span.pointCima4u{transition:.5s 1.25s all ease;width:40px;height:40px;border-radius:15px;position:absolute;transform:translate(0px,-180px);top:50%;margin-top:-60px;color:#8c2463;margin-right:85px;right:50%;background:#fff;font-size:24px;text-align:center;padding:6px 0;padding-left:6px}.rencersBanner.active .cinema4all{transform:translate(0)}.cinema4all{position:absolute;transition:.3s 1.5s all ease;font-family:Reem Kufi;transform:translate(0px,-120px);top:70px;text-shadow:2px 2px 5px rgba(0,0,0,0.66);right:50%;margin-right:-189px;font-size:40px;color:#ffec88}.rencersBanner.active .watchAnddownload{transform:translate(0)}.watchAnddownload{position:absolute;font-weight:700;transition:.3s 1.7s all ease;text-shadow:2px 2px 5px rgba(0,0,0,0.35);transform:translate(0px,120px);bottom:45px;right:50%;margin-right:-193px;color:#ddd;width:370px;text-align:center;font-size:20px}footer .bgMovieSection{position:absolute;top:0;right:0;z-index:-1;-webkit-filter:blur(20px);width:100%;height:100%;background-size:cover;background-position:center;opacity:.3}div[style="height:70px;"]{display:none}
}
	
	/*!
 *  Font Awesome 4.3.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.eot?v=4.3.0');
  src: url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0') format('embedded-opentype'), url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.woff2?v=4.3.0') format('woff2'), url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.woff?v=4.3.0') format('woff'), url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.ttf?v=4.3.0') format('truetype'), url('http://cima4u.tv/wp-content/themes/YourColor/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0);
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";

}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}

.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-genderless:before,
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}

	</style>

<script type="text/javascript">

	/*! jQuery v2.1.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k={},l=a.document,m="2.1.1",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(a=arguments[h]))for(b in a)c=g[b],d=a[b],g!==d&&(j&&d&&(n.isPlainObject(d)||(e=n.isArray(d)))?(e?(e=!1,f=c&&n.isArray(c)?c:[]):f=c&&n.isPlainObject(c)?c:{},g[b]=n.extend(j,f,d)):void 0!==d&&(g[b]=d));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray,isWindow:function(a){return null!=a&&a===a.window},isNumeric:function(a){return!n.isArray(a)&&a-parseFloat(a)>=0},isPlainObject:function(a){return"object"!==n.type(a)||a.nodeType||n.isWindow(a)?!1:a.constructor&&!j.call(a.constructor.prototype,"isPrototypeOf")?!1:!0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(a){var b,c=eval;a=n.trim(a),a&&(1===a.indexOf("use strict")?(b=l.createElement("script"),b.text=a,l.head.appendChild(b).parentNode.removeChild(b)):c(a))},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){return null==b?-1:g.call(b,a,c)},merge:function(a,b){for(var c=+b.length,d=0,e=a.length;c>d;d++)a[e++]=b[d];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(c=a[b],b=a,a=c),n.isFunction(a)?(e=d.call(arguments,2),f=function(){return a.apply(b||this,e.concat(d.call(arguments)))},f.guid=a.guid=a.guid||n.guid++,f):void 0},now:Date.now,support:k}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+-new Date,v=a.document,w=0,x=0,y=gb(),z=gb(),A=gb(),B=function(a,b){return a===b&&(l=!0),0},C="undefined",D=1<<31,E={}.hasOwnProperty,F=[],G=F.pop,H=F.push,I=F.push,J=F.slice,K=F.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},L="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",N="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",O=N.replace("w","w#"),P="\\["+M+"*("+N+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+O+"))|)"+M+"*\\]",Q=":("+N+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+P+")*)|.*)\\)|)",R=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),S=new RegExp("^"+M+"*,"+M+"*"),T=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),V=new RegExp(Q),W=new RegExp("^"+O+"$"),X={ID:new RegExp("^#("+N+")"),CLASS:new RegExp("^\\.("+N+")"),TAG:new RegExp("^("+N.replace("w","w*")+")"),ATTR:new RegExp("^"+P),PSEUDO:new RegExp("^"+Q),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+L+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,Z=/^h\d$/i,$=/^[^{]+\{\s*\[native \w/,_=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ab=/[+~]/,bb=/'|\\/g,cb=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),db=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{I.apply(F=J.call(v.childNodes),v.childNodes),F[v.childNodes.length].nodeType}catch(eb){I={apply:F.length?function(a,b){H.apply(a,J.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fb(a,b,d,e){var f,h,j,k,l,o,r,s,w,x;if((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,d=d||[],!a||"string"!=typeof a)return d;if(1!==(k=b.nodeType)&&9!==k)return[];if(p&&!e){if(f=_.exec(a))if(j=f[1]){if(9===k){if(h=b.getElementById(j),!h||!h.parentNode)return d;if(h.id===j)return d.push(h),d}else if(b.ownerDocument&&(h=b.ownerDocument.getElementById(j))&&t(b,h)&&h.id===j)return d.push(h),d}else{if(f[2])return I.apply(d,b.getElementsByTagName(a)),d;if((j=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return I.apply(d,b.getElementsByClassName(j)),d}if(c.qsa&&(!q||!q.test(a))){if(s=r=u,w=b,x=9===k&&a,1===k&&"object"!==b.nodeName.toLowerCase()){o=g(a),(r=b.getAttribute("id"))?s=r.replace(bb,"\\$&"):b.setAttribute("id",s),s="[id='"+s+"'] ",l=o.length;while(l--)o[l]=s+qb(o[l]);w=ab.test(a)&&ob(b.parentNode)||b,x=o.join(",")}if(x)try{return I.apply(d,w.querySelectorAll(x)),d}catch(y){}finally{r||b.removeAttribute("id")}}}return i(a.replace(R,"$1"),b,d,e)}function gb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function hb(a){return a[u]=!0,a}function ib(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function jb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function kb(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||D)-(~a.sourceIndex||D);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function lb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function mb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function nb(a){return hb(function(b){return b=+b,hb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function ob(a){return a&&typeof a.getElementsByTagName!==C&&a}c=fb.support={},f=fb.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fb.setDocument=function(a){var b,e=a?a.ownerDocument||a:v,g=e.defaultView;return e!==n&&9===e.nodeType&&e.documentElement?(n=e,o=e.documentElement,p=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){m()},!1):g.attachEvent&&g.attachEvent("onunload",function(){m()})),c.attributes=ib(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ib(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=$.test(e.getElementsByClassName)&&ib(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=ib(function(a){return o.appendChild(a).id=u,!e.getElementsByName||!e.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==C&&p){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){var c=typeof a.getAttributeNode!==C&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==C?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==C&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=$.test(e.querySelectorAll))&&(ib(function(a){a.innerHTML="<select msallowclip=''><option selected=''></option></select>",a.querySelectorAll("[msallowclip^='']").length&&q.push("[*^$]="+M+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+M+"*(?:value|"+L+")"),a.querySelectorAll(":checked").length||q.push(":checked")}),ib(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+M+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=$.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ib(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",Q)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=$.test(o.compareDocumentPosition),t=b||$.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===v&&t(v,a)?-1:b===e||b.ownerDocument===v&&t(v,b)?1:k?K.call(k,a)-K.call(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],i=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:k?K.call(k,a)-K.call(k,b):0;if(f===g)return kb(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)i.unshift(c);while(h[d]===i[d])d++;return d?kb(h[d],i[d]):h[d]===v?-1:i[d]===v?1:0},e):n},fb.matches=function(a,b){return fb(a,null,null,b)},fb.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(U,"='$1']"),!(!c.matchesSelector||!p||r&&r.test(b)||q&&q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fb(b,n,null,[a]).length>0},fb.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fb.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&E.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fb.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fb.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fb.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fb.selectors={cacheLength:50,createPseudo:hb,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(cb,db),a[3]=(a[3]||a[4]||a[5]||"").replace(cb,db),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fb.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fb.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return X.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&V.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(cb,db).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+M+")"+a+"("+M+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==C&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fb.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){k=q[u]||(q[u]={}),j=k[a]||[],n=j[0]===w&&j[1],m=j[0]===w&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[w,n,m];break}}else if(s&&(j=(b[u]||(b[u]={}))[a])&&j[0]===w)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(s&&((l[u]||(l[u]={}))[a]=[w,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fb.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?hb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=K.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:hb(function(a){var b=[],c=[],d=h(a.replace(R,"$1"));return d[u]?hb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:hb(function(a){return function(b){return fb(a,b).length>0}}),contains:hb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:hb(function(a){return W.test(a||"")||fb.error("unsupported lang: "+a),a=a.replace(cb,db).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Z.test(a.nodeName)},input:function(a){return Y.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:nb(function(){return[0]}),last:nb(function(a,b){return[b-1]}),eq:nb(function(a,b,c){return[0>c?c+b:c]}),even:nb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:nb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:nb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:nb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=lb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=mb(b);function pb(){}pb.prototype=d.filters=d.pseudos,d.setFilters=new pb,g=fb.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=S.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=T.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(R," ")}),h=h.slice(c.length));for(g in d.filter)!(e=X[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fb.error(a):z(a,i).slice(0)};function qb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function rb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[u]||(b[u]={}),(h=i[d])&&h[0]===w&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function sb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function tb(a,b,c){for(var d=0,e=b.length;e>d;d++)fb(a,b[d],c);return c}function ub(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function vb(a,b,c,d,e,f){return d&&!d[u]&&(d=vb(d)),e&&!e[u]&&(e=vb(e,f)),hb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||tb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ub(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ub(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?K.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ub(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):I.apply(g,r)})}function wb(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=rb(function(a){return a===b},h,!0),l=rb(function(a){return K.call(b,a)>-1},h,!0),m=[function(a,c,d){return!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>i;i++)if(c=d.relative[a[i].type])m=[rb(sb(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return vb(i>1&&sb(m),i>1&&qb(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(R,"$1"),c,e>i&&wb(a.slice(i,e)),f>e&&wb(a=a.slice(e)),f>e&&qb(a))}m.push(c)}return sb(m)}function xb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,m,o,p=0,q="0",r=f&&[],s=[],t=j,u=f||e&&d.find.TAG("*",k),v=w+=null==t?1:Math.random()||.1,x=u.length;for(k&&(j=g!==n&&g);q!==x&&null!=(l=u[q]);q++){if(e&&l){m=0;while(o=a[m++])if(o(l,g,h)){i.push(l);break}k&&(w=v)}c&&((l=!o&&l)&&p--,f&&r.push(l))}if(p+=q,c&&q!==p){m=0;while(o=b[m++])o(r,s,g,h);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=G.call(i));s=ub(s)}I.apply(i,s),k&&!f&&s.length>0&&p+b.length>1&&fb.uniqueSort(i)}return k&&(w=v,j=t),r};return c?hb(f):f}return h=fb.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wb(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xb(e,d)),f.selector=a}return f},i=fb.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(cb,db),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=X.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(cb,db),ab.test(j[0].type)&&ob(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qb(j),!a)return I.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,ab.test(a)&&ob(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ib(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ib(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||jb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ib(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||jb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ib(function(a){return null==a.getAttribute("disabled")})||jb(L,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fb}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return g.call(b,a)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=this.length,d=[],e=this;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;c>b;b++)if(n.contains(e[b],this))return!0}));for(b=0;c>b;b++)n.find(a,e[b],d);return d=this.pushStack(c>1?n.unique(d):d),d.selector=this.selector?this.selector+" "+a:a,d},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,A=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a[0]&&">"===a[a.length-1]&&a.length>=3?[null,a,null]:z.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:l,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}return d=l.getElementById(c[2]),d&&d.parentNode&&(this.length=1,this[0]=d),this.context=l,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};A.prototype=n.fn,y=n(l);var B=/^(?:parents|prev(?:Until|All))/,C={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b=n(a,this),c=b.length;return this.filter(function(){for(var a=0;c>a;a++)if(n.contains(this,b[a]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?g.call(n(a),this[0]):g.call(this,a.jquery?a[0]:a):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function D(a,b){while((a=a[b])&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return D(a,"nextSibling")},prev:function(a){return D(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return a.contentDocument||n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(C[a]||n.unique(e),B.test(a)&&e.reverse()),this.pushStack(e)}});var E=/\S+/g,F={};function G(a){var b=F[a]={};return n.each(a.match(E)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?F[a]||G(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(b=a.memory&&l,c=!0,g=e||0,e=0,f=h.length,d=!0;h&&f>g;g++)if(h[g].apply(l[0],l[1])===!1&&a.stopOnFalse){b=!1;break}d=!1,h&&(i?i.length&&j(i.shift()):b?h=[]:k.disable())},k={add:function(){if(h){var c=h.length;!function g(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&g(c)})}(arguments),d?f=h.length:b&&(e=c,j(b))}return this},remove:function(){return h&&n.each(arguments,function(a,b){var c;while((c=n.inArray(b,h,c))>-1)h.splice(c,1),d&&(f>=c&&f--,g>=c&&g--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],f=0,this},disable:function(){return h=i=b=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,b||k.disable(),this},locked:function(){return!i},fireWith:function(a,b){return!h||c&&!i||(b=b||[],b=[a,b.slice?b.slice():b],d?i.push(b):j(b)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!c}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var H;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(H.resolveWith(l,[n]),n.fn.triggerHandler&&(n(l).triggerHandler("ready"),n(l).off("ready"))))}});function I(){l.removeEventListener("DOMContentLoaded",I,!1),a.removeEventListener("load",I,!1),n.ready()}n.ready.promise=function(b){return H||(H=n.Deferred(),"complete"===l.readyState?setTimeout(n.ready):(l.addEventListener("DOMContentLoaded",I,!1),a.addEventListener("load",I,!1))),H.promise(b)},n.ready.promise();var J=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f};n.acceptData=function(a){return 1===a.nodeType||9===a.nodeType||!+a.nodeType};function K(){Object.defineProperty(this.cache={},0,{get:function(){return{}}}),this.expando=n.expando+Math.random()}K.uid=1,K.accepts=n.acceptData,K.prototype={key:function(a){if(!K.accepts(a))return 0;var b={},c=a[this.expando];if(!c){c=K.uid++;try{b[this.expando]={value:c},Object.defineProperties(a,b)}catch(d){b[this.expando]=c,n.extend(a,b)}}return this.cache[c]||(this.cache[c]={}),c},set:function(a,b,c){var d,e=this.key(a),f=this.cache[e];if("string"==typeof b)f[b]=c;else if(n.isEmptyObject(f))n.extend(this.cache[e],b);else for(d in b)f[d]=b[d];return f},get:function(a,b){var c=this.cache[this.key(a)];return void 0===b?c:c[b]},access:function(a,b,c){var d;return void 0===b||b&&"string"==typeof b&&void 0===c?(d=this.get(a,b),void 0!==d?d:this.get(a,n.camelCase(b))):(this.set(a,b,c),void 0!==c?c:b)},remove:function(a,b){var c,d,e,f=this.key(a),g=this.cache[f];if(void 0===b)this.cache[f]={};else{n.isArray(b)?d=b.concat(b.map(n.camelCase)):(e=n.camelCase(b),b in g?d=[b,e]:(d=e,d=d in g?[d]:d.match(E)||[])),c=d.length;while(c--)delete g[d[c]]}},hasData:function(a){return!n.isEmptyObject(this.cache[a[this.expando]]||{})},discard:function(a){a[this.expando]&&delete this.cache[a[this.expando]]}};var L=new K,M=new K,N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){var d;if(void 0===c&&1===a.nodeType)if(d="data-"+b.replace(O,"-$1").toLowerCase(),c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}M.set(a,b,c)}else c=void 0;return c}n.extend({hasData:function(a){return M.hasData(a)||L.hasData(a)},data:function(a,b,c){return M.access(a,b,c)},removeData:function(a,b){M.remove(a,b)
},_data:function(a,b,c){return L.access(a,b,c)},_removeData:function(a,b){L.remove(a,b)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=M.get(f),1===f.nodeType&&!L.get(f,"hasDataAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d])));L.set(f,"hasDataAttrs",!0)}return e}return"object"==typeof a?this.each(function(){M.set(this,a)}):J(this,function(b){var c,d=n.camelCase(a);if(f&&void 0===b){if(c=M.get(f,a),void 0!==c)return c;if(c=M.get(f,d),void 0!==c)return c;if(c=P(f,d,void 0),void 0!==c)return c}else this.each(function(){var c=M.get(this,d);M.set(this,d,b),-1!==a.indexOf("-")&&void 0!==c&&M.set(this,a,b)})},null,b,arguments.length>1,null,!0)},removeData:function(a){return this.each(function(){M.remove(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=L.get(a,b),c&&(!d||n.isArray(c)?d=L.access(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return L.get(a,c)||L.access(a,c,{empty:n.Callbacks("once memory").add(function(){L.remove(a,[b+"queue",c])})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=L.get(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var Q=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,R=["Top","Right","Bottom","Left"],S=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},T=/^(?:checkbox|radio)$/i;!function(){var a=l.createDocumentFragment(),b=a.appendChild(l.createElement("div")),c=l.createElement("input");c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),b.appendChild(c),k.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,b.innerHTML="<textarea>x</textarea>",k.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue}();var U="undefined";k.focusinBubbles="onfocusin"in a;var V=/^key/,W=/^(?:mouse|pointer|contextmenu)|click/,X=/^(?:focusinfocus|focusoutblur)$/,Y=/^([^.]*)(?:\.(.+)|)$/;function Z(){return!0}function $(){return!1}function _(){try{return l.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.get(a);if(r){c.handler&&(f=c,c=f.handler,e=f.selector),c.guid||(c.guid=n.guid++),(i=r.events)||(i=r.events={}),(g=r.handle)||(g=r.handle=function(b){return typeof n!==U&&n.event.triggered!==b.type?n.event.dispatch.apply(a,arguments):void 0}),b=(b||"").match(E)||[""],j=b.length;while(j--)h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o&&(l=n.event.special[o]||{},o=(e?l.delegateType:l.bindType)||o,l=n.event.special[o]||{},k=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},f),(m=i[o])||(m=i[o]=[],m.delegateCount=0,l.setup&&l.setup.call(a,d,p,g)!==!1||a.addEventListener&&a.addEventListener(o,g,!1)),l.add&&(l.add.call(a,k),k.handler.guid||(k.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,k):m.push(k),n.event.global[o]=!0)}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.hasData(a)&&L.get(a);if(r&&(i=r.events)){b=(b||"").match(E)||[""],j=b.length;while(j--)if(h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=i[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),g=f=m.length;while(f--)k=m[f],!e&&q!==k.origType||c&&c.guid!==k.guid||h&&!h.test(k.namespace)||d&&d!==k.selector&&("**"!==d||!k.selector)||(m.splice(f,1),k.selector&&m.delegateCount--,l.remove&&l.remove.call(a,k));g&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete i[o])}else for(o in i)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(i)&&(delete r.handle,L.remove(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,m,o,p=[d||l],q=j.call(b,"type")?b.type:b,r=j.call(b,"namespace")?b.namespace.split("."):[];if(g=h=d=d||l,3!==d.nodeType&&8!==d.nodeType&&!X.test(q+n.event.triggered)&&(q.indexOf(".")>=0&&(r=q.split("."),q=r.shift(),r.sort()),k=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=r.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),o=n.event.special[q]||{},e||!o.trigger||o.trigger.apply(d,c)!==!1)){if(!e&&!o.noBubble&&!n.isWindow(d)){for(i=o.delegateType||q,X.test(i+q)||(g=g.parentNode);g;g=g.parentNode)p.push(g),h=g;h===(d.ownerDocument||l)&&p.push(h.defaultView||h.parentWindow||a)}f=0;while((g=p[f++])&&!b.isPropagationStopped())b.type=f>1?i:o.bindType||q,m=(L.get(g,"events")||{})[b.type]&&L.get(g,"handle"),m&&m.apply(g,c),m=k&&g[k],m&&m.apply&&n.acceptData(g)&&(b.result=m.apply(g,c),b.result===!1&&b.preventDefault());return b.type=q,e||b.isDefaultPrevented()||o._default&&o._default.apply(p.pop(),c)!==!1||!n.acceptData(d)||k&&n.isFunction(d[q])&&!n.isWindow(d)&&(h=d[k],h&&(d[k]=null),n.event.triggered=q,d[q](),n.event.triggered=void 0,h&&(d[k]=h)),b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(L.get(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(g.namespace))&&(a.handleObj=g,a.data=g.data,e=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==e&&(a.result=e)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!==this;i=i.parentNode||this)if(i.disabled!==!0||"click"!==a.type){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>=0:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button;return null==a.pageX&&null!=b.clientX&&(c=a.target.ownerDocument||l,d=c.documentElement,e=c.body,a.pageX=b.clientX+(d&&d.scrollLeft||e&&e.scrollLeft||0)-(d&&d.clientLeft||e&&e.clientLeft||0),a.pageY=b.clientY+(d&&d.scrollTop||e&&e.scrollTop||0)-(d&&d.clientTop||e&&e.clientTop||0)),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=W.test(e)?this.mouseHooks:V.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=l),3===a.target.nodeType&&(a.target=a.target.parentNode),g.filter?g.filter(a,f):a},special:{load:{noBubble:!0},focus:{trigger:function(){return this!==_()&&this.focus?(this.focus(),!1):void 0},delegateType:"focusin"},blur:{trigger:function(){return this===_()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return"checkbox"===this.type&&this.click&&n.nodeName(this,"input")?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?Z:$):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:$,isPropagationStopped:$,isImmediatePropagationStopped:$,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=Z,a&&a.preventDefault&&a.preventDefault()},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=Z,a&&a.stopPropagation&&a.stopPropagation()},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=Z,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),k.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=L.access(d,b);e||d.addEventListener(a,c,!0),L.access(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=L.access(d,b)-1;e?L.access(d,b,e):(d.removeEventListener(a,c,!0),L.remove(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(g in a)this.on(g,b,c,a[g],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=$;else if(!d)return this;return 1===e&&(f=d,d=function(a){return n().off(a),f.apply(this,arguments)},d.guid=f.guid||(f.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=$),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});var ab=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bb=/<([\w:]+)/,cb=/<|&#?\w+;/,db=/<(?:script|style|link)/i,eb=/checked\s*(?:[^=]|=\s*.checked.)/i,fb=/^$|\/(?:java|ecma)script/i,gb=/^true\/(.*)/,hb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,ib={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};ib.optgroup=ib.option,ib.tbody=ib.tfoot=ib.colgroup=ib.caption=ib.thead,ib.th=ib.td;function jb(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function kb(a){return a.type=(null!==a.getAttribute("type"))+"/"+a.type,a}function lb(a){var b=gb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function mb(a,b){for(var c=0,d=a.length;d>c;c++)L.set(a[c],"globalEval",!b||L.get(b[c],"globalEval"))}function nb(a,b){var c,d,e,f,g,h,i,j;if(1===b.nodeType){if(L.hasData(a)&&(f=L.access(a),g=L.set(b,f),j=f.events)){delete g.handle,g.events={};for(e in j)for(c=0,d=j[e].length;d>c;c++)n.event.add(b,e,j[e][c])}M.hasData(a)&&(h=M.access(a),i=n.extend({},h),M.set(b,i))}}function ob(a,b){var c=a.getElementsByTagName?a.getElementsByTagName(b||"*"):a.querySelectorAll?a.querySelectorAll(b||"*"):[];return void 0===b||b&&n.nodeName(a,b)?n.merge([a],c):c}function pb(a,b){var c=b.nodeName.toLowerCase();"input"===c&&T.test(a.type)?b.checked=a.checked:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}n.extend({clone:function(a,b,c){var d,e,f,g,h=a.cloneNode(!0),i=n.contains(a.ownerDocument,a);if(!(k.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(g=ob(h),f=ob(a),d=0,e=f.length;e>d;d++)pb(f[d],g[d]);if(b)if(c)for(f=f||ob(a),g=g||ob(h),d=0,e=f.length;e>d;d++)nb(f[d],g[d]);else nb(a,h);return g=ob(h,"script"),g.length>0&&mb(g,!i&&ob(a,"script")),h},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k=b.createDocumentFragment(),l=[],m=0,o=a.length;o>m;m++)if(e=a[m],e||0===e)if("object"===n.type(e))n.merge(l,e.nodeType?[e]:e);else if(cb.test(e)){f=f||k.appendChild(b.createElement("div")),g=(bb.exec(e)||["",""])[1].toLowerCase(),h=ib[g]||ib._default,f.innerHTML=h[1]+e.replace(ab,"<$1></$2>")+h[2],j=h[0];while(j--)f=f.lastChild;n.merge(l,f.childNodes),f=k.firstChild,f.textContent=""}else l.push(b.createTextNode(e));k.textContent="",m=0;while(e=l[m++])if((!d||-1===n.inArray(e,d))&&(i=n.contains(e.ownerDocument,e),f=ob(k.appendChild(e),"script"),i&&mb(f),c)){j=0;while(e=f[j++])fb.test(e.type||"")&&c.push(e)}return k},cleanData:function(a){for(var b,c,d,e,f=n.event.special,g=0;void 0!==(c=a[g]);g++){if(n.acceptData(c)&&(e=c[L.expando],e&&(b=L.cache[e]))){if(b.events)for(d in b.events)f[d]?n.event.remove(c,d):n.removeEvent(c,d,b.handle);L.cache[e]&&delete L.cache[e]}delete M.cache[c[M.expando]]}}}),n.fn.extend({text:function(a){return J(this,function(a){return void 0===a?n.text(this):this.empty().each(function(){(1===this.nodeType||11===this.nodeType||9===this.nodeType)&&(this.textContent=a)})},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=jb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=jb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(ob(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&mb(ob(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++)1===a.nodeType&&(n.cleanData(ob(a,!1)),a.textContent="");return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return J(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a&&1===b.nodeType)return b.innerHTML;if("string"==typeof a&&!db.test(a)&&!ib[(bb.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(ab,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(ob(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(ob(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,l=this.length,m=this,o=l-1,p=a[0],q=n.isFunction(p);if(q||l>1&&"string"==typeof p&&!k.checkClone&&eb.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(l&&(c=n.buildFragment(a,this[0].ownerDocument,!1,this),d=c.firstChild,1===c.childNodes.length&&(c=d),d)){for(f=n.map(ob(c,"script"),kb),g=f.length;l>j;j++)h=c,j!==o&&(h=n.clone(h,!0,!0),g&&n.merge(f,ob(h,"script"))),b.call(this[j],h,j);if(g)for(i=f[f.length-1].ownerDocument,n.map(f,lb),j=0;g>j;j++)h=f[j],fb.test(h.type||"")&&!L.access(h,"globalEval")&&n.contains(i,h)&&(h.src?n._evalUrl&&n._evalUrl(h.src):n.globalEval(h.textContent.replace(hb,"")))}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=[],e=n(a),g=e.length-1,h=0;g>=h;h++)c=h===g?this:this.clone(!0),n(e[h])[b](c),f.apply(d,c.get());return this.pushStack(d)}});var qb,rb={};function sb(b,c){var d,e=n(c.createElement(b)).appendTo(c.body),f=a.getDefaultComputedStyle&&(d=a.getDefaultComputedStyle(e[0]))?d.display:n.css(e[0],"display");return e.detach(),f}function tb(a){var b=l,c=rb[a];return c||(c=sb(a,b),"none"!==c&&c||(qb=(qb||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=qb[0].contentDocument,b.write(),b.close(),c=sb(a,b),qb.detach()),rb[a]=c),c}var ub=/^margin/,vb=new RegExp("^("+Q+")(?!px)[a-z%]+$","i"),wb=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)};function xb(a,b,c){var d,e,f,g,h=a.style;return c=c||wb(a),c&&(g=c.getPropertyValue(b)||c[b]),c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),vb.test(g)&&ub.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0!==g?g+"":g}function yb(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d=l.documentElement,e=l.createElement("div"),f=l.createElement("div");if(f.style){f.style.backgroundClip="content-box",f.cloneNode(!0).style.backgroundClip="",k.clearCloneStyle="content-box"===f.style.backgroundClip,e.style.cssText="border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute",e.appendChild(f);function g(){f.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute",f.innerHTML="",d.appendChild(e);var g=a.getComputedStyle(f,null);b="1%"!==g.top,c="4px"===g.width,d.removeChild(e)}a.getComputedStyle&&n.extend(k,{pixelPosition:function(){return g(),b},boxSizingReliable:function(){return null==c&&g(),c},reliableMarginRight:function(){var b,c=f.appendChild(l.createElement("div"));return c.style.cssText=f.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",c.style.marginRight=c.style.width="0",f.style.width="1px",d.appendChild(e),b=!parseFloat(a.getComputedStyle(c,null).marginRight),d.removeChild(e),b}})}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var zb=/^(none|table(?!-c[ea]).+)/,Ab=new RegExp("^("+Q+")(.*)$","i"),Bb=new RegExp("^([+-])=("+Q+")","i"),Cb={position:"absolute",visibility:"hidden",display:"block"},Db={letterSpacing:"0",fontWeight:"400"},Eb=["Webkit","O","Moz","ms"];function Fb(a,b){if(b in a)return b;var c=b[0].toUpperCase()+b.slice(1),d=b,e=Eb.length;while(e--)if(b=Eb[e]+c,b in a)return b;return d}function Gb(a,b,c){var d=Ab.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Hb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+R[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+R[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+R[f]+"Width",!0,e))):(g+=n.css(a,"padding"+R[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+R[f]+"Width",!0,e)));return g}function Ib(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=wb(a),g="border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=xb(a,b,f),(0>e||null==e)&&(e=a.style[b]),vb.test(e))return e;d=g&&(k.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Hb(a,b,c||(g?"border":"content"),d,f)+"px"}function Jb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=L.get(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&S(d)&&(f[g]=L.access(d,"olddisplay",tb(d.nodeName)))):(e=S(d),"none"===c&&e||L.set(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=xb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":"cssFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;return b=n.cssProps[h]||(n.cssProps[h]=Fb(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c?g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b]:(f=typeof c,"string"===f&&(e=Bb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),k.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),g&&"set"in g&&void 0===(c=g.set(a,c,d))||(i[b]=c)),void 0)}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Fb(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(e=g.get(a,!0,c)),void 0===e&&(e=xb(a,b,d)),"normal"===e&&b in Db&&(e=Db[b]),""===c||c?(f=parseFloat(e),c===!0||n.isNumeric(f)?f||0:e):e}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?zb.test(n.css(a,"display"))&&0===a.offsetWidth?n.swap(a,Cb,function(){return Ib(a,b,d)}):Ib(a,b,d):void 0},set:function(a,c,d){var e=d&&wb(a);return Gb(a,c,d?Hb(a,b,d,"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),n.cssHooks.marginRight=yb(k.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},xb,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+R[d]+b]=f[d]||f[d-2]||f[0];return e}},ub.test(a)||(n.cssHooks[a+b].set=Gb)}),n.fn.extend({css:function(a,b){return J(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=wb(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return Jb(this,!0)},hide:function(){return Jb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){S(this)?n(this).show():n(this).hide()})}});function Kb(a,b,c,d,e){return new Kb.prototype.init(a,b,c,d,e)}n.Tween=Kb,Kb.prototype={constructor:Kb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=Kb.propHooks[this.prop];return a&&a.get?a.get(this):Kb.propHooks._default.get(this)},run:function(a){var b,c=Kb.propHooks[this.prop];return this.pos=b=this.options.duration?n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Kb.propHooks._default.set(this),this}},Kb.prototype.init.prototype=Kb.prototype,Kb.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},Kb.propHooks.scrollTop=Kb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=Kb.prototype.init,n.fx.step={};var Lb,Mb,Nb=/^(?:toggle|show|hide)$/,Ob=new RegExp("^(?:([+-])=|)("+Q+")([a-z%]*)$","i"),Pb=/queueHooks$/,Qb=[Vb],Rb={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=Ob.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&Ob.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function Sb(){return setTimeout(function(){Lb=void 0}),Lb=n.now()}function Tb(a,b){var c,d=0,e={height:a};for(b=b?1:0;4>d;d+=2-b)c=R[d],e["margin"+c]=e["padding"+c]=a;return b&&(e.opacity=e.width=a),e}function Ub(a,b,c){for(var d,e=(Rb[b]||[]).concat(Rb["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function Vb(a,b,c){var d,e,f,g,h,i,j,k,l=this,m={},o=a.style,p=a.nodeType&&S(a),q=L.get(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,l.always(function(){l.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[o.overflow,o.overflowX,o.overflowY],j=n.css(a,"display"),k="none"===j?L.get(a,"olddisplay")||tb(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(o.display="inline-block")),c.overflow&&(o.overflow="hidden",l.always(function(){o.overflow=c.overflow[0],o.overflowX=c.overflow[1],o.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],Nb.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(p?"hide":"show")){if("show"!==e||!q||void 0===q[d])continue;p=!0}m[d]=q&&q[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(m))"inline"===("none"===j?tb(a.nodeName):j)&&(o.display=j);else{q?"hidden"in q&&(p=q.hidden):q=L.access(a,"fxshow",{}),f&&(q.hidden=!p),p?n(a).show():l.done(function(){n(a).hide()}),l.done(function(){var b;L.remove(a,"fxshow");for(b in m)n.style(a,b,m[b])});for(d in m)g=Ub(p?q[d]:0,d,l),d in q||(q[d]=g.start,p&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function Wb(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function Xb(a,b,c){var d,e,f=0,g=Qb.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=Lb||Sb(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:Lb||Sb(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(Wb(k,j.opts.specialEasing);g>f;f++)if(d=Qb[f].call(j,a,k,j.opts))return d;return n.map(k,Ub,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(Xb,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],Rb[c]=Rb[c]||[],Rb[c].unshift(b)},prefilter:function(a,b){b?Qb.unshift(a):Qb.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(S).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=Xb(this,n.extend({},a),f);(e||L.get(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=L.get(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&Pb.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=L.get(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(Tb(b,!0),a,d,e)}}),n.each({slideDown:Tb("show"),slideUp:Tb("hide"),slideToggle:Tb("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=0,c=n.timers;for(Lb=n.now();b<c.length;b++)a=c[b],a()||c[b]!==a||c.splice(b--,1);c.length||n.fx.stop(),Lb=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){Mb||(Mb=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(Mb),Mb=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a=l.createElement("input"),b=l.createElement("select"),c=b.appendChild(l.createElement("option"));a.type="checkbox",k.checkOn=""!==a.value,k.optSelected=c.selected,b.disabled=!0,k.optDisabled=!c.disabled,a=l.createElement("input"),a.value="t",a.type="radio",k.radioValue="t"===a.value}();var Yb,Zb,$b=n.expr.attrHandle;n.fn.extend({attr:function(a,b){return J(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===U?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?Zb:Yb)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))
},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(E);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)&&(a[d]=!1),a.removeAttribute(c)},attrHooks:{type:{set:function(a,b){if(!k.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),Zb={set:function(a,b,c){return b===!1?n.removeAttr(a,c):a.setAttribute(c,c),c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=$b[b]||n.find.attr;$b[b]=function(a,b,d){var e,f;return d||(f=$b[b],$b[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,$b[b]=f),e}});var _b=/^(?:input|select|textarea|button)$/i;n.fn.extend({prop:function(a,b){return J(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return this.each(function(){delete this[n.propFix[a]||a]})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){return a.hasAttribute("tabindex")||_b.test(a.nodeName)||a.href?a.tabIndex:-1}}}}),k.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&b.parentNode&&b.parentNode.selectedIndex,null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this});var ac=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h="string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ac," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0===arguments.length||"string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ac," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(E)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===U||"boolean"===c)&&(this.className&&L.set(this,"__className__",this.className),this.className=this.className||a===!1?"":L.get(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(ac," ").indexOf(b)>=0)return!0;return!1}});var bc=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(bc,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a))}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(k.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)d=e[g],(d.selected=n.inArray(d.value,f)>=0)&&(c=!0);return c||(a.selectedIndex=-1),f}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},k.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var cc=n.now(),dc=/\?/;n.parseJSON=function(a){return JSON.parse(a+"")},n.parseXML=function(a){var b,c;if(!a||"string"!=typeof a)return null;try{c=new DOMParser,b=c.parseFromString(a,"text/xml")}catch(d){b=void 0}return(!b||b.getElementsByTagName("parsererror").length)&&n.error("Invalid XML: "+a),b};var ec,fc,gc=/#.*$/,hc=/([?&])_=[^&]*/,ic=/^(.*?):[ \t]*([^\r\n]*)$/gm,jc=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,kc=/^(?:GET|HEAD)$/,lc=/^\/\//,mc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,nc={},oc={},pc="*/".concat("*");try{fc=location.href}catch(qc){fc=l.createElement("a"),fc.href="",fc=fc.href}ec=mc.exec(fc.toLowerCase())||[];function rc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(E)||[];if(n.isFunction(c))while(d=f[e++])"+"===d[0]?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function sc(a,b,c,d){var e={},f=a===oc;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function tc(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(c in b)void 0!==b[c]&&((e[c]?a:d||(d={}))[c]=b[c]);return d&&n.extend(!0,a,d),a}function uc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===d&&(d=a.mimeType||b.getResponseHeader("Content-Type"));if(d)for(e in h)if(h[e]&&h[e].test(d)){i.unshift(e);break}if(i[0]in c)f=i[0];else{for(e in c){if(!i[0]||a.converters[e+" "+i[0]]){f=e;break}g||(g=e)}f=f||g}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function vc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:fc,type:"GET",isLocal:jc.test(ec[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":pc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?tc(tc(a,n.ajaxSettings),b):tc(n.ajaxSettings,a)},ajaxPrefilter:rc(nc),ajaxTransport:rc(oc),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!f){f={};while(b=ic.exec(e))f[b[1].toLowerCase()]=b[2]}b=f[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?e:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return c&&c.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||fc)+"").replace(gc,"").replace(lc,ec[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(E)||[""],null==k.crossDomain&&(h=mc.exec(k.url.toLowerCase()),k.crossDomain=!(!h||h[1]===ec[1]&&h[2]===ec[2]&&(h[3]||("http:"===h[1]?"80":"443"))===(ec[3]||("http:"===ec[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),sc(nc,k,b,v),2===t)return v;i=k.global,i&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!kc.test(k.type),d=k.url,k.hasContent||(k.data&&(d=k.url+=(dc.test(d)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=hc.test(d)?d.replace(hc,"$1_="+cc++):d+(dc.test(d)?"&":"?")+"_="+cc++)),k.ifModified&&(n.lastModified[d]&&v.setRequestHeader("If-Modified-Since",n.lastModified[d]),n.etag[d]&&v.setRequestHeader("If-None-Match",n.etag[d])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+pc+"; q=0.01":""):k.accepts["*"]);for(j in k.headers)v.setRequestHeader(j,k.headers[j]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(j in{success:1,error:1,complete:1})v[j](k[j]);if(c=sc(oc,k,b,v)){v.readyState=1,i&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,c.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,f,h){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),c=void 0,e=h||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,f&&(u=uc(k,v,f)),u=vc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[d]=w),w=v.getResponseHeader("etag"),w&&(n.etag[d]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,i&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),i&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){var b;return n.isFunction(a)?this.each(function(b){n(this).wrapAll(a.call(this,b))}):(this[0]&&(b=n(a,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstElementChild)a=a.firstElementChild;return a}).append(this)),this)},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var wc=/%20/g,xc=/\[\]$/,yc=/\r?\n/g,zc=/^(?:submit|button|image|reset|file)$/i,Ac=/^(?:input|select|textarea|keygen)/i;function Bc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||xc.test(a)?d(a,e):Bc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Bc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Bc(c,a[c],b,e);return d.join("&").replace(wc,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Ac.test(this.nodeName)&&!zc.test(a)&&(this.checked||!T.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(yc,"\r\n")}}):{name:b.name,value:c.replace(yc,"\r\n")}}).get()}}),n.ajaxSettings.xhr=function(){try{return new XMLHttpRequest}catch(a){}};var Cc=0,Dc={},Ec={0:200,1223:204},Fc=n.ajaxSettings.xhr();a.ActiveXObject&&n(a).on("unload",function(){for(var a in Dc)Dc[a]()}),k.cors=!!Fc&&"withCredentials"in Fc,k.ajax=Fc=!!Fc,n.ajaxTransport(function(a){var b;return k.cors||Fc&&!a.crossDomain?{send:function(c,d){var e,f=a.xhr(),g=++Cc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)f.setRequestHeader(e,c[e]);b=function(a){return function(){b&&(delete Dc[g],b=f.onload=f.onerror=null,"abort"===a?f.abort():"error"===a?d(f.status,f.statusText):d(Ec[f.status]||f.status,f.statusText,"string"==typeof f.responseText?{text:f.responseText}:void 0,f.getAllResponseHeaders()))}},f.onload=b(),f.onerror=b("error"),b=Dc[g]=b("abort");try{f.send(a.hasContent&&a.data||null)}catch(h){if(b)throw h}},abort:function(){b&&b()}}:void 0}),n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET")}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c;return{send:function(d,e){b=n("<script>").prop({async:!0,charset:a.scriptCharset,src:a.url}).on("load error",c=function(a){b.remove(),c=null,a&&e("error"===a.type?404:200,a.type)}),l.head.appendChild(b[0])},abort:function(){c&&c()}}}});var Gc=[],Hc=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=Gc.pop()||n.expando+"_"+cc++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(Hc.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&Hc.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(Hc,"$1"+e):b.jsonp!==!1&&(b.url+=(dc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,Gc.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||l;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var Ic=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&Ic)return Ic.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=n.trim(a.slice(h)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e,dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,f||[a.responseText,b,a])}),this},n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var Jc=a.document.documentElement;function Kc(a){return n.isWindow(a)?a:9===a.nodeType&&a.defaultView}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&(f+i).indexOf("auto")>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d=this[0],e={top:0,left:0},f=d&&d.ownerDocument;if(f)return b=f.documentElement,n.contains(b,d)?(typeof d.getBoundingClientRect!==U&&(e=d.getBoundingClientRect()),c=Kc(f),{top:e.top+c.pageYOffset-b.clientTop,left:e.left+c.pageXOffset-b.clientLeft}):e},position:function(){if(this[0]){var a,b,c=this[0],d={top:0,left:0};return"fixed"===n.css(c,"position")?b=c.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(d=a.offset()),d.top+=n.css(a[0],"borderTopWidth",!0),d.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-d.top-n.css(c,"marginTop",!0),left:b.left-d.left-n.css(c,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||Jc;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Jc})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(b,c){var d="pageYOffset"===c;n.fn[b]=function(e){return J(this,function(b,e,f){var g=Kc(b);return void 0===f?g?g[c]:b[e]:void(g?g.scrollTo(d?a.pageXOffset:f,d?f:a.pageYOffset):b[e]=f)},b,e,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=yb(k.pixelPosition,function(a,c){return c?(c=xb(a,b),vb.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return J(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var Lc=a.jQuery,Mc=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=Mc),b&&a.jQuery===n&&(a.jQuery=Lc),n},typeof b===U&&(a.jQuery=a.$=n),n});
//# sourceMappingURL=jquery.min.map
	

	/**
 * Owl carousel
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 * @todo Lazy Load Icon
 * @todo prevent animationend bubling
 * @todo itemsScaleUp
 * @todo Test Zepto
 * @todo stagePadding calculate wrong active classes
 */
;(function($, window, document, undefined) {

	var drag, state, e;

	/**
	 * Template for status information about drag and touch events.
	 * @private
	 */
	drag = {
		start: 0,
		startX: 0,
		startY: 0,
		current: 0,
		currentX: 0,
		currentY: 0,
		offsetX: 0,
		offsetY: 0,
		distance: null,
		startTime: 0,
		endTime: 0,
		updatedX: 0,
		targetEl: null
	};

	/**
	 * Template for some status informations.
	 * @private
	 */
	state = {
		isTouch: false,
		isScrolling: false,
		isSwiping: false,
		direction: false,
		inMotion: false
	};

	/**
	 * Event functions references.
	 * @private
	 */
	e = {
		_onDragStart: null,
		_onDragMove: null,
		_onDragEnd: null,
		_transitionEnd: null,
		_resizer: null,
		_responsiveCall: null,
		_goToLoop: null,
		_checkVisibile: null
	};

	/**
	 * Creates a carousel.
	 * @class The Owl Carousel.
	 * @public
	 * @param {HTMLElement|jQuery} element - The element to create the carousel for.
	 * @param {Object} [options] - The options
	 */
	function Owl(element, options) {

		/**
		 * Current settings for the carousel.
		 * @public
		 */
		this.settings = null;

		/**
		 * Current options set by the caller including defaults.
		 * @public
		 */
		this.options = $.extend({}, Owl.Defaults, options);

		/**
		 * Plugin element.
		 * @public
		 */
		this.$element = $(element);

		/**
		 * Caches informations about drag and touch events.
		 */
		this.drag = $.extend({}, drag);

		/**
		 * Caches some status informations.
		 * @protected
		 */
		this.state = $.extend({}, state);

		/**
		 * @protected
		 * @todo Must be documented
		 */
		this.e = $.extend({}, e);

		/**
		 * References to the running plugins of this carousel.
		 * @protected
		 */
		this._plugins = {};

		/**
		 * Currently suppressed events to prevent them from beeing retriggered.
		 * @protected
		 */
		this._supress = {};

		/**
		 * Absolute current position.
		 * @protected
		 */
		this._current = null;

		/**
		 * Animation speed in milliseconds.
		 * @protected
		 */
		this._speed = null;

		/**
		 * Coordinates of all items in pixel.
		 * @todo The name of this member is missleading.
		 * @protected
		 */
		this._coordinates = [];

		/**
		 * Current breakpoint.
		 * @todo Real media queries would be nice.
		 * @protected
		 */
		this._breakpoint = null;

		/**
		 * Current width of the plugin element.
		 */
		this._width = null;

		/**
		 * All real items.
		 * @protected
		 */
		this._items = [];

		/**
		 * All cloned items.
		 * @protected
		 */
		this._clones = [];

		/**
		 * Merge values of all items.
		 * @todo Maybe this could be part of a plugin.
		 * @protected
		 */
		this._mergers = [];

		/**
		 * Invalidated parts within the update process.
		 * @protected
		 */
		this._invalidated = {};

		/**
		 * Ordered list of workers for the update process.
		 * @protected
		 */
		this._pipe = [];

		$.each(Owl.Plugins, $.proxy(function(key, plugin) {
			this._plugins[key[0].toLowerCase() + key.slice(1)]
				= new plugin(this);
		}, this));

		$.each(Owl.Pipe, $.proxy(function(priority, worker) {
			this._pipe.push({
				'filter': worker.filter,
				'run': $.proxy(worker.run, this)
			});
		}, this));

		this.setup();
		this.initialize();
	}

	/**
	 * Default options for the carousel.
	 * @public
	 */
	Owl.Defaults = {
		items: 3,
		loop: false,
		center: false,

		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,

		margin: 0,
		stagePadding: 0,

		merge: false,
		mergeFit: true,
		autoWidth: false,

		startPosition: 0,
		rtl: false,

		smartSpeed: 250,
		fluidSpeed: false,
		dragEndSpeed: false,

		responsive: {},
		responsiveRefreshRate: 200,
		responsiveBaseElement: window,
		responsiveClass: false,

		fallbackEasing: 'swing',

		info: false,

		nestedItemSelector: false,
		itemElement: 'div',
		stageElement: 'div',

		// Classes and Names
		themeClass: 'owl-theme',
		baseClass: 'owl-carousel',
		itemClass: 'owl-item',
		centerClass: 'center',
		activeClass: 'active'
	};

	/**
	 * Enumeration for width.
	 * @public
	 * @readonly
	 * @enum {String}
	 */
	Owl.Width = {
		Default: 'default',
		Inner: 'inner',
		Outer: 'outer'
	};

	/**
	 * Contains all registered plugins.
	 * @public
	 */
	Owl.Plugins = {};

	/**
	 * Update pipe.
	 */
	Owl.Pipe = [ {
		filter: [ 'width', 'items', 'settings' ],
		run: function(cache) {
			cache.current = this._items && this._items[this.relative(this._current)];
		}
	}, {
		filter: [ 'items', 'settings' ],
		run: function() {
			var cached = this._clones,
				clones = this.$stage.children('.cloned');

			if (clones.length !== cached.length || (!this.settings.loop && cached.length > 0)) {
				this.$stage.children('.cloned').remove();
				this._clones = [];
			}
		}
	}, {
		filter: [ 'items', 'settings' ],
		run: function() {
			var i, n,
				clones = this._clones,
				items = this._items,
				delta = this.settings.loop ? clones.length - Math.max(this.settings.items * 2, 4) : 0;

			for (i = 0, n = Math.abs(delta / 2); i < n; i++) {
				if (delta > 0) {
					this.$stage.children().eq(items.length + clones.length - 1).remove();
					clones.pop();
					this.$stage.children().eq(0).remove();
					clones.pop();
				} else {
					clones.push(clones.length / 2);
					this.$stage.append(items[clones[clones.length - 1]].clone().addClass('cloned'));
					clones.push(items.length - 1 - (clones.length - 1) / 2);
					this.$stage.prepend(items[clones[clones.length - 1]].clone().addClass('cloned'));
				}
			}
		}
	}, {
		filter: [ 'width', 'items', 'settings' ],
		run: function() {
			var rtl = (this.settings.rtl ? 1 : -1),
				width = (this.width() / this.settings.items).toFixed(3),
				coordinate = 0, merge, i, n;

			this._coordinates = [];
			for (i = 0, n = this._clones.length + this._items.length; i < n; i++) {
				merge = this._mergers[this.relative(i)];
				merge = (this.settings.mergeFit && Math.min(merge, this.settings.items)) || merge;
				coordinate += (this.settings.autoWidth ? this._items[this.relative(i)].width() + this.settings.margin : width * merge) * rtl;

				this._coordinates.push(coordinate);
			}
		}
	}, {
		filter: [ 'width', 'items', 'settings' ],
		run: function() {
			var i, n, width = (this.width() / this.settings.items).toFixed(3), css = {
				'width': Math.abs(this._coordinates[this._coordinates.length - 1]) + this.settings.stagePadding * 2,
				'padding-left': this.settings.stagePadding || '',
				'padding-right': this.settings.stagePadding || ''
			};

			this.$stage.css(css);

			css = { 'width': this.settings.autoWidth ? 'auto' : width - this.settings.margin };
			css[this.settings.rtl ? 'margin-left' : 'margin-right'] = this.settings.margin;

			if (!this.settings.autoWidth && $.grep(this._mergers, function(v) { return v > 1 }).length > 0) {
				for (i = 0, n = this._coordinates.length; i < n; i++) {
					css.width = Math.abs(this._coordinates[i]) - Math.abs(this._coordinates[i - 1] || 0) - this.settings.margin;
					this.$stage.children().eq(i).css(css);
				}
			} else {
				this.$stage.children().css(css);
			}
		}
	}, {
		filter: [ 'width', 'items', 'settings' ],
		run: function(cache) {
			cache.current && this.reset(this.$stage.children().index(cache.current));
		}
	}, {
		filter: [ 'position' ],
		run: function() {
			this.animate(this.coordinates(this._current));
		}
	}, {
		filter: [ 'width', 'position', 'items', 'settings' ],
		run: function() {
			var rtl = this.settings.rtl ? 1 : -1,
				padding = this.settings.stagePadding * 2,
				begin = this.coordinates(this.current()) + padding,
				end = begin + this.width() * rtl,
				inner, outer, matches = [], i, n;

			for (i = 0, n = this._coordinates.length; i < n; i++) {
				inner = this._coordinates[i - 1] || 0;
				outer = Math.abs(this._coordinates[i]) + padding * rtl;

				if ((this.op(inner, '<=', begin) && (this.op(inner, '>', end)))
					|| (this.op(outer, '<', begin) && this.op(outer, '>', end))) {
					matches.push(i);
				}
			}

			this.$stage.children('.' + this.settings.activeClass).removeClass(this.settings.activeClass);
			this.$stage.children(':eq(' + matches.join('), :eq(') + ')').addClass(this.settings.activeClass);

			if (this.settings.center) {
				this.$stage.children('.' + this.settings.centerClass).removeClass(this.settings.centerClass);
				this.$stage.children().eq(this.current()).addClass(this.settings.centerClass);
			}
		}
	} ];

	/**
	 * Initializes the carousel.
	 * @protected
	 */
	Owl.prototype.initialize = function() {
		this.trigger('initialize');

		this.$element
			.addClass(this.settings.baseClass)
			.addClass(this.settings.themeClass)
			.toggleClass('owl-rtl', this.settings.rtl);

		// check support
		this.browserSupport();

		if (this.settings.autoWidth && this.state.imagesLoaded !== true) {
			var imgs, nestedSelector, width;
			imgs = this.$element.find('img');
			nestedSelector = this.settings.nestedItemSelector ? '.' + this.settings.nestedItemSelector : undefined;
			width = this.$element.children(nestedSelector).width();

			if (imgs.length && width <= 0) {
				this.preloadAutoWidthImages(imgs);
				return false;
			}
		}

		this.$element.addClass('owl-loading');

		// create stage
		this.$stage = $('<' + this.settings.stageElement + ' class="owl-stage"/>')
			.wrap('<div class="owl-stage-outer">');

		// append stage
		this.$element.append(this.$stage.parent());

		// append content
		this.replace(this.$element.children().not(this.$stage.parent()));

		// set view width
		this._width = this.$element.width();

		// update view
		this.refresh();

		this.$element.removeClass('owl-loading').addClass('owl-loaded');

		// attach generic events
		this.eventsCall();

		// attach generic events
		this.internalEvents();

		// attach custom control events
		this.addTriggerableEvents();

		this.trigger('initialized');
	};

	/**
	 * Setups the current settings.
	 * @todo Remove responsive classes. Why should adaptive designs be brought into IE8?
	 * @todo Support for media queries by using `matchMedia` would be nice.
	 * @public
	 */
	Owl.prototype.setup = function() {
		var viewport = this.viewport(),
			overwrites = this.options.responsive,
			match = -1,
			settings = null;

		if (!overwrites) {
			settings = $.extend({}, this.options);
		} else {
			$.each(overwrites, function(breakpoint) {
				if (breakpoint <= viewport && breakpoint > match) {
					match = Number(breakpoint);
				}
			});

			settings = $.extend({}, this.options, overwrites[match]);
			delete settings.responsive;

			// responsive class
			if (settings.responsiveClass) {
				this.$element.attr('class', function(i, c) {
					return c.replace(/\b owl-responsive-\S+/g, '');
				}).addClass('owl-responsive-' + match);
			}
		}

		if (this.settings === null || this._breakpoint !== match) {
			this.trigger('change', { property: { name: 'settings', value: settings } });
			this._breakpoint = match;
			this.settings = settings;
			this.invalidate('settings');
			this.trigger('changed', { property: { name: 'settings', value: this.settings } });
		}
	};

	/**
	 * Updates option logic if necessery.
	 * @protected
	 */
	Owl.prototype.optionsLogic = function() {
		// Toggle Center class
		this.$element.toggleClass('owl-center', this.settings.center);

		// if items number is less than in body
		if (this.settings.loop && this._items.length < this.settings.items) {
			this.settings.loop = false;
		}

		if (this.settings.autoWidth) {
			this.settings.stagePadding = false;
			this.settings.merge = false;
		}
	};

	/**
	 * Prepares an item before add.
	 * @todo Rename event parameter `content` to `item`.
	 * @protected
	 * @returns {jQuery|HTMLElement} - The item container.
	 */
	Owl.prototype.prepare = function(item) {
		var event = this.trigger('prepare', { content: item });

		if (!event.data) {
			event.data = $('<' + this.settings.itemElement + '/>')
				.addClass(this.settings.itemClass).append(item)
		}

		this.trigger('prepared', { content: event.data });

		return event.data;
	};

	/**
	 * Updates the view.
	 * @public
	 */
	Owl.prototype.update = function() {
		var i = 0,
			n = this._pipe.length,
			filter = $.proxy(function(p) { return this[p] }, this._invalidated),
			cache = {};

		while (i < n) {
			if (this._invalidated.all || $.grep(this._pipe[i].filter, filter).length > 0) {
				this._pipe[i].run(cache);
			}
			i++;
		}

		this._invalidated = {};
	};

	/**
	 * Gets the width of the view.
	 * @public
	 * @param {Owl.Width} [dimension=Owl.Width.Default] - The dimension to return.
	 * @returns {Number} - The width of the view in pixel.
	 */
	Owl.prototype.width = function(dimension) {
		dimension = dimension || Owl.Width.Default;
		switch (dimension) {
			case Owl.Width.Inner:
			case Owl.Width.Outer:
				return this._width;
			default:
				return this._width - this.settings.stagePadding * 2 + this.settings.margin;
		}
	};

	/**
	 * Refreshes the carousel primarily for adaptive purposes.
	 * @public
	 */
	Owl.prototype.refresh = function() {
		if (this._items.length === 0) {
			return false;
		}

		var start = new Date().getTime();

		this.trigger('refresh');

		this.setup();

		this.optionsLogic();

		// hide and show methods helps here to set a proper widths,
		// this prevents scrollbar to be calculated in stage width
		this.$stage.addClass('owl-refresh');

		this.update();

		this.$stage.removeClass('owl-refresh');

		this.state.orientation = window.orientation;

		this.watchVisibility();

		this.trigger('refreshed');
	};

	/**
	 * Save internal event references and add event based functions.
	 * @protected
	 */
	Owl.prototype.eventsCall = function() {
		// Save events references
		this.e._onDragStart = $.proxy(function(e) {
			this.onDragStart(e);
		}, this);
		this.e._onDragMove = $.proxy(function(e) {
			this.onDragMove(e);
		}, this);
		this.e._onDragEnd = $.proxy(function(e) {
			this.onDragEnd(e);
		}, this);
		this.e._onResize = $.proxy(function(e) {
			this.onResize(e);
		}, this);
		this.e._transitionEnd = $.proxy(function(e) {
			this.transitionEnd(e);
		}, this);
		this.e._preventClick = $.proxy(function(e) {
			this.preventClick(e);
		}, this);
	};

	/**
	 * Checks window `resize` event.
	 * @protected
	 */
	Owl.prototype.onThrottledResize = function() {
		window.clearTimeout(this.resizeTimer);
		this.resizeTimer = window.setTimeout(this.e._onResize, this.settings.responsiveRefreshRate);
	};

	/**
	 * Checks window `resize` event.
	 * @protected
	 */
	Owl.prototype.onResize = function() {
		if (!this._items.length) {
			return false;
		}

		if (this._width === this.$element.width()) {
			return false;
		}

		if (this.trigger('resize').isDefaultPrevented()) {
			return false;
		}

		this._width = this.$element.width();

		this.invalidate('width');

		this.refresh();

		this.trigger('resized');
	};

	/**
	 * Checks for touch/mouse drag event type and add run event handlers.
	 * @protected
	 */
	Owl.prototype.eventsRouter = function(event) {
		var type = event.type;

		if (type === "mousedown" || type === "touchstart") {
			this.onDragStart(event);
		} else if (type === "mousemove" || type === "touchmove") {
			this.onDragMove(event);
		} else if (type === "mouseup" || type === "touchend") {
			this.onDragEnd(event);
		} else if (type === "touchcancel") {
			this.onDragEnd(event);
		}
	};

	/**
	 * Checks for touch/mouse drag options and add necessery event handlers.
	 * @protected
	 */
	Owl.prototype.internalEvents = function() {
		var isTouch = isTouchSupport(),
			isTouchIE = isTouchSupportIE();

		if (this.settings.mouseDrag){
			this.$stage.on('mousedown', $.proxy(function(event) { this.eventsRouter(event) }, this));
			this.$stage.on('dragstart', function() { return false });
			this.$stage.get(0).onselectstart = function() { return false };
		} else {
			this.$element.addClass('owl-text-select-on');
		}

		if (this.settings.touchDrag && !isTouchIE){
			this.$stage.on('touchstart touchcancel', $.proxy(function(event) { this.eventsRouter(event) }, this));
		}

		// catch transitionEnd event
		if (this.transitionEndVendor) {
			this.on(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd, false);
		}

		// responsive
		if (this.settings.responsive !== false) {
			this.on(window, 'resize', $.proxy(this.onThrottledResize, this));
		}
	};

	/**
	 * Handles touchstart/mousedown event.
	 * @protected
	 * @param {Event} event - The event arguments.
	 */
	Owl.prototype.onDragStart = function(event) {
		var ev, isTouchEvent, pageX, pageY, animatedPos;

		ev = event.originalEvent || event || window.event;

		// prevent right click
		if (ev.which === 3 || this.state.isTouch) {
			return false;
		}

		if (ev.type === 'mousedown') {
			this.$stage.addClass('owl-grab');
		}

		this.trigger('drag');
		this.drag.startTime = new Date().getTime();
		this.speed(0);
		this.state.isTouch = true;
		this.state.isScrolling = false;
		this.state.isSwiping = false;
		this.drag.distance = 0;

		pageX = getTouches(ev).x;
		pageY = getTouches(ev).y;

		// get stage position left
		this.drag.offsetX = this.$stage.position().left;
		this.drag.offsetY = this.$stage.position().top;

		if (this.settings.rtl) {
			this.drag.offsetX = this.$stage.position().left + this.$stage.width() - this.width()
				+ this.settings.margin;
		}

		// catch position // ie to fix
		if (this.state.inMotion && this.support3d) {
			animatedPos = this.getTransformProperty();
			this.drag.offsetX = animatedPos;
			this.animate(animatedPos);
			this.state.inMotion = true;
		} else if (this.state.inMotion && !this.support3d) {
			this.state.inMotion = false;
			return false;
		}

		this.drag.startX = pageX - this.drag.offsetX;
		this.drag.startY = pageY - this.drag.offsetY;

		this.drag.start = pageX - this.drag.startX;
		this.drag.targetEl = ev.target || ev.srcElement;
		this.drag.updatedX = this.drag.start;

		// to do/check
		// prevent links and images dragging;
		if (this.drag.targetEl.tagName === "IMG" || this.drag.targetEl.tagName === "A") {
			this.drag.targetEl.draggable = false;
		}

		$(document).on('mousemove.owl.dragEvents mouseup.owl.dragEvents touchmove.owl.dragEvents touchend.owl.dragEvents', $.proxy(function(event) {this.eventsRouter(event)},this));
	};

	/**
	 * Handles the touchmove/mousemove events.
	 * @todo Simplify
	 * @protected
	 * @param {Event} event - The event arguments.
	 */
	Owl.prototype.onDragMove = function(event) {
		var ev, isTouchEvent, pageX, pageY, minValue, maxValue, pull;

		if (!this.state.isTouch) {
			return;
		}

		if (this.state.isScrolling) {
			return;
		}

		ev = event.originalEvent || event || window.event;

		pageX = getTouches(ev).x;
		pageY = getTouches(ev).y;

		// Drag Direction
		this.drag.currentX = pageX - this.drag.startX;
		this.drag.currentY = pageY - this.drag.startY;
		this.drag.distance = this.drag.currentX - this.drag.offsetX;

		// Check move direction
		if (this.drag.distance < 0) {
			this.state.direction = this.settings.rtl ? 'right' : 'left';
		} else if (this.drag.distance > 0) {
			this.state.direction = this.settings.rtl ? 'left' : 'right';
		}
		// Loop
		if (this.settings.loop) {
			if (this.op(this.drag.currentX, '>', this.coordinates(this.minimum())) && this.state.direction === 'right') {
				this.drag.currentX -= (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length);
			} else if (this.op(this.drag.currentX, '<', this.coordinates(this.maximum())) && this.state.direction === 'left') {
				this.drag.currentX += (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length);
			}
		} else {
			// pull
			minValue = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum());
			maxValue = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum());
			pull = this.settings.pullDrag ? this.drag.distance / 5 : 0;
			this.drag.currentX = Math.max(Math.min(this.drag.currentX, minValue + pull), maxValue + pull);
		}

		// Lock browser if swiping horizontal

		if ((this.drag.distance > 8 || this.drag.distance < -8)) {
			if (ev.preventDefault !== undefined) {
				ev.preventDefault();
			} else {
				ev.returnValue = false;
			}
			this.state.isSwiping = true;
		}

		this.drag.updatedX = this.drag.currentX;

		// Lock Owl if scrolling
		if ((this.drag.currentY > 16 || this.drag.currentY < -16) && this.state.isSwiping === false) {
			this.state.isScrolling = true;
			this.drag.updatedX = this.drag.start;
		}

		this.animate(this.drag.updatedX);
	};

	/**
	 * Handles the touchend/mouseup events.
	 * @protected
	 */
	Owl.prototype.onDragEnd = function(event) {
		var compareTimes, distanceAbs, closest;

		if (!this.state.isTouch) {
			return;
		}

		if (event.type === 'mouseup') {
			this.$stage.removeClass('owl-grab');
		}

		this.trigger('dragged');

		// prevent links and images dragging;
		this.drag.targetEl.removeAttribute("draggable");

		// remove drag event listeners

		this.state.isTouch = false;
		this.state.isScrolling = false;
		this.state.isSwiping = false;

		// to check
		if (this.drag.distance === 0 && this.state.inMotion !== true) {
			this.state.inMotion = false;
			return false;
		}

		// prevent clicks while scrolling

		this.drag.endTime = new Date().getTime();
		compareTimes = this.drag.endTime - this.drag.startTime;
		distanceAbs = Math.abs(this.drag.distance);

		// to test
		if (distanceAbs > 3 || compareTimes > 300) {
			this.removeClick(this.drag.targetEl);
		}

		closest = this.closest(this.drag.updatedX);

		this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed);
		this.current(closest);
		this.invalidate('position');
		this.update();

		// if pullDrag is off then fire transitionEnd event manually when stick
		// to border
		if (!this.settings.pullDrag && this.drag.updatedX === this.coordinates(closest)) {
			this.transitionEnd();
		}

		this.drag.distance = 0;

		$(document).off('.owl.dragEvents');
	};

	/**
	 * Attaches `preventClick` to disable link while swipping.
	 * @protected
	 * @param {HTMLElement} [target] - The target of the `click` event.
	 */
	Owl.prototype.removeClick = function(target) {
		this.drag.targetEl = target;
		$(target).on('click.preventClick', this.e._preventClick);
		// to make sure click is removed:
		window.setTimeout(function() {
			$(target).off('click.preventClick');
		}, 300);
	};

	/**
	 * Suppresses click event.
	 * @protected
	 * @param {Event} ev - The event arguments.
	 */
	Owl.prototype.preventClick = function(ev) {
		if (ev.preventDefault) {
			ev.preventDefault();
		} else {
			ev.returnValue = false;
		}
		if (ev.stopPropagation) {
			ev.stopPropagation();
		}
		$(ev.target).off('click.preventClick');
	};

	/**
	 * Catches stage position while animate (only CSS3).
	 * @protected
	 * @returns
	 */
	Owl.prototype.getTransformProperty = function() {
		var transform, matrix3d;

		transform = window.getComputedStyle(this.$stage.get(0), null).getPropertyValue(this.vendorName + 'transform');
		// var transform = this.$stage.css(this.vendorName + 'transform')
		transform = transform.replace(/matrix(3d)?\(|\)/g, '').split(',');
		matrix3d = transform.length === 16;

		return matrix3d !== true ? transform[4] : transform[12];
	};

	/**
	 * Gets absolute position of the closest item for a coordinate.
	 * @todo Setting `freeDrag` makes `closest` not reusable. See #165.
	 * @protected
	 * @param {Number} coordinate - The coordinate in pixel.
	 * @return {Number} - The absolute position of the closest item.
	 */
	Owl.prototype.closest = function(coordinate) {
		var position = -1, pull = 30, width = this.width(), coordinates = this.coordinates();

		if (!this.settings.freeDrag) {
			// check closest item
			$.each(coordinates, $.proxy(function(index, value) {
				if (coordinate > value - pull && coordinate < value + pull) {
					position = index;
				} else if (this.op(coordinate, '<', value)
					&& this.op(coordinate, '>', coordinates[index + 1] || value - width)) {
					position = this.state.direction === 'left' ? index + 1 : index;
				}
				return position === -1;
			}, this));
		}

		if (!this.settings.loop) {
			// non loop boundries
			if (this.op(coordinate, '>', coordinates[this.minimum()])) {
				position = coordinate = this.minimum();
			} else if (this.op(coordinate, '<', coordinates[this.maximum()])) {
				position = coordinate = this.maximum();
			}
		}

		return position;
	};

	/**
	 * Animates the stage.
	 * @public
	 * @param {Number} coordinate - The coordinate in pixels.
	 */
	Owl.prototype.animate = function(coordinate) {
		this.trigger('translate');
		this.state.inMotion = this.speed() > 0;

		if (this.support3d) {
			this.$stage.css({
				transform: 'translate3d(' + coordinate + 'px' + ',0px, 0px)',
				transition: (this.speed() / 1000) + 's'
			});
		} else if (this.state.isTouch) {
			this.$stage.css({
				left: coordinate + 'px'
			});
		} else {
			this.$stage.animate({
				left: coordinate
			}, this.speed() / 1000, this.settings.fallbackEasing, $.proxy(function() {
				if (this.state.inMotion) {
					this.transitionEnd();
				}
			}, this));
		}
	};

	/**
	 * Sets the absolute position of the current item.
	 * @public
	 * @param {Number} [position] - The new absolute position or nothing to leave it unchanged.
	 * @returns {Number} - The absolute position of the current item.
	 */
	Owl.prototype.current = function(position) {
		if (position === undefined) {
			return this._current;
		}

		if (this._items.length === 0) {
			return undefined;
		}

		position = this.normalize(position);

		if (this._current !== position) {
			var event = this.trigger('change', { property: { name: 'position', value: position } });

			if (event.data !== undefined) {
				position = this.normalize(event.data);
			}

			this._current = position;

			this.invalidate('position');

			this.trigger('changed', { property: { name: 'position', value: this._current } });
		}

		return this._current;
	};

	/**
	 * Invalidates the given part of the update routine.
	 * @param {String} part - The part to invalidate.
	 */
	Owl.prototype.invalidate = function(part) {
		this._invalidated[part] = true;
	}

	/**
	 * Resets the absolute position of the current item.
	 * @public
	 * @param {Number} position - The absolute position of the new item.
	 */
	Owl.prototype.reset = function(position) {
		position = this.normalize(position);

		if (position === undefined) {
			return;
		}

		this._speed = 0;
		this._current = position;

		this.suppress([ 'translate', 'translated' ]);

		this.animate(this.coordinates(position));

		this.release([ 'translate', 'translated' ]);
	};

	/**
	 * Normalizes an absolute or a relative position for an item.
	 * @public
	 * @param {Number} position - The absolute or relative position to normalize.
	 * @param {Boolean} [relative=false] - Whether the given position is relative or not.
	 * @returns {Number} - The normalized position.
	 */
	Owl.prototype.normalize = function(position, relative) {
		var n = (relative ? this._items.length : this._items.length + this._clones.length);

		if (!$.isNumeric(position) || n < 1) {
			return undefined;
		}

		if (this._clones.length) {
			position = ((position % n) + n) % n;
		} else {
			position = Math.max(this.minimum(relative), Math.min(this.maximum(relative), position));
		}

		return position;
	};

	/**
	 * Converts an absolute position for an item into a relative position.
	 * @public
	 * @param {Number} position - The absolute position to convert.
	 * @returns {Number} - The converted position.
	 */
	Owl.prototype.relative = function(position) {
		position = this.normalize(position);
		position = position - this._clones.length / 2;
		return this.normalize(position, true);
	};

	/**
	 * Gets the maximum position for an item.
	 * @public
	 * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
	 * @returns {Number}
	 */
	Owl.prototype.maximum = function(relative) {
		var maximum, width, i = 0, coordinate,
			settings = this.settings;

		if (relative) {
			return this._items.length - 1;
		}

		if (!settings.loop && settings.center) {
			maximum = this._items.length - 1;
		} else if (!settings.loop && !settings.center) {
			maximum = this._items.length - settings.items;
		} else if (settings.loop || settings.center) {
			maximum = this._items.length + settings.items;
		} else if (settings.autoWidth || settings.merge) {
			revert = settings.rtl ? 1 : -1;
			width = this.$stage.width() - this.$element.width();
			while (coordinate = this.coordinates(i)) {
				if (coordinate * revert >= width) {
					break;
				}
				maximum = ++i;
			}
		} else {
			throw 'Can not detect maximum absolute position.'
		}

		return maximum;
	};

	/**
	 * Gets the minimum position for an item.
	 * @public
	 * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
	 * @returns {Number}
	 */
	Owl.prototype.minimum = function(relative) {
		if (relative) {
			return 0;
		}

		return this._clones.length / 2;
	};

	/**
	 * Gets an item at the specified relative position.
	 * @public
	 * @param {Number} [position] - The relative position of the item.
	 * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
	 */
	Owl.prototype.items = function(position) {
		if (position === undefined) {
			return this._items.slice();
		}

		position = this.normalize(position, true);
		return this._items[position];
	};

	/**
	 * Gets an item at the specified relative position.
	 * @public
	 * @param {Number} [position] - The relative position of the item.
	 * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
	 */
	Owl.prototype.mergers = function(position) {
		if (position === undefined) {
			return this._mergers.slice();
		}

		position = this.normalize(position, true);
		return this._mergers[position];
	};

	/**
	 * Gets the absolute positions of clones for an item.
	 * @public
	 * @param {Number} [position] - The relative position of the item.
	 * @returns {Array.<Number>} - The absolute positions of clones for the item or all if no position was given.
	 */
	Owl.prototype.clones = function(position) {
		var odd = this._clones.length / 2,
			even = odd + this._items.length,
			map = function(index) { return index % 2 === 0 ? even + index / 2 : odd - (index + 1) / 2 };

		if (position === undefined) {
			return $.map(this._clones, function(v, i) { return map(i) });
		}

		return $.map(this._clones, function(v, i) { return v === position ? map(i) : null });
	};

	/**
	 * Sets the current animation speed.
	 * @public
	 * @param {Number} [speed] - The animation speed in milliseconds or nothing to leave it unchanged.
	 * @returns {Number} - The current animation speed in milliseconds.
	 */
	Owl.prototype.speed = function(speed) {
		if (speed !== undefined) {
			this._speed = speed;
		}

		return this._speed;
	};

	/**
	 * Gets the coordinate of an item.
	 * @todo The name of this method is missleanding.
	 * @public
	 * @param {Number} position - The absolute position of the item within `minimum()` and `maximum()`.
	 * @returns {Number|Array.<Number>} - The coordinate of the item in pixel or all coordinates.
	 */
	Owl.prototype.coordinates = function(position) {
		var coordinate = null;

		if (position === undefined) {
			return $.map(this._coordinates, $.proxy(function(coordinate, index) {
				return this.coordinates(index);
			}, this));
		}

		if (this.settings.center) {
			coordinate = this._coordinates[position];
			coordinate += (this.width() - coordinate + (this._coordinates[position - 1] || 0)) / 2 * (this.settings.rtl ? -1 : 1);
		} else {
			coordinate = this._coordinates[position - 1] || 0;
		}

		return coordinate;
	};

	/**
	 * Calculates the speed for a translation.
	 * @protected
	 * @param {Number} from - The absolute position of the start item.
	 * @param {Number} to - The absolute position of the target item.
	 * @param {Number} [factor=undefined] - The time factor in milliseconds.
	 * @returns {Number} - The time in milliseconds for the translation.
	 */
	Owl.prototype.duration = function(from, to, factor) {
		return Math.min(Math.max(Math.abs(to - from), 1), 6) * Math.abs((factor || this.settings.smartSpeed));
	};

	/**
	 * Slides to the specified item.
	 * @public
	 * @param {Number} position - The position of the item.
	 * @param {Number} [speed] - The time in milliseconds for the transition.
	 */
	Owl.prototype.to = function(position, speed) {
		if (this.settings.loop) {
			var distance = position - this.relative(this.current()),
				revert = this.current(),
				before = this.current(),
				after = this.current() + distance,
				direction = before - after < 0 ? true : false,
				items = this._clones.length + this._items.length;

			if (after < this.settings.items && direction === false) {
				revert = before + this._items.length;
				this.reset(revert);
			} else if (after >= items - this.settings.items && direction === true) {
				revert = before - this._items.length;
				this.reset(revert);
			}
			window.clearTimeout(this.e._goToLoop);
			this.e._goToLoop = window.setTimeout($.proxy(function() {
				this.speed(this.duration(this.current(), revert + distance, speed));
				this.current(revert + distance);
				this.update();
			}, this), 30);
		} else {
			this.speed(this.duration(this.current(), position, speed));
			this.current(position);
			this.update();
		}
	};

	/**
	 * Slides to the next item.
	 * @public
	 * @param {Number} [speed] - The time in milliseconds for the transition.
	 */
	Owl.prototype.next = function(speed) {
		speed = speed || false;
		this.to(this.relative(this.current()) + 1, speed);
	};

	/**
	 * Slides to the previous item.
	 * @public
	 * @param {Number} [speed] - The time in milliseconds for the transition.
	 */
	Owl.prototype.prev = function(speed) {
		speed = speed || false;
		this.to(this.relative(this.current()) - 1, speed);
	};

	/**
	 * Handles the end of an animation.
	 * @protected
	 * @param {Event} event - The event arguments.
	 */
	Owl.prototype.transitionEnd = function(event) {

		// if css2 animation then event object is undefined
		if (event !== undefined) {
			event.stopPropagation();

			// Catch only owl-stage transitionEnd event
			if ((event.target || event.srcElement || event.originalTarget) !== this.$stage.get(0)) {
				return false;
			}
		}

		this.state.inMotion = false;
		this.trigger('translated');
	};

	/**
	 * Gets viewport width.
	 * @protected
	 * @return {Number} - The width in pixel.
	 */
	Owl.prototype.viewport = function() {
		var width;
		if (this.options.responsiveBaseElement !== window) {
			width = $(this.options.responsiveBaseElement).width();
		} else if (window.innerWidth) {
			width = window.innerWidth;
		} else if (document.documentElement && document.documentElement.clientWidth) {
			width = document.documentElement.clientWidth;
		} else {
			throw 'Can not detect viewport width.';
		}
		return width;
	};

	/**
	 * Replaces the current content.
	 * @public
	 * @param {HTMLElement|jQuery|String} content - The new content.
	 */
	Owl.prototype.replace = function(content) {
		this.$stage.empty();
		this._items = [];

		if (content) {
			content = (content instanceof jQuery) ? content : $(content);
		}

		if (this.settings.nestedItemSelector) {
			content = content.find('.' + this.settings.nestedItemSelector);
		}

		content.filter(function() {
			return this.nodeType === 1;
		}).each($.proxy(function(index, item) {
			item = this.prepare(item);
			this.$stage.append(item);
			this._items.push(item);
			this._mergers.push(item.find('[data-merge]').andSelf('[data-merge]').attr('data-merge') * 1 || 1);
		}, this));

		this.reset($.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0);

		this.invalidate('items');
	};

	/**
	 * Adds an item.
	 * @todo Use `item` instead of `content` for the event arguments.
	 * @public
	 * @param {HTMLElement|jQuery|String} content - The item content to add.
	 * @param {Number} [position] - The relative position at which to insert the item otherwise the item will be added to the end.
	 */
	Owl.prototype.add = function(content, position) {
		position = position === undefined ? this._items.length : this.normalize(position, true);

		this.trigger('add', { content: content, position: position });

		if (this._items.length === 0 || position === this._items.length) {
			this.$stage.append(content);
			this._items.push(content);
			this._mergers.push(content.find('[data-merge]').andSelf('[data-merge]').attr('data-merge') * 1 || 1);
		} else {
			this._items[position].before(content);
			this._items.splice(position, 0, content);
			this._mergers.splice(position, 0, content.find('[data-merge]').andSelf('[data-merge]').attr('data-merge') * 1 || 1);
		}

		this.invalidate('items');

		this.trigger('added', { content: content, position: position });
	};

	/**
	 * Removes an item by its position.
	 * @todo Use `item` instead of `content` for the event arguments.
	 * @public
	 * @param {Number} position - The relative position of the item to remove.
	 */
	Owl.prototype.remove = function(position) {
		position = this.normalize(position, true);

		if (position === undefined) {
			return;
		}

		this.trigger('remove', { content: this._items[position], position: position });

		this._items[position].remove();
		this._items.splice(position, 1);
		this._mergers.splice(position, 1);

		this.invalidate('items');

		this.trigger('removed', { content: null, position: position });
	};

	/**
	 * Adds triggerable events.
	 * @protected
	 */
	Owl.prototype.addTriggerableEvents = function() {
		var handler = $.proxy(function(callback, event) {
			return $.proxy(function(e) {
				if (e.relatedTarget !== this) {
					this.suppress([ event ]);
					callback.apply(this, [].slice.call(arguments, 1));
					this.release([ event ]);
				}
			}, this);
		}, this);

		$.each({
			'next': this.next,
			'prev': this.prev,
			'to': this.to,
			'destroy': this.destroy,
			'refresh': this.refresh,
			'replace': this.replace,
			'add': this.add,
			'remove': this.remove
		}, $.proxy(function(event, callback) {
			this.$element.on(event + '.owl.carousel', handler(callback, event + '.owl.carousel'));
		}, this));

	};

	/**
	 * Watches the visibility of the carousel element.
	 * @protected
	 */
	Owl.prototype.watchVisibility = function() {

		// test on zepto
		if (!isElVisible(this.$element.get(0))) {
			this.$element.addClass('owl-hidden');
			window.clearInterval(this.e._checkVisibile);
			this.e._checkVisibile = window.setInterval($.proxy(checkVisible, this), 500);
		}

		function isElVisible(el) {
			return el.offsetWidth > 0 && el.offsetHeight > 0;
		}

		function checkVisible() {
			if (isElVisible(this.$element.get(0))) {
				this.$element.removeClass('owl-hidden');
				this.refresh();
				window.clearInterval(this.e._checkVisibile);
			}
		}
	};

	/**
	 * Preloads images with auto width.
	 * @protected
	 * @todo Still to test
	 */
	Owl.prototype.preloadAutoWidthImages = function(imgs) {
		var loaded, that, $el, img;

		loaded = 0;
		that = this;
		imgs.each(function(i, el) {
			$el = $(el);
			img = new Image();

			img.onload = function() {
				loaded++;
				$el.attr('src', img.src);
				$el.css('opacity', 1);
				if (loaded >= imgs.length) {
					that.state.imagesLoaded = true;
					that.initialize();
				}
			};

			img.src = $el.attr('src') || $el.attr('data-src') || $el.attr('data-src-retina');
		});
	};

	/**
	 * Destroys the carousel.
	 * @public
	 */
	Owl.prototype.destroy = function() {

		if (this.$element.hasClass(this.settings.themeClass)) {
			this.$element.removeClass(this.settings.themeClass);
		}

		if (this.settings.responsive !== false) {
			$(window).off('resize.owl.carousel');
		}

		if (this.transitionEndVendor) {
			this.off(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd);
		}

		for ( var i in this._plugins) {
			this._plugins[i].destroy();
		}

		if (this.settings.mouseDrag || this.settings.touchDrag) {
			this.$stage.off('mousedown touchstart touchcancel');
			$(document).off('.owl.dragEvents');
			this.$stage.get(0).onselectstart = function() {};
			this.$stage.off('dragstart', function() { return false });
		}

		// remove event handlers in the ".owl.carousel" namespace
		this.$element.off('.owl');

		this.$stage.children('.cloned').remove();
		this.e = null;
		this.$element.removeData('owlCarousel');

		this.$stage.children().contents().unwrap();
		this.$stage.children().unwrap();
		this.$stage.unwrap();
	};

	/**
	 * Operators to calculate right-to-left and left-to-right.
	 * @protected
	 * @param {Number} [a] - The left side operand.
	 * @param {String} [o] - The operator.
	 * @param {Number} [b] - The right side operand.
	 */
	Owl.prototype.op = function(a, o, b) {
		var rtl = this.settings.rtl;
		switch (o) {
			case '<':
				return rtl ? a > b : a < b;
			case '>':
				return rtl ? a < b : a > b;
			case '>=':
				return rtl ? a <= b : a >= b;
			case '<=':
				return rtl ? a >= b : a <= b;
			default:
				break;
		}
	};

	/**
	 * Attaches to an internal event.
	 * @protected
	 * @param {HTMLElement} element - The event source.
	 * @param {String} event - The event name.
	 * @param {Function} listener - The event handler to attach.
	 * @param {Boolean} capture - Wether the event should be handled at the capturing phase or not.
	 */
	Owl.prototype.on = function(element, event, listener, capture) {
		if (element.addEventListener) {
			element.addEventListener(event, listener, capture);
		} else if (element.attachEvent) {
			element.attachEvent('on' + event, listener);
		}
	};

	/**
	 * Detaches from an internal event.
	 * @protected
	 * @param {HTMLElement} element - The event source.
	 * @param {String} event - The event name.
	 * @param {Function} listener - The attached event handler to detach.
	 * @param {Boolean} capture - Wether the attached event handler was registered as a capturing listener or not.
	 */
	Owl.prototype.off = function(element, event, listener, capture) {
		if (element.removeEventListener) {
			element.removeEventListener(event, listener, capture);
		} else if (element.detachEvent) {
			element.detachEvent('on' + event, listener);
		}
	};

	/**
	 * Triggers an public event.
	 * @protected
	 * @param {String} name - The event name.
	 * @param {*} [data=null] - The event data.
	 * @param {String} [namespace=.owl.carousel] - The event namespace.
	 * @returns {Event} - The event arguments.
	 */
	Owl.prototype.trigger = function(name, data, namespace) {
		var status = {
			item: { count: this._items.length, index: this.current() }
		}, handler = $.camelCase(
			$.grep([ 'on', name, namespace ], function(v) { return v })
				.join('-').toLowerCase()
		), event = $.Event(
			[ name, 'owl', namespace || 'carousel' ].join('.').toLowerCase(),
			$.extend({ relatedTarget: this }, status, data)
		);

		if (!this._supress[name]) {
			$.each(this._plugins, function(name, plugin) {
				if (plugin.onTrigger) {
					plugin.onTrigger(event);
				}
			});

			this.$element.trigger(event);

			if (this.settings && typeof this.settings[handler] === 'function') {
				this.settings[handler].apply(this, event);
			}
		}

		return event;
	};

	/**
	 * Suppresses events.
	 * @protected
	 * @param {Array.<String>} events - The events to suppress.
	 */
	Owl.prototype.suppress = function(events) {
		$.each(events, $.proxy(function(index, event) {
			this._supress[event] = true;
		}, this));
	}

	/**
	 * Releases suppressed events.
	 * @protected
	 * @param {Array.<String>} events - The events to release.
	 */
	Owl.prototype.release = function(events) {
		$.each(events, $.proxy(function(index, event) {
			delete this._supress[event];
		}, this));
	}

	/**
	 * Checks the availability of some browser features.
	 * @protected
	 */
	Owl.prototype.browserSupport = function() {
		this.support3d = isPerspective();

		if (this.support3d) {
			this.transformVendor = isTransform();

			// take transitionend event name by detecting transition
			var endVendors = [ 'transitionend', 'webkitTransitionEnd', 'transitionend', 'oTransitionEnd' ];
			this.transitionEndVendor = endVendors[isTransition()];

			// take vendor name from transform name
			this.vendorName = this.transformVendor.replace(/Transform/i, '');
			this.vendorName = this.vendorName !== '' ? '-' + this.vendorName.toLowerCase() + '-' : '';
		}

		this.state.orientation = window.orientation;
	};

	/**
	 * Get touch/drag coordinats.
	 * @private
	 * @param {event} - mousedown/touchstart event
	 * @returns {object} - Contains X and Y of current mouse/touch position
	 */

	function getTouches(event) {
		if (event.touches !== undefined) {
			return {
				x: event.touches[0].pageX,
				y: event.touches[0].pageY
			};
		}

		if (event.touches === undefined) {
			if (event.pageX !== undefined) {
				return {
					x: event.pageX,
					y: event.pageY
				};
			}

		if (event.pageX === undefined) {
			return {
					x: event.clientX,
					y: event.clientY
				};
			}
		}
	}

	/**
	 * Checks for CSS support.
	 * @private
	 * @param {Array} array - The CSS properties to check for.
	 * @returns {Array} - Contains the supported CSS property name and its index or `false`.
	 */
	function isStyleSupported(array) {
		var p, s, fake = document.createElement('div'), list = array;
		for (p in list) {
			s = list[p];
			if (typeof fake.style[s] !== 'undefined') {
				fake = null;
				return [ s, p ];
			}
		}
		return [ false ];
	}

	/**
	 * Checks for CSS transition support.
	 * @private
	 * @todo Realy bad design
	 * @returns {Number}
	 */
	function isTransition() {
		return isStyleSupported([ 'transition', 'WebkitTransition', 'MozTransition', 'OTransition' ])[1];
	}

	/**
	 * Checks for CSS transform support.
	 * @private
	 * @returns {String} The supported property name or false.
	 */
	function isTransform() {
		return isStyleSupported([ 'transform', 'WebkitTransform', 'MozTransform', 'OTransform', 'msTransform' ])[0];
	}

	/**
	 * Checks for CSS perspective support.
	 * @private
	 * @returns {String} The supported property name or false.
	 */
	function isPerspective() {
		return isStyleSupported([ 'perspective', 'webkitPerspective', 'MozPerspective', 'OPerspective', 'MsPerspective' ])[0];
	}

	/**
	 * Checks wether touch is supported or not.
	 * @private
	 * @returns {Boolean}
	 */
	function isTouchSupport() {
		return 'ontouchstart' in window || !!(navigator.msMaxTouchPoints);
	}

	/**
	 * Checks wether touch is supported or not for IE.
	 * @private
	 * @returns {Boolean}
	 */
	function isTouchSupportIE() {
		return window.navigator.msPointerEnabled;
	}

	/**
	 * The jQuery Plugin for the Owl Carousel
	 * @public
	 */
	$.fn.owlCarousel = function(options) {
		return this.each(function() {
			if (!$(this).data('owlCarousel')) {
				$(this).data('owlCarousel', new Owl(this, options));
			}
		});
	};

	/**
	 * The constructor for the jQuery Plugin
	 * @public
	 */
	$.fn.owlCarousel.Constructor = Owl;

})(window.Zepto || window.jQuery, window, document);

/**
 * Lazy Plugin
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {

	/**
	 * Creates the lazy plugin.
	 * @class The Lazy Plugin
	 * @param {Owl} carousel - The Owl Carousel
	 */
	var Lazy = function(carousel) {

		/**
		 * Reference to the core.
		 * @protected
		 * @type {Owl}
		 */
		this._core = carousel;

		/**
		 * Already loaded items.
		 * @protected
		 * @type {Array.<jQuery>}
		 */
		this._loaded = [];

		/**
		 * Event handlers.
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'initialized.owl.carousel change.owl.carousel': $.proxy(function(e) {
				if (!e.namespace) {
					return;
				}

				if (!this._core.settings || !this._core.settings.lazyLoad) {
					return;
				}

				if ((e.property && e.property.name == 'position') || e.type == 'initialized') {
					var settings = this._core.settings,
						n = (settings.center && Math.ceil(settings.items / 2) || settings.items),
						i = ((settings.center && n * -1) || 0),
						position = ((e.property && e.property.value) || this._core.current()) + i,
						clones = this._core.clones().length,
						load = $.proxy(function(i, v) { this.load(v) }, this);

					while (i++ < n) {
						this.load(clones / 2 + this._core.relative(position));
						clones && $.each(this._core.clones(this._core.relative(position++)), load);
					}
				}
			}, this)
		};

		// set the default options
		this._core.options = $.extend({}, Lazy.Defaults, this._core.options);

		// register event handler
		this._core.$element.on(this._handlers);
	}

	/**
	 * Default options.
	 * @public
	 */
	Lazy.Defaults = {
		lazyLoad: false
	}

	/**
	 * Loads all resources of an item at the specified position.
	 * @param {Number} position - The absolute position of the item.
	 * @protected
	 */
	Lazy.prototype.load = function(position) {
		var $item = this._core.$stage.children().eq(position),
			$elements = $item && $item.find('.owl-lazy');

		if (!$elements || $.inArray($item.get(0), this._loaded) > -1) {
			return;
		}

		$elements.each($.proxy(function(index, element) {
			var $element = $(element), image,
				url = (window.devicePixelRatio > 1 && $element.attr('data-src-retina')) || $element.attr('data-src');

			this._core.trigger('load', { element: $element, url: url }, 'lazy');

			if ($element.is('img')) {
				$element.one('load.owl.lazy', $.proxy(function() {
					$element.css('opacity', 1);
					this._core.trigger('loaded', { element: $element, url: url }, 'lazy');
				}, this)).attr('src', url);
			} else {
				image = new Image();
				image.onload = $.proxy(function() {
					$element.css({
						'background-image': 'url(' + url + ')',
						'opacity': '1'
					});
					this._core.trigger('loaded', { element: $element, url: url }, 'lazy');
				}, this);
				image.src = url;
			}
		}, this));

		this._loaded.push($item.get(0));
	}

	/**
	 * Destroys the plugin.
	 * @public
	 */
	Lazy.prototype.destroy = function() {
		var handler, property;

		for (handler in this.handlers) {
			this._core.$element.off(handler, this.handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	}

	$.fn.owlCarousel.Constructor.Plugins.Lazy = Lazy;

})(window.Zepto || window.jQuery, window, document);

/**
 * AutoHeight Plugin
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {

	/**
	 * Creates the auto height plugin.
	 * @class The Auto Height Plugin
	 * @param {Owl} carousel - The Owl Carousel
	 */
	var AutoHeight = function(carousel) {
		/**
		 * Reference to the core.
		 * @protected
		 * @type {Owl}
		 */
		this._core = carousel;

		/**
		 * All event handlers.
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'initialized.owl.carousel': $.proxy(function() {
				if (this._core.settings.autoHeight) {
					this.update();
				}
			}, this),
			'changed.owl.carousel': $.proxy(function(e) {
				if (this._core.settings.autoHeight && e.property.name == 'position'){
					this.update();
				}
			}, this),
			'loaded.owl.lazy': $.proxy(function(e) {
				if (this._core.settings.autoHeight && e.element.closest('.' + this._core.settings.itemClass)
					=== this._core.$stage.children().eq(this._core.current())) {
					this.update();
				}
			}, this)
		};

		// set default options
		this._core.options = $.extend({}, AutoHeight.Defaults, this._core.options);

		// register event handlers
		this._core.$element.on(this._handlers);
	};

	/**
	 * Default options.
	 * @public
	 */
	AutoHeight.Defaults = {
		autoHeight: false,
		autoHeightClass: 'owl-height'
	};

	/**
	 * Updates the view.
	 */
	AutoHeight.prototype.update = function() {
		this._core.$stage.parent()
			.height(this._core.$stage.children().eq(this._core.current()).height())
			.addClass(this._core.settings.autoHeightClass);
	};

	AutoHeight.prototype.destroy = function() {
		var handler, property;

		for (handler in this._handlers) {
			this._core.$element.off(handler, this._handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	};

	$.fn.owlCarousel.Constructor.Plugins.AutoHeight = AutoHeight;

})(window.Zepto || window.jQuery, window, document);

/**
 * Video Plugin
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {

	/**
	 * Creates the video plugin.
	 * @class The Video Plugin
	 * @param {Owl} carousel - The Owl Carousel
	 */
	var Video = function(carousel) {
		/**
		 * Reference to the core.
		 * @protected
		 * @type {Owl}
		 */
		this._core = carousel;

		/**
		 * Cache all video URLs.
		 * @protected
		 * @type {Object}
		 */
		this._videos = {};

		/**
		 * Current playing item.
		 * @protected
		 * @type {jQuery}
		 */
		this._playing = null;

		/**
		 * Whether this is in fullscreen or not.
		 * @protected
		 * @type {Boolean}
		 */
		this._fullscreen = false;

		/**
		 * All event handlers.
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'resize.owl.carousel': $.proxy(function(e) {
				if (this._core.settings.video && !this.isInFullScreen()) {
					e.preventDefault();
				}
			}, this),
			'refresh.owl.carousel changed.owl.carousel': $.proxy(function(e) {
				if (this._playing) {
					this.stop();
				}
			}, this),
			'prepared.owl.carousel': $.proxy(function(e) {
				var $element = $(e.content).find('.owl-video');
				if ($element.length) {
					$element.css('display', 'none');
					this.fetch($element, $(e.content));
				}
			}, this)
		};

		// set default options
		this._core.options = $.extend({}, Video.Defaults, this._core.options);

		// register event handlers
		this._core.$element.on(this._handlers);

		this._core.$element.on('click.owl.video', '.owl-video-play-icon', $.proxy(function(e) {
			this.play(e);
		}, this));
	};

	/**
	 * Default options.
	 * @public
	 */
	Video.Defaults = {
		video: false,
		videoHeight: false,
		videoWidth: false
	};

	/**
	 * Gets the video ID and the type (YouTube/Vimeo only).
	 * @protected
	 * @param {jQuery} target - The target containing the video data.
	 * @param {jQuery} item - The item containing the video.
	 */
	Video.prototype.fetch = function(target, item) {

		var type = target.attr('data-vimeo-id') ? 'vimeo' : 'youtube',
			id = target.attr('data-vimeo-id') || target.attr('data-youtube-id'),
			width = target.attr('data-width') || this._core.settings.videoWidth,
			height = target.attr('data-height') || this._core.settings.videoHeight,
			url = target.attr('href');

		if (url) {
			id = url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

			if (id[3].indexOf('youtu') > -1) {
				type = 'youtube';
			} else if (id[3].indexOf('vimeo') > -1) {
				type = 'vimeo';
			} else {
				throw new Error('Video URL not supported.');
			}
			id = id[6];
		} else {
			throw new Error('Missing video URL.');
		}

		this._videos[url] = {
			type: type,
			id: id,
			width: width,
			height: height
		};

		item.attr('data-video', url);

		this.thumbnail(target, this._videos[url]);
	};

	/**
	 * Creates video thumbnail.
	 * @protected
	 * @param {jQuery} target - The target containing the video data.
	 * @param {Object} info - The video info object.
	 * @see `fetch`
	 */
	Video.prototype.thumbnail = function(target, video) {

		var tnLink,
			icon,
			path,
			dimensions = video.width && video.height ? 'style="width:' + video.width + 'px;height:' + video.height + 'px;"' : '',
			customTn = target.find('img'),
			srcType = 'src',
			lazyClass = '',
			settings = this._core.settings,
			create = function(path) {
				icon = '<div class="owl-video-play-icon"></div>';

				if (settings.lazyLoad) {
					tnLink = '<div class="owl-video-tn ' + lazyClass + '" ' + srcType + '="' + path + '"></div>';
				} else {
					tnLink = '<div class="owl-video-tn" style="opacity:1;background-image:url(' + path + ')"></div>';
				}
				target.after(tnLink);
				target.after(icon);
			};

		// wrap video content into owl-video-wrapper div
		target.wrap('<div class="owl-video-wrapper"' + dimensions + '></div>');

		if (this._core.settings.lazyLoad) {
			srcType = 'data-src';
			lazyClass = 'owl-lazy';
		}

		// custom thumbnail
		if (customTn.length) {
			create(customTn.attr(srcType));
			customTn.remove();
			return false;
		}

		if (video.type === 'youtube') {
			path = "http://img.youtube.com/vi/" + video.id + "/hqdefault.jpg";
			create(path);
		} else if (video.type === 'vimeo') {
			$.ajax({
				type: 'GET',
				url: 'http://vimeo.com/api/v2/video/' + video.id + '.json',
				jsonp: 'callback',
				dataType: 'jsonp',
				success: function(data) {
					path = data[0].thumbnail_large;
					create(path);
				}
			});
		}
	};

	/**
	 * Stops the current video.
	 * @public
	 */
	Video.prototype.stop = function() {
		this._core.trigger('stop', null, 'video');
		this._playing.find('.owl-video-frame').remove();
		this._playing.removeClass('owl-video-playing');
		this._playing = null;
	};

	/**
	 * Starts the current video.
	 * @public
	 * @param {Event} ev - The event arguments.
	 */
	Video.prototype.play = function(ev) {
		this._core.trigger('play', null, 'video');

		if (this._playing) {
			this.stop();
		}

		var target = $(ev.target || ev.srcElement),
			item = target.closest('.' + this._core.settings.itemClass),
			video = this._videos[item.attr('data-video')],
			width = video.width || '100%',
			height = video.height || this._core.$stage.height(),
			html, wrap;

		if (video.type === 'youtube') {
			html = '<iframe width="' + width + '" height="' + height + '" src="http://www.youtube.com/embed/'
				+ video.id + '?autoplay=1&v=' + video.id + '" frameborder="0" allowfullscreen></iframe>';
		} else if (video.type === 'vimeo') {
			html = '<iframe src="http://player.vimeo.com/video/' + video.id + '?autoplay=1" width="' + width
				+ '" height="' + height
				+ '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		}

		item.addClass('owl-video-playing');
		this._playing = item;

		wrap = $('<div style="height:' + height + 'px; width:' + width + 'px" class="owl-video-frame">'
			+ html + '</div>');
		target.after(wrap);
	};

	/**
	 * Checks whether an video is currently in full screen mode or not.
	 * @todo Bad style because looks like a readonly method but changes members.
	 * @protected
	 * @returns {Boolean}
	 */
	Video.prototype.isInFullScreen = function() {

		// if Vimeo Fullscreen mode
		var element = document.fullscreenElement || document.mozFullScreenElement
			|| document.webkitFullscreenElement;

		if (element && $(element).parent().hasClass('owl-video-frame')) {
			this._core.speed(0);
			this._fullscreen = true;
		}

		if (element && this._fullscreen && this._playing) {
			return false;
		}

		// comming back from fullscreen
		if (this._fullscreen) {
			this._fullscreen = false;
			return false;
		}

		// check full screen mode and window orientation
		if (this._playing) {
			if (this._core.state.orientation !== window.orientation) {
				this._core.state.orientation = window.orientation;
				return false;
			}
		}

		return true;
	};

	/**
	 * Destroys the plugin.
	 */
	Video.prototype.destroy = function() {
		var handler, property;

		this._core.$element.off('click.owl.video');

		for (handler in this._handlers) {
			this._core.$element.off(handler, this._handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	};

	$.fn.owlCarousel.Constructor.Plugins.Video = Video;

})(window.Zepto || window.jQuery, window, document);

/**
 * Animate Plugin
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {

	/**
	 * Creates the animate plugin.
	 * @class The Navigation Plugin
	 * @param {Owl} scope - The Owl Carousel
	 */
	var Animate = function(scope) {
		this.core = scope;
		this.core.options = $.extend({}, Animate.Defaults, this.core.options);
		this.swapping = true;
		this.previous = undefined;
		this.next = undefined;

		this.handlers = {
			'change.owl.carousel': $.proxy(function(e) {
				if (e.property.name == 'position') {
					this.previous = this.core.current();
					this.next = e.property.value;
				}
			}, this),
			'drag.owl.carousel dragged.owl.carousel translated.owl.carousel': $.proxy(function(e) {
				this.swapping = e.type == 'translated';
			}, this),
			'translate.owl.carousel': $.proxy(function(e) {
				if (this.swapping && (this.core.options.animateOut || this.core.options.animateIn)) {
					this.swap();
				}
			}, this)
		};

		this.core.$element.on(this.handlers);
	};

	/**
	 * Default options.
	 * @public
	 */
	Animate.Defaults = {
		animateOut: false,
		animateIn: false
	};

	/**
	 * Toggles the animation classes whenever an translations starts.
	 * @protected
	 * @returns {Boolean|undefined}
	 */
	Animate.prototype.swap = function() {

		if (this.core.settings.items !== 1 || !this.core.support3d) {
			return;
		}

		this.core.speed(0);

		var left,
			clear = $.proxy(this.clear, this),
			previous = this.core.$stage.children().eq(this.previous),
			next = this.core.$stage.children().eq(this.next),
			incoming = this.core.settings.animateIn,
			outgoing = this.core.settings.animateOut;

		if (this.core.current() === this.previous) {
			return;
		}

		if (outgoing) {
			left = this.core.coordinates(this.previous) - this.core.coordinates(this.next);
			previous.css( { 'left': left + 'px' } )
				.addClass('animated owl-animated-out')
				.addClass(outgoing)
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', clear);
		}

		if (incoming) {
			next.addClass('animated owl-animated-in')
				.addClass(incoming)
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', clear);
		}
	};

	Animate.prototype.clear = function(e) {
		$(e.target).css( { 'left': '' } )
			.removeClass('animated owl-animated-out owl-animated-in')
			.removeClass(this.core.settings.animateIn)
			.removeClass(this.core.settings.animateOut);
		this.core.transitionEnd();
	}

	/**
	 * Destroys the plugin.
	 * @public
	 */
	Animate.prototype.destroy = function() {
		var handler, property;

		for (handler in this.handlers) {
			this.core.$element.off(handler, this.handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	};

	$.fn.owlCarousel.Constructor.Plugins.Animate = Animate;

})(window.Zepto || window.jQuery, window, document);

/**
 * Autoplay Plugin
 * @version 2.0.0
 * @author Bartosz Wojciechowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {

	/**
	 * Creates the autoplay plugin.
	 * @class The Autoplay Plugin
	 * @param {Owl} scope - The Owl Carousel
	 */
	var Autoplay = function(scope) {
		this.core = scope;
		this.core.options = $.extend({}, Autoplay.Defaults, this.core.options);

		this.handlers = {
			'translated.owl.carousel refreshed.owl.carousel': $.proxy(function() {
				this.autoplay();
			}, this),
			'play.owl.autoplay': $.proxy(function(e, t, s) {
				this.play(t, s);
			}, this),
			'stop.owl.autoplay': $.proxy(function() {
				this.stop();
			}, this),
			'mouseover.owl.autoplay': $.proxy(function() {
				if (this.core.settings.autoplayHoverPause) {
					this.pause();
				}
			}, this),
			'mouseleave.owl.autoplay': $.proxy(function() {
				if (this.core.settings.autoplayHoverPause) {
					this.autoplay();
				}
			}, this)
		};

		this.core.$element.on(this.handlers);
	};

	/**
	 * Default options.
	 * @public
	 */
	Autoplay.Defaults = {
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: false,
		autoplaySpeed: false
	};

	/**
	 * @protected
	 * @todo Must be documented.
	 */
	Autoplay.prototype.autoplay = function() {
		if (this.core.settings.autoplay && !this.core.state.videoPlay) {
			window.clearInterval(this.interval);

			this.interval = window.setInterval($.proxy(function() {
				this.play();
			}, this), this.core.settings.autoplayTimeout);
		} else {
			window.clearInterval(this.interval);
		}
	};

	/**
	 * Starts the autoplay.
	 * @public
	 * @param {Number} [timeout] - ...
	 * @param {Number} [speed] - ...
	 * @returns {Boolean|undefined} - ...
	 * @todo Must be documented.
	 */
	Autoplay.prototype.play = function(timeout, speed) {
		// if tab is inactive - doesnt work in <IE10
		if (document.hidden === true) {
			return;
		}

		if (this.core.state.isTouch || this.core.state.isScrolling
			|| this.core.state.isSwiping || this.core.state.inMotion) {
			return;
		}

		if (this.core.settings.autoplay === false) {
			window.clearInterval(this.interval);
			return;
		}

		this.core.next(this.core.settings.autoplaySpeed);
	};

	/**
	 * Stops the autoplay.
	 * @public
	 */
	Autoplay.prototype.stop = function() {
		window.clearInterval(this.interval);
	};

	/**
	 * Pauses the autoplay.
	 * @public
	 */
	Autoplay.prototype.pause = function() {
		window.clearInterval(this.interval);
	};

	/**
	 * Destroys the plugin.
	 */
	Autoplay.prototype.destroy = function() {
		var handler, property;

		window.clearInterval(this.interval);

		for (handler in this.handlers) {
			this.core.$element.off(handler, this.handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	};

	$.fn.owlCarousel.Constructor.Plugins.autoplay = Autoplay;

})(window.Zepto || window.jQuery, window, document);

/**
 * Navigation Plugin
 * @version 2.0.0
 * @author Artus Kolanowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {
	'use strict';

	/**
	 * Creates the navigation plugin.
	 * @class The Navigation Plugin
	 * @param {Owl} carousel - The Owl Carousel.
	 */
	var Navigation = function(carousel) {
		/**
		 * Reference to the core.
		 * @protected
		 * @type {Owl}
		 */
		this._core = carousel;

		/**
		 * Indicates whether the plugin is initialized or not.
		 * @protected
		 * @type {Boolean}
		 */
		this._initialized = false;

		/**
		 * The current paging indexes.
		 * @protected
		 * @type {Array}
		 */
		this._pages = [];

		/**
		 * All DOM elements of the user interface.
		 * @protected
		 * @type {Object}
		 */
		this._controls = {};

		/**
		 * Markup for an indicator.
		 * @protected
		 * @type {Array.<String>}
		 */
		this._templates = [];

		/**
		 * The carousel element.
		 * @type {jQuery}
		 */
		this.$element = this._core.$element;

		/**
		 * Overridden methods of the carousel.
		 * @protected
		 * @type {Object}
		 */
		this._overrides = {
			next: this._core.next,
			prev: this._core.prev,
			to: this._core.to
		};

		/**
		 * All event handlers.
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'prepared.owl.carousel': $.proxy(function(e) {
				if (this._core.settings.dotsData) {
					this._templates.push($(e.content).find('[data-dot]').andSelf('[data-dot]').attr('data-dot'));
				}
			}, this),
			'add.owl.carousel': $.proxy(function(e) {
				if (this._core.settings.dotsData) {
					this._templates.splice(e.position, 0, $(e.content).find('[data-dot]').andSelf('[data-dot]').attr('data-dot'));
				}
			}, this),
			'remove.owl.carousel prepared.owl.carousel': $.proxy(function(e) {
				if (this._core.settings.dotsData) {
					this._templates.splice(e.position, 1);
				}
			}, this),
			'change.owl.carousel': $.proxy(function(e) {
				if (e.property.name == 'position') {
					if (!this._core.state.revert && !this._core.settings.loop && this._core.settings.navRewind) {
						var current = this._core.current(),
							maximum = this._core.maximum(),
							minimum = this._core.minimum();
						e.data = e.property.value > maximum
							? current >= maximum ? minimum : maximum
							: e.property.value < minimum ? maximum : e.property.value;
					}
				}
			}, this),
			'changed.owl.carousel': $.proxy(function(e) {
				if (e.property.name == 'position') {
					this.draw();
				}
			}, this),
			'refreshed.owl.carousel': $.proxy(function() {
				if (!this._initialized) {
					this.initialize();
					this._initialized = true;
				}
				this._core.trigger('refresh', null, 'navigation');
				this.update();
				this.draw();
				this._core.trigger('refreshed', null, 'navigation');
			}, this)
		};

		// set default options
		this._core.options = $.extend({}, Navigation.Defaults, this._core.options);

		// register event handlers
		this.$element.on(this._handlers);
	}

	/**
	 * Default options.
	 * @public
	 * @todo Rename `slideBy` to `navBy`
	 */
	Navigation.Defaults = {
		nav: false,
		navRewind: true,
		navText: [ 'prev', 'next' ],
		navSpeed: false,
		navElement: 'div',
		navContainer: false,
		navContainerClass: 'owl-nav',
		navClass: [ 'owl-prev', 'owl-next' ],
		slideBy: 1,
		dotClass: 'owl-dot',
		dotsClass: 'owl-dots',
		dots: true,
		dotsEach: false,
		dotData: false,
		dotsSpeed: false,
		dotsContainer: false,
		controlsClass: 'owl-controls'
	}

	/**
	 * Initializes the layout of the plugin and extends the carousel.
	 * @protected
	 */
	Navigation.prototype.initialize = function() {
		var $container, override,
			options = this._core.settings;

		// create the indicator template
		if (!options.dotsData) {
			this._templates = [ $('<div>')
				.addClass(options.dotClass)
				.append($('<span>'))
				.prop('outerHTML') ];
		}

		// create controls container if needed
		if (!options.navContainer || !options.dotsContainer) {
			this._controls.$container = $('<div>')
				.addClass(options.controlsClass)
				.appendTo(this.$element);
		}

		// create DOM structure for absolute navigation
		this._controls.$indicators = options.dotsContainer ? $(options.dotsContainer)
			: $('<div>').hide().addClass(options.dotsClass).appendTo(this._controls.$container);

		this._controls.$indicators.on('click', 'div', $.proxy(function(e) {
			var index = $(e.target).parent().is(this._controls.$indicators)
				? $(e.target).index() : $(e.target).parent().index();

			e.preventDefault();

			this.to(index, options.dotsSpeed);
		}, this));

		// create DOM structure for relative navigation
		$container = options.navContainer ? $(options.navContainer)
			: $('<div>').addClass(options.navContainerClass).prependTo(this._controls.$container);

		this._controls.$next = $('<' + options.navElement + '>');
		this._controls.$previous = this._controls.$next.clone();

		this._controls.$previous
			.addClass(options.navClass[0])
			.html(options.navText[0])
			.hide()
			.prependTo($container)
			.on('click', $.proxy(function(e) {
				this.prev(options.navSpeed);
			}, this));
		this._controls.$next
			.addClass(options.navClass[1])
			.html(options.navText[1])
			.hide()
			.appendTo($container)
			.on('click', $.proxy(function(e) {
				this.next(options.navSpeed);
			}, this));

		// override public methods of the carousel
		for (override in this._overrides) {
			this._core[override] = $.proxy(this[override], this);
		}
	}

	/**
	 * Destroys the plugin.
	 * @protected
	 */
	Navigation.prototype.destroy = function() {
		var handler, control, property, override;

		for (handler in this._handlers) {
			this.$element.off(handler, this._handlers[handler]);
		}
		for (control in this._controls) {
			this._controls[control].remove();
		}
		for (override in this.overides) {
			this._core[override] = this._overrides[override];
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	}

	/**
	 * Updates the internal state.
	 * @protected
	 */
	Navigation.prototype.update = function() {
		var i, j, k,
			options = this._core.settings,
			lower = this._core.clones().length / 2,
			upper = lower + this._core.items().length,
			size = options.center || options.autoWidth || options.dotData
				? 1 : options.dotsEach || options.items;

		if (options.slideBy !== 'page') {
			options.slideBy = Math.min(options.slideBy, options.items);
		}

		if (options.dots || options.slideBy == 'page') {
			this._pages = [];

			for (i = lower, j = 0, k = 0; i < upper; i++) {
				if (j >= size || j === 0) {
					this._pages.push({
						start: i - lower,
						end: i - lower + size - 1
					});
					j = 0, ++k;
				}
				j += this._core.mergers(this._core.relative(i));
			}
		}
	}

	/**
	 * Draws the user interface.
	 * @todo The option `dotData` wont work.
	 * @protected
	 */
	Navigation.prototype.draw = function() {
		var difference, i, html = '',
			options = this._core.settings,
			$items = this._core.$stage.children(),
			index = this._core.relative(this._core.current());

		if (options.nav && !options.loop && !options.navRewind) {
			this._controls.$previous.toggleClass('disabled', index <= 0);
			this._controls.$next.toggleClass('disabled', index >= this._core.maximum());
		}

		this._controls.$previous.toggle(options.nav);
		this._controls.$next.toggle(options.nav);

		if (options.dots) {
			difference = this._pages.length - this._controls.$indicators.children().length;

			if (options.dotData && difference !== 0) {
				for (i = 0; i < this._controls.$indicators.children().length; i++) {
					html += this._templates[this._core.relative(i)];
				}
				this._controls.$indicators.html(html);
			} else if (difference > 0) {
				html = new Array(difference + 1).join(this._templates[0]);
				this._controls.$indicators.append(html);
			} else if (difference < 0) {
				this._controls.$indicators.children().slice(difference).remove();
			}

			this._controls.$indicators.find('.active').removeClass('active');
			this._controls.$indicators.children().eq($.inArray(this.current(), this._pages)).addClass('active');
		}

		this._controls.$indicators.toggle(options.dots);
	}

	/**
	 * Extends event data.
	 * @protected
	 * @param {Event} event - The event object which gets thrown.
	 */
	Navigation.prototype.onTrigger = function(event) {
		var settings = this._core.settings;

		event.page = {
			index: $.inArray(this.current(), this._pages),
			count: this._pages.length,
			size: settings && (settings.center || settings.autoWidth || settings.dotData
				? 1 : settings.dotsEach || settings.items)
		};
	}

	/**
	 * Gets the current page position of the carousel.
	 * @protected
	 * @returns {Number}
	 */
	Navigation.prototype.current = function() {
		var index = this._core.relative(this._core.current());
		return $.grep(this._pages, function(o) {
			return o.start <= index && o.end >= index;
		}).pop();
	}

	/**
	 * Gets the current succesor/predecessor position.
	 * @protected
	 * @returns {Number}
	 */
	Navigation.prototype.getPosition = function(successor) {
		var position, length,
			options = this._core.settings;

		if (options.slideBy == 'page') {
			position = $.inArray(this.current(), this._pages);
			length = this._pages.length;
			successor ? ++position : --position;
			position = this._pages[((position % length) + length) % length].start;
		} else {
			position = this._core.relative(this._core.current());
			length = this._core.items().length;
			successor ? position += options.slideBy : position -= options.slideBy;
		}
		return position;
	}

	/**
	 * Slides to the next item or page.
	 * @public
	 * @param {Number} [speed=false] - The time in milliseconds for the transition.
	 */
	Navigation.prototype.next = function(speed) {
		$.proxy(this._overrides.to, this._core)(this.getPosition(true), speed);
	}

	/**
	 * Slides to the previous item or page.
	 * @public
	 * @param {Number} [speed=false] - The time in milliseconds for the transition.
	 */
	Navigation.prototype.prev = function(speed) {
		$.proxy(this._overrides.to, this._core)(this.getPosition(false), speed);
	}

	/**
	 * Slides to the specified item or page.
	 * @public
	 * @param {Number} position - The position of the item or page.
	 * @param {Number} [speed] - The time in milliseconds for the transition.
	 * @param {Boolean} [standard=false] - Whether to use the standard behaviour or not.
	 */
	Navigation.prototype.to = function(position, speed, standard) {
		var length;

		if (!standard) {
			length = this._pages.length;
			$.proxy(this._overrides.to, this._core)(this._pages[((position % length) + length) % length].start, speed);
		} else {
			$.proxy(this._overrides.to, this._core)(position, speed);
		}
	}

	$.fn.owlCarousel.Constructor.Plugins.Navigation = Navigation;

})(window.Zepto || window.jQuery, window, document);

/**
 * Hash Plugin
 * @version 2.0.0
 * @author Artus Kolanowski
 * @license The MIT License (MIT)
 */
;(function($, window, document, undefined) {
	'use strict';

	/**
	 * Creates the hash plugin.
	 * @class The Hash Plugin
	 * @param {Owl} carousel - The Owl Carousel
	 */
	var Hash = function(carousel) {
		/**
		 * Reference to the core.
		 * @protected
		 * @type {Owl}
		 */
		this._core = carousel;

		/**
		 * Hash table for the hashes.
		 * @protected
		 * @type {Object}
		 */
		this._hashes = {};

		/**
		 * The carousel element.
		 * @type {jQuery}
		 */
		this.$element = this._core.$element;

		/**
		 * All event handlers.
		 * @protected
		 * @type {Object}
		 */
		this._handlers = {
			'initialized.owl.carousel': $.proxy(function() {
				if (this._core.settings.startPosition == 'URLHash') {
					$(window).trigger('hashchange.owl.navigation');
				}
			}, this),
			'prepared.owl.carousel': $.proxy(function(e) {
				var hash = $(e.content).find('[data-hash]').andSelf('[data-hash]').attr('data-hash');
				this._hashes[hash] = e.content;
			}, this)
		};

		// set default options
		this._core.options = $.extend({}, Hash.Defaults, this._core.options);

		// register the event handlers
		this.$element.on(this._handlers);

		// register event listener for hash navigation
		$(window).on('hashchange.owl.navigation', $.proxy(function() {
			var hash = window.location.hash.substring(1),
				items = this._core.$stage.children(),
				position = this._hashes[hash] && items.index(this._hashes[hash]) || 0;

			if (!hash) {
				return false;
			}

			this._core.to(position, false, true);
		}, this));
	}

	/**
	 * Default options.
	 * @public
	 */
	Hash.Defaults = {
		URLhashListener: false
	}

	/**
	 * Destroys the plugin.
	 * @public
	 */
	Hash.prototype.destroy = function() {
		var handler, property;

		$(window).off('hashchange.owl.navigation');

		for (handler in this._handlers) {
			this._core.$element.off(handler, this._handlers[handler]);
		}
		for (property in Object.getOwnPropertyNames(this)) {
			typeof this[property] != 'function' && (this[property] = null);
		}
	}

	$.fn.owlCarousel.Constructor.Plugins.Hash = Hash;

})(window.Zepto || window.jQuery, window, document);
	

	/*
 * jQuery spritely 0.6.7
 * http://spritely.net/
 *
 * Documentation:
 * http://spritely.net/documentation/
 *
 * Copyright 2010-2011, Peter Chater, Artlogic Media Ltd, http://www.artlogic.net/
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 */

(function($) {
    $._spritely = {
        // shared methods and variables used by spritely plugin
        instances: {},
        animate: function(options) {
            var el = $(options.el);
            var el_id = el.attr('id');
            if (!$._spritely.instances[el_id]) {
                return this;
            }
            options = $.extend(options, $._spritely.instances[el_id] || {});
            if (options.type == 'sprite' && options.fps) {
                if (options.play_frames && !$._spritely.instances[el_id]['remaining_frames']) {
                    $._spritely.instances[el_id]['remaining_frames'] = options.play_frames + 1;
                } else if (options.do_once && !$._spritely.instances[el_id]['remaining_frames']) {
                    $._spritely.instances[el_id]['remaining_frames'] = options.no_of_frames;
                }
                var frames;
                var animate = function(el) {
                    var w = options.width, h = options.height;
                    if (!frames) {
                        frames = [];
                        total = 0
                        for (var i = 0; i < options.no_of_frames; i ++) {
                            frames[frames.length] = (0 - total);
                            total += w;
                        }
                    }
                    if ($._spritely.instances[el_id]['current_frame'] == 0) {
                        if (options.on_first_frame) {
                            options.on_first_frame(el);
                        }
                    } else if ($._spritely.instances[el_id]['current_frame'] == frames.length - 1) {
                        if (options.on_last_frame) {
                            options.on_last_frame(el);
                        }
                    }
                    if (options.on_frame && options.on_frame[$._spritely.instances[el_id]['current_frame']]) {
                        options.on_frame[$._spritely.instances[el_id]['current_frame']](el);
                    }
                    if (options.rewind == true) {
                        if ($._spritely.instances[el_id]['current_frame'] <= 0) {
                            $._spritely.instances[el_id]['current_frame'] = frames.length - 1;
                        } else {
                            $._spritely.instances[el_id]['current_frame'] = $._spritely.instances[el_id]['current_frame'] - 1;
                        };
                    } else {
                        if ($._spritely.instances[el_id]['current_frame'] >= frames.length - 1) {
                            $._spritely.instances[el_id]['current_frame'] = 0;
                        } else {
                            $._spritely.instances[el_id]['current_frame'] = $._spritely.instances[el_id]['current_frame'] + 1;
                        }
                    }

                    var yPos = $._spritely.getBgY(el);
                    el.css('background-position', frames[$._spritely.instances[el_id]['current_frame']] + 'px ' + yPos);
                    if (options.bounce && options.bounce[0] > 0 && options.bounce[1] > 0) {
                        var ud = options.bounce[0]; // up-down
                        var lr = options.bounce[1]; // left-right
                        var ms = options.bounce[2]; // milliseconds
                        el
                            .animate({top: '+=' + ud + 'px', left: '-=' + lr + 'px'}, ms)
                            .animate({top: '-=' + ud + 'px', left: '+=' + lr + 'px'}, ms);
                    }
                }
                if ($._spritely.instances[el_id]['remaining_frames'] && $._spritely.instances[el_id]['remaining_frames'] > 0) {
                    $._spritely.instances[el_id]['remaining_frames'] --;
                    if ($._spritely.instances[el_id]['remaining_frames'] == 0) {
                        $._spritely.instances[el_id]['remaining_frames'] = -1;
                        delete $._spritely.instances[el_id]['remaining_frames'];
                        return this;
                    } else {
                        animate(el);
                    }
                } else if ($._spritely.instances[el_id]['remaining_frames'] != -1) {
                    animate(el);
                }
            } else if (options.type == 'pan') {
                if (!$._spritely.instances[el_id]['_stopped']) {

                    // As we pan, reduce the offset to the smallest possible
                    // value to ease the load on the browser. This step is
                    // skipped if the image hasn't loaded yet.
                    var speed = options.speed || 1,
                        start_x = $._spritely.instances[el_id]['l'] || parseInt($._spritely.getBgX(el).replace('px', ''), 10) || 0,
                        start_y = $._spritely.instances[el_id]['t'] || parseInt($._spritely.getBgY(el).replace('px', ''), 10) || 0;

                    if (options.do_once && !$._spritely.instances[el_id].remaining_frames || $._spritely.instances[el_id].remaining_frames <= 0) {
                        switch(options.dir) {
                            case 'up':
                            case 'down':
                                $._spritely.instances[el_id].remaining_frames = Math.floor((options.img_height || 0) / speed);
                                break;
                            case 'left':
                            case 'right':
                                $._spritely.instances[el_id].remaining_frames = Math.floor((options.img_width || 0) / speed);
                                break;
                        }
                        $._spritely.instances[el_id].remaining_frames++;
                    } else if (options.do_once) {
                        $._spritely.instances[el_id].remaining_frames--;
                    }

                    switch (options.dir) {

                        case 'up':
                            speed *= -1;
                        case 'down':
                            if (!$._spritely.instances[el_id]['l'])
                                $._spritely.instances[el_id]['l'] = start_x;
                            $._spritely.instances[el_id]['t'] = start_y + speed;
                            if (options.img_height)
                                $._spritely.instances[el_id]['t'] %= options.img_height;
                            break;

                        case 'left':
                            speed *= -1;
                        case 'right':
                            if (!$._spritely.instances[el_id]['t'])
                                $._spritely.instances[el_id]['t'] = start_y;
                            $._spritely.instances[el_id]['l'] = start_x + speed;
                            if (options.img_width)
                                $._spritely.instances[el_id]['l'] %= options.img_width;
                            break;

                    }

                    // When assembling the background-position string, care must be taken
                    // to ensure correct formatting.
                    var bg_left = $._spritely.instances[el_id]['l'].toString();
                    if (bg_left.indexOf('%') == -1) {
                        bg_left += 'px ';
                    } else {
                        bg_left += ' ';
                    }

                    var bg_top = $._spritely.instances[el_id]['t'].toString();
                    if (bg_top.indexOf('%') == -1) {
                        bg_top += 'px ';
                    } else {
                        bg_top += ' ';
                    }

                    $(el).css('background-position', bg_left + bg_top);

                    if (options.do_once && !$._spritely.instances[el_id].remaining_frames) {
                        return this;
                    }
                }
            }
            $._spritely.instances[el_id]['options'] = options;
            $._spritely.instances[el_id]['timeout'] = window.setTimeout(function() {
                $._spritely.animate(options);
            }, parseInt(1000 / options.fps));
        },
        randomIntBetween: function(lower, higher) {
            return parseInt(rand_no = Math.floor((higher - (lower - 1)) * Math.random()) + lower);
        },
        getBgUseXY: (function() {
            try {
                return typeof $('body').css('background-position-x') == 'string';
            } catch(e) {
                return false;
            }
        })(),
        getBgY: function(el) {
            if ($._spritely.getBgUseXY) {
                return $(el).css('background-position-y') || '0';
            } else {
                return ($(el).css('background-position') || ' ').split(' ')[1];
            }
        },
        getBgX: function(el) {
            if ($._spritely.getBgUseXY) {
                return $(el).css('background-position-x') || '0';
            } else {
                return ($(el).css('background-position') || ' ').split(' ')[0];
            }
        },
        get_rel_pos: function(pos, w) {
            // return the position of an item relative to a background
            // image of width given by w
            var r = pos;
            if (pos < 0) {
                while (r < 0) {
                    r += w;
                }
            } else {
                while (r > w) {
                    r -= w;
                }
            }
            return r;
        },

        _spStrip: function(s, chars) {
            // Strip any character in 'chars' from the beginning or end of
            // 'str'. Like Python's .strip() method, or jQuery's $.trim()
            // function (but allowing you to specify the characters).
            while (s.length) {
                var i, sr, nos = false, noe = false;
                for (i=0;i<chars.length;i++) {
                    var ss = s.slice(0, 1);
                    sr = s.slice(1);
                    if (chars.indexOf(ss) > -1)
                        s = sr;
                    else
                        nos = true;
                }
                for (i=0;i<chars.length;i++) {
                    var se = s.slice(-1);
                    sr = s.slice(0, -1);
                    if (chars.indexOf(se) > -1)
                        s = sr;
                    else
                        noe = true;
                }
                if (nos && noe)
                    return s;
            }
            return '';
        }
    };
    $.fn.extend({

        spritely: function(options) {

            var $this = $(this),
                el_id = $this.attr('id'),
                
                options = $.extend({
                    type: 'sprite',
                    do_once: false,
                    width: null,
                    height: null,
                    img_width: 0,
                    img_height: 0,
                    fps: 12,
                    no_of_frames: 2,
                    play_frames: 0
                }, options || {}),

                background_image = (new Image()),
                background_image_src = $._spritely._spStrip($this.css('background-image') || '', 'url("); ');

                if (!$._spritely.instances[el_id]) {
                    if (options.start_at_frame) {
                        $._spritely.instances[el_id] = {current_frame: options.start_at_frame - 1};
                    } else {
                        $._spritely.instances[el_id] = {current_frame: -1};
                    }
                }

                $._spritely.instances[el_id]['type'] = options.type;
                $._spritely.instances[el_id]['depth'] = options.depth;

                options.el = $this;
                options.width = options.width || $this.width() || 100;
                options.height = options.height || $this.height() || 100;

            background_image.onload = function() {

                options.img_width = background_image.width;
                options.img_height = background_image.height;

                options.img = background_image;
                var get_rate = function() {
                    return parseInt(1000 / options.fps);
                }

                if (!options.do_once) {
                    setTimeout(function() {
                        $._spritely.animate(options);
                    }, get_rate(options.fps));
                } else {
                    setTimeout(function() {
                        $._spritely.animate(options);
                    }, 0);
                }

            }

            background_image.src = background_image_src;

            return this;

        },

        sprite: function(options) {
            var options = $.extend({
                type: 'sprite',
                bounce: [0, 0, 1000] // up-down, left-right, milliseconds
            }, options || {});
            return $(this).spritely(options);
        },
        pan: function(options) {
            var options = $.extend({
                type: 'pan',
                dir: 'left',
                continuous: true,
                speed: 1 // 1 pixel per frame
            }, options || {});
            return $(this).spritely(options);
        },
        flyToTap: function(options) {
            var options = $.extend({
                el_to_move: null,
                type: 'moveToTap',
                ms: 1000, // milliseconds
                do_once: true
            }, options || {});
            if (options.el_to_move) {
                $(options.el_to_move).active();
            }
            if ($._spritely.activeSprite) {
                //if (window.Touch) { // iphone method see http://cubiq.org/remove-onclick-delay-on-webkit-for-iphone/9 or http://www.nimblekit.com/tutorials.html for clues...
                if ('ontouchstart' in document){
                  $(this)[0].ontouchstart = function(e) {
                        var el_to_move = $._spritely.activeSprite;
                        var touch = e.touches[0];
                        var t = touch.pageY - (el_to_move.height() / 2);
                        var l = touch.pageX - (el_to_move.width() / 2);
                        el_to_move.animate({
                            top: t + 'px',
                            left: l + 'px'
                        }, 1000);
                    };
                } else {
                    $(this).click(function(e) {
                        var el_to_move = $._spritely.activeSprite;
                        $(el_to_move).stop(true);
                        var w = el_to_move.width();
                        var h = el_to_move.height();
                        var l = e.pageX - (w / 2);
                        var t = e.pageY - (h / 2);
                        el_to_move.animate({
                            top: t + 'px',
                            left: l + 'px'
                        }, 1000);
                    });
                }
            }
            return this;
        },
        // isDraggable requires jQuery ui
        isDraggable: function(options) {
            if ((!$(this).draggable)) {
                //console.log('To use the isDraggable method you need to load jquery-ui.js');
                return this;
            }
            var options = $.extend({
                type: 'isDraggable',
                start: null,
                stop: null,
                drag: null
            }, options || {});
            var el_id = $(this).attr('id');
            if (!$._spritely.instances[el_id]) {
                return this;
            }
            $._spritely.instances[el_id].isDraggableOptions = options;
            $(this).draggable({
                start: function() {
                    var el_id = $(this).attr('id');
                    $._spritely.instances[el_id].stop_random = true;
                    $(this).stop(true);
                    if ($._spritely.instances[el_id].isDraggableOptions.start) {
                        $._spritely.instances[el_id].isDraggableOptions.start(this);
                    }
                },
                drag: options.drag,
                stop: function() {
                    var el_id = $(this).attr('id');
                    $._spritely.instances[el_id].stop_random = false;
                    if ($._spritely.instances[el_id].isDraggableOptions.stop) {
                        $._spritely.instances[el_id].isDraggableOptions.stop(this);
                    }
                }
            });
            return this;
        },
        active: function() {
            // the active sprite
            $._spritely.activeSprite = this;
            return this;
        },
        activeOnClick: function() {
            // make this the active script if clicked...
            var el = $(this);
            //if (window.Touch) { // iphone method see http://cubiq.org/remove-onclick-delay-on-webkit-for-iphone/9 or http://www.nimblekit.com/tutorials.html for clues...
            if ('ontouchstart' in document){
                el[0].ontouchstart = function(e) {
                    $._spritely.activeSprite = el;
                };
            } else {
                el.click(function(e) {
                    $._spritely.activeSprite = el;
                });
            }
            return this;
        },
        spRandom: function(options) {
            var options = $.extend({
                top: 50,
                left: 50,
                right: 290,
                bottom: 320,
                speed: 4000,
                pause: 0
            }, options || {});
            var el_id = $(this).attr('id');
            if (!$._spritely.instances[el_id]) {
                return this;
            }
            if (!$._spritely.instances[el_id].stop_random) {
                var r = $._spritely.randomIntBetween;
                var t = r(options.top, options.bottom);
                var l = r(options.left, options.right);
                $('#' + el_id).animate({
                    top: t + 'px',
                    left: l + 'px'
                }, options.speed)
            }
            window.setTimeout(function() {
                $('#' + el_id).spRandom(options);
            }, options.speed + options.pause)
            return this;
        },
        makeAbsolute: function() {
            // remove an element from its current position in the DOM and
            // position it absolutely, appended to the body tag.
            return this.each(function() {
                var el = $(this);
                var pos = el.position();
                el.css({position: "absolute", marginLeft: 0, marginTop: 0, top: pos.top, left: pos.left })
                    .remove()
                    .appendTo("body");
            });

        },
        spSet: function(prop_name, prop_value) {
            var el_id = $(this).attr('id');
            $._spritely.instances[el_id][prop_name] = prop_value;
            return this;
        },
        spGet: function(prop_name, prop_value) {
            var el_id = $(this).attr('id');
            return $._spritely.instances[el_id][prop_name];
        },
        spStop: function(bool) {
            this.each(function() {
                var $this = $(this),
                    el_id = $this.attr('id');
                if ($._spritely.instances[el_id]['options']['fps']) {
                    $._spritely.instances[el_id]['_last_fps'] = $._spritely.instances[el_id]['options']['fps'];
                }
                if ($._spritely.instances[el_id]['type'] == 'sprite') {
                    $this.spSet('fps', 0);
                }
                $._spritely.instances[el_id]['_stopped'] = true;
                $._spritely.instances[el_id]['_stopped_f1'] = bool;
                if (bool) {
                    // set background image position to 0
                    var bp_top = $._spritely.getBgY($(this));
                    $this.css('background-position', '0 ' + bp_top);
                }
            });
            return this;
        },
        spStart: function() {
            $(this).each(function() {
                var el_id = $(this).attr('id');
                var fps = $._spritely.instances[el_id]['_last_fps'] || 12;
                if ($._spritely.instances[el_id]['type'] == 'sprite') {
                    $(this).spSet('fps', fps);
                }
                $._spritely.instances[el_id]['_stopped'] = false;
            });
            return this;
        },
        spToggle: function() {
            var el_id = $(this).attr('id');
            var stopped = $._spritely.instances[el_id]['_stopped'] || false;
            var stopped_f1 = $._spritely.instances[el_id]['_stopped_f1'] || false;
            if (stopped) {
                $(this).spStart();
            } else {
                $(this).spStop(stopped_f1);
            }
            return this;
        },
        fps: function(fps) {
            $(this).each(function() {
                $(this).spSet('fps', fps);
            });
            return this;
        },
        goToFrame: function(n) {
            var el_id = $(this).attr('id');
            if ($._spritely.instances && $._spritely.instances[el_id]) {
                $._spritely.instances[el_id]['current_frame'] = n - 1;
            }
            return this;
        },
        spSpeed: function(speed) {
            $(this).each(function() {
                $(this).spSet('speed', speed);
            });
            return this;
        },
        spRelSpeed: function(speed) {
            $(this).each(function() {
                var rel_depth = $(this).spGet('depth') / 100;
                $(this).spSet('speed', speed * rel_depth);
            });
            return this;
        },
        spChangeDir: function(dir) {
            $(this).each(function() {
                $(this).spSet('dir', dir);
            });
            return this;
        },
        spState: function(n) {
            $(this).each(function() {
                // change state of a sprite, where state is the vertical
                // position of the background image (e.g. frames row)
                var yPos = ((n - 1) * $(this).height()) + 'px';
                var xPos = $._spritely.getBgX($(this));
                var bp = xPos + ' -' + yPos;
                $(this).css('background-position', bp);
            });
            return this;
        },
        lockTo: function(el, options) {
            $(this).each(function() {
                var el_id = $(this).attr('id');
                if (!$._spritely.instances[el_id]) {
                    return this;
                }
                $._spritely.instances[el_id]['locked_el'] = $(this);
                $._spritely.instances[el_id]['lock_to'] = $(el);
                $._spritely.instances[el_id]['lock_to_options'] = options;
                $._spritely.instances[el_id]['interval'] = window.setInterval(function() {
                    if ($._spritely.instances[el_id]['lock_to']) {
                        var locked_el = $._spritely.instances[el_id]['locked_el'];
                        var locked_to_el = $._spritely.instances[el_id]['lock_to'];
                        var locked_to_options = $._spritely.instances[el_id]['lock_to_options'];
                        var locked_to_el_w = locked_to_options.bg_img_width;
                        var locked_to_el_h = locked_to_el.height();
                        var locked_to_el_y = $._spritely.getBgY(locked_to_el);
                        var locked_to_el_x = $._spritely.getBgX(locked_to_el);
                        var el_l = (parseInt(locked_to_el_x) + parseInt(locked_to_options['left']));
                        var el_t = (parseInt(locked_to_el_y) + parseInt(locked_to_options['top']));
                        el_l = $._spritely.get_rel_pos(el_l, locked_to_el_w);
                        $(locked_el).css({
                            'top': el_t + 'px',
                            'left': el_l + 'px'
                        });
                    }
                }, options.interval || 20);
            });
            return this;
        },
        destroy: function() {
            var el = $(this);
            var el_id = $(this).attr('id');
            if ($._spritely.instances[el_id] && $._spritely.instances[el_id]['timeout']){
                window.clearTimeout($._spritely.instances[el_id]['timeout']);
            }
            if ($._spritely.instances[el_id] && $._spritely.instances[el_id]['interval']) {
                window.clearInterval($._spritely.instances[el_id]['interval']);
            }
            delete $._spritely.instances[el_id]
            return this;
        }
    })
})(jQuery);
// Stop IE6 re-loading background images continuously
try {
  document.execCommand("BackgroundImageCache", false, true);
} catch(err) {} 

	

	/////////////////////////////////
// carouFredSel
/////////////////////////////////
$(function() {
	$(".slides").owlCarousel({
		items: 7,
		loop: true,
		autoPlay: 10000,
		addClassActive: true,
		navigationText : ["prev","next"]
	});
	$(".slides2").owlCarousel({
		items: 7,
		loop: true,
		autoPlay: 10000,
		addClassActive: true,
		navigationText : ["prev","next"]
	});
	$(".slides3").owlCarousel({
		items: 7,
		loop: true,
		autoPlay: 10000,
		addClassActive: true,
		navigationText : ["prev","next"]
	});
	var owl = $(".slides").data('owlCarousel');
	$('.slider-next').click(function(){
		owl.prev();
	});
	$('.slider-prev').click(function(){
		owl.next();
	});
	var owl2 = $(".slides2").data('owlCarousel');
	$('.slider-next2').click(function(){
		owl2.prev();
	});
	$('.slider-prev2').click(function(){
		owl2.next();
	});
	var owl3 = $(".slides3").data('owlCarousel');
	$('.slider-next3').click(function(){
		owl3.prev();
	});
	$('.slider-prev3').click(function(){
		owl3.next();
	});
});


	$(document).ready(function(){

		$('.ratioBottom').pan({fps: 30, speed: 1, dir: 'left', depth: 70});

		$('.ratioBottomHeader').pan({fps: 30, speed: 1, dir: 'left', depth: 70});

	});

	</script>
</head>
<body class="rtl home blog">
<script type="text/javascript">

$(window).scroll(function(){

    if( $(this).scrollTop() > 20 ) {

        $('[data-style]').each(function(els, el){

            $(el).attr('style', $(el).data('style'));

        });

    }

});

</script>
<div class="header">
<div class="container">
<a href="http://3rab.co">
<div class="logo">
<em class="let1">C</em>
<em class="let2">i</em>
<em class="let3">m</em>
<em class="let4">a</em>
<em class="let5">4</em>
<em class="let6">u</em>
</div>
</a>
<div class="mainMenu">
  
             <?php wp_nav_menu(array('menu' => 'VO_main', 'theme_location' => 'VO_main', 'depth' => 2, 'container' => 'div', 'container_class' => 'navbar-collapse nav-main-collapse collapse', 'container_id' => '', 'menu_class' => 'nav nav-pills nav-main', 'menu_id' => 'topMain', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new wp_bootstrap_navwalker())); ?></a></li>

</div>
<div class="searchButton" onclick="$('.searchForm').toggleClass('active');$('html, body').animate({scrollTop: 0}, 500);">
<i class="fa fa-search"></i>
</div>
</div>
<div class="ratioMasterHeader">
<div class="ratioBottomHeader"></div>
</div>
</div>
<div class="searchForm">
<form action="/" method="GET">
<input type="text" name="s" placeholder="ابحث عن الذي تريده من هنا ...">
<button type="submit"><i class="fa fa-search"></i> بحث</button>
</form>
</div>
<style type="text/css">
.ratings .post-ratings-loading {
    display: none;
}
.ratings > div {
    height: 100%;
    padding: 9px 12px;
}
.ratings {
    position: absolute;
    top: 0;
    left: 50%;
    width: auto !important;
    font-size: 0;
    margin-left: -600px !important;
    height: 100% !important;
}
</style>
<div style="height:70px;"></div>
<div style="height:450px;" class="rencersBanner">
<div class='l1'>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
<div class='l2'>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
<div class='l3'>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
<span class="pointCima4u">
<i class="fa fa-play"></i>
</span>
<div class="cinema4all">
السينما للجميع
</div>
<div class="cima4uLogo">
<span class="let1">C</span>
<span class="let2">I</span>
<span class="let3">M</span>
<span class="let4">A</span>
<span class="let5">4</span>
<span class="let6">U</span>
</div>
<div class="watchAnddownload">
لمشاهدة احدث الافلام والمسلسلات
</div>
</div>
<script type="text/javascript">

$(window).load(function(){

	$('.rencersBanner').addClass('active');

	
	setTimeout(function(){

		$('.logo').addClass('active');

	},1700);

	
});

</script>
<div class="ratioMaster">
<div class="ratioBottom"></div>
</div>
<div style="height:10px;"></div>
<script type="text/javascript">

$(document).ready(function(){

	$('.filter > div > ul > li').click(function(){

		$('.filter > div > ul > li').removeClass('active');

		$(this).addClass('active');

		$('#dataTab').html('<div class="wrap"> <div class="loader"></div> <div class="loaderbefore"></div> <div class="circular"></div> <div class="circular another"></div> <div class="text">يرجي الانتظار</div> </div> ');

		$.ajax({

			url: 'http://cima4u.tv/wp-content/themes/YourColor/filter/'+$(this).data('filter')+'.php',

			type:'GET',

			success: function(msg) {

				$('#dataTab').html(msg);

			}

		});

	});

});

</script>