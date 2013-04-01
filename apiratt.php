<?php
/**
* Clasa ce defineste principalele caracteristici ale statii. Folosita pentru emularea datelor
* https://spreadsheets.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0AtCtEmR70abcdG5ZaWRpRnI5dTFlUXN3U3Y0c0N2Wmc&output=html
*/
class Statie
{
	protected $_statii = array(
				array("idStatie" => "2650","LongName" => "Strada Moldovei / Aleea Ghirodei (Ialomitei)","ShortName" => "Moldovei"),
				array("idStatie" => "2652","LongName" => "Strada Ialomitei / Aleea Ghirodei (Ialomitei)","ShortName" => "Ialomitei"),
				array("idStatie" => "2653","LongName" => "Strada Moldovei / Aleea Ghirodei (Uzinei)","ShortName" => "Moldovei"),
				array("idStatie" => "2654","LongName" => "Strada Prieteniei / Aleea Ghirodei (Uzinei)","ShortName" => "Prieteniei"),
				array("idStatie" => "2655","LongName" => "Strada Spartacus / Aleea Ghirodei (Uzinei)","ShortName" => "Spartacus"),
				array("idStatie" => "2656","LongName" => "Strada Bobalna / Aleea Ghirodei (Uzinei)","ShortName" => "Bobalna"),
				array("idStatie" => "2661","LongName" => "Strada Valisoara / Cartier Crisana (Ialomitei)","ShortName" => "Valisoara"),
				array("idStatie" => "2663","LongName" => "Strada Luncani / Cartier Crisana (Ialomitei)","ShortName" => "Luncani"),
				array("idStatie" => "2666","LongName" => "Piata Mocioni / Sinaia (Gara de Sud)","ShortName" => "Sinaia"),
				array("idStatie" => "2667","LongName" => "Strada Brancoveanu / B-dul 16 Dec. 1989 (Sanmihai)","ShortName" => "Brancoveanu"),
				array("idStatie" => "2668","LongName" => "Piata Iuliu Maniu (Pod C. Sagului)","ShortName" => "P-ta I. Maniu"),
				array("idStatie" => "2669","LongName" => "Arta Textila (Pod C. Sagului)","ShortName" => "Profi"),
				array("idStatie" => "2671","LongName" => "Str. Gheorghe Baritiu (Gheorghe Baritiu)","ShortName" => "Ghe. Baritiu"),
				array("idStatie" => "2672","LongName" => "Str. Gheorghe Baritiu (Ion Ionescu de la Brad)","ShortName" => "Ghe. Baritiu"),
				array("idStatie" => "2673","LongName" => "Dermatina (Mocioni)","ShortName" => "Dermatina"),
				array("idStatie" => "2675","LongName" => "BATMA / Petrom (Cefin)","ShortName" => "BATMA"),
				array("idStatie" => "2679","LongName" => "Auto Europa / CET Sud (Cefin)","ShortName" => "Cet Sud"),
				array("idStatie" => "2680","LongName" => "Metro (Cefin)","ShortName" => "Metro"),
				array("idStatie" => "2682","LongName" => "Cefin Iveco (Mocioni)","ShortName" => "Cefin"),
				array("idStatie" => "2684","LongName" => "Auto Europa / CET Sud (Mocioni)","ShortName" => "Cet Sud"),
				array("idStatie" => "2685","LongName" => "BATMA / Petrom (Mocioni)","ShortName" => "BATMA"),
				array("idStatie" => "2687","LongName" => "Dermatina (Pod C. Sagului)","ShortName" => "Dermatina"),
				array("idStatie" => "2690","LongName" => "Arta Textila (Apateu)","ShortName" => "Profi"),
				array("idStatie" => "2691","LongName" => "Piata Iuliu Maniu (Catedrala)","ShortName" => "P-ta I. Maniu"),
				array("idStatie" => "2694","LongName" => "Strada 16 Decembrie 1989 / Brancoveanu (Mocioni)","ShortName" => "Brancoveanu"),
				array("idStatie" => "2695","LongName" => "Piata Mocioni / Sinaia (Sinaia)","ShortName" => "Sinaia"),
				array("idStatie" => "2701","LongName" => "B-dul Brancoveanu (Gara de Sud)","ShortName" => "Brancoveanu"),
				array("idStatie" => "2702","LongName" => "Bulevardul Regele Carol I / Piata Iosefin (AEM)","ShortName" => "Regele Carol"),
				array("idStatie" => "2703","LongName" => "B-dul Brancoveanu / Strada Snagov (Gara de Sud)","ShortName" => "Snagov"),
				array("idStatie" => "2704","LongName" => "Bulevardul Regele Carol I / Piata Iosefin (Gara)","ShortName" => "Regele Carol"),
				array("idStatie" => "2705","LongName" => "B-dul Liviu Rebreanu (Gara de Sud)","ShortName" => "L. Rebreanu"),
				array("idStatie" => "2706","LongName" => "Strada Traian Grozavescu / Posta Mare (FZB)","ShortName" => "Posta Mare"),
				array("idStatie" => "2707","LongName" => "Strada Mures (Gara de Sud)","ShortName" => "Mures"),
				array("idStatie" => "2708","LongName" => "Piata Mocioni / Sinaia (UMT)","ShortName" => "Sinaia"),
				array("idStatie" => "2710","LongName" => "Piata Mocioni / Sinaia (Gara)","ShortName" => "Sinaia"),
				array("idStatie" => "2713","LongName" => "Strada Emil Zola (Gara de Sud)","ShortName" => "E. Zola"),
				array("idStatie" => "2714","LongName" => "Strada Herculane (Gara de Sud)","ShortName" => "Herculane"),
				array("idStatie" => "2715","LongName" => "Strada Chisodei (Gara de Sud)","ShortName" => "Chisodei"),
				array("idStatie" => "2716","LongName" => "Strada Cluj (AEM)","ShortName" => "Cluj"),
				array("idStatie" => "2717","LongName" => "Strada Bujorilor (Gara de Sud)","ShortName" => "Bujorilor"),
				array("idStatie" => "2718","LongName" => "Strada Cluj (Stuparilor)","ShortName" => "Cluj"),
				array("idStatie" => "2719","LongName" => "Strada Eternitatii (Gara de Sud)","ShortName" => "Eternitatii"),
				array("idStatie" => "2720","LongName" => "Calea Martirilor (Apicultorilor)","ShortName" => "Martirilor"),
				array("idStatie" => "2722","LongName" => "Calea Martirilor (Gara de Nord)","ShortName" => "Martirilor"),
				array("idStatie" => "2723","LongName" => "Strada Eternitatii (Mocioni)","ShortName" => "Eternitatii"),
				array("idStatie" => "2724","LongName" => "Strada Martir Ioan Stanciu (Apicultorilor)","ShortName" => "I. Stanciu"),
				array("idStatie" => "2726","LongName" => "Strada Martir Ioan Stanciu (Gara de Nord)","ShortName" => "I. Stanciu"),
				array("idStatie" => "2727","LongName" => "Piata Maria (UMT)","ShortName" => "P-ta Maria"),
				array("idStatie" => "2728","LongName" => "Str. Maresal Constantin Prezan (Versului)","ShortName" => "M. C-tin Prezan"),
				array("idStatie" => "2730","LongName" => "Strada Chisodei (Mocioni)","ShortName" => "Chisodei"),
				array("idStatie" => "2732","LongName" => "Str. Maresal Constantin Prezan (Posta Mare)","ShortName" => "M. C-tin Prezan"),
				array("idStatie" => "2733","LongName" => "Strada Herculane (Mocioni)","ShortName" => "Herculane"),
				array("idStatie" => "2734","LongName" => "Strada Emil Zola (Mocioni)","ShortName" => "E. Zola"),
				array("idStatie" => "2735","LongName" => "Printul Turcesc / Baba Dochia (UMT)","ShortName" => "Printul Turcesc"),
				array("idStatie" => "2736","LongName" => "Strada Mures (Mocioni)","ShortName" => "Mures"),
				array("idStatie" => "2738","LongName" => "Printul Turcesc / Baba Dochia (Dambovita)","ShortName" => "Printul Turcesc"),
				array("idStatie" => "2739","LongName" => "B-dul Liviu Rebreanu (Mocioni)","ShortName" => "L. Rebreanu"),
				array("idStatie" => "2740","LongName" => "B-dul Brancoveanu / Strada ciprian Porumbescu (Mocioni)","ShortName" => "Porumbescu"),
				array("idStatie" => "2745","LongName" => "Strada Iosif Vulcan / Parcul Uzinei (UMT)","ShortName" => "Parcul Uzinei"),
				array("idStatie" => "2747","LongName" => "Strada Iosif Vulcan / Parcul Uzinei (Dambovita)","ShortName" => "Parcul Uzinei"),
				array("idStatie" => "2748","LongName" => "Strada Lalelelor (UMT)","ShortName" => "Lalelelor"),
				array("idStatie" => "2749","LongName" => "Strada Lalelelor (Dambovita)","ShortName" => "Lalelelor"),
				array("idStatie" => "2752","LongName" => "Spitatul de boli infectioase Victor Babes (UMT)","ShortName" => "Spitalul V. Babes"),
				array("idStatie" => "2753","LongName" => "Spitatul de boli infectioase Victor Babes (Dambovita)","ShortName" => "Spitalul V. Babes"),
				array("idStatie" => "2754","LongName" => "Statia Meteo / Continental (UMT)","ShortName" => "Meteo"),
				array("idStatie" => "2755","LongName" => "Statia Meteo (UMT)","ShortName" => "Statia Meteo"),
				array("idStatie" => "2756","LongName" => "C. P. Solventul (Liege)","ShortName" => "Solventul"),
				array("idStatie" => "2759","LongName" => "Str. Gelu (Liege)","ShortName" => "Gelu"),
				array("idStatie" => "2760","LongName" => "Str. Gelu (Solventul)","ShortName" => "Gelu"),
				array("idStatie" => "2761","LongName" => "UMT (UMT)","ShortName" => "UMT"),
				array("idStatie" => "2763","LongName" => "Politia Locala Timisoara (Gara)","ShortName" => "Politia Locala"),
				array("idStatie" => "2764","LongName" => "Str. Pop de Basesti / Autogara SuperImposer (Gheorghe Baritiu)","ShortName" => "Pop de Basesti"),
				array("idStatie" => "2765","LongName" => "Politia Locala Timisoara (UMT)","ShortName" => "Politia Locala"),
				array("idStatie" => "2766","LongName" => "Gara de Est (Gara)","ShortName" => "Gara de Est"),
				array("idStatie" => "2767","LongName" => "Gara de Est (UMT)","ShortName" => "Gara de Est"),
				array("idStatie" => "2768","LongName" => "Gara de Nord (Gara)","ShortName" => "Gara"),
				array("idStatie" => "2772","LongName" => "Strada Jiul (Apicultorilor)","ShortName" => "Jiul"),
				array("idStatie" => "2773","LongName" => "Strada Jiul (Gara de Nord)","ShortName" => "Jiul"),
				array("idStatie" => "2781","LongName" => "Piata 700 (Aeroport)","ShortName" => "P-ta 700"),
				array("idStatie" => "2784","LongName" => "Iulius Mall (Ion Ionescu de la Brad)","ShortName" => "Iulius Mall"),
				array("idStatie" => "2793","LongName" => "Str. Ion Ionescu de la Brad (Ion Ionescu de la Brad)","ShortName" => "I.I. de la Brad"),
				array("idStatie" => "2794","LongName" => "Str. Ion Ionescu de la Brad (Gheorghe Baritiu)","ShortName" => "I.I. de la Brad"),
				array("idStatie" => "2798","LongName" => "Politia Judeteana Timis (Padurea Verde)","ShortName" => "Politia"),
				array("idStatie" => "2799","LongName" => "Catedrala Mitropolitana (Pod C. Sagului)","ShortName" => "Catedrala"),
				array("idStatie" => "2800","LongName" => "Politia Judeteana Timis (Bastion)","ShortName" => "Politia"),
				array("idStatie" => "2806","LongName" => "Piata Leonadro da Vinci (FZB)","ShortName" => "P-ta L. da Vinci"),
				array("idStatie" => "2807","LongName" => "Universitatea de Vest (Gara de Nord)","ShortName" => "Univ. de Vest"),
				array("idStatie" => "2808","LongName" => "ILSA / Strada Baader (Padurea Verde)","ShortName" => "Sediul RATT"),
				array("idStatie" => "2809","LongName" => "Facultatea de electrotehnica / Pod Andrei Saguna (FZB)","ShortName" => "A. Saguna"),
				array("idStatie" => "2810","LongName" => "Strada Mangalia (Lic. Auto)","ShortName" => "Mangalia"),
				array("idStatie" => "2812","LongName" => "Strada Banatul / Depoul de troleibuze (FZB)","ShortName" => "Dep. de troleibuze"),
				array("idStatie" => "2813","LongName" => "Strada Vaslui (FZB)","ShortName" => "Vaslui"),
				array("idStatie" => "2814","LongName" => "Strada Vaslui (Posta Mare)","ShortName" => "Vaslui"),
				array("idStatie" => "2815","LongName" => "Strada Pacii (FZB)","ShortName" => "Pacii"),
				array("idStatie" => "2816","LongName" => "Strada Virgil Simionescu (FZB)","ShortName" => "V. Simionescu"),
				array("idStatie" => "2819","LongName" => "Strada Virgil Simionescu (Posta Mare)","ShortName" => "V. Simionescu"),
				array("idStatie" => "2820","LongName" => "Strada Pacii (Posta Mare)","ShortName" => "Pacii"),
				array("idStatie" => "2821","LongName" => "B-dul Dambovita / Strada Banatul / Dep. Troleibuze (Gara)","ShortName" => "Dep. Troleibuze"),
				array("idStatie" => "2822","LongName" => "Strada Mangalia (Gara)","ShortName" => "Mangalia"),
				array("idStatie" => "2823","LongName" => "Str. Renasterii (Strandul Tineretului)","ShortName" => "Renasterii"),
				array("idStatie" => "2824","LongName" => "Str. Renasterii (Gheorghe Baritiu)","ShortName" => "Renasterii"),
				array("idStatie" => "2826","LongName" => "Universitatea de Vest (Apicultorilor)","ShortName" => "Univ. de Vest"),
				array("idStatie" => "2828","LongName" => "Strada Iepurelui / Ciclop (Banatul)","ShortName" => "Iepurelui"),
				array("idStatie" => "2829","LongName" => "Liceul J. L. Calderon / New Hotel Timisoara (Pod C. Sagului)","ShortName" => "Calderon"),
				array("idStatie" => "2830","LongName" => "Liceul J. L. Calderon (Apateu)","ShortName" => "Calderon"),
				array("idStatie" => "2831","LongName" => "B-dul Vasile Parvan (Pod C. Sagului)","ShortName" => "V. Parvan"),
				array("idStatie" => "2833","LongName" => "Universitatea Dimitrie Cantemir / Vasile Parvan (Apateu)","ShortName" => "V. Parvan"),
				array("idStatie" => "2836","LongName" => "Strada Izlaz (Apateu)","ShortName" => "Izlaz"),
				array("idStatie" => "2837","LongName" => "Strada Bujorilor (Apateu)","ShortName" => "Bujorilor"),
				array("idStatie" => "2838","LongName" => "Strada Pestalozzi / New Hotel Timisoara (Apateu)","ShortName" => "Pestalozzi"),
				array("idStatie" => "2839","LongName" => "Strada Iepurelui / Ciclop (Sc. Gen Plopi)","ShortName" => "Iepurelui"),
				array("idStatie" => "2841","LongName" => "Strada Caprioarei (Apateu)","ShortName" => "Caprioarei"),
				array("idStatie" => "2842","LongName" => "Strada Levantica (Apateu)","ShortName" => "Levantica"),
				array("idStatie" => "2880","LongName" => "Dambovita / Depoul de tramvaie (UMT)","ShortName" => "Dambovita"),
				array("idStatie" => "2881","LongName" => "Dambovita / Depoul de tramvaie (Dambovita)","ShortName" => "Dambovita"),
				array("idStatie" => "2882","LongName" => "Strada Joszef Preyer / Strada Crizantemelor (UMT)","ShortName" => "Crizantemelor"),
				array("idStatie" => "2883","LongName" => "Strada Joszef Preyer / Strada Crizantemelor (Dambovita)","ShortName" => "Crizantemelor"),
				array("idStatie" => "2884","LongName" => "Strada Joszef Preyer / Strada Mangalia (UMT)","ShortName" => "str. Mangalia"),
				array("idStatie" => "2885","LongName" => "Strada Joszef Preyer / Strada Mangalia (Dambovita)","ShortName" => "str. Mangalia"),
				array("idStatie" => "2886","LongName" => "Bulevardul Iuliu Maniu / Autogara (UMT)","ShortName" => "Iosefin"),
				array("idStatie" => "2887","LongName" => "Bulevardul Iuliu Maniu / Autogara (Dambovita)","ShortName" => "Iosefin"),
				array("idStatie" => "2888","LongName" => "Bulevardul Regele Carol I / Piata Iosefin (UMT)","ShortName" => "Regele Carol"),
				array("idStatie" => "2889","LongName" => "Piata Iuliu Maniu (Gara)","ShortName" => "P-ta I. Maniu"),
				array("idStatie" => "2920","LongName" => "Strada Ardealului / Strada Martir Opre Gogu (Lic. Auto)","ShortName" => "Opre Gogu"),
				array("idStatie" => "2921","LongName" => "Strada Ardealului / Strada Martir Opre Gogu (Gara)","ShortName" => "Opre Gogu"),
				array("idStatie" => "2922","LongName" => "Canton CFR / Strada Ardealului (Gara)","ShortName" => "Canton CFR"),
				array("idStatie" => "2923","LongName" => "Canton CFR / Strada Ardealului (Lic. Auto)","ShortName" => "Canton CFR"),
				array("idStatie" => "2925","LongName" => "Liceul Auto (Lic. Auto)","ShortName" => "Lic. Auto"),
				array("idStatie" => "2926","LongName" => "Strada C. I. Nottara / Gara de Vest (FZB)","ShortName" => "Gara de Vest"),
				array("idStatie" => "2927","LongName" => "Strada C. I. Nottara / Gara de Vest (Posta Mare)","ShortName" => "Gara de Vest"),
				array("idStatie" => "2928","LongName" => "Strada Rascoala 1907 (FZB)","ShortName" => "Rascoala 1907"),
				array("idStatie" => "2929","LongName" => "Strada Rascoala 1907 (Posta Mare)","ShortName" => "Rascoala 1907"),
				array("idStatie" => "2945","LongName" => "Strada Polona (Freidorf)","ShortName" => "Polona"),
				array("idStatie" => "2946","LongName" => "Strada Polona (Posta Mare)","ShortName" => "Polona"),
				array("idStatie" => "2947","LongName" => "Fabrica de Zahar (FZB)","ShortName" => "FZB"),
				array("idStatie" => "2948","LongName" => "Fabrica de Zahar (Posta Mare)","ShortName" => "FZB"),
				array("idStatie" => "2950","LongName" => "Strada Liege (Agronomie)","ShortName" => "Str. Liege"),
				array("idStatie" => "2951","LongName" => "Str. Liege (Baader)","ShortName" => "Str. Liege"),
				array("idStatie" => "2952","LongName" => "Dacia Service (AEM)","ShortName" => "Dacia"),
				array("idStatie" => "2953","LongName" => "UTT (Agronomie)","ShortName" => "UTT"),
				array("idStatie" => "2954","LongName" => "UTT (Baader)","ShortName" => "UTT"),
				array("idStatie" => "2955","LongName" => "Institutul Agronomic (Selgros)","ShortName" => "Inst. Agronomic"),
				array("idStatie" => "2956","LongName" => "Institutul Agronomic (Pod C. Sagului)","ShortName" => "Inst. Agronomic"),
				array("idStatie" => "2957","LongName" => "Strada Liege / Calea Torontalului (Pod C. Sagului)","ShortName" => "Torontalului / Liege"),
				array("idStatie" => "2960","LongName" => "Str. Liege / Piata Verde (Pod C. Sagului)","ShortName" => "Liege"),
				array("idStatie" => "2961","LongName" => "Str. Remus Radulet (Agronomie)","ShortName" => "Miresei"),
				array("idStatie" => "2962","LongName" => "Str. Sfintii Apostoli Petru si Pavel (Ion Ionescu de la Brad)","ShortName" => "Petru si Pavel"),
				array("idStatie" => "2963","LongName" => "Strada Sfintii Apostoli Petru si Pavel / Calea Lipovei (Grozavescu)","ShortName" => "Petru si Pavel"),
				array("idStatie" => "2964","LongName" => "Str. Divizia 9 Cavalerie / Calea Lipovei (Stuparilor)","ShortName" => "Div. 9 Cavalerie"),
				array("idStatie" => "2965","LongName" => "Piata Consiliul Europei / Iulius Mall (Stuparilor)","ShortName" => "Iulius Mall"),
				array("idStatie" => "2966","LongName" => "Piata Consiliul Europei / Iulius Mall (AEM)","ShortName" => "Iulius Mall"),
				array("idStatie" => "2967","LongName" => "Punctele Cardinale / Popa Sapca / Str. Oituz (Ghe. Baritiu)","ShortName" => "Punctele Cardinale"),
				array("idStatie" => "2968","LongName" => "Str. Aurel Popovici / Analog TV (Bastion)","ShortName" => "Analog TV"),
				array("idStatie" => "2971","LongName" => "Piata Gen. V. Economu / Calea Lugojului (Ialomitei)","ShortName" => "V. Economu"),
				array("idStatie" => "2972","LongName" => "Piata Gen. V. Economu / Calea Lugojului (Bastion)","ShortName" => "V. Economu"),
				array("idStatie" => "2973","LongName" => "Strandul Tineretului (Strandul Tineretului)","ShortName" => "Strandul Tineretului"),
				array("idStatie" => "2974","LongName" => "Strandul Tineretului (Gheorghe Baritiu)","ShortName" => "Strandul Tineretului"),
				array("idStatie" => "2975","LongName" => "Bulevardul Mihai Eminescu / Hotel Continental (Versului)","ShortName" => "M. Eminescu"),
				array("idStatie" => "2976","LongName" => "Bd. I.C. Bratianu / Centru (Versului)","ShortName" => "Centru"),
				array("idStatie" => "2977","LongName" => "Pod Mitropolit Andrei Saguna (Centru)","ShortName" => "Andrei Saguna"),
				array("idStatie" => "2979","LongName" => "Complexul Studentesc (Stuparilor)","ShortName" => "Comp. Studentesc"),
				array("idStatie" => "2980","LongName" => "Complexul Studentesc (AEM)","ShortName" => "Comp. Studentesc"),
				array("idStatie" => "3000","LongName" => "Spitalul Judetean / Mc Donald's (Stuparilor)","ShortName" => "Spitalul Judetean"),
				array("idStatie" => "3002","LongName" => "Intrarea Arenei / Hotel Lido (Bulevardul Sudului)","ShortName" => "Hotel Lido"),
				array("idStatie" => "3003","LongName" => "Cvartal Sudului (AEM)","ShortName" => "Cvt. Sudului"),
				array("idStatie" => "3004","LongName" => "Cvartal Sudului (Stuparilor)","ShortName" => "Cvt. Sudului"),
				array("idStatie" => "3005","LongName" => "Bulevardul Sudului (Bulevardul Sudului)","ShortName" => "Bv. Sudului"),
				array("idStatie" => "3006","LongName" => "Bulevardul Sudului (Posta Mare)","ShortName" => "Bv. Sudului"),
				array("idStatie" => "3007","LongName" => "Piata 700 (Pod C.F)","ShortName" => "P-ta 700"),
				array("idStatie" => "3008","LongName" => "Piata 700 (Marasti)","ShortName" => "P-ta 700"),
				array("idStatie" => "3011","LongName" => "Strada Timis (Pod C.F)","ShortName" => "Timis"),
				array("idStatie" => "3012","LongName" => "Strada Timis (Marasti)","ShortName" => "Timis"),
				array("idStatie" => "3013","LongName" => "Calea Cetatii / Gheorghe Lazar (Pod C.F)","ShortName" => "Cetatii"),
				array("idStatie" => "3014","LongName" => "Calea Cetatii / Gheorghe Lazar (Marasti)","ShortName" => "Cetatii"),
				array("idStatie" => "3015","LongName" => "Piata Avram Iancu (Pod C.F)","ShortName" => "P-ta Avram Iancu"),
				array("idStatie" => "3016","LongName" => "Piata Avram Iancu (Marasti)","ShortName" => "P-ta Avram Iancu"),
				array("idStatie" => "3017","LongName" => "Strada Vuc Karadjic (Pod C.F)","ShortName" => "Vuc Karadjic"),
				array("idStatie" => "3018","LongName" => "Strada Vuc Karadjic (Marasti)","ShortName" => "Vuc Karadjic"),
				array("idStatie" => "3019","LongName" => "Strada G. Alexandrescu (Pod C.F)","ShortName" => "G. Alexandrescu"),
				array("idStatie" => "3020","LongName" => "Strada G. Alexandrescu (Marasti)","ShortName" => "G. Alexandrescu"),
				array("idStatie" => "3021","LongName" => "Piata de Gros (Pod C.F)","ShortName" => "P-ta de Gros"),
				array("idStatie" => "3022","LongName" => "Piata de Gros (Marasti)","ShortName" => "P-ta de Gros"),
				array("idStatie" => "3041","LongName" => "Str. Maresal Constantin Prezan / Bucla Versului (Versului)","ShortName" => "Versului"),
				array("idStatie" => "3060","LongName" => "Piata Marasti (Pod C.F)","ShortName" => "P-ta Marasti"),
				array("idStatie" => "3080","LongName" => "Piata Marasti (TM)","ShortName" => "Marasti"),
				array("idStatie" => "3102","LongName" => "Piata Regina Maria (Strandul Tineretului)","ShortName" => "Regina Maria"),
				array("idStatie" => "3103","LongName" => "Piata Badea Cartan (Aeroport)","ShortName" => "Badea Cartan"),
				array("idStatie" => "3104","LongName" => "Piata Badea Cartan / Take Ionescu (Padurea Verde)","ShortName" => "Badea Cartan"),
				array("idStatie" => "3105","LongName" => "Piata Regina Maria (Gheorghe Baritiu)","ShortName" => "Regina Maria"),
				array("idStatie" => "3106","LongName" => "Gara de Nord (Lic. Auto)","ShortName" => "Gara"),
				array("idStatie" => "3107","LongName" => "C. P. Solventul (Solventul)","ShortName" => "Solventul"),
				array("idStatie" => "3120","LongName" => "Str. Pop de Basesti / Autogara SuperImposer (Strandul Tineretului)","ShortName" => "Pop de Basesti"),
				array("idStatie" => "3160","LongName" => "Str. Samuil Micu (Strandul Tineretului)","ShortName" => "Samuil Micu"),
				array("idStatie" => "3161","LongName" => "Str. Samuil Micu (Gheorghe Baritiu)","ShortName" => "Samuil Micu"),
				array("idStatie" => "3163","LongName" => "Catedrala Mitropolitana (Gara)","ShortName" => "Catedrala"),
				array("idStatie" => "3164","LongName" => "Piata 700 (UMT)","ShortName" => "P-ta 700"),
				array("idStatie" => "3165","LongName" => "Piata 700 (Gara)","ShortName" => "P-ta 700"),
				array("idStatie" => "3166","LongName" => "Piata Libertatii (UMT)","ShortName" => "P-ta Libertatii"),
				array("idStatie" => "3167","LongName" => "Piata Libertatii (Gara)","ShortName" => "P-ta Libertatii"),
				array("idStatie" => "3168","LongName" => "Hotel Continental (UMT)","ShortName" => "Hotel Continental"),
				array("idStatie" => "3169","LongName" => "Hotel Continental / Posta Mare (Gara)","ShortName" => "Posta Mare"),
				array("idStatie" => "3170","LongName" => "Prefectura Judetului Timis / Consulatul Republicii Moldova (UMT)","ShortName" => "Prefectura"),
				array("idStatie" => "3171","LongName" => "Prefectura Judetului Timis / Consulatul Republicii Moldova (Gara)","ShortName" => "Prefectura"),
				array("idStatie" => "3172","LongName" => "Bulevardul 3 august 1919 / Parcul Poporului (UMT)","ShortName" => "Parcul Poporului"),
				array("idStatie" => "3173","LongName" => "Bulevardul 3 august 1919 / Parcul Poporului (Gara)","ShortName" => "Parcul Poporului"),
				array("idStatie" => "3174","LongName" => "Piata Traian (UMT)","ShortName" => "P-ta Traian"),
				array("idStatie" => "3175","LongName" => "Piata Traian (Gara)","ShortName" => "P-ta Traian"),
				array("idStatie" => "3176","LongName" => "Piata Gen. V. Economu / Calea Lugojului (UMT)","ShortName" => "Calea Lugojului"),
				array("idStatie" => "3177","LongName" => "Gen. V. Economu (Dambovita)","ShortName" => "V. Economu"),
				array("idStatie" => "3181","LongName" => "Piata Maria (Gara)","ShortName" => "P-ta Maria"),
				array("idStatie" => "3200","LongName" => "Catedrala Mitropolitana (Apicultorilor)","ShortName" => "Catedrala"),
				array("idStatie" => "3220","LongName" => "Strada Traian Grozavescu / Posta Mare (Stuparilor)","ShortName" => "Posta Mare"),
				array("idStatie" => "3224","LongName" => "Strada Popa Sapca (Grozavescu)","ShortName" => "Popa Sapca"),
				array("idStatie" => "3225","LongName" => "Strada Popa Sapca (Stuparilor)","ShortName" => "Popa Sapca"),
				array("idStatie" => "3226","LongName" => "Iulius Mall (Stuparilor)","ShortName" => "Iulius Mall"),
				array("idStatie" => "3240","LongName" => "Strada Divizia 9 Cavalerie / Kappa (Stuparilor)","ShortName" => "Div. 9 Cav."),
				array("idStatie" => "3241","LongName" => "Dedeman (Stuparilor)","ShortName" => "Dedeman"),
				array("idStatie" => "3243","LongName" => "Gara de Nord (UMT)","ShortName" => "Gara"),
				array("idStatie" => "3244","LongName" => "Gara de Nord (Gara)","ShortName" => "Gara"),
				array("idStatie" => "3245","LongName" => "Gara de Est (Stuparilor)","ShortName" => "Gara de Est"),
				array("idStatie" => "3247","LongName" => "Strada Stuparilor (Stuparilor)","ShortName" => "Stuparilor"),
				array("idStatie" => "3248","LongName" => "Strada Holdelor / Piata Noua (Grozavescu)","ShortName" => "Holdelor"),
				array("idStatie" => "3250","LongName" => "Strada Stuparilor (Stuparilor)","ShortName" => "Stuparilor"),
				array("idStatie" => "3253","LongName" => "Piata Badea Cartan / Take Ionescu (Gara)","ShortName" => "Badea Cartan"),
				array("idStatie" => "3254","LongName" => "Piata Badea Cartan / Take Ionescu (UMT)","ShortName" => "Badea Cartan"),
				array("idStatie" => "3255","LongName" => "Strada Divizia 9 Cavalerie / Calea Lipovei (Grozavescu)","ShortName" => "Div. 9 Cavalerie"),
				array("idStatie" => "3260","LongName" => "Iulius Mall (Grozavescu)","ShortName" => "Iulius Mall"),
				array("idStatie" => "3280","LongName" => "Strada Pomiculturii (Grozavescu)","ShortName" => "Pomiculturii"),
				array("idStatie" => "3281","LongName" => "Strada Pomiculturii (Stuparilor)","ShortName" => "Pomiculturii"),
				array("idStatie" => "3361","LongName" => "Cimitirul Eroilor / Iulius Mall (Ion Ionescu de la Brad)","ShortName" => "Cimitirul Eroilor"),
				array("idStatie" => "3362","LongName" => "Cimitirul Eroilor / Iulius Mall (Gheorghe Baritiu)","ShortName" => "Cimitirul Eroilor"),
				array("idStatie" => "3400","LongName" => "Strada Iosif Vulcan (Sc. Gen Plopi)","ShortName" => "I. Vulcan"),
				array("idStatie" => "3401","LongName" => "Centrul Rudolf Walther (Sc. Gen Plopi)","ShortName" => "Rudolf Walther"),
				array("idStatie" => "3402","LongName" => "Centrul Rudolf Walther (Banatul)","ShortName" => "Rudolf Walther"),
				array("idStatie" => "3403","LongName" => "Strada Albastrelelor (Sc. Gen Plopi)","ShortName" => "Albastrelelor"),
				array("idStatie" => "3405","LongName" => "Uzina de apa (Sc. Gen Plopi)","ShortName" => "Uzina de apa"),
				array("idStatie" => "3406","LongName" => "Strada Jokai Mor (Sc. Gen Plopi)","ShortName" => "Jokai Mor"),
				array("idStatie" => "3408","LongName" => "Strada Martir Cornel popescu (Sc. Gen Plopi)","ShortName" => "C. Popescu"),
				array("idStatie" => "3411","LongName" => "Strada Andrei Saguna / Printul Turcesc (Sc. Gen Plopi)","ShortName" => "A. Saguna"),
				array("idStatie" => "3412","LongName" => "Calea Circumvalatiunii / Gheorghe Lazar (Pod C.F)","ShortName" => "Circumvalatiunii"),
				array("idStatie" => "3413","LongName" => "Cl. Circumvalatiunii / Ghe. Lazar (Marasti)","ShortName" => "Circumvalatiunii"),
				array("idStatie" => "3420","LongName" => "Scoala Generala Cartier Plopi (Sc. Gen Plopi)","ShortName" => "Sc. Gen. Plopi"),
				array("idStatie" => "3505","LongName" => "Strada Gheorghe Titeica / Cartier Crisana (Ialomitei)","ShortName" => "Ghe. Titeica"),
				array("idStatie" => "3506","LongName" => "Strada Bobalna / Aleea Ghirodei (Ialomitei)","ShortName" => "Bobalna"),
				array("idStatie" => "3540","LongName" => "Calea Torontalului (Ciarda Rosie)","ShortName" => "Torontalului"),
				array("idStatie" => "3542","LongName" => "Bulevardul Cetatii / Pizeria San Marzano (Ciarda Rosie)","ShortName" => "Cetatii"),
				array("idStatie" => "3543","LongName" => "Bulevardul Cetatii / Pizeria San Marzano (Torontalului)","ShortName" => "Cetatii"),
				array("idStatie" => "3544","LongName" => "Strada Amforei (Ciarda Rosie)","ShortName" => "Amforei"),
				array("idStatie" => "3545","LongName" => "Strada Amforei (Torontalului)","ShortName" => "Amforei"),
				array("idStatie" => "3546","LongName" => "Gheorghe Lazar / Bulevardul Cetatii (Ciarda Rosie)","ShortName" => "Ghe. Lazar"),
				array("idStatie" => "3547","LongName" => "Gheorghe Lazar / Bulevardul Cetatii (Torontalului)","ShortName" => "Ghe. Lazar"),
				array("idStatie" => "3548","LongName" => "Balta Verde (Stadion Rugby)","ShortName" => "Balta Verde"),
				array("idStatie" => "3549","LongName" => "Balta Verde (Torontalului)","ShortName" => "Balta Verde"),
				array("idStatie" => "3550","LongName" => "Calea Bogdanestilor / RDS (Ciarda Rosie)","ShortName" => "RDS"),
				array("idStatie" => "3551","LongName" => "Calea Bogdanestilor / RDS (Torontalului)","ShortName" => "RDS"),
				array("idStatie" => "3552","LongName" => "Calea Circumvalatiunii / Politia Rutiera Timisoara (Ciarda Rosie)","ShortName" => "Politia Rutiera"),
				array("idStatie" => "3553","LongName" => "Calea Circumvalatiunii / Politia Rutiera Timisoara (Torontalului)","ShortName" => "Politia Rutiera"),
				array("idStatie" => "3554","LongName" => "Fabrica de Bere Timisoreana (Banatul)","ShortName" => "F-ca de Bere"),
				array("idStatie" => "3556","LongName" => "Fabrica de Bere Timisoreana (Sc. Gen Plopi)","ShortName" => "F-ca de Bere"),
				array("idStatie" => "3560","LongName" => "Banatul / Depoul de autobuze (Sc. Gen Plopi)","ShortName" => "Banatul"),
				array("idStatie" => "3561","LongName" => "Banatul / Depoul de autobuze (Sc. Gen Plopi)","ShortName" => "Banatul"),
				array("idStatie" => "3563","LongName" => "Procter & Gamble (Torontalului)","ShortName" => "P&G"),
				array("idStatie" => "3564","LongName" => "Mecatim (Ciarda Rosie)","ShortName" => "Mecatim"),
				array("idStatie" => "3565","LongName" => "Mecatim (Torontalului)","ShortName" => "Mecatim"),
				array("idStatie" => "3566","LongName" => "AEM (Ciarda Rosie)","ShortName" => "AEM"),
				array("idStatie" => "3567","LongName" => "AEM (Torontalului)","ShortName" => "AEM"),
				array("idStatie" => "3568","LongName" => "Brithouse (Ciarda Rosie)","ShortName" => "Brithouse"),
				array("idStatie" => "3569","LongName" => "Brithouse (Torontalului)","ShortName" => "Brithouse"),
				array("idStatie" => "3571","LongName" => "Grup Scolar Industrial Electrotimis (Ciarda Rosie)","ShortName" => "Electrotimis"),
				array("idStatie" => "3572","LongName" => "Grup Scolar Industrial Electrotimis (Torontalului)","ShortName" => "Electrotimis"),
				array("idStatie" => "3573","LongName" => "Ciarda Rosie (Ciarda Rosie)","ShortName" => "Ciarda Rosie"),
				array("idStatie" => "3574","LongName" => "Ciarda Rosie (Torontalului)","ShortName" => "Ciarda Rosie"),
				array("idStatie" => "3580","LongName" => "AEM (Dambovita)","ShortName" => "AEM"),
				array("idStatie" => "3581","LongName" => "AEM (AEM)","ShortName" => "AEM"),
				array("idStatie" => "3582","LongName" => "Bulevardul Sudului / Hotel Lido (Dambovita)","ShortName" => "Sudului"),
				array("idStatie" => "3583","LongName" => "Bulevardul Sudului / Hotel Lido (AEM)","ShortName" => "Sudului"),
				array("idStatie" => "3584","LongName" => "Spitalul Judetean / Stadionul Dan Paltinisanu (Dambovita)","ShortName" => "Judetean"),
				array("idStatie" => "3585","LongName" => "Spitalul Judetean / Stadionul Dan Paltinisanu (AEM)","ShortName" => "Judetean"),
				array("idStatie" => "3586","LongName" => "Calea Martirilor (Dambovita)","ShortName" => "Martirilor"),
				array("idStatie" => "3587","LongName" => "Calea Martirilor (AEM)","ShortName" => "Martirilor"),
				array("idStatie" => "3588","LongName" => "Salcamilor (Dambovita)","ShortName" => "Salcamilor"),
				array("idStatie" => "3589","LongName" => "Salcamilor (AEM)","ShortName" => "Salcamilor"),
				array("idStatie" => "3590","LongName" => "Drubeta (Dambovita)","ShortName" => "Drubeta"),
				array("idStatie" => "3591","LongName" => "Drubeta (AEM)","ShortName" => "Drubeta"),
				array("idStatie" => "3592","LongName" => "Bulevardul Brancoveanu (Dambovita)","ShortName" => "Brancoveanu"),
				array("idStatie" => "3593","LongName" => "Bulevardul Brancoveanu (AEM)","ShortName" => "Brancoveanu"),
				array("idStatie" => "3594","LongName" => "Strada Gheorghe Ranetti (Dambovita)","ShortName" => "Ghe. Ranetti"),
				array("idStatie" => "3595","LongName" => "Strada Gheorghe Ranetti (AEM)","ShortName" => "Ghe. Ranetti"),
				array("idStatie" => "3596","LongName" => "Calea Sagului / Profi (Dambovita)","ShortName" => "Dermatina"),
				array("idStatie" => "3597","LongName" => "Calea Sagului / Profi (AEM)","ShortName" => "Dermatina"),
				array("idStatie" => "3598","LongName" => "Transilvania (Dambovita)","ShortName" => "Transilvania"),
				array("idStatie" => "3599","LongName" => "Transilvania / Ana Ipatescu (Mures Balcescu Dambovita)","ShortName" => "Transilvania"),
				array("idStatie" => "3600","LongName" => "Strada Banatul / Depoul de troleibuze (Dambovita Balcescu Mures)","ShortName" => "Dep. de troleibuze"),
				array("idStatie" => "3601","LongName" => "Strada Banatul / Depoul de troleibuze (Mures Balcescu Dambovita)","ShortName" => "Dep. de troleibuze"),
				array("idStatie" => "3602","LongName" => "B-dul Dambovita / Dep. Tramvaie (Gara)","ShortName" => "Dambovita"),
				array("idStatie" => "3620","LongName" => "B-dul Dambovita / Dep. Tramvaie (Lic. Auto)","ShortName" => "Dambovita"),
				array("idStatie" => "3640","LongName" => "Grup Scolar Spiru Haret (P-ta Traian)","ShortName" => "Spiru Haret"),
				array("idStatie" => "3641","LongName" => "Grup Scolar Spiru Haret (Ronat)","ShortName" => "Spiru Haret"),
				array("idStatie" => "3642","LongName" => "Strada Alexandru Lapusneanu (P-ta Traian)","ShortName" => "A. Lapusneanu"),
				array("idStatie" => "3643","LongName" => "Strada Alexandru Lapusneanu (Stadion Rugby)","ShortName" => "A. Lapusneanu"),
				array("idStatie" => "3644","LongName" => "Strada Grigore Alexandrescu / Calea Bogdanestilor (P-ta Traian)","ShortName" => "G. Alexandrescu"),
				array("idStatie" => "3645","LongName" => "Strada Grigore Alexandrescu / Calea Bogdanestilor (Stadion Rugby)","ShortName" => "G. Alexandrescu"),
				array("idStatie" => "3646","LongName" => "Strada Madona (P-ta Traian)","ShortName" => "Madona"),
				array("idStatie" => "3647","LongName" => "Strada Madona (Stadion Rugby)","ShortName" => "Madona"),
				array("idStatie" => "3648","LongName" => "Strada Adam Muller-Guttenbrunn (P-ta Traian)","ShortName" => "Muller-Guttebrunn"),
				array("idStatie" => "3649","LongName" => "Strada Adam Muller-Guttenbrunn (Ronat)","ShortName" => "Muller-Guttebrunn"),
				array("idStatie" => "3650","LongName" => "Strada Razboieni / Grup Scolar Industrial CFR (P-ta Traian)","ShortName" => "Razboieni"),
				array("idStatie" => "3651","LongName" => "Strada Razboieni / Grup Scolar Industrial CFR (Ronat)","ShortName" => "Razboieni"),
				array("idStatie" => "3652","LongName" => "Ronat (Ronat)","ShortName" => "Ronat"),
				array("idStatie" => "3653","LongName" => "Ronat (P-ta Traian)","ShortName" => "Ronat"),
				array("idStatie" => "3660","LongName" => "Strada Gheorghe Doja / Parcul Carmen Sylva (P-ta Traian)","ShortName" => "Parcul Doja"),
				array("idStatie" => "3661","LongName" => "Strada Gheorghe Doja / Parcul Carmen Sylva (Ronat)","ShortName" => "Parcul Doja"),
				array("idStatie" => "3662","LongName" => "Piata Balcescu (P-ta Traian)","ShortName" => "Balcescu"),
				array("idStatie" => "3663","LongName" => "Piata Balcescu (Ronat)","ShortName" => "Balcescu"),
				array("idStatie" => "3664","LongName" => "Piata Crucii (P-ta Traian)","ShortName" => "P-ta Crucii"),
				array("idStatie" => "3680","LongName" => "Piata Crucii (Ronat)","ShortName" => "P-ta Crucii"),
				array("idStatie" => "3681","LongName" => "Strada Cluj (P-ta Traian)","ShortName" => "Cluj"),
				array("idStatie" => "3682","LongName" => "Strada Cluj (Ronat)","ShortName" => "Cluj"),
				array("idStatie" => "3683","LongName" => "Sala Olimpia / Centrul Regional de Afaceri (P-ta Traian)","ShortName" => "Olimpia"),
				array("idStatie" => "3684","LongName" => "Sala Olimpia / Centrul Regional de Afaceri (Ronat)","ShortName" => "Olimpia"),
				array("idStatie" => "3685","LongName" => "Abator (P-ta Traian)","ShortName" => "Abator"),
				array("idStatie" => "3686","LongName" => "Abator (Ronat)","ShortName" => "Abator"),
				array("idStatie" => "3720","LongName" => "Piata 700 / Business Center (Ghe. Baritiu)","ShortName" => "P-ta 700"),
				array("idStatie" => "3741","LongName" => "Facultatea de electrotehnica (Posta Mare)","ShortName" => "Facultatea de electro."),
				array("idStatie" => "3820","LongName" => "DN 6 / Ghiroda (Aeroport)","ShortName" => "Ghiroda"),
				array("idStatie" => "3821","LongName" => "DN 6 / Ghiroda (Bastion)","ShortName" => "Ghiroda"),
				array("idStatie" => "3860","LongName" => "Unitatea Militara Aeroport (Aeroport)","ShortName" => "UM Aeroport"),
				array("idStatie" => "3862","LongName" => "Aeroportul Traian Vuia (Aeroport)","ShortName" => "Aeroport"),
				array("idStatie" => "3880","LongName" => "Cartier Aeroport (Aeroport)","ShortName" => "Cartier aeroport"),
				array("idStatie" => "3881","LongName" => "Cartier Aeroport (Bastion)","ShortName" => "Cartier aeroport"),
				array("idStatie" => "4000","LongName" => "Punctele Cardinale / Bastion (Padurea Verde)","ShortName" => "Bastion"),
				array("idStatie" => "4041","LongName" => "Banatul / Depoul de autobuze (Ronat)","ShortName" => "Banatul"),
				array("idStatie" => "4042","LongName" => "Banatul / Depoul de autobuze (P-ta Traian)","ShortName" => "Banatul"),
				array("idStatie" => "4100","LongName" => "Str. Baader (Baader)","ShortName" => "Baader"),
				array("idStatie" => "4320","LongName" => "Gara de Est (Bastion)","ShortName" => "Gara de Est"),
				array("idStatie" => "4321","LongName" => "Gara de Est (Padurea Verde)","ShortName" => "Gara de Est"),
				array("idStatie" => "4322","LongName" => "UMT (Padurea Verde)","ShortName" => "UMT"),
				array("idStatie" => "4323","LongName" => "UMT (Bastion)","ShortName" => "UMT"),
				array("idStatie" => "4324","LongName" => "Cvartal UMT (Bastion)","ShortName" => "Cvartal UMT"),
				array("idStatie" => "4325","LongName" => "Cvartal UMT (Padurea Verde)","ShortName" => "Cvartal UMT"),
				array("idStatie" => "4341","LongName" => "Muzeul Satului / Padurea Verde (Padurea Verde)","ShortName" => "Padurea Verde"),
				array("idStatie" => "4421","LongName" => "Gara de Sud (Gara de Sud))","ShortName" => "Gara de Sud"),
				array("idStatie" => "4424","LongName" => "Strada Baba Dochia / Printul Turcesc (Banatul)","ShortName" => "Printul Turcesc"),
				array("idStatie" => "4427","LongName" => "AEM (Stuparilor)","ShortName" => "AEM"),
				array("idStatie" => "4428","LongName" => "Strada Sfintii Apostoli Petru si Pavel / Calea Lipovei (Stuparilor)","ShortName" => "Sf. Ap. Petru si Pavel"),
				array("idStatie" => "4429","LongName" => "Strada Apicultorilor (Gara de Nord)","ShortName" => "Apicultorilor"),
				array("idStatie" => "4431","LongName" => "Drubeta / Bulevardul Liviu Rebreanu (Mures Balcescu Dambovita)","ShortName" => "Drubeta"),
				array("idStatie" => "4462","LongName" => "Selgros (Selgros)","ShortName" => "Selgros"),
				array("idStatie" => "4463","LongName" => "Selgros (Pod C. Sagului)","ShortName" => "Selgros"),
				array("idStatie" => "4464","LongName" => "Strada Pop de Basesti / Autogara SuperImposer (Lic. Auto)","ShortName" => "Autogara SuperImposer"),
				array("idStatie" => "4465","LongName" => "Strada Pop de Basesti / Autogara SuperImposer / Pasarela (Gara)","ShortName" => "Pop de Basesti"),
				array("idStatie" => "4483","LongName" => "Gara de Nord (Pod C. Sagului)","ShortName" => "Gara de Nord"),
				array("idStatie" => "4484","LongName" => "Calea Circumvalatiunii / Gheorghe Lazar (Selgros)","ShortName" => "Kaufland"),
				array("idStatie" => "4486","LongName" => "Calea Circumvalatiunii / Piata Dacia (Selgros)","ShortName" => "Circumvalatiunii"),
				array("idStatie" => "4491","LongName" => "Piata Consiliul Europei / Calea Torontalului (Pod C. Sagului)","ShortName" => "Iulius Mall"),
				array("idStatie" => "4492","LongName" => "Strada Miresei (Selgros)","ShortName" => "Miresei"),
				array("idStatie" => "4493","LongName" => "Strada Miresei / Calea Torontalului (Pod C. Sagului)","ShortName" => "Torontalului / Miresei"),
				array("idStatie" => "4494","LongName" => "Calea Torontalului / Strada Liege (Selgros)","ShortName" => "Torontalului"),
				array("idStatie" => "4496","LongName" => "Strada Liege (Selgros)","ShortName" => ""),
				array("idStatie" => "4501","LongName" => "B-dul Iuliu Maniu / Autogara / Iosefin (Gara)","ShortName" => "Autogara"),
				array("idStatie" => "4502","LongName" => "B-dul Iuliu Maniu / Autogara / Iosefin (Lic. Auto)","ShortName" => "Autogara"),
				array("idStatie" => "4503","LongName" => "Pod Calea Sagului (Pod C. Sagului)","ShortName" => "Pod C. Sagului"),
				array("idStatie" => "4504","LongName" => "Pod Calea Sagului (Pod C. Sagului)","ShortName" => "Pod C. Sagului"),
				array("idStatie" => "4582","LongName" => "Piata Consiliul Europei / Calea Torontalului (Selgros)","ShortName" => "Iulius Mall"),
				array("idStatie" => "4640","LongName" => "Catedrala Mitropolitana (UMT)","ShortName" => "Catedrala"),
				array("idStatie" => "4680","LongName" => "Calea Torontalului (Torontalului)","ShortName" => "Torontalului"),
				array("idStatie" => "4700","LongName" => "Spumotim (Ciarda Rosie)","ShortName" => "Spumotim"),
				array("idStatie" => "4701","LongName" => "Spumotim (Torontalului)","ShortName" => "Spumotim"),
				array("idStatie" => "4720","LongName" => "Procter & Gamble (Ciarda Rosie)","ShortName" => "P&G"),
				array("idStatie" => "4760","LongName" => "Piata Veteranilor / Calea Sagului (Pod C. Sagului)","ShortName" => "Veteranilor"),
				array("idStatie" => "4780","LongName" => "Piata Veteranilor / Calea Sagului (Catedrala)","ShortName" => "Veteranilor"),
				array("idStatie" => "4800","LongName" => "Balta Verde (P-ta Traian)","ShortName" => "Balta Verde"),
				array("idStatie" => "4801","LongName" => "Balta Verde (Ronat)","ShortName" => "Balta Verde"),
				array("idStatie" => "4820","LongName" => "Prefatim (Mocioni)","ShortName" => "Prefatim"),
				array("idStatie" => "4840","LongName" => "Prefatim (Gara de Sud)","ShortName" => "Prefatim"),
				array("idStatie" => "4860","LongName" => "Spitalul Judetean (AEM)","ShortName" => "Spitalul Judetean"),
				array("idStatie" => "4920","LongName" => "Piata Maria (Ronat)","ShortName" => "P-ta Maria"),
				array("idStatie" => "4980","LongName" => "Lidia / Drubeta (Dambovita Balcescu Mures)","ShortName" => "Lidia"),
				array("idStatie" => "4981","LongName" => "Strada Lidia / Drubeta (Mures Balcescu Dambovita)","ShortName" => "Lidia"),
				array("idStatie" => "5000","LongName" => "Strada Mures (Dambovita Balcescu Mures)","ShortName" => "Mures"),
				array("idStatie" => "5001","LongName" => "Strada Mures (Mures Balcescu Dambovita)","ShortName" => "Mures"),
				array("idStatie" => "5020","LongName" => "Strada Ivan Petrovici Pavlov (Dambovita Balcescu Mures)","ShortName" => "Pavlov"),
				array("idStatie" => "5021","LongName" => "Strada Ivan Petrovici Pavlolv (Mures Balcescu Dambovita)","ShortName" => "Pavlov"),
				array("idStatie" => "5040","LongName" => "Strada Progresul / Strada Alunis (Dambovita Balcescu Mures)","ShortName" => "Progresul"),
				array("idStatie" => "5041","LongName" => "Strada Progresul / Strada Alunis (Mures Balcescu Dambovita)","ShortName" => "Progresul"),
				array("idStatie" => "5060","LongName" => "Strada Izlaz (Dambovita Balcescu Mures)","ShortName" => "Izlaz"),
				array("idStatie" => "5061","LongName" => "Strada Izlaz (Mures Balcescu Dambovita)","ShortName" => "Izlaz"),
				array("idStatie" => "5080","LongName" => "Strada Chisodei (Dambovita Balcescu Mures)","ShortName" => "Chisodei"),
				array("idStatie" => "5081","LongName" => "Strada Chisodei (Mures Balcescu Dambovita)","ShortName" => "Chisodei"),
				array("idStatie" => "5100","LongName" => "Veteranilor / Calea Sagului (Dambovita Balcescu Mures)","ShortName" => "Veteranilor"),
				array("idStatie" => "5101","LongName" => "Veteranilor / Calea Sagului (Mures Balcescu Dambovita)","ShortName" => "Veteranilor"),
				array("idStatie" => "5120","LongName" => "Transilvania / Ana Ipatescu (Dambovita Balcescu Mures)","ShortName" => "Transilvania"),
				array("idStatie" => "5140","LongName" => "E.on GAZ (Dambovita Balcescu Mures)","ShortName" => "E.on"),
				array("idStatie" => "5141","LongName" => "E.on GAZ (Mures Balcescu Dambovita)","ShortName" => "E.on"),
				array("idStatie" => "5160","LongName" => "Drubeta / Bulevardul Liviu Rebreanu (Dambovita Balcescu Mures)","ShortName" => "Drubeta"),
				array("idStatie" => "5200","LongName" => "Pasaj CFR (Pod C.F)","ShortName" => "Pasaj C.F"),
				array("idStatie" => "5220","LongName" => "Dedeman (AEM)","ShortName" => "Dedeman"),
				array("idStatie" => "5240","LongName" => "Bastion (Stuparilor)","ShortName" => "Bastion"),
				array("idStatie" => "5260","LongName" => "Hotel Continental (AEM)","ShortName" => "Hotel Continental"),
				array("idStatie" => "5280","LongName" => "Strada Muzicescu (Apicultorilor)","ShortName" => "Muzicescu"),
				array("idStatie" => "5281","LongName" => "Strada Muzicescu (Gara de Nord)","ShortName" => "Muzicescu"),
				array("idStatie" => "5282","LongName" => "Strada Mures / Plafar (Apicultorilor)","ShortName" => "Mures"),
				array("idStatie" => "5283","LongName" => "Strada Mures / Plafar (Gara de Nord)","ShortName" => "Mures"),
				array("idStatie" => "5300","LongName" => "Catedrala Mitropolitana (Gara de Nord)","ShortName" => "Catedrala"),
				array("idStatie" => "5320","LongName" => "Facultatea de Mecanica (Pod C. Sagului)","ShortName" => "Fac. de mecanica"),
				array("idStatie" => "5321","LongName" => "Piata Balcescu (Pod C. Sagului)","ShortName" => "Balcescu"),
				array("idStatie" => "5340","LongName" => "Pod Calea Sagului (Pod C. Sagului)","ShortName" => "Pod C. Sagului"),
				array("idStatie" => "5360","LongName" => "Strada Ciprian Porumbescu (Apateu)","ShortName" => "Porumbescu"),
				array("idStatie" => "5361","LongName" => "Strada Corbului (Apateu)","ShortName" => "Corbului"),
				array("idStatie" => "5380","LongName" => "Piata Balcescu (Apateu)","ShortName" => "Balcescu"),
				array("idStatie" => "5400","LongName" => "Facultatea de mecanica (Apateu)","ShortName" => "Fac. de mecanica"),
				array("idStatie" => "5440","LongName" => "Strada Uzinei / Parcul Uzinei (Ialomitei)","ShortName" => "Uzinei"),
				array("idStatie" => "5460","LongName" => "Strada Ismail / Cartier Crisana (Ialomitei)","ShortName" => "Ismail"),
				array("idStatie" => "5480","LongName" => "Strada Carabusului / Aleea Ghirodei (Ialomitei)","ShortName" => "Carabusului"),
				array("idStatie" => "5481","LongName" => "Strada Prieteniei / Aleea Ghirodei (Ialomitei)","ShortName" => "Prieteniei"),
				array("idStatie" => "5500","LongName" => "Real (Metro)","ShortName" => "Real"),
				array("idStatie" => "5501","LongName" => "Real / Practiker (Turist)","ShortName" => "Real"),
				array("idStatie" => "5520","LongName" => "Metro (Mocioni)","ShortName" => "Metro"),
				array("idStatie" => "5540","LongName" => "Pod Ghiroda (Bastion)","ShortName" => "Pod Ghiroda"),
				array("idStatie" => "5780","LongName" => "Strada Ialomita / Ghiroda (Ghiroda)","ShortName" => "Ialomita"),
				array("idStatie" => "5800","LongName" => "Strada Ialomita / Ghiroda (Bastion)","ShortName" => "Ialomita"),
				array("idStatie" => "5820","LongName" => "Primaria comunei Ghiroda (Ghiroda)","ShortName" => "Primaria Ghiroda"),
				array("idStatie" => "5840","LongName" => "Primaria comunei Ghiroda (Bastion)","ShortName" => "Primaria Ghiroda"),
				array("idStatie" => "5841","LongName" => "Calea Lugojului / Ghiroda (Ghiroda)","ShortName" => "Intrare Ghiroda"),
				array("idStatie" => "5842","LongName" => "Calea Lugojului / Ghiroda (Bastion)","ShortName" => "Intrare Ghiroda"),
				array("idStatie" => "5940","LongName" => "Bastion (Aeroport)","ShortName" => "Bastion"),
				array("idStatie" => "5960","LongName" => "Abator (FZB)","ShortName" => "Abator"),
				array("idStatie" => "5961","LongName" => "Strada Polona (FZB)","ShortName" => "Polona"),
				array("idStatie" => "5962","LongName" => "Strada Podgoriei (FZB)","ShortName" => "Podgoriei"),
				array("idStatie" => "5963","LongName" => "Strada Podgoriei (Posta Mare)","ShortName" => "Podgoriei"),
				array("idStatie" => "5964","LongName" => "Piata Petofi Sandor / Liceul Auto (FZB)","ShortName" => "Lic. Auto"),
				array("idStatie" => "5965","LongName" => "Piata Petofi Sandor / Liceul Auto (Posta Mare)","ShortName" => "Lic. Auto"),
				array("idStatie" => "6000","LongName" => "Strada Liege / Calea Torontalului (PITT)","ShortName" => "Torontalului"),
				array("idStatie" => "6001","LongName" => "PITT (PITT)","ShortName" => "PITT"),
				array("idStatie" => "6003","LongName" => "Metro (PITT)","ShortName" => "Metro"),
				array("idStatie" => "6040","LongName" => "Strada Pacii (Lic. Auto)","ShortName" => "Pacii"),
				array("idStatie" => "6041","LongName" => "Strada Pacii (Gara)","ShortName" => "Pacii"),
				array("idStatie" => "6120","LongName" => "Bastion (Bastion)","ShortName" => "Bastion"),
				array("idStatie" => "6121","LongName" => "Pod Ghiroda (Ghiroda)","ShortName" => "Pod Ghiroda"),
				array("idStatie" => "6140","LongName" => "Aleea Padurea Verde (Giarmata Vii)","ShortName" => "Padurea Verde"),
				array("idStatie" => "6141","LongName" => "Aleea Padurea Verde (Bastion)","ShortName" => "Padurea Verde"),
				array("idStatie" => "6142","LongName" => "Halta / Giarmata Vii (Giarmata Vii)","ShortName" => "Halta"),
				array("idStatie" => "6144","LongName" => "Halta / Giarmata Vii (Bastion)","ShortName" => "Halta"),
				array("idStatie" => "6145","LongName" => "Biserica Catolica / Giarmata Vii (Bastion)","ShortName" => "Biserica"),
				array("idStatie" => "6146","LongName" => "Biserica Catolica / Giarmata Vii (Giarmata Vii)","ShortName" => "Biserica"),
				array("idStatie" => "6160","LongName" => "Bastion (Bastion)","ShortName" => "Bastion"),
				array("idStatie" => "6180","LongName" => "Calea Circumvalatiunii / Gheorghe Lazar (Pod C. Sagului)","ShortName" => "Billa"),
				array("idStatie" => "6181","LongName" => "Calea Circumvalatiunii / Piata Dacia (Pod C. Sagului)","ShortName" => "Circumvalatiunii"),
				array("idStatie" => "6200","LongName" => "Strada Traian Grozavescu / Posta - disabled see column N (FZB)","ShortName" => "Posta Mare"),
				array("idStatie" => "6240","LongName" => "Real (Aeroport)","ShortName" => "Real"),
				array("idStatie" => "6241","LongName" => "Real (Bastion)","ShortName" => "Real"),
				array("idStatie" => "6260","LongName" => "Abator (Posta Mare)","ShortName" => "Abator"),
				array("idStatie" => "6800","LongName" => "Metro (P-ta Consiliul Europei)","ShortName" => "Metro"),
				array("idStatie" => "6840","LongName" => "Piata 700 / City Business Center (Ronat)","ShortName" => "P-ta 700"),
				array("idStatie" => "6841","LongName" => "Piata 700 / City Business Center (P-ta Traian)","ShortName" => "P-ta 700"),
				array("idStatie" => "6861","LongName" => "Strada Corbului (Pod C. Sagului)","ShortName" => "Corbului"),
				array("idStatie" => "6880","LongName" => "Piata Traian (Ronat)","ShortName" => "P-ta Traian"),
				array("idStatie" => "6900","LongName" => "Piata Traian (Torontalului)","ShortName" => "P-ta Traian"),
				array("idStatie" => "6940","LongName" => "Strada Apateu (Pod C. Sagului)","ShortName" => "Apateu"),
				array("idStatie" => "6941","LongName" => "Strada Levantica (Pod C. Sagului)","ShortName" => "Levantica"),
				array("idStatie" => "6943","LongName" => "Strada Vasile Carlova (Banatul)","ShortName" => "V. Carlova"),
				array("idStatie" => "6960","LongName" => "Strada Iosif Vulcan (Banatul)","ShortName" => "I. Vulcan"),
				array("idStatie" => "6980","LongName" => "Strada Albastrelelor (Banatul)","ShortName" => "Albastrelelor"),
				array("idStatie" => "7040","LongName" => "Strand Termal (Sanmihai)","ShortName" => "Strand"),
				array("idStatie" => "7041","LongName" => "Strand Termal (Sinaia)","ShortName" => "Strand"),
				array("idStatie" => "7060","LongName" => "Pod Sanmihai Roman (Sanmihai)","ShortName" => "Pod SR"),
				array("idStatie" => "7061","LongName" => "Pod Sanmihai Roman (Sinaia)","ShortName" => "Pod SR"),
				array("idStatie" => "7062","LongName" => "Benzinarie / Sanmihaiul Roman (Sanmihai)","ShortName" => "Benzinarie"),
				array("idStatie" => "7063","LongName" => "Utivin Balta (Sanmihai)","ShortName" => "Balta"),
				array("idStatie" => "7064","LongName" => "Utivin Balta (Sinaia)","ShortName" => "Balta"),
				array("idStatie" => "7065","LongName" => "Utvin Biserica (Sanmihai)","ShortName" => "Biserica"),
				array("idStatie" => "7066","LongName" => "Utvin Biserica (Sinaia)","ShortName" => "Biserica"),
				array("idStatie" => "7067","LongName" => "Utvin Platforma Industriala (Sanmihai)","ShortName" => "PI Ind"),
				array("idStatie" => "7068","LongName" => "Utvin PIatforma Industriala (Sinaia)","ShortName" => "PI Ind"),
				array("idStatie" => "7080","LongName" => "Sanmihai German (Sanmihai)","ShortName" => "SG"),
				array("idStatie" => "7100","LongName" => "Primaria Sanmihai Roman (Sanmihai)","ShortName" => "Primaria SR"),
				array("idStatie" => "7101","LongName" => "Primaria Sanmihai Roman (Sinaia)","ShortName" => "Primaria SR"),
				array("idStatie" => "7121","LongName" => "Benzinarie / Sanmihaiul Roman (Sinaia)","ShortName" => "Benzinarie"),
				array("idStatie" => "7140","LongName" => "Sanmihai German (Sinaia)","ShortName" => "SG"),
				array("idStatie" => "7160","LongName" => "Hella (Aeroport)","ShortName" => "Hella"),
				array("idStatie" => "7200","LongName" => "Complex (Giarmata Vii)","ShortName" => "Complex"),
				array("idStatie" => "7201","LongName" => "Complex (Bastion)","ShortName" => "Complex"),
				array("idStatie" => "7220","LongName" => "Facultatea de teologie (P-ta Traian)","ShortName" => "Fac. de teologie"),
				array("idStatie" => "7221","LongName" => "Facultatea de teologie (Stadion Rugby)","ShortName" => "Fac. de teologie"),
				array("idStatie" => "7240","LongName" => "Strada Caprioarei (Pod C. Sagului)","ShortName" => "Caprioarei"),
				array("idStatie" => "7241","LongName" => "Strada Apateu (Apateu)","ShortName" => "Apateu"),
				array("idStatie" => "7620","LongName" => "Platforma Industriala Freidorf (Freidorf)","ShortName" => "Freidorf"),
				array("idStatie" => "7840","LongName" => "Dacia Service (Stuparilor)","ShortName" => "Dacia Service"),
				array("idStatie" => "7860","LongName" => "Becicherecu Mic (Becicherecu Mic)","ShortName" => "Becicherecu Mic"),
				array("idStatie" => "7861","LongName" => "Becicherecu Mic (TM)","ShortName" => "Becicherecu Mic"),
				array("idStatie" => "7880","LongName" => "Becicerecu Mic / Baza Sportiva (Becicherecu Mic)","ShortName" => "Baza Sportiva"),
				array("idStatie" => "7881","LongName" => "Becicherecu Mic / Baza Sportiva (TM)","ShortName" => "Baza Sportiva"),
				array("idStatie" => "7900","LongName" => "Strada Venus (AEM)","ShortName" => "Str. Venus"),
				array("idStatie" => "7940","LongName" => "Stadion Rugby / Strada Theodor Aman (Stadion Rugby)","ShortName" => "Stadion Rugby"),
				array("idStatie" => "7960","LongName" => "Bulevardul Cetatii (Balta Verde)","ShortName" => "Cetatii"),
				array("idStatie" => "7980","LongName" => "Strada Macilor (Balta Verde)","ShortName" => "Macilor"),
				array("idStatie" => "7981","LongName" => "Strada Moise Dobosan / Strada Grigore Alexandrescu (Balta Verde)","ShortName" => "G. Alexandrescu"),
				array("idStatie" => "8000","LongName" => "Strada Moise Dobosan / Livezilor (Balta Verde)","ShortName" => "Livezilor"),
				array("idStatie" => "8001","LongName" => "Strada Theodor Aman / Strada Moise Dobosan (Balta Verde)","ShortName" => "M. Dobosan"),
				array("idStatie" => "8020","LongName" => "Strada Constantin A. Rosseti / Biserica Ortodoxa Ronat (Stadion Rugby)","ShortName" => "Biserica Ronat"),
	);



