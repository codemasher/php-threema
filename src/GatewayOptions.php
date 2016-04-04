<?php
/**
 * Class GatewayOptions
 *
 * @filesource   GatewayOptions.php
 * @created      02.04.2016
 * @package      chillerlan\Threema\Containers
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2016 Smiley
 * @license      MIT
 */

namespace chillerlan\Threema;

/**
 *
 */
class GatewayOptions{

	/**
	 * @var string
	 */
	public $gatewayInterface = GatewayEndpoint::class;

	/**
	 * @var string
	 */
	public $configPath = __DIR__.'/../config';

	/**
	 * @var string
	 */
	public $configFilename = '.threema';

	/**
	 * @var string
	 */
	public $storagePath = __DIR__.'/../storage';

	/**
	 * full path to the CA Root Certificates for use with CURL/SSL
	 * @link https://curl.haxx.se/ca/cacert.pem
	 *
	 * @var string
	 */
	public $cacert = __DIR__.'/../storage/cacert.pem';

}