<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b264acee8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; use WP_Taxonomy; use WP_Term; class Attribute extends Element { const caieqgyycuwysqkc = "\137\143\x75\x73\x74\x6f\155\x5f\x6c\x61\x62\145\x6c"; protected ?string $taxonomy = null; public function __construct() { $this->name = self::ATTRIBUTE; $this->type = self::ugmwekegkosuuwii; $this->side = true; $this->priority = 0; parent::__construct(); } public function render() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto qicwaskssogcokgm; } $wekcyscwqougqoam = $this->weysguygiseoukqw(Setting::amoaaekaumwisuic, false); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto usquiuuyiyqaeyiu; } $ywwsukisoiguygwm = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ywwsukisoiguygwm)) { goto kymkucucyeoeikim; } $muuwyqowekmoqoig = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::smommoywqawkuceg, false); $sikaymiwcesagayc = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::mkikoewciywmikok, "\111\x44"); $umwqusowiqmyseom = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::uucggqgemiykigga, self::eeccqomoaqsawouy); $omwmuycmeqcqokom = $this->wqiaaecemqgacuww($ywwsukisoiguygwm); $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($ywwsukisoiguygwm, ["\x6f\162\144\145\162" => $umwqusowiqmyseom, "\x70\141\x72\145\156\x74" => $omwmuycmeqcqokom, "\x6f\x72\144\145\x72\142\171" => $sikaymiwcesagayc, "\150\151\x64\145\x5f\x65\x6d\x70\x74\171" => $muuwyqowekmoqoig]); if (!$uyuaosigqymaqsaa) { goto hoeeyiowekaeemko; } $ymqmyyeuycgmigyo = self::omumymwakeoiwouc . $ywwsukisoiguygwm; $eqgoocgaqwqcimie = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $omwmuycmeqcqokom = null; if (!is_string($eqgoocgaqwqcimie)) { goto soqqemyioggmoakg; } $eqgoocgaqwqcimie = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $eqgoocgaqwqcimie, $ywwsukisoiguygwm); $omwmuycmeqcqokom = ManipulateTerm::owaokmsayecmasqu($eqgoocgaqwqcimie); soqqemyioggmoakg: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!$iwewcwusemqaiggk instanceof WP_Term) { goto foeeqckqsyockkak; } if ($omwmuycmeqcqokom instanceof WP_Term && $omwmuycmeqcqokom->term_id === $iwewcwusemqaiggk->term_id) { goto eeqesooyqagwawae; } ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 1]); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 0]); oqugqwcyomiaaoqu: foeeqckqsyockkak: suswcqoyyqkkquuo: } acaqummmoyiemqss: $qookweymeqawmcwo = $this->gayqqwwuycceosii($ymqmyyeuycgmigyo); if (!($wekcyscwqougqoam && $eqgoocgaqwqcimie)) { goto iekumemscwieugqw; } $uyuaosigqymaqsaa = ManipulateArray::yaeiiwwyckwugsem($uyuaosigqymaqsaa); iekumemscwieugqw: $qookweymeqawmcwo[self::NAME] = $ymqmyyeuycgmigyo; $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $uyuaosigqymaqsaa; $qookweymeqawmcwo[self::qescuiwgsyuikume] = $this->uikgwcuascgeissw($kesssewsiegssiya); $qookweymeqawmcwo["\x68\151\144\145\x5f\x65\155\160\164\171"] = $muuwyqowekmoqoig; $qookweymeqawmcwo["\150\x69\x64\x65\137\143\x68\151\x6c\x64\162\145\156"] = $this->weysguygiseoukqw(Setting::wsckiussqwckiwae, false); echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); hoeeyiowekaeemko: kymkucucyeoeikim: usquiuuyiyqaeyiu: wmmggowmigekyoso: } ywqgcegomwaiuquc: qicwaskssogcokgm: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { $qookweymeqawmcwo = parent::gayqqwwuycceosii($ymqmyyeuycgmigyo); $qookweymeqawmcwo["\x73\x65\154\x65\x63\164\145\x64"] = $this->yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo); return $qookweymeqawmcwo; } public function yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo) : array { $icwicymcioeyeyek = $this->kokwyquiqyoaaioc()->ioegacqacywgucsc(); $ymmmmaiuoocagigk = []; if (!$this->kokwyquiqyoaaioc()->sacmaiqouaeswkyy($icwicymcioeyeyek)) { goto wiysogeqqwgioyka; } foreach ($icwicymcioeyeyek as $aaokuekaimigoyue => $uyuaosigqymaqsaa) { if (!($aaokuekaimigoyue !== self::eigiqicogcmgmgwi && $ymqmyyeuycgmigyo === $aaokuekaimigoyue)) { goto soaccwqimeksgwiw; } if (is_array($uyuaosigqymaqsaa)) { goto aegysmeecgcgayyw; } $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $uyuaosigqymaqsaa); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $iwewcwusemqaiggk); gaomwagkcciesyqy: } esuiysskoweawsue: suqkuqygkkgwyaie: soaccwqimeksgwiw: uqqaiagaeqgqgaiy: } uguigkcmukuouway: wiysogeqqwgioyka: return $ymmmmaiuoocagigk; } public function igaqgiyuucyuyswk($ymqmyyeuycgmigyo, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $kesssewsiegssiya); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto skkamseieeusycye; } $iwewcwusemqaiggk = ["\x66\151\154\x74\x65\162" => $kesssewsiegssiya, self::ciyoccqkiamemcmm => ManipulateTerm::aqcogscycyycgkuq($iwewcwusemqaiggk), self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::NAME => $ymqmyyeuycgmigyo]; skkamseieeusycye: return $iwewcwusemqaiggk; } public function qgamykugookscsye(array $uiewakwqscemywuo = []) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto ewymsmkkiksgwysk; } $qgeeqyucwycemwmo = [self::imigwosicasiemwu => __("\122\x61\144\151\157", PR__MDL__WOOCOMMERCE_FILTER), self::SELECT => __("\104\x72\x6f\160\144\157\167\156", PR__MDL__WOOCOMMERCE_FILTER), self::ogmccgakwygeuqao => __("\115\x75\154\164\x69\x20\x44\x72\157\x70\144\157\167\x6e", PR__MDL__WOOCOMMERCE_FILTER), self::ecusimegeasyeese => __("\x4d\x75\154\164\151\x20\x43\x68\x65\143\153\x62\157\170", PR__MDL__WOOCOMMERCE_FILTER)]; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto giaacoqqqsekcayy; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $pkyyagewkiyckmwy = ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya); $uiewakwqscemywuo[] = [self::NAME => $ymqmyyeuycgmigyo, self::qgqyauaqwqmqseim => IconInterface::mloqkcqcaykawyqs, self::qescuiwgsyuikume => $pkyyagewkiyckmwy, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::kouiwaoasqgwksas, __("\105\x6e\x61\x62\154\145", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x45\156\x61\142\x6c\x65\40\45\x73\40\146\x69\x6c\164\x65\162\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ymuegqgyuagyucws($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, __("\124\x61\x78\x6f\x6e\157\155\171\40\x63\165\x73\164\x6f\155\40\x6c\x61\142\x65\154", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\106\157\162\40\145\170\x61\155\x70\x6c\x65\40\x79\157\x75\x20\x77\141\x6e\164\x20\164\157\40\163\x68\157\x77\40\x74\151\164\x6c\145\x20\x6f\146\x20\45\163\40\x61\x73\40\42\x4d\x79\40\120\x72\157\x64\x75\x63\x74\163\x22\x2e\40\112\165\163\164\40\x66\x6f\162\x20\171\157\165\x72\x20\143\157\x6e\x76\145\156\151\145\156\x63\x65\x2e", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ckuwucygcwsiawms($ymqmyyeuycgmigyo . self::ssugumysagumgqqm, __("\x46\151\154\x74\x65\x72\40\x54\x79\x70\x65", PR__MDL__WOOCOMMERCE_FILTER), $qgeeqyucwycemwmo, sprintf(__("\126\151\145\x77\x20\x6f\x66\x20\164\150\x65\40\45\163\40\164\145\x72\x6d\x73\x20\x6f\x6e\40\x74\x68\145\40\x66\162\x6f\x6e\x74\x2e", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy))->eyygsasuqmommkua(self::imigwosicasiemwu), Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::smommoywqawkuceg, __("\x48\x69\x64\145\x20\x55\156\165\163\145\x64", PR__MDL__WOOCOMMERCE_FILTER), __("\103\x68\145\143\x6b\40\164\150\151\163\x20\151\164\145\x6d\x20\x66\x6f\162\40\142\145\164\164\x65\x72\40\160\145\x72\146\157\162\155\x61\156\143\145\x2e", PR__MDL__WOOCOMMERCE_FILTER)), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::mkikoewciywmikok, __("\123\157\162\164\x20\164\145\162\x6d\x73", PR__MDL__WOOCOMMERCE_FILTER), ["\55\61" => __("\104\x65\x66\141\x75\154\x74", PR__MDL__WOOCOMMERCE_FILTER), self::gouqcwikiiygyasc => __("\x49\x44", PR__MDL__WOOCOMMERCE_FILTER), self::NAME => __("\x4e\x61\x6d\x65", PR__MDL__WOOCOMMERCE_FILTER), "\156\165\155\x65\x72\x69\x63" => __("\116\x75\x6d\145\x72\151\143", PR__MDL__WOOCOMMERCE_FILTER)], __("\110\157\167\40\164\x6f\40\163\157\162\x74\x20\x74\x65\x72\155\x73\x20\x69\x6e\163\151\x64\x65\x20\x6f\x66\40\x66\x69\154\x74\x65\162\x20\x62\x6c\x6f\x63\153", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua("\x2d\61"), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::uucggqgemiykigga, __("\123\157\162\x74\x20\157\162\144\145\162", PR__MDL__WOOCOMMERCE_FILTER), [self::eeccqomoaqsawouy => __("\x41\123\103", PR__MDL__WOOCOMMERCE_FILTER), self::omaksceqmigeaoko => __("\x44\x45\123\x43", PR__MDL__WOOCOMMERCE_FILTER)], __("\x48\x6f\167\x20\164\x6f\40\163\x6f\162\x74\x20\164\145\162\x6d\163\40\151\156\x73\x69\x64\145\x20\157\x66\x20\x66\151\154\164\x65\162\x20\142\x6c\x6f\143\153", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::eeccqomoaqsawouy)]]; giaacoqqqsekcayy: syiqkaasoueowwui: } cgiscsqwwgqqaeqi: ewymsmkkiksgwysk: return $uiewakwqscemywuo; } public function ewewecscqocemiqs($iwewcwusemqaiggk) { $bgscekiuycggmyci = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::oqmosiywgecmeqig); $egcqoiemwoyoaewe = ManipulateTerm::get($iwewcwusemqaiggk); if ($bgscekiuycggmyci && $egcqoiemwoyoaewe instanceof WP_Term && $egcqoiemwoyoaewe->parent) { goto cmegwsegsosyqcai; } $ugugimquukqwogge = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::ugygausceickekgo); goto wmywuusgukmmaams; cmegwsegsosyqcai: $ugugimquukqwogge = self::ewewecscqocemiqs($egcqoiemwoyoaewe->parent); wmywuusgukmmaams: return $ugugimquukqwogge; } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) { if (!($guwumyyyakswawas = $this->wqiaaecemqgacuww())) { goto ooeausyowguqicuo; } $ugugimquukqwogge = $this->ewewecscqocemiqs($guwumyyyakswawas); if (!(is_array($ugugimquukqwogge) && in_array($ymqmyyeuycgmigyo, $ugugimquukqwogge, true))) { goto gkyawqqcmigqgaiq; } return false; gkyawqqcmigqgaiq: ooeausyowguqicuo: if (!(!$ymqmyyeuycgmigyo || $ymqmyyeuycgmigyo === $this->aakmagwggmkoiiyu())) { goto egyyiccaeeiooaua; } return true; egyyiccaeeiooaua: return parent::ayseokmqycoqaigc($ymqmyyeuycgmigyo); } private function wqiaaecemqgacuww(?string $ymqmyyeuycgmigyo = null) : int { if ($ymqmyyeuycgmigyo) { goto scisgsyemmsekgos; } $ymqmyyeuycgmigyo = self::cmckeoksigiaqykc; scisgsyemmsekgos: $sogksuscggsicmac = 0; if (!(self::cmckeoksigiaqykc === $ymqmyyeuycgmigyo && DecoratorTaxonomy::qmssqeyayicowkgy($ymqmyyeuycgmigyo))) { goto cewmoqyysgsmuiya; } $sogksuscggsicmac = get_queried_object_id(); cewmoqyysgsmuiya: return $sogksuscggsicmac; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $icwicymcioeyeyek = $this->kokwyquiqyoaaioc()->ioegacqacywgucsc(); $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto wkeuuycukmuqiaom; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto sggawugoykqcmsug; } $esygomwiykacwkye = $esygomwiykacwkye->queries; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ueigkucgaucgeimc; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ymqmyyeuycgmigyo)) { goto kqgcyoscsusgoaqi; } $eqgoocgaqwqcimie = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc(self::omumymwakeoiwouc . $ymqmyyeuycgmigyo, null, $icwicymcioeyeyek); if (!$eqgoocgaqwqcimie) { goto wgewmqieuamsoayy; } if (is_array($eqgoocgaqwqcimie)) { goto ugqaaewwmkocwwgy; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; ugqaaewwmkocwwgy: $esygomwiykacwkye[] = ["\146\151\x65\154\144" => self::ouywiegeiyuaaawo, "\143\157\x6d\x70\141\x72\145" => self::iamiiekkgssgeaew, self::ucoiewcoucauqwko => $eqgoocgaqwqcimie, self::gmmygyiecgmggaam => $ymqmyyeuycgmigyo, "\151\x6e\143\x6c\x75\144\x65\x5f\143\150\151\154\x64\162\x65\x6e" => 1]; wgewmqieuamsoayy: kqgcyoscsusgoaqi: ueigkucgaucgeimc: omqiayeucoioqoao: } igooksugieceoege: sggawugoykqcmsug: $this->gmcqycoowqmycocs(); $gqgemcmoicmgaqie->set("\x74\x61\x78\137\x71\x75\145\162\x79", $esygomwiykacwkye); wkeuuycukmuqiaom: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function cccesyuceswckkqy($syquekoksmgewowm, $yygmoeguaqyumuui) { $kaigioacywcmqiam = DecoratorWoocommerce::qagkseqwwaqacakk(); $wiciwwggyauswauk = []; if (is_array($yygmoeguaqyumuui)) { goto wakmayaoqoskekqy; } $yygmoeguaqyumuui = [$yygmoeguaqyumuui]; wakmayaoqoskekqy: foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($eqgoocgaqwqcimie = ManipulateArray::get($kaigioacywcmqiam, $uusmaiomayssaecw))) { goto mwsmsguqqkcwiiuk; } $wiciwwggyauswauk[] = $eqgoocgaqwqcimie; mwsmsguqqkcwiiuk: owmuceyswmgueasi: } qmuwoecuacmkwgem: if (!$wiciwwggyauswauk) { goto eeauyscekuckoues; } $syquekoksmgewowm[] = ["\164\141\170\x6f\x6e\157\x6d\x79" => "\x70\x72\x6f\144\x75\143\164\x5f\x76\151\x73\151\x62\151\154\x69\164\171", "\x66\x69\145\154\x64" => "\164\x65\x72\x6d\x5f\x74\141\170\157\156\x6f\x6d\x79\137\151\144", "\164\145\162\155\x73" => $wiciwwggyauswauk, "\x6f\160\145\x72\141\x74\157\x72" => "\x4e\x4f\124\x20\111\116"]; eeauyscekuckoues: return $syquekoksmgewowm; } public function eicgqsyqqsccywwq($qwcmueausqgiwigy = false) : array { $yygmoeguaqyumuui = []; if (!(self::wiquocqckkqkmayo === DecoratorOption::get("\x77\157\x6f\143\x6f\x6d\x6d\145\162\x63\x65\137\150\x69\144\145\x5f\x6f\165\164\x5f\x6f\x66\137\x73\164\x6f\x63\153\x5f\151\164\145\155\x73"))) { goto eogwckcymuugikuy; } $yygmoeguaqyumuui[] = "\x6f\165\164\157\x66\163\x74\157\x63\153"; eogwckcymuugikuy: if (!$this->qacygisasqiuosci()) { goto qoqskyuuwueqkquk; } if (!$qwcmueausqgiwigy) { goto msemumccgceyugmg; } $yygmoeguaqyumuui[] = "\145\x78\x63\154\x75\144\145\x2d\146\162\x6f\155\x2d\163\x65\x61\x72\x63\x68"; goto wagqgeqymeqoeuyi; msemumccgceyugmg: $yygmoeguaqyumuui[] = "\x65\x78\143\x6c\165\x64\145\x2d\146\162\x6f\x6d\55\x63\x61\164\x61\x6c\157\147"; wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $yygmoeguaqyumuui; } public function gmcqycoowqmycocs() { $this->cecaguuoecmccuse("\167\157\157\x63\x6f\155\155\145\x72\143\x65\137\x70\162\157\144\x75\x63\164\x5f\161\x75\x65\162\171\x5f\x74\141\170\137\161\x75\145\x72\x79", function ($syquekoksmgewowm, $_this) { foreach ($syquekoksmgewowm as $uusmaiomayssaecw => $ieqocgiosekoeoqe) { if (!("\x70\162\157\x64\x75\x63\x74\137\166\x69\x73\151\142\x69\154\x69\164\171" === ManipulateArray::get($ieqocgiosekoeoqe, self::gmmygyiecgmggaam))) { goto asiqwuoswmigcaki; } unset($syquekoksmgewowm[$uusmaiomayssaecw]); asiqwuoswmigcaki: wcugqegqsuuuwqao: } iwsuawwqomaowuii: return $this->cccesyuceswckkqy($syquekoksmgewowm, $this->eicgqsyqqsccywwq(true)); }, 10, 2); $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\x6d\x6d\x65\162\143\x65\x5f\160\x72\157\x64\165\x63\164\x5f\x69\x73\x5f\x76\151\x73\151\x62\x6c\145", function ($ioqywyyeioqywogw, $aokagokqyuysuksm) { return true; }, 10, 2); } public function uikgwcuascgeissw($kesssewsiegssiya) : ?string { $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); return $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya)); } }
