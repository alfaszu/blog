<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * zh_TW.php
 * Author     : hran,hewro
 * Date       : 2017/4/29
 * Version    : 1.0
 * Description: English version
 */

class Lang_zh_TW extends Lang{
    /**
    * @return string 返回语言名称
    */
    public function name(){
        return "繁体中文";
    }

    /**
    * @return array 返回包含翻译文本的数组
    */
    public function translated(){
        return array(
            'zh-cmn-Hans' => 'zh-cmn-Hant',
            

            /*首页 index.php */
            '早上好，永远年轻，永远热泪盈眶' => '早上好，永遠年輕，永遠熱淚盈眶',
            '下午好，是时候打个盹了' => '下午好，是時候打個盹了',
            '晚上好，注意早点休息' => '晚上好，注意早點休息',
            '早上好，' => '早上好，',
            '中午好，' => '中午好，',
            '晚上好，' => '晚上好，',
            '文章RSS' => '文章RSS',
            '评论RSS' => '評論RSS',
            '导航' => '導航',
            '首页' => '首頁',
            '组成' => '組成',
            '分类' => '分類',
            '页面' => '頁面',
            '友链' => '友鏈',
            '输入关键词搜索…' => '輸入關鍵詞搜索…',
            '闲言碎语' => '閒言碎語',
            '登录' => '登錄',
            '后台管理' => '後台管理',
            '退出' => '退出',
            '用户名' => '用戶名',
            '密码' => '密碼',
            '登录中' => '登錄中',
            '热门文章' => '熱門文章',
            '最新评论' => '最新評論',
            '随机文章' => '隨機文章',
            '评论详情' => '評論詳情',
            '详情' => '詳情',
            '随机文章' => '隨機文章',
            '分类' => '分類',
            '标签云' => '標籤雲',
            '文章目录' => '文章目錄',
            '设置' => '設置',
            '重置' => '重置',
            '固定头部' => '固定頭部',
            '固定导航' => '固定導航',
            '折叠导航' => '折疊導航',
            '置顶导航' => '置頂導航',
            '盒子模型' => '盒子模型',
            '恢复默认值' => '恢復默認值',


            /*评论 Comments*/
            '暂无评论' => '暫無評論',
            '1 条评论' => '1 條評論',
            '%d 条评论' => '%d 條評論',
            '条评论' => '條評論',
            '阅读: %d' => '閱讀: %d',
            '次浏览' => '次瀏覽',
            '必须填写昵称或姓名' => '必須填寫暱稱或姓名',
            '必须填写电子邮箱地址' => '必須填寫電子郵箱地址',
            '邮箱地址不合法' => '郵箱地址不合法',
            '必须填写评论内容' => '必須填寫評論內容',
            '提交失败，请重试！' => '提交失敗，請重試！',
            '提交失败,您的输入内容不符合规则！' => '提交失敗,您的輸入內容不符合規則！',
            '在这里输入你的评论...（Ctrl/Control + Enter 快捷提交）' => '在這裡輸入你的評論...（Ctrl/Control + Enter 快捷提交）',
            '发表评论' => '發表評論',
            '评论' => '評論',
            '欢迎' => '歡迎',
            '归来' => '歸來',
            '名称' => '名稱',
            '邮箱' => '郵箱',
            '网址' => '網址',
            '姓名或昵称' => '姓名或暱稱',
            '网站或博客' => '網站或博客',
            '提交中' => '提交中',
            '此处评论已关闭' => '此處評論已關閉',
            '说点什么吧……' => '說點什麼吧……',
            '评论通知'=> '評論通知',
            '登录通知' => '登錄通知',
            
            /* 时光机页面 */
            '我的动态' => '我的動態',
            '联系方式' => '聯繫方式',
            '外观设置——输入email地址' => '外觀設置——輸入email地址',
            '外观设置——输入QQ号码' => '外觀設置——輸入QQ號碼',
            '外观设置——输入微博ID' => '外觀設置——輸入微博ID',
            '外观设置——输入网易云音乐ID' => '外觀設置——輸入網易云音樂ID',
            '网易云音乐' => '網易云音樂',
            '关于我' => '關於我',
            'Y 年 m 月 d 日 h 时 i 分 A' => 'Y 年 m 月 d 日 h 時 i 分 A',
            '作者' => '作者',
            '返回首页' => '返回首頁',
            '没有找到搜索结果，请尝试更换关键词。' => '沒有找到搜索結果，請嘗試更換關鍵詞。',
            '正文' => "正文",
            '发表新鲜事' => '發表新鮮事',
            '欢迎你来到「时光机」栏目。在这里你可以记录你的日常和心情。而且，首页的“闲言碎语”栏目会显示最新的三条动态哦！这是默认的第一条说说，当你发布第一条说说的时候，该条动态会自动消失。' => '歡迎你來到「時光機」欄目。在這裡你可以記錄你的日常和心情。而且，首頁的“閒言碎語”欄目會顯示最新的三條動態哦！這是默認的第一條說說，當你發布第一條說說的時候，該條動態會自動消失。',
            '分享到' => '分享到',
            'QQ空间' => 'QQ空間',
            '微博' => '微博',
            '用户名或电子邮箱' => '用戶名或電子郵箱',
            '地址' => '地址',
            '邮箱 (必填,将保密)' => '郵箱 (必填,將保密)',
            '表情' => '表情',

            // 日期格式化'
            '%d 年前'   => '%d 年前',
            '%d 个月前' => '%d 個月前',
            '%d 天前'   => '%d 天前',
            '%d 小时前' => '%d 小時前',
            '%d 分钟前' => '%d 分鐘前',
            '%d 秒前'   => '%d 秒前',
            '1 年前'   => '1 年前',
            '1 个月前' => '1 個月前',
            '1 天前'   => '1 天前',
            '1 小时前' => '1 小時前',
            '1 分钟前' => '1 分鐘前',
            '1 秒前'   => '1 秒前',
            '刚刚' => '剛剛',

            /*文章页面 post/page.php */
            '如果觉得我的文章对你有用，请随意赞赏' => '如果覺得我的文章對你有用，請隨意讚賞',
            '最后修改时间为' => '最後修改時間為',
            '著作权归作者所有' => '著作權歸作者所有',
            '转载请联系作者获得授权，并注明转载地址' => '轉載請聯繫作者獲得授權，並注明轉載地址',
            '赞赏作者' => '讚賞作者',
            '赞赏' => '讚賞',
            '扫一扫支付' => '掃一掃支付',
            '上一篇' => '上一篇',
            '下一篇' => '下一篇',
            '评论审核中' => '評論稽核中',
            '空白占位符' => '空白佔位符',
            '图片占位符' => '圖片佔位符',
            '分类 %s 下的文章' => '分類 %s 下的文章',
            '包含关键字 %s 的文章' => '包含關鍵字 %s 的文章',
            '标签 %s 下的文章' => '標籤 %s 下的文章',
            '%s 发布的文章' =>'%s 發布的文章',
            '此处内容需要评论回复后方可阅读。' => '此處內容需要評論回復後方可閱讀。',

            /*登录退出提交 */
            '必须填写用户名' => '必須填寫用戶名',
            '请填写密码' => '請填寫密碼',
            '登录失败，请重新登录' => '登錄失敗，請重新登錄',
            '用户名或者密码错误，请重试' => '用戶名或者密碼錯誤，請重試',
            '登录成功' => '登錄成功',
            '退出成功，正在刷新当前页面' => '退出成功，正在刷新當前頁面',
            '退出失败，请重试' => '退出失敗，請重試',
            '退出成功' => '退出成功',
            '密码错误，请重试' => '密碼錯誤，請重試',

            /*其他 */
            '返回顶部' => '返回頂部',
            '作者' => '作者',
            '用户' => '用戶',

            /*独立页面*/
            '好! 目前共计 %d 篇日志。 继续努力。' => '好! 目前共計 %d 篇日誌。繼續努力。'
            
            
        );
    }

    /**
    * @return string 返回日期的格式化字符串
    */
    public function dateFormat(){
        return "Y-m-d";
    }
}
