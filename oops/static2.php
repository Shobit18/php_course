<?php
class domain {
    protected static function getWebsiteName() {
        return "W3Schools.com";
    }
}
class domain3 extends domain {
    public $websiteName;
    public function __construct() {
        $this -> websiteName = parent::getWebsiteName();
    }
}
$domain3 = new domain3;
echo $domain3 -> websiteName;
?>