<?php
/*
* Copyright (c) 2011 Vantiv eCommerce Inc.
*
* Permission is hereby granted, free of charge, to any person
* obtaining a copy of this software and associated documentation
* files (the "Software"), to deal in the Software without
* restriction, including without limitation the rights to use,
* copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the
* Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be
* included in all copies or substantial portions of the Software.
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
* OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
* WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
* FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
* OTHER DEALINGS IN THE SOFTWARE.
*/
namespace litle\sdk\Test\functional;

use litle\sdk\CnpOnlineRequest;
use litle\sdk\XmlParser;

class VoidFunctionalTest extends \PHPUnit_Framework_TestCase
{
    public function test_simple_void()
    {
        $hash_in = array('litleTxnId' => '123456789012345678', 'id' => '1211',);
        $initialize = new CnpOnlineRequest();
        $voidResponse = $initialize->voidRequest($hash_in);
        $response = XmlParser::getAttribute($voidResponse, 'litleOnlineResponse', 'response');
        $this->assertEquals('0', $response);
    }

}
