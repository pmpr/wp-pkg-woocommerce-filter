<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284a226b84e7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; class Rating extends Element { const ecgwsmyuesewsqom = "\142\171\x5f\162\x61\x74\151\x6e\147"; public function __construct() { $this->side = false; $this->name = self::ecgwsmyuesewsqom; $this->title = __("\x42\171\40\x52\x61\x74\x69\156\x67", PR__MDL__WOOCOMMERCE_FILTER); $this->priority = 50; $this->description = __("\x46\151\154\164\145\162\40\160\162\x6f\144\165\x63\x74\x73\40\142\x79\x20\162\x61\x74\x69\156\x67", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if (!$qqyuqswckkcomeak) { goto ocokwuuquaokmasc; } $mwsawgusoeygascy = $qqyuqswckkcomeak; if (!($mwsawgusoeygascy > 5)) { goto eequksumcoogyoem; } $mwsawgusoeygascy = 5; eequksumcoogyoem: if ($mwsawgusoeygascy === 5) { goto uukumskkeggaowck; } $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; goto cggowoquuiwqkyew; uukumskkeggaowck: $giqggecqqikcysgq = 5; cggowoquuiwqkyew: $oyiyuuoguwwaksaa[] = [self::ascagqcquwgmygkm => "\x5f\167\x63\x5f\141\x76\x65\162\x61\147\x65\x5f\x72\141\164\x69\156\x67", self::squoamkioomemiyi => "\104\105\103\x49\x4d\101\114", self::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], self::ykemsyouoqyoaysg => "\102\105\124\127\105\105\x4e"]; ocokwuuquaokmasc: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconFontawesomeInterface::gmoagiesgkqqcggq, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::ecgwsmyuesewsqom . self::kouiwaoasqgwksas, __("\x45\156\x61\142\x6c\145", PR__MDL__WOOCOMMERCE_FILTER), $this->meqceykmywmqgoym())]]; } }