    public function select($field, $value)
    {
        $list = array();
        foreach ($this->_statii as $statie) {
            if ($statie[$field] == $value) {
                $list[] = $statie;
            }
        }
        return $list;
    }
    public function gasesteStatie($id)
    {
    	$list = array();
    	foreach ($this->_statii as $statie) {
    		if($statie['idStatie'] == $id){
    			$list[] = $statie;
    		}
    	}
    	return $list;
    }
}


/**
* Clasa ce defineste principalele caracteristici ale unui mijloc de transport. Folosita pentru emularea datelor
* https://spreadsheets.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0AtCtEmR70abcdG5ZaWRpRnI5dTFlUXN3U3Y0c0N2Wmc&output=html
*/
class MijlocTransport
{
	protected $_mijloaceTransport = array(
										array("idMijloc" => "1207", "numarLinie"=>"3"),
										array("idMijloc" => "1066", "numarLinie"=>"13"),
										array("idMijloc" => "2546", "numarLinie"=>"13b"),
										array("idMijloc" => "1146", "numarLinie"=>"21"),
										array("idMijloc" => "1226", "numarLinie"=>"28"),
										array("idMijloc" => "1546", "numarLinie"=>"32"),
										array("idMijloc" => "1046", "numarLinie"=>"33"),
										array("idMijloc" => "2466", "numarLinie"=>"33b"),
										array("idMijloc" => "886" , "numarLinie"=>"40"),
										array("idMijloc" => "1406", "numarLinie"=>"46"),
										array("idMijloc" => "1550", "numarLinie"=>"E1"),
										array("idMijloc" => "1551", "numarLinie"=>"E2"),
										array("idMijloc" => "1552", "numarLinie"=>"E3"),
										array("idMijloc" => "1926", "numarLinie"=>"E4"),
										array("idMijloc" => "2486", "numarLinie"=>"E4b"),
										array("idMijloc" => "1526", "numarLinie"=>"E5"),
										array("idMijloc" => "1928", "numarLinie"=>"E6"),
										array("idMijloc" => "2026", "numarLinie"=>"E7"),
										array("idMijloc" => "1326", "numarLinie"=>"E7b"),
										array("idMijloc" => "1547", "numarLinie"=>"E8"),
										array("idMijloc" => "1746", "numarLinie"=>"M30"),
										array("idMijloc" => "1986", "numarLinie"=>"M35"),
										array("idMijloc" => "2006", "numarLinie"=>"M36"),
										array("idMijloc" => "2506", "numarLinie"=>"M44"),
										array("idMijloc" => "990", "numarLinie"=>"Tb11"),
										array("idMijloc" => "1006", "numarLinie"=>"Tb14"),
										array("idMijloc" => "989", "numarLinie"=>"Tb15"),
										array("idMijloc" => "1206", "numarLinie"=>"Tb16"),
										array("idMijloc" => "1086", "numarLinie"=>"Tb17"),
										array("idMijloc" => "1166", "numarLinie"=>"Tb18"),
										array("idMijloc" => "1186", "numarLinie"=>"Tb19"),
										array("idMijloc" => "1106", "numarLinie"=>"TV1"),
										array("idMijloc" => "1126", "numarLinie"=>"Tv2"),
										array("idMijloc" => "1266", "numarLinie"=>"Tv4"),
										array("idMijloc" => "1553", "numarLinie"=>"Tv5"),
										array("idMijloc" => "2226", "numarLinie"=>"Tv6"),
										array("idMijloc" => "1556", "numarLinie"=>"Tv7"),
										array("idMijloc" => "1557", "numarLinie"=>"Tv7"),
										array("idMijloc" => "1558", "numarLinie"=>"Tv8"),
										array("idMijloc" => "2406", "numarLinie"=>"Tv9")
									);
	public function gasesteMijlocTransport($id)
    {
    	$list = array();
    	foreach ($this->_mijloaceTransport as $mijlocTransport) {
    		if($mijlocTransport['idMijloc'] == $id){
    			return $mijlocTransport["numarLinie"];
    		}
    	}
    }
}


