<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3edba3286             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Exception; class Storage extends Container { const ouqgiccuookgiioq = "\143\x6f\157\x6b\x69\x65"; const moocuyskywyosass = "\x74\x72\x61\x6e\163\x69\x65\x6e\164"; const sokgkegywgcccmwc = "\163\145\x73\163\x69\157\x6e"; protected ?string $ip = null; protected ?string $key = null; protected ?string $type = self::moocuyskywyosass; public function __construct($sqeykgyoooqysmca = '') { if (!$sqeykgyoooqysmca) { goto ygcsmkuycoagwyou; } $this->aseocggwwegcmqes($sqeykgyoooqysmca); ygcsmkuycoagwyou: if (!($this->gueasuouwqysmomu() === self::moocuyskywyosass && !session_id())) { goto kqksuugcgsyeoayy; } try { @session_start(); } catch (Exception $wgaoewqkwgomoaai) { } kqksuugcgsyeoayy: $this->ksqoomuuqmwowiim($this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo()); $this->gcgmwakaoecqcuwo(md5($this->meymqemgekqiawec() . self::cgckcqysmyiikaqw . "\x5f\163\141\x6c\x74")); parent::__construct(); } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function ksqoomuuqmwowiim(?string $kucumcusyyckayas) : self { $this->ip = $kucumcusyyckayas; return $this; } public function meymqemgekqiawec() : ?string { return $this->ip; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function set($uusmaiomayssaecw, $eqgoocgaqwqcimie) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $this->caokeucsksukesyo()->wikusamwomuogoau()->giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); goto iggyqogweyosuikc; case self::sokgkegywgcccmwc: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); if (is_array($icwicymcioeyeyek)) { goto ssoucoucsgccekwe; } $icwicymcioeyeyek = []; ssoucoucsgccekwe: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); goto iggyqogweyosuikc; case self::ouqgiccuookgiioq: setcookie($uusmaiomayssaecw, $eqgoocgaqwqcimie, time() + DAY_IN_SECONDS); goto iggyqogweyosuikc; } qqewoyookaskiuek: iggyqogweyosuikc: } public function get(?string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!$uusmaiomayssaecw) { goto ywqgcegomwaiuquc; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto eegqyykygiccaoeo; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wikusamwomuogoau()->wugwewwmekuaamos($uusmaiomayssaecw); eegqyykygiccaoeo: goto qkcyqocqqwmqgqww; case self::sokgkegywgcccmwc: $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto qkcyqocqqwmqgqww; case self::ouqgiccuookgiioq: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto qkcyqocqqwmqgqww; } miyqyeiwquwsacsm: qkcyqocqqwmqgqww: ywqgcegomwaiuquc: return $eqgoocgaqwqcimie; } public function umuecysoywoumgwo(?string $uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!$uusmaiomayssaecw) { goto acaqummmoyiemqss; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $oyuakceioggwckok = $this->caokeucsksukesyo()->wikusamwomuogoau()->mawiagaeusgooyuk($uusmaiomayssaecw); goto wmmggowmigekyoso; case self::sokgkegywgcccmwc: $oyuakceioggwckok = !empty($this->get($uusmaiomayssaecw)); goto wmmggowmigekyoso; case self::ouqgiccuookgiioq: $oyuakceioggwckok = isset($_COOKIE[$uusmaiomayssaecw]); goto wmmggowmigekyoso; } soqqemyioggmoakg: wmmggowmigekyoso: acaqummmoyiemqss: return $oyuakceioggwckok; } public function remove(?string $uusmaiomayssaecw) { if (!$uusmaiomayssaecw) { goto hoeeyiowekaeemko; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto oqugqwcyomiaaoqu; } $this->caokeucsksukesyo()->wikusamwomuogoau()->aakkiwusygocokce($uusmaiomayssaecw); oqugqwcyomiaaoqu: goto suswcqoyyqkkquuo; case self::sokgkegywgcccmwc: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto foeeqckqsyockkak; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, $uusmaiomayssaecw); $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); foeeqckqsyockkak: goto suswcqoyyqkkquuo; case self::ouqgiccuookgiioq: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto iekumemscwieugqw; } unset($_COOKIE[$uusmaiomayssaecw]); setcookie($uusmaiomayssaecw, '', time() - 3600, "\x2f"); iekumemscwieugqw: goto suswcqoyyqkkquuo; } eeqesooyqagwawae: suswcqoyyqkkquuo: hoeeyiowekaeemko: } }
