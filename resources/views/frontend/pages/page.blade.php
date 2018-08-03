<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Dashboard</title>

	<link href="{{ asset('html/css/bootstrap.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="{{ asset('html/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/grid.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/custom-checkbox.css') }}" rel="stylesheet">
	<link href="{{ asset('html/js/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/pages.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
	<!--<div class="page-loading"></div>-->
	<div class="pages">
        <div class="content-page">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-12 text-center"><strong>Terminanzeige - Montag, 28.05.2018 (KW 22)</strong></div>
                </div>
            </div>
            <div class="main-page">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs tab-menu">
                            <li class="item" data-for="#tag"><a  data-toggle="tab" href="#tag" class="tag" href="javascript:;"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Tag</a></li>
                            <li class="item" data-for="#woche"><a data-toggle="tab" href="#woche" class="tag" href="javascript:;"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Woche</a></li>
                            <li class="item" data-for="#suche"><a data-toggle="tab" href="#suche" class="tag" href="javascript:;"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Suche</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tag" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-6">                     
                                        <p><b>Terminstatus</b>:<i class="online fa fa-circle" aria-hidden="true"></i> Buchung</p>
                                        <p>Farbe:	auto</p>
                                        <p>Anrede:</p>
                                        <p>Vorname:	Antonio</p>
                                        <p><b>Name</b>:	amador benavides</p>
                                        <p>Ort:	mostoles</p>
                                        <p>Telefon:	645263886</p>                             
                                        <p>E-Mail:	</p>
                                        <p>E-Mail Adresse wiederholen:	</p>                               
                                        <p>Interne Bemerkung:	</p>
                                        <p>Terminerinnerung per E-Mail:	</p>
                                        <p>Terminerinnerung per SMS:	4 Tage vor Termin</p>
                                        <p>SMS Telefon:	0034 645263886</p>
                                        <p><b>Beschreibung</b>:	</p>
                                        <p>Betrag:	</p>
                                        <p>Estado:	</p>
                                        <p>Sprache:	Spanisch</p>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="row"> <div class="col-md-6"><p><b>Terminmerkmale</b>:</p></div> <div class="col-md-6"></div></div>
                                        <div class="row"><div class="col-md-6"><p>Gewünschte Behandlung:</p></div> <div class="col-md-6"><p>Atlaskorrektur (1. Termin) ca. 80 Min.</p></div></div>
                                        <div class="line"></div>
                                        <div class="row"><div class="col-md-6"><p><b>Termindauer:</b></p></div> <div class="col-md-6"></div></div>
                                        <div class="row"><div class="col-md-6"><p><b>in Minuten:</b></p></div> <div class="col-md-6"><p>90</p></div></div>
                                        <div class="row"><div class="col-md-6"><p><b>Uhrzeit:</b></p></div> <div class="col-md-6"><p>10:00</p></div></div>
                                        <div class="row"><div class="col-md-6"><p><b>Datum:</b></p></div> <div class="col-md-6"><p>28.05.2018</p></div></div>
                                        <div class="line"></div> 
                                        <div class="row"><div class="col-md-6"><p>Bearbeitet:</p></div><div class="col-md-6"><p>Ja</p></div> </div>
                                    </div>
                                </div>
                            </div>
                            <div id="woche" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6"><p>Behandler:</p></div> <div class="col-md-6"><p><b>Javier García</b></p></div>
                                    <div class="col-md-12"><div class="line"></div></div>
                                    <div class="col-md-6"><p>Adresse:</p></div> <div class="col-md-6"><p>C/Hungría, 3.ESP-28943 Fuenlabrada (Madrid)</p></div>
                                </div>
                            </div>
                            <div id="suche" class="tab-pane fade">
                                <p><a href="#">Neue Nachricht senden</a></p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Betreff</th>
                                            <th>An</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24.05.2018 10:01:06</td>
                                            <td>Recordatorio</td>
                                            <td>SMS: 0034645263886</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('html/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('html/js/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
	<script src="{{ asset('html/js/main.js') }}"></script>
</body>