<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b264acee8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; class Featured extends Element { const quumiuygmqeaackw = "\146\x65\x61\164\x75\162\145\x64"; public function __construct() { $this->name = self::quumiuygmqeaackw; $this->type = self::semqugiuwygamias; $this->side = true; $this->title = __("\102\171\x20\x46\145\x61\164\165\x72\145\x64", PR__MDL__WOOCOMMERCE_FILTER); $this->description = __("\106\145\x61\164\165\162\x65\x64\40\160\162\157\x64\x75\x63\x74\x73\40\143\150\145\143\x6b\x62\157\x78\40\151\x6e\40\163\145\141\x72\x63\150\x20\146\x6f\x72\155\40\x77\x68\x65\156\40\x69\164\47\x73\40\156\145\x63\x65\163\x73\141\x72\171\56", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto quwcqmyokicssyew; } $useksmwkuswkwcqg = $gqgemcmoicmgaqie->get(self::uouymeyqasaeckso); if (!($useksmwkuswkwcqg === self::oguseymmyyoyaako)) { goto kiwqkcaekqqyuegq; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto qsygcycwieukkgwc; } $esygomwiykacwkye = $esygomwiykacwkye->queries; $qwyoumwkqwymwyyk = (bool) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if (!$qwyoumwkqwymwyyk) { goto umgaesggesswoaqe; } $esygomwiykacwkye[] = ["\164\x61\x78\157\156\x6f\155\171" => "\160\x72\x6f\144\x75\143\164\137\x76\x69\163\x69\142\151\x6c\151\164\171", "\x66\x69\145\x6c\x64" => self::NAME, "\x74\x65\x72\x6d\163" => self::quumiuygmqeaackw]; $gqgemcmoicmgaqie->set("\x74\141\x78\137\x71\x75\145\x72\171", $esygomwiykacwkye); umgaesggesswoaqe: qsygcycwieukkgwc: kiwqkcaekqqyuegq: quwcqmyokicssyew: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconInterface::guigcisacouwgiqi, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::quumiuygmqeaackw . self::kouiwaoasqgwksas, __("\105\x6e\141\x62\x6c\145", PR__MDL__WOOCOMMERCE_FILTER), __("\x53\x68\x6f\167\40\117\156\x20\163\x61\x6c\145\x20\157\x6e\x6c\x79\40\143\150\145\x63\x6b\x62\x6f\x78\40\x69\156\x73\151\144\145\40\x66\x69\x6c\x74\x65\x72\x20\x73\145\x61\162\x63\x68\40\x66\x6f\x72\155\x2e", PR__MDL__WOOCOMMERCE_FILTER))]]; } }
