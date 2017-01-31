<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Mobile Adm</title>

   <link rel="stylesheet" href="Css/mobile.css" />
   <link href="Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
  </head>
  <body class="lmi-body-bg">
    <div class="box-full-linha"> </div>

<div class="box-full">
     <div class="box-center">
           <div class="box-menu">  <img src="Imagens/menu2.png" alt=""> </div>
           <a href="#">
              <div class="box-participar"><br> Participar </div>
          </a>




          <div class="prop-herizontal">
                 <p>ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>
          </div>

      </div>
</div>



  <div class="box-center">
  <div class="box-logo">
          <img src="Imagens/advlogo.png" alt="">
  </div>

  </div>

  <div class="box-seta">  </div>

</div>


<div class="box-full">
  <div class="box-center">
  <div class="box-body">
    <div class="container-a">

    </div>
  </div>
</div>
</div>

  </body>
</html>


.lmi-body-bg{
	width: 100%;
	height: 100%;
	 background-image: url('../Imagens/bg4.jpg');
		background-repeat: no-repeat;
		background-color: #000000;
	background-position: center center;
	background-attachment: fixed;
	 background-size: cover; /*Css padrão*/
	-webkit-background-size: cover; /*Css safari e chrome*/
	-moz-background-size: cover; /*Css firefox*/
	-ms-background-size: cover; /*Css IE não use mer#^@%#*/
	-o-background-size: cover; /*Css Opera*/
	margin: 0in;
}



/*------- BOX BASE ------------------*/