/**
* Clasa ce defineste principalele trasee ale unui mijloc de transport. Folosita pentru emularea datelor
* https://spreadsheets.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0AtCtEmR70abcdG5ZaWRpRnI5dTFlUXN3U3Y0c0N2Wmc&output=html
*/
class Traseu
{
	protected $_trasee = array(
				array("idTraseu" => "1207", "traseu"=>"3106,4464,4502,8080,6041,3620,2920,6040,2923,2924,5962,2926,2928,5961,2947,5960,2925,2922,6041,2921,3602,2821,2822,2889,4501,4465,2768"),
				array("idTraseu" => "1066", "traseu"=>"3060,3007,3412,3011,3013,3015,3017,3019,3021,5200,5200,3022,3020,3018,3016,3014,3012,3413,3008,3060"),
				array("idTraseu" => "2546", "traseu"=>"3548,7221,3643,3645,3647,8020,7940,7940,8001,8000,7981,7980,7960,3548"),
				array("idTraseu" => "1146", "traseu"=>"3560,3556,2839,3411,3400,3405,3401,3403,3406,3408,3420,3420,6980,3402,6943,6960,4424,2828,3554,3561"),
				array("idTraseu" => "1226", "traseu"=>"5440,2971,3506,2661,2663,5460,3505,5480,5481,2650,2652,2652,2653,2654,2655,2656,5440"),
				array("idTraseu" => "1546", "traseu"=>"2666,2701,2703,2705,2707,2713,2714,2715,4840,2717,2719,4421,4421,2723,4820,2730,2733,2734,2736,2739,2740,2694,2695"),
				array("idTraseu" => "1046", "traseu"=>"2799,2666,2667,2668,2669,4760,2687,4503,4503,2673,4780,2690,2691,2694,2695,2799"),
				array("idTraseu" => "2466", "traseu"=>"4760,2687,2675,2679,5500,2680,2680,5501,2684,2685,2673,4760"),
				array("idTraseu" => "886" , "traseu"=>"3220,3225,3226,3240,3241,3245,3247,3247,3248,2963,3280,3255,3260,3224,3220"),
				array("idTraseu" => "1406", "traseu"=>"4000,2798,2808,3104,4321,4322,4325,4341,4341,4324,4323,4320,3104,2800,2968,4000"),
				array("idTraseu" => "1550", "traseu"=>"4503,2673,4780,2690,2889,4501,4465,2768,4484,4486,4582,4492,4494,4496,2955,4462,4463,2956,2960,2957,4493,4491,6181,6180,4483,4464,4502,2668,2669,4760,2687,4504"),
				array("idTraseu" => "1551", "traseu"=>"4427,3004,3000,2718,2979,5240,2965,7840,2964,3281,4428,3250,3250,5220,2952,2966,5260,2980,2716,4860,3003,7900,4427"),
				array("idTraseu" => "1552", "traseu"=>"4429,5281,5283,2726,2722,2718,2979,2807,5300,2773,3106,2768,2772,3200,2826,2980,2716,2720,2724,5282,5280,4429"),
				array("idTraseu" => "1926", "traseu"=>"5940,3103,2971,3820,6240,7160,3880,3860,3862,3862,3881,6241,3821,2972,3104,2968,5940"),
				array("idTraseu" => "2486", "traseu"=>"2672,2768,2781,4000,3862,3862,2967,3720,3106,2671"),
				array("idTraseu" => "1526", "traseu"=>"2666,2667,2668,2669,4760,2687,2675,2679,5500,2680,2682,2682,5520,5501,2684,2685,2673,4780,2690,2691,2694,2695"),
				array("idTraseu" => "1928", "traseu"=>"2965,4492,6000,6003,6001,6001,6800,2957,4493,2965"),
				array("idTraseu" => "2026", "traseu"=>"6200,2706,2806,2807,2809,2666,2667,8080,6041,2812,2813,2815,2816,5964,5962,2926,2928,5961,2947,5960,6260,2948,2946,2929,2927,5963,5965,2819,2820,2814,2821,2822,2691,2694,2695,3741,2826,2706"),
				array("idTraseu" => "1326", "traseu"=>"2666,2667,2810,2812,2813,2815,2816,5964,5962,2926,2928,2945,7620,7620,2946,2929,2927,5963,5965,2819,2820,2814,2821,2822,2691,2694,2695"),
				array("idTraseu" => "1547", "traseu"=>"6940,6941,7240,6943,6960,4424,2828,2829,2831,2806,2807,5320,5321,6861,2668,2669,4760,2687,5340,5340,2836,2837,4780,2690,5360,5361,5380,5400,3741,2826,2833,2838,2830,2839,3411,3400,3405,2841,2842,7241"),
				array("idTraseu" => "1746", "traseu"=>"5940,3103,2971,5841,5820,5780,6121,5540,5800,5840,5842,2972,3104,2968,6160"),
				array("idTraseu" => "1986", "traseu"=>"5940,3103,2971,6140,6142,7200,6146,6145,7201,6144,6141,2972,3104,6120"),
				array("idTraseu" => "2006", "traseu"=>"2666,2667,2812,5964,5960,7067,7065,7063,7060,7062,7100,7040,7080,7140,7041,7101,7121,7061,7064,7066,7068,6260,5965,2821,2691,2695"),
				array("idTraseu" => "2506", "traseu"=>"3560,5240,3007,4484,4582,4492,7880,7860,7861,7881,4493,4491,3080,5260,2980,3561"),
				array("idTraseu" => "990",  "traseu"=>"2672,3120,2768,2772,3102,2781,3060,4000,2798,3103,3160,2823,2971,2973,2974,2972,2824,3161,3104,2800,2968,2967,3720,3105,2773,3106,2764,2671"),
				array("idTraseu" => "1006", "traseu"=>"2672,3120,2768,2772,3102,2781,3060,2784,3361,2964,3281,2962,2793,2794,2963,3280,3255,3362,2966,3720,3105,2773,3106,2764,2671"),
				array("idTraseu" => "989",  "traseu"=>"6200,2980,2718,2720,2724,2728,3041,3041,2732,2726,2722,2716,2979,2706"),
				array("idTraseu" => "1206", "traseu"=>"6200,2980,2716,4860,3002,3003,3005,3006,3004,3000,2718,2979,2706"),
				array("idTraseu" => "1086", "traseu"=>"2956,2954,2951,2952,2966,3080,4000,2798,4100,4100,2800,2968,2967,2965,2961,2950,2953,2955"),
				array("idTraseu" => "1166", "traseu"=>"2756,2759,3120,2768,2772,3102,2781,3060,2965,2961,2960,2960,2957,4493,2966,3720,3105,2773,3106,2764,2760,3107"),
				array("idTraseu" => "1186", "traseu"=>"2976,2975,2980,2716,2720,2724,2728,3041,3041,2732,2726,2722,2718,2979,2807,2977,2976"),
				array("idTraseu" => "1106", "traseu"=>"3243,2702,2708,2727,4640,3164,3166,3168,3170,3172,3174,2735,2745,2748,3176,2752,2754,2754,2763,2766,3253,3175,3173,3171,3169,3167,3165,3163,3181,2710,2704,3244"),
				array("idTraseu" => "1126", "traseu"=>"2880,2882,2884,2886,2888,2708,2727,4640,3164,3166,3168,3170,3172,3174,3254,2767,2765,2761,2755,2755,2753,3177,2749,2747,2738,3175,3173,3171,3169,3167,3165,3163,3181,2710,2704,2887,2885,2883,2881"),
				array("idTraseu" => "1266", "traseu"=>"3540,3542,3544,3546,3548,3550,3552,3164,3166,3168,3170,3172,3174,3554,3561,4720,3564,4700,3566,3568,3571,3573,3574,3572,3569,3567,4701,3565,3563,3560,3556,3175,3173,3171,3169,3167,3165,3553,3551,3549,3547,3545,3543,4680"),
				array("idTraseu" => "1553", "traseu"=>"3653,3650,3648,3646,3644,3642,3640,7220,4800,3550,3552,3164,3166,3168,3170,3172,3174,6880,3556,4041,3686,3684,3682,3680,3663,3661,4920,4640,6840,3553,3551,4801,7221,3641,3643,3645,3647,3649,3651,3652"),
				array("idTraseu" => "2226", "traseu"=>"3540,3542,3544,3546,3548,3550,3552,6841,3163,3181,3660,3662,3664,3681,3683,3685,4042,3556,3175,6900,3173,3171,3169,3167,3165,3553,3551,3549,3547,3545,3543,4680"),
				array("idTraseu" => "1556", "traseu"=>"2880,2882,2884,2886,2888,2708,2727,3660,3662,5140,5160,5160,4980,5000,5020,5040,2734,5060,5080,5100,5120,3600,2880"),
				array("idTraseu" => "1557", "traseu"=>"2881,3601,3599,5101,5081,5061,2713,5041,5021,5001,4981,4431,4431,5141,3663,3661,4920,2710,2704,2887,2885,2883,2881"),
				array("idTraseu" => "1558", "traseu"=>"3243,2702,2708,2727,3660,3662,3664,3681,3683,3685,4042,4720,3564,4700,3566,3567,4701,3565,3563,3560,3686,3684,3682,3680,3663,3661,4920,2710,2704,3244"),
				array("idTraseu" => "2406", "traseu"=>"3580,3582,3584,3586,3588,3590,3592,3594,3596,3598,3600,3620,3620,3601,3599,3597,3595,3593,3591,3589,3587,3585,3583,3581")

		);
	public function getTraseu($id)
    {
    	foreach ($this->_trasee as $traseu) {
    		if($traseu['idTraseu'] == $id){
    			return $traseu['traseu'];
    		}
    	}
    }
    public function listaTraseeStatie($statie)
    {
    	$return = array();
    	foreach ($this->_trasee as $traseu) {
    		$statii = explode(",", $traseu["traseu"]);
    		for ($i=0; $i<count($statii); $i++)
    		{
    			if ($statii[$i] == $statie) {
    				$return[] = $traseu["idTraseu"];
    			}
    		}

    	}
    	return $return;
    }
}


