<?php

/* basic twitter api*/
/*from twitter documentation, not me, but i liked to use it during my first steps in php and twitter api.*/
class TwitterBot{

  protected $url_update = 'https://api.twitter.com/1.1/statuses/update.json';
  private $oauth;

  public function __construct($key, $secret){
    echo "fct_construct".$url_update;
    $this->oauth = new OAuth($key, $secret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
    echo "fct_construct1";
    $this->oauth->disableSSLChecks();
    echo "fct_construct2";
  }

  public function setToken($token, $secret){
    echo "token";
    $this->oauth->setToken($token, $secret);
  }

  public function test(){
    echo "test";
    $array = array( 'status' => 'Hello World !' );
    $this->oauth->fetch($this->url_update, $array, OAUTH_HTTP_METHOD_POST);
  }
 }

 ?>
