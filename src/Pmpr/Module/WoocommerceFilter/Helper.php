<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b264acee8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto ouamogymawucwswu; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); ouamogymawucwswu: $umuecysoywoumgwo = false; if (!($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(self::eigiqicogcmgmgwi, false, $icwicymcioeyeyek))) { goto mugqyyeayeyggqqk; } $umuecysoywoumgwo = true; mugqyyeayeyggqqk: return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if ($icwicymcioeyeyek) { goto acsqgiuageaasiyy; } $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); acsqgiuageaasiyy: return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if ($icwicymcioeyeyek) { goto oomguqikqokqwgku; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); oomguqikqokqwgku: return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $iiiycicsyekkaaec = false; ManipulateArray::unset($icwicymcioeyeyek, "\147\x63\154\151\x64"); if (!($icwicymcioeyeyek && is_array($icwicymcioeyeyek))) { goto kkumywowcoycymeo; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!(is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\x2c"))) { goto guykyqecgswcsmws; } $eqgoocgaqwqcimie = explode("\54", $eqgoocgaqwqcimie); guykyqecgswcsmws: $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); wyuemgggaqogsmsq: } samwkqgwouggsguc: kkumywowcoycymeo: if (!$sscegwueamckwmcy) { goto miweggwqeiaeweia; } $icwicymcioeyeyek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::cgckcqysmyiikaqw . "\x5f\x67\145\x74\137\x73\x65\x61\x72\x63\150\137\x64\x61\x74\x61"), $icwicymcioeyeyek); miweggwqeiaeweia: return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { goto ikqqskkqqwmwssoo; } if (!is_string($eqgoocgaqwqcimie)) { goto iwekmyyccgiyuecc; } $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if (!$iiiycicsyekkaaec) { goto ogsaaqsaogcqiouy; } $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); ogsaaqsaogcqiouy: iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\145\163\x63\141\160\145\137{$uusmaiomayssaecw}\x5f\146\151\154\x74\145\162"), $eqgoocgaqwqcimie); ousiuuwgwkiyikyq: } kqqiegkuqagcqsya: aomysykcgikegiau: if (!is_string($uusmaiomayssaecw)) { goto cwwmimggaaecmucw; } $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); cwwmimggaaecmucw: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto awoaooyoeoyeeqee; } $eqgoocgaqwqcimie = DecoratorSanitize::aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); awoaooyoeoyeeqee: return $eqgoocgaqwqcimie; } }
