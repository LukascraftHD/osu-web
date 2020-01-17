<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'support' => [
        'convinced' => [
            'title' => '可以可以，買買買！',
            'support' => '支持 osu!',
            'gift' => '或者以禮物方式贈送給其它玩家',
            'instructions' => '點擊愛心前往 osu! 商店',
        ],
        'why-support' => [
            'title' => '我為什麼要支持osu!? 錢都花到哪兒了?',

            'team' => [
                'title' => '支持團隊',
                'description' => 'Osu! 是由一小群團隊進行開發和營運。您的贊助可以幫助團隊活久一點。',
            ],
            'infra' => [
                'title' => '伺服器基礎設施',
                'description' => '捐款用於網站營運，多人連線服務，在線排行榜，等等。',
            ],
            'featured-artists' => [
                'title' => '精選藝術家',
                'description' => '在你的支持下，我們可以與更多優秀的藝術家合作，並為 osu! 帶來更多出色的音樂',
                'link_text' => '查看當前列表 &raquo;',
            ],
            'ads' => [
                'title' => '維持 osu! 自給自足',
                'description' => '你的幫助可以讓遊戲保持獨立並遠離廣告，不受外部贊助商的控制。',
            ],
            'tournaments' => [
                'title' => '官方錦標賽',
                'description' => '為官方 osu! 世界杯籌備營運資金（及獎勵）。',
                'link_text' => '探索比賽 &raquo;',
            ],
            'bounty-program' => [
                'title' => '開源賞金計劃',
                'description' => '',
                'link_text' => '了解更多 &raquo;',
            ],
        ],
        'perks' => [
            'title' => '我能得到什麼？',
            'osu_direct' => [
                'title' => 'osu!direct',
                'description' => '在遊戲內提供圖譜快速下載與搜尋。',
            ],

            'friend_ranking' => [
                'title' => '好友排行榜',
                'description' => "",
            ],

            'country_ranking' => [
                'title' => '國家排行榜',
                'description' => '',
            ],

            'mod_filtering' => [
                'title' => '按 Mods 篩選',
                'description' => '',
            ],

            'auto_downloads' => [
                'title' => '自動下載',
                'description' => '當多人遊戲與觀看玩家無圖譜時，osu! 會自動下載！',
            ],

            'upload_more' => [
                'title' => '上傳更多圖譜',
                'description' => '做圖者上傳待批准的圖譜上限增加到 10 張。',
            ],

            'early_access' => [
                'title' => '搶先體驗',
                'description' => '搶先體驗正在測試中的新功能！',
            ],

            'customisation' => [
                'title' => '客製化',
                'description' => "客製化您的頁面。",
            ],

            'beatmap_filters' => [
                'title' => '譜面篩選器',
                'description' => '更多方面的去篩選譜面。',
            ],

            'yellow_fellow' => [
                'title' => '高亮用戶名',
                'description' => '聊天時，用戶名會變成亮黃色。',
            ],

            'speedy_downloads' => [
                'title' => '高速下載',
                'description' => '更快的下載速度，尤其是使用 osu!direct 時。',
            ],

            'change_username' => [
                'title' => '修改用戶名',
                'description' => '修改用戶名而不需要支付費用（最多 1 次）。',
            ],

            'skinnables' => [
                'title' => '更多的定製',
                'description' => '自定義更多的遊戲界面元素，例如主畫面的背景。',
            ],

            'feature_votes' => [
                'title' => '新特性投票',
                'description' => '為新特性請求投票（每月 2 票）。',
            ],

            'sort_options' => [
                'title' => '排名',
                'description' => '查看排名時可按 國家/好友/所選MOD 進行排名。',
            ],

            'more_favourites' => [
                'title' => '更多收藏',
                'description' => '',
            ],
            'more_friends' => [
                'title' => '更多好友',
                'description' => '',
            ],
            'more_beatmaps' => [
                'title' => '上載更多圖譜',
                'description' => '',
            ],
            'friend_filtering' => [
                'title' => '好友排行榜',
                'description' => '',
            ],

        ],
        'supporter_status' => [
            'contribution' => '感謝您一直以來的支持！你已經捐贈了 :dollars 並購買了 :tags 次贊助者標籤！',
            'gifted' => "您已經捐贈了 :giftedTags 次贊助者標籤（花費了 :giftedDollars ），真慷慨啊！",
            'not_yet' => "您還沒有贊助者標籤 :(",
            'valid_until' => '您的贊助者標籤將在 :date 到期',
            'was_valid_until' => '您的贊助者標籤已於 :date 到期',
        ],
    ],
];
