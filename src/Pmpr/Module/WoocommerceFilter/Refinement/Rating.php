<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a725264d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; class Rating extends Element { const ecgwsmyuesewsqom = "\x62\171\137\x72\141\164\151\x6e\147"; public function __construct() { $this->side = false; $this->name = self::ecgwsmyuesewsqom; $this->title = __("\x42\171\x20\x52\x61\x74\151\x6e\147", PR__MDL__WOOCOMMERCE_FILTER); $this->priority = 50; $this->description = __("\x46\x69\x6c\164\145\x72\40\160\x72\x6f\144\165\143\x74\x73\40\x62\x79\x20\162\x61\164\151\x6e\147", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if (!$qqyuqswckkcomeak) { goto hoeeyiowekaeemko; } $mwsawgusoeygascy = $qqyuqswckkcomeak; if (!($mwsawgusoeygascy > 5)) { goto oqugqwcyomiaaoqu; } $mwsawgusoeygascy = 5; oqugqwcyomiaaoqu: if ($mwsawgusoeygascy === 5) { goto foeeqckqsyockkak; } $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; goto iekumemscwieugqw; foeeqckqsyockkak: $giqggecqqikcysgq = 5; iekumemscwieugqw: $oyiyuuoguwwaksaa[] = [self::ascagqcquwgmygkm => "\137\x77\x63\x5f\x61\x76\x65\x72\x61\x67\x65\137\162\141\164\x69\x6e\x67", self::squoamkioomemiyi => "\104\x45\103\x49\115\101\114", self::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], self::ykemsyouoqyoaysg => "\x42\x45\x54\127\105\x45\116"]; hoeeyiowekaeemko: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconFontawesomeInterface::gmoagiesgkqqcggq, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::ecgwsmyuesewsqom . self::kouiwaoasqgwksas, __("\105\x6e\141\142\x6c\x65", PR__MDL__WOOCOMMERCE_FILTER), $this->meqceykmywmqgoym())]]; } }