//initializare variable de clasa
$statii = new Statie();
$trasee = new Traseu();
$mijloace = new MijlocTransport();






function processTime($input)
{
	$searchedString = "Sosire1: ";
	$nextString = "Sosire2:";
	$position1 = strpos(strip_tags($input), $searchedString) + strlen($searchedString); //Detecting the end position of "Sosire1: " 
	$position2 = strpos(strip_tags($input), $nextString) - $position1 - 1;
	return substr(strip_tags($input), $position1, $position2);
}






//procesare requesturi primite prin parametri
if(isset($_GET['traseu']) && isset($_GET['statie']))
{
	$response = array('nume_traseu' => $mijloace->gasesteMijlocTransport($_GET['traseu']));
	$string = 'http://www.ratt.ro/txt/afis_msg.php?id_traseu='.$_GET['traseu'].'&id_statie='.$_GET['statie'];

	$ch = curl_init($string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$content = curl_exec($ch);
	curl_close($ch);

	$response[] = array("nod"=> $_GET['statie'], "detalii_nod" => $statii->gasesteStatie($_GET['statie']), "sosire" => processTime($content));
	echo json_encode($response);

}
elseif (isset($_GET['traseu'])) 
{
	if($_GET['traseu']>0)
	{
		if(!is_null(($traseu = $trasee->getTraseu($_GET['traseu']))))
		{
			$statie = explode(",", $traseu);
			$response = array('nume_traseu' => $mijloace->gasesteMijlocTransport($_GET['traseu']));

			foreach ($statie as $nod) {
				$string = 'http://www.ratt.ro/txt/afis_msg.php?id_traseu='.$_GET['traseu'].'&id_statie='.$nod;

				$ch = curl_init($string);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$content = curl_exec($ch);
				curl_close($ch);

				$response[] = array("nod"=> $nod, "detalii_nod" => $statii->gasesteStatie($nod), "sosire" => processTime($content));
			}
			echo json_encode($response);

		}else{
			echo json_encode(array("error" => "traseul specificat este incorrect"));
		}
	}
}
	
elseif (isset($_GET['statie'])) 
{
	# code...
	$trasee = $trasee->listaTraseeStatie($_GET['statie']);
	$response = array();
	foreach ($trasee as $traseu) 
	{
		$response2 = array('nume_traseu' => $mijloace->gasesteMijlocTransport($traseu));

		$string = 'http://www.ratt.ro/txt/afis_msg.php?id_traseu='.$traseu.'&id_statie='.$_GET['statie'];
		$ch = curl_init($string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$content = curl_exec($ch);
		curl_close($ch);

		$response2[] = array("nod"=> $_GET['statie'], "detalii_nod" => $statii->gasesteStatie($_GET['statie']), "sosire" => processTime($content));

		$response[] = $response2;
		

	}
	echo json_encode($response);
}
			


?>