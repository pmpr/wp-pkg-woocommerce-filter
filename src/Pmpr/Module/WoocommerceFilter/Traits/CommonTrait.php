<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dabb67f056             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Traits; use Pmpr\Module\WoocommerceFilter\Helper; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Taxonomy; trait CommonTrait { protected ?Helper $helper1 = null; public function kokwyquiqyoaaioc() : Helper { if ($this->helper1) { goto eeauyscekuckoues; } $this->helper1 = Helper::symcgieuakksimmu(); eeauyscekuckoues: return $this->helper1; } public function qeomwskywaguqyyu() : bool { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ykqqgqskiygugscu, false); } public function guecmwukeoqiwyac($ymqmyyeuycgmigyo) : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc(self::omumymwakeoiwouc, '', $ymqmyyeuycgmigyo); } public function mqmocoguqcyymgqu() : ?array { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); } public function ieiyuwkyiagkscmk() : array { $sogksuscggsicmac = []; $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto wagqgeqymeqoeuyi; } $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya); $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $this->eeikyioeusswwmme(self::qaeeoomwegsygeuk, $ymqmyyeuycgmigyo, self::iamiiekkgssgeaew); wagqgeqymeqoeuyi: msemumccgceyugmg: } eogwckcymuugikuy: return $sogksuscggsicmac; } public function wwqoiqcoccacyyyc() : bool { return $this->ocksiywmkyaqseou(self::geiygweugseyomyy . "\141\x6c\x6c\157\167\137\x61\144\x64", $this->caokeucsksukesyo()->aqasygcsqysmmyke()->omuogooguicuqewu()); } public function qacygisasqiuosci() : bool { return (bool) Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::wsyysggyumwguois, false); } }
