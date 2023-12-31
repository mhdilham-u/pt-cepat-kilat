<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'adminfilter' => \App\Filters\AdminFilter::class,
		'pelangganfilter' => \App\Filters\PelangganFilter::class,
		// 'siswafilter' => \App\Filters\SiswaFilter::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'adminfilter' => ['except' => [
				'auth', 'auth/*',
				'login', 'login/*',
				'register', 'register/*'
			]],
			'pelangganfilter' => ['except' => [
				'auth', 'auth/*',
				'login', 'login/*',
				'register', 'register/*'
			]]
			// 'siswafilter' => ['except' => [
			// 	'auth', 'auth/*',
			// 	'login', 'login/*',
			// 	'register', 'register/*'
			// ]]

			// 'adminfilter' => ['except' => [
			// 	'auth', 'auth/*',
			// 	'login', 'login/*'
			// ]],
		],
		'after'  => [
			'adminfilter' => ['except' => [
				'home', 'home/*',
				// 'siswa', 'siswa/*',
				'pengiriman', 'pengiriman/*',
				'pembayaran', 'pembayaran/*',
				'pelacakan', 'pelacakan/*',
				'pengambilan', 'pengambilan/*',
				'pengembalian', 'pengembalian/*',
				'kelas', 'kelas/*',
				'petugas', 'petugas/*',
				'spp', 'spp/*',
				'laporan', 'laporan/*',
				'history', 'history/*',
				'transaksi', 'transaksi/*',
				'profile', 'profile/*',
				'dashboard', 'dashboard/*',
				'logout', 'logout/*',
			]],
			'pelangganfilter' => ['except' => [
				'home', 'home/*',
				// 'siswa', 'siswa/*',
				'pengiriman', 'pengiriman/*',
				'pembayaran', 'pembayaran/*',
				'pelacakan', 'pelacakan/*',
				'pengambilan', 'pengambilan/*',
				'pengembalian', 'pengembalian/*',
				'kelas', 'kelas/*',
				'petugas', 'petugas/*',
				'spp', 'spp/*',
				'laporan', 'laporan/*',
				'history', 'history/*',
				'transaksi', 'transaksi/*',
				'profile', 'profile/*',
				'dashboard', 'dashboard/*',
				'logout', 'logout/*',
			]]
			// 'siswafilter' => ['except' => [
			// 	'home', 'home/*',
			// 	'history', 'history/*',
			// 	'profile', 'profile/*',
			// 	'logout', 'logout/*',
			// ]]
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