.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
.box-full{	width: 100%;	height: auto;	display: block;	background-color: #8bc34a;}
.box-center{ width: 1200px; height: auto; display: block;	margin-left: auto;	margin-right: auto; }


.altura01{ height: 100px; background-color: #ef6c00; }
.altura02{ height: 200px; background-color: #a5d6a7; }
.altura03{ height: 300px; background-color: #78909c; }


/*------------------------------------------------------------*/

.box-menu{ display: none;}

/*--- BOTAO PARTICIPAR -----*/
.box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
.box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
a { text-decoration: none;}

/*------------------------------------------------------------*/
.height-header{ height: 550px; background-color: red;}
.prop-herizontal{width: 100%;	height: 30px;	margin-top: 40px; display: block; background-color: pink;}

/*--- LOGO E SETA -----*/
.box-logo{width: 200px;height: 210px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
.box-logo img{ width: 200px;	height: 210px;}
.box-seta{display: none;}

/*---- BODY ------*/
.box-body{width: 100%; height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/


/*==========  Mobile First Method  ==========*/


/*========= MEDIA QUERY INICIO ===========================================*/


/*--- Mobile portrait ---*/
@media only screen and (min-width : 320px) and (max-width : 480px) {

	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 100%;height: 100px;display: block;	margin-left: auto;	margin-right: auto;	}

/*------------------------------------------------------------*/

	.box-menu{ width: 50px;	height: 50px; margin-top: 5px;	display: block;	float: right; margin-right: 5px; border-radius: 5px; }
  .box-menu img{ width: 40px;	height: 40px;}
	.box-menu:hover img{ width: 50px;	height: 50px;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/

  .prop-herizontal{width: 100%;	height: 30px;	display: block;}

/*--- LOGO E SETA -----*/
  .box-logo{width: 120px;height: 130px; display: block; margin-top: 30px; margin-bottom: 30px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
  .box-logo img{ width: 120px;	height: 130px;}
 .box-seta{width: 60px;height: 30px; display: block; margin-top: 90px; 	margin-left: auto;	margin-right: auto;	background-color: #607d8b;}

/*---- BODY ------*/
.box-body{width: 100%;height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/
}


/*--- Mobile landscape ---*/
@media only screen and (min-width : 480px) and (max-width : 595px) {
	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 100%;height: 100px;display: block;	margin-left: auto;	margin-right: auto;	}

/*------------------------------------------------------------*/

.box-menu{ width: 50px;	height: 50px; margin-top: 5px;	display: block;	float: right; margin-right: 5px; border-radius: 5px; }
.box-menu img{ width: 40px;	height: 40px;}
.box-menu:hover img{ width: 50px;	height: 50px;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/

  .prop-herizontal{width: 100%;	height: 30px;	display: block;}

/*--- LOGO E SETA -----*/
  .box-logo{width: 160px;height: 170px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
  .box-logo img{ width: 160px;	height: 170px;}
 .box-seta{width: 60px;height: 30px; display: block; margin-top: 90px; 	margin-left: auto;	margin-right: auto;	background-color: #607d8b;}

/*---- BODY ------*/
.box-body{width: 100%;height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/
}

/*--- Small tablet portrait ---*/
@media only screen and (min-width : 595px) and (max-width : 690px) {

	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 100%;height: 100px;display: block;	margin-left: auto;	margin-right: auto;	}

/*------------------------------------------------------------*/

.box-menu{ width: 50px;	height: 50px; margin-top: 5px;	display: block;	float: right; margin-right: 5px; border-radius: 5px; }
.box-menu img{ width: 40px;	height: 40px;}
.box-menu:hover img{ width: 50px;	height: 50px;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 18px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/

  .prop-herizontal{width: 100%;	height: 30px;	display: block;}

/*--- LOGO E SETA -----*/
  .box-logo{width: 200px;height: 210px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
  .box-logo img{ width: 200px;	height: 210px;}

 .box-seta{width: 60px;height: 30px; display: block; margin-top: 90px; 	margin-left: auto;	margin-right: auto;	background-color: #607d8b;}

/*---- BODY ------*/
.box-body{width: 100%;height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/
}

/*--- Tablet portrait ---*/
@media only screen and (min-width : 690px) and (max-width : 800px) {

	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 100%;height: 100px;display: block;	margin-left: auto;	margin-right: auto;	}

/*------------------------------------------------------------*/

.box-menu{ width: 50px;	height: 50px; margin-top: 5px;	display: block;	float: right; margin-right: 5px; border-radius: 5px; }
.box-menu img{ width: 40px;	height: 40px;}
.box-menu:hover img{ width: 50px;	height: 50px;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/
.height-header{ height: 600px; background-color: yellow;}
  .prop-herizontal{width: 100%;	height: 30px;	display: block;}

/*--- LOGO E SETA -----*/
  .box-logo{width: 200px;height: 210px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 60px; margin-left: auto;	margin-right: auto;	}
  .box-logo img{ width: 200px;	height: 210px;}
	.box-seta{width: 60px;height: 30px; display: block; margin-top: 380px; 	margin-left: auto;	margin-right: auto;	background-color: #607d8b;}


/*---- BODY ------*/
.box-body{width: 100%;height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 0px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/
}



/*--- Small tablet landscape ---*/
@media only screen and (min-width : 800px) and (max-width : 1024px) {

	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 100%; height: auto; display: block;	margin-left: auto;	margin-right: auto; }

/*------------------------------------------------------------*/

.box-menu{ display: none;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/
  .height-header{ height: 550px;}
  .prop-herizontal{width: 100%;	height: 30px;	margin-top: 40px; display: block; background-color: pink;}

/*--- LOGO E SETA -----*/
.box-logo{width: 200px;height: 210px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
.box-logo img{ width: 200px;	height: 210px;}
 .box-seta{display: none;}

/*---- BODY ------*/
.box-body{width: 100%; height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/


}

/*--- Tablet landscape --- */
@media only screen and (min-width : 1024px) and (max-width : 1200px) {

	.box-full-linha{	width: 100%;	height: 3px;	display: block;	background-color:#e65100;	}
	.box-full{	width: 100%;	height: auto;	display: block;	}
	.box-center{ width: 1200px; height: auto; display: block;	margin-left: auto;	margin-right: auto; }

/*------------------------------------------------------------*/

.box-menu{ display: none;}

/*--- BOTAO PARTICIPAR -----*/
  .box-participar{width: 150px;	height: 35px; display: block;  margin-left: auto;	margin-right: auto; }
  .box-participar{	color: #33691e;		text-align: center;		font-size: 16px; font-family: 'Love Ya Like A Sister', cursive;}
	.box-participar:hover{ color: #e65100; border-bottom: 2px solid #e65100;}
	a { text-decoration: none;}

/*------------------------------------------------------------*/
  .height-header{ height: 550px;}
  .prop-herizontal{width: 100%;	height: 30px;	margin-top: 40px; display: block; background-color: pink;}

/*--- LOGO E SETA -----*/
.box-logo{width: 200px;height: 210px; display: block; margin-top: 60px; margin-bottom: 60px;	border-radius: 50px; margin-left: auto;	margin-right: auto;	}
.box-logo img{ width: 200px;	height: 210px;}
 .box-seta{display: none;}

/*---- BODY ------*/
.box-body{width: 100%; height: 300px; padding: 10px;   box-sizing: border-box; display: block; margin-top: 10px; 	border-radius: 0px; margin-left: auto;	margin-right: auto;	}
.container-a{width: 100%; height: 300px; display: block; background-color:#a5d6a7;}
/*---- FIM DO BODY ------*/


}




/*========= MEDIA QUERY FIM ===========================================*/
