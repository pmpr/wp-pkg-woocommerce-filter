<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dabb67f056             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto ukkcmocamwgiqayu; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); ukkcmocamwgiqayu: $umuecysoywoumgwo = false; if (!($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(self::eigiqicogcmgmgwi, false, $icwicymcioeyeyek))) { goto mwysseaekcsiesmm; } $umuecysoywoumgwo = true; mwysseaekcsiesmm: return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if ($icwicymcioeyeyek) { goto amgsueumgaguceaa; } $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); amgsueumgaguceaa: return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if ($icwicymcioeyeyek) { goto gygwewcqsmwqismo; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); gygwewcqsmwqismo: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, "\x67\x63\154\x69\144"); if (!($icwicymcioeyeyek && is_array($icwicymcioeyeyek))) { goto ucqmumuygcywwqma; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!(is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\x2c"))) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = explode("\54", $eqgoocgaqwqcimie); ukqocwewouckikso: $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); gommacygsykyussk: } uougwgeyiokewkkm: ucqmumuygcywwqma: if (!$sscegwueamckwmcy) { goto uykousayyomcaeaa; } $icwicymcioeyeyek = $this->ocksiywmkyaqseou(self::cgckcqysmyiikaqw . "\x5f\147\x65\164\x5f\x73\145\141\x72\143\150\137\x64\141\x74\141", $icwicymcioeyeyek); uykousayyomcaeaa: return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { goto qukocuwgakemmyga; } if (!is_string($eqgoocgaqwqcimie)) { goto uqokiksoqcwwqgio; } $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if (!$iiiycicsyekkaaec) { goto kocqqoyymosmuksu; } $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); kocqqoyymosmuksu: uqokiksoqcwwqgio: goto sioekkmekwygemyc; qukocuwgakemmyga: foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $uiymkeeaukcyqqik, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("\145\x73\x63\x61\160\x65\137{$uusmaiomayssaecw}\x5f\x66\x69\x6c\x74\145\162", $eqgoocgaqwqcimie); iuuuususuuuaieem: } uimeeckqksqeekqq: sioekkmekwygemyc: if (!is_string($uusmaiomayssaecw)) { goto yiowgigkkwsoqcci; } $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); yiowgigkkwsoqcci: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto ieqesiiageaauiuw; } $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); ieqesiiageaauiuw: return $eqgoocgaqwqcimie; } }
