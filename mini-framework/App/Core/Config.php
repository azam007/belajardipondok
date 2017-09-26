<?php

namespace App\Core;

class Config
{
	const
	/*-------------------------------------------*\
	| Konfigurasi Database dan Host               |
	\*-------------------------------------------*/
	DB_HOST 				= 'localhost',
	DB_NAME 				= 'mini',
	DB_USER 				= 'root',
	DB_PASS 				= 'root',

	/*-------------------------------------------*\
	| Konfigurasi PATH  			              |
	\*-------------------------------------------*/
	PATH_CONTROLLERS 		= 'App/Controllers/',
	PATH_MODELS 			= 'App/Models/',
	PATH_VIEWS 				= 'App/Views/',


	/*-------------------------------------------*\
	| NOTIFICATION 					              |
	\*-------------------------------------------*/
	NOTIF_INPUT_SUCCESS 	= 'Data Berhasil diinput',
	NOTIF_INPUT_FAILED  	= 'Data Gagal diinput',
	NOTIF_UPDATE_SUCCESS 	= 'Data Berhasil diperbarui',
	NOTIF_UPDATE_FAILED  	= 'Data Gagal diperbarui'
	;
}