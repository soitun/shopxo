<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2018 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://opensource.org/licenses/mit-license.php )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 多语言设置
// +----------------------------------------------------------------------
$default_lang = MyFileConfig('common_multilingual_admin_default_value', '', 'zh', true);
return [
    // 默认语言
    'default_lang'    => empty($default_lang) ? 'zh' : $default_lang,
];
?>