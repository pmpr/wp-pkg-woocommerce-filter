<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a725264d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; use WP_Taxonomy; use WP_Term; class Attribute extends Element { const caieqgyycuwysqkc = "\x5f\143\165\x73\x74\157\155\137\x6c\x61\x62\x65\154"; protected ?string $taxonomy = null; public function __construct() { $this->name = self::ATTRIBUTE; $this->type = self::ugmwekegkosuuwii; $this->side = true; $this->priority = 0; parent::__construct(); } public function render() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto mqicocmqegwukkwg; } $wekcyscwqougqoam = $this->weysguygiseoukqw(Setting::amoaaekaumwisuic, false); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ciykoyeioqgyaeqo; } $ywwsukisoiguygwm = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ywwsukisoiguygwm)) { goto asiqwuoswmigcaki; } $muuwyqowekmoqoig = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::smommoywqawkuceg, false); $sikaymiwcesagayc = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::mkikoewciywmikok, "\x49\104"); $umwqusowiqmyseom = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::uucggqgemiykigga, self::eeccqomoaqsawouy); $omwmuycmeqcqokom = $this->wqiaaecemqgacuww($ywwsukisoiguygwm); $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($ywwsukisoiguygwm, ["\157\162\144\x65\x72" => $umwqusowiqmyseom, "\x70\141\x72\145\x6e\164" => $omwmuycmeqcqokom, "\157\x72\x64\x65\162\142\x79" => $sikaymiwcesagayc, "\150\151\x64\x65\x5f\x65\x6d\160\164\171" => $muuwyqowekmoqoig]); if (!$uyuaosigqymaqsaa) { goto wcugqegqsuuuwqao; } $ymqmyyeuycgmigyo = self::omumymwakeoiwouc . $ywwsukisoiguygwm; $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $omwmuycmeqcqokom = null; if (!is_string($eqgoocgaqwqcimie)) { goto mwsmsguqqkcwiiuk; } $eqgoocgaqwqcimie = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $eqgoocgaqwqcimie, $ywwsukisoiguygwm); $omwmuycmeqcqokom = ManipulateTerm::owaokmsayecmasqu($eqgoocgaqwqcimie); mwsmsguqqkcwiiuk: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!$iwewcwusemqaiggk instanceof WP_Term) { goto qoqskyuuwueqkquk; } if ($omwmuycmeqcqokom instanceof WP_Term && $omwmuycmeqcqokom->term_id === $iwewcwusemqaiggk->term_id) { goto msemumccgceyugmg; } ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 1]); goto wagqgeqymeqoeuyi; msemumccgceyugmg: ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 0]); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: eogwckcymuugikuy: } eeauyscekuckoues: $qookweymeqawmcwo = $this->gayqqwwuycceosii($ymqmyyeuycgmigyo); if (!($wekcyscwqougqoam && $eqgoocgaqwqcimie)) { goto iwsuawwqomaowuii; } $uyuaosigqymaqsaa = ManipulateArray::yaeiiwwyckwugsem($uyuaosigqymaqsaa); iwsuawwqomaowuii: $qookweymeqawmcwo[self::NAME] = $ymqmyyeuycgmigyo; $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $uyuaosigqymaqsaa; $qookweymeqawmcwo[self::qescuiwgsyuikume] = $this->uikgwcuascgeissw($kesssewsiegssiya); $qookweymeqawmcwo["\x68\151\144\145\137\x65\155\160\164\x79"] = $muuwyqowekmoqoig; $qookweymeqawmcwo["\x68\151\x64\145\137\143\x68\151\154\x64\x72\145\156"] = $this->weysguygiseoukqw(Setting::wsckiussqwckiwae, false); echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); wcugqegqsuuuwqao: asiqwuoswmigcaki: ciykoyeioqgyaeqo: owmuceyswmgueasi: } qmuwoecuacmkwgem: mqicocmqegwukkwg: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { $qookweymeqawmcwo = parent::gayqqwwuycceosii($ymqmyyeuycgmigyo); $qookweymeqawmcwo["\x73\x65\x6c\x65\x63\x74\145\144"] = $this->yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo); return $qookweymeqawmcwo; } public function yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo) : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $ymmmmaiuoocagigk = []; if (!$this->caokeucsksukesyo()->sacmaiqouaeswkyy($icwicymcioeyeyek)) { goto wyuemgggaqogsmsq; } foreach ($icwicymcioeyeyek as $aaokuekaimigoyue => $uyuaosigqymaqsaa) { if (!($aaokuekaimigoyue !== self::eigiqicogcmgmgwi && $ymqmyyeuycgmigyo === $aaokuekaimigoyue)) { goto samwkqgwouggsguc; } if (is_array($uyuaosigqymaqsaa)) { goto acsqgiuageaasiyy; } $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $uyuaosigqymaqsaa); goto oomguqikqokqwgku; acsqgiuageaasiyy: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $iwewcwusemqaiggk); mugqyyeayeyggqqk: } ouamogymawucwswu: oomguqikqokqwgku: samwkqgwouggsguc: emmsycooskoqmgeg: } qgeugwymkkiacwoc: wyuemgggaqogsmsq: return $ymmmmaiuoocagigk; } public function igaqgiyuucyuyswk($ymqmyyeuycgmigyo, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $kesssewsiegssiya); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto guykyqecgswcsmws; } $iwewcwusemqaiggk = ["\x66\x69\x6c\164\145\x72" => $kesssewsiegssiya, self::ciyoccqkiamemcmm => ManipulateTerm::aqcogscycyycgkuq($iwewcwusemqaiggk), self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::NAME => $ymqmyyeuycgmigyo]; guykyqecgswcsmws: return $iwewcwusemqaiggk; } public function qgamykugookscsye(array $uiewakwqscemywuo = []) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto ousiuuwgwkiyikyq; } $qgeeqyucwycemwmo = [self::imigwosicasiemwu => __("\122\141\x64\151\x6f", PR__MDL__WOOCOMMERCE_FILTER), self::SELECT => __("\104\162\157\160\144\157\167\156", PR__MDL__WOOCOMMERCE_FILTER), self::ogmccgakwygeuqao => __("\x4d\x75\154\164\151\40\x44\x72\x6f\160\144\157\167\156", PR__MDL__WOOCOMMERCE_FILTER), self::ecusimegeasyeese => __("\x4d\x75\154\164\151\x20\103\150\145\x63\153\142\157\x78", PR__MDL__WOOCOMMERCE_FILTER)]; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto kqqiegkuqagcqsya; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $pkyyagewkiyckmwy = ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya); $uiewakwqscemywuo[] = [self::NAME => $ymqmyyeuycgmigyo, self::qgqyauaqwqmqseim => IconFontawesomeInterface::yukwuuuaiyqqcukw, self::qescuiwgsyuikume => $pkyyagewkiyckmwy, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::kouiwaoasqgwksas, __("\x45\x6e\x61\x62\x6c\145", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x45\x6e\x61\x62\154\145\40\45\x73\40\146\151\x6c\164\145\x72\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ymuegqgyuagyucws($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, __("\124\x61\x78\157\x6e\x6f\155\x79\40\143\165\163\x74\157\x6d\40\x6c\x61\142\145\x6c", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x46\x6f\162\40\x65\170\x61\x6d\x70\x6c\145\x20\x79\157\x75\x20\167\141\x6e\x74\x20\164\x6f\40\x73\x68\157\167\40\x74\151\x74\154\x65\x20\x6f\x66\x20\x25\163\40\x61\163\x20\x22\x4d\171\40\120\x72\x6f\144\x75\143\164\x73\x22\x2e\40\112\165\163\164\40\146\x6f\x72\40\x79\x6f\165\162\x20\x63\157\x6e\x76\145\156\x69\145\x6e\143\145\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ckuwucygcwsiawms($ymqmyyeuycgmigyo . self::ssugumysagumgqqm, __("\106\151\x6c\164\x65\162\40\x54\171\x70\x65", PR__MDL__WOOCOMMERCE_FILTER), $qgeeqyucwycemwmo, sprintf(__("\x56\151\145\167\40\x6f\146\x20\x74\150\145\x20\45\163\x20\164\145\x72\155\163\40\157\156\x20\x74\150\145\40\x66\x72\x6f\156\164\x2e", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy))->eyygsasuqmommkua(self::imigwosicasiemwu), Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::smommoywqawkuceg, __("\110\x69\x64\145\40\125\156\x75\163\145\144", PR__MDL__WOOCOMMERCE_FILTER), __("\x43\x68\x65\x63\153\x20\164\x68\151\x73\40\x69\x74\145\x6d\x20\x66\157\162\40\142\145\164\x74\x65\x72\40\160\x65\x72\x66\157\x72\x6d\141\156\143\x65\x2e", PR__MDL__WOOCOMMERCE_FILTER)), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::mkikoewciywmikok, __("\x53\x6f\x72\164\40\164\145\162\x6d\163", PR__MDL__WOOCOMMERCE_FILTER), ["\x2d\61" => __("\104\145\146\x61\165\x6c\x74", PR__MDL__WOOCOMMERCE_FILTER), self::gouqcwikiiygyasc => __("\111\104", PR__MDL__WOOCOMMERCE_FILTER), self::NAME => __("\x4e\x61\155\145", PR__MDL__WOOCOMMERCE_FILTER), "\156\165\155\145\162\x69\x63" => __("\x4e\x75\x6d\145\x72\x69\x63", PR__MDL__WOOCOMMERCE_FILTER)], __("\110\157\167\x20\164\x6f\40\x73\157\162\x74\x20\164\145\162\155\163\x20\x69\156\x73\x69\144\x65\x20\x6f\x66\x20\x66\x69\x6c\x74\x65\162\40\142\154\x6f\x63\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua("\x2d\x31"), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::uucggqgemiykigga, __("\x53\x6f\x72\x74\x20\157\x72\x64\x65\162", PR__MDL__WOOCOMMERCE_FILTER), [self::eeccqomoaqsawouy => __("\x41\x53\x43", PR__MDL__WOOCOMMERCE_FILTER), self::omaksceqmigeaoko => __("\x44\x45\123\103", PR__MDL__WOOCOMMERCE_FILTER)], __("\110\157\x77\40\x74\x6f\x20\163\x6f\162\164\40\164\145\x72\x6d\x73\x20\x69\x6e\163\x69\x64\x65\x20\x6f\x66\40\146\151\x6c\x74\145\162\40\x62\154\157\143\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::eeccqomoaqsawouy)]]; kqqiegkuqagcqsya: miweggwqeiaeweia: } kkumywowcoycymeo: ousiuuwgwkiyikyq: return $uiewakwqscemywuo; } public function ewewecscqocemiqs($iwewcwusemqaiggk) { $bgscekiuycggmyci = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::oqmosiywgecmeqig); $egcqoiemwoyoaewe = ManipulateTerm::get($iwewcwusemqaiggk); if ($bgscekiuycggmyci && $egcqoiemwoyoaewe instanceof WP_Term && $egcqoiemwoyoaewe->parent) { goto ogsaaqsaogcqiouy; } $ugugimquukqwogge = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::ugygausceickekgo); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $ugugimquukqwogge = self::ewewecscqocemiqs($egcqoiemwoyoaewe->parent); iwekmyyccgiyuecc: return $ugugimquukqwogge; } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) { if (!($guwumyyyakswawas = $this->wqiaaecemqgacuww())) { goto aomysykcgikegiau; } $ugugimquukqwogge = $this->ewewecscqocemiqs($guwumyyyakswawas); if (!(is_array($ugugimquukqwogge) && in_array($ymqmyyeuycgmigyo, $ugugimquukqwogge, true))) { goto ikqqskkqqwmwssoo; } return false; ikqqskkqqwmwssoo: aomysykcgikegiau: if (!($ymqmyyeuycgmigyo === $this->aakmagwggmkoiiyu())) { goto cwwmimggaaecmucw; } return true; cwwmimggaaecmucw: return parent::ayseokmqycoqaigc($ymqmyyeuycgmigyo); } private function wqiaaecemqgacuww(?string $ymqmyyeuycgmigyo = null) : int { if ($ymqmyyeuycgmigyo) { goto awoaooyoeoyeeqee; } $ymqmyyeuycgmigyo = self::cmckeoksigiaqykc; awoaooyoeoyeeqee: $sogksuscggsicmac = 0; if (!(self::cmckeoksigiaqykc === $ymqmyyeuycgmigyo && DecoratorTaxonomy::qmssqeyayicowkgy($ymqmyyeuycgmigyo))) { goto ogqmesokykywseys; } $sogksuscggsicmac = get_queried_object_id(); ogqmesokykywseys: return $sogksuscggsicmac; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto gcckqucukawcasgk; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto cuumeogeomowqisc; } $esygomwiykacwkye = $esygomwiykacwkye->queries; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto uiosisocuwokwkie; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ymqmyyeuycgmigyo)) { goto iikiiioqiyegyaak; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc(self::omumymwakeoiwouc . $ymqmyyeuycgmigyo, null, $icwicymcioeyeyek); if (!$eqgoocgaqwqcimie) { goto gicyayswqyuoekcq; } if (is_array($eqgoocgaqwqcimie)) { goto kosaqwikueyksqmw; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; kosaqwikueyksqmw: $esygomwiykacwkye[] = ["\164\x61\170\x6f\x6e\x6f\x6d\x79" => $ymqmyyeuycgmigyo, "\x66\151\145\x6c\x64" => self::ouywiegeiyuaaawo, "\x74\145\162\155\x73" => $eqgoocgaqwqcimie, "\151\156\x63\x6c\x75\x64\x65\x5f\x63\150\151\x6c\x64\x72\x65\x6e" => 1, "\143\157\155\160\x61\162\145" => self::iamiiekkgssgeaew]; gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: mqkmcysgoiaouiwm: } ykomgumacooyomsk: cuumeogeomowqisc: $this->gmcqycoowqmycocs(); $gqgemcmoicmgaqie->set("\x74\x61\170\x5f\x71\x75\145\162\x79", $esygomwiykacwkye); gcckqucukawcasgk: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function cccesyuceswckkqy($syquekoksmgewowm, $yygmoeguaqyumuui) { $kaigioacywcmqiam = DecoratorWoocommerce::qagkseqwwaqacakk(); $wiciwwggyauswauk = []; if (is_array($yygmoeguaqyumuui)) { goto qmkaeeomgkwggoyo; } $yygmoeguaqyumuui = [$yygmoeguaqyumuui]; qmkaeeomgkwggoyo: foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($eqgoocgaqwqcimie = ManipulateArray::get($kaigioacywcmqiam, $uusmaiomayssaecw))) { goto eekcoeikaeaaeyii; } $wiciwwggyauswauk[] = $eqgoocgaqwqcimie; eekcoeikaeaaeyii: ocaguquugeamqckq: } csammceowmqwaamq: if (!$wiciwwggyauswauk) { goto cogywoqcqummsyus; } $syquekoksmgewowm[] = ["\164\x61\x78\157\156\157\155\171" => "\160\162\x6f\144\165\143\x74\x5f\166\151\x73\x69\x62\151\154\151\x74\171", "\x66\151\x65\154\144" => "\164\x65\162\x6d\x5f\164\141\x78\157\x6e\157\155\171\x5f\x69\x64", "\x74\x65\162\155\163" => $wiciwwggyauswauk, "\x6f\160\x65\162\141\164\157\x72" => "\x4e\117\124\40\111\x4e"]; cogywoqcqummsyus: return $syquekoksmgewowm; } public function eicgqsyqqsccywwq($qwcmueausqgiwigy = false) : array { $yygmoeguaqyumuui = []; if (!(self::wiquocqckkqkmayo === DecoratorOption::get("\167\157\157\x63\157\x6d\155\145\162\x63\145\137\x68\151\x64\145\x5f\x6f\x75\x74\x5f\x6f\146\137\x73\x74\x6f\143\153\137\x69\164\x65\x6d\x73"))) { goto gmwykkouysyaqwqm; } $yygmoeguaqyumuui[] = "\x6f\x75\164\x6f\x66\x73\x74\157\x63\153"; gmwykkouysyaqwqm: if (!$this->qacygisasqiuosci()) { goto sockeswygwcskeuq; } if (!$qwcmueausqgiwigy) { goto ugqwuugsweqgmywk; } $yygmoeguaqyumuui[] = "\x65\x78\143\x6c\165\x64\x65\x2d\x66\162\157\x6d\x2d\x73\x65\x61\162\143\x68"; goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $yygmoeguaqyumuui[] = "\145\170\x63\154\165\144\145\55\146\162\x6f\x6d\55\143\x61\x74\x61\x6c\157\x67"; uaukmuiwskcemcsw: sockeswygwcskeuq: return $yygmoeguaqyumuui; } public function gmcqycoowqmycocs() { $this->cecaguuoecmccuse("\x77\157\x6f\143\157\155\155\x65\x72\143\145\x5f\x70\x72\x6f\x64\x75\x63\x74\137\161\x75\x65\162\x79\137\x74\141\170\137\161\165\x65\162\171", function ($syquekoksmgewowm, $_this) { foreach ($syquekoksmgewowm as $uusmaiomayssaecw => $ieqocgiosekoeoqe) { if (!("\160\x72\x6f\x64\165\x63\x74\x5f\x76\x69\x73\151\x62\151\154\x69\x74\171" === ManipulateArray::get($ieqocgiosekoeoqe, self::gmmygyiecgmggaam))) { goto cscusseysqygsoiy; } unset($syquekoksmgewowm[$uusmaiomayssaecw]); cscusseysqygsoiy: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: return $this->cccesyuceswckkqy($syquekoksmgewowm, $this->eicgqsyqqsccywwq(true)); }, 10, 2); $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\x6d\155\145\x72\x63\145\x5f\x70\x72\x6f\x64\165\x63\164\x5f\151\163\137\166\x69\163\x69\x62\x6c\x65", function ($ioqywyyeioqywogw, $aokagokqyuysuksm) { return true; }, 10, 2); } public function uikgwcuascgeissw($kesssewsiegssiya) : ?string { $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); return $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya)); } }
