<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8e60818             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Rating extends Element { const ecgwsmyuesewsqom = "\x62\171\137\162\x61\164\151\156\147"; public function __construct() { $this->name = self::ecgwsmyuesewsqom; $this->icon = IconInterface::asaomwmaicuoeekg; $this->title = __("\x42\x79\x20\124\151\x74\x6c\145", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if ($qqyuqswckkcomeak) { $mwsawgusoeygascy = $qqyuqswckkcomeak; if ($mwsawgusoeygascy > 5) { $mwsawgusoeygascy = 5; } if ($mwsawgusoeygascy === 5) { $giqggecqqikcysgq = 5; } else { $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; } $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => "\137\167\x63\x5f\141\166\145\x72\141\147\145\x5f\x72\x61\x74\151\x6e\x67", Constants::squoamkioomemiyi => "\x44\105\x43\111\x4d\x41\114", Constants::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], Constants::ykemsyouoqyoaysg => "\x42\105\124\127\x45\x45\x4e"]; } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } }
