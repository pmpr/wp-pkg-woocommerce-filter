<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6ceb3e882             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto cecuyayqoioasumi; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); cecuyayqoioasumi: $umuecysoywoumgwo = false; if (!($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(self::eigiqicogcmgmgwi, false, $icwicymcioeyeyek))) { goto qiaqsassksqiuyae; } $umuecysoywoumgwo = true; qiaqsassksqiuyae: return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if ($icwicymcioeyeyek) { goto qogqewiwmwiwskgm; } $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); qogqewiwmwiwskgm: return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if ($icwicymcioeyeyek) { goto qgoiooayqmqqsiok; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); qgoiooayqmqqsiok: return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $iiiycicsyekkaaec = false; ManipulateArray::unset($icwicymcioeyeyek, "\147\143\x6c\x69\144"); if (!($icwicymcioeyeyek && is_array($icwicymcioeyeyek))) { goto csscmcacoikwsecs; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!(is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\x2c"))) { goto asmecuqiyyswueqe; } $eqgoocgaqwqcimie = explode("\x2c", $eqgoocgaqwqcimie); asmecuqiyyswueqe: $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); myoicgcuugciueis: } qwigomakwmyiwkgo: csscmcacoikwsecs: if (!$sscegwueamckwmcy) { goto cuykwgmswkskqkyi; } $icwicymcioeyeyek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::cgckcqysmyiikaqw . "\137\x67\145\x74\x5f\163\x65\141\162\143\x68\x5f\x64\141\x74\x61"), $icwicymcioeyeyek); cuykwgmswkskqkyi: return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { goto kwagwqyusyiyoaqs; } if (!is_string($eqgoocgaqwqcimie)) { goto eqkauqciwewmgeoi; } $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if (!$iiiycicsyekkaaec) { goto sciwggaeogcoesiu; } $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); sciwggaeogcoesiu: eqkauqciwewmgeoi: goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x65\x73\x63\141\160\145\x5f{$uusmaiomayssaecw}\x5f\x66\x69\154\x74\145\162"), $eqgoocgaqwqcimie); mkwskuycuyguqqok: } kuicqywysciceggs: yowsmsiyimmimemc: if (!is_string($uusmaiomayssaecw)) { goto kiqogmwcgcamwiig; } $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); kiqogmwcgcamwiig: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto iomcaiwewsawiamu; } $eqgoocgaqwqcimie = DecoratorSanitize::aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); iomcaiwewsawiamu: return $eqgoocgaqwqcimie; } }
