window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/AtariForumWiki/load.php"});mw.loader.register([["site","0w24jo5",[1]],["site.styles","1djxjsf",[],"site"],["noscript","0chf22k",[],"noscript"],["filepage","1f698ab"],["user.groups","06uvbet",[5]],["user","058kkxv",[6],"user"],["user.styles","0hoz99d",[],"user"],["user.defaults","0g9f1ri"],["user.options","0bhc5ha",[7],"private"],["user.tokens","1t1uogb",[],"private"],["mediawiki.language.data","14i3h1c",[176]],["mediawiki.skinning.elements","1665rxe"],["mediawiki.skinning.content","1qnn5vm"],["mediawiki.skinning.interface","0v3h8as"],["mediawiki.skinning.content.parsoid","1w6ictn"],["mediawiki.skinning.content.externallinks","0cxp5oe"],["jquery.accessKeyLabel","1rfa2mf",[25,133]],["jquery.appear","1kxj59y"],["jquery.async","1a34j74"],["jquery.autoEllipsis","1d3ifqp",[37]],["jquery.badge","1b2ygzo",[173]],["jquery.byteLength","0dt9qt5"],["jquery.byteLimit",
"0ju6bul",[21]],["jquery.checkboxShiftClick","1av2iyg"],["jquery.chosen","04l2c2e"],["jquery.client","1vvrfkj"],["jquery.color","1yvo8fs",[27]],["jquery.colorUtil","0jovqf3"],["jquery.confirmable","1oibfvc",[177]],["jquery.cookie","13s7v5p"],["jquery.expandableField","0p6mld1"],["jquery.farbtastic","0r4stqc",[27]],["jquery.footHovzer","0x97dqx"],["jquery.form","14o46fw"],["jquery.fullscreen","0qiuuxs"],["jquery.getAttrs","1dz4ghb"],["jquery.hidpi","0ck1n51"],["jquery.highlightText","1e36olp",[133]],["jquery.hoverIntent","00g0zsk"],["jquery.i18n","1aktf5h",[175]],["jquery.localize","1netrnb"],["jquery.makeCollapsible","178d973"],["jquery.mockjax","0v7oiy7"],["jquery.mw-jump","0lr67hp"],["jquery.placeholder","0xew0it"],["jquery.qunit","0omt85p"],["jquery.spinner","159bxw3"],["jquery.jStorage","0nfgzu8"],["jquery.suggestions","1k2kuln",[37]],["jquery.tabIndex","190p3xe"],["jquery.tablesorter","1pr3tnc",[133,178]],["jquery.textSelection","16zqyng",[25]],["jquery.throttle-debounce",
"02p3swp"],["jquery.xmldom","15y45ly"],["jquery.tipsy","12q7iuc"],["jquery.ui.core","19hnnjg",[56],"jquery.ui"],["jquery.ui.core.styles","1wzos84",[],"jquery.ui"],["jquery.ui.accordion","0pv3u2d",[55,75],"jquery.ui"],["jquery.ui.autocomplete","09a8694",[64],"jquery.ui"],["jquery.ui.button","1g7q93t",[55,75],"jquery.ui"],["jquery.ui.datepicker","1urjv30",[55],"jquery.ui"],["jquery.ui.dialog","0hfd7mp",[59,62,66,68],"jquery.ui"],["jquery.ui.draggable","1gb98tx",[55,65],"jquery.ui"],["jquery.ui.droppable","0somavk",[62],"jquery.ui"],["jquery.ui.menu","1w5n5ib",[55,66,75],"jquery.ui"],["jquery.ui.mouse","10478a5",[75],"jquery.ui"],["jquery.ui.position","0ie3tgy",[],"jquery.ui"],["jquery.ui.progressbar","1yugoup",[55,75],"jquery.ui"],["jquery.ui.resizable","1jgbnrs",[55,65],"jquery.ui"],["jquery.ui.selectable","132nxy3",[55,65],"jquery.ui"],["jquery.ui.slider","0qa8fpv",[55,65],"jquery.ui"],["jquery.ui.sortable","1a90g6j",[55,65],"jquery.ui"],["jquery.ui.spinner","0s7d5zn",[59],"jquery.ui"]
,["jquery.ui.tabs","04yrdto",[55,75],"jquery.ui"],["jquery.ui.tooltip","007vfks",[55,66,75],"jquery.ui"],["jquery.ui.widget","10wlhcn",[],"jquery.ui"],["jquery.effects.core","0nlhstk",[],"jquery.ui"],["jquery.effects.blind","1w2z0yd",[76],"jquery.ui"],["jquery.effects.bounce","0pch3p7",[76],"jquery.ui"],["jquery.effects.clip","1hsxuwa",[76],"jquery.ui"],["jquery.effects.drop","1pxmepa",[76],"jquery.ui"],["jquery.effects.explode","1renolf",[76],"jquery.ui"],["jquery.effects.fade","1aq406n",[76],"jquery.ui"],["jquery.effects.fold","099kxkr",[76],"jquery.ui"],["jquery.effects.highlight","0c95n1v",[76],"jquery.ui"],["jquery.effects.pulsate","14t5wiv",[76],"jquery.ui"],["jquery.effects.scale","0s28nqv",[76],"jquery.ui"],["jquery.effects.shake","04tvhaw",[76],"jquery.ui"],["jquery.effects.slide","13nslfr",[76],"jquery.ui"],["jquery.effects.transfer","1hbd31v",[76],"jquery.ui"],["json","06uvbet"],["moment","09kmzp7",[173]],["mediawiki.apihelp","0krbm0s"],["mediawiki.template","1hvgfj4"],[
"mediawiki.template.mustache","0uxtvkc",[93]],["mediawiki.template.regexp","0fcfszc",[93]],["mediawiki.apipretty","13em1l2"],["mediawiki.api","15zi839",[150,9]],["mediawiki.api.category","089utbv",[138,97]],["mediawiki.api.edit","1ycfytd",[138,148]],["mediawiki.api.login","0y7q5el",[97]],["mediawiki.api.options","1wrobjr",[97]],["mediawiki.api.parse","1tagrj9",[97]],["mediawiki.api.upload","0k67bjt",[99]],["mediawiki.api.user","1aue1it",[97]],["mediawiki.api.watch","19fxxa2",[97]],["mediawiki.api.messages","0xh50il",[97]],["mediawiki.api.rollback","11xdzcv",[97]],["mediawiki.content.json","0okfl78"],["mediawiki.confirmCloseWindow","11e1zo0"],["mediawiki.debug","0hhdewy",[32]],["mediawiki.diff.styles","0dzmrfs"],["mediawiki.feedback","1dtqab1",[138,127,273]],["mediawiki.feedlink","1jac1o5"],["mediawiki.filewarning","06b7mrb",[269]],["mediawiki.ForeignApi","0kkn8pb",[116]],["mediawiki.ForeignApi.core","1ukiv8f",[97,265]],["mediawiki.helplink","1li0qzj"],["mediawiki.hidpi","1rx6q2j",[36],
null,null,"return'srcset'in new Image();"],["mediawiki.hlist","0iurgyg"],["mediawiki.htmlform","1f69vpf",[22,133]],["mediawiki.htmlform.checker","0ztch8e",[52]],["mediawiki.htmlform.ooui","037u78q",[269]],["mediawiki.htmlform.styles","0thws5o"],["mediawiki.htmlform.ooui.styles","0uwvx07"],["mediawiki.icon","0zmv37k"],["mediawiki.inspect","0o2kaa8",[21,133]],["mediawiki.messagePoster","12u7ao6",[115]],["mediawiki.messagePoster.wikitext","0t3yz0v",[99,127]],["mediawiki.notification","1fd0ypf",[150]],["mediawiki.notify","13daocd"],["mediawiki.notification.convertmessagebox","1m1e9qw",[129]],["mediawiki.notification.convertmessagebox.styles","1k97qsh"],["mediawiki.RegExp","1epu0at"],["mediawiki.pager.tablePager","1mhnvyn"],["mediawiki.searchSuggest","1od08z7",[35,48,97]],["mediawiki.sectionAnchor","1yw4n48"],["mediawiki.storage","021fp8w"],["mediawiki.Title","1sme3y9",[21,150]],["mediawiki.Upload","13wykbd",[103]],["mediawiki.ForeignUpload","0p3cr97",[115,139]],[
"mediawiki.ForeignStructuredUpload.config","0msydx9"],["mediawiki.ForeignStructuredUpload","16mdgj8",[141,140]],["mediawiki.Upload.Dialog","0d3n024",[144]],["mediawiki.Upload.BookletLayout","0gfbc4h",[139,177,262,91,271,273]],["mediawiki.ForeignStructuredUpload.BookletLayout","0jxrlan",[142,144,106,181,254,249]],["mediawiki.toc","1r415mv",[154]],["mediawiki.Uri","09e5iwm",[150,95]],["mediawiki.user","0oooplb",[104,137,8]],["mediawiki.userSuggest","0a0rz2g",[48,97]],["mediawiki.util","0153wcw",[16,130]],["mediawiki.viewport","1kfcvxi"],["mediawiki.checkboxtoggle","08hswo8"],["mediawiki.checkboxtoggle.styles","1ffzwz6"],["mediawiki.cookie","0rbs98f",[29]],["mediawiki.toolbar","1m0i676",[51]],["mediawiki.experiments","08xrzlg"],["mediawiki.action.edit","05eegnj",[51,158,97,251]],["mediawiki.action.edit.styles","0q8ix2v"],["mediawiki.action.edit.collapsibleFooter","07rd8fm",[41,125,137]],["mediawiki.action.edit.preview","0pewnb4",[33,46,51,97,111,177,269]],["mediawiki.action.history",
"1stzpx3"],["mediawiki.action.history.styles","0tg9tvt"],["mediawiki.action.history.diff","0dzmrfs"],["mediawiki.action.view.dblClickEdit","1ssaut6",[150,8]],["mediawiki.action.view.metadata","1yow6qy"],["mediawiki.action.view.categoryPage.styles","16rm0ok"],["mediawiki.action.view.postEdit","192q1s7",[177,129]],["mediawiki.action.view.redirect","00d45si",[25]],["mediawiki.action.view.redirectPage","1d2pgah"],["mediawiki.action.view.rightClickEdit","1xbwd5q"],["mediawiki.action.edit.editWarning","0vynv83",[51,109,177]],["mediawiki.action.view.filepage","1ihgaoa"],["mediawiki.language","16vfhb0",[174,10]],["mediawiki.cldr","0o1hxru",[175]],["mediawiki.libs.pluralruleparser","0cpurlg"],["mediawiki.language.init","0cxjhjj"],["mediawiki.jqueryMsg","1ugpjn8",[173,150,8]],["mediawiki.language.months","0voy1do",[173]],["mediawiki.language.names","02wxp1n",[176]],["mediawiki.language.specialCharacters","0qem0v5",[173]],["mediawiki.libs.jpegmeta","1g068x5"],["mediawiki.page.gallery","1jvyive",[
52,183]],["mediawiki.page.gallery.styles","0fh6bkg"],["mediawiki.page.gallery.slideshow","1ft4722",[138,97,271,286]],["mediawiki.page.ready","0i5qqmb",[16,23,43]],["mediawiki.page.startup","0hp4wk8"],["mediawiki.page.patrol.ajax","1ud736q",[46,138,97]],["mediawiki.page.watch.ajax","19xh7dd",[138,105,177,186]],["mediawiki.page.rollback","03bq8p2",[46,107]],["mediawiki.page.image.pagination","1stdyra",[46,150]],["mediawiki.rcfilters.filters.base.styles","1cp1i94"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","0o8lezl"],["mediawiki.rcfilters.filters.dm","1ft5kcj",[21,147,101,148,265]],["mediawiki.rcfilters.filters.ui","1w5krut",[41,193,268,280,282,284,286]],["mediawiki.special","1rjjba0"],["mediawiki.special.apisandbox.styles","0990kb8"],["mediawiki.special.apisandbox","0ivge3b",[41,97,177,252,268]],["mediawiki.special.block","1kym2f8",[120,150]],["mediawiki.special.changecredentials.js","095p59b",[97,122]],["mediawiki.special.changeslist","0h4awsx"],[
"mediawiki.special.changeslist.enhanced","1a5cy6c"],["mediawiki.special.changeslist.legend","16itg68"],["mediawiki.special.changeslist.legend.js","1756sev",[41,154]],["mediawiki.special.changeslist.visitedstatus","1m2gkrg"],["mediawiki.special.comparepages.styles","1y3ltml"],["mediawiki.special.contributions","0cmq7em",[177,249]],["mediawiki.special.edittags","0v7cmwc",[24]],["mediawiki.special.edittags.styles","1tbbyxa"],["mediawiki.special.import","17wbptp"],["mediawiki.special.movePage","00kco4t",[247,251]],["mediawiki.special.movePage.styles","02bvhk2"],["mediawiki.special.pageLanguage","1c6f9vg",[269]],["mediawiki.special.pagesWithProp","013s35f"],["mediawiki.special.preferences","02jb0lo",[109,173,131]],["mediawiki.special.preferences.styles","0rlv5px"],["mediawiki.special.recentchanges","1t8sx5d"],["mediawiki.special.search","0dwzl9n",[260]],["mediawiki.special.search.commonsInterwikiWidget","09s3du0",[147,97,177]],["mediawiki.special.search.interwikiwidget.styles","0wys3c3"],[
"mediawiki.special.search.styles","18mr49s"],["mediawiki.special.undelete","159kwkr"],["mediawiki.special.unwatchedPages","0qyvshx",[138,105]],["mediawiki.special.upload","1oc71cj",[46,138,97,109,177,181,224,93]],["mediawiki.special.upload.styles","1ewuaks"],["mediawiki.special.userlogin.common.styles","10iggkf"],["mediawiki.special.userlogin.login.styles","0qqkhn8"],["mediawiki.special.userlogin.signup.js","16m7orp",[97,121,177]],["mediawiki.special.userlogin.signup.styles","1wjfk6r"],["mediawiki.special.userrights","0hbczvr",[131]],["mediawiki.special.watchlist","11kvt79",[138,105,177,269]],["mediawiki.special.watchlist.styles","1orivaj"],["mediawiki.special.version","0c6opp8"],["mediawiki.legacy.config","10h8v1y"],["mediawiki.legacy.commonPrint","0ftgub7"],["mediawiki.legacy.protect","0ziq48d",[22]],["mediawiki.legacy.shared","1gpsyra"],["mediawiki.legacy.oldshared","1cx2uwz"],["mediawiki.legacy.wikibits","1s9a9wo"],["mediawiki.ui","19vxwnw"],["mediawiki.ui.checkbox","1gdho9l"],[
"mediawiki.ui.radio","1o76ddd"],["mediawiki.ui.anchor","15rfsq2"],["mediawiki.ui.button","0t36taj"],["mediawiki.ui.input","1ykmnws"],["mediawiki.ui.icon","0nqea96"],["mediawiki.ui.text","1wa215f"],["mediawiki.widgets","0lmhus3",[22,37,138,97,248,271]],["mediawiki.widgets.styles","0ytf1iy"],["mediawiki.widgets.DateInputWidget","14eje9p",[250,91,271]],["mediawiki.widgets.DateInputWidget.styles","0r08zjf"],["mediawiki.widgets.visibleByteLimit","0it8ef8",[22,269]],["mediawiki.widgets.datetime","06m3dkn",[269,287,288]],["mediawiki.widgets.CategorySelector","06uvbet",[254]],["mediawiki.widgets.CategoryMultiselectWidget","0ab10eo",[115,138,271]],["mediawiki.widgets.SelectWithInputWidget","0mqe86r",[256,271]],["mediawiki.widgets.SelectWithInputWidget.styles","0wyddak"],["mediawiki.widgets.MediaSearch","1oiulyf",[115,138,271]],["mediawiki.widgets.UserInputWidget","0syxc9d",[97,271]],["mediawiki.widgets.UsersMultiselectWidget","06yf86k",[97,271]],["mediawiki.widgets.SearchInputWidget","1ebzl7l",
[135,247]],["mediawiki.widgets.SearchInputWidget.styles","0ziavfy"],["mediawiki.widgets.StashedFileWidget","1lhs7c0",[97,269]],["es5-shim","06uvbet"],["dom-level2-shim","06uvbet"],["oojs","1538nev"],["mediawiki.router","1wu1ifg",[267]],["oojs-router","0h2iovm",[265]],["oojs-ui","06uvbet",[272,271,273]],["oojs-ui-core","0gjvljw",[173,265,270,277,278,283,274,275]],["oojs-ui-core.styles","0cmn862"],["oojs-ui-widgets","0dmak9n",[269,279,287,288]],["oojs-ui-toolbars","1e54qdy",[269,288]],["oojs-ui-windows","0iet1em",[269,288]],["oojs-ui.styles.indicators","1rwd771"],["oojs-ui.styles.textures","0z98su5"],["oojs-ui.styles.icons-accessibility","1ie0pa0"],["oojs-ui.styles.icons-alerts","0rlyy56"],["oojs-ui.styles.icons-content","1dzlbbb"],["oojs-ui.styles.icons-editing-advanced","0b17kjh"],["oojs-ui.styles.icons-editing-core","00pd8ob"],["oojs-ui.styles.icons-editing-list","1wyc7rg"],["oojs-ui.styles.icons-editing-styling","0at8pe3"],["oojs-ui.styles.icons-interactions","1q2mkj0"],[
"oojs-ui.styles.icons-layout","0jga87c"],["oojs-ui.styles.icons-location","0up4taf"],["oojs-ui.styles.icons-media","0c3a55w"],["oojs-ui.styles.icons-moderation","0nmhrdt"],["oojs-ui.styles.icons-movement","10fj8p7"],["oojs-ui.styles.icons-user","0jqapt7"],["oojs-ui.styles.icons-wikimedia","0iecw9h"],["skins.cologneblue","0bp9aaq"],["skins.modern","0okw6ye"],["skins.monobook.styles","0zfdbdk"],["skins.vector.styles","1k6g6ya"],["skins.vector.styles.experimental.print","1fwnix2"],["skins.vector.styles.responsive","1v4krpm"],["skins.vector.js","05xmlxa",[49,52]]]);;mw.config.set({"wgLoadScript":"/AtariForumWiki/load.php","debug":!1,"skin":"vector","stylepath":"/AtariForumWiki/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/AtariForumWiki/index.php/$1","wgScriptPath":"/AtariForumWiki","wgScriptExtension":".php","wgScript":"/AtariForumWiki/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://temlib.org","wgServerName":"temlib.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.30.0","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"AtariForumWiki","5":"AtariForumWiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":
"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"atariforumwiki":4,"atariforumwiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"AtariForumWiki","wgDBname":"damin_mw19559","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/AtariForumWiki/extensions","wgCookiePrefix":"damin_mw19559_mwvx_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF",
"wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/AtariForumWiki/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=0g5bif2";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());
