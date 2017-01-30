# wechat_html5_animate
##微信上的HTML5动画，类似易企秀效果。

##制作HTML5动画的动机
微信上收到了一个可以编辑祝福语的拜年H5，故想尝试一下如何制作。


##制作工具
Adobe Edge Animate CC
Brackets
XAMPP
PHPStorm 10
Adobe Photoshop CS6

##第一天
知道H5动画原理，一种是在CANVAS上绘图，一种是对HTML标签进行ＣＳＳ｜transform换行，考虑兼容性，还是想寻找后一种的。H5动画也出来一些年头了，所以从寻找H5制作工具入手。百度了几个关键字（内心很想GOOGLE，可是我是天国人），只要坚持还是能找到了一些干货，这个帖子对我启发比较大，在此感谢！
http://www.cnblogs.com/kenkofox/p/3761061.html
里面介绍了不少工具，因为只想选择能够生成DIV+CSS的工具，所以试用较深的有ADOBE EDGE ANIMATE CC和HIPPO，其它都是走马观花。
因为HIPPO没有MOVIE CLIP的功能（可能是我没有找到），估选择了ADOBE的产品，我可以说是ADOBE的终于粉丝，其大部分产品都会玩，可以追溯到FLASH MX当时还不是ADOBE的产品- -。
按照帖子里的操作，制作了一个简单的动画，开始觉得很难操作，坚持使用，习惯和熟悉之后，感觉是在FLASH基础上有所创新，更高效。

##第二天
准备实现H5动画的翻页效果，看了一下CC里果然和FLASH一样是有脚本语言的，语言自然是JS，做了一定的封装，集成了JQUERY。有TOURCHSTART、TOURCHEND、TOURCHMOVE等事件，但自己再实现一遍翻页，感觉有点重复造轮，估去了一套OSCHINA，还是有收获的。
找到了这个
http://www.oschina.net/p/browserswipe-js

##第三天
动画和翻页都实现好了，现在就差在微信中自由分享了。
下载微信中的JS-SDK的DEMO基本搞定。
http://mp.weixin.qq.com/wiki/11/74ad127cc054f6b80759c40f77ec03db.html

## 更新说明
2017-01-30 增加gh-pages效果预览界面 [geek5.cn/wechat_html5_animate](geek5.cn/wechat_html5_animate)