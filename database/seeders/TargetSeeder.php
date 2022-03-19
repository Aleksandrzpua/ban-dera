<?php

namespace Database\Seeders;

use App\Models\Target;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * How to work with this list, if you want to add new targets:
     * 1) For VSCode, install: https://github.com/Tyriar/vscode-sort-lines
     * 2) Add new website to the end of the list
     * 3) Select all the lines betwen [ and ]
     * 4) Press CTRL + SHIFT + P, type `sort` and select "Sort lines (unique ascending, case insensetive)"
     * OR you can use https://www.online-utility.org/text/sort.jsp with "Remove duplicates" option
     *
     * Then paste new list instead old one
     *
     * @var array
     */
    private array $_TARGETS = [
        'http://185.157.96.130',
        'http://3dsec.sberbank.ru',
        'http://78bus.ru',
        'http://84.252.144.102',
        'http://новогодний.норвикбанк.рф',
        'http://роскосмосбанк.рус',
        'http://acs.vendorcert.mirconnect.ru',
        'http://alfabank.ru',
        'http://alfaradio.by',
        'http://ati.su',
        'http://bank.vwfs.ru',
        'http://bankdabrabyt.by',
        'http://bankffin.ru',
        'http://belarus24.by',
        'http://belarusbank.by',
        'http://belinvestbank.by',
        'http://belkart.by',
        'http://belmarket.by',
        'http://belres.by',
        'http://bgp.by',
        'http://brrb.by',
        'http://busik24.com',
        'http://butb.by',
        'http://ca.gisca.ru',
        'http://ca.kamgov.ru',
        'http://ca.ntssoft.ru',
        'http://cfmc.ru',
        'http://dreamkas.ru',
        'http://ds1.mirconnect.ru',
        'http://ds2.mirconnect.ru',
        'http://econombank.ru',
        'http://elkursk.ru',
        'http://en.kremlin.ru',
        'http://energobank.ru',
        'http://enter.unicredit.ru',
        'http://epnow.ru',
        'http://etp-ets.ru',
        'http://etp.roseltorg.ru',
        'http://etpgpb.ru',
        'http://forshtadt.ru',
        'http://freelance.ru',
        'http://freelansim.ru',
        'http://fsb.ru',
        'http://goszakupki.by',
        'http://government.ru',
        'http://grodnonews.by',
        'http://gruzovozkin.pro',
        'http://gz.lot-online.ru',
        'http://imctax.parus-s.ru',
        'http://izhtender.ru',
        'http://kb-tub.ru',
        'http://kbhmb.ru',
        'http://kraskript.com',
        'http://kremlin.ru',
        'http://link.centrinvest.ru',
        'http://logisticgrup.ru',
        'http://m.taxi',
        'http://mascom-it.ru',
        'http://mcspro.ru',
        'http://midural.ru',
        'http://mininform.gov.by',
        'http://minsknews.by',
        'http://mironline.ru',
        'http://mogilevnews.by',
        'http://my.bank-hlynov.ru',
        'http://noosferabank.ru',
        'http://ont.by',
        'http://pib.ru',
        'http://planeradar.ru/virtualradar/desktop.html',
        'http://pravoslavie.ru',
        'http://profile.sber.ru',
        'http://qiwi.com',
        'http://radiobelarus.by',
        'http://radiobrestfm.by',
        'http://radiomir.by',
        'http://radiostalica.by',
        'http://radiusfm.by',
        'http://rbank.by',
        'http://regions.ru',
        'http://rfibank.ru',
        'http://rk72.ru',
        'http://rn-bank.ru',
        'http://rnko-kholmsk.ru',
        'http://rsbis.ru/elektronnaya-podpis',
        'http://rts-tender.ru',
        'http://ru.ccb.com',
        'http://rusvesna.su',
        'http://sb.by',
        'http://sber.ru',
        'http://sberbank-ast.ru',
        'http://sbionline.ru',
        'http://smbcr-bank.ru',
        'http://smpbank.ru',
        'http://socium-bank.ru',
        'http://solidbank.ru',
        'http://squaretrade.ru',
        'http://stm.srbank.ru',
        'http://structure.mil.ru/structure/uc/info.htm',
        'http://tatsotsbank.ru',
        'http://tektorg.ru',
        'http://tembr.ru',
        'http://uat-ds1.mirconnect.ru',
        'http://uat-ds2.mirconnect.ru',
        'http://ucestp.ru',
        'http://udcs.ru',
        'http://v1.rostec.ru/',
        'http://vostok-trans.com',
        'http://woori.ru',
        'http://www.024.by',
        'http://www.131.ru',
        'http://www.1cb.ru',
        'http://www.24ecp.ru',
        'http://www.7305115.ru',
        'http://www.вакобанк.рф',
        'http://www.рк-банк.рф',
        'http://www.abr.ru',
        'http://www.absolutbank.ru',
        'http://www.acquiring.ru',
        'http://www.acropol.ru',
        'http://www.agroros.ru',
        'http://www.ai-bank.ru',
        'http://www.akbars.ru',
        'http://www.akbkeb.ru',
        'http://www.akcept.ru',
        'http://www.akibank.ru',
        'http://www.aktivbank.ru',
        'http://www.alal.ru',
        'http://www.albank.ru',
        'http://www.alefbank.ru',
        'http://www.alexbank.ru',
        'http://www.alfafuture.ru',
        'http://www.altbank.ru',
        'http://www.altynbank.com',
        'http://www.ankb.ru',
        'http://www.aorb.ru',
        'http://www.apabank.ru',
        'http://www.apkbank.ru',
        'http://www.aresbank.ru',
        'http://www.astralnalog.ru',
        'http://www.atb.su',
        'http://www.autokreditbank.ru',
        'http://www.aversbank.ru',
        'http://www.avtogradbank.ru',
        'http://www.baikalcredobank.ru',
        'http://www.baikalinvestbank.ru',
        'http://www.balakovo-bank.ru',
        'http://www.baltinvest.ru',
        'http://www.bancaintesa.ru',
        'http://www.bank-45.ru',
        'http://www.bank-arzamas.ru',
        'http://www.bank-credit-suisse-moscow.ru',
        'http://www.bank-mayskiy.ru',
        'http://www.bank-mscb.ru',
        'http://www.bank-peresvet.ru',
        'http://www.bank45.ru',
        'http://www.bankck.ru',
        'http://www.bankd.ru',
        'http://www.bankdolinsk.ru',
        'http://www.bankelita.ru',
        'http://www.bankermak.ru',
        'http://www.bankgefest.ru',
        'http://www.bankglobus.ru',
        'http://www.bankhimik.ru',
        'http://www.banki.ru/banks/bank/siab',
        'http://www.bankirs.ru',
        'http://www.bankkaluga.ru',
        'http://www.bankkontinental.ru',
        'http://www.bankmaxima.ru',
        'http://www.bankneyva.ru',
        'http://www.bankofkazan.ru',
        'http://www.bankorange.ru',
        'http://www.bankpsafinance.ru',
        'http://www.bankrealist.ru',
        'http://www.bankrmp.ru',
        'http://www.bankrsi.ru',
        'http://www.banksaratov.ru',
        'http://www.banksoyuz.ru',
        'http://www.banksputnik.ru',
        'http://www.bankuralsib.ru',
        'http://www.bankvl.ru',
        'http://www.bankzenitsochi.ru',
        'http://www.bbr.ru',
        'http://www.bcosm.ru',
        'http://www.belapb.by',
        'http://www.belinfonalog.ru',
        'http://www.bellegprom.by',
        'http://www.belneftekhim.by',
        'http://www.belnovosti.by',
        'http://www.belsocbank.ru',
        'http://www.bereit.ru',
        'http://www.besteffortsbank.ru',
        'http://www.biz-autocredit.chelind.ru',
        'http://www.bk.mufg.jp/ao/index.html',
        'http://www.bktb.ru',
        'http://www.bm-bank.ru',
        'http://www.bnal.ru',
        'http://www.bnpparibasbank.ru',
        'http://www.boc.ru',
        'http://www.bspb.ru',
        'http://www.bstbank.ru',
        'http://www.bystrobank.ru',
        'http://www.ca-cib.ru',
        'http://www.capital-bank.ru',
        'http://www.capitalbank.ru',
        'http://www.cardcredit.ru',
        'http://www.cbrca.ru',
        'http://www.ccb.ru',
        'http://www.center-inform.ru',
        'http://www.centrinvest.ru',
        'http://www.cetelem.ru',
        'http://www.cfb.ru',
        'http://www.chbrr.crimea.com',
        'http://www.chelinvest.ru',
        'http://www.cibank.ru',
        'http://www.cibl.ru',
        'http://www.cit-ufa.ru',
        'http://www.citibank.ru',
        'http://www.commerzbank.ru',
        'http://www.council.gov.ru',
        'http://www.creditural.ru',
        'http://www.crocusbank.ru',
        'http://www.crosnabank.ru',
        'http://www.crypset.ru',
        'http://www.ctv.by',
        'http://www.custody.ru',
        'http://www.dcapital.ru',
        'http://www.denizbank.ru',
        'http://www.derzhava.ru',
        'http://www.deutschebank.ru',
        'http://www.dombank.ru',
        'http://www.doncombank.ru',
        'http://www.donteksbank.ru',
        'http://www.dvbank.ru',
        'http://www.e-portal.ru',
        'http://www.eab.ru',
        'http://www.eatpbank.ru',
        'http://www.eco-invest.ru',
        'http://www.emb.ru',
        'http://www.energo.by',
        'http://www.energotransbank.com',
        'http://www.eurasian-bank.ru',
        'http://www.euroalliance.ru',
        'http://www.evrofinance.ru',
        'http://www.exibank.ru',
        'http://www.eximbank.ru',
        'http://www.expobank.ru',
        'http://www.factoring.ru',
        'http://www.fagci.ru',
        'http://www.fbbank.ru',
        'http://www.finambank.ru',
        'http://www.finbank.ru',
        'http://www.finsb.ru',
        'http://www.forabank.ru',
        'http://www.forbank.ru',
        'http://www.formula-taxi.ru',
        'http://www.gazneftbank.ru',
        'http://www.gaztransbank.ru',
        'http://www.genbank.ru',
        'http://www.geobank.ru',
        'http://www.gias.by',
        'http://www.gibank.ru',
        'http://www.goldmansachsbank.ru',
        'http://www.gorbank.spb.ru',
        'http://www.gosuslugi.ru/ru',
        'http://www.government.by',
        'http://www.gpb.ru',
        'http://www.gutabank.ru',
        'http://www.hsbc.ru',
        'http://www.ibam.ru',
        'http://www.ibv.ru',
        'http://www.icbcmoscow.ru',
        'http://www.icbru.ru',
        'http://www.icentr.ru',
        'http://www.icvibor.ru',
        'http://www.ikanobank.ru',
        'http://www.imb.ru',
        'http://www.in-bank.ru',
        'http://www.infotrust.ru',
        'http://www.ing.ru',
        'http://www.interprombank.ru',
        'http://www.invb.ru',
        'http://www.ipb.ru',
        'http://www.ipoteka-tut.ru',
        'http://www.isbank.com.ru',
        'http://www.isbank.ru',
        'http://www.itb.ru',
        'http://www.itbank.ru',
        'http://www.iturupbank.ru',
        'http://www.izhcombank.ru',
        'http://www.jpmorgan.ru',
        'http://www.jtbank.ru',
        'http://www.kamkombank.ru',
        'http://www.kartoteka.ru',
        'http://www.kbagora.ru',
        'http://www.kbb.ru',
        'http://www.kbca.ru',
        'http://www.kbsammit.ru',
        'http://www.kebrus.ru',
        'http://www.kgb.by',
        'http://www.kkb.ru',
        'http://www.klookva.ru',
        'http://www.kmbank.ru',
        'http://www.koltso.ural.ru',
        'http://www.kombank.ru',
        'http://www.kremlinbank.ru',
        'http://www.krona-bank.ru',
        'http://www.ks-bank.ru',
        'http://www.kt-69.ru',
        'http://www.kubankredit.ru',
        'http://www.kupivkredit.ru',
        'http://www.kurskprombank.ru',
        'http://www.kuzbank.ru',
        'http://www.kuzbasshimbank.ru',
        'http://www.lanta24.ru',
        'http://www.maykopbank.ru',
        'http://www.mbbr.ru',
        'http://www.mbbru.ru',
        'http://www.mcbank.ru',
        'http://www.mcbankrus.ru',
        'http://www.mcombank.ru',
        'http://www.megapolice.ru',
        'http://www.metallinvestbank.ru',
        'http://www.metallurgbank.ru',
        'http://www.metcom.ru',
        'http://www.mfk-bank.ru',
        'http://www.mia.ru',
        'http://www.mil.by',
        'http://www.minbank.ru',
        'http://www.mizuhobank.com/russia/ru',
        'http://www.mnhb.ru',
        'http://www.modulbank.ru',
        'http://www.morbank.ru',
        'http://www.morganstanley.ru',
        'http://www.morskoybank.com',
        'http://www.moscombank.ru',
        'http://www.moskb.ru',
        'http://www.mosoblbank.ru',
        'http://www.mpsb.ru',
        'http://www.mti-bank.ru',
        'http://www.mtsbank.ru',
        'http://www.mvd.gov.by',
        'http://www.mvs-bank.ru',
        'http://www.nbdbank.ru',
        'http://www.nbrb.by',
        'http://www.nbsrf.ru',
        'http://www.ncc-qccp.ru',
        'http://www.ncibank.ru',
        'http://www.ndb24.ru',
        'http://www.nerungribank.ru',
        'http://www.new.nsbank.ru',
        'http://www.newbank.ru',
        'http://www.nib-samara.ru',
        'http://www.nipbank.ru',
        'http://www.nkbank.ru',
        'http://www.nmbank.ru',
        'http://www.novikom.ru',
        'http://www.novobank.ru',
        'http://www.novokib.ru',
        'http://www.nrb.ru',
        'http://www.nskbl.ru',
        'http://www.nucrf.ru',
        'http://www.nwipbank.ru',
        'http://www.nwudc.ru',
        'http://www.obr1016.ru',
        'http://www.odnoklassniki.ru',
        'http://www.ok.ru/pochtabank',
        'http://www.okbank.ru',
        'http://www.olabank.ru',
        'http://www.olb.ru',
        'http://www.onegobank.ru',
        'http://www.oneybank.ru',
        'http://www.ooo-ubs-bank.com',
        'http://www.orbank.ru',
        'http://www.orgbank.ru',
        'http://www.otchet-online.ru',
        'http://www.otpbank.ru',
        'http://www.patriarchia.ru',
        'http://www.peb.ru',
        'http://www.pibank.ru',
        'http://www.platina.ru',
        'http://www.plus-bank.ru',
        'http://www.poezdbilet.ru',
        'http://www.pokupay.ru',
        'http://www.prbkbr.ru',
        'http://www.primbank.ru',
        'http://www.priobye.ru',
        'http://www.probank.pro',
        'http://www.procombank.ru',
        'http://www.profitbank.ru',
        'http://www.prokuratura.gov.by',
        'http://www.promtransbank.ru',
        'http://www.psbinvest.ru',
        'http://www.psbst.ru',
        'http://www.pscb.ru',
        'http://www.pshb.ru',
        'http://www.ptkb.ru',
        'http://www.raiffeisen.ru',
        'http://www.rapida.ru',
        'http://www.rbabank.ru',
        'http://www.rbb.ru',
        'http://www.rcarus.ru',
        'http://www.rdb.ru',
        'http://www.rencredit.ru',
        'http://www.rentabank.ru',
        'http://www.resocreditbank.ru',
        'http://www.restrust.ru',
        'http://www.rgsbank.ru',
        'http://www.rncb.ru',
        'http://www.roseltorg.ru',
        'http://www.rosevrobank.ru',
        'http://www.rostbank.ru',
        'http://www.rostfinance.ru',
        'http://www.round.ru',
        'http://www.royal-bank.ru',
        'http://www.rrb.ru',
        'http://www.rsb.ru',
        'http://www.rsbank.ru',
        'http://www.ru.abchina.com',
        'http://www.ru.natixis.com',
        'http://www.rubank.ru',
        'http://www.runabank.ru',
        'http://www.rupoezd.ru',
        'http://www.rusbsbank.ru',
        'http://www.rusfinance.ru',
        'http://www.rusfincorp.ru',
        'http://www.rusnarbank.ru',
        'http://www.russitabank.ru',
        'http://www.sauberbank.com',
        'http://www.sbbank.ru',
        'http://www.sbnk.ru',
        'http://www.sdm.ru',
        'http://www.selkombank.ru',
        'http://www.selmashbank.ru',
        'http://www.severstroybank35.ru',
        'http://www.sevnb.ru',
        'http://www.shop.wolkonsky.com',
        'http://www.sibsoc.ru',
        'http://www.sima-land.ru',
        'http://www.sinergy.ru',
        'http://www.sinko-bank.ru',
        'http://www.sistemabank.ru',
        'http://www.sksbank.ru',
        'http://www.slavbank.ru',
        'http://www.slavcred.ru',
        'http://www.slbank.ru',
        'http://www.slonves.by',
        'http://www.snbank.ru',
        'http://www.sngb.ru',
        'http://www.sobinbank.ru',
        'http://www.spiritbank.ru',
        'http://www.ssb.msk.ru',
        'http://www.sstb-bank.ru',
        'http://www.stkbank.ru',
        'http://www.stv-it.ru',
        'http://www.sviaz-bank.ru',
        'http://www.tagbank.ru',
        'http://www.taidon.ru',
        'http://www.tavrich.ru',
        'http://www.tender-bank.ru',
        'http://www.thbank.ru',
        'http://www.timerbank.ru',
        'http://www.tinkoff.ru',
        'http://www.tkbbank.ru',
        'http://www.tkpb.ru',
        'http://www.tpsbank.tomsk.ru',
        'http://www.transstroibank.ru',
        'http://www.tula.ru',
        'http://www.tvrmogilev.by',
        'http://www.ucpir.ru',
        'http://www.ufb.ru',
        'http://www.unistream.ru',
        'http://www.united.ru',
        'http://www.uralexpress.ru',
        'http://www.uralfinance.ru',
        'http://www.uralprombank.ru',
        'http://www.vbank.ru',
        'http://www.vbrr.ru',
        'http://www.vcabank.ru',
        'http://www.venets-bank.ru',
        'http://www.vfbank.ru',
        'http://www.vikingbank.ru',
        'http://www.vitabank.ru',
        'http://www.vlb100.ru',
        'http://www.vlbb.ru',
        'http://www.volgaex.ru',
        'http://www.vostbank.ru',
        'http://www.vrbmoscow.ru',
        'http://www.vtb.by',
        'http://www.vuzbank.ru',
        'http://www.vyatich.ryazan.ru',
        'http://www.y-center.ru',
        'http://www.yarinterbank.ru',
        'http://www.zapsibkombank.ru',
        'http://www.zarech.ru',
        'http://www.zemcombank.ru',
        'http://www.zemsky.ru',
        'http://www.zen.yandex.ru',
        'http://www.zhivagobank.ru',
        'http://www.ziraatbank.ru',
        'http://www/nb-bank.ru',
        'http://xn----etbhgfabn1ceiwf1d.xn--p1ai',
        'http://yandex.by',
        'http://ymkbank.ru',
        'http://yoomoney.ru',
        'http://zakazrf.ru',
        'http://zakupki.butb.by',
        'http://zarya.by',
        'https://1poezd.ru',
        'https://2y.by',
        'https://366.ru',
        'https://4fresh.ru',
        'https://618.by',
        'https://a-groupp.com',
        'https://advego.com',
        'https://alfabank.ru/everyday/online/',
        'https://api.etpgpb.ru',
        'https://api.koronapay.com',
        'https://api.sberbank.ru/prod/tokens/v2/oauth',
        'https://api.sberbank.ru/prod/tokens/v2/oidc',
        'https://apparat.lenobl.ru',
        'https://apteka.ru',
        'https://aptekamos.ru',
        'https://atec-logistic.ru',
        'https://ati.su',
        'https://auth.ria.ru',
        'https://autobus-moskva.ru',
        'https://av.brest.by',
        'https://av.ru',
        'https://aversbank.ru',
        'https://avgrodno.by',
        'https://avtobus-raspisanie.ru',
        'https://avtobus.flydex.ru',
        'https://avtoflot.ru',
        'https://avtoperevozki-rostov.ru',
        'https://avtovokzal-mogilev.by',
        'https://avtovokzal-volgograd.ru',
        'https://avtovokzal.gomel.by',
        'https://azlog.ru',
        'https://bcs.ru',
        'https://bigtaxi.ru',
        'https://bilet.aero',
        'https://bonus.taxi',
        'https://broker.ru',
        'https://bus-69.ru',
        'https://bus.biletyplus.ru',
        'https://bus.tutu.ru',
        'https://busfor.by',
        'https://busfor.ru',
        'https://busnovoyas.ru',
        'https://buybusticket.ru',
        'https://by.tutu.travel',
        'https://cargo-express.ru',
        'https://carpool.star-bus.ru',
        'https://casebook.ru/',
        'https://cheladmin.ru',
        'https://cinemastar.ru/',
        'https://city-mobil.ru',
        'https://cloud.rkn.gov.ru',
        'https://crimea-news.com',
        'https://ct-mobil.ru',
        'https://customs.gov.ru',
        'https://ddos-guard.net/ru',
        'https://dellos-delivery.ru',
        'https://denmark.kdmid.ru',
        'https://dev.nspk.ru',
        'https://digital.gov.ru/ru',
        'https://dnr-news.com',
        'https://donavto.ru',
        'https://dostavista.ru',
        'https://e-trust.gosuslugi.ru',
        'https://eadaily.com/ru',
        'https://ecolines.by',
        'https://ecolines.net',
        'https://ecomarket.ru',
        'https://eda.me',
        'https://eda.yandex.ru',
        'https://ekaterinburg.avtobus1.ru',
        'https://er.ru',
        'https://esia.gosuslugi.ru',
        'https://etp.gpb.ru/',
        'https://familyfriend.com',
        'https://fourways.ru',
        'https://free-news.su',
        'https://freshrestaurant.ru',
        'https://garantpost.ru',
        'https://gb.etpgpb.ru',
        'https://geh.etpgpb.ru',
        'https://glavtrassa.ru',
        'https://globusgurme.ru',
        'https://gomel-minsk.by',
        'https://gos.etpgpb.ru',
        'https://goszakaz.ru',
        'https://gpn.etpgpb.ru',
        'https://grastin.ru',
        'https://gruz.msk.ru',
        'https://gruzoperevozka78.ru',
        'https://gruzosfera.ru',
        'https://gruzovichkof.ru',
        'https://gtrklnr.com',
        'https://gu.spb.ru',
        'https://iecp.ru/ep/ep-verification',
        'https://iecp.ru/ep/uc-list',
        'https://ilovesakura.ru',
        'https://im.uralsib.ru/clientendpoint',
        'https://incom-cargo.ru',
        'https://inter-rao.etpgpb.ru',
        'https://jdbilet.ru',
        'https://kaktustour.com',
        'https://karofilm.ru/',
        'https://kassa.yandex.ru/main-new',
        'https://kdr.gazelkin.ru',
        'https://kinomax.ru/',
        'https://kinosfera-imax.ru/',
        'https://kinoteatr.ru/',
        'https://kk.bank/UdTs',
        'https://kogda.by',
        'https://koronapay.com',
        'https://krd.ru',
        'https://kuban24.tv',
        'https://kwork.ru',
        'https://lavka.yandex.ru',
        'https://lenta.ru',
        'https://levelkitchen.com',
        'https://lk.rostec.ru/Account/LogIn?ReturnUrl=%2F',
        'https://localkitchen.ru',
        'https://logistika-zapad.ru',
        'https://loukoster.com',
        'https://lug-info.com',
        'https://lukoil.ru',
        'https://m-food.ru',
        'https://maestrogruz.ru',
        'https://magic-trans.ru',
        'https://magnit.ru',
        'https://mail.rkn.gov.ru',
        'https://mil.ru',
        'https://minsk-avtovokzal.by',
        'https://minsktrans.by',
        'https://minzdrav.gov.ru',
        'https://mkb.ru',
        'https://mo-taxi.ru',
        'https://monopoly.ru',
        'https://mos-kino.ru/',
        'https://moscowfresh.ru',
        'https://moskva-avtobus.ru',
        'https://moslenta.ru',
        'https://mosreg.ru',
        'https://mostaxi-svao.ru',
        'https://mostransavto.ru',
        'https://movens.ru',
        'https://movibus.ru',
        'https://msk.gruzovichkof.ru',
        'https://msk.taxovichkof.ru',
        'https://mvd.gov.ru',
        'https://myroutes.ru',
        'https://nangs.org',
        'https://nevatk.ru',
        'https://nevskiy-express.ru',
        'https://newsland.com',
        'https://nirax-cargo.ru',
        'https://nlmk.com',
        'https://nordw.ru',
        'https://norussians.xyz',
        'https://novikovgroup.ru',
        'https://nyt.ru',
        'https://obyasnyaem-prod.nationalpriority.ru',
        'https://oldtaxi.ru',
        'https://omk.ru',
        'https://online.gpb.ru/login',
        'https://online.mkb.ru/',
        'https://online.rshb.ru',
        'https://online.sberbank.ru',
        'https://online.sberbank.ru/CSAFront/index.do#/',
        'https://online.sovcombank.ru/',
        'https://online.vtb.ru',
        'https://oooyata.ru',
        'https://orel-region.ru',
        'https://pass.rw.by',
        'https://passport.etpgpb.ru',
        'https://pecom.ru',
        'https://perevozka-gruza.ru',
        'https://perevozka24.ru',
        'https://perevozki.youdo.com',
        'https://pfr.gov.ru',
        'https://pioner-cinema.ru/',
        'https://piter-cargo.ru',
        'https://planetazdorovo.ru',
        'https://podorojnik.ru',
        'https://poezd-moskva.su',
        'https://poezd.ru',
        'https://poezda.biletyplus.ru',
        'https://poezdato.net',
        'https://pognali.su',
        'https://pogruzivkuzov.ru',
        'https://premierzal.ru/',
        'https://proline.su',
        'https://proverki.gov.ru',
        'https://pwd.wto.economy.gov.ru',
        'https://pzd-online.ru',
        'https://qrator.net/ru',
        'https://rasp.yandex.ru',
        'https://rbc.ru',
        'https://region-am.ru',
        'https://region.ru',
        'https://ria.ru',
        'https://ria.ru/lenta',
        'https://riafan.ru',
        'https://rkn.gov.ru',
        'https://rmk-group.ru/ru',
        'https://romanov-cinema.ru/',
        'https://ros-bilet.ru',
        'https://rosnedra.etpgpb.ru',
        'https://rostec.ru/',
        'https://rostov-na-donu.vezetvsem.ru',
        'https://rostov-transport.info',
        'https://rostov.blizko.ru',
        'https://rostov.gruzovichkof.ru',
        'https://rosukrbus.com',
        'https://rov.aero',
        'https://ru.myfin.by/banki',
        'https://russian.rt.com',
        'https://rutaxi.ru/moscow',
        'https://rutaxist.ru',
        'https://rzd.ru',
        'https://rzdlog.ru',
        'https://salatoff.ru',
        'https://samcom.ru',
        'https://samokat.ru',
        'https://samson-pharma.ru',
        'https://sankt-peterburg.azimut-nsk.ru',
        'https://sber-am.ru',
        'https://sberbank.ru',
        'https://sberfn.ru',
        'https://sbis.ru/',
        'https://scloud.rostec.ru/login',
        'https://server.nspk.ru',
        'https://sevastopol.su',
        'https://severnye-vorota.ru',
        'https://sip.nspk.ru',
        'https://sirius-trans.ru',
        'https://sm.news',
        'https://smi.rostec.ru/user',
        'https://smotrim.ru',
        'https://sobesednik.ru',
        'https://socratcargo.ru',
        'https://solidwall.ru',
        'https://spark-interfax.ru/',
        'https://spb-perevozka.ru',
        'https://spb.dellin.ru',
        'https://spb.gazelking.ru',
        'https://spb.ve-zy.ru',
        'https://sputnik.by',
        'https://star-bus.ru',
        'https://star-pro.ru',
        'https://stolichki.ru',
        'https://stopnazi.xyz',
        'https://stormwall.pro',
        'https://stroi.gov.ru',
        'https://t.rasp.yandex.ru',
        'https://taf.by',
        'https://taksi-moskva24.ru',
        'https://tass.ru',
        'https://taxi-punkt.ru',
        'https://taxi.yandex.ru',
        'https://taxicel.ru',
        'https://taximaxim.ru',
        'https://taximoskvi.ru',
        'https://taxireal.ru',
        'https://taxuber.ru',
        'https://tekfortis.ru',
        'https://ticketbus.by',
        'https://tickets.by',
        'https://tk-soyz.ru',
        'https://to-group.ru',
        'https://tochka-na-karte.ru',
        'https://tochkamarket.ru',
        'https://topwar.ru',
        'https://trade.etpgpb.ru',
        'https://tradetaxi.ru',
        'https://transport.marshruty.ru',
        'https://transtrek.ru',
        'https://tranzit-auto.ru',
        'https://travel-kassa.ru',
        'https://travel.yandex.ru/жд/билеты',
        'https://travelask.ru',
        'https://tvoydom.ru',
        'https://tvzvezda.ru',
        'https://uc-osnovanie.ru',
        'https://uc-osnovanie.ru/',
        'https://ul.su',
        'https://ulgov.ru',
        'https://ultra-pereezd.ru',
        'https://uniticket.by',
        'https://uralpress.ru',
        'https://utsr.ru',
        'https://vcs.rostec.ru/',
        'https://vesti-k.ru',
        'https://vgtrk.ru',
        'https://vks3.rostec.ru/',
        'https://vkusvill.ru',
        'https://vlavke.ru',
        'https://volgaline34.ru',
        'https://vozovoz.ru',
        'https://vrn-taxi.ru',
        'https://vse-taxi.com',
        'https://vseapteki.ru',
        'https://vsoloviev.ru',
        'https://wagnera.ru',
        'https://wblitztrans.ru',
        'https://wek.ru',
        'https://work-zilla.com',
        'https://www.1tv.ru',
        'https://www.едем.рф',
        'https://www.жд-билеты.сайт',
        'https://www.admoblkaluga.ru',
        'https://www.aeroflot.com/ru-ru',
        'https://www.aeroflot.ru',
        'https://www.akbars.ru',
        'https://www.asna.ru/',
        'https://www.astrobl.ru',
        'https://www.ata.su',
        'https://www.aton.ru',
        'https://www.auchan.ru',
        'https://www.autovokzal.org',
        'https://www.avito.ru',
        'https://www.avokzal.ru',
        'https://www.avtotransit.ru',
        'https://www.avtovokzaly.ru',
        'https://www.baikalsr.ru',
        'https://www.bfm.ru',
        'https://www.blablacar.ru',
        'https://www.busradar.ru',
        'https://www.bustime.ru',
        'https://www.crimea.kp.ru',
        'https://www.delivery-club.ru',
        'https://www.dellin.ru',
        'https://www.donland.ru',
        'https://www.eapteka.ru',
        'https://www.eurosib.ru',
        'https://www.evraz.com/ru',
        'https://www.expresstorussia.com',
        'https://www.fl.ru',
        'https://www.flixbus.ru',
        'https://www.flydex.ru',
        'https://www.gazeta.ru',
        'https://www.gazprom.ru',
        'https://www.gazprombank.ru',
        'https://www.gosuslugi.ru',
        'https://www.gruso-perevozchik.ru',
        'https://www.ingosinvest.ru',
        'https://www.intercars-tickets.com',
        'https://www.interfax.ru',
        'https://www.jde.ru',
        'https://www.kartoteka.ru/',
        'https://www.km.ru',
        'https://www.kommersant.ru',
        'https://www.lkw-walter.com',
        'https://www.mchs.gov.ru',
        'https://www.metalloinvest.com',
        'https://www.mirage.ru/',
        'https://www.mk.ru',
        'https://www.mn.ru',
        'https://www.mos.ru/uslugi',
        'https://www.moscowbus.ru',
        'https://www.mosgortrans.ru',
        'https://www.mts.by',
        'https://www.nalog.gov.ru',
        'https://www.ng.ru',
        'https://www.nlmk.com',
        'https://www.nornickel.com',
        'https://www.nspk.ru',
        'https://www.okeydostavka.ru',
        'https://www.onetwotrip.com/ржд-билеты/онлайн',
        'https://www.open.ru',
        'https://www.ozon.ru',
        'https://www.perekrestok.ru',
        'https://www.perevozim.ru',
        'https://www.pochta.ru',
        'https://www.pochtabank.ru',
        'https://www.poezd.ru',
        'https://www.polymetalinternational.com/ru',
        'https://www.pravmir.ru',
        'https://www.psbank.ru',
        'https://www.railcontinent.ru',
        'https://www.rbc.ru',
        'https://www.rigla.ru',
        'https://www.rncb.ru',
        'https://www.rshb.ru',
        'https://www.rt.com',
        'https://www.russianhighways.ru',
        'https://www.rzd.ru',
        'https://www.s7.ru',
        'https://www.sberbank.ru/en/individualclients',
        'https://www.sberbank.ru/ru/person',
        'https://www.severstal.com',
        'https://www.sibur.ru',
        'https://www.sobyanin.ru',
        'https://www.stavregion.ru',
        'https://www.surgutneftegas.ru',
        'https://www.tatneft.ru',
        'https://www.taxi-ritm.ru',
        'https://www.tinkoff.ru',
        'https://www.tinkoff.ru/invest/account',
        'https://www.tk-tat.ru',
        'https://www.tkbbank.ru',
        'https://www.tktl.ru',
        'https://www.tlkregion.ru',
        'https://www.tmk-group.ru',
        'https://www.tourister.ru',
        'https://www.trado.ru',
        'https://www.trud.ru',
        'https://www.tutu.ru',
        'https://www.tutu.travel',
        'https://www.ufs-online.ru',
        'https://www.uralkali.com/ru',
        'https://www.utkonos.ru',
        'https://www.vbr.ru/banki/catalog',
        'https://www.vbr.ru/goto?externalLink=https://alfabank.ru/make-money/investments',
        'https://www.vbr.ru/goto?externalLink=https://broker.ru',
        'https://www.vbrr.ru',
        'https://www.vedomosti.ru',
        'https://www.vesti.ru',
        'https://www.vezetvsem.ru',
        'https://www.vneshtrans.com',
        'https://www.volgograd.ru',
        'https://www.vtb.ru',
        'https://www.vtbcapital-pr.ru',
        'https://www.yabisiel.ru',
        'https://xaknet.team/img/logo.png',
        'https://xn----7sba7aa0aahdfiedhiadh3w.xn--p1ai',
        'https://xn----8sbahcht2a7aqpmh.xn--p1ai',
        'https://xn----9sb2ahmle.xn--p1ai',
        'https://xn--b1acccabnir5ahgabbrk.xn--80adxhks',
        'https://xn--d1abb2a.xn--p1ai',
        'https://ya.ru',
        'https://yandex.by',
        'https://yandex.ru',
        'https://zakazaka.ru',
        'https://zakupki.gov.ru',
        'https://zd-bileti.ru',
        'https://zdorov.ru',
        'https://zhd-moskva.ru',
        'https://zhd.online',
        'https://zhdalians.ru',
        'https://zhdbilet.com',
        'https://zws.moscow',
        'https://solar-staff.com',
        'https://perfluence.net',
    ];

    /**
     * Run the database seeds.
     * *TIP: Use `php artisan migrate:fresh --seed` to rebuild all targets from scratch
     *
     * @return void
     */
    public function run()
    {
        foreach (array_unique($this->_TARGETS) as $target) {
            if (!Target::where('url', '=', $target)->exists()) {
                Target::create(['url' => $target]);
            }
        }
        $this->command->info(count($this->_TARGETS) . ' targets prepared.');
    }
}
