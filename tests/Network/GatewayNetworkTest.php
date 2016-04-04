<?php
/**
 *
 * @filesource   GatewayNetworkTest.php
 * @created      03.04.2016
 * @package      chillerlan\ThreemaTest
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2016 Smiley
 * @license      MIT
 */

namespace chillerlan\ThreemaTest\Network;

/**
 * Class GatewayNetworkTest
 */
class GatewayNetworkTest extends NetworkTestAbstract{

	public function testCheckCredits(){
		$this->assertEquals($this->testdata->credits, $this->threemaGateway->checkCredits());
	}

	public function testCheckCapabilities(){
		$this->assertEquals(['image','text','video'], $this->threemaGateway->checkCapabilities('ECHOECHO'));
	}

	public function testGetIdByPhone(){
		$this->assertEquals($this->testdata->id, $this->threemaGateway->getIdByPhone($this->testdata->phone));
	}

	public function testGetIdByPhoneHash(){
		$this->assertEquals($this->testdata->id, $this->threemaGateway->getIdByPhoneHash($this->testdata->phoneHash));
	}

	public function testGetIdByEmail(){
		$this->assertEquals($this->testdata->id, $this->threemaGateway->getIdByEmail($this->testdata->email));
	}

	public function testGetIdByEmailHash(){
		$this->assertEquals($this->testdata->id, $this->threemaGateway->getIdByEmailHash($this->testdata->emailHash));
	}

	public function testGetPublicKey(){
		$this->assertEquals('4a6a1b34dcef15d43cb74de2fd36091be99fbbaf126d099d47d83d919712c72b', $this->threemaGateway->getPublicKey('ECHOECHO'));
	}

}
